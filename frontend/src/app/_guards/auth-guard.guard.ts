import { inject } from '@angular/core';
import { CanActivateFn, Router } from '@angular/router';
import { tap } from 'rxjs';
import { UserAuthService } from '../_services/user-auth-service.service';

export const authGuard: CanActivateFn = (route, state) => {

  const authService = inject(UserAuthService);
  const router = inject(Router);

  return authService.isAuthenticated$.pipe(
    tap(isAuthenticated => {
      if (!isAuthenticated) {
        // Redirect to home page if not authenticated
        router.navigate(['/home']);
      }
    })
  );
};
