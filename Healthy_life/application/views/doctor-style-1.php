<!--  doctor style 1 -->
<div class="hl-float opasity50">
    <span class="vertical-text-box" >
        <h6 class="vertical-text">Doctors</h6>
    </span>
</div>
<!--a href="#top" ><i class="hl-float-top fa fa-arrow-circle-up" style="color: #397df7;" ></i></a-->

<div id="specialist" class="specialist-main-block dr-style-one">
    <div class="container">      
      <div class="row">
            <h2 class="section-heading text-center">Healthy Life Our <span>Doctors</span></h2> <hr/><br/>           
        </div>  
        <?php foreach($doctor as $doc):?>
        <div class="col-md-4 col-sm-6">
          <div class="specialist-block">
            <div class="specialist-img">
              <img src="<?php echo "http://[::1]/project/Group-07/NiceAdmin/".$doc->doc_img?>" class="img-responsive" alt="specialist-1">
              <div class="overlay-bg"></div>
            </div>
            <div class="specialist-department">
              <i class="flaticon-lungs"></i>
            </div>
            <div class="specialist-dtl">            
              <h5 class="dr-name"><?php echo $doc->doc_name ;?></h5>
              <p class="specialist-post"><?php echo $doc->speciality ;?></p>
              <p><?php echo $doc->email ;?></p>
              <p><?php echo $doc->telephone ;?></p>
              <!--div class="social-icon">
                <ul>
                  <li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="#" target="_blank"><i class="fa fa-dribbble"></i></a></li>  
                </ul>                                  
              </div-->           
            </div>
          </div>
        </div>

      <?php endforeach;?>
      </div>
    </div>

<!-- end doctor style 1 -->
