<!--  page banner -->    
  <div id="page-banner" class="page-banner-main" style="background-image: url('<?php echo base_url().'asserts/images/bg/page-banner.jpg'?>')">
    <div class="container">
      <div class="section">
        <h3 class="page-heading">Contact</h3>
      </div>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url()."Index1"?>">Home</a></li>
        <li><a href="#">Page</a></li>
        <li class="active"><a>Contact</a></li>
      </ol>
    </div>
  </div>     
<!--  end banner -->
<!--  contact style 2 -->
  <div id="contact-two" class="contact-two-main-block">
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-sm-6">
          <div class="contact-img">
            <img src="<?php echo base_url()."asserts/images/contact-img.jpg"?>" class="img-responsive" alt="contact">
          </div>
        </div>       
        <div class="col-md-2 col-sm-6">
          <div class="address-block">            
            <h6 class="contact-block-title"><i class="fa fa-map-marker"></i> Address</h6>
            <p>Mega medical Hospital, Second steet, Cohin, 665236</p>
          </div>
          <div class="phone-block">            
            <h6 class="contact-block-title"><i class="fa fa-phone"></i> Phone</h6>
            <ul>
              <li>8565 5564 555</li>
              <li>+91 5546 8856</li>
            </ul>
          </div>
          <div class="mail-block">           
            <h6 class="contact-block-title"><i class="fa fa-envelope"></i> Email</h6>
            <ul>
              <li>info@yourgmail.com</li>
              <li>mail@gmail.com</li>
            </ul>
          </div>
        </div>
        <div class="col-md-6">
          <form class="contact-form" method="post" action="http://thegenius.co/lamadic-html/version1/contact-us.php">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label>Name</label>
                  <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name" required>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>Email</label>
                  <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email" required>
                </div>  
              </div> 
            </div>  
            <div class="form-group">
              <label>Message</label>            
              <textarea name="message" id="message" placeholder="Type Message"></textarea>
            </div>
            <button type="submit" class="btn btn-default">Send Us</button>
          </form>        
        </div>
      </div>
      <div id="location" class="map-location2"></div> <!--  Map -->
    </div>
  </div>
<!--  end contact style 2 -->
<script>
  jQuery(function($) {
    // Asynchronously Load the map API 
    var script = document.createElement('script');
    script.src = "http://maps.googleapis.com/maps/api/js?sensor=false&amp;callback=initialize";
    document.body.appendChild(script);
  });
  function initialize(){
    var myLatLng = {lat: 25.3500, lng: 74.6333}; // Insert Your Latitude and Longitude For Footer Wiget Map
    var mapOptions = {
      center: myLatLng, 
      zoom: 15,
      disableDefaultUI: true,
      scrollwheel: false,
      mapTypeId: google.maps.MapTypeId.ROADMAP,
      styles: [{"featureType":"landscape","stylers":[{"saturation":-100},{"lightness":65},{"visibility":"on"}]},{"featureType":"poi","stylers":[{"saturation":-100},{"lightness":51},{"visibility":"simplified"}]},{"featureType":"road.highway","stylers":[{"saturation":-100},{"visibility":"simplified"}]},{"featureType":"road.arterial","stylers":[{"saturation":-100},{"lightness":30},{"visibility":"on"}]},{"featureType":"road.local","stylers":[{"saturation":-100},{"lightness":40},{"visibility":"on"}]},{"featureType":"transit","stylers":[{"saturation":-100},{"visibility":"simplified"}]},{"featureType":"administrative.province","stylers":[{"visibility":"off"}]},{"featureType":"water","elementType":"labels","stylers":[{"visibility":"on"},{"lightness":-25},{"saturation":-100}]},{"featureType":"water","elementType":"geometry","stylers":[{"hue":"#ffff00"},{"lightness":-25},{"saturation":-97}]}]    
    }
    // For Footer Widget Map
    var map = new google.maps.Map(document.getElementById("location"), mapOptions);
    var image = 'images/icons/map.png';
    var beachMarker = new google.maps.Marker({
      position: myLatLng, 
      map: map,   
      icon: image
    });    
  }
</script>
<!-- end  jquery -->
