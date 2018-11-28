@extends('layouts.app')

@section('content')
<div class="container">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h1>Luo Lasku</h1>
        </div>
        <div class="panel-body">	
            <h2>Asiakkaan tiedot</h2>
            {!! Form::open(['url' => 'lasku/submit']) !!}
            <div class="form-group">
                {{Form::label('asiakas', 'Asiakkaan nimi')}}
                {{Form::text('asiakas', '', ['class'=>'form-control', 'placeholder'=>'Anna nimi'])}}
            </div>
            <div class="form-group">
                {{Form::label('osoite', 'Asiakkaan osoite')}}
                {{Form::text('osoite', '', ['class'=>'form-control', 'placeholder'=>'Anna osoite'])}}
            </div>
            <div class="form-group">
                {{Form::label('email', 'Sähköpostiosoite')}}
                {{Form::text('email', '', ['class'=>'form-control', 'placeholder'=>'Anna sähköpostiosoite'])}}
            </div>
            <h2>Laskun tiedot</h2>
             <div class="form-group">
                {{Form::label('tuote', 'Laskutettava tuote/palvelu')}}
                {{Form::text('tuote', '', ['class'=>'form-control', 'placeholder'=>'Tuote/palvelu'])}}
            </div>
            <div class="form-group">
                {{Form::label('viesti', 'Viesti laskun saajalle')}}
                {{Form::textarea('viesti', '', ['class'=>'form-control', 'placeholder'=>'Viesti'])}}
            </div>
            <div class="form-group">
                {{Form::label('hinta', 'Laskutettava summa')}}
                {{Form::text('hinta', '', ['class'=>'form-control', 'placeholder'=>'Anna hinta'])}}
            </div>
            <div class="form-group">
                {{Form::label('erapaiva', 'Laskun eräpäivä')}}
                {{Form::date('erapaiva', '', ['class'=>'form-control', 'placeholder'=>'Eräpäivä'])}}
            </div>
            <div>
                {{Form::submit('Luo lasku', ['class' => 'btn btn-primary'])}}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>


@endsection
