@extends('layout')

@section('title') Guna Trading PLC.@stop

@section('content')
    <!-- Page Content -->
    <div class="container">

        <!-- Marketing Icons Section -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Contact Us
                </h1>
            </div>
        </div>
        <!-- /.row -->

        <!-- Contact Form -->
        <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
        <div class="row">
		<div class="col-lg-6 col-md-6">
            <h5 style="text-align: center" class="col-md-12"><strong>Write to us your comments and question and we will get back to you as soon as possible.</strong></h5>
            <div class="col-md-8">
                <form name="sentMessage" id="contactForm" novalidate>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Name:</label>
                            <input type="text" class="form-control" id="name" required data-validation-required-message="Please enter your name.">
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Email Address:</label>
                            <input type="email" class="form-control" id="email" required data-validation-required-message="Please enter your email address.">
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Message:</label>
                            <textarea rows="10" cols="100" class="form-control" id="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
                        </div>
                    </div>
                    <div id="success"></div>
                    <!-- For success/fail messages -->
                    <button type="submit" class="btn btn-primary">Send Message</button>
                </form>
            </div>
		</div>
		<div class="col-lg-6 col-md-6">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3940.6124672708756!2d38.81687500000001!3d9.00776000000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x164b8535b96b6c4f%3A0x9f6dc4c8958f6dd4!2sGuna+Trading+House+Plc!5e0!3m2!1sen!2set!4v1412591270532" width="600" height="450" frameborder="0" style="border:0"></iframe>
		</div>
        </div>
		<hr/>
        <!-- /.row -->
@stop
