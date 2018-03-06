<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>eCommerce</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        {{ Html::style('css/normalize.css')}}
        {{ Html::style('css/main.css')}}
        {{ Html::script('js/vendor/modernizr-2.6.2.min.js')}}
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

        <div id="wrapper">
            <header>
                <section id="top-area">
                    <p>Phone orders: 1-800-0000 | Email us: <a href="mailto:office@shop.com">office@shop.com</a></p>
                </section><!-- end top-area -->
                <section id="action-bar">
                    <div id="logo">
                        <a href="/"><span id="logo-accent">e</span>Commerce</a>
                    </div><!-- end logo -->

                    <nav class="dropdown">
                        <ul>
                            <li>
                                <a href="#">Shop by Category {{ Html::image('img/down-arrow.gif', 'Shop by Category')}}</a>
                                <ul>
                                    @foreach($catnav as $cat)
                                        <li>{{ Html::link('/store/category/'.$cat->id, $cat->name) }}</li>
                                    @endforeach
                                </ul>
                            </li>
                        </ul>
                    </nav>
                    <div id="search-form">
                        <form method="POST" action="{{ url("/search") }}">
                            {{ csrf_field() }}
                            <div class="input-group">
                                <input type="text" name="search" class="form-control" placeholder="Search for ...">
                                <span class="input-group-btn">
                                    <button type="submit" class="btn btn-default">Search</button>
                                </span>
                            </div>     
                        </form>
                    </div><!-- end search-form -->
                    <div id="user-menu">
                        @if (Auth::guest())
                        <nav id="signin" class="dropdown">
                            <ul>
                                <li>
                                    <a href="#">{{ Html::image('img/user-icon.gif', 'Sign In') }} Sign In
                                    {{ Html::image('img/down-arrow.gif', 'Sign In') }}</a>
                                    <ul>                                
                                        <li><a href="{{ route('login') }}">Sign In</a></li>
                                        <li><a href="{{ route('register') }}">Sign Up</a></li> 
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                        @else
                        <nav class="dropdown">
                            <ul>
                                <li>
                                    <a href="#">{{ Html::image('img/user-icon.gif', Auth::user()->name )}} {{ Auth::user()->name }} {{ Html::image('img/down-arrow.gif', Auth::user()->name )}} </a>
                                    <ul>
                                        @if(Auth::id() == 2)
                                            <li>{{ Html::link('admin/categories', 'Manage Categories')}}</li>
                                            <li>{{ Html::link('admin/products', 'Manage Products')}}</li>
                                        @endif
                                        <li>
                                            <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Sign Out
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>                 
                        @endif
                    </div><!-- end user-menu -->

                    <div id="view-cart">
                        <a href="{{url('/cart')}}">{{ Html::image('img/blue-cart.gif', 'View Cart') }} View Cart ({{Cart::count()}})</a>
                    </div><!-- end view-cart -->
                </section><!-- end action-bar -->
            </header>

            @yield('promo')

            <hr />
            <section id="main-content" class="clearfix">
                @if(Session::has('message'))
                    <p class="alert">{{ Session::get('message') }}</p>
                @endif

                @yield('content')
            </section><!-- end main-content -->
            <hr />

                @yield('pagination')

            <footer>
                <section id="contact">
                    <h3>For phone orders please call 1-800-000. You<br>can also email us at <a href="mailto:office@shop.com">office@shop.com</a></h3>
                </section><!-- end contact -->

                <hr />

                <section id="links">
                    <div id="my-account">
                        <h4>MY ACCOUNT</h4>
                        <ul>
                            <li><a href="{{ route('login') }}">Sign In</a></li>
                            <li><a href="{{ route('register') }}">Sign Up</a></li>
                            <li><a href="#">Shopping Cart</a></li>
                        </ul>
                    </div><!-- end my-account -->
                    <div id="info">
                        <h4>INFORMATION</h4>
                        <ul>
                            <li><a href="#">Terms of Use</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                        </ul>
                    </div><!-- end info -->
                    <div id="extras">
                        <h4>EXTRAS</h4>
                        <ul>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Contact Us</a></li>
                        </ul>
                    </div><!-- end extras -->
                </section><!-- end links -->

                <hr />

                <section class="clearfix">
                    <div id="copyright">
                        <div id="logo">
                            <a href="#"><span id="logo-accent">e</span>Commerce</a>
                        </div><!-- end logo -->
                        <p id="store-desc">This is a short description of the store.</p>
                        <p id="store-copy">&copy; 2013 eCommerce. Theme designed by Adi Purdila.</p>
                    </div><!-- end copyright -->
                    <div id="connect">
                        <h4>CONNECT WITH US</h4>
                        <ul>
                            <li class="twitter"><a href="#">Twitter</a></li>
                            <li class="fb"><a href="#">Facebook</a></li>
                        </ul>
                    </div><!-- end connect -->
                    <div id="payments">
                        <h4>SUPPORTED PAYMENT METHODS</h4>
                        <img src="img/payment-methods.gif" alt="Supported Payment Methods">
                        {{ Html::image('img/payment-methods.gif', 'Supported Payment Methods') }}
                    </div><!-- end payments -->
                </section>
            </footer>
        </div><!-- end wrapper -->
{{ Html::script('js/vendor/modernizr-2.6.2.min.js')}}
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script>window.jQuery || document.write("{{ Html::script('js/vendor/jquery-1.9.1.min.js')}}")</script>
        {{ Html::script('js/plugins.js')}}
        {{ Html::script('js/main.js')}}
        
        <!-- <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.1.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script> -->

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src='//www.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));
        </script>
    </body>
</html>
