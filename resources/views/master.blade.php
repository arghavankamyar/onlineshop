
<!DOCTYPE html>
<!--[if lt IE 8]>      <html class="no-js lt-ie10 lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie10 lt-ie9"> <![endif]-->
<!--[if IE 9]>         <html class="no-js lt-ie10"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <title>Webmarket HTML Template - Home Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="ProteusThemes">

    <!--  Google Fonts  -->
    <link href='http://fonts.googleapis.com/css?family=Pacifico|Open+Sans:400,700,400italic,700italic&amp;subset=latin,latin-ext,greek' rel='stylesheet' type='text/css'>

    <!-- Twitter Bootstrap -->
    <link href="{{asset('stylesheets/bootstrap.css')}}" rel="stylesheet">
    <link href="{{asset('stylesheets/responsive.css')}}" rel="stylesheet">
    <!-- Slider Revolution -->
    <link rel="stylesheet" href="{{asset('js/rs-plugin/css/settings.css')}}" type="text/css"/>
    <!-- jQuery UI -->
    <link rel="stylesheet" href="{{asset('js/jquery-ui-1.10.3/css/smoothness/jquery-ui-1.10.3.custom.min.css')}}" type="text/css"/>
    <!-- PrettyPhoto -->
    <link rel="stylesheet" href="{{asset('js/prettyphoto/css/prettyPhoto.css')}}" type="text/css"/>
    <!-- main styles -->

    <link href="{{asset('stylesheets/main.css')}}" rel="stylesheet">
    <link href="{{asset('rtl.css')}}" rel="stylesheet">



    <!-- Modernizr -->
    <script src="js/modernizr.custom.56918.js"></script>

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/apple-touch/144.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/apple-touch/114.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/apple-touch/72.png">
    <link rel="apple-touch-icon-precomposed" href="images/apple-touch/57.png">
    <link rel="shortcut icon" href="images/apple-touch/57.png">
</head>


<body class="">

<div class="master-wrapper">

    <!--  ==========  -->
    <!--  = Header =  -->
    <!--  ==========  -->
    <header id="header">
        <div class="container">
            <div class="row">

                <!--  ==========  -->
                <!--  = Logo =  -->
                <!--  ==========  -->
                <div class="span7">
                    <a class="brand" href="index.html">
                        <img src="images/logo.png" alt="Webmarket Logo" width="48" height="48" />
                        <span class="pacifico">Webmarket</span>
                        <span class="tagline">قالب فروشگاهی HTML قدرتمند</span>
                    </a>
                </div>

                <!--  ==========  -->
                <!--  = Social Icons =  -->
                <!--  ==========  -->
                <div class="span5">
                    <div class="topmost-line">
                        <div class="lang-currency">
                            <div class="dropdown js-selectable-dropdown">
                                <a data-toggle="dropdown" class="selected" href="#"><span class="js-change-text"><i class="famfamfam-flag-gb"></i> انگلیسی (EN)</span> <b class="caret"></b></a>
                                <!-- for all available country flags look the styles in lib/components/_flags.scss -->
                                <ul class="dropdown-menu js-possibilities" role="menu" aria-labelledby="dLabel">
                                    <li><a href="#"><i class="famfamfam-flag-gb"></i> انگلیسی (EN)</a></li>
                                    <li><a href="#"><i class="famfamfam-flag-si"></i> اسلوانیایی (SI)</a></li>
                                    <li><a href="#"><i class="famfamfam-flag-de"></i> آلمانی (DE)</a></li>
                                    <li><a href="#"><i class="famfamfam-flag-fr"></i> فرانسوی (FR)</a></li>
                                    <li><a href="#"><i class="famfamfam-flag-es"></i> اسپانیولی (ES)</a></li>
                                </ul>
                            </div>
                            <div class="dropdown js-selectable-dropdown">
                                <a data-toggle="dropdown" class="selected" href="#"><span class="js-change-text">USD ($)</span> <b class="caret"></b></a>
                                <ul class="dropdown-menu js-possibilities" role="menu" aria-labelledby="dLabel">
                                    <li><a href="#">USD ($)</a></li>
                                    <li><a href="#">EUR (€)</a></li>
                                    <li><a href="#">YEN (¥)</a></li>
                                    <li><a href="#">GBP (£)</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="top-right">
                        <div class="icons">
                            <a href="http://www.facebook.com/ProteusNet"><span class="zocial-facebook"></span></a>
                            <a href="skype:primozcigler?call"><span class="zocial-skype"></span></a>
                            <a href="https://twitter.com/proteusnetcom"><span class="zocial-twitter"></span></a>
                            <a href="http://eepurl.com/xFPYD"><span class="zocial-rss"></span></a>
                            <a href="#"><span class="zocial-wordpress"></span></a>
                            <a href="#"><span class="zocial-android"></span></a>
                            <a href="#"><span class="zocial-html5"></span></a>
                            <a href="#"><span class="zocial-windows"></span></a>
                            <a href="#"><span class="zocial-apple"></span></a>
                        </div>
                        <div class="register">
                            <a href="#loginModal" role="button" data-toggle="modal">ورود</a> یا
                            <a href="#registerModal" role="button" data-toggle="modal">ثبت نام</a>
                        </div>
                    </div>
                </div> <!-- /social icons -->
            </div>
        </div>
    </header>

    <!--  ==========  -->
    <!--  = Main Menu / navbar =  -->
    <!--  ==========  -->
    <div class="navbar navbar-static-top" id="stickyNavbar">
        <div class="navbar-inner">
            <div class="container">
                <div class="row">
                    <div class="span9">
                        <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>

                        <!--  ==========  -->
                        <!--  = Menu =  -->
                        <!--  ==========  -->
                        <div class="nav-collapse collapse">
                            <ul class="nav" id="mainNavigation">
                                <li class="dropdown active">
                                    <a href="index.html" class="dropdown-toggle"> خانه <b class="caret"></b> </a>
                                    <ul class="dropdown-menu">
                                        <li class="dropdown active">
                                            <a href="index.html"><i class="icon-caret-left pull-right visible-desktop"></i> رنگ های پوسته</a>
                                            <ul class="dropdown-menu">
                                                <li class="active"><a href="index.html">پوسته پیش فرض</a></li>
                                                <li><a href="index-grass-green.blade.php">پوسته سبز چمنی</a></li>
                                                <li><a href="index-oil-green.blade.php">پوسته سبز روغنی</a></li>
                                                <li><a href="index-gray.blade.php">پوسته خاکستری</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown">
                                            <a href="index-boxed-solid.blade.php"><i class="icon-caret-left pull-right visible-desktop"></i> ورژن boxed</a>
                                            <ul class="dropdown-menu">
                                                <li><a href="index-boxed-solid.blade.php">Boxed - با رنگ پس زمینه ثابت</a></li>
                                                <li><a href="index-boxed-pattern.blade.php">Boxed - با پس زمینه الگو</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>

                                <li class="dropdown">
                                    <a href="shop.blade.php" class="dropdown-toggle"> فروشگاه <b class="caret"></b> </a>
                                    <ul class="dropdown-menu">
                                        @foreach($brands->all() as $brand)
                                            <li><a href="{{url('product/brand/' . $brand->id . '/' . $brand->brand_name)}}">{{$brand->brand_name}}</a></li>
                                        @endforeach
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="blog.blade.php" class="dropdown-toggle">بلاگ <b class="caret"></b> </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="blog.blade.php">قالب بندی پیش فرض</a></li>
                                        <li><a href="blog-single.blade.php">تک نوشته</a></li>
                                        <li><a href="blog-search.blade.php">نتایج جستجو</a></li>
                                        <li><a href="404.blade.php">صفحه 404</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="features.blade.php" class="dropdown-toggle">امکانات <b class="caret"></b> </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="icons.blade.php">آیکن ها</a></li>
                                        <li class="dropdown">
                                            <a href="features.blade.php" class="dropdown-toggle"><i class="icon-caret-left pull-right visible-desktop"></i> همه امکانات</a>
                                            <ul class="dropdown-menu">
                                                <li><a href="features.blade.php#headings">سرخط ها</a></li>
                                                <li><a href="features.blade.php#alertBoxes">جعبه های هشدار</a></li>
                                                <li><a href="features.blade.php#tabs">تب ها</a></li>
                                                <li><a href="features.blade.php#buttons">دکمه ها</a></li>
                                                <li><a href="features.blade.php#toggles">تاگل ها</a></li>
                                                <li><a href="features.blade.php#quotes">نقل قول ها</a></li>
                                                <li><a href="features.blade.php#gallery">گرید های گالری</a></li>
                                                <li><a href="features.blade.php#code">کد</a></li>
                                                <li><a href="features.blade.php#columns">ستون ها</a></li>
                                                <li><a href="features.blade.php#maps">نقشه ها</a></li>
                                                <li><a href="features.blade.php#progress">نوار های پیشرفت</a></li>
                                                <li><a href="features.blade.php#tables">جداول</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="about-us.blade.php">درباره ما</a></li>
                                <li><a href="{{url('/contact')}}">تماس با ما</a></li>
                            </ul>

                            <!--  ==========  -->
                            <!--  = Search form =  -->
                            <!--  ==========  -->
                            <form class="navbar-form pull-right" action="#" method="get">
                                <button type="submit"><span class="icon-search"></span></button>
                                <input type="text" class="span1" name="search" id="navSearchInput">
                            </form>
                        </div><!-- /.nav-collapse -->
                    </div>

                    <!--  ==========  -->
                    <!--  = Cart =  -->
                    <!--  ==========  -->
                    <div class="span3">
                        <div class="cart-container" id="cartContainer">
                            <div class="cart">
                                <p class="items">سبد خرید <span class="dark-clr">(3)</span></p>
                                <p class="dark-clr hidden-tablet">$1816.90</p>
                                <a href="checkout-step-1.blade.php" class="btn btn-danger">
                                    <!-- <span class="icon icons-cart"></span> -->
                                    <i class="icon-shopping-cart"></i>
                                </a>
                            </div>
                            <div class="open-panel">

                                <div class="item-in-cart clearfix">
                                    <div class="image">
                                        <img src="images/dummy/cart-items/cart-item-1.jpg" width="124" height="124" alt="cart item" />
                                    </div>
                                    <div class="desc">
                                        <strong><a href="product.blade.php">کلاه زمستانی</a></strong>
                                        <span class="light-clr qty">
                                    تعداد : 1
                                    &nbsp;
                                    <a href="#" class="icon-remove-sign" title="Remove Item"></a>
                                </span>
                                    </div>
                                    <div class="price">
                                        <strong>$4957</strong>
                                    </div>
                                </div>

                                <div class="item-in-cart clearfix">
                                    <div class="image">
                                        <img src="images/dummy/cart-items/cart-item-2.jpg" width="124" height="124" alt="cart item" />
                                    </div>
                                    <div class="desc">
                                        <strong><a href="product.blade.php">کمربند اسپورت</a></strong>
                                        <span class="light-clr qty">
                                    تعداد : 1
                                    &nbsp;
                                    <a href="#" class="icon-remove-sign" title="Remove Item"></a>
                                </span>
                                    </div>
                                    <div class="price">
                                        <strong>$1318</strong>
                                    </div>
                                </div>

                                <div class="item-in-cart clearfix">
                                    <div class="image">
                                        <img src="images/dummy/cart-items/cart-item-3.jpg" width="124" height="124" alt="cart item" />
                                    </div>
                                    <div class="desc">
                                        <strong><a href="product.blade.php">کیف پول مردانه</a></strong>
                                        <span class="light-clr qty">
                                    تعداد : 1
                                    &nbsp;
                                    <a href="#" class="icon-remove-sign" title="Remove Item"></a>
                                </span>
                                    </div>
                                    <div class="price">
                                        <strong>$3840</strong>
                                    </div>
                                </div>

                                <div class="summary">
                                    <div class="line">
                                        <div class="row-fluid">
                                            <div class="span6">هزینه ارسال :</div>
                                            <div class="span6 align-right">$4.99</div>
                                        </div>
                                    </div>
                                    <div class="line">
                                        <div class="row-fluid">
                                            <div class="span6">جمع کل :</div>
                                            <div class="span6 align-right size-16">$357.81</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="proceed">
                                    <a href="checkout-step-1.blade.php" class="btn btn-danger pull-right bold higher">تصویه حساب <i class="icon-shopping-cart"></i></a>
                                    <small>هزینه ارسال بر اساس منطقه جغرافیایی محاسبه میشود. <a href="#">اطلاعات بیشتر</a></small>
                                </div>
                            </div>
                        </div>
                    </div> <!-- /cart -->
                </div>
            </div>
        </div>
    </div>
    <div class="fullwidthbanner-container">
        <div class="fullwidthbanner">
            <ul>
                <li data-transition="premium-random" data-slotamount="3">
                    <img src="images/dummy/slides/1/slide.jpg" alt="slider img" width="1400" height="377" />

                    <!-- baloons -->
                    <div class="caption lft ltt"
                         data-x="570"
                         data-y="50"
                         data-speed="4000"
                         data-start="1000"
                         data-easing="easeOutElastic">
                        <img src="images/dummy/slides/1/baloon1.png" alt="baloon" width="135" height="186" />
                    </div>

                    <div class="caption lft ltt"
                         data-x="770"
                         data-y="60"
                         data-speed="4000"
                         data-start="1200"
                         data-easing="easeOutElastic">
                        <img src="images/dummy/slides/1/baloon3.png" alt="baloon" width="40" height="55" />
                    </div>

                    <div class="caption lft ltt"
                         data-x="870"
                         data-y="80"
                         data-speed="4000"
                         data-start="1500"
                         data-easing="easeOutElastic">
                        <img src="images/dummy/slides/1/baloon2.png" alt="baloon" width="60" height="83" />
                    </div>

                    <!-- texts -->
                    <div class="caption lfl big_theme"
                         data-x="120"
                         data-y="120"
                         data-speed="1000"
                         data-start="500"
                         data-easing="easeInOutBack">
                        با وبمارکت، هیچ محدودیتی ندارید
                    </div>

                    <div class="caption lfl small_theme"
                         data-x="120"
                         data-y="190"
                         data-speed="1000"
                         data-start="700"
                         data-easing="easeInOutBack">
                        با امکانات قالب HTML وبمارکت آشنا شوید
                    </div>

                    <a href="features.blade.php" class="caption lfl btn btn-primary btn_theme"
                       data-x="120"
                       data-y="260"
                       data-speed="1000"
                       data-start="900"
                       data-easing="easeInOutBack">
                        تمامی امکانات قالب
                    </a>
                </li><!-- /slide -->

                <li data-transition="premium-random" data-slotamount="3">
                    <img src="images/dummy/slides/2/slide.jpg" alt="slider img" width="1400" height="377" />

                    <!-- woman -->
                    <div class="caption lfb ltb"
                         data-x="800"
                         data-y="50"
                         data-speed="1000"
                         data-start="1000"
                         data-easing="easeInOutCubic">
                        <img src="images/dummy/slides/2/woman.png" alt="woman" width="361" height="374" />
                    </div>

                    <!-- plane -->
                    <div class="caption lfl str"
                         data-x="400"
                         data-y="20"
                         data-speed="10000"
                         data-start="1000"
                         data-easing="linear">
                        <img src="images/dummy/slides/2/plane.png" alt="aircraft" width="117" height="28" />
                    </div>

                    <!-- texts -->
                    <div class="caption lfl big_theme"
                         data-x="120"
                         data-y="120"
                         data-speed="1000"
                         data-start="500"
                         data-easing="easeInOutBack">
                        Slider Revolution
                    </div>

                    <div class="caption lfl small_theme"
                         data-x="120"
                         data-y="190"
                         data-speed="1000"
                         data-start="700"
                         data-easing="easeInOutBack">
                        این اسلایدر پریمیوم، به عنوان یک هدیه، به صورت رایگان به شما عرضه میشود!
                    </div>

                    <a href="features.blade.php" class="caption lfl btn btn-primary btn_theme"
                       data-x="120"
                       data-y="260"
                       data-speed="1000"
                       data-start="900"
                       data-easing="easeInOutBack">
                        و خیلی چیز های دیگر
                    </a>
                </li><!-- /slide -->

                <li data-transition="premium-random" data-slotamount="3">
                    <img src="images/dummy/slides/3/slide.jpg" alt="slider img" width="1400" height="377" />

                    <!-- phone -->
                    <div class="caption sfr fadeout"
                         data-x="950"
                         data-y="77"
                         data-speed="1000"
                         data-start="2500"
                         data-easing="easeInOutCubic">
                        <img src="images/dummy/slides/3/phone.png" alt="phone in a hand" width="495" height="377" />
                    </div>

                    <!-- texts -->
                    <div class="caption lfl big_theme"
                         data-x="120"
                         data-y="120"
                         data-speed="1000"
                         data-start="500"
                         data-easing="easeInOutBack">
                        با طراحی مناسب برای موبایل
                    </div>

                    <div class="caption lfl small_theme"
                         data-x="120"
                         data-y="190"
                         data-speed="1000"
                         data-start="700"
                         data-easing="easeInOutBack">
                        پنجره مرورگر خود را تغییر سایز دهید، خواهید دید که وبمارکت روی هر رزولوشنی به خوبی کار میکند.
                    </div>

                    <a href="icons.blade.php" class="caption lfl btn btn-primary btn_theme"
                       data-x="120"
                       data-y="260"
                       data-speed="1000"
                       data-start="900"
                       data-easing="easeInOutBack">
                        در ضمن آیکن های آن هم مناسب رتینا هستند ...
                    </a>
                </li><!-- /slide -->

                <li data-transition="premium-random" data-slotamount="3">
                    <img src="images/dummy/slides/4/slide.jpg" alt="slider img" width="1400" height="377" />

                    <!-- faces -->
                    <div class="caption lft ltt"
                         data-x="-150"
                         data-y="0"
                         data-speed="300"
                         data-start="2000"
                         data-easing="easeInOutCubic">
                        <img src="images/dummy/slides/4/person1.png" alt="satisfied customer" width="108" height="204" />
                    </div>
                    <div class="caption lft ltt"
                         data-x="0"
                         data-y="0"
                         data-speed="300"
                         data-start="2200"
                         data-easing="easeInOutCubic">
                        <img src="images/dummy/slides/4/person2.png" alt="satisfied customer" width="108" height="321" />
                    </div>
                    <div class="caption lft ltt"
                         data-x="500"
                         data-y="0"
                         data-speed="300"
                         data-start="2400"
                         data-easing="easeInOutCubic">
                        <img src="images/dummy/slides/4/person3.png" alt="satisfied customer" width="108" height="139" />
                    </div>
                    <div class="caption lft ltt"
                         data-x="720"
                         data-y="0"
                         data-speed="300"
                         data-start="2600"
                         data-easing="easeInOutCubic">
                        <img src="images/dummy/slides/4/person4.png" alt="satisfied customer" width="108" height="191" />
                    </div>
                    <div class="caption lft ltt"
                         data-x="940"
                         data-y="0"
                         data-speed="300"
                         data-start="2800"
                         data-easing="easeInOutCubic">
                        <img src="images/dummy/slides/4/person5.png" alt="satisfied customer" width="108" height="139" />
                    </div>
                    <div class="caption lft ltt"
                         data-x="1200"
                         data-y="0"
                         data-speed="300"
                         data-start="3000"
                         data-easing="easeInOutCubic">
                        <img src="images/dummy/slides/4/person6.png" alt="satisfied customer" width="108" height="179" />
                    </div>
                    <div class="caption lft ltt"
                         data-x="1350"
                         data-y="0"
                         data-speed="300"
                         data-start="3200"
                         data-easing="easeInOutCubic">
                        <img src="images/dummy/slides/4/person7.png" alt="satisfied customer" width="108" height="133" />
                    </div>

                    <!-- texts -->
                    <div class="caption lfl big_theme"
                         data-x="120"
                         data-y="140"
                         data-speed="1000"
                         data-start="500"
                         data-easing="easeInOutBack">
                        بیش از 1000 مشتری خوشنود
                    </div>

                    <div class="caption lfl small_theme"
                         data-x="120"
                         data-y="210"
                         data-speed="1000"
                         data-start="700"
                         data-easing="easeInOutBack">
                        پروفایل ما را ببینید در <a href="http://themeforest.net/user/ProteusThemes" target="_blank">ThemeForest</a>!
                    </div>

                    <a href="http://proteusthemes.ticksy.com/" class="caption lfl btn btn-primary btn_theme"
                       data-x="120"
                       data-y="280"
                       data-speed="1000"
                       data-start="900"
                       data-easing="easeInOutBack">
                        به خوبی شما را پشتیبانی میکنیم
                    </a>
                </li><!-- /slide -->
            </ul>
            <div class="tp-bannertimer"></div>
        </div>
        <!--  ==========  -->
        <!--  = Nav Arrows =  -->
        <!--  ==========  -->
        <div id="sliderRevLeft"><i class="icon-chevron-left"></i></div>
        <div id="sliderRevRight"><i class="icon-chevron-right"></i></div>
    </div> <!-- /slider revolution -->

    @yield('content')

    <footer>

        <!--  ==========  -->
        <!--  = Upper footer =  -->
        <!--  ==========  -->
        <div class="foot-light">
            <div class="container">
                <div class="row">
                    <div class="span4">
                        <h2 class="pacifico">Webmarket &nbsp; <img src="images/webmarket.png" alt="Webmarket Cart" class="align-baseline" /></h2>
                        <p>این یک نوشته آزمایشی است. شما میتوانید این قسمت را با نوشته های دلخواه خود که مناسب این ناحیه باشند پر نمایید. ما این بخش را با نوشته هایی بی معنی پر کرده ایم.</p>
                    </div>
                    <div class="span4">
                        <div class="main-titles lined">
                            <h3 class="title">فیسبوک</h3>
                        </div>
                        <div class="bordered">
                            <div class="fill-iframe">
                                <div class="fb-like-box" data-href="https://www.facebook.com/ProteusNet" data-width="292" data-height="200" data-colorscheme="dark" data-show-faces="true" data-header="false" data-stream="false" data-show-border="false"></div>
                            </div>
                        </div>
                    </div>
                    <div class="span4">
                        <div class="main-titles lined">
                            <h3 class="title"><span class="light">عضویت</span> در خبرنامه</h3>
                        </div>
                        <p>این بخشی از یک نوشتار آزمایشی صرفا برای پر کردن این ناحیه است.</p>
                        <!-- Begin MailChimp Signup Form -->
                        <div id="mc_embed_signup">
                            <form action="http://proteusthemes.us4.list-manage1.com/subscribe/post?u=ea0786485977f5ec8c9283d5c&amp;id=5dad3f35e9" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate form form-inline" target="_blank" novalidate>
                                <div class="mc-field-group">
                                    <input type="email" value="" placeholder="آدرس ایمیلتان را وارد کنید" name="EMAIL" class="required email" id="mce-EMAIL">
                                    <input type="submit" value="ارسال" name="subscribe" id="mc-embedded-subscribe" class="btn btn-primary">
                                </div>
                                <div id="mce-responses" class="clear">
                                    <div class="response" id="mce-error-response" style="display:none"></div>
                                    <div class="response" id="mce-success-response" style="display:none"></div>
                                </div>

                            </form>
                        </div>
                        <!--End mc_embed_signup-->
                    </div>
                </div>
            </div>
        </div> <!-- /upper footer -->

        <!--  ==========  -->
        <!--  = Middle footer =  -->
        <!--  ==========  -->
        <div class="foot-dark">
            <div class="container">
                <div class="row">

                    <!--  ==========  -->
                    <!--  = Menu 1 =  -->
                    <!--  ==========  -->
                    <div class="span3">
                        <div class="main-titles lined">
                            <h3 class="title"><span class="light">ناوبری</span> اصلی</h3>
                        </div>
                        <ul class="nav bold">
                            <li><a href="#">خانه</a></li>
                            <li><a href="#">صفحات</a></li>
                            <li><a href="#">درباره ما</a></li>
                            <li><a href="#">کد های میانبر</a></li>
                            <li><a href="#">گالری</a></li>
                            <li><a href="#">تماس با ما</a></li>
                        </ul>
                    </div>

                    <!--  ==========  -->
                    <!--  = Menu 2 =  -->
                    <!--  ==========  -->
                    <div class="span3">
                        <div class="main-titles lined">
                            <h3 class="title"><span class="light">دومین</span> ناوبری</h3>
                        </div>
                        <ul class="nav">
                            <li><a href="#">پیوند نوشتار آزمایشی</a></li>
                            <li><a href="#">نوشتار آزمایشی دیگر</a></li>
                            <li><a href="#">برند ها</a></li>
                            <li><a href="#">مشاهده آخرین توییت ها</a></li>
                            <li><a href="#">نوشتار آزمایشی دیگر</a></li>
                        </ul>
                    </div>

                    <!--  ==========  -->
                    <!--  = Menu 3 =  -->
                    <!--  ==========  -->
                    <div class="span3">
                        <div class="main-titles lined">
                            <h3 class="title"><span class="light">سومین</span> ناوبری</h3>
                        </div>
                        <ul class="nav">
                            <li><a href="#">پیوند نوشتار آزمایشی</a></li>
                            <li><a href="#">نوشتار آزمایشی دیگر</a></li>
                            <li><a href="#">برند ها</a></li>
                            <li><a href="#">مشاهده آخرین توییت ها</a></li>
                            <li><a href="#">نوشتار آزمایشی دیگر</a></li>
                        </ul>
                    </div>

                    <!--  ==========  -->
                    <!--  = Menu 4 =  -->
                    <!--  ==========  -->
                    <div class="span3">
                        <div class="main-titles lined">
                            <h3 class="title"><span class="light">چهارمین</span> ناوبری</h3>
                        </div>
                        <ul class="nav">
                            <li><a href="#">پیوند نوشتار آزمایشی</a></li>
                            <li><a href="#">نوشتار آزمایشی دیگر</a></li>
                            <li><a href="#">برند ها</a></li>
                            <li><a href="#">مشاهده آخرین توییت ها</a></li>
                            <li><a href="#">نوشتار آزمایشی دیگر</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="cpContainter">
                <div class="mcopyright">
                    <div class="inside">فارسی سازی و ویرایش توسط <a href="https://mrcode.ir" target="_blank" title="مسترکد">MrCode.ir</a></div>
                </div>
            </div>

        </div> <!-- /middle footer -->

        <!--  ==========  -->
        <!--  = Bottom Footer =  -->
        <!--  ==========  -->
        <div class="foot-last">
            <a href="#" id="toTheTop">
                <span class="icon-chevron-up"></span>
            </a>
            <div class="container">
                <div class="row">
                    <div class="span6">
                        &copy; Copyright 2013. Images of products by <a target="_blank" href="http://www.horsefeathers.eu/">محصول ویژه</a>.
                    </div>
                    <div class="span6">
                        <div class="pull-right">قالب HTML وبمارکت توسط<a href="http://www.proteusthemes.com">ProteusThemes</a></div>
                    </div>
                </div>
            </div>
        </div> <!-- /bottom footer -->
    </footer> <!-- /footer -->


    <!--  ==========  -->
    <!--  = Modal Windows =  -->
    <!--  ==========  -->

    <!--  = Login =  -->
    <div id="loginModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h3 id="loginModalLabel"><span class="light">ورود</span> در وبمارکت</h3>
        </div>
        <div class="modal-body">
            <form method="post" action="#">
                <div class="control-group">
                    <label class="control-label hidden shown-ie8" for="inputEmail">نام کاربری</label>
                    <div class="controls">
                        <input type="text" class="input-block-level" id="inputEmail" placeholder="Username">
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label hidden shown-ie8" for="inputPassword">رمز عبور</label>
                    <div class="controls">
                        <input type="password" class="input-block-level" id="inputPassword" placeholder="Password">
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls">
                        <label class="checkbox">
                            <input type="checkbox">
                            مرا به خاطر بسپار
                        </label>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary input-block-level bold higher">
                    ورود
                </button>
            </form>
            <p class="center-align push-down-0">
                <a href="#" data-dismiss="modal">رمز عبورتان را فراموش کرده اید؟</a>
            </p>
        </div>
    </div>

    <!--  = Register =  -->
    <div id="registerModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="registerModalLabel" aria-hidden="true">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h3 id="registerModalLabel"><span class="light">ثبت نام</span> در وبمارکت</h3>
        </div>
        <div class="modal-body">
            <form method="post" action="#">
                <div class="control-group">
                    <label class="control-label hidden shown-ie8" for="inputUsernameRegister">نام کاربری</label>
                    <div class="controls">
                        <input type="text" class="input-block-level" id="inputUsernameRegister" placeholder="Username">
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label hidden shown-ie8" for="inputEmailRegister">ایمیل</label>
                    <div class="controls">
                        <input type="email" class="input-block-level" id="inputEmailRegister" placeholder="Email">
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label hidden shown-ie8" for="inputPasswordRegister">رمز عبور</label>
                    <div class="controls">
                        <input type="password" class="input-block-level" id="inputPasswordRegister" placeholder="Password">
                    </div>
                </div>
                <button type="submit" class="btn btn-danger input-block-level bold higher">
                    ثبت نام
                </button>
            </form>
            <p class="center-align push-down-0">
                <a data-toggle="modal" role="button" href="#loginModal" data-dismiss="modal">قبلا ثبت نام کرده اید؟</a>
            </p>

        </div>
    </div>


</div> <!-- end of master-wrapper -->



<!--  ==========  -->
<!--  = JavaScript =  -->
<!--  ==========  -->

<!--  = FB =  -->

<div id="fb-root"></div>
<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=126780447403102";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>


<!--  = jQuery - CDN with local fallback =  -->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript">
    if (typeof jQuery == 'undefined') {
        document.write('<script src="js/jquery.min.js"><\/script>');
    }
</script>

<!--  = _ =  -->
<script src="js/underscore/underscore-min.js" type="text/javascript"></script>

<!--  = Bootstrap =  -->
<script src="js/bootstrap.min.js" type="text/javascript"></script>

<!--  = Slider Revolution =  -->
<script src="js/rs-plugin/pluginsources/jquery.themepunch.plugins.min.js" type="text/javascript"></script>
<script src="js/rs-plugin/js/jquery.themepunch.revolution.min.js" type="text/javascript"></script>

<!--  = CarouFredSel =  -->
<script src="js/jquery.carouFredSel-6.2.1-packed.js" type="text/javascript"></script>

<!--  = jQuery UI =  -->
<script src="js/jquery-ui-1.10.3/js/jquery-ui-1.10.3.custom.min.js" type="text/javascript"></script>
<script src="js/jquery-ui-1.10.3/touch-fix.min.js" type="text/javascript"></script>

<!--  = Isotope =  -->
<script src="js/isotope/jquery.isotope.min.js" type="text/javascript"></script>

<!--  = Tour =  -->
<script src="js/bootstrap-tour/build/js/bootstrap-tour.min.js" type="text/javascript"></script>

<!--  = PrettyPhoto =  -->
<script src="js/prettyphoto/js/jquery.prettyPhoto.js" type="text/javascript"></script>

<!--  = Google Maps API =  -->
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script type="text/javascript" src="js/goMap/js/jquery.gomap-1.3.2.min.js"></script>

<!--  = Custom JS =  -->
<script src="js/custom.js" type="text/javascript"></script>

</body>
</html>