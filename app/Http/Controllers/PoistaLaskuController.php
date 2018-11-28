<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PoistaLaskuController extends Controller
{
	public function poista($id) {
		DB::delete('delete from invoices where id = ?', [$id]);
		$invoice_data = $this->get_invoice_data();

		return view('laskut')->with('invoice_data', $invoice_data);
    }

    function get_invoice_data() {
        $invoice_data = DB::table('invoices')->get();
        return $invoice_data;
    }
}
