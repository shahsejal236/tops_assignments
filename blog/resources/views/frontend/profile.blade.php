@extends('frontend.layout.main')

@section('main_container')


@include('sweetalert::alert')
    <!-- Carousel Start -->
    


    @if(session('success'))
						<span class="alert alert-success">{{session('success')}}</span>
	@endif	

    <!-- Testimonial Start -->
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="text-center">
                <h6 class="text-secondary text-uppercase">User Profile</h6>
                <h1 class="mb-5">View Profile</h1>
            </div>
            <div class="owl-carousel testimonial-carousel position-relative wow fadeInUp" data-wow-delay="0.1s">
                
            <div class="testimonial-item text-center">
                   
                </div>
            </div>
        </div>
        @if(session('success'))
						<span class="alert alert-success">{{session('success')}}</span>
					@endif

        <div class="testimonial-item text-center">
                    <div class="testimonial-text bg-light text-center p-4 mb-4">
                        <p class="mb-0">Hello </p>
                    </div>
                   
                    <div class="mb-2">
                        <small class="fa fa-star text-secondary"></small>
                        <small class="fa fa-star text-secondary"></small>
                        <small class="fa fa-star text-secondary"></small>
                        <small class="fa fa-star text-secondary"></small>
                        <small class="fa fa-star text-secondary"></small>
                    </div>
                    <h1>{{$data->fname}}</h1>
                    <h5 class="mb-1"> {{$data->email}}</h5>
                    
                    <div class="d-flex justify-content-center mt-3">
                                <a class="btn btn-square btn-primary mx-1" href="#"><i class="fa fa-edit"></i></a>
                     </div>
                </div>
            </div>
        </div>


    </div>
    <!-- Testimonial End -->


   
    @endsection