@extends('frontend.layout.main')

@section('main_container')



@include('sweetalert::alert')
    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 py-5">
        <div class="container">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Register Here</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb text-uppercase">
                    <li class="breadcrumb-item"><a class="text-white" href="userindex">Home</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">Registration</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Contact Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4">
                
                <div class="col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                @if(session('success'))
							<span class="alert alert-success">{{session('success')}}</span>
						@endif	
                    <div class="bg-light p-5 h-100 d-flex align-items-center">
                       
                    <form action="{{url('/updateprofile/'.$data->id)}}" method="post" enctype="multipart/form-data">
							@csrf
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control"  name="fname"  value="{{$data->fname}}" placeholder="Your Name">
                                        <label for="name">Frist Name</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control"  name="lname"  value="{{$data->lname}}" placeholder="Your Name">
                                        <label for="name">Last Name</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                        <div>
										<label for="subject">Gender</label>
										<br>
                                            Male:<input type="radio" name="gender" value="Male" >
                                            <?php
											$gender=$data->gender;
											if($gender=="Male")
											{
												echo "checked";
											}
											?>
											Female:<input type="radio" name="gender" value="Female">
                                            <?php
											$gender=$data->gender;
											if($gender=="Female")
											{
												echo "checked";
											}
											?>
                                            
                                        </div>
                                        <div class="form-floating">
                                        <input type="textarea" class="form-control"  name="phone_no" value="{{$data->phone_no}}" placeholder="phone no">
                                        <label for="name">Phone No </label>
                                    </div>
                                    </div>
                                    <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control"  name="age" value="{{$data->age}}" placeholder="Your Name">
                                        <label for="name">Age </label>
                                    </div>
                                    
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control"  name="address"  value="{{$data->address}}" placeholder="Your Address">
                                        <label for="name">Address </label>
                                    </div>
                                </div>
                                    <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" name="email" value="{{$data->email}}" placeholder="Your email">
                                        <label for="name">Your Email</label>
                                    </div>
                                </div>
                               
                               
                           <!--    <div class="col-md-12">
                                        <div class="form-floating">
                                            <input type="file" name="file" class="form-control" id="file" name="file" placeholder="Your file">
                                            <label for="email">Your file</label>
                                        </div>
                                    </div>
                            -->
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit" name="">Update </button>
                                    <a href="{{url('/profile')}}">Back</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->


    @endsection