
@extends('layouts.app')      
@section('content')


    
                        <!--================ START FOUNDERS PART ================-->
    
    <section id="founders_parts">
        <div class="container">
            <div class="row py-5">
                <div class="col-lg-12">
                    <div class="title text-center">
                        <h3>Our <span>Founders</span></h3>
                        <img src="{{asset('img/line.png')}}" alt="Line">
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 py-4">
                    <div class="card" style="width:92%;">
                        <div class="image">
                            <img src="{{asset('img/doc.png')}}" alt="doctor">
                        </div>
                        <div class="founder_content">
                            <div class="doctor_details">
                            <h2>Dr. Aimee Devlin</h2>
                            <p>Pasiychiatrst</p>
                            </div>
                        </div>
                        <a href="./Doctors_information.html">View More</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 py-4">
                    <div class="card" style="width:92%;">
                        <div class="image">
                            <img src="{{asset('img/doc.png')}}" alt="doctor">
                        </div>
                        <div class="founder_content">
                            <div class="doctor_details">
                            <h2>Dr. Aimee Devlin</h2>
                            <p>Pasiychiatrst</p>
                            </div>
                        </div>
                        <a href="./Doctors_information.html">View More</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 py-4">
                    <div class="card" style="width:92%;">
                        <div class="image">
                            <img src="{{asset('img/doc.png')}}" alt="doctor">
                        </div>
                        <div class="founder_content">
                            <div class="doctor_details">
                            <h2>Dr. Aimee Devlin</h2>
                            <p>Pasiychiatrst</p>
                            </div>
                        </div>
                        <a href="./Doctors_information.html">View More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

                        <!--================ END FOUNDERS PART ================-->
                        
@endsection