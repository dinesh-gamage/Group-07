<!--  page banner -->    
  <div id="page-banner" class="page-banner-main" style="background-image: url('<?php echo base_url().'asserts/images/bg/page-banner.jpg'?>')">
    <div class="container">
      <div class="section">
        <h3 class="page-heading">Blog</h3>
      </div>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url()."Index1"?>">Home</a></li>
        <li><a href="#">Page</a></li>
        <li class="active"><a>Blog</a></li>
      </ol>
    </div>
  </div>     
<!--  end page banner -->
<!-- blog left -->    
  <div id="blog-left" class="blog-left-main-block">
    <div class="container">
      <div class="row">
        <div class="col-sm-3">
          <div class="archives-widget">
            <h6>Archives Widget</h6>
            <div class="services-content">
              <ul>
                <li><a href="#"><i class="fa fa-check-square"></i>Vehicle Accidents</a></li>
                <li><a href="#"><i class="fa fa-check-square"></i>Family Law</a></li>
                <li><a href="#"><i class="fa fa-check-square"></i>Personal Injury</a></li>
                <li><a href="#"><i class="fa fa-check-square"></i>Case Investigation</a></li>
                <li><a href="#"><i class="fa fa-check-square"></i>Web Development</a></li>
              </ul>
            </div>
          </div>           
          <div class="accordions-widget">
            <h6>Accordions Widget</h6>
            <div class="accor-widget faq-page-block">
              <div class="panel-group faq-panel" id="accordion" role="tablist" aria-multiselectable="true">
                <div class="panel panel-default">
                  <div class="panel-heading" role="tab" id="headingOne">
                    <h6 class="panel-title question-heading">
                      <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        <span class="btn btn-default faq-btn faq-btn faq-btn-minus hidden-xs"><i class="fa fa-minus"></i></span>
                        <span class="btn btn-default faq-btn faq-btn-plus hidden-xs"><i class="fa fa-plus"></i></span>
                        Our Mission
                      </a>
                    </h6>
                  </div>
                  <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                    <div class="panel-body">
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus nec accumsan tellus. Aenean tincidunt euismod nulla et volutpat. Nam placerat nulla quis .</p> 
                    </div>
                  </div>
                  <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingTwo">
                      <h6 class="panel-title question-heading">
                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                          <span class="btn btn-default faq-btn faq-btn faq-btn-minus hidden-xs"><i class="fa fa-minus"></i></span>
                          <span class="btn btn-default faq-btn faq-btn-plus hidden-xs"><i class="fa fa-plus"></i></span>
                          Our Solution
                        </a>
                      </h6>
                    </div>
                    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                      <div class="panel-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus nec accumsan tellus. Aenean tincidunt euismod nulla et volutpat. Nam placerat nulla quis .</p>
                      </div>
                    </div>
                  </div>
                  <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingThree">
                      <h6 class="panel-title question-heading">
                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                          <span class="btn btn-default faq-btn faq-btn faq-btn-minus hidden-xs"><i class="fa fa-minus"></i></span>
                          <span class="btn btn-default faq-btn faq-btn-plus hidden-xs"><i class="fa fa-plus"></i></span>
                          Our Technology
                        </a>
                      </h6>
                    </div>
                    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                      <div class="panel-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus nec accumsan tellus. Aenean tincidunt euismod nulla et volutpat. Nam placerat nulla quis .</p>
                      </div>
                    </div>
                  </div>                
                </div>
              </div> <!-- end faq panel-->
            </div>  <!-- end faq block-->
          </div>
          <div class="tab-widget">
            <h6>Tab Widget</h6>
            <ul class="nav nav-tabs" role="tablist">
              <li role="presentation" class="active"><a href="#recent-post" aria-controls="recent-post" role="tab" data-toggle="tab">Recent Post</a></li>
              <li role="presentation"><a href="#popular-post" aria-controls="popular-post" role="tab" data-toggle="tab">Populer Post</a></li>             
            </ul>
            <!-- Tab panes -->
            <div class="tab-content">
              <div role="tabpanel" class="tab-pane active" id="recent-post">
                <div class="tab-widget-dtl">
                  <div class="tab-thumb">
                    <img src="<?php echo base_url()."asserts/images/blog/post-thumb-01.jpg"?>" class="img-responsive" alt="post-thumb-1">
                  </div>
                  <a href="#">30 Photographic Works of Impressive Old Age</a>
                </div>
                <hr>
                <div class="tab-widget-dtl">
                  <div class="tab-thumb">
                    <img src="<?php echo base_url()."asserts/images/blog/post-thumb-02.jpg"?>" class="img-responsive" alt="post-thumb-2">
                  </div>
                  <a href="#">Architecto nam, Tugiat Cumque dolor, Quibusdam veritatis id.</a>
                </div>
                <hr>
                <div class="tab-widget-dtl">
                  <div class="tab-thumb">
                    <img src="<?php echo base_url()."asserts/images/blog/post-thumb-03.jpg"?>" class="img-responsive" alt="post-thumb-3">
                  </div>
                  <a href="#">Obcaecati ipsam, Tempora repellendus consequuntur Eius</a>
                </div>
                <hr>
                <div class="tab-widget-dtl">
                  <div class="tab-thumb">
                    <img src="<?php echo base_url()."asserts/images/blog/post-thumb-04.jpg"?>" class="img-responsive" alt="post-thumb-4">
                  </div>
                  <a href="#">Adipisci atque neque Veniam Excepturi, in ipsam</a>
                </div>
              </div>
              <div role="tabpanel" class="tab-pane" id="popular-post">
                <div class="tab-widget-dtl">
                  <div class="tab-thumb">
                    <img src="<?php echo base_url()."asserts/images/blog/post-thumb-04.jpg"?>" class="img-responsive" alt="post-thumb-1">
                  </div>
                  <a href="#">30 Photographic Works of Impressive Old Age</a>
                </div>
                <hr>
                <div class="tab-widget-dtl">
                  <div class="tab-thumb">
                    <img src="<?php echo base_url()."asserts/images/blog/post-thumb-03.jpg"?>" class="img-responsive" alt="post-thumb-2">
                  </div>
                  <a href="#">Architecto nam, Tugiat Cumque dolor, Quibusdam veritatis id.</a>
                </div>
                <hr>
                <div class="tab-widget-dtl">
                  <div class="tab-thumb">
                    <img src="<?php echo base_url()."asserts/images/blog/post-thumb-02.jpg"?>" class="img-responsive" alt="post-thumb-3">
                  </div>
                  <a href="#">Obcaecati ipsam, Tempora repellendus consequuntur Eius</a>
                </div>
                <hr>
                <div class="tab-widget-dtl">
                  <div class="tab-thumb">
                    <img src="<?php echo base_url()."asserts/images/blog/post-thumb-01.jpg"?>" class="img-responsive" alt="post-thumb-4">
                  </div>
                  <a href="#">Adipisci atque neque Veniam Excepturi, in ipsam</a>
                </div>
              </div>
            </div>
          </div>
          <div class="flickr-widget">
            <h6>Flickr Widget</h6>
            <div class="flickr-widget-block">
              <div class="row">
                <div class="col-md-4 col-xs-6 portfolio-block">            
                  <div class="portfolio-img">
                    <img src="<?php echo base_url()."asserts/images/blog/flickr-thumb-01.jpg"?>" class="img-responsive" alt="flickr-1">
                    <div class="portfolio-overlay"><a href="#"><i class="fa fa-plus"></i></a></div>
                  </div>           
                </div>
                <div class="col-md-4 col-xs-6 portfolio-block">            
                  <div class="portfolio-img">
                    <img src="<?php echo base_url()."asserts/images/blog/flickr-thumb-02.jpg"?>" class="img-responsive" alt="flickr-2">
                    <div class="portfolio-overlay"><a href="#"><i class="fa fa-plus"></i></a></div>
                  </div>           
                </div>
                <div class="col-md-4 col-xs-6 portfolio-block">            
                  <div class="portfolio-img">
                    <img src="<?php echo base_url()."asserts/images/blog/flickr-thumb-03.jpg"?>" class="img-responsive" alt="flickr-3">
                    <div class="portfolio-overlay"><a href="#"><i class="fa fa-plus"></i></a></div>
                  </div>           
                </div>
                <div class="col-md-4 col-xs-6 portfolio-block">            
                  <div class="portfolio-img">
                    <img src="<?php echo base_url()."asserts/images/blog/flickr-thumb-04.jpg"?>" class="img-responsive" alt="flickr-4">
                    <div class="portfolio-overlay"><a href="#"><i class="fa fa-plus"></i></a></div>
                  </div>           
                </div>
                <div class="col-md-4 col-xs-6 portfolio-block">            
                  <div class="portfolio-img">
                    <img src="<?php echo base_url()."asserts/images/blog/flickr-thumb-05.jpg"?>" class="img-responsive" alt="flickr-5">
                    <div class="portfolio-overlay"><a href="#"><i class="fa fa-plus"></i></a></div>
                  </div>           
                </div>
                <div class="col-md-4 col-xs-6 portfolio-block">            
                  <div class="portfolio-img">
                    <img src="<?php echo base_url()."asserts/images/blog/flickr-thumb-06.jpg"?>" class="img-responsive" alt="flickr-6">
                    <div class="portfolio-overlay"><a href="#"><i class="fa fa-plus"></i></a></div>
                  </div>           
                </div>
              </div>
            </div>
          </div>
          <div class="tag-widget">
            <h6>Tag Widget</h6>
            <div class="tags">
              <a href="#"><span class="badge">Travel</span></a>
              <a href="#"><span class="badge">Blog</span></a>
              <a href="#"><span class="badge">Lifestyle</span></a>
              <a href="#"><span class="badge">Feature</span></a>
              <a href="#"><span class="badge">Mountain</span></a>
              <a href="#"><span class="badge">Design</span></a>
              <a href="#"><span class="badge">Restaurant</span></a>
              <a href="#"><span class="badge">Sunset</span></a>    
            </div>       
          </div>
        </div>

        <div class="col-sm-9">
          <div class="blog-block">
            <div class="blog-banner-img">
              <img src="<?php echo base_url()."asserts/images/blog/blog-1.jpg"?>" class="img-responsive" alt="blog-1">
            </div>  
            <div class="blog-date">
              <h2 class="blog-day">03</h2>
              <p>Dec</p>
            </div>
            <div class="blog-page-heading">
              <ul class="meta-tag">
                <li><i class="lnr lnr-user"></i> <a href="#">Oceanthemes</a></li>
                <li><i class="lnr lnr-tag"></i> <a href="#">Business</a>, <a href="#">Coorporate</a>, <a href="#">Tips</a></li> 
                <li><i class="lnr lnr-bubble"></i> Comments: <a href="#">5</a></li>
              </ul>
              <a href="blog-single-left-sidebar-2.html"><h4 class="blog-title">Best Email Marketing Campaigns</h4></a> 
            </div>          
            <p>Laborum voluptas nemo aperiam culpa dignissimos dolores placeat ipsam eligendi! Adipisci atque neque veniam excepturi, in ipsam ipsum similique commodi dolor dolore asperiores! Nihil pariatur quis ducimus sequi illum eum, inventore recusandae obcaecati ipsam, tempora repellendus consequuntur eius sed deserunt voluptatum omnis nulla culpa quidem magni facilis asperiores ullam! Cum dicta nulla suscipit veniam consequuntur, qui quaerat illo voluptatum ipsum eveniet in placeat possimus doloribus dolorum? Tenetur impedit repellat veritatis itaque qui ratione placeat totam quos quaerat vitae quod excepturi.
            </p>
            <a href="#" class="btn btn-default">Read More</a>
          </div>
          <div class="blog-block">
            <div id="blog-block-slider">
              <div class="item">
                <div class="blog-banner-img">
                  <img src="<?php echo base_url()."asserts/images/blog/blog-2.jpg"?>" class="img-responsive" alt="blog-1">
                </div> 
              </div> 
              <div class="item">
                <div class="blog-banner-img">
                  <img src="<?php echo base_url()."asserts/images/blog/blog-1.jpg"?>" class="img-responsive" alt="blog-2">
                </div> 
              </div>
            </div>
            <div class="blog-date">
              <h2 class="blog-day">03</h2>
              <p>Dec</p>
            </div>
            <div class="blog-page-heading">
              <ul class="meta-tag">
                <li><i class="lnr lnr-user"></i> <a href="#">Oceanthemes</a></li>
                <li><i class="lnr lnr-tag"></i> <a href="#">Business</a>, <a href="#">Coorporate</a>, <a href="#">Tips</a></li> 
                <li><i class="lnr lnr-bubble"></i> Comments: <a href="#">5</a></li>
              </ul>
              <a href="blog-single-left-sidebar-2.html"><h4 class="blog-title">Slider Blog Post</h4></a> 
            </div>          
            <p>Laborum voluptas nemo aperiam culpa dignissimos dolores placeat ipsam eligendi! Adipisci atque neque veniam excepturi, in ipsam ipsum similique commodi dolor dolore asperiores! Nihil pariatur quis ducimus sequi illum eum, inventore recusandae obcaecati ipsam, tempora repellendus consequuntur eius sed deserunt voluptatum omnis nulla culpa quidem magni facilis asperiores ullam! Cum dicta nulla suscipit veniam consequuntur, qui quaerat illo voluptatum ipsum eveniet in placeat possimus doloribus dolorum? Tenetur impedit repellat veritatis itaque qui ratione placeat totam quos quaerat vitae quod excepturi.
            </p>
            <a href="#" class="btn btn-default">Read More</a>
          </div>
          <div class="blog-block">
            <div class="blog-banner-img">
              <div class="video-item">
                <script type="text/javascript">
                  var video_url = '<iframe src="http://www.youtube.com/embed/ZMdCsIaE7II?autoplay=1&showinfo=0" frameborder="0"></iframe>';
                </script>
                <div class="video-device">
                  <img class="bg_img img-responsive" src="<?php echo base_url()."asserts/images/blog/blog-3.jpg"?>" alt="blog-video-1" />
                  <div class="video-preview">
                    <a href="javascript:void(0);" class="btn-video-play"><i class="fa fa-play"></i></a>
                  </div>
                </div>
              </div> 
            </div>  
            <div class="blog-date">
              <h2 class="blog-day">03</h2>
              <p>Dec</p>
            </div>
            <div class="blog-page-heading">
              <ul class="meta-tag">
                <li><i class="lnr lnr-user"></i> <a href="#">Oceanthemes</a></li>
                <li><i class="lnr lnr-tag"></i> <a href="#">Business</a>, <a href="#">Coorporate</a>, <a href="#">Tips</a></li> 
                <li><i class="lnr lnr-bubble"></i> Comments: <a href="#">5</a></li>
              </ul>
              <a href="blog-single-left-sidebar-2.html"><h4 class="blog-title">Youtube Video Post</h4></a> 
            </div>          
            <p>Laborum voluptas nemo aperiam culpa dignissimos dolores placeat ipsam eligendi! Adipisci atque neque veniam excepturi, in ipsam ipsum similique commodi dolor dolore asperiores! Nihil pariatur quis ducimus sequi illum eum, inventore recusandae obcaecati ipsam, tempora repellendus consequuntur eius sed deserunt voluptatum omnis nulla culpa quidem magni facilis asperiores ullam! Cum dicta nulla suscipit veniam consequuntur, qui quaerat illo voluptatum ipsum eveniet in placeat possimus doloribus dolorum? Tenetur impedit repellat veritatis itaque qui ratione placeat totam quos quaerat vitae quod excepturi.
            </p>
            <a href="#" class="btn btn-default">Read More</a>
          </div>
          <hr>          
          <div class="pagination-block text-center">
            <div class="row">  
              <div class="col-md-2 col-sm-3 col-xs-6">
                <div class="prev">
                  <a href="#"><i class="fa fa-angle-double-left" aria-hidden="true"></i> Previous</a>
                </div>
              </div>
              <div class="col-md-6 col-sm-6 hidden-xs">
                <ul class="pagination">
                  <li><a href="#">1</a></li>
                  <li class="active"><a href="#">2</a></li>
                  <li><a href="#">3</a></li>
                  <li><a href="#">4</a></li>
                  <li><a href="#">5</a></li>
                  <li><a href="#">6</a></li>
                  <li><a href="#">7</a></li>
                  <li><a href="#">8</a></li>
                  <li><a href="#">9</a></li>
                  <li><a href="#">10</a></li>
                  <li>
                </ul>
              </div>
              <div class="col-md-2 col-sm-3 col-xs-6">
                <div class="next">
                  <a href="#">Next <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<!--  end blog details -->

