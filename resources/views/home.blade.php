@extends('layouts.default')

@section('content')
    <div class="fullscreen-bg">
        <video loop muted autoplay poster="img/videoframe.jpg" class="fullscreen-bg__video">
            <source src="video/heroes_short.mp4" type="video/mp4">
            
        </video>
    </div>
    <div class="video">
        <div class="container">
            <div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2 ">
                <h2 class="textvideo visible-lg">International Ravers Charity represents the EDM COMMUNITY worldwide facing the main problem in this planet now a days: WATER  SCARCITY IN DEVELOPING COUNTRIES</h2>
                <h3 class="textvideo visible-sm visible-md">International Ravers Charity represents the EDM COMMUNITY worldwide facing the main problem in this planet now a days: WATER  SCARCITY IN DEVELOPING COUNTRIES</h3>

                <h3 class="textvideo visible-xs">International Ravers Charity represents the EDM COMMUNITY worldwide facing the main problem in this planet now a days: WATER  SCARCITY IN DEVELOPING COUNTRIES</h3>

            </div>

            <div class="col-xs-12 text-center">
                <button type="button" class="btn btn-success btn-lg textvideo">WATCH THE VIDEO</button>
            </div>

        </div>
    </div>
    <div class="c_programs">
        <div class="container">
            <h2 class="text-center title-white">Our <strong>charity</strong> programs</h2>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <h4 class="title-white text-center" >Water accesibility program</h4>
                    <video controls poster="img/videoframe.jpg" width="100%" class="center-block shadow">
                        <source src="video/heroes_hd.mp4" type="video/mp4">
                    </video>
                    <h4 class="title-white text-center">This program aims are bring free water refill for every community in need.</h4>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <h4 class="title-white text-center" >Sanitation & higiene program</h4>
                    <video controls poster="img/videoframe1.jpg" width="100%" class="center-block shadow">
                        <source src="video/warriors.mp4" type="video/mp4">
                    </video>
                    <h4 class="title-white text-center">The dignity  of a toilet, sink and a shower must be for everyone!</h4>
                </div>
                <div class="col-xs-12 text-center">
                    <button type="button" class="btn btn-success btn-lg btn-custom">Donate</button>
                </div>
            </div>
        </div>
    </div>

    <div class="yellow">
        <div class="container">
            <h2 class="text-center title-white"><strong>How</strong> we invest your <strong>Donations</strong></h2>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <h3 class="title-white text-center" >EXPLORE</h3>
                    <img src="{{ asset('img/explore.png') }}" alt="Explore" width="70%" class="center-block" >
                    <h4 class="title-white text-center">We explore new causes to make strategic alliance with organizations working more than 2 years in the field.</h4>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <h3 class="title-white text-center" >CHARITIES</h3>
                    <img src="{{ asset('img/billete.png') }}" alt="Charities" width="70%" class="center-block" >
                    <h4 class="title-white text-center">Our team analyze their projects and once approved we proceed to fund and maintain over time.</h4>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <h3 class="title-white text-center" >CANDY TRADE</h3>
                    <img src="{{ asset('img/isologo.png') }}" alt="Candy Trade" width="70%" class="center-block" >
                    <h4 class="title-white text-center">Yes...<br>WE CAN DO ANYTHING!!!</h4>
                </div>
            </div>
        </div>
    </div>

    <div class="white margin-bo">
        <div class="container">
            <h2 class="text-center title-green"><strong>Donate</strong> the same amount of<strong> water</strong> that <br>you <strong>drink</strong> in your last <strong>rave.</strong><br>($0.50 per liter)</h2>
            <div class="row">
                <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">
                    <img src="{{ asset('img/profile1.png') }}" alt="Explore" width="70%" class="center-block" >
                    <h4 class="title-green text-center"><strong>#iRavers</strong> Lorem ipsum dolor sit amet, consectetur  beatae.</h4>
                </div>
                <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">
                    <img src="{{ asset('img/profile2.png') }}" alt="Charities" width="70%" class="center-block" >
                    <h4 class="title-green text-center"><strong>#iRavers</strong> Lorem ipsum dolor sit amet, consectetur  beatae.</h4>
                </div>
                <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">
                    <img src="{{ asset('img/profile3.png') }}" alt="Candy Trade" width="70%" class="center-block" >
                    <h4 class="title-green text-center"><strong>#iRavers</strong> Lorem ipsum dolor sit amet, consectetur  beatae.</h4>
                </div>
                <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">
                    <img src="{{ asset('img/profile4.png') }}" alt="Candy Trade" width="70%" class="center-block" >
                    <h4 class="title-green text-center"><strong>#iRavers</strong> Lorem ipsum dolor sit amet, consectetur  beatae.</h4>
                </div>
            </div>
        </div>
    </div>

    <div class="blue">
        <div class="container">
            <div class="row margin-bottom">
                <div class="col-xs-12 col-sm-6  ">
                    <h2 class="toilet text-left visible-lg">It wouldn't be impossible to ke a "rave" with no toilets or sink. Would you like to join us to provide the dignity of a bath for those people in developing countries?</h2>
                    <h3 class="toilet text-left visible-sm visible-md">It wouldn't be impossible to ke a "rave" with no toilets or sink. Would you like to join us to provide the dignity of a bath for those people in developing countries?</h3>
                    <h3 class="toilet text-left visible-xs">It wouldn't be impossible to ke a "rave" with no toilets or sink. Would you like to join us to provide the dignity of a bath for those people in developing countries?</h3>
                    <div class="col-xs-12 text-center">
                        <button type="button" class="btn btn-success btn-lg ">Help a Warrior</button>
                    </div>
                </div>
                <div class="col-xs-4 hidden-xs">
                    <img src="{{ asset('img/toilet.jpg') }}" alt="Toilet Dignity" width="100%" class="center-block" >
            
                </div>
                 
            </div>
        </div>
    </div>

@stop