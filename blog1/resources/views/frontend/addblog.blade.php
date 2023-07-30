
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
              <h4>Sigup Here</h4>
              <h2>let’s Start Your First stap.. to Blogging!</h2>
            </div> 
          </div>
        </div>
      </div>
    </section>
  </div>
  <section class="contact-us">
    <div class="container">
      <div class="row">
      <form action="{{url('/signup')}}" method="post" enctype="multipart/form-data">
      @csrf
     
      
        <div class="col-lg-12">
          <div class="down-contact">
            <div class="row">
              <div class="col-lg-8">
                <div class="sidebar-item contact-form">
                  <div class="sidebar-heading">
                    <h2>Create An Account</h2>
                  </div>
                  <div class="content">
                    <form id="contact" action="" method="post">
                      <div class="row">
                        <div class="col-md-6 col-sm-12">
                          <fieldset>
                            <input name="title" type="text"  placeholder="Bolg Title" required="">
                          </fieldset>
                        </div>
                        <div class="mb-3">
  <label for="exampleFormControlTextarea1"  class="form-label">Content</label>
  <textarea class="form-control" name="content" id="exampleFormControlTextarea1" rows="5"></textarea>
</div>

                        
                          
                        </div>
                        <div class="col-lg-12">
                          <fieldset>
                            <button type="submit" id="form-submit" class="main-button">Add</button>
                          </fieldset>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
                <div class="col-12">
                                        
                                        <a href="{{url('/signup')}}">If you not Register then Click Here</a>
                                 </div>
              </div>
              </div>
             
            </div>
          </div>
        </div>
      

    <!-- Bootstrap core JavaScript -->
    

  </body>
</html>

@endsection