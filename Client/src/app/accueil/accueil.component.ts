import { Component, OnInit } from '@angular/core';

import { NotesService } from '../notes.service';

@Component({
  selector: 'app-accueil',
  templateUrl: './accueil.component.html',
  styleUrls: ['./accueil.component.css'],
  providers: [NotesService]
})
export class AccueilComponent implements OnInit {

  constructor(private notesService: NotesService) { }

  ngOnInit() {
  }

  
}
