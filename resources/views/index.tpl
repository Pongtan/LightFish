<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/favicon.ico">

    <title>{{ config('app.appName') }}</title>

    <!-- Bootstrap core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/assets/css/jumbotron-narrow.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="http://cdn.bootcss.com/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<div class="container">
    <div class="header">
        <ul class="nav nav-pills pull-right" role="tablist">
            <li role="presentation" class="active"><a href="#">Home</a></li>
            <li role="presentation"><a href="https://goo.gl/J1M8Rj">Github</a></li>
        </ul>
        <h3 class="text-muted">{{ config('app.appName') }}</h3>
    </div>

    <div class="jumbotron">
        <h1>{{ lang('app.name') }}</h1>
        <p class="lead">A Tiny PHP Framework.</p>
        <p><a class="btn btn-lg btn-success" href="https://goo.gl/J1M8Rj" role="button">Github</a></p>
    </div>

    <div class="row marketing">
        <div class="col-lg-6">
            <h4>Simple</h4>
            <p>Keep it Simple.</p>

        </div>

        <div class="col-lg-6">
            <h4>Modern</h4>
            <p>Install via composer.</p>

        </div>
    </div>

    <div class="footer">
        <p>&copy; {{ config('app.appName') }} 2016</p>
    </div>

</div> <!-- /container -->


</body>
</html>




