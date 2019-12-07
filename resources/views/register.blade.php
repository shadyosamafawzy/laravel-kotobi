<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">
    <link rel="shortcut icon" href="{{asset('img/favicon.png')}}">

    <title>Register</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/bootstrap-reset.css')}}" rel="stylesheet">
    <!--external css-->
    <link href="{{asset('assets/font-awesome/css/font-awesome.css')}}" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <link href="{{asset('css/style-responsive.css')}}" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
    <script src="{{asset('js/html5shiv.js')}}"></script>
    <script src="{{asset('js/respond.min.js')}}"></script>
    <![endif]-->
</head>

<body class="login-body">

<div class="container">

    <form class="form-signin" action="" method="post">
        <h2 class="form-signin-heading">registration now</h2>

        <div class="login-wrap">
            <p>Enter your personal details below</p>
            <input type="text" class="form-control" name="name" placeholder="Full Name" autofocus required>
            <input type="email" class="form-control" name="email" placeholder="Email" autofocus required>
            {{csrf_field()}}
            <p> Enter your account details below</p>
            <input type="text" class="form-control" name="username" placeholder="User Name" autofocus required>
            <input type="password" class="form-control" name="password" placeholder="Password" required>
            <button class="btn btn-lg btn-login btn-block" type="submit">Submit</button>

            <div class="registration">
                Already Registered.
                <a class="" href="">
                    Login
                </a>
            </div>

        </div>

    </form>

</div>


</body>
</html>
