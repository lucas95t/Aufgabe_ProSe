@extends('layouts.default')

@section('title')
Veranstaltungen
@endsection

@section('content')
<div class="container">
    <div class="col-md-12">
        <!--  Um  ein  horizontales  Formular  zu  erhalten,  muss  die  Klasse  "form-horizontal"  im  form-Element  vergeben  werden  -->
        <form  action='verify' method='get' class="form-horizontal" style="text-align:center; margin-top:2em">
            <!--  Jedes  Eingabefeld  muss  in  einem  <div  class="form-group">  liegen  -->
            <div  class="form-group">
                <!--  Die  Angabe  class="control-label col-sm-2"  ist  notwendig,  damit  das  Feld  richtig  ausgerichtet  wird  -->
                <label  for="inputName"  class="control-label col-sm-2">Veranstaltungsname</label>
                <div  class="col-sm-10">
                    <!--  Durch  das  Attribut  placeholder="Platzhalter"  wird  ein  Platzhalter  eingef�gt  -->
                    <input  type="text" name="inputVName"  class="form-control"  placeholder="Name der Veranstaltung"  id="inputVName">
                </div>
            </div><br>
                        <div  class="form-group">
                <!--  Die  Angabe  class="control-label col-sm-2"  ist  notwendig,  damit  das  Feld  richtig  ausgerichtet  wird  -->
                <label  for="inputVName"  class="control-label col-sm-2">Semester</label>
                <div  class="col-sm-10">
                    <!--  Durch  das  Attribut  placeholder="Platzhalter"  wird  ein  Platzhalter  eingef�gt  -->
                    <input  type="text" name="inputSemester"  class="form-control"  placeholder="Semester in dem die Verantstaltung angeboten wird"  id="inputSemester">
                </div>
            </div><br>
                        <div  class="form-group">
                <!--  Die  Angabe  class="control-label col-sm-2"  ist  notwendig,  damit  das  Feld  richtig  ausgerichtet  wird  -->
                <label  for="inputCredits"  class="control-label col-sm-2">ECTS-Punkte</label>
                <div  class="col-sm-10">
                    <!--  Durch  das  Attribut  placeholder="Platzhalter"  wird  ein  Platzhalter  eingef�gt  -->
                    <input  type="text" name="inputCredits"  class="form-control"  placeholder="Anzahl der Credits"  id="inputCredits">
                </div>
            </div><br>
                        <div  class="form-group">
                <!--  Die  Angabe  class="control-label col-sm-2"  ist  notwendig,  damit  das  Feld  richtig  ausgerichtet  wird  -->
                <label  for="inputStart"  class="control-label col-sm-2">Startdatum</label>
                <div  class="col-sm-10">
                    <!--  Durch  das  Attribut  placeholder="Platzhalter"  wird  ein  Platzhalter  eingef�gt  -->
                    <input  type="text" name="inputStart"  class="form-control"  placeholder="Erter Termin der Verantstaltung"  id="inputStart">
                </div>
            </div><br>
                        <div  class="form-group">
                <!--  Die  Angabe  class="control-label col-sm-2"  ist  notwendig,  damit  das  Feld  richtig  ausgerichtet  wird  -->
                <label  for="inputEnde"  class="control-label col-sm-2">Enddatum</label>
                <div  class="col-sm-10">
                    <!--  Durch  das  Attribut  placeholder="Platzhalter"  wird  ein  Platzhalter  eingef�gt  -->
                    <input  type="text" name="inputEnde"  class="form-control"  placeholder="Letzter Termin der Verantstaltung"  id="inputEnde">
                </div>
            </div><br>
                        <div  class="form-group">
                <!--  Die  Angabe  class="control-label col-sm-2"  ist  notwendig,  damit  das  Feld  richtig  ausgerichtet  wird  -->
                <label  for="inputWoche"  class="control-label col-sm-2">w&oumlchentlicher Verlesungstermin</label>
                <div  class="col-sm-10">
                    <!--  Durch  das  Attribut  placeholder="Platzhalter"  wird  ein  Platzhalter  eingef�gt  -->
                    <input  type="text" name="inputWoche"  class="form-control"  placeholder="w&oumlchentlicher Verlesungstermin"  id="inputWoche">
                </div>
            </div><br>
                        <div  class="form-group">
                <!--  Die  Angabe  class="control-label col-sm-2"  ist  notwendig,  damit  das  Feld  richtig  ausgerichtet  wird  -->
                <label  for="inputDozenten"  class="control-label col-sm-2">Dozenten</label>
                <div  class="col-sm-10">
                    <!--  Durch  das  Attribut  placeholder="Platzhalter"  wird  ein  Platzhalter  eingef�gt  -->
                    <input  type="text" name="inputDozenten"  class="form-control"  placeholder="Name der Dozenten"  id="inputDozenten">
                </div>
            </div><br>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <!--  Du  Zuweisung  class="btn  btn-primary  macht  aus  der  Schaltflaeche  einen  blauen  Button  -->
                    <button  class="btn  btn-primary"  type="submit">Hinzufuegen</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection