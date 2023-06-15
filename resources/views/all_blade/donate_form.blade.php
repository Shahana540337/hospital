
@extends('layouts.app')      
@section('content')


<style>
    *{
        font-family: 'Raleway', sans-serif; 
    }

</style>

<!--================ START CONTACT PART ================-->
<section id="appointment_part">
    <div class="container">
        <div class="row py-5 align-items-center">
            <div class="col-lg-6 col-md-6 p-5">
                <div class="appointment_details">
                    <h1>Book Appointment</h1>
                    <h2>Book An Appointment Online Today</h2>
                    <img src="{{asset('img/appointment.png')}}" alt="appointment.png" style="height: 100%; width: 100%;">
                </div>
            </div>
            <div class="col-lg-6 col-md-6 py-5 ">
                <div class="card p-4">
                    <div class="appointment_form">
                        <div class="mb-3">
                        <form action="">
                            <input type="name" class="form-control mb-3" id="exampleFormControlInput1" placeholder="Enter Your Name">

                            <input type="email" class="form-control mb-3" id="exampleFormControlInput1" placeholder="Enter Your Email">

                            <input type="number" class="form-control mb-3" id="exampleFormControlInput1" placeholder="Enter Your Email">

                            <input type="text" class="form-control mb-3" id="exampleFormControlInput1" placeholder="Donation Center">

                            <input type="text" class="form-control mb-3" id="exampleFormControlInput1" placeholder="Enter Your Location">

                            <input type="date" class="form-control mb-3" id="exampleFormControlInput1" placeholder="Date">

                            <select class="form-select mb-3" aria-label="Default select example">
                                <option selected>Select Blood Group</option>
                                <option value="1">A+</option>
                                <option value="2">A-</option>
                                <option value="3">AB+</option>
                                <option value="4">AB-</option>
                                <option value="5">B+</option>
                                <option value="6">B-</option>
                                <option value="6">O+</option>
                                <option value="6">O-</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Input Your Messages Here"></textarea>
                        </div>
                            <a class="btn2" href="">Book An Appointment</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================ END CONTACT PART ================-->

                        
@endsection