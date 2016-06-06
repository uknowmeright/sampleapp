@extends('layout')

@section('content')
     <div class="container">
        <div class="content">
        	<div class="row">
    			<div class="col-md-8">

    				{!! Form::open(array('route' =>'infoformsubmit.store' ,'method'=>'post', 'id'=>'infoForm')) !!}

    				<?php echo Form::token(); ?>
					  <fieldset class="form-group">
					    <label for="firstName">First Name</label>
					    <input type="text" class="form-control" name="firstName" placeholder="First" minlength="2" required>
					  </fieldset>
					  <fieldset class="form-group">
					    <label for="lastName">Last Name</label>
					    <input type="text" class="form-control" name="lastName" placeholder="Last" minlength="2" required>
					  </fieldset>
					  <fieldset class="form-group">
					    <label for="email">Email address</label>
					    <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
					  </fieldset>
					  <fieldset class="form-group">
					    <label for="phone">Phone Number</label>
					    <input type="number" class="form-control" oninput="javascript: if (this.value.length > 10) this.value = this.value.slice(0, 9);" id="phone" name="phone" placeholder="Phone Number" required>
					  </fieldset>
				      <div class="button">
				    	<?php echo Form::submit('Submit'); ?>
				      </div>
				      <!-- display backend errors -->
				      	@if (count($errors) > 0)
						    <div class="alert alert-danger">
						        <ul>
						            @foreach ($errors->all() as $error)
						                <li>{{ $error }}</li>
						            @endforeach
						        </ul>
						    </div>
						@endif
					{{ Form::close() }}				
    			</div>
    			<div class="col-xs-4 rightDiv"> 
    				<h2> Contact me </h2>
    				<div id="contactInfo">
    					Paul Lehn <br>
    					1650 Presidential Way <br>
    					West Palm Beach 33401 <br>
    					United States <br>
    					<p>
    					or 
    					<p>
    					tel: 8033695584
    				</div>
    			</div>
			</div>
        </div>
    </div>

	<script>
		$("#infoForm").validate();
		$.validator.methods.email = function( value, element ) {
				return this.optional( element ) || /[a-z]+@[a-z]+\.[a-z]+/.test( value );
		}
	</script>  
@stop