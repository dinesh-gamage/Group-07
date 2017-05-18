<<<<<<< HEAD
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
=======
>>>>>>> 9b427d403cca9d9f9964ae03fb807980c382b347
<section class="wrapper">            
    <!--overview start-->
    <div class="row">
        <div class="col-lg-12">
            <!--h3 class="page-header"><i class="fa fa-laptop"></i> Dashboard</h3-->
            <ol class="breadcrumb">
                <li><i class="fa fa-home"></i><a href="<?php echo base_url() . "Index1" ?>">Home</a></li>
                <li><i class="fa fa-laptop"></i>Dashboard</li>						  	
            </ol>
        </div>
    </div>

    <div class="row">
        
    </div>
</section>
<<<<<<< HEAD

</section>
<!--main content end-->

<!-- javascripts -->
<script  >
/* $(document).ready(function (){
   alert("two");

});*/


</script>
<script src="<?php echo base_url() . "asserts/js/jquery.js" ?>"></script>
<script src="<?php echo base_url() . "asserts/js/jquery-ui-1.10.4.min.js" ?>"></script>
<script src="<?php echo base_url() . "asserts/js/jquery-1.8.3.min.js" ?>"></script>
<script type="text/javascript" src="<?php echo base_url() . "asserts/js/jquery-ui-1.9.2.custom.min.js" ?>"></script>
<!-- bootstrap -->
<script src="<?php echo base_url() . "asserts/js/bootstrap.min.js" ?>"></script>
<!-- nice scroll -->
<script src="<?php echo base_url() . "asserts/js/jquery.scrollTo.min.js" ?>"></script>
<script src="<?php echo base_url() . "asserts/js/jquery.nicescroll.js" ?>" type="text/javascript"></script>
<!-- charts scripts -->
<script src="<?php echo base_url() . "asserts/assets/jquery-knob/js/jquery.knob.js" ?>"></script>
<script src="<?php echo base_url() . "asserts/js/jquery.sparkline.js" ?>" type="text/javascript"></script>
<script src="<?php echo base_url() . "asserts/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js" ?>"></script>
<script src="<?php echo base_url() . "asserts/js/owl.carousel.js" ?>" ></script>
<!-- jQuery full calendar -->
<<script src="<?php echo base_url() . "asserts/js/fullcalendar.min.js" ?>"></script> <!-- Full Google Calendar - Calendar -->
<script src="<?php echo base_url() . "asserts/assets/fullcalendar/fullcalendar/fullcalendar.js" ?>"></script>
<!--script for this page only-->
<script src="<?php echo base_url() . "asserts/js/calendar-custom.js" ?>"></script>
<script src="<?php echo base_url() . "asserts/js/jquery.rateit.min.js" ?>"></script>
<!-- custom select -->
<script src="<?php echo base_url() . "asserts/js/jquery.customSelect.min.js" ?>" ></script>
<script src="<?php echo base_url() . "asserts/assets/chart-master/Chart.js" ?>"></script>

<!--custome script for all page-->
<script src="<?php echo base_url() . "asserts/js/scripts.js" ?>"></script>
<!-- custom script for this page-->
<script src="<?php echo base_url() . "asserts/js/sparkline-chart.js" ?>"></script>
<script src="<?php echo base_url() . "asserts/js/easy-pie-chart.js" ?>"></script>
<script src="<?php echo base_url() . "asserts/js/jquery-jvectormap-1.2.2.min.js" ?>"></script>
<script src="<?php echo base_url() . "asserts/js/jquery-jvectormap-world-mill-en.js" ?>"></script>
<script src="<?php echo base_url() . "asserts/js/xcharts.min.js" ?>"></script>
<script src="<?php echo base_url() . "asserts/js/jquery.autosize.min.js" ?>"></script>
<script src="<?php echo base_url() . "asserts/js/jquery.placeholder.min.js" ?>"></script>
<script src="<?php echo base_url() . "asserts/js/gdp-data.js" ?>"></script>	
<script src="<?php echo base_url() . "asserts/js/morris.min.js" ?>"></script>
<script src="<?php echo base_url() . "asserts/js/sparklines.js" ?>"></script>	
<script src="<?php echo base_url() . "asserts/js/charts.js" ?>"></script>
<script src="<?php echo base_url() . "asserts/js/jquery.slimscroll.min.js" ?>"></script>
<script>

//knob
//    $(function () {
//        $(".knob").knob({
//            'draw': function () {
//                $(this.i).val(this.cv + '%')
//            }
//        })
//    });

    //carousel
//    $(document).ready(function () {
//        $("#owl-slider").owlCarousel({
//            navigation: true,
//            slideSpeed: 300,
//            paginationSpeed: 400,
//            singleItem: true
//
//        });
//    });

    //custom select box
//
//    $(function () {
//        $('select.styled').customSelect();
//    });

    /* ---------- Map ---------- */
//    $(function () {
//        $('#map').vectorMap({
//            map: 'world_mill_en',
//            series: {
//                regions: [{
//                        values: gdpData,
//                        scale: ['#000', '#000'],
//                        normalizeFunction: 'polynomial'
//                    }]
//            },
//            backgroundColor: '#eef3f7',
//            onLabelShow: function (e, el, code) {
//                el.html(el.html() + ' (GDP - ' + gdpData[code] + ')');
//            }
//        });
//    });

//    function check(){
//        $(document).ready(function(){
//            $('#del').prop("disabled", true);
//            $('input:checkbox').click(function() {
//                if ($(this).is(':checked')) {
//                    $('#del').prop("disabled", false);
//                } else {
//                    if ($('.chk').filter(':checked').length < 1){
//                        $('#del').attr('disabled',true);}
//                }
//            });
//        });
//
//    }
//    check();
//    function lordpatienthistory(pid){
//        alert(pid);
//        $.ajax({
//            type: "post",
//            url: "http://[::1]/Third_Year_Project/NiceAdmin/FormComponent/index",
//            data: {pid: pid},
//            success: function () {
//                alert("prev");
//                window.location.href = "<1?php echo base_url('FormComponent');?>";
//            }
//
//        });
//
//    }

    /*function deleteitem(){
        $(document).ready(function(){
            if(confirm("Are you sure you want to delete these items")){
                var id =[];
                $(':checkbox:checked').each(function(i){
                    id[i]= $(this).val();
                });
                if(id.length === 0){
                }else{
                    var jsonString = JSON.stringify(id);
                    $.ajax({
                        url:'<1?php echo site_url('Index1/delete');?>',
                        method:'POST',
                        data:{id:jsonString},
                        success:function(){
                           // for(var i=0; i<id.length ;i++){
                                //$('#'+id[i]+'').fadeOut('slow');
                               // $('#del').attr('disabled',true);
                            //}
                        }
                    });
                }
            }else{
                return false;
            }

        })

    }*/
//    $("#del").on('change', function(e) {
//        alert("one");
//        $.ajax({
//            type: "POST",
//            url: '<1?=base_url("controller_name/function_name") ?>',
//            data: {name: "John",location:"Boston"},
//            success: function(response) {
//                alert("Data Saved: " + response);
//            }
//        });
//    });
    /*function search(){
        var i = $( "#disease option:selected" ).attr('value');
        alert(i);
        $.ajax({

            url: "<1?php echo base_url('Index1/index'); ?>",
            type: "POST",
            dataType: 'json',
            data: {searchitem:i},
            success: function(){
                alert("one");
            }
        });
    }*/



    $(document).ready(function (){




    });


</script>

=======
<script src="<?php echo base_url() . "asserts/js/bootstrap.min.js" ?>"></script>
>>>>>>> 9b427d403cca9d9f9964ae03fb807980c382b347
</body>
</html>
