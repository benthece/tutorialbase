<?php

declare(strict_types=1);

namespace PhpMyAdmin\Tests;

use PhpMyAdmin\Git;

use function file_put_contents;
use function mkdir;
use function mt_getrandmax;
use function random_int;
use function rmdir;
use function sys_get_temp_dir;
use function unlink;

use const DIRECTORY_SEPARATOR;
use const PHP_EOL;

/**
 * @covers \PhpMyAdmin\Git
 * @group git-revision
 */
class GitTest extends AbstractTestCase
{
    /** @var Git */
    protected $object;

    /** @var string */
    protected $testDir;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp(): void
    {
        parent::setUp();
        parent::setProxySettings();
        $this->testDir = sys_get_temp_dir() . DIRECTORY_SEPARATOR
                        . 'gittempdir_' . random_int(0, mt_getrandmax()) . DIRECTORY_SEPARATOR;
        $this->object = new Git(true, $this->testDir);

        unset($_SESSION['git_location']);
        unset($_SESSION['is_git_revision']);
        mkdir($this->testDir);
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown(): void
    {
        rmdir($this->testDir);
        parent::tearDown();
        unset($this->object);
    }

    /**
     * Test for isGitRevision
     */
    public function testIsGitRevision(): void
    {
        $_SESSION['git_location'] = '.cachedgitlocation';
        $_SESSION['is_git_revision'] = true;

        $git_location = '';

        self::assertTrue($this->object->isGitRevision($git_location));

        self::assertFalse($this->object->hasGitInformation());

        self::assertSame('.cachedgitlocation', $git_location);
    }

    /**
     * Test for isGitRevision
     */
    public function testIsGitRevisionSkipped(): void
    {
        $this->object = new Git(false);
        self::assertFalse($this->object->isGitRevision($git_location));
    }

    /**
     * Test for isGitRevision
     *
     * @group git-revision
     */
    public function testIsGitRevisionLocalGitDir(): void
    {
        self::assertFalse($this->object->isGitRevision());

        self::assertFalse($this->object->hasGitInformation());

        unset($_SESSION['git_location']);
        unset($_SESSION['is_git_revision']);

        mkdir($this->testDir . '.git');

        self::assertFalse($this->object->isGitRevision());

        self::assertFalse($this->object->hasGitInformation());

        unset($_SESSION['git_location']);
        unset($_SESSION['is_git_revision']);

        file_put_contents($this->testDir . '.git/config', '');

        self::assertTrue($this->object->isGitRevision());

        self::assertFalse($this->object->hasGitInformation());

        unlink($this->testDir . '.git/config');
        rmdir($this->testDir . '.git');
    }

    /**
     * Test for isGitRevision
     *
     * @group git-revision
     */
    public function testIsGitRevisionExternalGitDir(): void
    {
        file_put_contents($this->testDir . '.git', 'gitdir: ' . $this->testDir . '.customgitdir');
        self::assertFalse($this->object->isGitRevision());

        self::assertFalse($this->object->hasGitInformation());

        unset($_SESSION['git_location']);
        unset($_SESSION['is_git_revision']);

        mkdir($this->testDir . '.customgitdir');

        self::assertTrue($this->object->isGitRevision());

        self::assertFalse($this->object->hasGitInformation());

        unset($_SESSION['git_location']);
        unset($_SESSION['is_git_revision']);

        file_put_contents($this->testDir . '.git', 'random data here');

        self::assertFalse($this->object->isGitRevision());

        self::assertFalse($this->object->hasGitInformation());

        unlink($this->testDir . '.git');
        rmdir($this->testDir . '.customgitdir');
    }

    private function getRevisionInfoTestData(): string
    {
        // phpcs:disable Generic.Files.LineLength.TooLong
        return <<<'PHP'
<?php

declare(strict_types=1);

/**
 * This file is generated by scripts/console.
 *
 * @see \PhpMyAdmin\Command\WriteGitRevisionCommand
 */
return [
    'revision' => 'RELEASE_5_2_1-1086-g97b9895908',
    'revisionHash' => '97b9895908f281b62c985857798281a0b3e5d1e6',
    'revisionUrl' => 'https://github.com/phpmyadmin/phpmyadmin/commit/97b9895908f281b62c985857798281a0b3e5d1e6',
    'branch' => 'QA_5_2',
    'branchUrl' => 'https://github.com/phpmyadmin/phpmyadmin/tree/QA_5_2',
    'message' => 'Currently translated at 61.4% (2105 of 3428 strings)  [ci skip]  Translation: phpMyAdmin/5.2 Translate-URL: https://hosted.weblate.org/projects/phpmyadmin/5-2/fi/ Signed-off-by: John Doe <john.doe@example.org>',
    'author' => [
        'name' => 'John Doe',
        'email' => 'john.doe@example.org',
        'date' => '2024-12-17 09:21:24 +0000',
    ],
    'committer' => [
        'name' => 'Hosted Weblate',
        'email' => 'hosted@weblate.org',
        'date' => '2024-12-18 10:00:32 +0000',
    ],
];

PHP;
        // phpcs:enable
    }

    /**
     * Test for isGitRevision
     *
     * @group git-revision
     */
    public function testIsGitRevisionRevisionInfo(): void
    {
        $gitLocation = '';
        self::assertFalse($this->object->hasGitInformation());
        self::assertFalse($this->object->isGitRevision($gitLocation));
        self::assertFalse($this->object->hasGitInformation());
        self::assertSame('', $gitLocation);

        unset($_SESSION['git_location']);
        unset($_SESSION['is_git_revision']);

        file_put_contents(
            $this->testDir . 'revision-info.php',
            $this->getRevisionInfoTestData()
        );

        self::assertTrue($this->object->isGitRevision($gitLocation));
        self::assertSame('revision-info.php', $gitLocation);
        self::assertNotNull($this->object->checkGitRevision());
        self::assertTrue($this->object->hasGitInformation());

        unlink($this->testDir . 'revision-info.php');
    }

    /**
     * Test for checkGitRevision packs folder
     *
     * @group git-revision
     */
    public function testCheckGitRevisionPacksFolder(): void
    {
        mkdir($this->testDir . '.git');
        file_put_contents($this->testDir . '.git/config', '');

        $commit = $this->object->checkGitRevision();

        self::assertNull($commit);
        self::assertFalse($this->object->hasGitInformation());

        file_put_contents($this->testDir . '.git/HEAD', 'ref: refs/remotes/origin/master');

        $commit = $this->object->checkGitRevision();

        self::assertNull($commit);

        file_put_contents(
            $this->testDir . '.git/packed-refs',
            '# pack-refs with: peeled fully-peeled sorted' . PHP_EOL .
            'c1f2ff2eb0c3fda741f859913fd589379f4e4a8f refs/tags/4.3.10' . PHP_EOL .
            '^6f2e60343b0a324c65f2d1411bf4bd03e114fb98' . PHP_EOL .
            '17bf8b7309919f8ac593d7c563b31472780ee83b refs/remotes/origin/master' . PHP_EOL
        );
        mkdir($this->testDir . '.git/objects/pack', 0777, true);//default = 0777, recursive mode

        $commit = $this->object->checkGitRevision();
        // Delete the dataset
        rmdir($this->testDir . '.git/objects/pack');
        rmdir($this->testDir . '.git/objects');
        unlink($this->testDir . '.git/packed-refs');
        unlink($this->testDir . '.git/HEAD');
        unlink($this->testDir . '.git/config');
        rmdir($this->testDir . '.git');

        if (
            $commit === null
            && ! isset($_SESSION['PMA_VERSION_REMOTECOMMIT_17bf8b7309919f8ac593d7c563b31472780ee83b'])
        ) {
            $this->markTestSkipped('Unable to get remote commit information.');
        }

        self::assertIsArray($commit);
        self::assertArrayHasKey('hash', $commit);
        self::assertSame('17bf8b7309919f8ac593d7c563b31472780ee83b', $commit['hash']);

        self::assertArrayHasKey('branch', $commit);
        self::assertSame('master', $commit['branch']);

        self::assertArrayHasKey('message', $commit);
        self::assertIsString($commit['message']);

        self::assertArrayHasKey('is_remote_commit', $commit);
        self::assertIsBool($commit['is_remote_commit']);

        self::assertArrayHasKey('is_remote_branch', $commit);
        self::assertIsBool($commit['is_remote_branch']);

        self::assertArrayHasKey('author', $commit);
        self::assertIsArray($commit['author']);
        self::assertArrayHasKey('name', $commit['author']);
        self::assertArrayHasKey('email', $commit['author']);
        self::assertArrayHasKey('date', $commit['author']);
        self::assertIsString($commit['author']['name']);
        self::assertIsString($commit['author']['email']);
        self::assertIsString($commit['author']['date']);

        self::assertArrayHasKey('committer', $commit);
        self::assertIsArray($commit['committer']);
        self::assertArrayHasKey('name', $commit['committer']);
        self::assertArrayHasKey('email', $commit['committer']);
        self::assertArrayHasKey('date', $commit['committer']);
        self::assertIsString($commit['committer']['name']);
        self::assertIsString($commit['committer']['email']);
        self::assertIsString($commit['committer']['date']);
    }

    /**
     * Test for checkGitRevision packs folder
     *
     * @group git-revision
     */
    public function testCheckGitRevisionRefFile(): void
    {
        mkdir($this->testDir . '.git');
        file_put_contents($this->testDir . '.git/config', '');

        $commit = $this->object->checkGitRevision();

        self::assertNull($commit);
        self::assertFalse($this->object->hasGitInformation());

        file_put_contents($this->testDir . '.git/HEAD', 'ref: refs/remotes/origin/master');
        mkdir($this->testDir . '.git/refs/remotes/origin', 0777, true);
        file_put_contents(
            $this->testDir . '.git/refs/remotes/origin/master',
            'c1f2ff2eb0c3fda741f859913fd589379f4e4a8f'
        );
        mkdir($this->testDir . '.git/objects/pack', 0777, true);//default = 0777, recursive mode
        $commit = $this->object->checkGitRevision();

        self::assertNull($commit);
        self::assertFalse($this->object->hasGitInformation());

        unlink($this->testDir . '.git/refs/remotes/origin/master');
        rmdir($this->testDir . '.git/refs/remotes/origin');
        rmdir($this->testDir . '.git/refs/remotes');
        rmdir($this->testDir . '.git/refs');
        rmdir($this->testDir . '.git/objects/pack');
        rmdir($this->testDir . '.git/objects');
        unlink($this->testDir . '.git/HEAD');
        unlink($this->testDir . '.git/config');
        rmdir($this->testDir . '.git');
    }

    /**
     * Test for checkGitRevision with packs as file
     *
     * @group git-revision
     */
    public function testCheckGitRevisionPacksFile(): void
    {
        mkdir($this->testDir . '.git');
        file_put_contents($this->testDir . '.git/config', '');

        $commit = $this->object->checkGitRevision();

        self::assertNull($commit);
        self::assertFalse($this->object->hasGitInformation());

        file_put_contents($this->testDir . '.git/HEAD', 'ref: refs/remotes/origin/master');

        $commit = $this->object->checkGitRevision();

        self::assertNull($commit);

        file_put_contents(
            $this->testDir . '.git/packed-refs',
            '# pack-refs with: peeled fully-peeled sorted' . PHP_EOL .
            'c1f2ff2eb0c3fda741f859913fd589379f4e4a8f refs/tags/4.3.10' . PHP_EOL .
            '^6f2e60343b0a324c65f2d1411bf4bd03e114fb98' . PHP_EOL .
            '17bf8b7309919f8ac593d7c563b31472780ee83b refs/remotes/origin/master' . PHP_EOL
        );
        mkdir($this->testDir . '.git/objects/info', 0777, true);
        file_put_contents(
            $this->testDir . '.git/objects/info/packs',
            'P pack-faea49765800da462c70bea555848cc8c7a1c28d.pack' . PHP_EOL .
            '  pack-.pack' . PHP_EOL .
            PHP_EOL .
            'P pack-420568bae521465fd11863bff155a2b2831023.pack' . PHP_EOL .
            PHP_EOL
        );

        $commit = $this->object->checkGitRevision();
        // Delete the dataset
        unlink($this->testDir . '.git/objects/info/packs');
        rmdir($this->testDir . '.git/objects/info');
        rmdir($this->testDir . '.git/objects');
        unlink($this->testDir . '.git/packed-refs');
        unlink($this->testDir . '.git/HEAD');
        unlink($this->testDir . '.git/config');
        rmdir($this->testDir . '.git');

        if (
            $commit === null
            && ! isset($_SESSION['PMA_VERSION_REMOTECOMMIT_17bf8b7309919f8ac593d7c563b31472780ee83b'])
        ) {
            $this->markTestSkipped('Unable to get remote commit information.');
        }

        self::assertIsArray($commit);
        self::assertArrayHasKey('hash', $commit);
        self::assertSame('17bf8b7309919f8ac593d7c563b31472780ee83b', $commit['hash']);

        self::assertArrayHasKey('branch', $commit);
        self::assertSame('master', $commit['branch']);

        self::assertArrayHasKey('message', $commit);
        self::assertIsString($commit['message']);

        self::assertArrayHasKey('is_remote_commit', $commit);
        self::assertIsBool($commit['is_remote_commit']);

        self::assertArrayHasKey('is_remote_branch', $commit);
        self::assertIsBool($commit['is_remote_branch']);

        self::assertArrayHasKey('author', $commit);
        self::assertIsArray($commit['author']);
        self::assertArrayHasKey('name', $commit['author']);
        self::assertArrayHasKey('email', $commit['author']);
        self::assertArrayHasKey('date', $commit['author']);
        self::assertIsString($commit['author']['name']);
        self::assertIsString($commit['author']['email']);
        self::assertIsString($commit['author']['date']);

        self::assertArrayHasKey('committer', $commit);
        self::assertIsArray($commit['committer']);
        self::assertArrayHasKey('name', $commit['committer']);
        self::assertArrayHasKey('email', $commit['committer']);
        self::assertArrayHasKey('date', $commit['committer']);
        self::assertIsString($commit['committer']['name']);
        self::assertIsString($commit['committer']['email']);
        self::assertIsString($commit['committer']['date']);
    }

    /**
     * Test for checkGitRevision with a revision-info.php file
     *
     * @group git-revision
     */
    public function testCheckGitRevisionRevisionInfo(): void
    {
        file_put_contents(
            $this->testDir . 'revision-info.php',
            $this->getRevisionInfoTestData()
        );

        $gitLocation = '';
        self::assertFalse($this->object->hasGitInformation());
        self::assertNotNull($this->object->checkGitRevision());
        self::assertTrue($this->object->hasGitInformation());
        self::assertTrue($this->object->isGitRevision($gitLocation));
        self::assertSame('revision-info.php', $gitLocation);

        $commit = $this->object->checkGitRevision();
        // Delete the dataset
        unlink($this->testDir . 'revision-info.php');

        self::assertNotNull($commit);
        self::assertIsArray($commit);
        self::assertArrayHasKey('hash', $commit);
        self::assertSame('97b9895908f281b62c985857798281a0b3e5d1e6', $commit['hash']);

        self::assertArrayHasKey('branch', $commit);
        self::assertSame('QA_5_2', $commit['branch']);

        self::assertArrayHasKey('message', $commit);
        self::assertIsString($commit['message']);

        self::assertArrayHasKey('is_remote_commit', $commit);
        self::assertIsBool($commit['is_remote_commit']);

        self::assertArrayHasKey('is_remote_branch', $commit);
        self::assertIsBool($commit['is_remote_branch']);

        self::assertArrayHasKey('author', $commit);
        self::assertIsArray($commit['author']);
        self::assertArrayHasKey('name', $commit['author']);
        self::assertArrayHasKey('email', $commit['author']);
        self::assertArrayHasKey('date', $commit['author']);
        self::assertIsString($commit['author']['name']);
        self::assertIsString($commit['author']['email']);
        self::assertIsString($commit['author']['date']);

        self::assertArrayHasKey('committer', $commit);
        self::assertIsArray($commit['committer']);
        self::assertArrayHasKey('name', $commit['committer']);
        self::assertArrayHasKey('email', $commit['committer']);
        self::assertArrayHasKey('date', $commit['committer']);
        self::assertIsString($commit['committer']['name']);
        self::assertIsString($commit['committer']['email']);
        self::assertIsString($commit['committer']['date']);
    }

    /**
     * Test for getGitRevisionInfo with a revision-info.php file
     *
     * @group git-revision
     */
    public function testGetGitRevisionInfo(): void
    {
        self::assertNull($this->object->getGitRevisionInfo());

        file_put_contents(
            $this->testDir . 'revision-info.php',
            $this->getRevisionInfoTestData()
        );

        self::assertSame([
            'revision' => 'RELEASE_5_2_1-1086-g97b9895908',
            'revisionHash' => '97b9895908f281b62c985857798281a0b3e5d1e6',
            'revisionUrl' =>
                'https://github.com/phpmyadmin/phpmyadmin/commit/97b9895908f281b62c985857798281a0b3e5d1e6',
            'branch' => 'QA_5_2',
            'branchUrl' => 'https://github.com/phpmyadmin/phpmyadmin/tree/QA_5_2',
            'message' => 'Currently translated at 61.4% (2105 of 3428 strings) '
                . ' [ci skip]  Translation: phpMyAdmin/5.2'
                . ' Translate-URL: https://hosted.weblate.org/projects/phpmyadmin/5-2/fi/'
                . ' Signed-off-by: John Doe <john.doe@example.org>',
            'author' => [
                'name' => 'John Doe',
                'email' => 'john.doe@example.org',
                'date' => '2024-12-17 09:21:24 +0000',
            ],
            'committer' => [
                'name' => 'Hosted Weblate',
                'email' => 'hosted@weblate.org',
                'date' => '2024-12-18 10:00:32 +0000',
            ],

        ], $this->object->getGitRevisionInfo());

        // Delete the dataset
        unlink($this->testDir . 'revision-info.php');
    }

    /**
     * Test for checkGitRevision
     */
    public function testCheckGitRevisionSkipped(): void
    {
        $this->object = new Git(false);
        $commit = $this->object->checkGitRevision();

        self::assertNull($commit);

        self::assertFalse($this->object->hasGitInformation());
    }

    /**
     * Test for git infos in session
     */
    public function testSessionCacheGitFolder(): void
    {
        $_SESSION['git_location'] = 'customdir/.git';
        $_SESSION['is_git_revision'] = true;
        $gitFolder = '';
        self::assertTrue($this->object->isGitRevision($gitFolder));

        self::assertSame($gitFolder, 'customdir/.git');
    }

    /**
     * Test that git folder is not looked up if cached value is false
     */
    public function testSessionCacheGitFolderNotRevisionNull(): void
    {
        $_SESSION['is_git_revision'] = false;
        $_SESSION['git_location'] = null;
        $gitFolder = 'defaultvaluebyref';
        self::assertFalse($this->object->isGitRevision($gitFolder));

        // Assert that the value is replaced by cached one
        self::assertSame($gitFolder, null);
    }

    /**
     * Test that git folder is not looked up if cached value is false
     */
    public function testSessionCacheGitFolderNotRevisionString(): void
    {
        $_SESSION['is_git_revision'] = false;
        $_SESSION['git_location'] = 'randomdir/.git';
        $gitFolder = 'defaultvaluebyref';
        self::assertFalse($this->object->isGitRevision($gitFolder));

        // Assert that the value is replaced by cached one
        self::assertSame($gitFolder, 'randomdir/.git');
    }

    /**
     * Test that we can extract values from Git objects
     */
    public function testExtractDataFormTextBody(): void
    {
        $extractedData = Git::extractDataFormTextBody(
            [
                'tree ed7fec263e1813887001855ddca9293479289180',
                'parent 90543399991cdb294185f90e8ae1a45e059c31ab',
                'author William Desportes <williamdes@wdes.fr> 1657717000 +0200',
                'committer William Desportes <williamdes@wdes.fr> 1657717000 +0200',
                'gpgsig -----BEGIN PGP SIGNATURE-----',
                ' ',
                ' iQIzBAABCgAdFiEExNkf3872tKPGU\/14kKDvG4JRqIkFAmLOwQgACgkQkKDvG4JR',
                ' qIn8Kg\/+Os5e3bFLEtd3q\/w3e4IfvR64rdadA4IUugd4pJvGqJHleJNBQ8PNqwjR',
                ' 9W0S9PQXAsul0XW5YtuLmBMGFFQDOab2ieix9CVA1w0D7quVQR8uLNb1Gln28NuS',
                ' 6b24Q4cAQlp5uOoKT3ohRBUtGmu8SXF8Q\/5BwPY1AuL1LqY6w6EwSsInPXK1Yq3r',
                ' RShxRXDhonKx3NqoCdRkWmAKkQrztWGGBI7mBG\/\/X0F4hSjsuwdpHBsl6yyri9p2',
                ' bJbyAI+xQ+rBHb0iFIoLbxj6G1EkEmpISl+4980uef24SwMVk9ZOfH8cAgBZ62Mf',
                ' xJ3f99ujhD9dvwCQivOwcEav+fPObiLC0EzfoqZgB7rTQdxUIu7WRpShZGwfuiEv',
                ' sBmvQcnZptYHi0Kk78fdzISCQcPBgCw0gGcv+yLOE3HuQ24B+ncCusYdxyJQqMSc',
                ' pm9vVHpwioufy5c7aBa05K7f2b1AhiZeVpT2t\/rboIYlIhQGY9uRNGX44Qtt6Oeb',
                ' G6aU8O7gS5+Wsj00K+uSvUE\/znxx7Ad0zVuFQGUAhd3cDp9T09+FIr4TOE+3Z4Pk',
                ' PlssVGVBdbaNaI0\/eV6fTa6B0hMH9mhmZhtHLXdsTw5xVySz7by5DZqZldydSFtk',
                ' tVuUPxykK6F0qY79IPBH8Unx8egIlSzKWfP0JpRd+otemBnTKWg=',
                ' =BVHc',
                ' -----END PGP SIGNATURE-----',
                '',
                'Remove ignore config.inc.php for psalm because it fails the CI',
                '',
                'Signed-off-by: William Desportes <williamdes@wdes.fr>',
                '',
            ]
        );

        self::assertSame([
            [
                'name' => 'William Desportes',
                'email' => 'williamdes@wdes.fr',
                'date' => '2022-07-13 14:56:40 +0200',
            ],
            [
                'name' => 'William Desportes',
                'email' => 'williamdes@wdes.fr',
                'date' => '2022-07-13 14:56:40 +0200',
            ],
            'Remove ignore config.inc.php for psalm because '
                . 'it fails the CI  Signed-off-by: William Desportes <williamdes@wdes.fr>',
        ], $extractedData);
    }

    /**
     * Test that we can extract values from Git CLI format
     */
    public function testExtractDataFormTextBodySecondFormat(): void
    {
        $extractedData = Git::extractDataFormTextBody(
            [
                'tree 6857f00bb50360825c7df2c40ad21006c30beca7',
                'parent 1634264816449dc42d17872174f3e8d73d4e36b2',
                'author John Doe <john.doe@example.org> 1734427284',
                'committer Hosted Weblate <hosted@weblate.org> 1734516032',
                '',
                'Translated using Weblate (Finnish)',
                '',
                'Currently translated at 61.4% (2105 of 3428 strings)',
                '',
                '[ci skip]',
                '',
                'Translation: phpMyAdmin/5.2',
                'Translate-URL: https://hosted.weblate.org/projects/phpmyadmin/5-2/fi/',
                'Signed-off-by: John Doe <john.doe@example.org>',
                '',
            ]
        );

        self::assertSame([
            [
                'name' => 'John Doe',
                'email' => 'john.doe@example.org',
                'date' => '2024-12-17 09:21:24 +0000',
            ],
            [
                'name' => 'Hosted Weblate',
                'email' => 'hosted@weblate.org',
                'date' => '2024-12-18 10:00:32 +0000',
            ],
            'Translated using Weblate (Finnish) '
                . ' Currently translated at 61.4% (2105 of 3428 strings) '
                . ' [ci skip]  Translation: phpMyAdmin/5.2 '
                . 'Translate-URL: https://hosted.weblate.org/projects/phpmyadmin/5-2/fi/'
                . ' Signed-off-by: John Doe <john.doe@example.org>',
        ], $extractedData);
    }
}
