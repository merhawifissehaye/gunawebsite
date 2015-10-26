<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Tadesse Hagos Hotel</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="images/favicon.png">
	<link href='http://fonts.googleapis.com/css?family=Titillium+Web' rel='stylesheet' type='text/css'>
	<style>
		body { font-family: 'Titillium Web', sans-serif; }
		.datepicker { z-index: 1151 !important; }
	</style>
</head><!--/head-->

<body data-spy="scroll" data-target="#navbar" data-offset="0">
    <header id="header" role="banner">
        <div class="container">
            <div id="navbar" class="navbar navbar-default">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php"></a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#main-slider"><i class="fa fa-home"></i></a></li>
                        <li><a href="#about">About</a></li>
                        <li><a href="#services">Services</a></li>
                        <li><a href="#portfolio">Rooms</a></li>
                        <li><a href="#contact">Contact</a></li>
                        <li><a href="javascript:;" data-toggle="modal" data-target="#reserve">Reserve</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header><!--/#header-->
	<div class="modal fade" id="reserve" style="padding-top: 70px">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
					<h4 class="modal-title">Reserve Rooms</h4>
				</div>
				<form>
				<div class="modal-body">
						<div class="form-group">
							<label>Name</label>
							<input type="text" class="form-control" placeholder="Name">
						</div>
						<div class="form-group">
							<label>Room Type</label>
							<select class="form-control">
								<option>Deluxe</option>
								<option>Single</option>
								<option>Suite</option>
							</select>
						</div>
						<div class="form-group">
							<label>Date Check In</label>
							<input type="text" class="form-control date" placeholder="Name">
						</div>
						<div class="form-group">
							<label>Date Check Out</label>
							<input type="text" class="form-control date" placeholder="Name">
						</div>
						<div class="form-group">
							<label>Email</label>
							<input type="email" class="form-control" placeholder="Email">
						</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					<button type="button" class="btn btn-primary">Reserve</button>
				</div>
				</form>
			</div>
		</div>
	</div>

    <section id="main-slider" class="carousel">
        <div class="carousel-inner">
            <div class="item active">
                <div class="container">
                    <div class="carousel-content">
                        <h1>Tadesse Hagos Hotel</h1>
                        <p class="lead">In the warm business hub of Northern Ethiopia, Mekelle City, you find the best business location.<br>Location matters most when it comes to doing business in Mekelle.</p>
                    </div>
                </div>
            </div><!--/.item-->
            <div class="item">
                <div class="container">
                    <div class="carousel-content">
                        <h1>Panoramic View</h1>
                        <p class="lead">Discover Panoramic view of Mekelle from a single building.</p>
                    </div>
                </div>
            </div><!--/.item-->
        </div><!--/.carousel-inner-->
        <a class="prev" href="#main-slider" data-slide="prev"><i class="fa fa-arrow-left"></i></a>
        <a class="next" href="#main-slider" data-slide="next"><i class="fa fa-arrow-right"></i></a>
    </section><!--/#main-slider-->

    <section id="services" style="padding-top: 100px">
        <div class="container">
            <div class="box first">
                <div class="row">
                    <div class="col-md-4 col-sm-6">
                        <div class="center">
                            <i style="font-size: 96px; color: #ff7777" class="fa fa-futbol-o"></i>
                            <h4>Rooftop Sports Bar</h4>
                            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae.</p>
                        </div>
                    </div><!--/.col-md-4-->
                    <div class="col-md-4 col-sm-6">
                        <div class="center">
                            <i style="font-size: 96px; color: #ccdd33"  class="fa fa-home"></i>
                            <h4>Real Estate</h4>
                            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae.</p>
                        </div>
                    </div><!--/.col-md-4-->
                    <div class="col-md-4 col-sm-6">
                        <div class="center">
                            <i style="font-size: 96px; color: #77aadd"   class="fa fa-laptop"></i>
                            <h4>Offices and Shop for Rent</h4>
                            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae.</p>
                        </div>
                    </div><!--/.col-md-4-->
                </div><!--/.row-->
            </div><!--/.box-->
        </div><!--/.container-->
    </section><!--/#services-->

    <section id="about">
        <div class="container">
            <div class="box">
                <div class="center gap">
                    <h2>About</h2>
                </div><!--/.center-->
                <div class="row">
					<p>After a remarkable entrepreneur founder of Tadesse Hagos real estate and businesses, is a landmark at the very heart of Mekelle City, Romanat Square. The company ranges from rooms for rent for offices, shops and Pension services. This major building of the city encompasses about 105 rooms in number close Kedamay Woyane, construction materials suppliers.</p>
					<p>If you are traveling to Mekelle for business or vacation, check our business mall consisting of major business shopping, enjoy billiard with the beautiful people of Mekelle, enjoy major public holiday at your comfort from a rooftop bar,</p>
					<p><strong>Mekelle</strong> Mekelle also transliterated as Makale or Meqele, is a city in the northern Tigray Region of Ethiopia. It is located around 780 kilometers north of the capital Addis Ababa, at a latitude and longitude of 13<sup>o</sup>29<sup>&#39;</sup>N 39<sup>o</sup>28<sup>&#39;</sup>E, with an elevation of 2084 meters above see level. Administratively, Mekelle is considered a special zone, which is divided into seven sub-cities. Lear more about <a href="http://en.wikipedia.org/wiki/Mek'ele">Mekelle</a>.
					<div class="col-md-offset-2 col-lg-offset-2 col-xs-offset-2">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d124148.00753810928!2d39.49370385000001!3d13.497175350000006!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x166afd46467c7649%3A0xe61495b1f6a300cc!2sMek&#39;ele!5e0!3m2!1sen!2set!4v1415885050468" width="600" height="450" frameborder="0" style="border:0"></iframe>
					</div>
                </div><!--/.row-->
            </div><!--/.box-->
        </div><!--/.container-->
    </section><!--/#services-->

    <section id="portfolio">
        <div class="container">
            <div class="box">
                <div class="center gap">
                    <h2>Rooms</h2>
                </div><!--/.center-->
                <!--<ul class="portfolio-filter">
                    <li><a class="btn btn-primary active" href="#" data-filter="*">All</a></li>
                    <li><a class="btn btn-primary" href="#" data-filter=".bootstrap">Bootstrap</a></li>
                    <li><a class="btn btn-primary" href="#" data-filter=".html">HTML</a></li>
                    <li><a class="btn btn-primary" href="#" data-filter=".wordpress">Wordpress</a></li>
                </ul>#portfolio-filter-->
                <ul class="portfolio-items col-4">
                    <li class="portfolio-item apps">
                        <div class="item-inner">
                            <div class="portfolio-image">
                                <img src="images/portfolio/thumb/item1.jpg" alt="">
                                <div class="overlay">
                                    <a class="preview btn btn-danger" title="Lorem ipsum dolor sit amet" href="images/portfolio/full/item1.jpg"><i class="fa fa-eye"></i></a>             
                                </div>
                            </div>
                            <h5><strong>King Guest Room Plus</strong></h5>
							<p>Relax in this bright room with king-size bed featuring large floor-to-ceiling windows. Enjoy the additional space of the balcony overlooking the pool. Rest and enjoy a movie from the comfort of the king bed. Additional touches include mineral water and chocolates. <a href="#" data-toggle="modal" data-target="#reserve">+Reserve</a></p>
                        </div>
                    </li><!--/.portfolio-item-->
                    <li class="portfolio-item joomla bootstrap">
                        <div class="item-inner">
                            <div class="portfolio-image">
                                <img src="images/portfolio/thumb/item2.jpg" alt="">
                                <div class="overlay">
                                    <a class="preview btn btn-danger" title="Lorem ipsum dolor sit amet" href="images/portfolio/full/item2.jpg"><i class="fa fa-eye"></i></a>  
                                </div>
                            </div> 
                            <h5><strong>King Guest Room</strong></h5>
							<p>Choose this spacious and bright room with large floor-to-ceiling windows and enjoy the mountain, garden or city view from the balcony. Work at the workstation with desk and adjustable lamp or watch a movie on the TV. <a href="#" data-toggle="modal" data-target="#reserve">+Reserve</a></p>
                        </div>
                    </li><!--/.portfolio-item-->
                    <li class="portfolio-item bootstrap wordpress">
                        <div class="item-inner">
                            <div class="portfolio-image">
                                <img src="images/portfolio/thumb/item3.jpg" alt="">
                                <div class="overlay">
                                    <a class="preview btn btn-danger" title="Lorem ipsum dolor sit amet" href="images/portfolio/full/item3.jpg"><i class="fa fa-eye"></i></a>        
                                </div> 
								
                            </div>
                            <h5><strong>Twin Guest Room Plus</strong></h5>
							<p>Enjoy views of the pool from the balcony of this twin room with floor-to-ceiling windows. Catch up with work at the desk and stay connected with WiFi access (fee applies). Watch an on-demand movie on the TV from the comfort of the twin beds. Sample a cool drink from the mini-bar or relax and refresh in the bath tub. Special touches include chocolates. <a href="#" data-toggle="modal" data-target="#reserve">+Reserve</a></p>
                        </div>           
                    </li><!--/.portfolio-item-->
                    <li class="portfolio-item bootstrap wordpress">
                        <div class="item-inner">
                            <div class="portfolio-image">
                                <img src="images/portfolio/thumb/item3.jpg" alt="">
                                <div class="overlay">
                                    <a class="preview btn btn-danger" title="Lorem ipsum dolor sit amet" href="images/portfolio/full/item3.jpg"><i class="fa fa-eye"></i></a>        
                                </div> 
								
                            </div>
                            <h5><strong>Twin Guest Room Plus</strong></h5>
							<p>Enjoy views of the pool from the balcony of this twin room with floor-to-ceiling windows. Catch up with work at the desk and stay connected with WiFi access (fee applies). Watch an on-demand movie on the TV from the comfort of the twin beds. Sample a cool drink from the mini-bar or relax and refresh in the bath tub. Special touches include chocolates. <a href="#" data-toggle="modal" data-target="#reserve">+Reserve</a></p>
                        </div>           
                    </li><!--/.portfolio-item-->
                    <li class="portfolio-item joomla wordpress apps">
                        <div class="item-inner">
                            <div class="portfolio-image">
                                <img src="images/portfolio/thumb/item4.jpg" alt="">
                                <div class="overlay">
                                    <a class="preview btn btn-danger" title="Lorem ipsum dolor sit amet" href="images/portfolio/full/item4.jpg"><i class="fa fa-eye"></i></a>          
                                </div>   
                            </div>
                            <h5><strong>Twin Hilton Guest Room</strong></h5>        
							<p>This bright room with twin beds features floor-to-ceiling windows and a balcony offering either a mountain, garden or city view. Catch up with work at the desk with an adjustable lamp. <a href="#" data-toggle="modal" data-target="#reserve">+Reserve</a></p>
                        </div>           
                    </li><!--/.portfolio-item-->
                    <li class="portfolio-item joomla html">
                        <div class="item-inner">
                            <div class="portfolio-image">
                                <img src="images/portfolio/thumb/item5.jpg" alt="">
                                <div class="overlay">
                                    <a class="preview btn btn-danger" title="Lorem ipsum dolor sit amet" href="images/portfolio/full/item5.jpg"><i class="fa fa-eye"></i></a>          
                                </div>  
								
                            </div>
                            <h5>King 3 Bed Presidental Suite</h5>  
							<p>This spacious and luxurious suite features 3 bedrooms, a separate living area with dining area, kitchenette, fireplace and a second bathroom.<br>Relax and entertain friends at the dining table or unwind and watch a movie on one of the TV screens provided. Special touches include mineral water, chocolates, flowers and fruit. Sleeps 6 adults. <a href="#" data-toggle="modal" data-target="#reserve">+Reserve</a></p>
                        </div>       
                    </li><!--/.portfolio-item-->
                    <li class="portfolio-item wordpress html">
                        <div class="item-inner">
                            <div class="portfolio-image">
                                <img src="images/portfolio/thumb/item6.jpg" alt="">
                                <div class="overlay">
                                    <a class="preview btn btn-danger" title="Lorem ipsum dolor sit amet" href="images/portfolio/full/item6.jpg"><i class="fa fa-eye"></i></a>           
                                </div>  
                            </div>
                            <h5>King Corner Suite</h5>         
							<p>Enjoy mountain or city views from the balcony of this spacious top-floor suite featuring king-size bed, living area, refrigerator and a second bathroom.<br>Work at the desk with adjustable lamp and WiFi (fee applies). Curl up on the sofa, watch TV and sample a cool drink from the mini-bar.<br>Refresh and relax in the one of the bathrooms with amenities including bathrobe. Additional touches include a daily newspaper, mineral water, chocolates, flowers and fruit. <a href="#" data-toggle="modal" data-target="#reserve">+Reserve</a><p>
                        </div>           
                    </li><!--/.portfolio-item-->
                    <li class="portfolio-item joomla html">
                        <div class="item-inner">
                            <div class="portfolio-image">
                                <img src="images/portfolio/thumb/item5.jpg" alt="">
                                <div class="overlay">
                                    <a class="preview btn btn-danger" title="Lorem ipsum dolor sit amet" href="images/portfolio/full/item5.jpg"><i class="fa fa-eye"></i></a>          
                                </div>  
                            </div>
                            <h5>King Executive Duplex</h5>  
							<p>This stylish room features floor-to-ceiling windows and a private balcony with pool views. Enjoy the benefits of access to the Executive Lounge including complimentary breakfast. <a href="#" data-toggle="modal" data-target="#reserve">+Reserve</a></p>
                        </div>       
                    </li><!--/.portfolio-item-->
                </ul>   
            </div><!--/.box-->
        </div><!--/.container-->
    </section><!--/#portfolio-->

    <!--<section id="pricing">
        <div class="container">
            <div class="box">
                <div class="center">
                    <h2>See our Pricings</h2>
                    <p class="lead">Pellentesque habitant morbi tristique senectus et netus et <br>malesuada fames ac turpis egestas.</p>
                </div>/.center
                <div class="big-gap"></div>
                <div id="pricing-table" class="row">
                    <div class="col-sm-4">
                        <ul class="plan">
                            <li class="plan-name">Basic</li>
                            <li class="plan-price">$29</li>
                            <li>5GB Storage</li>
                            <li>1GB RAM</li>
                            <li>400GB Bandwidth</li>
                            <li>10 Email Address</li>
                            <li>Forum Support</li>
                            <li class="plan-action"><a href="#" class="btn btn-primary btn-lg">Signup</a></li>
                        </ul>
                    </div>.col-sm-4
                    <div class="col-sm-4">
                        <ul class="plan featured">
                            <li class="plan-name">Standard</li>
                            <li class="plan-price">$49</li>
                            <li>10GB Storage</li>
                            <li>2GB RAM</li>
                            <li>1TB Bandwidth</li>
                            <li>100 Email Address</li>
                            <li>Forum Support</li>
                            <li class="plan-action"><a href="#" class="btn btn-primary btn-lg">Signup</a></li>
                        </ul>
                    </div>/.col-sm-4
                    <div class="col-sm-4">
                        <ul class="plan">
                            <li class="plan-name">Advanced</li>
                            <li class="plan-price">$199</li>
                            <li>30GB Storage</li>
                            <li>5GB RAM</li>
                            <li>5TB Bandwidth</li>
                            <li>1000 Email Address</li>
                            <li>Forum Support</li>
                            <li class="plan-action"><a href="#" class="btn btn-primary btn-lg">Signup</a></li>
                        </ul>
                    </div>/.col-sm-4
                </div> 
            </div> 
        </div>
    </section> #pricing

    <section id="about-us">
        <div class="container">
            <div class="box">
                <div class="center">
                    <h2>Meet the Team</h2>
                    <p class="lead">Pellentesque habitant morbi tristique senectus et netus et<br>malesuada fames ac turpis egestas.</p>
                </div>
                <div class="gap"></div>
                <div id="team-scroller" class="carousel scale">
                    <div class="carousel-inner">
                        <div class="item active">
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="member">
                                        <p><img class="img-responsive img-thumbnail img-circle" src="images/team1.jpg" alt="" ></p>
                                        <h3>Agnes Smith<small class="designation">CEO &amp; Founder</small></h3>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="member">
                                        <p><img class="img-responsive img-thumbnail img-circle" src="images/team2.jpg" alt="" ></p>
                                        <h3>Donald Ford<small class="designation">Senior Vice President</small></h3>
                                    </div>
                                </div>        
                                <div class="col-sm-4">
                                    <div class="member">
                                        <p><img class="img-responsive img-thumbnail img-circle" src="images/team3.jpg" alt="" ></p>
                                        <h3>Karen Richardson<small class="designation">Assitant Vice President</small></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="member">
                                        <p><img class="img-responsive img-thumbnail img-circle" src="images/team3.jpg" alt="" ></p>
                                        <h3>David Robbins<small class="designation">Co-Founder</small></h3>
                                    </div>
                                </div>   
                                <div class="col-sm-4">
                                    <div class="member">
                                        <p><img class="img-responsive img-thumbnail img-circle" src="images/team1.jpg" alt="" ></p>
                                        <h3>Philip Mejia<small class="designation">Marketing Manager</small></h3>
                                    </div>
                                </div>     
                                <div class="col-sm-4">
                                    <div class="member">
                                        <p><img class="img-responsive img-thumbnail img-circle" src="images/team2.jpg" alt="" ></p>
                                        <h3>Charles Erickson<small class="designation">Support Manager</small></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="left-arrow" href="#team-scroller" data-slide="prev">
                        <i class="icon-angle-left icon-4x"></i>
                    </a>
                    <a class="right-arrow" href="#team-scroller" data-slide="next">
                        <i class="icon-angle-right icon-4x"></i>
                    </a>
                </div>/.carousel
            </div>/.box
        </div>.container
    </section>#about-us-->

    <section id="contact">
        <div class="container">
            <div class="box last">
                <div class="row">
                    <div class="col-sm-6">
                        <h1>Contact Us</h1>
                        <p>Write your name, email and send us a message.</p>
                        <div class="status alert alert-success" style="display: none"></div>
                        <form id="main-contact-form" class="contact-form" name="contact-form" method="post" action="sendemail.php" role="form">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" required="required" placeholder="Name" name="name">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" required="required" placeholder="Email address" name="email">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <textarea name="message" id="message" required="required" class="form-control" rows="8" placeholder="Message" name="message"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-danger btn-lg">Send Message</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div><!--/.col-sm-6-->
                    <div class="col-sm-6">
                        <h1>Our Address</h1>
                        <div class="row">
                            <div class="col-md-6">
                                <address>
                                    <strong>Roof Top Building</strong><br>
                                    Romanat Square<br>
                                    Mekelle<br>
                                    <abbr title="Phone"><i class="fa fa-phone"></i>:</abbr> (123) 456-7890
                                </address>
                            </div>
                        </div>
                        <h1>Connect with us</h1>
                        <div class="row">
                            <div class="col-md-6">
                                <ul class="social">
                                    <li><a href="#"><i class="fa fa-facebook"></i> Facebook</a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i> Google Plus</a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i> Pinterest</a></li>
                                </ul>
                            </div>
                        </div>
                        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#map">Find us on Google Maps</button>
                    </div><!--/.col-sm-6-->
                </div><!--/.row-->
            </div><!--/.box-->
        </div><!--/.container-->
		<br>
		<div class="modal fade" id="map" style="padding-top:80px">
			<div class="modal-content">
				<div class="modal-body">
					<div class="row" id="map">
						<div class="col-md-6 col-md-offset-2 col-lg-6 col-lg-offset-2 col-xs-6 col-xs-offset-2 centered">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d969.9236369054175!2d39.47295430000001!3d13.492910050000006!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x166afd47704f5f0d%3A0xdb7b6f878846f3e9!2sRomanat+Square%2C+Mek&#39;ele!5e0!3m2!1sen!2set!4v1415866520141" width="600" height="450" frameborder="0" style="border:0"></iframe>
						</div>
					</div>
				</div>
			</div>
		</div>
    </section><!--/#contact-->
	<div class="clearfix"></div>

    <footer id="footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    &copy; 2014 <a href="#" title="Tadesse Hagos Hotel">Tadesse Hagos Hotel</a>. All Rights Reserved.
            </div>
        </div>
    </footer><!--/#footer-->

    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery.isotope/2.0.0/isotope.pkgd.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>
