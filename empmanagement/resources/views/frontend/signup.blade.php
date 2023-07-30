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
                       
                        <form action="{{url('/signup')}}" method="post" >
							@csrf
                            
                            @if ($errors->any())
                            <div class="alert alert-danger">
                         <ul>
                        @foreach ($errors->all() as $error)
                         <li>{{ $error }}</li>
                        @endforeach
                         </ul>
                          </div>
                        @endif
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control"  name="fname" placeholder="Your Name">
                                        <label for="name">Frist Name</label>
                                    </div>
                                    @error('fname')
											<div class="alert alert-danger">{{ $message }}</div>
										@enderror
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control"  name="lname" placeholder="Your Name">
                                        <label for="name">Last Name</label>
                                    </div>
                                </div>
                                @error('lname')
											<div class="alert alert-danger">{{ $message }}</div>
								@enderror
                                <div class="col-12">
                                        <div>
										<label for="subject">Gender</label>
										<br>
                                            Male:<input type="radio" name="gender" value="Male" >
											Female:<input type="radio" name="gender" value="Female">
                                            
                                        </div>
                                        @error('gen')
											<div class="alert alert-danger">{{ $message }}</div>
										@enderror
                                        <div class="form-floating">
                                        <input type="textarea" class="form-control"  name="phone_no" placeholder="phone no">
                                        <label for="name">Phone No </label>
                                    </div>
                                    @error('phone_no')
											<div class="alert alert-danger">{{ $message }}</div>
									@enderror
                                    </div>
                                    <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control"  name="age" placeholder="Your Name">
                                        <label for="name">Age </label>
                                    </div>
                                    @error('age')
											<div class="alert alert-danger">{{ $message }}</div>
									@enderror
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control"  name="address" placeholder="Your Address">
                                        <label for="name">Address </label>
                                    </div>
                                    @error('address')
											<div class="alert alert-danger">{{ $message }}</div>
									@enderror
                                </div>
                                    <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" name="email" placeholder="Your email">
                                        <label for="name">Your Email</label>
                                    </div>
                                    @error('email')
											<div class="alert alert-danger">{{ $message }}</div>
									@enderror
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="password" class="form-control" name="password" placeholder="Password">
                                        <label for="name">Password</label>
                                    </div>
                                    @error('password')
											<div class="alert alert-danger">{{ $message }}</div>
									@enderror
                                </div>
                               
                <!-- <div class="col-md-12">
                                        <div class="form-floating">
                                            <input type="file" name="file" class="form-control" id="file" name="file" placeholder="Your file">
                                     <label for="email">Your file</label>
                               </div>  -->
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit" name="">Register </button>
                                    <a href="login" class="nav-item nav-link" value="">If Alreadyy Register ...?? Then login here</a>
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