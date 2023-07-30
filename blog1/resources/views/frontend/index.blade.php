
@extends('frontend.layout.main')

    @section('main_container')
    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="main-banner header-text">
      <div class="container-fluid">
        <div class="owl-banner owl-carousel">
          <div class="item">
            <img src="{{url('frontend/assets/images/blog-1-720x480.jpg')}}" alt="">
            <div class="item-content">
              
              <div class="main-content">
                <div class="meta-category">
                  <span>Fashion</span>
                </div>

                <a href="car-details.html"><h4>Lorem ipsum dolor sit amet.</h4></a>

                <ul class="post-info">
                  <li>John Doe</li>
                  <li>22.07.2020 14:20</li>
                  <li>12 comments</li>
                </ul>
              </div>
            
            </div>
          </div>
          <div class="item">
            <img src="{{url('frontend/assets/images/blog-2-720x480.jpg')}}" alt="">
            <div class="item-content">
              
              <div class="main-content">
                <div class="meta-category">
                  <span>Nature</span>
                </div>

                <a href="car-details.html"><h4>Lorem ipsum dolor sit amet.</h4></a>

                <ul class="post-info">
                  <li>John Doe</li>
                  <li>22.07.2020 14:20</li>
                  <li>12 comments</li>
                </ul>
              </div>
            
            </div>
          </div>
          <div class="item">
            <img src="{{url('frontend/assets/images/blog-3-720x480.jpg')}}" alt="">
            <div class="item-content">
              
              <div class="main-content">
                <div class="meta-category">
                  <span>Sport</span>
                </div>

                <a href="car-details.html"><h4>Lorem ipsum dolor sit amet.</h4></a>

                <ul class="post-info">
                  <li>John Doe</li>
                  <li>22.07.2020 14:20</li>
                  <li>12 comments</li>
                </ul>
              </div>
            
            </div>
          </div>
          <div class="item">
            <img src="a{{url('fronted/ssets/images/blog-4-720x480.jpg')}}" alt="">
            <div class="item-content">
              
              <div class="main-content">
                <div class="meta-category">
                  <span>Entertainment</span>
                </div>

                <a href="car-details.html"><h4>Lorem ipsum dolor sit amet.</h4></a>

                <ul class="post-info">
                  <li>John Doe</li>
                  <li>22.07.2020 14:20</li>
                  <li>12 comments</li>
                </ul>
              </div>
            
            </div>
          </div>
          <div class="item">
            <img src="{{url('fronted/assets/images/blog-5-720x480.jpg')}}" alt="">
            <div class="item-content">
              
              <div class="main-content">
                <div class="meta-category">
                  <span>Lifestyle</span>
                </div>

                <a href="car-details.html"><h4>Lorem ipsum dolor sit amet.</h4></a>

                <ul class="post-info">
                  <li>John Doe</li>
                  <li>22.07.2020 14:20</li>
                  <li>12 comments</li>
                </ul>
              </div>
            
            </div>
          </div>
          <div class="item">
            <img src="{{url('fronted/assets/images/blog-6-720x480.jpg')}}" alt="">
            <div class="item-content">
              <div class="main-content">
                <div class="meta-category">
                  <span>Sport</span>
                </div>

                <a href="car-details.html"><h4>Lorem ipsum dolor sit amet.</h4></a>

                <ul class="post-info">
                  <li>John Doe</li>
                  <li>22.07.2020 14:20</li>
                  <li>12 comments</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Banner Ends Here -->

    <section class="blog-posts grid-system">
      <div class="container">
        <div class="all-blog-posts">
          <h2 class="text-center">Blog</h2>
          <br>
          <div class="row">
            <div class="col-md-4 col-sm-6">
              <div class="blog-post">
                <div class="blog-thumb">
                  <img src="{{url('fronted/assets/images/blog-4-720x480.jpg')}}" alt="">
                </div>
                <div class="down-content">
                  <a href="blog-details.html"><h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit</h4></a>
                  
                  <p>Nullam nibh mi, tincidunt sed sapien ut, rutrum hendrerit velit. Integer auctor a mauris sit amet eleifend.</p>

                  <ul class="post-info">
                    <li><a href="#">John Doe</a></li>
                    <li><a href="#">10.07.2020 10:20</a></li>
                    <li><a href="#"><i class="fa fa-comments" title="Comments"></i> 12</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-md-4 col-sm-6">
              <div class="blog-post">
                <div class="blog-thumb">
                  <img src="{{url('fronted/assets/images/blog-5-720x480.jpg')}}" alt="">
                </div>
                <div class="down-content">
                  <a href="blog-details.html"><h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit</h4></a>
                  
                  <p>Nullam nibh mi, tincidunt sed sapien ut, rutrum hendrerit velit. Integer auctor a mauris sit amet eleifend.</p>

                  <ul class="post-info">
                    <li><a href="#">John Doe</a></li>
                    <li><a href="#">10.07.2020 10:20</a></li>
                    <li><a href="#"><i class="fa fa-comments" title="Comments"></i> 12</a></li>
                  </ul>
                </div>
              </div>
            </div>
           
            <div class="col-md-4 col-sm-6">
              <div class="blog-post">
                <div class="blog-thumb">
                  
                  <img src="{{url('fronted/assets/images/blog-6-720x480.jpg')}}" alt="">
          
                </div>
                <div class="down-content">
                  <a href="blog-details.html"><h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit</h4></a>
                  
                  <p>Nullam nibh mi, tincidunt sed sapien ut, rutrum hendrerit velit. Integer auctor a mauris sit amet eleifend.</p>

                  <ul class="post-info">
                    <li><a href="#">John Doe</a></li>
                    <li><a href="#">10.07.2020 10:20</a></li>
                    <li><a href="#"><i class="fa fa-comments" title="Comments"></i> 12</a></li>
                  </ul>
                </div>
       
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="call-to-action">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="main-content">
              <div class="row">
                <div class="col-lg-8">
                  <span>Lorem ipsum dolor sit amet.</span>
                  <h4>Sed doloribus accusantium reiciendis et officiis.</h4>
                </div>
                <div class="col-lg-4">
                  <div class="main-button">
                    <a href="contact.html">Contact Us</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    

    <!-- Bootstrap core JavaScript -->
    

  </body>
</html>

@endsection