@extends('frontend.layout.main')

@section('main_container') 



<!-- TEAM -->
<section id="team" class="parallax-section">
     <div class="container">
          <div class="row">

               <div class="col-md-offset-2 col-md-8 col-sm-12">
                    <!-- SECTION TITLE -->
                    <div class="section-title">
                         <h1>Image Gallery</h1>
                    </div>
               </div>			
                
			<div id="owl-team" class="owl-carousel">
					@foreach($data as $d)
                    <div class="col-md-4 col-sm-4 item">
                         <div class="team-item">
                              <img src="{{url('upload/photo/'.$d->file)}}" class="img-responsive" alt="">
							  <h3>{{$d->name}}</h3>							  
                         </div>         
						 
                    </div>
					
      
	
                    <div class="col-md-4 col-sm-4 item">
                         <div class="team-item">       
							   <?php
							   $file=$d->file;
							   $multi_filearr=explode(',',$file);
							   ?>
                        @foreach($multi_filearr as $file)
							<img src="{{url('upload/images/'.$file)}}" class="img-responsive" alt="">  
							<h3>{{$d->name}}</h3>
						@endforeach               
                         </div>         
					</div>@endforeach 
			</div>
	
		
     </div>
	 </div>
</section>


@endsection
