@extends('layout')

@section('title') Guna Trading PLC.@stop

@section('slideshow')
    <header id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <div class="fill" style="background-image:url({{URL::asset('img/slide2.jpg')}});"></div>
                <div class="carousel-caption">
                    <h2 >Our Most Valued Asset is Customer's Satisfaction</h2>
                </div>
            </div>
            <div class="item">
                <!--<div class="fill" style="background-image:url('http://placehold.it/1900x1080&text=Slide Two');"></div>-->
                <div class="fill" style="background-image:url({{URL::asset('img/slide3.jpg')}});"></div>
                <div class="carousel-caption">
                    <h2>Import - Export, Business Representative, Wholesale Distribution</h2>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url({{URL::asset('img/slide4.jpg')}});"></div>
                <div class="carousel-caption">
                    <h2>Ecological Preservation Tasks</h2>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url({{URL::asset('img/slide5.jpg')}});"></div>
                <div class="carousel-caption">
                    <h2>Commendable Creditworthiness among its creditors</h2>
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
    </header>
@stop
@section('content')
    <div class="container">

        <!-- Marketing Icons Section -->
        <div class="row">
            <div class="col-lg-12 col-md-5 col-xs-5">
                <h1 style="border-bottom:none" class="page-header">
                    Welcome to the Official Website of Guna Trading House PLC
                </h1>
            </div>
			<span class="col-lg-7"></span>
            <h5 class="page-header" class="col-lg-5 col-md-5 col-xs-5">
                 <strong>Your Strategic Trading Partner in Ethoipia</strong>
             </h5>
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-globe"></i> About Guna</h4>
                    </div>
                    <div class="panel-body">
						<img src="{{ URL::asset('img/about.jpg') }}" class="img-responsive col-lg-3 col-md-3 col-sm-3 img-circle" />
                        <p>{{ListBlock::find(2)->content}}</p>
                        <a href="{{URL::to('list/1')}}" class="btn btn-default">More About Us</a>
                    </div>
                </div>
            </div>
			<div class="row">
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h5><i class="fa fa-fw fa-support"></i> Quality Policy ... ISO 9001:2008 CEERTIFIED</h5>
                    </div>
                    <div class="panel-body">
						<img src="{{ URL::asset('img/certificate1.jpg') }}" class="img-responsive col-lg-5" />
                        <p>The top management of Guna Trading House P.L.C. is committed to deliver products and services that satisfy the requirements of the customers and other stakeholders through the application of the Quality Management System, supporting systems and processes that deliver continual improvement through effective monitoring, measurement and evaluation throughout the organization.</p>
                        <a href="certificate.php" class="btn btn-default">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h5><i class="fa fa-fw fa-support"></i> Range of Products</h5>
                    </div>
                    <div class="panel-body">
						<img src="{{ URL::asset('img/coffee.jpg') }}" class="img-responsive img-circle col-lg-5" />
                        <p>Guna Trading House PLC supplies a wide range of quality products as well ascoffee services, putting special emphasis on maintaining the values of its international clients.</p>
						<br>
						<ul class="navbar-right">
							<li>Export Products</li>
							<li>Import Products</li>
							<li>Local Products</li>
						</ul>
                        <a href="export.php" class="btn btn-default">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h5><i class="fa fa-fw fa-support"></i> Enhancing Art, Cultural and Historical Heritages</h5>
                    </div>
                    <div class="panel-body">
						<img src="{{ URL::asset('img/award.jpg') }}" class="img-responsive col-lg-5 img-circle" />
                        <p>The copmany duly recognizes the indispensability of art development and preservation of cultural heritage. Hence, it fosters such activities and sponsors the publication of some selected books, production of documentary films. Cognizant of the irreplaceable role the youth can play in the prosperity of the country, the company extends its support for the execution of projects designed in this respect. Sponsorship of different beauty contests and the Axum's Basket Ball ground and tribune and typical instances of such support.</p>
                    </div>
                </div>
            </div>
			</div>
        </div>
@stop