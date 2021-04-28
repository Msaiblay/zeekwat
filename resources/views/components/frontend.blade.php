
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8">
    <title>ZeeKwat</title>

    <!-- mobile responsive meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- ** Plugins Needed for the Project ** -->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{asset('frontend/plugins/bootstrap/bootstrap.min.css')}}">
    <!-- slick slider -->
    <link rel="stylesheet" href="{{asset('frontend/plugins/slick/slick.css')}}">
    <!-- themefy-icon -->
    <link rel="stylesheet" href="{{asset('frontend/plugins/themify-icons/themify-icons.css')}}">
    <!-- animation css -->
    <link rel="stylesheet" href="{{asset('frontend/plugins/animate/animate.css')}}">
    <!-- aos -->
    <link rel="stylesheet" href="{{asset('frontend/plugins/aos/aos.css')}}">
    <!-- venobox popup -->
    <link rel="stylesheet" href="{{asset('frontend/plugins/venobox/venobox.css')}}">

    <!-- Main Stylesheet -->
    <link href="{{asset('frontend/css/style.css')}}" rel="stylesheet">

    <!--Favicon-->
    <link rel="shortcut icon" href="{{asset('frontend/images/favicon.png')}}" type="image/x-icon">
    <link rel="icon" href="{{asset('frontend/images/favicon.png')}}" type="image/x-icon">
<!--<style>
    .dropright {
        position: relative;
    }

    .dropright .dropdown-menu {
        top: 0;
        left: 100%;
        margin-top: -1px;
    }
</style>-->
    <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
            crossorigin="anonymous"></script>

    <!-- Bootstrap files (jQuery first, then Popper.js, then Bootstrap JS) -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js" type="text/javascript"></script>


    <script type="text/javascript">
        /// some script

        // jquery ready start
        $(document).ready(function() {
            // jQuery code

            //////////////////////// Prevent closing from click inside dropdown
            $(document).on('click', '.dropdown-menu', function (e) {
                e.stopPropagation();
            });

            // make it as accordion for smaller screens
            if ($(window).width() < 992) {
                $('.dropdown-menu a').click(function(e){
                    e.preventDefault();
                    if($(this).next('.submenu').length){
                        $(this).next('.submenu').toggle();
                    }
                    $('.dropdown').on('hide.bs.dropdown', function () {
                        $(this).find('.submenu').hide();
                    })
                });
            }

        }); // jquery end
    </script>

    <style type="text/css">
        @media (min-width: 992px){

            .dropdown-menu .dropdown-menu{
                margin-left:0;
                margin-right: 0;
            }

            .dropdown-menu li{
                position: relative;
            }
            .nav-item .submenu{
                display: none;
                position: absolute;
                left:100%;
                top:-7px;
            }

            .dropdown-menu > li:hover{ background-color: #f1f1f1 }
            .dropdown-menu > li:hover > .submenu{
                display: block;
            }
        }
    </style>

</head>

<body>
<!-- preloader start -->
<div class="preloader">
    <img src="{{asset('frontend/images/bb.gif')}}" alt="preloader" style="width: 100px">
</div>
<!-- preloader end -->

<!-- header -->
<header class="fixed-top header">
    <!-- top header -->
    <!-- navbar -->
    <div class="navigation w-100">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-dark p-0">
                <a class="navbar-brand" href="index.html"><img src="{{asset('frontend/images/zeekwatlogo.png')}}" alt="logo" style="height:92px"></a>
                <button class="navbar-toggler rounded-0" type="button" data-toggle="collapse" data-target="#main_nav"
                        aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="main_nav">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">  Category  </a>
                            <ul class="dropdown-menu">
                                @foreach($data[0] as $category)
                                <li>
                                    <a class="dropdown-item" href="#"> {{$category->name}} &raquo </a>
                                    <ul class="submenu dropdown-menu">
                                        @php
                                        $categoryid = $category->id;
                                        @endphp
                                        @foreach($data[1] as $subcategory)
                                            @if($subcategory->category_id == $categoryid )
                                        <li><a class="dropdown-item" href="">{{$subcategory->name}}</a></li>
                                            @endif
                                        @endforeach
                                    </ul>
                                </li>
                                @endforeach
                            </ul>
                        </li>

                        <li class="nav-item @@about" style="padding:30px 0; width: 300px">
                            <input type="search" placeholder="Search course" class="form-control rounded " >
                        </li>
                        @guest
                        <li class="nav-item ">
                            <a class="nav-link" href="{{route('login')}}">Login</a>
                        </li>
                        <li class="nav-item @@blog">
                            <a class="nav-link" href="{{route('studentregister')}}">Register</a>
                        </li>
                        @else
                        <li class="nav-item dropdown view">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                               aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name }}
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="teacher.html">Profile</a>
                                <a class="dropdown-item" href="teacher-single.html">my course</a><hr>
                                <a  class="dropdown-item"  href="javascript:void(0)" onclick="event.preventDefault();document.getElementById('logout-form').submit();">logout</a>
                                <form id="logout-form" action="{{route('logout')}}" method="post" style="display:none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @endguest
                        <li class="nav-item @@contact">
                            <a class="nav-link" href="contact.html">CONTACT</a>
                        </li>
                    </ul>


                </div>
            </nav>
        </div>
    </div>
</header>
<!-- /header -->
<!-- Modal -->
{{$slot}}
<!-- footer -->
<footer>
    <!-- newsletter -->
    <div class="newsletter">
        <div class="container">
            <div class="row">
                <div class="col-md-9 ml-auto bg-primary py-5 newsletter-block">
                    <h3 class="text-white">Subscribe Now</h3>
                    <form action="#">
                        <div class="input-wrapper">
                            <input type="email" class="form-control border-0" id="newsletter" name="newsletter" placeholder="Enter Your Email...">
                            <button type="submit" value="send" class="btn btn-primary">Join</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- footer content -->
    <div class="footer bg-footer section border-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-8 mb-5 mb-lg-0">
                    <!-- logo -->
                    <a class="logo-footer" href="index.html"><img class="img-fluid mb-4" src="{{asset('frontend/images/logo.png')}}" alt="logo"></a>
                    <ul class="list-unstyled">
                        <li class="mb-2">23621 15 Mile Rd #C104, Clinton MI, 48035, New York, USA</li>
                        <li class="mb-2">+1 (2) 345 6789</li>
                        <li class="mb-2">+1 (2) 345 6789</li>
                        <li class="mb-2">contact@yourdomain.com</li>
                    </ul>
                </div>
                <!-- company -->
                <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-5 mb-md-0">
                    <h4 class="text-white mb-5">COMPANY</h4>
                    <ul class="list-unstyled">
                        <li class="mb-3"><a class="text-color" href="about.html">About Us</a></li>
                        <li class="mb-3"><a class="text-color" href="teacher.html">Our Teacher</a></li>
                        <li class="mb-3"><a class="text-color" href="contact.html">Contact</a></li>
                        <li class="mb-3"><a class="text-color" href="blog.html">Blog</a></li>
                    </ul>
                </div>
                <!-- links -->
                <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-5 mb-md-0">
                    <h4 class="text-white mb-5">LINKS</h4>
                    <ul class="list-unstyled">
                        <li class="mb-3"><a class="text-color" href="courses.html">Courses</a></li>
                        <li class="mb-3"><a class="text-color" href="event.html">Events</a></li>
                        <li class="mb-3"><a class="text-color" href="gallary.html">Gallary</a></li>
                        <li class="mb-3"><a class="text-color" href="faqs.html">FAQs</a></li>
                    </ul>
                </div>
                <!-- support -->
                <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-5 mb-md-0">
                    <h4 class="text-white mb-5">SUPPORT</h4>
                    <ul class="list-unstyled">
                        <li class="mb-3"><a class="text-color" href="#">Forums</a></li>
                        <li class="mb-3"><a class="text-color" href="#">Documentation</a></li>
                        <li class="mb-3"><a class="text-color" href="#">Language</a></li>
                        <li class="mb-3"><a class="text-color" href="#">Release Status</a></li>
                    </ul>
                </div>
                <!-- support -->
                <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-5 mb-md-0">
                    <h4 class="text-white mb-5">RECOMMEND</h4>
                    <ul class="list-unstyled">
                        <li class="mb-3"><a class="text-color" href="#">WordPress</a></li>
                        <li class="mb-3"><a class="text-color" href="#">LearnPress</a></li>
                        <li class="mb-3"><a class="text-color" href="#">WooCommerce</a></li>
                        <li class="mb-3"><a class="text-color" href="#">bbPress</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- copyright -->
    <div class="copyright py-4 bg-footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-7 text-sm-left text-center">
                    <p class="mb-0">Copyright
                        <script>
                            var CurrentYear = new Date().getFullYear()
                            document.write(CurrentYear)
                        </script>
                        © themefisher</p>
                </div>
                <div class="col-sm-5 text-sm-right text-center">
                    <ul class="list-inline">
                        <li class="list-inline-item"><a class="d-inline-block p-2" href="#"><i class="ti-facebook text-primary"></i></a></li>
                        <li class="list-inline-item"><a class="d-inline-block p-2" href="#"><i class="ti-twitter-alt text-primary"></i></a></li>
                        <li class="list-inline-item"><a class="d-inline-block p-2" href="#"><i class="ti-linkedin text-primary"></i></a></li>
                        <li class="list-inline-item"><a class="d-inline-block p-2" href="#"><i class="ti-instagram text-primary"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- /footer -->

<!-- jQuery -->
<script src="{{asset('frontend/plugins/jQuery/jquery.min.js')}}"></script>
<!-- Bootstrap JS -->
<script src="{{asset('frontend/plugins/bootstrap/bootstrap.min.js')}}"></script>
<!-- slick slider -->
<script src="{{asset('frontend/plugins/slick/slick.min.js')}}"></script>
<!-- aos -->
<script src="{{asset('frontend/plugins/aos/aos.js')}}"></script>
<!-- venobox popup -->
<script src="{{asset('frontend/plugins/venobox/venobox.min.js')}}"></script>
<!-- filter -->
<script src="{{asset('frontend/plugins/filterizr/jquery.filterizr.min.js')}}"></script>
<!-- google map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu5nZKbeK-WHQ70oqOWo-_4VmwOwKP9YQ"></script>
<script src="{{asset('frontend/plugins/google-map/gmap.js')}}"></script>

<!-- Main Script -->
<script src="{{asset('frontend/js/script.js')}}"></script>
<!--<script>
    $(document).ready(function() {
        $('.dropright button').on("click", function(e) {
            e.stopPropagation();
            e.preventDefault();

            if (!$(this).next('div').hasClass('show')) {
                $(this).next('div').addClass('show');
            } else {
                $(this).next('div').removeClass('show');
            }

        });
    });
</script>-->

</body>
</html>
