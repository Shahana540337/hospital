@extends('layouts.app')      
@section('content')


    
                        <!--================ START daignostic PART ================-->
    
    <section class="allDepartment_section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 col-md-6 allPart_photo">
                    <img src="{{asset('img/skin_care-1.jpg')}}" alt="skin care">
                </div>
                <div class="col-lg-7 col-md-6 allPart_text">
                    <div class="title">
                        <h3>Skin <span>Care</span></h3>
                        <img src="{{asset('img/line.png')}}" alt="Line">
                    </div>
                    <h1>Discover Our Expert Skin Care Solutions</h1>
                    <p>Experience the ultimate in skin care at our dedicated Skin Care Department. Our team of experts is committed to helping you achieve radiant, healthy skin. With personalized treatments and state-of-the-art techniques, we address your specific needs and deliver exceptional results. Discover the transformative power of our services and unlock your skin's true potential.</p>
                    <a class="btn" href="">Book Now</a>
                    <hr>
                </div>
            </div>
        </div>
    </section>  


                        <!--================ END daignostic PART ================-->
                        
@endsection