@extends('layouts.app')

@section('content')
<div class="panel panel-primary">
    <div class="panel-heading">
        <h1>Laskun tietojen tarkastelu</h1><br> 
    </div>
    <div <div class="panel-body">
        <a href = "/laskut" class="btn btn-primary"><< Takaisin</a>
        <hr>

        <h3>Asiakkaan tiedot</h3>
        <table class="laskut">
            <thead>
                <tr>
                    <th>Nimi</th>
                    <th>Osoite</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                @foreach($lasku as $invoice)
                    <tr>
                        <th>{{ $invoice->asiakas }}</th>
                        <th>{{ $invoice->osoite }}</th>
                        <th>{{ $invoice->email }}</th>
                    </tr>
                @endforeach
            </tbody>
        </table><br>

        <h3>Laskun tiedot</h3>
        <table class="laskut">
            <thead>
                <tr>
                    <th>Tuote/palvelu</th>
                    <th>Hinta</th>
                    <th>Eräpäivä</th>
                </tr>
            </thead>
            <tbody>
                @foreach($lasku as $invoice)
                    <tr>
                        <th>{{ $invoice->tuote }}</th>
                        <th>{{ $invoice->hinta }}</th>
                        <th>{{ $invoice->erapaiva }}</th>
                    </tr>
                @endforeach
            </tbody>
        </table><br>

        <h3>Laskuttajan tiedot</h3>
        <table class="laskut">
            <thead>
                <tr>
                    <th>Nimi</th>
                    <th>Osoite</th>
                    <th>Email</th>
                    <th>Pankkitiedot</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th>Eetu Niskanen</th>
                    <th>Mannisenmäentie 8</th>
                    <th>eetu@eetuniskanen.com</th>
                    <th>FI12 1234 1234 1234</th>
                </tr>       
            </tbody>
        </table><br>
        <div class="PDF_btn">
            <a href = "pdf/{{ $invoice->id }}" class="btn btn-primary">Muodosta PDF</a>
        </div>
    </div>
</div>
@endsection