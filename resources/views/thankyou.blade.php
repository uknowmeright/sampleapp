@extends('layout')

@section('content')
     <div class="container">
        <div class="content">
           <h1>Thank You!</h1>
           <h2>First Name: <?php echo $fname; ?></h2>
           <h2>Last Name: <?php echo $lname; ?></h2>
           <h2>Email:  <?php echo $email; ?></h2>
           <h2>Phone Number: <?php echo $phone; ?></h2>
        </div>
    </div>
@stop