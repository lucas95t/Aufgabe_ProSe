@extends('layouts.default')

@section('title')
Start
@endsection

@section('content')
    
    <!--Beginn des Grids-->
    <div class="container-fluid" style="border-bottom: 3px solid; border-top:3px solid">
      <div class="row">
        <div class="col-md-9"> <!--3/4 der Breite für Linke 3 Spalten-->
          <!--Erste Reihe mit Bildern und Aktuelles-->
          <div class="row">
            <div class="col-md-4">
                <img src="https://www.regionalverband-saarbruecken.de/fileadmin/RVSBR/Bildung/Querbilder/b_Schulen_Fotolia_68949462_web_1070x340.jpg" class="img-responsive center-block" width="300" height="300">
            </div>
            <div class="col-md-4">
              <h1 class="text-center">Aktuelles</h1>
            </div>
            <div class="col-md-4" style="border-right: 3px solid">
              <img src="https://www.dentalmagazin.de/wp-content/uploads/2013/09/Fotolia_169-d1955216d94cc05f.jpg" class="img-responsive center-block" width="300" height="300">
            </div>
          </div>
          <!--Zweites Raster Bildung, Lehre, Studium usw.-->
          <div class="row" style="border-right: 3px solid">
            <!--Erste Spalte-->
            <div class="col-md-4">
              <h1 class="text-center">Bildung</h1>
              In anderen Artikeln berichten wir über andere Medien.
              <br>
              <br>
              Ein weiterer Artikel berichtete über andere Medien. Wir berichten.
            </div>
            <!--Zweite Spalte-->
            <div class="col-md-4" style="border-right: 3px solid; border-left: 3px solid">
              <h1 class="text-center">Lehre</h1>
              <img src="https://www.tu-chemnitz.de/mb/studium/bilder/leitbild-lehre.jpg" class="img-responsive center-block" width="300" height="300">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
              labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.
            </div>
            <!--Dritte Spalte-->
            <div class="col-md-4">
              <h1 class="text-center">Studium</h1>
              <p>Breaking News:</p>
              <p>StudentenVZ 0.1 released. Studenten wurden mit der Programmierung beauftragt.
                Wir bleiben dran!</p>
            </div>
          </div>
        </div>
        <div class="col-md-3"> <!--1/4 der Breite für Kalender etc.-->
          <div class="row">
            <div class="col-md-12">
              <!--Kalender -->
              <div class="span12">
      		        <table class="table-condensed table-bordered table-striped">
                    <thead>
                      <tr>
                        <th colspan="7">
                          <span class="btn-group">
                              <a class="btn"><i class="icon-chevron-left"></i></a>
                          	<a class="btn active">May 2018</a>
                          	<a class="btn"><i class="icon-chevron-right"></i></a>
                          </span>
                        </th>
                      </tr>
                      <tr>
                          <th>Su</th>
                          <th>Mo</th>
                          <th>Tu</th>
                          <th>We</th>
                          <th>Th</th>
                          <th>Fr</th>
                          <th>Sa</th>
                      </tr>
                  </thead>
                  <tbody>
                      <tr>
                          <td class="muted">29</td>
                          <td class="muted">30</td>
                          <td class="muted">31</td>
                          <td>1</td>
                          <td>2</td>
                          <td class="btn-primary"><strong>3</strong></td>
                          <td>4</td>
                      </tr>
                      <tr>
                          <td>5</td>
                          <td>6</td>
                          <td>7</td>
                          <td>8</td>
                          <td>9</td>
                          <td>10</td>
                          <td>11</td>
                      </tr>
                      <tr>
                          <td>12</td>
                          <td>13</td>
                          <td>14</td>
                          <td>15</td>
                          <td>16</td>
                          <td>17</td>
                          <td>18</td>
                      </tr>
                      <tr>
                          <td>19</td>
                          <td>20</td>
                          <td>21</td>
                          <td>22</td>
                          <td>23</td>
                          <td>24</td>
                          <td>25</td>
                      </tr>
                      <tr>
                          <td>26</td>
                          <td>27</td>
                          <td>28</td>
                          <td>29</td>
                          <td class="muted">1</td>
                          <td class="muted">2</td>
                          <td class="muted">3</td>
                      </tr>
                  </tbody>
              </table>
          </div>
        </div>
            <!--Notizblock-->
            <div class="col-md-12">
              <div class="postit" style="margin:5px; width:100%; height:100%; padding:25px 15px; float:right; background:#fefabc; background-color: #fefabc; background-image: linear-gradient(150deg, #efec88 0%, #fefabc 100%); border: 1px solid #cccccc; box-shadow: 0px 2px 4px rgba(0,0,0,0.3);">
                <p>Hör auf zu warten,
                <br>denn der perfekte
                <br>Zeitpunkt kommt nie.
                <br><br><i>Napoleon Hill</i>
                </p>
              </div>
            </div>
          <!--Tabelle unten rechts-->
          <div class="col-md-12">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Veranstaltung</th>
                  <th>Datum</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Informatik 7</td>
                  <td>17.04</td>
                </tr>
                <tr>
                  <td>Projektseminar</td>
                  <td>25.04</td>
                </tr>
                <tr>
                  <td>PHP-Superkurs</td>
                  <td>26.04</td>
                </tr>
                <tr>
                  <td>HTML5 Anfänger</td>
                  <td>30.04</td>
                </tr>
              </tbody>
            </table>
          </div>
          <p class="text-center"><a href="www.univz.uni-goettingen.de">Alle Veranstaltungen</a></p>
        </div>
      </div>
    </div>
  </div>

  <!--Footer-->
  <p>StudentVZ V0.1</p>

@endsection
