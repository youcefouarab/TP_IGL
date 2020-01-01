import { Injectable } from '@angular/core';
import { HttpClient, HttpHeaders } from '@angular/common/http';
import 'rxjs/add/operator/map';
import { Observable } from 'rxjs';

@Injectable({
  providedIn: 'root'
})

/**
 * Service de recuperation des notes.
 */
export class NotesService {

  constructor(private http:HttpClient) {
  }

  /**
     * Appelle le service de recuperation des notes.
     * 
     * Effectue une requete GET vers l'API `notes` du backend avec le parametre `1` via HTTPClient et recoit la reponse JSON.
     * 
     * @returns La reponse JSON recue du backend sous forme de texte.
     */
  public getNotes() {
    
    return this.http.get("http://localhost:8080/api/notes/1", { responseType: 'text' });
  }
}
