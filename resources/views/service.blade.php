@extends('layouts.app')

@section('content')
<div class="contact-form base-padd">
<h2>CONTACT WITH US</h2>
	<div class="rq-form">
		<form class="form-horizontal">
		<div class="row">
			<div class="col-sm-6">
				<div class="form-custom">
			    <label for="inputEmail3" class="control-label">Full Name</label>
			    <div class="input">
			      <input type="email" class="form-control" id="inputEmail3" placeholder="Full Name">
			    </div>
			  </div>	
			</div><!-- /.col-sm-6 -->
			<div class="col-sm-6">
				<div class="form-custom">
			    <label for="inputEmail4" class=" control-label">Email</label>
			    <div class="input">
			      <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
			    </div>
			  </div>	
			</div><!-- /.col-sm-6 -->
		</div><!-- /.row -->
		  <div class="form-custom">
			    <label for="inputnumber3" class="control-label">Order Number</label>
			    <div class="input">
			      <input type="text" class="form-control" id="inputnumber3" placeholder="Order Number">
			    </div>
			</div>	
		  <div class="form-custom">
		    <label class="control-label">Message</label>
		    <div class="textarea">
		      <textarea rows="6"></textarea>
		    </div>
		  </div>
		  <div class="form-custom pull">
		    <button type="submit" class="btn contact">Submit</button>
		    
		  </div>
		</form>
	</div><!-- /.rq-form -->
</div><!-- /.contact-form -->



<div class="stores base-padd">
<h2>Our Stores</h2>
	<div class="container">
		<div class="row">
			<div class="col-sm-4">
				<div class="inner-element">
					<i class="rq-phone"></i>
					<h4 class="font-25-pla-reg-0">Call Us At</h4>
					<p>(+678) 9870352</p>
					<p>(+678) 00017338829</p>
					<p>dressrental@mail.com</p>
				</div><!-- /.inner-element -->	
			</div><!-- /.col-sm-4 -->

			<div class="col-sm-4">
				<div class="inner-element">
				<i class="rq-map-marker"></i>
					<h4 class="font-25-pla-reg-0">Our Address</h4>
					<div class="portion">
						<h4 class="font-18-pla-reg-2">Head Office</h4>
						<p>Road 3, West side lane</p>
						<p>Texas, USA</p>
					</div><!-- /.portion -->
					<div class="portion">
						<h4 class="font-18-pla-reg-2">New york Office</h4>
						<p>Road 11, Library road</p>
						<p>NY, USA</p>
					</div><!-- /.portion -->
				</div><!-- /.inner-element -->	
			</div><!-- /.col-sm-4 -->

			<div class="col-sm-4">
				<div class="inner-element">
				  <i class="rq-clock"></i>
					<h4 class="font-25-pla-reg-0">WORKING HOUR</h4>
					<p>Monday - Friday: 6am - 10pm</p>
					<p>Saturday - Sunday: 10am - 2pm</p>
				</div><!-- /.inner-element -->	
			</div><!-- /.col-sm-4 -->

		</div><!-- /.row -->
	</div><!-- /.container -->
</div><!-- /.stores -->
@endsection

