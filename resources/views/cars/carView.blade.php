@extends('layouts.app')

@section('content')
    {!! Form::open(['route'=>'cars.store', 'method' => 'post']) !!}
    <div class="container">
        <h1>Add a car </h1>
        <div class="from-group">
            {{Form::label('brand', 'Brand')}}
            {{Form::text('brand', '',['class'=> 'form-control', 'placeholder'=>'Mitsubishi'])}}
        </div>
        <div class="from-group">
            {{Form::label('model', 'Model')}}
            {{Form::text('model', '',['class'=> 'form-control', 'placeholder'=>'Mirage'])}}
        </div>
        <div class="from-group">
            {{Form::label('type', 'Type')}}
            {{Form::text('type', '',['class'=> 'form-control', 'placeholder'=>'Economy'])}}
        </div>
        <div class="from-group">
            {!! Form::select('passangers', [1=>1,2=>2] , null , ['class' => 'form-control']) !!}
        </div>
        <div class="from-group">
            {{Form::label('bags', 'Bags ')}}
            {{Form::number('bags', '',['class'=> 'form-control', 'placeholder'=>'1'])}}
        </div>
        <div class="from-group">
            {{Form::label('doors', 'Doors ')}}
            {{Form::number('doors', '',['class'=> 'form-control', 'placeholder'=>'4'])}}
        </div>
        <div class="from-group">
            {{Form::label('price', 'Price')}}
            {{Form::number('price', '',['class'=> 'form-control', 'placeholder'=>'256'])}}
        </div>
        <div class="from-group">
            {{Form::label('lat', 'Latitude')}}
            {{Form::number('lat', '',['class'=> 'form-control', 'placeholder'=>'42.3604', 'step' => 'any'])}}
        </div>
        <div class="from-group">
            {{Form::label('lng', 'Longitude')}}
            {{Form::number('lng', '',['class'=> 'form-control', 'placeholder'=>'-71.0577', 'step' => 'any'])}}
        </div>
        <div class="from-group">
            {{Form::label('address', 'Address')}}
            {{Form::text('address', '',['class'=> 'form-control mb-3', 'placeholder'=>'1 Congress St'])}}
        </div>
        {{Form::submit('Submit',['class'=> 'btn bnt-primary '])}}
    </div>
    {!! Form::close() !!}
@endsection
