<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>HMS</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}"> -->
    <link rel="stylesheet" href="{{asset('css/slick.css')}}">
    <link rel="stylesheet" href="{{asset('css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/doctors_informantion.css')}}">
    <link rel="stylesheet" href="{{asset('css/fullstethoscope.css')}}">
    <link rel="stylesheet" href="{{asset('css/allDepartment.css')}}">
    <link rel="stylesheet" href="{{asset('css/blood_donate.css')}}">
    <link rel="stylesheet" href="{{asset('css/responsive.css')}}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@400;500;600;700&family=Gloock&family=Josefin+Sans:wght@400;500;600;700&family=Open+Sans:wght@400;500;600;700;800&family=Raleway:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">

</head>
<body>

				        <!--================ START NAV PART ================-->

    <section class="header sticky-top" id="header">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand nav_logo" href="{{url('/')}}">ComfortCare Clinic</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav m-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{url('/')}}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('/about')}}">About Us</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Medical Services
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="./surgicalDepartment.html">SURGICAL DEPARTMENT </a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="./skin_care.html">SKIN CARE DEPARTMENT</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="./emergencyDepartment.html">EMERGENCY DEPARTMENT</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li class="nav-item dropend">
                                    <a class="dropdown-item dropdown-toggle" href="./gynecologyDepartment.html" role="button"  aria-expanded="false">
                                    GYNECOLOGY DEPARTMENT
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="./pregnancyDepartment.html">PREGNANCY DEPARTMENT</a></li>
                                    </ul>
                                </li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="./child_care.html">CHILD CARE DEPARTMENT</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li class="nav-item dropend">
                                    <a class="dropdown-item dropdown-toggle" href="./daignosticCenter.html" role="button"  aria-expanded="false">
                                    DAIGNOSTIC CENTER
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="./radiology.html">RADIOLOGY DEPARTMENT </a></li>
                                        <li><hr class="dropdown-divider"></li>
                                        <li><a class="dropdown-item" href="./pathology.html">PATHOLOGY DEPARTMENT</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./gallery.html">Gallery</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Team
                            </a>
                            <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="./Doctors_Team.html">Doctors</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="./Nurses_Team.html">Nurses</a></li>
                            </ul>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact Us</a>
                        </li>
                    </ul>
                </div>
                <div class="">
                    <a class="nav-link" href=""><i class="fa-solid fa-user"></i></a>
                </div>
            </div>
        </nav>
    </section>                    
                        <!--================ END NAV PART ================-->



@yield('content')




                        <!--================ START FOOTER PART ================-->
    
    <section class="footer_section" id="footer_section">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-2 text-center"></div>
                <div class="col-lg-2 col-md-2 text-center">
                    <h1 >Quick Links</h1>
                    <ul>
                        <li><a href="">Home</a></li>
                        <li><a href="">About Us</a></li>
                        <li><a href="">Members</a></li>
                        <li><a href="">Services</a></li>
                        <li><a href="">Projects</a></li>
                        <li><a href="">Contact</a></li>
                        <li><a href="">Blog</a></li>
                        <li><a href="">Career</a></li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-4 text-center">
                    <h1 class="">Important Link</h1>
                    <ul>
                        <li><a href="">National Board of Revenue</a></li>
                        <li><a href="">Ministry of Finance</a></li>
                        <li><a href="">Ministry of Commerce</a></li>
                        <li><a href="">Ministry of Women and Children Affairs</a></li>
                        <li><a href="">MoI</a></li>
                        <li><a href="">FBCCI</a></li>
                        <li><a href="">Export Promotion Bureau</a></li>
                        <li><a href="">BIDA</a></li>
                        <li><a href="">RJSC</a></li>
                        <li><a href="">SMEF</a></li>
                        <li><a href="">Bangladesh Bank</a></li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-4">
                    <h1 class="text-center">Contact</h1>
                    <p><strong>Address:</strong> House: 2, Floor:2nd & 3rd, Road: 23/C, Gulshan-01, Dhaka-1212.</p>
                    <p><strong>Land Phone:</strong> +8802-222261526,+8802-48812258</p>
                    <p><strong>IP Phone:</strong>  +8809636373839 </p>                     
                    <p><strong>Fax:</strong> +8802-222261296</p>
                    <p><strong>Mobile:</strong> +8801729098714</p>
                    <p><strong>E-mail:</strong> <a href="">womenchamber.office@gmail.com, womenchamber@bwcci-bd.org</a></p>
                                
                </div>
            </div>
        </div>
    </section>

                        <!--================ END FOOTER PART ================-->



                        <!--================ END COPYRIGHT PART ================-->

    <section class="copyright_section" id="copyright_section">
        <div class="container">
            <div class="copyright_part text-center">
                <p>© 2023 BWCCI. All rights are reserved.</p>
            </div>
        </div>
    </section>

                        <!--================ END COPYRIGHT PART ================-->


<script src="{{asset('js/jquery-1.12.4.min.js')}}"></script>
    <script src="{{asset('js/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('js/waypoints.min.js')}}"></script>
    <script src="{{asset('js/slick.min.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <!-- <script src="{{asset('js/bootstrap.min.js')}}"></script> -->
    <script src="{{asset('js/script.js')}}"></script>
</body>
</html>