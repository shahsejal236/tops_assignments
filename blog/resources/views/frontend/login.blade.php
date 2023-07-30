
@extends('frontend.layout.main')

    @section('main_container')
    <!-- Page Content -->
 

    <!-- Page Content -->
  <!-- Banner Starts Here -->
  <div class="heading-page header-text">
    <section class="page-heading">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="text-content">
              <h2>Login Here</h2>
              <!--<h4>To Start Your First Blog</h4>-->
            </div> 
          </div>
        </div>
      </div>
    </section>
  </div>
  <section class="contact-us">
    <div class="container">
      <div class="row">
      
        <div class="col-lg-12">
          <div class="down-contact">
            <div class="row">
              <div class="col-lg-8">
                <div class="sidebar-item contact-form">
                  <div class="sidebar-heading">
                    <h2>Login </h2>
                  </div>
                  <div class="content">
                  <form action="{{url('/loginauth')}}" method="post" class="tm-login-form" >
                  @csrf
                      <div class="row">
                  
                        <div class="col-md-6 col-sm-12">
                            <label>Email</label>
                          <fieldset>
                            <input name="email" type="text" id="email" placeholder="Your email" required="">
                          </fieldset>
                        </div>
                        <div class="col-md-6 col-sm-12">
                        <label>password</label>
                          <fieldset>
                            <input name="password" type="password" id="password" placeholder="Password" required="">
                          </fieldset>
                        </div>
                        
                      
                        
                          
                        </div>
                        <div class="col-lg-12">
                          <fieldset>
                            <button type="submit" id="form-submit" class="main-button">Login</button>
                          </fieldset>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
              <div class="col-12">
                                        
					<a href="{{url('/signup')}}">If you not Register then Click Here</a>
             </div>
              </div>
            </div>
          </div>
        </div>
      

    <!-- Bootstrap core JavaScript -->
    

  </body>
</html>

@endsection