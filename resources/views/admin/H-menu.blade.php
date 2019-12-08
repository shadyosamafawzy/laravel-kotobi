<header class="header white-bg">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="fa fa-bar"></span>
            <span class="fa fa-bar"></span>
            <span class="fa fa-bar"></span>
        </button>

        <!--logo start-->
        <a href="#" class="logo" >Kot<span>obi</span></a>
        <!--logo end-->
        <div class="horizontal-menu navbar-collapse collapse ">
            <ul class="nav navbar-nav">
                <li><a href="#">Dashboard</a></li>
                <li class="active"><a href="#">Components</a></li>
                <li class="dropdown">
                    <a data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle" href="#">UI Element <b class=" fa fa-angle-down"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="general.html">General</a></li>
                        <li><a href="buttons.html">Buttons</a></li>
                        <li><a href="widget.html">Widget</a></li>
                        <li><a href="slider.html">Slider</a></li>
                        <li><a href="nestable.html">Nestable</a></li>
                        <li><a href="font_awesome.html">Font Awesome</a></li>
                    </ul>
                </li>
            </ul>

        </div>


        <div class="top-nav ">

            <ul class="nav pull-right top-menu">
                <li>
                    <input type="text"  class="form-control search" placeholder=" Search">
                </li>
                <li class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <img alt="" src="">
                        <span class="username">{{session('username')}}</span>
                        <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu extended logout">
                        <div class="log-arrow-up"></div>
                        <li><a href="logout"><i class="fa fa-key"></i> Log Out</a></li>
                    </ul>
                </li>
            </ul>
        </div>

    </div>

</header>