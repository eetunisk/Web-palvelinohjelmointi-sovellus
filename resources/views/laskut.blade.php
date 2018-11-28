@extends('layouts.app')

@section('content')
<div class="panel panel-primary">
    <div class="panel-heading">
        <h1>Laskujen listaus</h1><br> 
    </div>
    <div class="panel-body">
        <table class="laskut">
            <thead>
                <tr>
                    <th>Nimi</th>
                    <th>Osoite</th>
                    <th>Email</th>
                    <th>Tuote/palvelu</th>
                    <th>Hinta</th>
                    <th>Eräpäivä</th>
                    <th>Toiminnot</th>
                </tr>
            </thead>
            <tbody>
                @foreach($invoice_data as $invoice)
                    <tr>
                        <th>{{ $invoice->asiakas }}</th>
                        <th>{{ $invoice->osoite }}</th>
                        <th>{{ $invoice->email }}</th>
                        <th>{{ $invoice->tuote }}</th>
                        <th>{{ $invoice->hinta }}</th>
                        <th>{{ $invoice->erapaiva }}</th>
                        <th><a href = 'poistaLasku/{{ $invoice->id }}'>Poista</a> - <a href = 'tarkasteleLaskua/{{ $invoice->id }}'>Tarkastele</a></th>
                    </tr>
                @endforeach
            </tbody>
        </table><br>
        <div class="PDF_btn">
            <a href="{{ url('laskut/pdf') }}" class="btn btn-primary">Muodosta PDF listasta</a>
        </div>
    </div>
</div>
@endsection