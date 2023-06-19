<?php
include_once('header.php');
?>

    
<div class="site-blocks-cover inner-page" style="background-image: url('images/hero_1.jpg');">
      <div class="container">
        <div class="row">
          <div class="col-lg-7 mx-auto align-self-center">
            <div class=" text-center">
              <h1>Profile</h1>
              
            </div>
          </div>
        </div>
      </div>
    </div>
	


    <div class="site-section bg-light custom-border-bottom" data-aos="fade">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 site-section-heading text-center pt-4">
            <h2>My Profile</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 col-lg-12 mb-5">
    
            <div class="block-38 text-center">
              <div class="block-38-img">
                <div class="block-38-header">
                  <img src="images/upload/customer/<?php echo $fetch->file?>" alt="Image placeholder" width="100px" height="100px" class="mb-4">
                  <h3 class="block-38-heading h4">Name : <?php echo $fetch->cust_name?></h3>
                  <p class="block-38-subheading">ID : <?php echo $fetch->cust_id?></p>
				  <h3 class="block-38-subheading h4">Mobile : <?php echo $fetch->phone_no?></h3>
                  <p class="block-38-subheading">Gender : <?php echo $fetch->gender?></p>
				  <h3 class="block-38-subheading h4">Launguages : <?php echo $fetch->lang?></h3>
                  <p class="block-38-subheading">Country : <?php echo $fetch->c_name?></p>
				  <p class="block-38-subheading"><a href="edituser?btnedit=<?php echo $fetch->cust_id?>">Edit</a></p>
                </div>
                
              </div>
            </div>
          </div>
         
  
        </div>
      </div>
    </div>


<?php
include_once('footer.php');
?>