@extends('store.basic')

@section('content')
    <!-- Container -->
    <form method="POST" action="/checkout" class="container padding-top-3x padding-bottom-2x">
        {{ csrf_field() }}
        <h1 class="space-top-half">Checkout</h1>
        <div class="row padding-top">

			<!-- Checkout Form -->
			<div class="col-sm-8 padding-bottom">
            	<div class="row">
              		<div class="col-sm-6">
		                <input type="text" class="form-control" name="co_f_name" placeholder="First name" required>
		                <input type="email" class="form-control" name="co_email" placeholder="Email" required>
		                <input type="text" class="form-control" name="co_address1" placeholder="Address 1" required>
              		</div>
              		<div class="col-sm-6">
		                <input type="text" class="form-control" name="co_l_name" placeholder="Last name" required>
		                <input type="tel" class="form-control" name="co_phone" placeholder="Phone" required>
		                <input type="text" class="form-control" name="co_address2" placeholder="Address 2">
              		</div>
            	</div><!-- .row -->
            	<input type="text" class="form-control" name="co_company" placeholder="Company">
            	<div class="row">
              		<div class="col-sm-6">
                		<div class="form-element form-select">
                  			<select class="form-control" name="co_country">
			                    <option value="">Country</option>
			                    <option value="Canada">Canada</option>
			                    <!-- <option value="gb">Great Britain</option>
			                    <option value="poland">Poland</option>
			                    <option value="switzerland">Switzerland</option>
			                    <option value="usa">USA</option> -->
                  			</select>
                		</div>
                		<div class="form-element form-select">
                  			<select class="form-control" name="co_city">
			                    <option value="">City</option>
			                    <option value="Vancouver">Vancouver</option>
			                    <option value="Edmonton">Edmonton</option>
			                    <option value="Toronto">Toronto</option>
                  			</select>
                		</div>
              		</div>
              		<div class="col-sm-6">
                		<!-- <div class="form-element form-select">
                  			<select class="form-control" name="co_state">
			                    <option value="">State</option>
			                    <option value="1">State 1</option>
			                    <option value="2">State 2</option>
			                    <option value="3">State 3</option>
			                    <option value="4">State 4</option>
			                    <option value="5">State 5</option>
                  			</select>
                		</div> -->
                		<input type="text" class="form-control" name="co_zip" placeholder="Postal Code" required>
              		</div>
            	</div><!-- .row -->
            	<div class="form-group">
              		<label class="radio radio-inline">
                		<input type="radio" name="co_shipping" checked> Ship to this address
					</label>
              		<label class="radio radio-inline">
                		<input type="radio" name="co_shipping"> Ship to different address
              		</label>
            	</div><!-- .form-group -->
          	</div><!-- .col-sm-8 -->

          	<!-- Sidebar -->
          	<div class="col-md-3 col-md-offset-1 col-sm-4 padding-bottom">
            	<aside>
					<h3>Cart total:</h3>
					<h4>${{ cart()->total() }}</h4>
					<p class="text-sm text-gray">* Note: This amount includes costs for shipping to address you provided.</p>
					<a href="/store/cart/review" class="btn btn-default btn-ghost icon-left btn-block">
	                	<i class="material-icons arrow_back"></i>
	                	Back To Cart
              		</a>
              		<button type="submit" class="btn btn-primary btn-block waves-effect waves-light space-top-none">Checkout</button>
            	</aside>
          	</div><!-- .col-md-3.col-sm-4 -->
        </div><!-- .row -->
	</form><!-- .container -->
@endsection
