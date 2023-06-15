@extends('layouts.app')      
@section('content')


                        
				        <!--================ START BANNER PART ================-->

    <section id="banner_section" class="banner_section">
        <div class="container">
            <div class="row align-items-center banner_part">
                <div class="col-lg-5">
                    <div class="banner_left">
                        <h2>BEST <span style="color: #004274;">MEDICAL AND</span></h2>
                        <h1>Health Care Center</h1>
                        <p>ComforCare Clinic is a caring and modern healthcare facility dedicated to providing exceptional medical care to patients. We strive to create a welcoming and comfortable environment for our patients. </p>
                        <a class="btn" href="#appointment_part">Book Now</a>
                    </div>
                </div>
                
                <div class="col-lg-7">
                    <div class="banner_right">
                        <img src="{{asset('img/doctor.png')}}" alt="Doctor">
                    </div>
                </div>
            </div>
        </div>
    </section>

                        <!--================ END BANNER PART ================-->



				        <!--================ START MESSAGE PART ================-->

    <section id="shortServices_section" class="shortServices_section">
        <div class="container">
            <div class="row shortServices_part">
                <div class=" col-md-6 col-lg-3">
                    <div class="card  text-center">
                        <div class="short_parts">
                            <i class="fa-solid fa-heart-pulse"></i>
                            <h5>Blood Bank</h5>
                            <p>Donate blood,save life !</p>
                            <p> Be a hero by giving the gift of life through blood donation. </p>
                        </div>
                    </div>
                </div> 
                <div class=" col-md-6 col-lg-3">
                    <div class="card text-center">
                        <div class="short_parts">
                            <i class="fa-solid fa-stethoscope"></i>
                            <h5>Full Stethoscope</h5>
                            <p>Listen with precision, diagnose with confidence - Discover excellence in our Full Stethoscope collection.</p>
                        </div>
                    </div>
                </div> 
                <div class=" col-md-6 col-lg-3">
                    <div class="card text-center">
                        <div class="short_parts">
                            <i class="fa-solid fa-heart-pulse"></i>
                            <h5>Heart Specialist </h5>
                            <p>Your Heart's Advocate</p>
                            <p>Expert heart care by compassionate specialists.</p>
                        </div>
                    </div>
                </div> 
                <div class=" col-md-6 col-lg-3">
                    <div class="card text-center">
                        <div class="short_parts">
                            <i class="fa-solid fa-heart-pulse"></i>
                            <h5>Emergency Service</h5>
                            <p>Urgent Care When You Need It</p>
                            <p>Our Emergency Department is a lifeline for urgent medical care</p>
                        </div>
                    </div>
                </div> 
                </div>
            </div>
        </div>
    </section>

                        <!--================ END MESSAGE PART ================-->



				        <!--================ START ABOUT PART ================-->

    <section class="about_section">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-6 aboutPart_photo">
                    <img src="{{asset('img/about_us.png')}}" alt="About us">
                </div>
                <div class="col-lg-7 col-md-6 aboutPart_text">
                    <div class="title">
                        <h3>About <span>Us</span></h3>
                        <img src="{{asset('img/line.png')}}" alt="Line">
                    </div>
                    <h1>We Care For Your Health . Provide Best Medical Treatment</h1>
                    <p>At ComfortCare Clinic, we are dedicated to providing exceptional healthcare services in a compassionate and comforting environment. Our team of skilled professionals is committed to your well-being, ensuring personalized care and a positive healthcare experience.</p>
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



				        <!--================ START EMERGENCY PART ================-->

    <section class="emergency_section">
        <div class="row">
            <div class="col-lg-5 col-md-12 emergency_videoPart">
                <img src="{{asset('img/aged-care.jpg')}}" alt="">
            </div>
            <div class="col-lg-7 col-md-12 emergency_contant">
                <div class="row">
                    <div class="col-lg-6 col-lg-6 emergency_textPart">
                        <div class="emergancy_information">
                            <div class="row  emergancy_information_details">
                                <div class="col-lg-2 col-md-2 emergency_text_leftSide">
                                    <img  src="{{asset('img/doctor-icon.png')}}" alt="icon">
                                </div>
                                <div class="col-lg-10 col-md-10 emergency_text_rightSide">
                                    <h1>Emergency Medical Care <span>24/7</span></h1>
                                </div>
                            </div>
                            <div class="row emergancy_information_details">
                                <div class="col-12">
                                    <p>Our Emergency Contact Number.</p>
                                </div>
                            </div>
                            <div class="row emergancy_information_details">
                                <div class="col-lg-2 col-md-2 emergency_text_leftSide">
                                    <img  src="{{asset('img/doctor-icon.png')}}" alt="icon">
                                </div>
                                <div class="col-lg-10 col-md-10 emergency_text_rightSide">
                                    <h1>+88453203456</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-lg-6 emergency_picturePart">
                        <img src="{{asset('img/doc.png')}}" alt="Doctor">
                    </div>
                </div>
            </div>
        </div>
    </section>

                        <!--================ END EMERGENCY PART ================-->



                        <!--================ START APPOINTMENT PART ================-->

    <section id="appointment_part">
        <div class="container">
            <div class="row py-5 align-items-center">
                <div class="col-lg-6 col-md-6 p-5">
                    <div class="appointment_details">
                        <h1>Book An Appointment Online Today</h1>
                        <img src="{{asset('img/appointment.png')}}" alt="appointment" style="height: 100%; width: 100%;">
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

                        <!--================ END APPOINTMENT PART ================-->



                        <!--================ END SERVICE PART ================-->

    <section id="service_section" class="service_section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title text-center">
                        <h3>Our <span> Service</span></h3> 
                        <img src="{{asset('img/line.png')}}" alt="Line">
                    </div>
                </div>
            </div>
            <div class="row service_part">
                <div class=" col-md-6 col-lg-4 p-3">
                    <div class="card  text-center">
                        <div class="card-body">
                            <i class="fa-solid fa-heart-pulse"></i>
                            <h3>Blood Bank</h3>
                            <p>Donate blood,save life !</p>
                            <p> Be a hero by giving the gift of life through blood donation. </p>
                        
                            <a class="btn" href="./blood_donate.html">Read More</a>
                        </div>
                    </div>
                </div> 
                <div class=" col-md-6 col-lg-4 p-3">
                    <div class="card text-center">
                        <div class="card-body">
                            <i class="fa-solid fa-stethoscope"></i>
                            <h3>Full Stethoscope</h3>
                            <p>Clear Sound, Confident Diagnosis</p>
                            <p>Superior sound and comfort for precise auscultation.</p>
                        <a class="btn"  href="./fullstethoscope.html">Read More</a>
                        </div>
                    </div>
                </div> 
                <div class=" col-md-6 col-lg-4 p-3">
                    <div class="card text-center">
                        <div class="card-body">
                            <i class="fa-solid fa-heart-pulse"></i>
                            <h3>Heart Specialist </h3>
                            <p>Your Heart's Advocate</p>
                            <p>Expert heart care by compassionate specialists.</p>
                            <a class="btn" href="#">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

                        <!--================ END SERVICE PART ================-->




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
                            <img src="{{asset('img/doc.png')}}" alt="Doctor">
                        </div>
                        <div class="founder_content">
                            <div class="doctor_details">
                            <h2>Dr. Aimee Devlin</h2>
                            <p>Pasiychiatrst</p>
                            </div>
                        </div>
                        <div class="card_body text-center">
                            <a class="btn2" href="./Doctors_information.html">View More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 py-4">
                    <div class="card" style="width:92%;">
                        <div class="image">
                            <img src="{{asset('img/doc.png')}}" alt="Doctor">
                        </div>
                        <div class="founder_content">
                            <div class="doctor_details">
                            <h2>Dr. Aimee Devlin</h2>
                            <p>Pasiychiatrst</p>
                            </div>
                        </div>
                        <div class="card_body text-center">
                            <a class="btn2" href="./Doctors_information.html">View More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 py-4">
                    <div class="card" style="width:92%;">
                        <div class="image">
                            <img src="{{asset('img/doc.png')}}" alt="Doctor">
                        </div>
                        <div class="founder_content">
                            <div class="doctor_details">
                            <h2>Dr. Aimee Devlin</h2>
                            <p>Pasiychiatrst</p>
                            </div>
                        </div>
                        <div class="card_body text-center">
                            <a class="btn2" href="./Doctors_information.html">View More</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 text-center">
                    <a class="btn" href="">See all Doctors</a>
                </div>
            </div>
        </div>
    </section>

                        <!--================ END FOUNDERS PART ================-->

   


				        <!--================ START GALLERY PART ================-->

    <section id="gallary_section">
        <div class="container">
            <div class="row">
                <div class="gallary col-12 text-center">
                    <h2>Our Gallary</h2>
                    <div class="line"></div>
                </div>
            </div>
            <div class="row gallary_part">
                <div class="col-lg-4 col-md-6  p-3">
                    <img src="{{asset('img/img3.jpg')}}" alt="gallery image">
                </div>
                <div class="col-lg-4 col-md-6 p-3">
                    <img src="{{asset('img/img3.jpg')}}" alt="gallery image">
                </div>
                <div class="col-lg-4 col-md-6 p-3">
                    <img src="{{asset('img/img3.jpg')}}" alt="gallery image">
                </div>
            </div>
            <div class="col-12 text-center">
                <a href="./gallery.html" class="btn">See All Images</a>
            </div>
        </div>
    </section>

                        <!--================ END GALLERY PART ================-->



                        <!--================ START CLIENTS PART ================-->

    <section id="clients_section" class="clients_section">
        <div class="container">
            <div class="row clients_part py-5">
                <div class="col-lg-4 client_imagePart">
                    <img src="{{asset('img/doc.png')}}" alt="Review picture">
                </div>
                <div class="col-lg-8 py-4 clients_content">
                    <div class="row pb-3">
                        <div class="col-12">
                            <div class="title pb-3">
                                <h3>Our <span>Clients</span></h3>
                                <img style="width: 80px;" src="{{asset('img/line.png')}}" alt="Line">
                            </div>
                            <h2>Why we are the best medical and home service provide .</h2>
                        </div>
                    </div>
                    <div class="client-info">
                        <div id="carouselExampleCaptions" class="carousel slide"  data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active clients_infoDetails">
                                    <h2>Serina Akter</h2>
                                    <p>Excellent care at ComfortCare Clinic. The staff was friendly, knowledgeable, and the facilities were clean and comfortable. Highly recommended!</p>
                                </div>
                                <div class="carousel-item clients_infoDetails">
                                    <h2>Ibrahim Rahman </h2>
                                    <p>Outstanding experience at ComfortCare Clinic. The doctors were attentive, the nurses provided exceptional care, and the overall service was impeccable. A top-notch hospital!</p>
                                </div>
                                <div class="carousel-item clients_infoDetails">
                                    <h2> Afrin Khanom</h2>
                                    <p>ComfortCare Clinic exceeded my expectations. The medical staff was professional, the wait times were minimal, and the level of care provided was exceptional. I highly recommend this hospital.</p>
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                                <div class="icon">
                                    <i class="fa-solid fa-angle-left"></i>
                                </div>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                                <div class="icon">
                                    <i class="fa-solid fa-angle-right"></i>
                                </div>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

                        <!--================ END CLIENTS PART ================-->



                        
                        <!--================ START TAKE CARE PART ================-->

 <section id="takeCare_section" class="takeCare_section">
    <div class="container">
      <div class="row">
        <div class="takeCare col-12 text-center">
          <h2 >Need To Take Care Of Your</h2>
          <h3 >Family Health</h3>
          <p>We will treat you like family during your illness .Allow us to serve you by your side in your illness .</p>  
          <p>join with us</p>
        </div>
      </div>
      <div class="btn1">
	  <a href="./contact_form.html">Contact Us</a>
      </div>
    </div>
 </section>
    
                        <!--================ END TAKE CARE PART ================-->



                        
                        <!--================ START POPULAR NEWS PART ================-->

    <section id="popular_news" class="popular_news">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="title text-center">
                        <h1>Popular <span>News</span></h1>
                        <img src="{{asset('img/line.png')}}" alt="Line">
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 p-4">
                    <div class="card" style="width:100%">
                        <div class="image"> 
                            <img src="{{asset('img/img3.jpg')}}" alt="blog image" >
                        </div>
                        <div class="news_content">
                            <h2>Lorem ipsum dolor sit amet consectetur adipisicing elit consectetur.</h2>
                            <div class="icon">
                                <h3><span><i class="fa-regular fa-user"></i></span>By Jone Deo </h3>
                                <h3><span><i class="fa-sharp fa-regular fa-thumbs-up"></i></span>Like </h3>
                            </div>
                            <hr>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Distinctio, architecto.</p>
                            <a href="">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 p-4">
                    <div class="card" style="width:92%">
                        <div class="image">
                            <img src="{{asset('img/img3.jpg')}}" alt="blog image">
                        </div>
                        <div class="news_content">
                            <h2>Lorem ipsum dolor sit amet consectetur adipisicing elit consectetur.</h2>
                            <div class="icon">
                                <h3><span><i class="fa-regular fa-user"></i></span>By Jone Deo </h3>
                                <h3><span><i class="fa-sharp fa-regular fa-thumbs-up"></i></span>Like </h3>
                            </div>
                            <hr>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Distinctio, architecto.</p>
                            <a href="">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 p-4">
                    <div class="card" style="width:92%">
                        <div class="image">
                            <img src="{{asset('img/img3.jpg')}}" alt="blog image">
                        </div>
                        <div class="news_content">
                            <h2>Lorem ipsum dolor sit amet consectetur adipisicing elit consectetur.</h2>
                            <div class="icon">
                                <h3><span><i class="fa-regular fa-user"></i></span>By Jone Deo </h3>
                                <h3><span><i class="fa-sharp fa-regular fa-thumbs-up"></i></span>Like </h3>
                            </div>
                            <hr>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Distinctio, architecto.</p>
                            <a href="">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
                        <!--================ END POPULAR NEWS PART ================-->



@endsection
