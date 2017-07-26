<?php
        if (isset($this->session->userdata['logged_in'])) 
        {
            $username = ($this->session->userdata['logged_in']['username']);
            $email = ($this->session->userdata['logged_in']['email']);
            $name = ($this->session->userdata['logged_in']['name']);
            $picture = ($this->session->userdata['logged_in']['picture']);
            $status = ($this->session->userdata['logged_in']['status']);
            $doctorID = ($this->session->userdata['logged_in']['adminId']);
           
        } 
    ?>
<style>
    .modal-dialog {
  width: 100%;
  height: 100%;
  margin: 0;
  padding: 2%;
border-radius: 20px;
}

.modal-content {
  height: auto;
  
  
}
</style>
<section class="wrapper">
    <a href="<?php echo  base_url()?>/AdminView/index">
    <div class="col-sm-2 col-icon-box " >
        <img src="<?php echo base_url()."asserts/images/icons/goal.png"; ?>" class="img-thumbnail" width="100px" height="100px" />
        <div class="overlay">
            <div class="text">Set Goals</div>
        </div>
    </div>
    </a>
    <a href="<?php echo base_url();?>/AdminView/administrativeWork">
    <div class="col-sm-2 col-icon-box "  >
        <img src="<?php echo base_url()."asserts/images/icons/progress.png"; ?>" class="img-thumbnail" width="100px" height="100px" />
        <div class="overlay">
            <div class="text">Progress</div>
        </div>
    </div>
     </a>
</section>




<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>