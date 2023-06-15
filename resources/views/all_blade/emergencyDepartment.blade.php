@extends('layouts.app')      
@section('content')


    
                        <!--================ START daignostic PART ================-->
    
    <section class="allDepartment_section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 col-md-6 allPart_photo">
                    <img src="{{asset('img/emergency-Department.jpg')}}" alt="Emergency Department">
                </div>
                <div class="col-lg-7 col-md-6 allPart_text">
                    <div class="title">
                        <h3>Emergency <span>Department</span></h3>
                        <img src="{{asset('img/line.png')}}" alt="Line">
                    </div>
                    <h1>"Urgent Care When You Need It"</h1>
                    <p>
                        Our Emergency Department is a lifeline for urgent medical care, operating around the clock to ensure immediate attention when it matters most. Equipped with cutting-edge equipment and staffed by a dedicated team of experienced professionals, we provide prompt and comprehensive treatment for a wide range of emergencies. From minor injuries to life-threatening situations, our skilled physicians and nurses are ready to deliver critical care with expertise and compassion. Rest assured, we prioritize your well-being and strive to minimize wait times while maintaining the highest standards of quality and safety. Trust us to be your reliable partner in times of crisis, offering unwavering support and exceptional medical care.</p>
                    <a class="btn" href="">Book Now</a>
                    <hr>
                </div>
            </div>
        </div>
    </section>   

                        <!--================ END daignostic PART ================-->
                        
@endsection