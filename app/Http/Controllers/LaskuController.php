<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use PDF;

class LaskuController extends Controller
{
  public function submit(Request $request) {
    $this->validate($request, [
      'asiakas' => 'required',
      'email' => 'required',
      'hinta' => 'required',
    	'osoite' => 'required',
    	'tuote' => 'required',
    	'erapaiva' => 'required'
    ]);

    $asiakas = $request ->input('asiakas');
    $osoite = $request ->input('osoite');
    $email = $request ->input('email');
    $tuote = $request ->input('tuote');
    $hinta = $request ->input('hinta');
    $erapaiva = $request ->input('erapaiva');

    // sijoitetaan laskun tiedot tietokantaan
    $data = array('asiakas'=>$asiakas, 'osoite'=>$osoite, 'email'=>$email, 'tuote'=>$tuote, 'hinta'=>$hinta, 'erapaiva'=>$erapaiva);
    DB::table('invoices')->insert($data);

    $invoice_data = $this->get_invoice_data();

    return view('laskut')->with('invoice_data', $invoice_data);
  }

  // haetaan tietokanta
  function get_invoice_data() {
    $invoice_data = DB::table('invoices')->get();
    return $invoice_data;
  }

}
