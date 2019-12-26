import { Injectable } from '@angular/core';
import { HttpClient, HttpHeaders } from '@angular/common/http';
import 'rxjs/add/operator/map';
import { Observable } from 'rxjs';

@Injectable({
  providedIn: 'root'
})
export class NotesService {

  constructor(private http:HttpClient) {
  }

  public getNotes() {
    return this.http.get("http://localhost:8000/api/notes/1", { responseType: 'text' });
  }
}
