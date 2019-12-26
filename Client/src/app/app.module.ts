import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { HttpClientModule } from '@angular/common/http';
import { FormsModule }   from '@angular/forms';

import { AppComponent } from './app.component';
import { FormComponent } from './form/form.component';
import { BanniereComponent } from './banniere/banniere.component';
import { AdminComponent } from './admin/admin.component';
import { EtudComponent } from './etud/etud.component';
import { NotesComponent } from './notes/notes.component';
import { AccueilComponent } from './accueil/accueil.component';

const appRoutes: Routes = [
  { path: '', component: AccueilComponent },
  { path: 'admin', component: AdminComponent },
  { path: 'etud', component: EtudComponent },
  { path: '**', redirectTo: '' }
];

@NgModule({
  declarations: [
    AppComponent,
    FormComponent,
    BanniereComponent,
    AdminComponent,
    EtudComponent,
    NotesComponent,
    AccueilComponent
  ],
  imports: [
    RouterModule.forRoot(
      appRoutes,
    ),
    BrowserModule,
    HttpClientModule,
    FormsModule
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
