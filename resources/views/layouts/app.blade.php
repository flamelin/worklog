<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Work Log</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
</head>
<body>

	<body>

    <div class="container">
      <div class="header clearfix">
        <!-- <nav>
          <ul class="nav nav-pills pull-right">
            <li role="presentation" class="active"><a href="{{ url('/') }}">Home</a></li>
            <li role="presentation"><a href="#">About</a></li>
          </ul>
        </nav> -->
        <h3 class="text-muted"><a href="{{ url('/') }}">Work Log</a></h3>
      </div>

      @yield('content')

    </div> <!-- /container -->
  </body>



	<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</body>
</html>
