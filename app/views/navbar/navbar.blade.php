<!-- Navigation -->
<nav class="navbar navbar-info navbar-fixed-top" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <!--a class="navbar-brand" href="index.html">Bill Gates School</a-->
            {{HTML::link('/', 'Bill Gates School', array('class'=> 'navbar-brand'))}}
        </div>
     
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <!--a href="about.html">About</a-->
                    {{HTML::link('/about','Nosotros')}}
                </li>
                <li>
                    <!--a href="services.html">Services</a-->
                    {{HTML::link('/services','Servicios')}}
                </li>
                <li>
                    <!--a href="contact.html">Contact</a-->
                    {{HTML::link('/contact','Contacto')}}
                </li>
                <li>
                    <a href="https://www.youtube.com/user/aguilasamericanas/videos" target="_blank">Videos</a>
                </li>
                <li>
                    <a href="http://classonlinebillgatesschool.blogspot.com/" target="_blank">Virtual Classroom</a>                
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->

</nav>