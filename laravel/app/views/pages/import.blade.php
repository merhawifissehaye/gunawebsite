@extends('layout')

@section('title') Guna Trading PLC.@stop

@section('content')
    <!-- Page Content -->
    <div class="container">

        <!-- Marketing Icons Section -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Import Products
                </h1>
				<h4><strong>Construction Materials</strong></h4>
            </div>
			<div class="row">
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4>Reinforcement Bar</h4>
                    </div>
                    <div class="panel-body">
                        <p>Guna imports &amp; distributes prime quality, newly produced, hot, rolled and deformed steel bar ranging from 8 mm – 32 mm.  Its quality is ASTM A615 Grade 60 deformed steel bar in straight length of 12 meters (+/- 100 mm) &amp; plain bars according to DIN 17100 ST 37.2 for 6mm in coils.</p>
						<img src="{{ URL::asset('img/redbar.jpg') }}" />
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4>Timber</h4>
                    </div>
                    <div class="panel-body">
                        <p>Guna imports Austrian Grade 0-111 quality with different thickness &amp; width; its length is usually 4 meters, widely used in the construction industry. It is air dry anti stain treated (impregnated).  Moreover, it is free from rot, broken pieces and brown wormy or worm whole pieces.</p>
						<img src="{{ URL::asset('img/timber.jpg') }}" />
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4>Bitumen</h4>
                    </div>
                    <div class="panel-body">
                        <p>Guna imports and distributes the highest standard of bitumen with a new steel drum package. Moreover, it supplies 100 % pure road construction bitumen of various grades, to mention some 40/50, 60/70, 85/100, 120/150, 180/200 among others.</p>
						<img src="{{ URL::asset('img/bitumen.jpg') }}" />
                    </div>
                </div>
            </div>
			</div>
			<div class="row">
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4>RoadSun Tyre</h4>
                    </div>
                    <div class="panel-body">
                        <p>The Company imports and distributes excellent quality and popular in the world with a wide range of tyres.  It is high wear resistance and low heat generation; extended road mileage, excellent traction performance and steer ability; fuel economy and superior high- speed performance.</p>
						<img src="{{ URL::asset('img/roadtyre.jpg') }}" />
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4>Cash Register Machine</h4>
                    </div>
                    <div class="panel-body">
                        <p>Guna offers superior quality Cash Register Scale to Tigray region at highly affordable prices. This Cash Register Scales are appreciated by large number of clients for their high quality.</p>
						<img src="{{ URL::asset('img/cashregister.jpg') }}" />
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4>Chemicals</h4>
                    </div>
                    <div class="panel-body">
                        <p>The company imports and distributes different type of textile chemicals for government and non government organization.</p>
						<img src="{{ URL::asset('img/chemicals.jpg') }}" />
                    </div>
                </div>
            </div>
			</div>
        </div>
        <!-- /.row -->
@stop
