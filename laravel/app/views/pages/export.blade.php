@extends('layout')

@section('title') Guna Trading PLC.@stop

@section('content')
    <!-- Page Content -->
    <div class="container">

        <!-- Marketing Icons Section -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Export Products
                </h1>
            </div>
			<div class="row">
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4>Oil Seeds</h4>
                    </div>
                    <div class="panel-body">
						<h5><strong>Sesame Seed</strong></h5>
                        <p>The company is engaged in exporting three types of sesame, each with peculiar traits and specific market name as indicated below:</p>
						<h5><strong>Humera Type</strong></h5>
                        <p>It is whitish seed, with sweet taste and aroma, containing 48-52% oil. It is highly demanded in the world market for its best quality and used as bedrock for grading sesame in the international markets. It is also suitable for bakery, making 'Tahina' and confection.</p>
						<h5><strong>Gondar Type</strong></h5>
                        <p>This is also whitish seed, with sweet taste and aroma, containing 48-52% oil. It is highly demanded globally for its best quality and used as a standard for grading sesame in the international markets.</p>
						<h5><strong>Wellega Type</strong></h5>
                        <p>This type of seed is small, endowed with high oil content, ranging from 49-54%, hence mainly utilized for making oil.</p>
						<img src="{{ URL::asset('img/oil.jpg') }}" />
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4>Natural Gum</h4>
                    </div>
                    <div class="panel-body">
                        <p>This product can be defined as a polymeric material (generally carbohydrates). Gum Arabic and Gum Olibanum, widely produced in Ethiopia have a wide range of industrial uses in the production of beverages, pharmaceuticals, candies, chewing gums, confectionery, dairy products , gelatins, nut products, puddings and canned vegetables.</p>
						<h5><strong>Gum Olibanum</strong></h5>
                        <p>Is the hardened, resinous substance exuded from trees of certain Boswell and Commiphora species. It is applied for domestic consumption in religious rituals and in traditional coffee ceremonies to produce aromatic smoke, as well as for export purposes. It is also used for traditional medicine consumption. The Gums and resins can also be distilled to yield volatile oils, which have their own characteristic of balsamic aroma, used in producing a sweet smell.</p>
						<img src="{{ URL::asset('img/gumolibanum.jpg') }}" />
						<h5><strong>Gum Arabic</strong></h5>
                        <p>Gum Arabic is the oldest and best known of all natural gums. It is used as thickening, stabilizing, emulsifying and suspending agent in food and drink industrial, in addition to this , it is utilized as a tablet binding agent, cream and lotions – suspending and emulsifying agents in pharmaceuticals, as film forming and sizing agent in printing and textile industries, it is also used in ceramics, paints inks textiles and adhesives.</p>
						<img src="{{ URL::asset('img/gumarabic.jpg') }}" />
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4>Pulses</h4>
                    </div>
                    <div class="panel-body">
                        <p>The major varieties of pulses grown in Ethiopia are Horse Beans, Chickpeas, Haricot beans, and others.</p>
						<h5><strong>Haricot Bean</strong></h5>
                        <p>It is one of the most important grain legumes grown in the low lands of Ethiopia, particularly in the rift valley.  Several varieties of them are consumed in Ethiopia, usually mixed with other cereals.</p>
						<img src="{{ URL::asset('img/haricotbean.jpg') }}" />
						<h5><strong>Red Kidney Bean</strong></h5>
                        <p>Is boiled, fried, or used in the form of soup. It is also crushed into powder or milled to make stews.</p>
						<img src="{{ URL::asset('img/redharicotbean.jpg') }}" />
                    </div>
                </div>
            </div>
			</div>
			<div class="row">
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4>Niger Seed</h4>
                    </div>
                    <div class="panel-body">
                        <p>This seed is an East African origin, extensively grown and ranked as a leading oil crop in production and area coverage in the oil seed category of Ethiopia. Containing 36% and above oil, it is endowed with natural flavor, pleasant aroma and nutty taste. This internationally traded seed is used for extraction of cooking oil and preparation of food products.</p>
						<img src="{{ URL::asset('img/nigerseed.png') }}" />
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4>Coffee</h4>
                    </div>
                    <div class="panel-body">
                        <p>Coffee is the most important traded commodity, lying second to petroleum in importance in the world market. Ethiopia is the primary center of origin and genetic diversity of the coffee Arabica mainly, producing washed, semi washed and unwashed coffee beans, famous in the world market for being overwhelmingly organic, their flavor, good body quality and diversity of taste. Guna exports both washed and sundried coffee with the under mentioned grades, as per the standards set forth by the Ethiopian commodity exchange.</p>
						<img src="{{ URL::asset('img/coffeebean.jpg') }}" />
                    </div>
                </div>
            </div>
			</div>
        </div>
        <!-- /.row -->
@stop
