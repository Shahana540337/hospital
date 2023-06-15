@extends('layouts.app')      
@section('content')


    
                        <!--================ START daignostic PART ================-->
    
    <section class="allDepartment_section" id="allDepartment_section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 col-md-6 allPart_photo">
                    <img src="{{asset('img/surgeryM.png')}}" alt="surgery">
                </div>
                <div class="col-lg-7 col-md-6 allPart_text">
                    <div class="title">
                        <h3>Medical <span>Surgery</span></h3>
                        <img src="{{asset('img/line.png')}}" alt="Line">
                    </div>
                    <h1>Welcome to the Surgical Department at ComfortCare Clinic .</h1>
                    <p>Our expert surgeons specialize in various disciplines, providing exceptional care. Our facilities boast state-of-the-art equipment for precise and safe surgeries. We offer a comprehensive range of surgical services for various medical conditions. Our team works closely with other departments to ensure coordinated care. We prioritize patient comfort, safety, and well-being throughout the surgical journey. Our surgeons and staff provide support, answer questions, and offer informed choices. We stay updated with the latest surgical techniques and technology. Innovation and research are integral to our approach. Contact us for consultations or inquiries.</p>
                    <a class="btn" href="">Book Now</a>
                </div>
            </div>
        </div>
    </section>

                        <!--================ END daignostic PART ================-->
                        
@endsection