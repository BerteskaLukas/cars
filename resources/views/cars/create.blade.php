@extends('layouts.app')

@section('content')
    {!! Form::open(['route'=>'cars.store', 'method' => 'post']) !!}
    <div class="container">
        <div class="body">
            <div id="cars-box">
                <div class="box">
                    <div class="car-box">
                        <div class="car-info-box">
                            <div class="car-info">
                                <div>
                                    <div class="car-name">
                                        <div class="from-group">
                                            {{Form::label('brand', 'Brand')}}
                                            {{Form::text('brand', '',['class'=> 'form-control', 'placeholder'=>'Mitsubishi'])}}
                                        </div>
                                        <div class="from-group">
                                            {{Form::label('model', 'Model')}}
                                            {{Form::text('model', '',['class'=> 'form-control', 'placeholder'=>'Mirage'])}}
                                        </div>
                                    </div>
                                    <div class="car-class">
                                        <div class="from-group">
                                            {{Form::label('type', 'Type')}}
                                            {{Form::text('type', '',['class'=> 'form-control', 'placeholder'=>'Economy'])}}
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="car-details">
                                <div class="car-detail-box">
                                    <i class="fas fa-user-alt">
                                        {!! Form::select('passangers', [1=>1,2=>2] , null , ['class' => 'form-control']) !!}
                                    </i>

                                    <div class="car-detail-box" style="margin-left: 38px">
                                        <i class="fas fa-suitcase"></i>
                                        {!! Form::select('bags', [1=>1,2=>2] , null , ['class' => 'form-control']) !!}
                                    </div>
                                    <div class="car-detail-box" style="margin-left: 38px">
                                        <i class="fas fa-door-closed">
                                            {!! Form::select('doors', [1=>1,2=>2] , null , ['class' => 'form-control']) !!}
                                        </i>

                                    </div>
                                </div>

                            </div>
                            <div class="car-location">
                                <div class="car-location-info">
                                    <div class="car-location-info-box">
                                        <div class="car-address">
                                            <div class="car-address-icon">
                                                <i class="fas fa-city"></i>
                                            </div>
                                            <div class="locations">
                                                <div class="from-group">
                                                    {{Form::label('address', 'Address')}}
                                                    {{Form::text('address', '',['class'=> 'form-control mb-3', 'placeholder'=>'1 Congress St'])}}
                                                </div>
                                            </div>
                                            <div class="locations" style="margin-top:3px; color: #6D8494"> Non-airport</div>

                                        </div>
                                        <div class="agency">
                                            <img class="agency-photo" src="enterprise.png" alt="">
                                        </div>
                                    </div>
                                    <div class="car-photo">
                                        <img src="car1.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="offer-box">
                            <div class="option-box">
                                <div class="option-icon">
                                    <span class="dots"></span>
                                    <span class="dots"></span>
                                    <span class="dots"></span>
                                </div>
                            </div>
                            <div class="price-box">
                                <div >
                                    <div class="from-group">
                                        {{Form::label('price', 'Price')}}
                                        {{Form::number('price', '',['class'=> 'form-control', 'placeholder'=>'256'])}}
                                    </div>
                                </div>
                                <div class="total">
                                    Total
                                </div>
                            </div>
                            <div class="hot-wire">Hotwire</div>
                            <div class="view-deal">
                                <div class="from-group">
                                    {{Form::label('lat', 'Latitude')}}
                                    {{Form::number('lat', '',['class'=> 'form-control', 'placeholder'=>'42.3604', 'step' => 'any'])}}
                                </div>
                                <div class="from-group">
                                    {{Form::label('lng', 'Longitude')}}
                                    {{Form::number('lng', '',['class'=> 'form-control', 'placeholder'=>'-71.0577', 'step' => 'any'])}}
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{Form::submit('Submit',['class'=> 'btn bnt-primary '])}}
        </div>
    {!! Form::close() !!}
@endsection

