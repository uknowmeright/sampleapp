<!DOCTYPE html>
<html>
    <head>
        <title>Sample App</title>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
        <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.15.0/jquery.validate.js"></script>
        <!-- <link rel="stylesheet" href="/js/bootstrap.min.js"> -->
        <link href="css/app.css" rel="stylesheet">


    </head>
    <body>
        <nav class="navbar navbar-default">
          <div class="container-fluid">
            <div class="navbar-header">
              <a class="navbar-brand" href="#">SampleApp</a>
            </div>
            <ul class="nav navbar-nav">
              <li><a href="/">Home</a></li>
              <li><a href="/about">about</a></li>
              <li><a href="/contact">contact</a></li> 
              <li><a href="/terms">terms</a></li> 
            </ul>
          </div>
        </nav>

        @yield('content')
    </body>
</html>
