<?php
require_once("../include/initialize.php"); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home |  AICS BATANGAS: Computer Laboratory Attendance Monitoring and Profiling System</title>  
   
    <link href="<?php echo web_root; ?>css/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo web_root; ?>css/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo web_root; ?>css/css/animate.min.css" rel="stylesheet">
    <link href="<?php echo web_root; ?>css/css/prettyPhoto.css" rel="stylesheet">
    <link href="<?php echo web_root; ?>css/css/main.css" rel="stylesheet">
    <link href="<?php echo web_root; ?>css/css/responsive.css" rel="stylesheet">

    <link href="<?php echo web_root; ?>font-awesome/css/font-awesome.min.css" rel="stylesheet">

<link href="<?php echo web_root; ?>css/dataTables.bootstrap.css" rel="stylesheet">
<?php echo web_root; ?>


<link href="<?php echo web_root; ?>css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">
<link href="<?php echo web_root; ?>css/datepicker.css" rel="stylesheet" media="screen">


<link rel="stylesheet" href="<?php echo web_root; ?>select2/select2.min.css">

<link href="<?php echo web_root; ?>css/nav-button-custom.css" rel="stylesheet" media="screen">

    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
 <body id="login" >  

 	<style type="text/css">
  body
    {
     background:url(../images/attendancebg.jpg)  ;
    background-repeat: no-repeat;
    height: 700px;
    background-position: center; 
    background-size:   cover;
    } 
  #imgview {
  	max-height: 50%;
  }
  #img_profile{
    min-height: 50%;
    width: 100%;
    height:50%;
    max-height: 50%;
  }
    #img_profile >  img {
    width: 100%;
    height:50%;
}

  </style>
  <div class="row">
                 <h1 align="center"  > AICS BATANGAS: Computer Laboratory Attendance Monitoring and Profiling System </h1>
              </div>
<section id="feature" class="transparent-bg">
        <div class="container"> 
            <?php 
                $date = new DateTime();
                $datenow = $date->format('l, F jS, Y');  
            ?>
            <div class="row">
                <div class="features">
                      <div class="col-sm-5 wow fadeInDown">

                              <div class="panel" id="imgview">            
                                <div id="img_profile" class="panel-body">
                             
                                    <img title="profile image" id="imgprofile" class="img-hover"    src="<?php ?>">
                                
                                 </div>
                           
                                    
                            </div>
                        </div>
                             
                            
                      <div class="col-sm-7 wow fadeInDown"> 
               


                        <div class="col-md-8"> 

     
                          	  <ul class="list-group">
                              
                                  <li class="list-group-item text-right"><span class="pull-left">IDNO</span><input class="StudentID" type="text" id="StudentID"></li>
                                  <li class="list-group-item text-right"><span class="pull-left">Name</span><label id="name">NONE</label> </li>
                                  <li class="list-group-item text-right"><span class="pull-left">Course</span><label id="course">NONE</label></li>
                                  <li class="list-group-item text-right"><span class="pull-left">Year</span><label id="year">NONE</label> </li>
                                    
                                
                              </ul>  
                              <div id="check_attendance" style="color:#fff"></div>   
                              
                      </div>
                         
                    </div>
 
       
                
                </div>
            </div>
        </div>
    </section>
 
<h2 style="color:#fff;text-align: center;"><span id="tick2" class="pull-rigth" >
      </span>&nbsp;|   <?php echo $datenow; ?>
<h2>
 </body>
 <center>
   <footer>        
    <p  style="color:#fff;font-size: 12px">AICS BATANGAS: Computer Laboratory Attendance Monitoring and Profiling System</p>  
    </footer>
</center>
 <script src="<?php echo web_root; ?>jquery/jquery.min.js"></script> 
    <script src="<?php echo web_root; ?>js/bootstrap.min.js"></script>
    <script src="<?php echo web_root; ?>js/js/jquery.prettyPhoto.js"></script>
    <script src="<?php echo web_root; ?>js/js/jquery.isotope.min.js"></script>
    <script src="<?php echo web_root; ?>js/js/main.js"></script>
    <script src="<?php echo web_root; ?>js/js/wow.min.js"></script>
    <script src="../select2/select2.full.min.js"></script> 

<script type="text/javascript" language="javascript" src="<?php echo web_root; ?>js/attendance_student.js"></script>  
<script type="text/javascript" > 
     $(function () {
         $(".select2").select2();
     });

function show2(){
    $("#StudentID").focus();
    if (!document.all&&!document.getElementById)
    return
    thelement=document.getElementById? document.getElementById("tick2"): document.all.tick2
    var Digital=new Date()
    var hours=Digital.getHours()
    var minutes=Digital.getMinutes()
    var seconds=Digital.getSeconds()
    var dn="PM"
    if (hours<12)
    dn="AM"
    if (hours>12)
    hours=hours-12
    if (hours==0)
    hours=12
    if (minutes<=9)
    minutes="0"+minutes
    if (seconds<=9)
    seconds="0"+seconds
    var ctime=hours+":"+minutes+":"+seconds+" "+dn
    thelement.innerHTML=ctime
    setTimeout("show2()",1000)
    }
  window.onload=show2
</script> 

</html>
