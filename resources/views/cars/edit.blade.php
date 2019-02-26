@extends('layouts.app')
@section('content')
    {!! Form::open(['route' => ['cars.update','id'=>$car->id],  'method' => 'post']) !!}
    {!! method_field('patch') !!}

    <div class="container">
        <h1>Add a car </h1>
        <div class="from-group">
            {{Form::label('brand', 'Brand')}}
            {{Form::text('brand', "{$car->brand}",['class'=> 'form-control', 'placeholder'=>'Mitsubishi'])}}
        </div>
        <div class="from-group">
            {{Form::label('model', 'Model')}}
            {{Form::text('model', "{$car->model}",['class'=> 'form-control', 'placeholder'=>'Mirage'])}}
        </div>
        <div class="from-group">
            {{Form::label('type', 'Type')}}
            {{Form::text('type', "{$car->type}",['class'=> 'form-control', 'placeholder'=>'Economy'])}}
        </div>
        <div class="from-group">
            {{Form::label('passangers', 'Passangers ')}}
            {{Form::number('passangers',"{$car->passangers}",['class'=> 'form-control', 'placeholder'=>'4'])}}
        </div>
        <div class="from-group">
            {{Form::label('bags', 'Bags ')}}
            {{Form::number('bags', "{$car->bags}",['class'=> 'form-control', 'placeholder'=>'1'])}}
        </div>
        <div class="from-group">
            {{Form::label('doors', 'Doors ')}}
            {{Form::number('doors', "{$car->doors}",['class'=> 'form-control', 'placeholder'=>'4'])}}
        </div>
        <div class="from-group">
            {{Form::label('price', 'Price')}}
            {{Form::number('price', "{$car->price}",['class'=> 'form-control', 'placeholder'=>'256'])}}
        </div>
        <div class="from-group">
            {{Form::label('lat', 'Latitude')}}
            {{Form::number('lat', "{$car->lat}",['class'=> 'form-control', 'placeholder'=>'42.3604', 'step' => 'any'])}}
        </div>
        <div class="from-group">
            {{Form::label('lng', 'Longitude')}}
            {{Form::number('lng', "{$car->lng}",['class'=> 'form-control', 'placeholder'=>'-71.0577', 'step' => 'any'])}}
        </div>
        <div class="from-group">
            {{Form::label('address', 'Address')}}
            {{Form::text('address', "{$car->address}",['class'=> 'form-control mb-3', 'placeholder'=>'1 Congress St'])}}
        </div>
        {{Form::submit('Submit',['class'=> 'btn bnt-primary '])}}
    </div>
    {!! Form::close() !!}
@endsection
