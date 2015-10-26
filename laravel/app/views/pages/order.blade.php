@extends('layout')

@section('title') Guna Trading PLC.@stop

@section('content')
    <!-- Page Content -->
    <div class="container">

        <!-- Marketing Icons Section -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Order Products Online
                </h1>
            </div>
        </div>
        <!-- /.row -->

        <!-- Contact Form -->
        <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
        <div class="row">
            <h5 style="text-align: center" class="col-md-12"><strong>We are at your disposal. We are a click away from your orders. Fill the form and send us a message.</strong></h5>
            <div class="col-md-7">
                <form name="sentMessage" id="contactForm" novalidate>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Contact Person Full Name: </label>
                            <input type="text" tabindex=1 class="form-control" id="name" required data-validation-required-message="Please enter your name.">
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Company Name:</label>
                            <input type="tel" tabindex=2 class="form-control" id="phone" required data-validation-required-message="Please enter your phone number.">
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Email Address:</label>
                            <input type="email" tabindex=3 class="form-control" id="email" required data-validation-required-message="Please enter your email address.">
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Phone Number:</label>
                            <input type="email" tabindex=4 class="form-control" id="email" required data-validation-required-message="Please enter your email address.">
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Country:</label>
                            <input type="email" tabindex=5 class="form-control" id="email" required data-validation-required-message="Please enter your email address.">
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Product:</label>
                            <select name="product" tabindex=6 class="form-control">
								<option value="">Select Product</option>
								<option value="">Natural Gum</option>
								<option value="">Oil Seeds</option>
								<option value="">Coffee</option>
							</select>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Message:</label>
                            <textarea rows="10" tabindex=7 cols="100" class="form-control" id="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
                        </div>
                    </div>
                    <div id="success"></div>
                    <!-- For success/fail messages -->
                    <button type="submit" tabindex=8 class="btn btn-primary">Send Orders</button>
                </form>
            </div>
			<div class="col-md-5">
				<div class="row">
					The Following Products Can be Ordered
					@foreach(Product::all() as $product)
					{{ $product->name }}
					@endforeach
				</div><br>
				<label>Add New Product</label>
				{{ Form::open(['route', 'add_product']) }}
				<div class="form-group">
					<label for="name">Name</label>
					{{ Form::text('name', Input::get('name'), [
						'class' => 'form-control',
						'placeholder' => 'Product Name',
						'id' => 'name',
						'tabindex' => 1
					]); }}
				</div>
				<div class="form-group">
					<label for="summernote">Description</label>
					{{ Form::textarea('summernote', Input::get('description'), [
						'class' => 'form-control',
						'placeholder' => 'Product Description',
						'id' => 'summernote',
						'tabindex' => 2
					]); }}
				</div>
				<button type="submit" tabindex=3 class="btn btn-primary">Add Product</button>
				{{ Form::close() }}
			</div>

        </div>
		<hr/>
        <!-- /.row -->
@stop
