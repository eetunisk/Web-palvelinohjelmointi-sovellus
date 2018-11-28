<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use PDF;

class LaskunTarkasteluController extends Controller
{
  public function tarkastele($id) {
    $lasku = DB::select('select * from invoices where id = ?', [$id]);

    return view('tarkasteleLaskua')->with('lasku', $lasku);
  }

  // muodostetaan pdf
  function pdf($id) {
    $pdf = \App::make('dompdf.wrapper');
    $pdf->loadHTML($this->convert_invoice_data_to_html([$id]));
    return $pdf->stream();
  }

  // käännetään tietokannasta haettua data html muotoon ja muotoillaan halutulla tavalla pdf:ää varten
  // !!! HUOM !!! Ei saatu toimimaan joten muotoilu toistaiseksi suoraan laskutControllerista
  function convert_invoice_data_to_html($id) {
    // edellä oleva tietojen hakutapa väärä ja heittää virheen,
    $lasku = DB::select('select * from invoices where id = ?', [$id]);
    $output = '
    <h3 align="center">Laskun tiedot</h3>
    <table width="100%" style="border-collapse: collapse; border: 0px;">
    <tr>
    <th style="border: 1px solid; padding:12px;" >Asiakas</th>
    <th style="border: 1px solid; padding:12px;" >Osoite</th>
    <th style="border: 1px solid; padding:12px;" >Email</th>
    <th style="border: 1px solid; padding:12px;" >Tuote</th>
    <th style="border: 1px solid; padding:12px;" >Hinta</th>
    <th style="border: 1px solid; padding:12px;" >Eräpäivä</th>
    </tr>
    ';

    foreach ($lasku as $invoice) {
      $output .= '
      <tr>
      <td style="border: 1px solid; padding:12px;">'.$invoice->asiakas.'</td>
      <td style="border: 1px solid; padding:12px;">'.$invoice->osoite.'</td>
      <td style="border: 1px solid; padding:12px;">'.$invoice->email.'</td>
      <td style="border: 1px solid; padding:12px;">'.$invoice->tuote.'</td>
      <td style="border: 1px solid; padding:12px;">'.$invoice->hinta.'</td>
      <td style="border: 1px solid; padding:12px;">'.$invoice->erapaiva.'</td>
      </tr>
      ';
    }
    $output .= '</table>';
    return $output;
  }

}
