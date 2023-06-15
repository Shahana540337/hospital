@extends('layouts.app')      
@section('content')


    
                        <!--================ START daignostic PART ================-->
    
    <section id="radiologyPathology_section" class="radiologyPathology_section">
        <div class="container">
            <div class="row align-items-center py-5">
                <div class="col-lg-3 col-md-6 allPart_photo p-2">
                    <a href="">
                        <div class="card text-center" style="width: 100%;">
                            <img src="{{asset('img/blood-tests.jpg')}}" alt="blood test">
                            <div class="overlay">
                                <p>Blood Test</p>
                            </div>
                            <!-- <p class="btn2">Radiology</p> -->
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 allPart_photo p-2">
                    <a href="">
                        <div class="card text-center" style="width: 100%;">
                            <img src="{{asset('img/Urine_test.jpg')}}" alt="urine test">
                            <div class="overlay">
                                <p>Urine Test</p>
                            </div>
                            <!-- <p class="btn2">Pathology</p> -->
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

                        <!--================ END daignostic PART ================-->
                        
@endsection