import { Injectable } from '@angular/core';
import { HttpClient, HttpHeaders } from '@angular/common/http';
import 'rxjs/add/operator/map';

@Injectable({
  providedIn: 'root'
})
export class FormService {
    
  constructor(private http:HttpClient) {}

  public ajouterEtudiant(obj) {
    return this.http.post("http://localhost:8000/api/ajouter",obj, { responseType: 'text' });
  }
}
