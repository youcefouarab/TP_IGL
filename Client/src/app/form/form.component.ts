import { Component, OnInit } from '@angular/core';
import { FormGroup, FormControl } from '@angular/forms';
import { FormService } from './form.service';

@Component({
  selector: 'app-form',
  templateUrl: './form.component.html',
  styleUrls: ['./form.component.css'],
  providers: [FormService]
})
export class FormComponent implements OnInit {

  constructor(private formService: FormService) { }

  ngOnInit() {
  }

  ajouter(etudiant) {
    //console.log(etudiant);
    
    this.formService.ajouterEtudiant(etudiant).map(data=>
      data).subscribe((reponse)=>{
      //console.log(reponse);
      if (reponse=="succes") alert("Succes: Etudiant ajouté!");
      if (reponse=="fail") alert("Erreur: Etudiant n'a pas été ajouté!");
      if (reponse=="exist") alert("Erreur: Etudiant exist déja!");
     }); 
  }

}
