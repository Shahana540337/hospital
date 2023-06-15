@extends('layouts.app')      
@section('content')


    
                        <!--================ START FOUNDERS PART ================-->
    
<section id="doctorsInfo_section">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-4 col-md-4">
          <div class="doc_left">
            <img src="{{asset('img/doc.png')}}" alt="doctor">
          </div>
        </div>
        <div class="col-lg-8 col-md-8">
            <div class="doc_right">
              <h1>About Me</h1>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit necessitatibus iusto laborum repellat, similique culpa vel eaque laudantium voluptas, veniam, quam sed doloremque corporis dicta laboriosam! Hic illum consequatur blanditiis.voluptas, veniam, quam sed doloremque corporis dicta laboriosam! Hic illum consequatur blanditiis</p>
              <div class="social-icons">
                <a href=""><i class="fab fa-facebook"></i></a>
                <a href=""><i class="fab fa-twitter-square"></i></a>
                <a href=""><i class="fab fa-instagram"></i></a>
                <a href=""><i class="fab fa-linkedin"></i></a>
              </div>
            </div>
        </div>
      </div>
    </div>
</section>

                        <!--================ END FOUNDERS PART ================-->
                        
@endsection