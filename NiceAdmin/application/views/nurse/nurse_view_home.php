<?php
        
        $status  = $this->session->userdata('status');    
        if($status != 'Nurse'){
            redirect('/Login');
        
        } 
    ?>
<!--main content start-->
<!--section id="main-content"-->
<section class="wrapper">
    <div class="contentContainer">
    <!--overview start-->
        <div class="row">
            <div class="col-lg-12">
<!--                    <h3 class="page-header"><i class="fa fa-laptop"></i> Dashboard</h3>-->
                <ol class="breadcrumb">
                    <li><i class="fa fa-home"></i><a href="<?php echo base_url() . "NurseView" ?>">Home</a></li>
                    <li><i class="fa fa-laptop"></i>All Patients</li>	
                </ol>
            </div>
        </div>

        <div class="row">
            <!--calender -->
            <div class="col-lg-8">
            	<div class="row">
            		<div class="col-lg-12" >
		            	<div id="staicReport" style="display: none" >
		                	<ul class="nav nav-pills nav-justified">
			                    <li class="active"><a data-toggle="pill" href="#diagnos">Diagnosis</a></li>
			                    <li><a data-toggle="pill" href="#visit">Patient Visit</a></li>
			                    <li><a data-toggle="pill" href="#attendance">Total Attendance</a></li>
			                    <li><a data-toggle="pill" href="#newReg">New Registrants</a></li>
			                </ul>

		                    <?php $months = array('January','February','March','Aprail','May','June','July','Auguest','September','October','November','December');?>
		                    <div class="tab-content">
			                    <div id="diagnos" class="tab-pane fade in active">
			                        <div class="white_back" style="overflow-x:auto; ">
			                        	<div class="table-responsive" >
				                        	<table class="table "  >
            												  <thead>
                                        <?php 

                                            $arryDiagmose =array(

                                              'ASD' => 0, 
                                              'ODD' => 0, 
                                              'ADHD' => 0, 
                                              'SDLSS' => 0, 
                                              'OCD' => 0, 
                                              'PTSD' => 0, 
                                              'DEPRESSION' => 0, 
                                              'GAD' => 0, 
                                              'ADJUSTMENT DISORDER' => 0, 
                                              'ACUTE STRESS DISORDER' => 0, 
                                              'MR' => 0, 
                                              'CONDUCT DISORDER' => 0, 
                                              'DISOSIATIVE DISORDER' => 0, 
                                              'NON ORGANIC ENURESIS' => 0, 
                                              'SOMATIZATION DISORDER' => 0, 
                                              'SELECTIVE MUTISM' => 0, 
                                              'REACTIVE ATTACHMENT DISORDER' => 0, 
                                              'TIE DISORDER' => 0, 
                                              'PANIC DISORDER' => 0, 
                                              'SEPARATION ANSIETY DISORDER' => 0,
                                              'MENTAL BEHAVIOURAL DISORDER' => 0,
                                              'PHYCHOTIC DISORDER' => 0,
                                              'NO MENTAL ILLNESS' => 0,
                                              'EXPRESSIVE LANGUAGE DIFFICULT DISORDER' => 0
                                              );
                                            
                                                
                                            for($i=0;$i<24;$i++){
                                              foreach ($diagnose as $diagno) {
                                                  $arrkey =  trim(key($arryDiagmose));
                                                  if(strtoupper(trim($diagno->diagnosis))===$arrkey ){
                                                      $arryDiagmose[$arrkey]++;                                                    
                                                  }
                                                }
                                                next($arryDiagmose);
                                            }
                                            
                                        ?>
                                        <?php 

                                         $diamo =array(
                                              'ASD'=>array(0,0,0,0,0,0,0,0,0,0,0,0), 
                                              'ODD'=>array(0,0,0,0,0,0,0,0,0,0,0,0) , 
                                              'ADHD'=>array(0,0,0,0,0,0,0,0,0,0,0,0) , 
                                              'SDLSS'=>array(0,0,0,0,0,0,0,0,0,0,0,0), 
                                              'OCD'=>array(0,0,0,0,0,0,0,0,0,0,0,0) , 
                                              'PTSD'=>array(0,0,0,0,0,0,0,0,0,0,0,0) , 
                                              'DEPRESSION'=>array(0,0,0,0,0,0,0,0,0,0,0,0) , 
                                              'GAD'=>array(0,0,0,0,0,0,0,0,0,0,0,0) , 
                                              'ADJUSTMENT DISORDER'=>array(0,0,0,0,0,0,0,0,0,0,0,0) , 
                                              'ACUTE STRESS DISORDER'=>array(0,0,0,0,0,0,0,0,0,0,0,0), 
                                              'MR'=>array(0,0,0,0,0,0,0,0,0,0,0,0) , 
                                              'CONDUCT DISORDER'=>array(0,0,0,0,0,0,0,0,0,0,0,0) , 
                                              'DISOSIATIVE DISORDER'=>array(0,0,0,0,0,0,0,0,0,0,0,0) , 
                                              'NON ORGANIC ENURESIS'=>array(0,0,0,0,0,0,0,0,0,0,0,0) , 
                                              'SOMATIZATION DISORDER'=>array(0,0,0,0,0,0,0,0,0,0,0,0) , 
                                              'SELECTIVE MUTISM'=>array(0,0,0,0,0,0,0,0,0,0,0,0) , 
                                              'REACTIVE ATTACHMENT DISORDER'=>array(0,0,0,0,0,0,0,0,0,0,0,0), 
                                              'TIE DISORDER'=>array(0,0,0,0,0,0,0,0,0,0,0,0) , 
                                              'PANIC DISORDER'=>array(0,0,0,0,0,0,0,0,0,0,0,0), 
                                              'SEPARATION ANSIETY DISORDER'=>array(0,0,0,0,0,0,0,0,0,0,0,0) ,
                                              'MENTAL BEHAVIOURAL DISORDER'=>array(0,0,0,0,0,0,0,0,0,0,0,0) ,
                                              'PHYCHOTIC DISORDER'=>array(0,0,0,0,0,0,0,0,0,0,0,0) ,
                                              'NO MENTAL ILLNESS'=>array(0,0,0,0,0,0,0,0,0,0,0,0) ,
                                              'EXPRESSIVE LANGUAGE DIFFICULT DISORDER'=>array(0,0,0,0,0,0,0,0,0,0,0,0) 
                                              );

                                         for ($i=0; $i < count($diamo); $i++) { 
                                            foreach ($diagnose as $diagno) {
                                                $arrkey =  trim(key($diamo));
                                                if(strtoupper(trim($diagno->diagnosis))===$arrkey){
                                                    for($j=0;$j<count($diamo[key($diamo)]);$j++){
                                                        if(($j+1)===(int)substr($diagno->date,5,2)){
                                                            $diamo[key($diamo)][$j]++;
                                                        }
                                                    }
                                                }
                                            }
                                            next($diamo);
                                        }   
                                        
                                        $monthcount = [];  
                                        for($i=0;$i<12;$i++){
                                          $m = 0;
                                          foreach ($diamo as $key ) {
                                            $m += $key[$i];
                                          }
                                          $monthcount[$i]=$m;
                                        }
                                        ?>
            												    <tr>
            												      <th>No</th>
            												      <th>Month</th>
            												      <th>ASD</th>
            												      <th>ODD</th>
            												      <th>ADHD</th>
            												      <th>SDLSS</th>
            												      <th>OCD</th>
            												      <th>PTSD</th>
            												      <th>Depression</th>
            												      <th>GAD</th>
            												      <th>Adjustment Disorder</th>
            												      <th>Acute Stress Disorder</th>
            												      <th>MR</th>
            												      <th>Conduct Disorder</th>
            												      <th>Disosiative Disorder</th>
            												      <th>Non Organic Enuresis</th>
            												      <th>Somatization Disorder</th>
            												      <th>Selective Mutism</th>
            												      <th>Reactive Attachment Disorder</th>
            												      <th>Tie Disorder</th>
            												      <th>Panic Disorder</th>
            												      <th>Separation Ansiety Disorder</th>
            												      <th>Mental Behavioural Disorder</th>
            												      <th>Phychotic Disorder</th>
            												      <th>No Mental illness</th>
            												      <th>Expressive Language Difficult Disorder</th>
            												      <th>Total</th>
            												    </tr>
            												  </thead>

            												  <tbody>
            												  	<?php for($i=0;$i<12;$i++){?>
                                          <tr>
                                          <td ><?php echo ($i+1);?></td>
                                          <td><?php echo $months[$i];?></td>
                                         <?php  
                                         $m=0;
                                          foreach($diamo as $dim):
                                        ?>
            												      <th scope="row"><?php echo $dim[$i];?></th>
            												    <?php 
                                         $m++; 
                                        if($m==24){?>
                                        <td><?php echo $monthcount[$i]?></td>
                                        <?php }
                                        endforeach;?>
                                        </tr>
                                       <?php 
                                            }
                                       ?>  
            												   	<tr>
            												      <th scope="row"></th>
            												      <td>Total</td>
                                          <?php 
                                          $diatotal = 0;
                                          foreach($arryDiagmose as $ad):
                                              $diatotal+=$ad;
                                            ?>
                                            <td><?php echo $ad;?></td>
                                            <?php endforeach;?>
                                            <td><?php echo $diatotal;?></td>
            												    </tr>
            												  </tbody>
											              </table>
										              </div>
			                        </div>
			                    </div>
                          

			                    <div id="newReg" class="tab-pane  ">
			                        <div class="white_back" style="overflow-x:auto; ">
                                    <div class="table-responsive" >
                                  <table class="table "  >
                                      <thead>
                                        <tr>
                                            <th>NO</th>
                                            <th>Month</th>
                                            <th>Female</th>
                                            <th>Male</th>
                                            <th>Total</th>  
                                        </tr>
                                      </thead>
                                            <?php 
                                              $male = [];
                                              $female = [];
                                              for($i=1;$i<(count($mfcount)+1); $i++){
                                                  if($i<=12){
                                                    $male[$i]= $mfcount[$i];
                                                  }else{
                                                    $female[$i] =  $mfcount[$i];
                                                  }
                                              }


                                            for($m=1,$j=13; $m<13 && $j<25;$m++,$j++){ 
                                              ?>
                                        <tr>
                                          <th scope="row"><?php echo $m?></th>
                                          <td><?php echo $months[$m-1]?></td>
                                          <!-- <td>
                                            <div class="col-lg-6">
                                            <select name="" class="form-control" id="patientcolor<?php echo $m;?>">
                                                 <option value="" >Choose</option>
                                                 <option style="color:#0071c5;" value="#0071c5">&#9724; Dark blue</option>
                                                 <option style="color:#40E0D0;" value="#40E0D0">&#9724; Turquoise</option>
                                                 <option style="color:#008000;" value="#008000">&#9724; Green</option>              
                                                 <option style="color:#FFD700;" value="#FFD700">&#9724; Yellow</option>
                                                 <option style="color:#FF8C00;" value="#FF8C00">&#9724; Orange</option>
                                                 <option style="color:#FF0000;" value="#FF0000">&#9724; Red</option>
                                                 <option style="color:#000;" value="#000">&#9724; Black</option>
                                            </select>
                                            </div> -->
                                          </td>
                                          <td >
                                            <div class="row">
                                                <div class="col-lg-1 color-box" style="height: 35px;width: 15px"></div>
                                                <div class="col-lg-1" style="background-color: pink; height: 35px;width: 15px;"></div>
                                                <div class="col-lg-1"><?php echo $female[$j]; ?></div>
                                            </div> 
                                          </td>
                                          <td >
                                              <div class="row">
                                                <div class="col-lg-1 color-box" style="height: 35px;width: 15px"></div>
                                                <div class="col-lg-1" style="background-color: blue; height: 35px;width: 15px;"></div>
                                                <div class="col-lg-1"><?php echo $male[$m]; ?></div>
                                              </div>   
                                          </td>
                                          <td ><?php echo ($male[$m]+$female[$j]); ?></td>
                                         
                                        </tr>
                                       <?php
                                          

                                        }; ?>
                                      <tbody>
                                          
                                      </tbody>
                                    </table>
                                  </div>  
                              </div>
			                    </div>


                           <div id="visit" class="tab-pane  ">
                              <div class="white_back" style="overflow-x:auto; ">
                                    <div class="table-responsive" >
                                  <table class="table "  >
                                      <thead>
                                        <tr>
                                           <th>No</th>
                                           <th>Month</th>
                                           <th colspan="3">1st Visit</th>
                                           <th colspan="3">2nd Visit</th>
                                        </tr>
                                        <tr>
                                           <th></th>
                                           <th></th>
                                           <th >Male</th>
                                           <th >Female</th>
                                           <th>Total</th>
                                           <th >Male</th>
                                           <th >Female</th>
                                           <th>Total</th>
                                        </tr>
                                      </thead>
                                        <?php 
                                        $mf1=$mf2=$mf3=$mf4=$mf5=$mf6=$mf7=$mf8=$mf9=$mf10=$mf11=$mf12=$ms1=$ms2=$ms3=$ms4=$ms5=$ms6=$ms7=$ms8=$ms9=$ms10=$ms11=$ms12=$ff1=$ff2=$ff3=$ff4=$ff5=$ff6=$ff7=$ff8=$ff9=$ff10=$ff11=$ff12=$fs1=$fs2=$fs3=$fs4=$fs5=$fs6=$fs7=$fs8=$fs9=$fs10=$fs11=$fs12=0;

                                          $totalf1=$totalf2=$totalm1=$totalm2=0;

                                          $arrayf1=[];
                                          $arrayf2=[];
                                          $arraym1=[];
                                          $arraym2=[];


                                          foreach ($ffvisit as $f1visit) {
                                             if(substr($f1visit->regitration_date,5,2) =="1"){
                                                $ff1++;
                                             }else if(substr($f1visit->regitration_date,5,2) =="2"){
                                                $ff2++;
                                             }else if(substr($f1visit->regitration_date,5,2) =="3"){
                                                $ff3++;
                                             }else if(substr($f1visit->regitration_date,5,2) =="4"){
                                                $ff4++;
                                             }else if(substr($f1visit->regitration_date,5,2) =="5"){
                                                $ff5++;
                                             }else if(substr($f1visit->regitration_date,5,2) =="6"){
                                                $ff6++;
                                             }else if(substr($f1visit->regitration_date,5,2) =="7"){
                                                $ff7++;
                                             }else if(substr($f1visit->regitration_date,5,2) =="8"){
                                                $ff8++;
                                             }else if(substr($f1visit->regitration_date,5,2) =="9"){
                                                $ff9++;
                                             }else if(substr($f1visit->regitration_date,5,2) =="10"){
                                                $ff10++;
                                             }else if(substr($f1visit->regitration_date,5,2) =="11"){
                                                $ff11++;
                                             }else if(substr($f1visit->regitration_date,5,2) =="12"){
                                                $ff12++;
                                             }
                                          }



                                           foreach ($fsvisit as $f2visit) {
                                             if(substr($f2visit->regitration_date,5,2) =="1"){
                                                $fs1++;
                                             }else if(substr($f2visit->regitration_date,5,2) =="2"){
                                                $fs2++;
                                             }else if(substr($f2visit->regitration_date,5,2) =="3"){
                                                $fs3++;
                                             }else if(substr($f2visit->regitration_date,5,2) =="4"){
                                                $fs4++;
                                             }else if(substr($f2visit->regitration_date,5,2) =="5"){
                                                $fs5++;
                                             }else if(substr($f2visit->regitration_date,5,2) =="6"){
                                                $fs6++;
                                             }else if(substr($f2visit->regitration_date,5,2) =="7"){
                                                $fs7++;
                                             }else if(substr($f2visit->regitration_date,5,2) =="8"){
                                                $fs8++;
                                             }else if(substr($f2visit->regitration_date,5,2) =="9"){
                                                $fs9++;
                                             }else if(substr($f2visit->regitration_date,5,2) =="10"){
                                                $fs10++;
                                             }else if(substr($f2visit->regitration_date,5,2) =="11"){
                                                $fs11++;
                                             }else if(substr($f2visit->regitration_date,5,2) =="12"){
                                                $fs12++;
                                             }
                                          }

                                           foreach ($mfvisit as $m1visit) {
                                             if(substr($m1visit->regitration_date,5,2) =="1"){
                                                $mf1++;
                                             }else if(substr($m1visit->regitration_date,5,2) =="2"){
                                                $mf2++;
                                             }else if(substr($m1visit->regitration_date,5,2) =="3"){
                                                $mf3++;
                                             }else if(substr($m1visit->regitration_date,5,2) =="4"){
                                                $mf4++;
                                             }else if(substr($m1visit->regitration_date,5,2) =="5"){
                                                $mf5++;
                                             }else if(substr($m1visit->regitration_date,5,2) =="6"){
                                                $mf6++;
                                             }else if(substr($m1visit->regitration_date,5,2) =="7"){
                                                $mf7++;
                                             }else if(substr($m1visit->regitration_date,5,2) =="8"){
                                                $mf8++;
                                             }else if(substr($m1visit->regitration_date,5,2) =="9"){
                                                $mf9++;
                                             }else if(substr($m1visit->regitration_date,5,2) =="10"){
                                                $mf10++;
                                             }else if(substr($m1visit->regitration_date,5,2) =="11"){
                                                $mf11++;
                                             }else if(substr($m1visit->regitration_date,5,2) =="12"){
                                                $mf12++;
                                             }
                                          }

                                           foreach ($msvisit as $m2visit) {
                                             if(substr($m2visit->regitration_date,5,2) =="1"){
                                                $ms1++;
                                             }else if(substr($m2visit->regitration_date,5,2) =="2"){
                                                $ms2++;
                                             }else if(substr($m2visit->regitration_date,5,2) =="3"){
                                                $ms3++;
                                             }else if(substr($m2visit->regitration_date,5,2) =="4"){
                                                $ms4++;
                                             }else if(substr($m2visit->regitration_date,5,2) =="5"){
                                                $ms5++;
                                             }else if(substr($m2visit->regitration_date,5,2) =="6"){
                                                $ms6++;
                                             }else if(substr($m2visit->regitration_date,5,2) =="7"){
                                                $ms7++;
                                             }else if(substr($m2visit->regitration_date,5,2) =="8"){
                                                $ms8++;
                                             }else if(substr($m2visit->regitration_date,5,2) =="9"){
                                                $ms9++;
                                             }else if(substr($m2visit->regitration_date,5,2) =="10"){
                                                $ms10++;
                                             }else if(substr($m2visit->regitration_date,5,2) =="11"){
                                                $ms11++;
                                             }else if(substr($m2visit->regitration_date,5,2) =="12"){
                                                $ms12++;
                                             }
                                          }

                                          $arrayf1[1]=$ff1;
                                          $arrayf1[2]=$ff2;
                                          $arrayf1[3]=$ff3;
                                          $arrayf1[4]=$ff4;
                                          $arrayf1[5]=$ff5;
                                          $arrayf1[6]=$ff6;
                                          $arrayf1[7]=$ff7;
                                          $arrayf1[8]=$ff8;
                                          $arrayf1[9]=$ff9;
                                          $arrayf1[10]=$ff10; 
                                          $arrayf1[11]=$ff11;
                                          $arrayf1[12]=$ff12;

                                          $arrayf2[1]=$fs1;
                                          $arrayf2[2]=$fs2;
                                          $arrayf2[3]=$fs3;
                                          $arrayf2[4]=$fs4;
                                          $arrayf2[5]=$fs5;
                                          $arrayf2[6]=$fs6;
                                          $arrayf2[7]=$fs7;
                                          $arrayf2[8]=$fs8;
                                          $arrayf2[9]=$fs9; 
                                          $arrayf2[10]=$fs10;
                                          $arrayf2[11]=$fs11;
                                          $arrayf2[12]=$fs12;

                                          $arraym1[1]=$mf1;
                                          $arraym1[2]=$mf2;
                                          $arraym1[3]=$mf3;
                                          $arraym1[4]=$mf4;
                                          $arraym1[5]=$mf5;
                                          $arraym1[6]=$mf6;
                                          $arraym1[7]=$mf7;
                                          $arraym1[8]=$mf8;
                                          $arraym1[9]=$mf9;
                                          $arraym1[10]=$mf10; 
                                          $arraym1[11]=$mf11;
                                          $arraym1[12]=$mf12;

                                          $arraym2[1]=$ms1;
                                          $arraym2[2]=$ms2;
                                          $arraym2[3]=$ms3;
                                          $arraym2[4]=$ms4;
                                          $arraym2[5]=$ms5;
                                          $arraym2[6]=$ms6;
                                          $arraym2[7]=$ms7;
                                          $arraym2[8]=$ms8;
                                          $arraym2[9]=$ms9;
                                          $arraym2[10]=$ms10; 
                                          $arraym2[11]=$ms11;
                                          $arraym2[12]=$ms12; 



                                          for($c=1;$c<13;$c++){
                                              $totalf1 += $arrayf1[$c];
                                              $totalf2 += $arrayf2[$c];
                                              $totalm1 += $arraym1[$c];
                                              $totalm2 += $arraym2[$c];
                                          }
                                                   
                                        ?>

                                        <?php 
                                          for($i=1;$i<13;$i++){
                                        ?>
                                        <tr>
                                        <th scope="row"><?php echo $i?></th>
                                        <td><?php echo $months[$i-1]?></td>
                                        <td><?php echo $arraym1[$i]?></td>
                                        <td><?php echo $arrayf1[$i]?></td>
                                        <td><?php echo ($arraym1[$i]+$arrayf1[$i])?></td>
                                        <td><?php echo $arraym2[$i]?></td>
                                        <td><?php echo $arrayf2[$i]?></td>
                                        <td><?php echo ($arraym2[$i]+$arrayf2[$i])?></td>
                                        </tr>
                                        <?php 
                                        }?>
                                        <tr>
                                            <td></td>
                                            <td>Total</td>
                                            <td><?php echo $totalm1;?></td>
                                            <td><?php echo $totalf1;?></td>
                                            <td><?php echo ($totalm1+$totalf1);?></td>
                                            <td><?php echo $totalm2;?></td>
                                            <td><?php echo $totalf2;?></td>
                                            <td><?php echo ($totalm2+$totalf2);?></td>
                                        </tr>
                                    </table>
                                  </div>  
                              </div>
                          </div>


                          <div id="attendance" class="tab-pane  ">
                              <div class="white_back" style="overflow-x:auto; ">
                                    <div class="table-responsive" >
                                  <table class="table "  >
                                      <thead>
                                        <tr>
                                            <th>No</th>
                                            <th></th>
                                            <?php  
                                             $atten= array("Newly diagnosed patients","Follow up patients visit","Total");
                                            for ($i=0; $i < count($atten); $i++) { ?>
                                              <th><?php echo $atten[$i]?></th>
                                            <?php }?>
                                        </tr>
                                      </thead>
                                      <?php 
                                        $r1=$r2=$r3=$r4=$r5=$r6=$r7=$r8=$r9=$r10=$r11=$r12=$p1=$p2=$p3=$p4=$p5=$p6=$p7=$p8=$p9=$p10=$p11=$p12=0;
                                        $arrayr =[];
                                        $arrayp = [];
                                        foreach ($allreg as $all) {
                                             if(substr($all->regitration_date,5,2) =="1" && $all->status == 0){
                                                $r1++;
                                             }else if(substr($all->regitration_date,5,2) =="2" && $all->status == 0){
                                                $r2++;
                                             }else if(substr($all->regitration_date,5,2) =="3" && $all->status == 0){
                                                $r3++;
                                             }else if(substr($all->regitration_date,5,2) =="4" && $all->status == 0){
                                                $r4++;
                                             }else if(substr($all->regitration_date,5,2) =="5" && $all->status == 0){
                                                $r5++;
                                             }else if(substr($all->regitration_date,5,2) =="6" && $all->status == 0){
                                                $r6++;
                                             }else if(substr($all->regitration_date,5,2) =="7" && $all->status == 0){
                                                $r7++;
                                             }else if(substr($all->regitration_date,5,2) =="8" && $all->status == 0){
                                                $r8++;
                                             }else if(substr($all->regitration_date,5,2) =="9" && $all->status == 0){
                                                $r9++;
                                             }else if(substr($all->regitration_date,5,2) =="10" && $all->status == 0){
                                                $r10++;
                                             }else if(substr($all->regitration_date,5,2) =="11" && $all->status == 0){
                                                $r11++;
                                             }else if(substr($all->regitration_date,5,2) =="12" && $all->status == 0){
                                                $r12++;
                                             }

                                             else if(substr($all->regitration_date,5,2) =="1" && $all->status == 1){
                                                $p1++;
                                             }else if(substr($all->regitration_date,5,2) =="2" && $all->status == 1){
                                                $p2++;
                                             }else if(substr($all->regitration_date,5,2) =="3" && $all->status == 1){
                                                $p3++;
                                             }else if(substr($all->regitration_date,5,2) =="4" && $all->status == 1){
                                                $p4++;
                                             }else if(substr($all->regitration_date,5,2) =="5" && $all->status == 1){
                                                $p5++;
                                             }else if(substr($all->regitration_date,5,2) =="6" && $all->status == 1){
                                                $p6++;
                                             }else if(substr($all->regitration_date,5,2) =="7" && $all->status == 1){
                                                $p7++;
                                             }else if(substr($all->regitration_date,5,2) =="8" && $all->status == 1){
                                                $p8++;
                                             }else if(substr($all->regitration_date,5,2) =="9" && $all->status == 1){
                                                $p9++;
                                             }else if(substr($all->regitration_date,5,2) =="10" && $all->status == 1){
                                                $p10++;
                                             }else if(substr($all->regitration_date,5,2) =="11" && $all->status == 1){
                                                $p11++;
                                             }else if(substr($all->regitration_date,5,2) =="12" && $all->status == 1){
                                                $p12++;
                                             }
                                          }

                                          $arrayr[1]=$r1;
                                          $arrayr[2]=$r2;
                                          $arrayr[3]=$r3;
                                          $arrayr[4]=$r4;
                                          $arrayr[5]=$r5;
                                          $arrayr[6]=$r6;
                                          $arrayr[7]=$r7;
                                          $arrayr[8]=$r8;
                                          $arrayr[9]=$r9; 
                                          $arrayr[10]=$r10;
                                          $arrayr[11]=$r11;
                                          $arrayr[12]=$r12;

                                          $arrayp[1]=$p1;
                                          $arrayp[2]=$p2;
                                          $arrayp[3]=$p3;
                                          $arrayp[4]=$p4;
                                          $arrayp[5]=$p5;
                                          $arrayp[6]=$p6;
                                          $arrayp[7]=$p7;
                                          $arrayp[8]=$p8;
                                          $arrayp[9]=$p9;
                                          $arrayp[10]=$p10; 
                                          $arrayp[11]=$p11;
                                          $arrayp[12]=$p12;



                                          


                                      ?>  

                                      <?php
                                       
                                         for($m=1,$j=13; $m<13 && $j<25;$m++,$j++){ 
                                              ?>
                                        <tr>
                                          <th scope="row"><?php echo $m?></th>
                                          <td ><?php echo $months[$m-1]?></td>
                                          
                                          <td class="text-center">
                                              <?php echo $arrayr[$m]; ?>
                                          </td>
                                          
                                          <td class="text-center">
                                              <?php echo $arrayp[$m]; ?>   
                                          </td>
                                          <td class="text-center">
                                              <?php echo $arrayp[$m]+$arrayr[$m]; ?>   
                                          </td>
                                         
                                        </tr>
                                       <?php
                                          

                                        }; ?>
                                      
                                    </table>
                                  </div>  
                              </div>
                          </div>
		                	</div>
		                </div>
			        </div>
			    </div>       


                <div id="cala" >
                    <div class="form-group" style="float:right ;margin-top: -8px;" >
                        <form class="navbar-form">
                                <select class="form-control" id="doc">
                                    <?php foreach($doctor as $doc):?>
                                    <option value="<?php echo $doc->doctor_id;?>"><?php echo $doc->doc_name;?></option>
                                    <?php endforeach;?>
                                </select>
                        </form>
                    </div>
                    <div class="white_back">
                         <div id="calendar" class="col-centered"></div>
                     </div>
                     <!-- Modal -->
                     <div class="modal fade" id="ModalAdd" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                       <div class="modal-dialog" role="document">
                         <div class="modal-content">
                         <!--form class="form-horizontal" method="POST" action="<!?php echo base_url()."Calendar/add_data";?>"-->
                           <?php 
                             $attri = array(
                                 'class'=>'form-horizontal'
                             );
                             echo form_open('NurseView/add_data',$attri);?>
                           <div class="modal-header">
                             <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                             <h4 class="modal-title" id="myModalLabel">Add Event</h4>
                           </div>
                           <div class="modal-body">

                               <div class="form-group">
                                 <label for="title" class="col-sm-2 control-label">Title</label>
                                 <div class="col-sm-10">
                                   <input type="text" name="title" class="form-control" id="title" placeholder="Title">
                                 </div>
                               </div>
                               <div class="form-group">
                                 <label for="color" class="col-sm-2 control-label">Color</label>
                                 <div class="col-sm-10">  
                                   <select name="color" class="form-control" id="color">
                                       <option value="" >Choose</option>
                                       <option style="color:#0071c5;" value="#0071c5">&#9724; Dark blue</option>
                                       <option style="color:#40E0D0;" value="#40E0D0">&#9724; Turquoise</option>
                                       <option style="color:#008000;" value="#008000">&#9724; Green</option>						  
                                       <option style="color:#FFD700;" value="#FFD700">&#9724; Yellow</option>
                                       <option style="color:#FF8C00;" value="#FF8C00">&#9724; Orange</option>
                                       <option style="color:#FF0000;" value="#FF0000">&#9724; Red</option>
                                       <option style="color:#000;" value="#000">&#9724; Black</option>

                                     </select>
                                 </div>
                               </div>
                               <div class="form-group">
                                 <label for="start" class="col-sm-2 control-label">Start date</label>
                                 <div class="col-sm-10">
                                   <input type="text" name="start" class="form-control" id="start" readonly>
                                 </div>
                               </div>
                               <div class="form-group">
                                 <label for="end" class="col-sm-2 control-label">End date</label>
                                 <div class="col-sm-10">
                                   <input type="text" name="end" class="form-control" id="end" readonly>
                                 </div>
                               </div>
                                     <input type="hidden" id="doctor_val" name="doctorName" value="na123" />     
                           </div>
                           <div class="modal-footer">
                             <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                             <button type="submit" name='save' class="btn btn-primary">Save changes</button>
                           </div>
                         <?php echo form_close();?>
                         </div>
                       </div>
                     </div>



                     <!-- Modal -->
                     <div class="modal fade" id="ModalEdit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                       <div class="modal-dialog" role="document">
                         <div class="modal-content">
                             <?php 
                             $attri = array(
                                 'class'=>'form-horizontal'
                             );
                             echo form_open('NurseView/edit_data',$attri);?>
                           <div class="modal-header">
                             <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                             <h4 class="modal-title" id="myModalLabel">Edit Event</h4>
                           </div>
                           <div class="modal-body">

                               <div class="form-group">
                                 <label for="title" class="col-sm-2 control-label">Title</label>
                                 <div class="col-sm-10">
                                   <input type="text" name="title" class="form-control" id="title" placeholder="Title">
                                 </div>
                               </div>
                               <div class="form-group">
                                 <label for="color" class="col-sm-2 control-label">Color</label>
                                 <div class="col-sm-10">
                                   <select name="color" class="form-control" id="color">
                                       <option value="">Choose</option>
                                       <option style="color:#0071c5;" value="#0071c5">&#9724; Dark blue</option>
                                       <option style="color:#40E0D0;" value="#40E0D0">&#9724; Turquoise</option>
                                       <option style="color:#008000;" value="#008000">&#9724; Green</option>						  
                                       <option style="color:#FFD700;" value="#FFD700">&#9724; Yellow</option>
                                       <option style="color:#FF8C00;" value="#FF8C00">&#9724; Orange</option>
                                       <option style="color:#FF0000;" value="#FF0000">&#9724; Red</option>
                                       <option style="color:#000;" value="#000">&#9724; Black</option>

                                     </select>
                                 </div>
                               </div>
                                 <div class="form-group"> 
                                     <div class="col-sm-offset-2 col-sm-10">
                                       <div class="checkbox">
                                         <label class="text-danger"><input type="checkbox"  name="delete"> Delete event</label>
                                       </div>
                                     </div>
                                 </div>

                               <input type="hidden" name="id" class="form-control" id="id">


                           </div>
                           <div class="modal-footer">
                             <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                             <button type="submit" class="btn btn-primary">Save changes</button>
                           </div>
                         <!--/form-->
                         <?php echo form_close();?>
                         </div>
                       </div>
                     </div>
                </div>
                
                <!--References start-->
                <div id="references" style="display: none" >
                        
                                    <div class="col-md-12">
                                        <div class="white_back">
                                
                                            <h2 class="text-center">Reference form</h2><hr>
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <input id="patientrefId" class="form-control" list="refList" placeholder="Patient Id " />
                                                    <datalist  id="refList" >
                                                        <?php foreach($patients as $pat):?>
                                                        <option   value="<?php echo $pat->patient_id;?>">
                                                        <?php endforeach;?>
                                                    </datalist>
                                                </div>
                                                <div class="col-sm-8" id="error_pati" style="color: red;">
                                                  
                                                </div>
                                            </div>    
                                            <hr/>
                                            <form action="<?php echo site_url('Form2');?>" method="post" target="_blank">
                                                
                                                <div class="form-group col-sm-6">
                                                    <label for="date">Date:</label>
                                                    <input type="text" class="form-control" name="date" value="" placeholder="<?php echo date('Y-m-d');?>" readonly>
                                                </div>
                                                <div class="form-group col-sm-6">
                                                    <label for="clno">Clinic No:</label>
                                                    <input type="text" class="form-control" id="clinic_no"name="clinic" placeholder="Enter clinic number">
                                                </div>
                                                <div class="form-group col-sm-6">
                                                    <label for="ref">Ref.Name:</label>
                                                    <input readonly type="text" class="form-control" name="ref" id="refer" value="" placeholder="Enter Reference name">
                                                </div>
                                                <div class="form-group col-sm-6">
                                                    <label for="age">Age:</label>
                                                    <input readonly type="text" class="form-control" id="refAge" name="age" value="" placeholder="Enter Age">
                                                </div>
                                                
                                                <div class="form-group">
                                                    <label for="des">Description:</label>
                                                    <textarea class="form-control" rows="5" name="des" id="des_ref"></textarea>
                                                </div>
                                                <div class="form-group">
                                                   <button type="submit" style="float: right;" class="btn btn-info" >Submit</button>
                                                   <button  type="button" class="btn btn-default" id="ref_clear" >Clear</button>
                                                   
                                                </div>
                                                <input type="hidden" name="patientid" id="id" value="" />
                                                <input type="hidden" name="doc_name" id="id" value="" />
                                                
                                            </form>
                                
                                        </div>
                                    </div>

                        
                    </div>
                
                <!--References end--> 
                <!--Cognitive start-->
                
                <div id="cognitiveTest" style="display: none" >
                    <div class="white_back container">
                        
                        <h3 class="text-center">Cognitive Test</h3><hr>
                        
                        <form name="myform" id="myform" action="<?php echo base_url() ?>CogTestQuiz/getTest/" method="post" target="_blank" >
                            <div class="form-group">
                                <label for="title" class="col-sm-4 control-label text-center">Select Test Type</label>
                                <div class="col-sm-2">
                                    <select name="testType" class="form-control" id="color" required>
                                        <option value="A">Test A</option>
                                        <option value="B">Test B</option>
                                    </select>
                                </div>
                                <input type="hidden"  value="" />
                                <div class="col-sm-4">
                                    <input id="patientcogid" list="pcogid" class="form-control" name="patientid" placeholder="Patient Id " required/>
                                    <datalist id="pcogid"  >
                                        <?php foreach($patients as $pat):?>
                                        <option   value="<?php echo $pat->patient_id;?>">
                                        <?php endforeach;?>
                                    </datalist>
                                </div>
                                <div class="col-sm-2">
                                    <button type="button" id="start" class="btn btn-info" onclick="javascript: submit()" >Start Test Now</button>
                                </div>
                                
                            </div>
                            <div class="form-group"></div>
                        </form>
                        
                    </div>
                    <div class="white_back container">
                        
                        <h3 class="text-center">Cognitive Test Marks</h3><hr>
                        
                        <div id="cognitive_marks">
                           
                            <div class="col-lg-6 panel panel-info">
                                <div class="panel-heading">Patient Answers : Test A</div>
                                <div class="panel-body" id="cogtestmarks_A">
                                    
                                </div>
                            </div>
                
                            <div class="col-lg-6 panel panel-info">
                                <div class="panel-heading">Patient Answers : Test B</div>
                                <div class="panel-body" id="cogtestmarks_B">
                                    
                                </div>
                            </div>
                            
                        </div>
                        
                    </div>
                </div>
                
                <!--Cognitive end-->
                <div id="register" class="white_back" style="display: none">
                   <div class="book-top-bar text-center">
                     <h3><i class="flaticon-notes hidden-xs"></i>Register Patient</h3>
                   </div>
                    </br>
                   <div class="book-form ">
                        <div class="row">
                            <div class="col-xs-6">
                                <div class="form-group">
                                    <div class="row"><div class="col-xs-1"><span style="color:red;">*</span></div><div class="col-xs-11"><input type="text" class="form-control" id="pname" name="pname" placeholder="Patient Name" required></div></div>
                                </div>
                                <div class="form-group">
                                    <div class="row"><div class="col-xs-1"><span style="color:red;">*</span></div><div class="col-xs-11"><input type="text" class="form-control" id="age" name="age" placeholder="Patient Age" required></div></div>
                                </div>
                                <div class="form-group">
                                     <div class="text-center" id="checkage"></div>
                                </div>
                                <div class="form-group">
                                    <div class="row"><div class="col-xs-1"><span style="color:red;">*</span></div><div class="col-xs-11"><input type="text" class="form-control" id="dob" onfocus="(this.type='date')" name="dob"  placeholder="Date Of Birth" required></div></div>
                                </div>
                                <div class="form-group">
                                    <div class="row"><div class="col-xs-1"><span style="color:red;">*</span></div><div class="col-xs-11"><input type="text" class="form-control" id="tel" name="tel" placeholder="Phone Number" required></div></div>
                                </div>
                                <div class="form-group">
                                    <div class="text-center" id="checktel"></div>
                                </div>
                                <div class="form-group">
                                    <div class="row"><div class="col-xs-1"><span style="color:red;">*</span></div><div class="col-xs-11">
                                    <select id="lan" name="lan" class="form-control" >
                                            <option value="Sinhala" name="lan">Sinhala</option>
                                            <option value="Tamil" name="lan">Tamil</option>
                                            <option value="English" name="lan">English</option>
                                    </select>
                                    </div></div>
                                </div>
                                <div class="form-group select" required>
                                    <div class="row"><div class="col-xs-1"><span style="color:red;">*</span></div><div class="col-xs-11">
                                        <select name="gender" id="gender" class="form-control" >
                                            <option value="Female" name="gender">Female</option>
                                            <option value="Male" name="gender">Male</option>
                                        </select>
                                    </div></div>    
                                </div>
                                <br/>
                                <div class="form-group">
                                    <div class="row"><div class="col-xs-1"><span style="color:red;">*</span></div><div class="col-xs-11"><input type="text" class="form-control" id="sch" name="sch" placeholder="School" required></div></div>
                                </div>
                            </div>
                            <div class="col-xs-6">
                                <div class="form-group">
                                    <div class="row"><div class="col-xs-1"><span style="color:red;">*</span></div><div class="col-xs-11"><input type="text" class="form-control" id="gur" name="gur" placeholder="Guardian Name" required></div></div>
                                </div>
                                <div class="form-group">
                                    <div class="row"><div class="col-xs-1"><span style="color:red;">*</span></div><div class="col-xs-11"><input type="text" list="gar" class="form-control" id="rel" name="rel" placeholder="Relationship" required>
                                      <datalist id="gar">
                                        <option value="Father">
                                        <option value="Mother">
                                      </datalist>
                                    </div></div>
                                </div>
                                <div class="form-group">
                                    <div class="row"><div class="col-xs-1"><span style="color:red;">*</span></div><div class="col-xs-11"><input type="text" class="form-control" id="ref" name="ref" placeholder="Referred By" required></div></div>
                                </div>
                                <div class="form-group">
                                    <div class="row"><div class="col-xs-1"><span style="color:red;">*</span></div><div class="col-xs-11"><input type="password" class="form-control" id="pass" name="pass" placeholder="Password" required></div></div>
                                </div>
                                <div class="form-group">
                                    <div class="row"><div class="col-xs-1"><span style="color:red;">*</span></div><div class="col-xs-11"><input type="password" class="form-control" id="cpass" name="cpass" placeholder="Confirm Password" required></div></div>
                                </div>
                                <div class="form-group">
                                    <div class="text-center" id="checkpass"></div>
                                </div>
                                <div class="form-group">
                                    <div class="row"><div class="col-xs-1"><span style="color:red;">*</span></div><div class="col-xs-11"><input  type="text" readonly class="form-control" id="div" name="div" placeholder="Divisional Secretariet" required value="Karapitiya"></div></div>
                                </div>
                                <div class="form-group" hidden="hidden">
                                    <div class="row"><div class="col-xs-1"><span style="color:red;">*</span></div><div class="col-xs-11"><input type="text" readonly class="form-control" id="date" name="date" placeholder=""  value="<?php echo date('Y-m-d');?>" required></div></div>
                                </div>
                                <div class="row"><div class="col-xs-1"><span style="color:red;">*</span></div><div class="col-xs-11"><textarea class="form-control" id="address" name="address" rows="2" placeholder="Address"></textarea></div></div>
                            </div>
                        </div>
                        </br>
                        <div class="text-center" id="messagereg"></div>
                        <div class="row"><button type="submit" style="float: right;margin-right: 50px;" id="register_btn" class="btn btn-primary">Register</button></div>
                    </div>
                </div>

                


              </div>
        
            <!--menu -->
              <div class="col-lg-4">
                <div class="col-sm-2 col-icon-box "  onclick="calendar()">
                    <img src="<?php echo base_url()."asserts/images/icons/calendar.png"; ?>" class="img-thumbnail" width="100px" height="100px" />
                    <div class="overlay">
                        <div class="text">Calendar</div>
                    </div>
                </div>  
                <div class="col-sm-2 col-icon-box " onclick="registerPatients()" >
                    <img src="<?php echo base_url()."asserts/images/icons/patient.png"; ?>" class="img-thumbnail" width="100px" height="100px" />
                    <div class="overlay">
                        <div class="text">Register</div>
                    </div>
                </div>
                
                <div class="col-sm-2 col-icon-box "  onclick="references()">
                    <img src="<?php echo base_url()."asserts/images/icons/reference_letters.png"; ?>" class="img-thumbnail" width="100px" height="100px" />
                    <div class="overlay">
                        <div class="text">References</div>
                    </div>
                </div>
                <div class="col-sm-2 col-icon-box " onclick="cognitiveTest()">
                    <img src="<?php echo base_url()."asserts/images/icons/quiz.png"; ?>" class="img-thumbnail" width="100px" height="100px" />
                    <div class="overlay">
                        <div class="text">Cognitive <br/>Test</div>
                    </div>
                </div>
                <div class="col-sm-2 col-icon-box " onclick="staticReport()">
                    <img src="<?php echo base_url()."asserts/images/icons/report_icon.png"; ?>" class="img-thumbnail" width="100px" height="100px" />
                    <div class="overlay">
                        <div class="text">Static <br/> Reports</div>
                    </div>
                </div>
            </div>
        </div>
        
    
    
        
    <script src="<?php echo base_url() ?>scripts/fullcalendar/lib/moment.min.js"></script>
    <script src="<?php echo base_url() ?>scripts/fullcalendar/fullcalendar.min.js"></script>
    <script src="<?php echo base_url() ?>scripts/fullcalendar/gcal.js"></script>
    
    <!-- jQuery Version 1.11.1 -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
	
	<!-- FullCalendar -->
	<script src='js/moment.min.js'></script>
	<script src='js/fullcalendar.min.js'></script>
	
	<script>

	$(document).ready(function() {
		
		$('#calendar').fullCalendar({
			header: {
				left: 'prev,next today',
				center: 'title',
				right: 'month,agendaWeek,agendaDay,listWeek' //listMonth
			},
            dayClick: function(date, jsEvent, view) {
                if(view.name == 'month') {
                    
                    $('#calendar').fullCalendar('changeView', 'agendaDay');
                    $('#calendar').fullCalendar('gotoDate', date);
                    
                }   
            },
            
			defaultDate: Date(),//'2016-01-12',
			editable: true,
			eventLimit: true, // allow "more" link when too many events
			selectable: true,
			selectHelper: true,
			select: function(start, end ) {
				        $('#ModalAdd #start').val(moment(start).format('YYYY-MM-DD HH:mm:ss'));
				        $('#ModalAdd #end').val(moment(end).format('YYYY-MM-DD HH:mm:ss'));
				        $('#ModalAdd').modal('show');
			},
			eventRender: function(event, element) {
				element.bind('dblclick', function() {
					$('#ModalEdit #id').val(event.id);
					$('#ModalEdit #title').val(event.title);
					$('#ModalEdit #color').val(event.color);
					$('#ModalEdit').modal('show');
				});
                                return ['all', event.doctor].indexOf($('#doc').val()) >= 0;
			},
            
			eventDrop: function(event, delta, revertFunc) { // si changement de position
                
                   
				edit(event);

			},
			eventResize: function(event,dayDelta,minuteDelta,revertFunc) { // si changement de longueur
                
				edit(event);

	},
			events: [
			<?php foreach($events as $event): 
                if (True){
			
				$start = explode(" ", $event->start);
				$end = explode(" ", $event->end);
				if($start[1] == '00:00:00'){
					$start = $start[0];
				}else{
					$start = $start;
				}
				if($end[1] == '00:00:00'){
					$end = $end[0];
				}else{
					$end = $end;
				}
			?>
				{
                                        doctor:'<?php echo $event->doctor_id; ?>',
					id: '<?php echo $event->id; ?>',
					title: '<?php echo $event->title; ?>',
					start: '<?php echo $event->start; ?>',
					end: '<?php echo $event->end; ?>',
					color: '<?php echo $event->color; ?>',
				},
			<?php 
                }
                    endforeach; ?>
			]
        });

		function edit(event){
			start = event.start.format('YYYY-MM-DD HH:mm:ss');
			if(event.end){
				end = event.end.format('YYYY-MM-DD HH:mm:ss');
			}else{
				end = start;
			}

			id =  event.id;
            title = event.title;
			$.ajax({
			 url: 'http://[::1]/project/Group-07/NiceAdmin/NurseView/edit_event',
			 type: "POST",
			 data: {id:id,end:end,start:start,title:title},
			 success: function(rep) {
					if(rep){
						swal('congratulations!', 'Event updated Successfully','success');
                        //alert('saved');
					}else{
						swal('Oops... sorry','Event update failed','error');
					}
				}
			});
		}
		

	});
        $('#doc').on('change',function(){
            $('#calendar').fullCalendar('rerenderEvents');
            $('#doctor_val').val($('#doc').val());
        });
        
    //knob
    $(function () {
        $(".knob").knob({
            'draw': function () {
                $(this.i).val(this.cv + '%');
            }
        });
    });

    //carousel
    $(document).ready(function () {
        $("#owl-slider").owlCarousel({
            navigation: true,
            slideSpeed: 300,
            paginationSpeed: 400,
            singleItem: true

        });
    });

    //custom select box

    $(function () {
        $('select.styled').customSelect();
    });
    

    


</script>
            
            
          


       
    </div>
</section>
<script>
    function calendar(){
        $("#cala").show();  
        $("#references,#cognitiveTest,#register,#staicReport").hide();   
    }
    
    function references(){
        $("#references").show();  
        $("#cala,#cognitiveTest,#register,#staicReport").hide();   
        
    }
    function cognitiveTest(){
        $("#cognitiveTest").show();  
        $("#cala,#references,#register,#staicReport").hide();   
    }
    function registerPatients(){
        $("#register").show();  
        $("#cala,#cognitiveTest,#references,#staicReport").hide();   
    }
    function staticReport(){
        $("#staicReport").show();  
        $("#cala,#cognitiveTest,#references,#register").hide();   
    }
    
    
</script>
<script >
    function getMarksB(){
    $(document).ready(function(){
        var id = $( "#patientcogid" ).val();
        $.ajax({
			 url: 'http://[::1]/project/Group-07/NiceAdmin/CogTestQuiz/getMarksB/',
			 type: "POST",
			 data: {id:id},
			 success: function(data) {
                    $('#cogtestmarks_B').html(data);
             }
			});

    });
    }
    
    function getMarksA(){
    $(document).ready(function(){
        var id = $( "#patientcogid option:selected" ).val();
        $.ajax({
			 url: 'http://[::1]/project/Group-07/NiceAdmin/CogTestQuiz/getMarksA/',
			 type: "POST",
			 data: {id:id},
			 success: function(data) {
                    $('#cogtestmarks_A').html(data);
             }
			});
 
    });
    }
    $(document).ready(function (){
        setInterval(getMarksB, 100);
        setInterval(getMarksA, 100);
    });
    
    function setRefName(){
        $('#refer').val($( "#patientrefId" ).val());
    }
    $('#ref_clear').on('click',function(){
        $('#refAge').val("");
        $('#refer').val("");
        $('#patientrefId').val("");
        $('#des_ref').val("");
        $('#clinic_no').val("");
    });
    $('#patientrefId').on('change',function(){
        var p = $( "#patientrefId" ).val(); 
        $.ajax({
            type: "post",
            url: "http://[::1]/project/Group-07/NiceAdmin/NurseView/getAge/",
            cache: false,
            data: {pati:p},
            success: function (data) {
              var reg = /^[1-9]/;
              var pati_age = data.trim();
              $('#refer').val("");
              $('#error_pati').html("");
              if(reg.test(pati_age)){
                $('#refAge').val(pati_age);
                setRefName();
              }else{
                $('#error_pati').html('There is no maching registered patient with '+p+' this patient number');
                $('#refAge').val("");
                $('#refer').val("");
                $('#patientrefId').val("");
              }
            }
        });
    });
    
</script>
<script type="text/javascript">
    $(document).ready(function (){

        //validate password and confirm password
        $('#cpass').keyup(function(){
            if($(this).val()== $('#pass').val()){
                $('#checkpass').html('Matching!!!').css('color', 'green');
                 document.getElementById('register_btn').disabled = false ;
            }else{
                document.getElementById('register_btn').disabled = true ;
                $('#checkpass').html('not matching with password!!!').css('color', 'red');
            }
        });

        //validate age;
        $('#age').keyup(function(){
            var reg = /^[1-9]{0,3}$/;
            if(!(reg.test($(this).val()))){
                document.getElementById('register_btn').disabled = true ;
                $('#checkage').html('Please Enter a Valid Age').css('color', 'red');
            }else{
                $('#checkage').html('');
                document.getElementById('register_btn').disabled = false ;
            }
        });

        //validate phone number
        $('#tel').keyup(function(){
            var reg1 = /^[0-9]{10}$/;
            if((reg1.test($(this).val()))){
                $('#checktel').html('');
            }else{
                if($(this).val()!==""){
                    $('#checktel').html('Please Enter a Valid Contact Number').css('color', 'red');
                    document.getElementById('register_btn').disabled = true ;
                }else{
                    $('#checktel').html('');
                     document.getElementById('register_btn').disabled = false ;
                }
            }
        });
        $('#register_btn').click(function(){

            var cpass =  $('#cpass').val();
            var pname = $('#pname').val();
            var page =  $('#age').val();
            var pdob =  $('#dob').val();
            var ptel =  $('#tel').val();
            var plan =  $( "#lan option:selected" ).val();
            var psch =  $('#sch').val();
            var pgur =  $('#gur').val();
            var prel =  $('#rel').val();
            var pref =  $('#ref').val();
            var ppass =  $('#pass').val();
            var pdiv =  $('#div').val();
            var pdate =  $('#date').val();
            var paddre =  $('#address').val();
            var pgen =  $( "#gender option:selected" ).val();


            if(pname!="" && page!="" && pdob!="" && ptel!="" && plan!="" && psch!="" && pgur!="" && prel!="" && pref!="" && ppass!="" && pdiv!="" && pdate!="" && paddre!="" && pgen!="" ){
            $.ajax({
                type: "post",
                url: "http://[::1]/project/Group-07/Healthy_life/Register/reg_patient/",
                cache: false,
                data: {regbtn: "regbtn",pname:pname,age:page,dob:pdob,tel:ptel,lan:plan,gender:pgen,sch:psch,address:paddre,gur:pgur,rel:prel,ref:pref,pass:ppass,div:pdiv,date:pdate},
                success: function (data) {
                    if(data){
                        $('#pname').val("");
                        $('#age').val("");
                        $('#dob').val("");
                        $('#tel').val("");
                        $('#lan').val("");
                        $('#sch').val("");
                        $('#gur').val("");
                        $('#rel').val("");
                        $('#ref').val("");
                        $('#pass').val("");
                        $('#div').val("");
                        $('#date').val("");
                        $('#address').val("");
                        $('#cpass').val("");
                        $('#messagereg').html('Successfully Registered!!!').css('color','green');

                        $('#pname').removeClass("bordercolor");    
                        $('#age').removeClass("bordercolor");                 
                        $('#dob').removeClass("bordercolor");                   
                        $('#tel').removeClass("bordercolor");                    
                        $('#lan').removeClass("bordercolor");                   
                        $('#sch').removeClass("bordercolor");                        
                        $('#gur').removeClass("bordercolor");                        
                        $('#rel').removeClass("bordercolor");
                        $('#ref').removeClass("bordercolor");
                        $('#pass').removeClass("bordercolor");
                        $('#cpass').removeClass("bordercolor");
                        $('#address').removeClass("bordercolor");
                        $('#gender').removeClass("bordercolor");

                        setTimeout(function() {
                            $("#messagereg").hide('blind', {}, 500)
                        }, 5000);
                        setTimeout(function() {
                            $("#checkpass").hide('blind', {}, 0)
                        }, 0);
                        location.reload();
                    }else{
                        $('#pname').val("");
                        $('#age').val("");
                        $('#dob').val("");
                        $('#tel').val("");
                        $('#lan').val("");
                        $('#sch').val("");
                        $('#gur').val("");
                        $('#rel').val("");
                        $('#ref').val("");
                        $('#pass').val("");
                        $('#div').val("");
                        $('#date').val("");
                        $('#address').val("");
                        $('#cpass').val("");
                        $('#messagereg').html('Error occuered while registering .Please Try Again!!!').css('color','red');

                        $('#pname').removeClass("bordercolor");    
                        $('#age').removeClass("bordercolor");                 
                        $('#dob').removeClass("bordercolor");                   
                        $('#tel').removeClass("bordercolor");                    
                        $('#lan').removeClass("bordercolor");                   
                        $('#sch').removeClass("bordercolor");                        
                        $('#gur').removeClass("bordercolor");                        
                        $('#rel').removeClass("bordercolor");
                        $('#ref').removeClass("bordercolor");
                        $('#pass').removeClass("bordercolor");
                        $('#cpass').removeClass("bordercolor");
                        $('#address').removeClass("bordercolor");
                        $('#gender').removeClass("bordercolor");

                        setTimeout(function() {
                            $("#messagereg").hide('blind', {}, 500)
                        }, 5000);
                        setTimeout(function() {
                            $("#checkpass").hide('blind', {}, 0);
                        }, 0);
                        location.reload();
                    }
                }

            });
          }else{
                if(pname==""){
                    $('#pname').addClass("bordercolor");
                }if(page==""){
                    $('#age').addClass("bordercolor");
                }if(pdob==""){
                    $('#dob').addClass("bordercolor");
                }if(ptel==""){
                    $('#tel').addClass("bordercolor");
                }if(plan==""){
                    $('#lan').addClass("bordercolor");
                }if(psch==""){
                    $('#sch').addClass("bordercolor");
                }if(pgur==""){
                    $('#gur').addClass("bordercolor");
                }if(prel==""){
                    $('#rel').addClass("bordercolor");
                }if(pref==""){
                    $('#ref').addClass("bordercolor");
                }if(ppass==""){
                    $('#pass').addClass("bordercolor");
                }if(cpass==""){
                   $('#cpass').addClass("bordercolor");
                }if(paddre==""){
                    $('#address').addClass("bordercolor");
                }if(pgen==""){
                     $('#gender').addClass("bordercolor");
                }


            }    
        });

    });


</script>
<script>
    // $(document).ready(function (){
    //     setInterval(req, 10);
    // });
    
    // function req(){
    //     if($('#pname').val()&& $('#age').val()&& $('#dob').val()&& $('#tel').val()&&$('#lan').val()&&$('#sch').val()&&$('#gur').val()&&$('#rel').val()&&$('#ref').val()&&$('#pass').val()&&$('#div').val()&&$('#date').val()&& $('#address').val()&& $('#cpass').val()){
    //         document.getElementById('register_btn').disabled = false ;
    //     }else{
    //         document.getElementById('register_btn').disabled = true ;
    //     }
    // }
</script>
<!--/section-->