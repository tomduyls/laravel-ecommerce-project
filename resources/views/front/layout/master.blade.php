<!DOCTYPE html>
<html lang="zxx">

<head>
    <base href="{{asset('/')}}">
    <meta charset="UTF-8">
    <meta name="description" content="codelean Template">
    <meta name="keywords" content="codelean, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') | CodeLean</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="front/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="front/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="front/css/themify-icons.css" type="text/css">
    <link rel="stylesheet" href="front/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="front/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="front/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="front/css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="front/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="front/css/style.css" type="text/css">
</head>

<body>
    <!-- Start coding here -->

    <!-- Page Preloader -->
    <div id="preloader">
        <div class="loader">

        </div>
    </div>

    <!-- Header Section Begin -->
    <header class="header-section">
        <div class="header-top">
            <div class="container">
                <div class="ht-left">
                    <div class="mail-service">
                        <i class="fa fa-envelope"></i>
                        codelean@gmail.com
                    </div>
                    <div class="phone-service">
                        <i class="fa fa-phone"></i>
                        +84 98.52.81.689
                    </div>
                </div>

                <div class="ht-right">
                    @if (Auth::check())
                        <a href="./account/logout" class="login-panel">
                            <i class="fa fa-user"></i>
                            {{ Auth::user()->name }} - Logout
                        </a>
                    @else
                    <a href="./account/login" class="login-panel"><i class="fa fa-user"></i>Login</a>
                    @endif
                    <div class="top-social">
                        <a href="#"><i class="ti-facebook"></i></a>
                        <a href="#"><i class="ti-twitter-alt"></i></a>
                        <a href="#"><i class="ti-linkedin"></i></a>
                        <a href="#"><i class="ti-pinterest"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="inner-header">
                <div class="row">
                    <div class="col-lg-2 col-md-2">
                        <div class="logo">
                            <a href="index.html">
                                <img src="front/img/logo.png" height="25" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-7">
                        <form action="shop">
                            <div class="advanced-search">
                                <button type="button" class="category-btn">All Categories</button>
                                <div class="input-group">
                                    <input name="search" value="{{ request('search') }}" type="text" placeholder="What do you need?">
                                    <button type="submit"><i class="ti-search"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-3 col-md-3 text-right">
                        <ul class="nav-right">
                            <li class="cart-icon">
                                <a href="./cart">
                                    <i class="icon_bag_alt"></i>
                                    <span class="cart-count">{{ Cart::count() }}</span>
                                </a>
                                {{-- <div class="cart-hover">
                                    <div class="select-items">
                                        <table>
                                            <tbody>
                                                @foreach (Cart::content() as $cart)
                                                    <tr data-rowId="{{ $cart->rowId }}">
                                                        <td class="si-pic"><img src="front/img/products/{{ $cart->options->images[0]->path }}" alt=""></td>
                                                        <td class="si-text">
                                                            <div class="product-selected">
                                                                <p>${{ $cart->price }} x {{ $cart->qty}}</p>
                                                                <h6>{{ $cart->name}}</h6>
                                                            </div>
                                                        </td>
                                                        <td class="si-close">
                                                            <i class="ti-close"></i>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="select-total">
                                        <span>total:</span>
                                        <h5>${{ Cart::total() }}</h5>
                                    </div>
                                    <div class="select-button">
                                        <a href="./cart" class="primary-btn view-card">VIEW CARD</a>
                                        <a href="./checkout" class="primary-btn checkout-btn">CHECK OUT</a>
                                    </div>
                                </div> --}}
                            </li>
                            <li class="cart-price">${{ Cart::total() }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="nav-item">
            <div class="container">
                <div class="nav-depart">
                    <div class="depart-btn">
                        <i class="ti-menu"></i>
                        <span>All departments</span>
                        <ul class="depart-hover">
                            <li class="active"><a href="#">Women's Clothing</a></li>
                            <li ><a href="#">Men's Clothing</a></li>
                            <li ><a href="#">Underwear</a></li>
                            <li ><a href="#">Kid's Clothing</a></li>
                            <li ><a href="#">Brand codeleanon</a></li>
                            <li ><a href="#">Accessories/Shoes</a></li>
                            <li ><a href="#">Luxury Brands</a></li>
                            <li ><a href="#">Brand Outdoor Apparel</a></li>
                        </ul>
                    </div>
                </div>
                <nav class="nav-menu mobile-menu">
                        <ul>
                            <li class="{{ (request()->segment(1)  == '') ? 'active' : '' }}"><a href="./">Home</a></li>
                            <li class="{{ (request()->segment(1)  == 'shop') ? 'active' : '' }}"><a href="./shop">Shop</a></li>
                            <li><a href="">Collection</a>
                                <ul class="dropdown">
                                    <li><a href="">Men's</a></li>
                                    <li><a href="">Women's</a></li>
                                    <li><a href="">Kid's</a></li>
                                </ul>
                            </li>
                            <li><a href="blog.html">Blog</a></li>
                            <li><a href="contact.html">Contact</a></li>
                            <li><a href="">Pages</a>
                                <ul class="dropdown">
                                    <li><a href="./account/my-order">My Order</a></li>
                                    <li><a href="blog-details.html">Blog Details</a></li>
                                    <li><a href="./cart">Shopping Cart</a></li>
                                    <li><a href="./checkout">Checkout</a></li>
                                    <li><a href="faq.html">Faq</a></li>
                                    @if (!Auth::user())
                                        <li><a href="register.html">Register</a></li>
                                        <li><a href="./account/login">Login</a></li>
                                    @endif
                                </ul>
                            </li>
                        </ul>
                </nav>
                <div id="mobile-menu-wrap"></div>   
            </div>
        </div>
    </header>
    <!-- Header Section End -->

    {{-- Body here --}}
    @yield('body')


    <!-- Partner Logo Section Begin -->
    <div class="partner-logo">
        <div class="container">
            <div class="logo-carousel owl-carousel">
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="front/img/logo-carousel/logo-1.png" alt="">
                    </div>
                </div>
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="front/img/logo-carousel/logo-2.png" alt="">
                    </div>
                </div>
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="front/img/logo-carousel/logo-3.png" alt="">
                    </div>
                </div>
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="front/img/logo-carousel/logo-4.png" alt="">
                    </div>
                </div>
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="front/img/logo-carousel/logo-5.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Partner Logo Section End -->

    <!-- Footer Logo Section Begin -->
    <footer class="footer-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="footer-left">
                        <div class="footer-logo">
                            <a href="index.html">
                                <img src="front/img/footer-logo.png" height="25" alt="">
                            </a>
                        </div>
                    </div>
                    <ul>
                        <li>Codelean - codelean</li>
                        <li>Phone: +84 98.52.81.689</li>
                        <li>Email: codelean@gmail.com</li>
                    </ul>
                </div>
                <div class="col-lg-2 offset-lg-1">
                    <div class="footer-widget">
                        <h5>Information</h5>
                        <ul>
                            <li><a href="">About us</a></li>
                            <li><a href="">Check out</a></li>
                            <li><a href="">Contact</a></li>
                            <li><a href="">Services</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="footer-widget">
                            <h5>My Account</h5>
                            <ul>
                                <li><a href="">My Account</a></li>
                                <li><a href="">Contact</a></li>
                                <li><a href="">Shopping Cart</a></li>
                                <li><a href="">Shop</a></li>
                            </ul>
                        </div>
                    </div>
                <div class="col-lg-4">
                    <div class="newslatter-item">
                        <h5>Join Our Newsletter Now</h5>
                        <p>Get E-mail updates about our lastest shop and special offers.</p>
                        <form action="#" class="subscribe-form">
                            <input type="text" placeholder="Enter Tour Mail">
                            <button type="button">Subscribe</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-reserved">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="copyright-text">
                            Copyright
                        </div>
                        <div class="payment-pic">
                            <img src="front/img/payment-method.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Logo Section End -->  

    <!-- Js Plugins -->
    <script src="front/js/jquery-3.3.1.min.js"></script>
    <script src="front/js/bootstrap.min.js"></script>
    <script src="front/js/jquery-ui.min.js"></script>
    <script src="front/js/jquery.countdown.min.js"></script>
    <script src="front/js/jquery.nice-select.min.js"></script>
    <script src="front/js/jquery.zoom.min.js"></script>
    <script src="front/js/jquery.dd.min.js"></script>
    <script src="front/js/jquery.slicknav.js"></script>
    <script src="front/js/owl.carousel.min.js"></script>
    <script src="front/js/owlcarousel2-filter.min.js"></script>
    <script src="front/js/main.js"></script>
</body>

</html>