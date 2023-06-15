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
                    <img src="./img/appointment.png" alt="appointment.png" style="height: 100%; width: 100%;">
                </div>
            </div>
            <div class="col-lg-6 col-md-6 py-5 ">
                <div class="card p-4">
                    <div class="appointment_form">
                        <div class="mb-3">
                        <form action="">
                            <label for="exampleFormControlInput1" class="form-label">Patient Name :</label>
                            <input type="name" class="form-control mb-3" id="exampleFormControlInput1" placeholder="Enter Your Name">

                            <label for="exampleFormControlInput1" class="form-label">Email :</label>
                            <input type="email" class="form-control mb-3" id="exampleFormControlInput1" placeholder="Enter Your Email">

                            <label for="exampleFormControlInput1" class="form-label">Contact Number :</label>
                            <input type="number" class="form-control mb-3" id="exampleFormControlInput1" placeholder="Enter Your Email">

                            <label for="exampleFormControlInput1" class="form-label">Location :</label>
                            <input type="text" class="form-control mb-3" id="exampleFormControlInput1" placeholder="Enter Your Location">

                            <label for="exampleFormControlInput1" class="form-label">Booking For :</label>
                            <select class="form-select mb-3" aria-label="Default select example">
                                <option selected>Select Here</option>
                                <option value="1">SURGICAL DEPARTMENT</option>
                                <option value="2">SKIN CARE DEPARTMENT</option>
                                <option value="3">EMERGENCY DEPARTMENT</option>
                                <option value="4">GYNECOLOGY DEPARTMENT</option>
                                <option value="5">CHILD CARE CENTER</option>
                                <option value="6"> DAIGNOSTIC CENTER</option>
                                <option value="6"> RADIOLOGY DEPARTMENT</option>
                                <option value="6"> PATHOLOGY DEPARTMENT</option>
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