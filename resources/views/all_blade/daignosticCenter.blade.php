@extends('layouts.app')      
@section('content')


    
                        <!--================ START daignostic PART ================-->
    
    <section id="daignostic_section" class="daignostic_section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6 allPart_photo p-5">
                    <a href="./radiology.html">
                        <div class="card text-center" style="width: 100%;">
                            <img src="{{asset('img/radiology.jpg')}}" alt="radiology picture">
                            <p class="btn2">Radiology</p>
                        </div>
                    </a>
                </div>
                <div class="col-lg-6 col-md-6 allPart_photo p-5">
                    <a href="./pathology.html">
                        <div class="card text-center" style="width: 100%;">
                            <img src="{{asset('img/Pathology.jpg')}}" alt="">
                            <p class="btn2">Pathology</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

                        <!--================ END daignostic PART ================-->
                        
@endsection