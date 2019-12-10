<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">
    <meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <link rel="shortcut icon" href="{{asset('img/favicon.png')}}">

    <title>@yield('title')</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/bootstrap-reset.css')}}" rel="stylesheet">
    <!--external css-->
    <link href="{{asset('assets/font-awesome/css/font-awesome.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css')}}" rel="stylesheet" type="text/css" media="screen"/>
    <link rel="stylesheet" href="{{asset('css/owl.carousel.css')}}" type="text/css">
    <!-- Custom styles for this template -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <link href="{{asset('css/style-responsive.css')}}" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
    <script src="{{asset('js/html5shiv.js')}}"></script>
    <script src="{{asset('js/respond.min.js')}}"></script>
    <![endif]-->
</head>

<body>

<section id="container" >
    <!--header start-->
    <header class="header white-bg">
        <div class="sidebar-toggle-box">
            <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
        </div>
        <!--logo start-->
        <a href="home" class="logo">Kot<span>obi</span></a>
        <!--logo end-->
        <div class="top-nav ">
            <!--search & user info start-->
            <ul class="nav pull-right top-menu">
                <li>
                    <input type="text" class="form-control search" placeholder="Search">
                </li>
                <!-- user login dropdown start-->
                <li class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <img alt="" src="">
                        <span class="username">{{session('username')}}</span>
                        <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu extended logout">
                        <li><a href="logout"><i class="fa fa-key"></i> Log Out</a></li>
                    </ul>
                </li>
                <!-- user login dropdown end -->
            </ul>
            <!--search & user info end-->
        </div>
    </header>
    <!--header end-->
    <!--sidebar start-->
    <aside>
        <div id="sidebar"  class="nav-collapse ">
            <!-- sidebar menu start-->
            <ul class="sidebar-menu" id="nav-accordion">
                <li>
                    <a class="active" href="home">
                        <i class="fa fa-dashboard"></i>
                        <span>Dashboard</span>
                    </a>
                </li>

                <li class="sub-menu">
                    <a href="javascript:;" >
                        <i class="fa fa-laptop"></i>
                        <span>Authors</span>
                    </a>
                    <ul class="sub">
                        <li><a  href="{{route('authorsAdmin')}}">All Authors</a></li>
                        <li><a  href="{{route('addAuthorAdmin')}}">Add Authors</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;" >
                        <i class="fa fa-laptop"></i>
                        <span>Categories</span>
                    </a>
                    <ul class="sub">
                        <li><a  href="{{route('categoriesAdmin')}}">All Categories</a></li>
                        <li><a  href="{{route('addCategoryAdmin')}}">Add Category</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;" >
                        <i class="fa fa-laptop"></i>
                        <span>Books</span>
                    </a>
                    <ul class="sub">
                        <li><a  href="{{route('booksAdmin')}}">All Books</a></li>
                        <li><a  href="{{route('addBookAdmin')}}">Add Book</a></li>
                    </ul>
                </li>


            </ul>
            <!-- sidebar menu end-->
        </div>
    </aside>
    <!--sidebar end-->
    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">

            @yield('content')

        </section>
    </section>
    <!--main content end-->
    <!--footer start-->
    <footer class="site-footer">
        <div class="text-center">
            2013 &copy; FlatLab by VectorLab.
            <a href="#" class="go-top">
                <i class="fa fa-angle-up"></i>
            </a>
        </div>
    </footer>
    <!--footer end-->
</section>

<!-- js placed at the end of the document so the pages load faster -->
<script src="{{asset('js/jquery.js')}}"></script>
<script src="{{asset('js/jquery-1.8.3.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script class="include" type="text/javascript" src="{{asset('js/jquery.dcjqaccordion.2.7.js')}}"></script>
<script src="{{asset('js/jquery.scrollTo.min.js')}}"></script>
<script src="{{asset('js/jquery.nicescroll.js')}}" type="text/javascript"></script>
<script src="{{asset('js/jquery.sparkline.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js')}}"></script>
<script src="{{asset('js/owl.carousel.js')}}" ></script>
<script src="{{asset('js/jquery.customSelect.min.js')}}" ></script>
<script src="{{asset('js/respond.min.js')}}" ></script>

<!--common script for all pages-->
<script src="{{asset('js/common-scripts.js')}}"></script>

<!--script for this page-->
<script src="{{asset('js/sparkline-chart.js')}}"></script>
<script src="{{asset('js/easy-pie-chart.js')}}"></script>

<script>

    //owl carousel

    $(document).ready(function() {
        $("#owl-demo").owlCarousel({
            navigation : true,
            slideSpeed : 300,
            paginationSpeed : 400,
            singleItem : true,
            autoPlay:true

        });
    });

    //custom select box

    $(function(){
        $('select.styled').customSelect();
    });

</script>

</body>
</html>
