@extends('layouts.app')      
@section('content')



                        <!--================ START ABOUT PART ================-->

    <section class="about_section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 col-md-6 aboutPart_photo">
                    <img src="{{asset('img/about_us.png')}}" alt="about us">
                </div>
                <div class="col-lg-7 col-md-6 aboutPart_text">
                    <div class="title">
                        <h3>About <span>Us</span></h3>
                        <img src="{{asset('img/line.png')}}" alt="Line">
                    </div>
                    <h1>We Care For Your Health . Provide Best Medical Treatment</h1>
                    <p>Welcome to ComfortCare Clinic, your premier destination for exceptional healthcare services. With our compassionate approach and comfortable environment, we prioritize your well-being. Our dedicated team of highly skilled professionals is committed to providing personalized care tailored to your unique needs. From routine check-ups to specialized treatments and diagnostics, we offer a comprehensive range of services to meet all your healthcare requirements. Equipped with state-of-the-art facilities and advanced technologies, we ensure accurate diagnoses and effective treatments. At ComfortCare Clinic, we value the trust you place in us and strive to exceed your expectations by delivering top-quality care in a warm and welcoming atmosphere. Your health is our priority, and we are here to support you on your wellness journey.</p>
                    <hr>
                    <div class="row counter_part">
                        <div class="col-lg-4 col-md-4 counter_parts">
                            <div class="row" style="align-items: center;">
                                <div class="col-lg-4 col-md-4">
                                    <img src="{{asset('img/doctor-icon.png')}}" alt="icon">
                                </div>
                                <div class="col-lg-8 col-md-7 counter_text">
                                    <h1 class="counter">4500</h1>
                                    <p>patients</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 counter_parts">
                            <div class="row" style="align-items: center;">
                                <div class="col-lg-4 col-md-4">
                                    <img src="{{asset('img/doctor-icon.png')}}" alt="icon">
                                </div>
                                <div class="col-lg-8 col-md-7 counter_text">
                                    <h1 class="counter">30</h1>
                                    <p>Award win</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 counter_parts">
                            <div class="row" style="align-items: center;">
                                <div class="col-lg-4 col-md-4">
                                    <img src="{{asset('img/doctor-icon.png')}}" alt="icon">
                                </div>
                                <div class="col-lg-8 col-md-7 counter_text">
                                    <h1 class="counter">100</h1>
                                    <p>Hospital Rooms</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>    

                        <!--================ END ABOUT PART ================-->

                        
@endsection