@extends('layouts.default')

@section('title')
Termine
@endsection

@section('content')
<div class="container">
    <div class="col-md-12">
        <!--  Um  ein  horizontales  Formular  zu  erhalten,  muss  die  Klasse  "form-horizontal"  im  form-Element  vergeben  werden  -->
        <form  action='verify' method='get' class="form-horizontal" style="text-align:center; margin-top:2em">
            <!--  Jedes  Eingabefeld  muss  in  einem  <div  class="form-group">  liegen  -->
            <div  class="form-group">
                <!--  Die  Angabe  class="control-label col-sm-2"  ist  notwendig,  damit  das  Feld  richtig  ausgerichtet  wird  -->
                <label  for="inputName"  class="control-label col-sm-2">Pruefungsname</label>
                <div  class="col-sm-10">
                    <!--  Durch  das  Attribut  placeholder="Platzhalter"  wird  ein  Platzhalter  eingef�gt  -->
                    <input  type="text" name="inputName"  class="form-control"  placeholder="Name der Pruefung"  id="inputName">
                </div>
            </div>
			<br>
            <div  class="form-group">
                <label  for="inputDate"  class="control-label col-sm-2"> Datum </label>
                <div  class="col-sm-10">
                    <input  type="date" name="inputDate"  class="form-control"  id="inputDate">
                </div>
            </div>
			<br>
            <div  class="form-group">
                <div  class="col-sm-offset-2 col-sm-10">
                    <!--  Bei  der  Checkbox  umgibt  das  label-Element  das  input-Element  der  Checkbox  -->
                    <div class="checkbox">
                        <label>
                            <input  type="checkbox" name="inputWE" id="inputWE">  Wochenende pruefen
                        </label>
                    </div>
                </div>
            </div>
            <br>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <!--  Du  Zuweisung  class="btn  btn-primary  macht  aus  der  Schaltflaeche  einen  blauen  Button  -->
                    <button  class="btn  btn-primary"  type="submit">Pruefen</button>
                </div>
            </div>
        </form>
    </div>
</div>
<br>
<br>
<div style="text-align:center">
      <?php
        // Zeige den eingetragenen Prüfungsnamen
        if (!empty ($name)):
          echo "eingetragenes Prüfungsfach: ", $name;
        endif;
        print_r ('<br>');
        print_r ('<br>');
      ?>
    <br>
      <?php
        // Zeige das eingetragene Datum
        if (!empty ($date)):
          echo "eingetragenes Datum: ", $date;
        endif;
        print_r ('<br>');
        print_r ('<br>');
      ?>
    <br>
      <?php


      // Wenn das eingetragene Datum passt, dann zeige:
      if (!empty ($date)):
        if ( $dateValid == true):
            print_r ('<br>');
            print_r ('<h1>Ihr gewünschtes Prüfungsdatum:</h1>');
            print_r ( $date );
            print_r ('<h1>Termin ist regulär</h1>');
        endif;
      endif;

      // Wenn das eingetragene Datum nicht passt, dann zeige:
      if(!empty ($date)):
        if ( $dateValid == false):
              print_r ('<h1>Termin nicht regulär. Nicht verfügbare Termine:</h1>');
              print_r ('<br>');

              //Ausgabe der verfügbaren Termine
              foreach($termineObj as $key => $item){
                  print_r ('<br>');
                  echo "Semester: ";
                  print_r ( $item['semester'] );
                  print_r ('<br>');
                  print_r ('<br>');
                  echo " von: ";
                  print_r ( $item['start'] );
                  print_r ('<br>');
                  print_r ('<br>');
                  echo " bis: ";
                  print_r ( $item['end'] );
                  print_r ('<br>');
                  print_r ('<br>');
                }
          endif;
        endif;
      ?>
    <br>
    <br>
    <br>
    <br>
</div>
@endsection
