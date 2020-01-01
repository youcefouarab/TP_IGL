import { Injectable } from '@angular/core';
import { HttpClient, HttpHeaders } from '@angular/common/http';
import 'rxjs/add/operator/map';

@Injectable({
  providedIn: 'root'
})

/**
 * Service d'ajout d'etudiant.
 */
export class FormService {
    
  constructor(private http:HttpClient) {}

  /**
     * Appelle le service d'ajout d'etudiant.
     * 
     * Effectue une requete POST vers l'API `ajouter` du backend via HTTPClient avec le parametre `etudiant`.
     * 
     * @param etudiant  L'objet contenant les informations de l'etudiant à partir du formulaire HTML et recoit la reponse JSON.
     * 
     * @returns La reponse JSON recue du backend sous forme de texte.
     */
  public ajouterEtudiant(etudiant) {
    
    return this.http.post("http://localhost:8000/api/ajouter",etudiant, { responseType: 'text' });
  }
}
