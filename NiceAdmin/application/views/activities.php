
<style>
.mySlides {display:none;}
</style>
<body>


<br><br>
<<<<<<< HEAD
<!--div class="w3-content w3-section" style="width: 100%;">
  <img class="mySlides" src="<-?php echo base_url()."asserts/images/doc_img/blog-1.jpg"; ?>" style="width:100%; height: 300px;">
  <img class="mySlides" src="<-?php echo base_url()."asserts/images/doc_img/speecialist-05.jpg"; ?>" style="width:100%; height: 300px;">
  <img class="mySlides" src="<-?php echo base_url()."asserts/images/doc_img/speecialist-062.jpg"; ?>" style="width:100%; height: 300px;">
</div-->
=======
<div class="w3-content w3-section" style="width: 100%;">
  <img class="mySlides" src="<?php echo base_url()."asserts/images/doc_img/blog-1.jpg"; ?>" style="width:100%; height: 300px;">
  <img class="mySlides" src="<?php echo base_url()."asserts/images/doc_img/speecialist-05.jpg"; ?>" style="width:100%; height: 300px;">
  <img class="mySlides" src="<?php echo base_url()."asserts/images/doc_img/speecialist-062.jpg"; ?>" style="width:100%; height: 300px;">
</div>
>>>>>>> 5e9b9ba8f4dbb0bdc1e1605b1234a7a9ced96a97

<div class="container">
  <h3>Fish Tank</h3>
  <p>Color of fishes changes when click/touch on it</p>
  <ul class="nav nav-pills nav-stacked">
    <li class="active"><a href="<?php echo base_url()."GameLevel1"; ?>" target="_blank">Level 1</a></li>
    <li><a href="<?php echo base_url()."GameLevel2"; ?>" target="_blank">Level 2</a></li>
    <li><a href="<?php echo base_url()."Game"; ?>" target="_blank">Level 3</a></li>
    
  </ul>
</div>

<div class="container">
  <h3>Roll a Ball</h3>
  <p>Objects disapears when the ball hit</p>
  <ul class="nav nav-pills nav-stacked">
    <li class="active"><a href="<?php echo base_url()."RollaBall1"; ?>" target="_blank">Level 1</a></li>
    <li><a href="#">Level 2</a></li>
    
    
  </ul>
</div>

<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>


<<<<<<< HEAD
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
=======

>>>>>>> 5e9b9ba8f4dbb0bdc1e1605b1234a7a9ced96a97

