<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport"    content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author"      content="Sergey Pozhilov (GetTemplate.com)">
    
    <title> Plabooks! </title>

    <link rel="shortcut icon" href="/images/gt_favicon.png">
    
    <link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/font-awesome.min.css">

    <!-- Custom styles for our template -->
    <link rel="stylesheet" href="/css/bootstrap-theme.css" media="screen" >
    <link rel="stylesheet" href="/css/main.css">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="assets/js/html5shiv.js"></script>
    <script src="assets/js/respond.min.js"></script>
    <![endif]-->
</head>

<body class="home">
    <!-- Fixed navbar -->
    <div class="navbar navbar-inverse navbar-fixed-top headroom" >
        <div class="container">
            <div class="navbar-header">
                <!-- Button for smallest screens -->
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                <a class="navbar-brand" href="index.html"><img src="" alt="Progressus HTML5 template"></a>
            </div>
            <div class="navbar-collapse collapse">

                <ul class="nav navbar-nav pull-right">
                    <form class="navbar-form navbar-left" role="search">
                      <div class="form-group">
                        <input type="text" class="form-control" placeholder="Search">
                      </div>
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                    @if (Auth::guest())

                        <li><a class="btn" href="{{ url('/login') }}">Registrarse / Ingresar</a></li>
                    @else
                        <li class="active"><a href="/inicio">Home</a></li>
                        <li class="dropdown">

                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </div> 
    <!-- /.navbar -->


    @yield('content')


    <footer id="footer" class="top-space">

        <div class="footer1">
            <div class="container">
                <div class="row">
                    
                    <div class="col-md-3 widget">
                        <h3 class="widget-title">Contacto</h3>
                        <div class="widget-body">
                            <p>+569 85870841<br>
                                <a href="mailto:#">diazmenasebastian@gmail.com</a><br>
                                <br>
                                Valparaíso, Chile
                            </p>    
                        </div>
                    </div>

                    <div class="col-md-3 widget">
                        <h3 class="widget-title">Follow me</h3>
                        <div class="widget-body">
                            <p class="follow-me-icons">
                                <a href=""><i class="fa fa-twitter fa-2"></i></a>
                                <a href=""><i class="fa fa-github fa-2"></i></a>
                                <a href=""><i class="fa fa-facebook fa-2"></i></a>
                            </p>    
                        </div>
                    </div>

                    <div class="col-md-6 widget">
                        <h3 class="widget-title">Text widget</h3>
                        <div class="widget-body">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi, dolores, quibusdam architecto voluptatem amet fugiat nesciunt placeat provident cumque accusamus itaque voluptate modi quidem dolore optio velit hic iusto vero praesentium repellat commodi ad id expedita cupiditate repellendus possimus unde?</p>
                            <p>Eius consequatur nihil quibusdam! Laborum, rerum, quis, inventore ipsa autem repellat provident assumenda labore soluta minima alias temporibus facere distinctio quas adipisci nam sunt explicabo officia tenetur at ea quos doloribus dolorum voluptate reprehenderit architecto sint libero illo et hic.</p>
                        </div>
                    </div>

                </div> <!-- /row of widgets -->
            </div>
        </div>

        <div class="footer2">
            <div class="container">
                <div class="row">
                    
                    <div class="col-md-6 widget">
                        <div class="widget-body">
                            <p class="simplenav">
                                <a href="#">Home</a> | 
                                <b><a href="signup.html">Sign up</a></b>
                            </p>
                        </div>
                    </div>

                    <div class="col-md-6 widget">
                        <div class="widget-body">
                            <p class="text-right">
                                Copyright &copy; 2016, Sebastián Díaz. Designed by <a href="http://gettemplate.com/" rel="designer">gettemplate</a> 
                            </p>
                        </div>
                    </div>

                </div> <!-- /row of widgets -->
            </div>
        </div>

    </footer>   
        




    <!-- JavaScript libs are placed at the end of the document so the pages load faster -->
    <!-- jQuery -->
    <script src="/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="/js/bootstrap.min.js"></script>

    <script src="/js/headroom.min.js"></script>
    <script src="/js/jQuery.headroom.min.js"></script>
    <script src="/js/template.js"></script>
</body>
</html>