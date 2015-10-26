@extends('layout')
@section('title') Coporate Companies @stop
@section('content')
    <!-- Page Content -->
    <div class="container">

        <!-- Marketing Icons Section -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Companies
                </h1>
            </div>
			<p>Under the umbrella of Endowment Fund for the Rehabilitation of Tigray (EFFORT) investment center, there are many sister companies engaged in various business activities, out of which Guna Trading House PCL is one. The major sister companies and their corresponding business lines are stipulated as follows</p>
			<hr/>
			<div class="row">
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4>Messebo Building Materials Production PLC</h4>
                    </div>
                    <div class="panel-body">
						<img src="{{ URL::asset('img/messebo.jpg') }}" class="img-responsive col-lg-3 img-circle" />
                        <p>This PLC produces the highest quality of Cement (PPC and OPC) according to European and US standards.</p>
                        <a href="#" class="btn btn-default">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4>Sur Construction PLC</h4>
                    </div>
                    <div class="panel-body">
						<img src="{{ URL::asset('img/sur.jpg') }}" class="img-responsive img-circle col-lg-3" />
                        <p>Sur Construction Company is qualified for the highest degree quality of road and building construction, and ensuring a high degree of interaction with its clients.</p>
						<br>
                        <a href="export.php" class="btn btn-default">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4>Almeda Textile PLC</h4>
                    </div>
                    <div class="panel-body">
						<img src="{{ URL::asset('img/altex.jpg') }}" class="img-responsive col-lg-3 img-circle" />
                        <p>This PLC is the biggest textile manufacturing company in Ethiopia. It has 100million Birr sales volume. The company is ISO 9001: 2000, KEA and QSAE certified.</p>
                        <a href="export.php" class="btn btn-default">Learn More</a>
                    </div>
                </div>
            </div>
			</div>
			<div class="row">
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4>Mesfin Industrial Engineering</h4>
                    </div>
                    <div class="panel-body">
						<img src="{{ URL::asset('img/mie.jpg') }}" class="img-responsive col-lg-3 img-circle" />
                        <p>This company is engaged in the fabrication of metal and steel products, machinery for the construction, agricultural, mining, energy and transport sectors for domestic and export markets.</p>
                        <a href="export.php" class="btn btn-default">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4>Trans Ethiopia PLC</h4>
                    </div>
                    <div class="panel-body">
						<img src="{{ URL::asset('img/trans.jpg') }}" class="img-responsive col-lg-3 img-circle" />
                        <p>Trans Ethiopia is trucking and Transit Service Company established to provide dry and liquid cargo transportation services and freight forwarding and shipping services. It is also involved in other business activities such as importing and distribution of tyres, selling fuel, and much more.</p>
                        <a href="{{URL::to('export')}}" class="btn btn-default">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4>Addis Pharmaceutical Factory PLC</h4>
                    </div>
                    <div class="panel-body">
						<img src="{{ URL::asset('img/apf.jpg') }}" class="img-responsive col-lg-3 img-circle" />
                        <p>This factory produces safe, effective and quality drugs and has an annual production capacity of 1.2 billion tablets, 19 billion ampoules, 10 million vials, 500,000 capsules, 4 million ointment tubes and 9.6 million bottles of syrup.</p>
                        <a href="export.php" class="btn btn-default">Learn More</a>
                    </div>
                </div>
            </div>
			</div>
			<div class="row">
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4>Ezana Mining Development PLC</h4>
                    </div>
                    <div class="panel-body">
						<img src="{{ URL::asset('img/ezana.jpg') }}" class="img-responsive col-lg-3 img-circle" />
                        <p>It is well equipped with the state-of-the-art geophysical, chemical laboratories as well as drill hole testing equipment. Besides, it provides consultancy and development services in Geophysics, hydrogeology and mineral exploration.</p>
                        <a href="export.php" class="btn btn-default">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4>Sheba Leather Industry PLC</h4>
                    </div>
                    <div class="panel-body">
						<img src="{{ URL::asset('img/sheba.jpg') }}" class="img-responsive col-lg-3 img-circle" />
                        <p>This is one of the leading tanneries existing in Ethiopia in its product mix, capacity, organizational setup and machinery. The tannery produces semi-finished and finished leather products.</p>
                        <a href="export.php" class="btn btn-default">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4>Saba Dimensional Stones PLC</h4>
                    </div>
                    <div class="panel-body">
						<img src="{{ URL::asset('img/saba.jpg') }}" class="img-responsive col-lg-3 img-circle" />
                        <p>SDS PLC is mainly engaged extracting process and trading various dimensional stone products to the domestic and international markets</p>
                        <a href="export.php" class="btn btn-default">Learn More</a>
                    </div>
                </div>
            </div>
			</div>
			<div class="row">
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4>Hiwot Agricultural Mechanization PLC</h4>
                    </div>
                    <div class="panel-body">
						<img src="{{ URL::asset('img/hiwot.jpg') }}" class="img-responsive col-lg-3 img-circle" />
                        <p>HAM PLC is engaged in the production of food and industrial crops using mechanized farming system.</p>
                        <a href="export.php" class="btn btn-default">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4>Bruh Tesfa Irrigation and Water Technology PLC</h4>
                    </div>
                    <div class="panel-body">
						<img src="{{ URL::asset('img/bruhtesfa.jpg') }}" class="img-responsive col-lg-3 img-circle" />
                        <p>It is one of the competent companies in the modern irrigation technology and water supply systems, by offering the best quality products at competitive price in Ethiopia.</p>
                        <a href="export.php" class="btn btn-default">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4>Maichew Particle Board Factory PLC</h4>
                    </div>
                    <div class="panel-body">
						<img src="{{ URL::asset('img/maichew.jpg') }}" class="img-responsive col-lg-3 img-circle" />
                        <p>It is one of the competent firms in the production and supply of quality wood products, while keeping the environment safe and ensuring sustainable use of natural resources in the country.</p>
                        <a href="export.php" class="btn btn-default">Learn More</a>
                    </div>
                </div>
            </div>
			</div>
        </div>
        <!-- /.row -->
@stop
