<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	<link type="image/png" rel="shortcut icon" href="static/img/guna_logo.png" />

    <title>@yield('title')</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{ URL::asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{ URL::asset('css/modern-business.css') }}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{ URL::asset('font-awesome-4.1.0/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ URL::asset('css/bootstrap-social.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ URL::asset('css/styles.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ URL::asset('css/summernote.css') }}" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Oswald:400,300' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

	<div class="container-fluid row header">
		<div class="col-sm-2 col-md-2 col-lg-2">
			<img src="{{ URL::asset('img/logo.png') }}"/>
		</div>
		<div class="col-md-8">
			<h1 style="font-family: Oswald, sans-serif">Guna Trading House PLC.</h1><small style="font-family: Oswald, sans-serif">Your Strategic Trading Partner in Ethiopia</small>
		</div>
		<div class="col-md-2">
			@if( Auth::check() )
			<ul class="nav">
				<li><a href="{{URL::to('logout')}}" class="btn btn-primary" style="margin-top: 5px;">Logout</a></li>
				<li class="dropdown"><a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">Account Setting</a>
					<ul class="dropdown-menu" id="settings">
						<li><a href="{{URL::route('change_email')}}">Change Email</a></li>
						<li><a href="{{URL::route('change_password')}}">Change Password</a></li>
					</ul>
				</li>
				@if( Auth::user()->role == 'admin' )
				<li><a href="{{URL::to('/permissions')}}">Setup Permissions</a></li>
				@endif
			</ul>
			@else
			<a href="{{URL::to('login')}}" class="btn btn-primary" style="margin-top: 5px;">Login</a>
			@endif
		</div>
	</div>
	@yield('slideshow')
    <!-- Navigation -->
    <nav class="navbar" role="navigation">
        <div class="fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a class="active" href="{{URL::to('/')}}">Home</a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Company Profile <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="{{URL::to('/list/1')}}">About Us</a>
                            </li>
                            <li>
                                <a href="{{URL::to('list/20')}}">How Guna Works</a>
                            </li>
                            <li>
                                <a href="{{URL::to('list/24')}}">Organizational Structure</a>
                            </li>
                            <li>
                                <a href="{{URL::to('gallery/26')}}">Management Profile</a>
                            </li>
                            <li>
                                <a href="{{URL::to('list/21')}}">Laws and Rules</a>
                            </li>
                            <li>
                                <a href="{{URL::to('list/22')}}">Board of Directors</a>
                            </li>
                            <li>
                                <a href="{{URL::to('list/23')}}">Agency</a>
                            </li>
                        </ul>
                    </li>
                    <li><a href="{{URL::to('gallery/6')}}">Corporate Companies</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Services <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="{{URL::to('gallery/2')}}">Export</a>
                            </li>
                            <li>
                                <a href="{{URL::to('gallery/4')}}">Import</a>
                            </li>
                            <li>
                                <a href="{{URL::to('gallery/5')}}">Local Products Distribution</a>
                            </li>
                            <li>
                                <a href="{{URL::to('list/25')}}">Commission Agent</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Market Data <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="{{URL::to('list/17')}}">Current Price</a>
                            </li>
                            <li>
                                <a href="{{URL::to('list/18')}}">Reference Market</a>
                            </li>
                            <li>
                                <a href="{{URL::to('list/19')}}">Market Info</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{URL::to('order')}}">Order Online</a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Media Center <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="{{URL::to('list/8')}}">Latest News </a>
                            </li>
                            <li>
                                <a href="{{URL::to('list/10')}}">Press Release</a>
                            </li>
                            <li>
                                <a href="{{URL::to('list/11')}}">Blog</a>
                            </li>
                            <li>
                                <a href="{{URL::to('list/12')}}">Events</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Knowledge Center<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="{{URL::to('list/13')}}">Brochure</a>
                            </li>
                            <li>
                                <a href="{{URL::to('list/14')}}">News Letter</a>
                            </li>
                            <li>
                                <a href="{{URL::to('list/15')}}">Briefs</a>
                            </li>
                            <li>
                                <a href="{{URL::to('list/16')}}">Articles</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{URL::to('list/7')}}">Tender</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

	@yield('content')

	<div class="clearfix"></div>
	<div>
        <!-- Call to Action Section -->
        <div class="well footer">
            <div class="row">
                <div class="col-md-3">
                	<p class="btn btn-default btn-circle">Address: <strong>(Head Quarter)</strong></p>
					<ul class="list-group">
						<li class="list-group-item">Addis Ababa Behind the Jakros Residential Units</li>
						<li class="list-group-item">Bole Subcity</li>
						<li class="list-group-item">Kebelle 14/15</li>
						<li class="list-group-item"><i class="fa fa-phone"></i> +251-116 466325</li>
					</ul>
                </div>
                <div class="col-md-3">
					<ul class="list-group">
                    <li class="list-group-item"><a class="btn btn-primary" href="{{ URL::to('contact') }}">Contact Us</a></li>
                    <li class="list-group-item"><a class="btn btn-primary" href="{{URL::to('careers')}}">Careers</a></li>
					<li class="list-group-item"><a href="https://www.facebook.com/gthplc" class="btn btn-block btn-social btn-facebook">
						<i class="fa fa-facebook"></i>Like Us on Facebook
					</a></li>
					<li class="list-group-item"><a href="#" class="btn btn-block btn-social btn-twitter">
						<i class="fa fa-twitter"></i>Follow us on Twitter
					</a></li>
                </div>
                <div class="col-md-3 branches-list">
                	<p><strong class="btn btn-default btn-circle">Branches</strong></p>
						<a href="javascript:;" tabindex="0" class="btn btn-primary btn-block" data-container="body" data-toggle="popover" data-trigger="focus" data-placement="right" title="Mekelle" data-content="Description about Mekelle">Mekelle</a>
						<a href="javascript:;" tabindex="0" class="btn btn-primary btn-block" data-container="body" data-toggle="popover" data-trigger="focus" data-placement="right" title="<strong>Shire</strong>" data-html="true" data-content="Tigray Region | Zone: North West | Woreda: Shire Endasillasie | Kebele: 01<br/>Phone: 034-4-442845, 034-4-442242, 034-4-442651<br/>Mobile: 091-3-147540<br/>Fax: 034-4-440451<br/>Email: kibrom_zerezgy@yahoo.com">Shire</a>
						<a href="javascript:;" tabindex="0" class="btn btn-primary btn-block" data-container="body" data-toggle="popover" data-trigger="focus" data-placement="right" title="Humera" data-content="Description about Humera">Humera</a>
						<a href="javascript:;" tabindex="0" data-html="true" class="btn btn-primary btn-block" data-container="body" data-toggle="popover" data-trigger="focus" data-placement="right" title="<strong>Gonder</strong>" data-content="AmharaRegion | Zone: Northern Gonder | Woreda: Gonder | Kebele: 20<br/>Near Dashen Beer infront of NOC<br/>Phone: 058-1-140424<br/>Mobile: 091-8-805229<br/>Fax: 058-1-142026<br><strong>Arid Shop</strong><br/>AmharaRegion | Zone: Northern Gonder | Woreda: Gonder | Kebele: 05<br/>Near Bus Station in front of Axum Hotel<br/>Phone: 058-8-110549<br/>Mobile: 091-8-805229, 091-8-042289<br><strong>Debretabor Shop</strong><br>Zone: South Gonder | Woreda: Debretabor<br>Kebelle : 20 | Around Genet Hotel Infront of Amaha Tessema Hotel<br>Mobile: 0918226837/0918805229<br><strong>Debark Shop</strong><br>Zone: Northern Gonder | Woreda: Debark | Kebelle: 02<br>Infront of Bus Station (Menaharia)<br>Mobile: 0923468862/0918805229">Gonder</a>
						<a href="javascript:;" tabindex="0" class="btn btn-primary btn-block" data-container="body" data-toggle="popover" data-trigger="focus" data-placement="right" title="Adama" data-content="Description about Adama">Adama</a>
						<a href="javascript:;" tabindex="0" class="btn btn-primary btn-block" data-container="body" data-toggle="popover" data-trigger="focus" data-placement="right" title="Dessie" data-content="Description about Dessie">Dessie</a>
						<a href="javascript:;" tabindex="0" data-html="true" class="btn btn-primary btn-block" data-container="body" data-toggle="popover" data-trigger="focus" data-placement="right" title="<strong>Hawassa</strong>" data-content="South Region | Zone: Sidama | Hayk Dar Subcity | Kebele: Gebeya Dar<br/>Region known as Hawassa Arab Sefer<br/>Yesuf Building<br/>House No. 524<br/>Phone: 046-2-122540<br/>Mobile: 091-1-876972<br/>Fax: 046-2-122541<br/>Email: negasito4@gmail.com">Hawassa</a>
						<a href="javascript:;" tabindex="0" class="btn btn-primary btn-block" data-container="body" data-toggle="popover" data-trigger="focus" data-placement="right" title="<strong>Bahir Dar</strong>" data-html="true" data-content="<strong>Shop 1</strong><br/>Amhara Region | Zone: Bahrdar | Woreda: Bahrdar | Kebele: 12<br/>Region known as GshAbay<br/>Hikma PLC Building<br/>Phone: 058-2-201357<br/>Mobile: 091-2-917998<br/>Email: kibrom_zerezgy@yahoo.com<br/><strong>Shop 2</strong><br/>Amhara Region | Zone: Bahrdar | Woreda: Bahrdar | Kebele: 04<br/>Region known as Sefene Selam<br/>Tamrat Building<br/>House Number: C-180<br/>Phone: 058-2-09727<br/>Mobile: 091-2-917998<br/>Email: kibrom_zerezgy@yahoo.com">Bahir Dar</a>
                </div>
				<div class="col-md-3 branches-list">
					<p><strong class="btn btn-default btn-circle">Local Product Distribution Shop Outlets</strong></p>
					<ul class="list-group">
						<li class="list-group-item"><span class="btn btn-primary btn-block">Addis Ababa</span>
							<ul>
								<li>Piassa Infront of Arada building</li>
								<li>Stadium Yiha Building</li>
								<li>Kaliti Telecom Building</li>
								<li>Merkato Aroge Metshaf Tera</li>
								<li>Gojam Berenda</li>
							</ul>
						</li>
						<li class="list-group-item"><span class="btn btn-primary btn-block">All branches</span></li>
						<li class="list-group-item"><span class="btn btn-primary btn-block">Adigrat Shop</span></li>
					</ul>
				</div>
            </div>
        </div>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-8 col-md-8 col-xs-8">
                    <p>Copyright &copy; Guna Trading House PLC 2014</p>
                </div>
                <div class="col-lg-4 col-md-4 col-xs-4">
                    <p>Designed and Developed by <a href="http://www.malamengineering.com">Malam Engineering PLC</a></p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery Version 1.11.0 -->
    <script src="{{ URL::asset('js/jquery-1.11.0.js') }}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ URL::asset('js/summernote.min.js') }}"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    	$('.carousel').carousel({
        	interval: 5000 //changes the speed
    	});
		$(function () {
		  $('[data-toggle="popover"]').popover()
		  });
		$('#summernote').summernote({
			height: 300,
			focus: true,
			onImageUpload: function(files, editor, welEditable) {
				sendFile(files[0], editor, welEditable);
			}
		});
		function sendFile( file, editor, welEditable ) {
			data = new FormData();
			data.append( 'file', file );
			$.ajax({
				data: data,
				type: "POST",
				url: "/gallery/ajax",
				cache: false,
				contentType: false,
				processData: false,
				success: function(url) {
					editor.insertImage(welEditable, url);
				},
				error: function(ts) { alert( ts.responseText ) }
			});
		}
    </script>

</body>

</html>
