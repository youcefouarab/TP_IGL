import { Component, OnInit } from '@angular/core';

import { NotesService } from '../notes.service';


@Component({
  selector: 'app-notes',
  templateUrl: './notes.component.html',
  styleUrls: ['./notes.component.css'],
  providers: [NotesService]

})

export class NotesComponent implements OnInit {

  constructor(private notesService: NotesService) { }
  
  modules = []; ccs = []; cis = []; cfs = []; moys = [];

  ngOnInit() {
    console.log("here from etud");
    this.notesService.getNotes().map(data=>
      data).subscribe((reponse)=>{
        console.log(reponse);
        interface note {
          module:string;
          cc:number;
          ci:number;
          cf:number;
          moy:number;
        }
        let notes: { string: note[] } = JSON.parse(reponse.toString());
        for(var i=0;i<=7;i++) {
          this.modules[i]=notes[i].module;
          this.ccs[i]=notes[i].cc;
          this.cis[i]=notes[i].ci;
          this.cfs[i]=notes[i].cf;
          this.moys[i]=notes[i].moy;
        }
        console.log(this.modules);
     });
     
  }  

}
