import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { EtudComponent } from './etud.component';

describe('EtudComponent', () => {
  let component: EtudComponent;
  let fixture: ComponentFixture<EtudComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ EtudComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(EtudComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
