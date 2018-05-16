<?php

namespace App\Http\Controllers;

use Redirect;
use View;
use View\layouts;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Input;

class PagesController extends Controller
{

    public function start()
    {
        return view('start');
    }

    public function termine()
    {
        return view('pruefungstermine');
    }


    public function result()
    {
        return view('result');
    }


    public function verifydate(Request $request)
    {
          // Benutzereingabe speichern
    	$name = $_GET['inputName'];
         $date = $_GET['inputDate'];
         $we = $check = Input::get('inputWE');

         // Führe die Funktion nur aus Wenn ein Datum eingegeben wurde, else -> gebe einfach das leere View zurück
         if(!empty ($date)){

         $format = "d.m.Y";
         $path = storage_path()."/json/vorlesungszeiten.json";
         $string = file_get_contents($path);
    	$termineObj = json_decode($string, true);
         $dateValid = true;

   	// Wochentag berechnen
         $date1 = date($format,strtotime($date));
         $tag = date('d', strtotime($date));
    	$monat = date('m', strtotime($date));
    	$jahr = date('Y', strtotime($date));
   	$date1 = getdate(mktime(0, 0, 0, $monat, $tag, $jahr));
   	$wochentag = $date1['wday'];

   	// Pr�fen, ob Wochenende
   	if($wochentag == 0) {
            $dateValid = false;
   	}
         elseif(($wochentag == 6) && ($we == "on")){
            $dateValid = false;
         }
         else {
   	// Feste Feiertage werden nach dem Schema ddmm eingetragen
   	$feiertage[] = "0101"; // Neujahrstag
   	$feiertage[] = "0105"; // Tag der Arbeit
   	$feiertage[] = "0310"; // Tag der Deutschen Einheit
   	$feiertage[] = "2512"; // Erster Weihnachtstag
   	$feiertage[] = "2612"; // Zweiter Weihnachtstag

   	// Bewegliche Feiertage berechnen
   	$tage = 60 * 60 * 24;
   	$ostersonntag = easter_date($jahr);

   	$feiertage[] = date("dm", $ostersonntag - 1 * $tage);  // Karfreitag
   	$feiertage[] = date("dm", $ostersonntag + 2 * $tage);  // Ostermontag
   	$feiertage[] = date("dm", $ostersonntag + 40 * $tage); // Himmelfahrt
   	$feiertage[] = date("dm", $ostersonntag + 51 * $tage); // Pfingstmontag

   	// Pr�fen, ob Feiertag
   	$code = $tag.$monat;
   	if(in_array($code, $feiertage)) {
         $dateValid = false;
         }
         else {
          // durchlaufe jedes Semester-Array im .json-Array und vergleiche das eingegeben Datum mit den Semestertermine
          foreach($termineObj as $key => $item){

          //Musste hier die Variable $semester mit irgendwas initialisiern, falls er keinen passenden Termin findet
          $semester = $item['semester'];
          if (($date >= $item['start']) and ($date <= $item['end'])){
             // Merke dir ob und für welches Semester das Datum passt
             // Dann verlasse die foreach und such nicht weiter
                $dateValid = false;
                break;
          }
          else {
          	$dateValid = true;
          }
          }
          }}
          // gib das View mit den variablen zurück
         return View('pruefungstermine')->with('name',$name)->with('date',$date)->with('termineObj',$termineObj)->with('dateValid',$dateValid)->with('check',$check);
         }
         else {
         return View('pruefungstermine');
         }

      }








}