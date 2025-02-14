import { Component } from '@angular/core';
import { NavbarComponent } from "./components/navbar/navbar.component";
import { RegisterComponent } from './register-modal/register-modal.component';

@Component({
  selector: 'app-root',
  standalone: true,
  imports: [NavbarComponent, RegisterComponent],
  templateUrl: './app.component.html',
  styleUrl: './app.component.css'
})
export class AppComponent {
}
