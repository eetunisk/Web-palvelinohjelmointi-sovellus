<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use PDF;

class LaskutController extends Controller
{
  public function listaa(Request $request) {
    $invoice_data = $this->get_invoice_data();

    return view('laskut')->with('invoice_data', $invoice_data);
  }

  // haetaan tietokanta
  function get_invoice_data() {
    $invoice_data = DB::table('invoices')->get();
    return $invoice_data;
  }

  // muodostetaan pdf
  function pdf() {
    $pdf = \App::make('dompdf.wrapper');
    $pdf->loadHTML($this->convert_invoice_data_to_html());
    return $pdf->stream();
  }

  // käännetään tietokannasta haettua data html muotoon ja muotoillaan halutulla tavalla pdf:ää varten
  function convert_invoice_data_to_html() {
    $invoice_data = $this->get_invoice_data();
    $output = '
    <h3 align="center">Laskut</h3>
    <table width="100%" style="border-collapse: collapse; border: 0px;">
    <tr>
    <th style="border: 1px solid; padding:10px;" >Asiakas</th>
    <th style="border: 1px solid; padding:10px;" >Osoite</th>
    <th style="border: 1px solid; padding:10px;" >Email</th>
    <th style="border: 1px solid; padding:10px;" >Tuote</th>
    <th style="border: 1px solid; padding:10px;" >Hinta</th>
    <th style="border: 1px solid; padding:10px;" >Eräpäivä</th>
   	</tr>
    ';

    foreach ($invoice_data as $invoice) {
      $output .= '
      <tr>
      <td style="border: 1px solid; padding:10px;">'.$invoice->asiakas.'</td>
      <td style="border: 1px solid; padding:10px;">'.$invoice->osoite.'</td>
      <td style="border: 1px solid; padding:10px;">'.$invoice->email.'</td>
      <td style="border: 1px solid; padding:10px;">'.$invoice->tuote.'</td>
      <td style="border: 1px solid; padding:10px;">'.$invoice->hinta.'</td>
      <td style="border: 1px solid; padding:10px;">'.$invoice->erapaiva.'</td>
      </tr>
      ';
    }
    $output .= '</table>';
    return $output;
  }
  
}
