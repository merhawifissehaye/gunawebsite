@extends('layout')

@section('title') Guna Trading PLC.@stop

@section('content')
    <!-- Page Content -->
    <div class="container">

        <!-- Marketing Icons Section -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Local Products
                </h1>
				<p>Guna distributes locally made products by its sister companies in different parts of Ethiopia, such as knitted and woven garment, woven fabric, shoes, particle boards and others.</p>
            </div>
			<div class="row">
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4>Sheba Shoe</h4>
                    </div>
                    <div class="panel-body">
                        <p>Guna supplies different models of genuine leather men’s and women’s shoes best known for their quality and comfort.</p>
						<div class="thumb">
							<a href="#" class="thumbnail">
								<img src="{{ URL::asset('img/shoe.jpg') }}" />
							</a>
						</div>
						<a href="shoe.php" class="btn btn-default">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4>Almeda's Textile</h4>
                    </div>
                    <div class="panel-body">
                        <p>Guna supplies quality and cotton made Home textiles, Health care items, Work wears (overcoat, jacket and trouser), Different kind of knit wear (t-shirt, polo, and single), Shirt &amp; Trouser, woven fabrics and others.</p>
						<img src="{{ URL::asset('img/shirt.jpg') }}" />
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4>Maichew Particle Board</h4>
                    </div>
                    <div class="panel-body">
                        <p>Guna supplies high quality raw and laminated particleboard products required for household &amp; office furniture and construction industries.  The laminating papers are well known for being water proof, heat resistant, smooth surface, glossy texture and shiny colors.</p>
						<img src="{{ URL::asset('img/particleboard.jpg') }}" />
                    </div>
                </div>
            </div>
			</div>
        </div>
        <!-- /.row -->
@stop
