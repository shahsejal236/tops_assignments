<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&display=swap" rel="stylesheet">

    <title>PHPJabbers.com | Free Blog Website Template</title>

    <!-- Bootstrap core CSS -->
    <link href="{{url('frontend/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{url('frontend/assets/css/fontawesome.css')}}">
    <link rel="stylesheet" href="{{url('frontend/assets/css/style.css')}}">
    <link rel="stylesheet" href="{{url('frontend/assets/css/owl.css')}}">
  </head>

  <body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="index"><h2>Blog Website<em>.</em></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link" href="index">Home
                  <span class="sr-only">(current)</span>
                </a>
              </li> 
              
             

              <li class="nav-item active">
                <a class="nav-link" href="blog">Blog</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="team">Authors</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="contact">Contact Us</a>
              </li>
            </ul>

            <li>new blog</li>
          </div>
        </div>
      </nav>
    </header>
    
    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="heading-page header-text">
      <section class="page-heading">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="text-content">
                <h4>Blog</h4>
                <h2>Our Recent Blog Posts</h2>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    <!-- Banner Ends Here -->
   
    <section class="blog-posts grid-system">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
            <div class="all-blog-posts">
              <div class="row">
                <div class="col-lg-6">
              
                
      @foreach( $data as $d )
        
      <section class="blog-posts grid-system">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
            <div class="all-blog-posts">
              <div class="row">
                <div class="col-lg-6">
                  <div class="blog-post">
                    <div class="blog-thumb">
                      <img src="assets/images/blog-1-720x480.jpg" alt="">
                    </div>
                  
                    <div class="down-content">{{$d->title}}</h4></a>
                      
                      <a href="blog-details"><h4>
                      <p>{{$d->content}}</p>

                      <ul class="post-info">
                        
                      </ul>
                    </div>
                  </div>
                </div>
                
                
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
      @endforeach
             
                
    
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <ul class="social-icons">
              <li><a href="#">Facebook</a></li>
              <li><a href="#">Twitter</a></li>
              <li><a href="#">Behance</a></li>
              <li><a href="#">Linkedin</a></li>
            </ul>
          </div>
          <div class="col-lg-12">
            <div class="copyright-text">
              <p>
                Copyright © 2020 Company Name
                | Template by: <a href="https://www.phpjabbers.com/">PHPJabbers.com</a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </footer>


    <!-- Bootstrap core JavaScript -->
      <script src="{{url('frontend/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{url('frontend/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Additional Scripts -->
    <script src="{{url('frontend/assets/js/custom.js')}}"></script>
    <script src="{{url('frontend/assets/js/owl.js')}}"></script>
    <script src="{{url('frontend/assets/js/slick.js')}}"></script>
    <script src="{{url('frontend/assets/js/isotope.js')}}"></script>
    <script src="{{url('frontend/assets/js/accordions.js')}}"></script>

    <script language = "text/Javascript"> 
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }
    </script>

  </body>
</html>