import { Component, OnInit } from '@angular/core';
import { FormGroup, FormControl } from '@angular/forms';
import { FormService } from './form.service';

@Component({
  selector: 'app-form',
  templateUrl: './form.component.html',
  styleUrls: ['./form.component.css'],
  providers: [FormService]
})

/**
 * Composant du formulaire d'ajout d'etudiant.
 */
export class FormComponent implements OnInit {

  constructor(private formService: FormService) { }

  ngOnInit() {
  }

  /** 
     * Appelle le service d'ajout d'etudiant.
     * 
     * Appelle la methode `ajouterEtudiant` du service `form` avec le parametre `etudiant` et recoit la reponse JSON.
     * La reponse est ensuite affichee comme message d'alerte.
     * 
     * @param etudiant  L'objet contenant les informations de l'etudiant à partir du formulaire HTML.
     */
  ajouter(etudiant) {
    
    this.formService.ajouterEtudiant(etudiant).map(data=>
      data).subscribe((reponse)=>{
      if (reponse=="succes") alert("Succes: Etudiant ajouté!");
      if (reponse=="echec") alert("Erreur: Etudiant n'a pas été ajouté!");
      if (reponse=="existe") alert("Erreur: Etudiant exist déja!");
     }); 
  }

}
