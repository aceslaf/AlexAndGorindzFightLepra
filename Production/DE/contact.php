<?php
  if(isset($_POST['kontakt'])){

  $to  = "jovanovski@gorjan.info";
  $subject = $_POST['predmet'];

  // message 

  $message = $_POST['opis'];

  // To send HTML mail, the Content-type header must be set
  $headers  = 'MIME-Version: 1.0' . "\r\n";
  $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";

  // Additional headers
  $headers .= 'To: jovanovski@gorjan.info \r\n';
  $headers .= 'From: ' . $_POST['kontakt'] . "\r\n";

  // Mail it

  mail($to, $subject, $message, $headers);

  }
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="">
      <meta name="author" content="">
      <link rel="shortcut icon" href="../../assets/ico/favicon.ico">
      <title>Letra</title>
      <link rel="shortcut icon" href="../images/logo1.png" />
      <!--bootstrap-->
      <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
      <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
      <script src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
      <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.css">
      <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.css">
      <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
      <link href="../css/jubmatron.css" rel="stylesheet">
      <!--end bootstrap-->
      <link href="../css/reset.css" rel="stylesheet">
      <link href="../css/main.css" rel="stylesheet">
      <style>
        .col-sm-6{
          margin-top:20px;
        }
        label{
          margin-top:10px;
          width:100%;
        }
        input, textarea{
          height: 30px;
          width:100%;
          padding:0 5px;
        }
        textarea{
          height:85px;
          padding:5px;
        }

        button{
          width: 100px;
          height:30px;
          float:right;
          margin-top:10px;
        }

      </style>
      <script type="text/javascript">
         $(document).ready(function(){
			fixPicture();
         });
         
         $(window).resize(function(){
			fixPicture();
         });

         function fixPicture(){
         	
             var nWidth=$(window).width();   
	         if(nWidth<768){
	           $(".headerpic>img").attr("width",nWidth);
	         }
	         else{
	           $(".headerpic>img").attr("width",Math.floor(nWidth*0.55)); 
	         }
         }
      </script>
      <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
      <script>
      function initialize() {
        var myLatlng = new google.maps.LatLng(41.995841,21.423395);
        var mapOptions = {
          zoom: 17,
          center: myLatlng,
          disableDefaultUI: true,
          draggable: false

        }
        var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

        var marker = new google.maps.Marker({
            position: myLatlng,
            map: map  });
      }

      google.maps.event.addDomListener(window, 'load', initialize);

      </script>
   </head>
   <body>
   <?php require_once('navbar.php'); ?>


     <!--CONTENT -->
     <div class="content">
     <div style="max-width: 1150px; margin: 0 auto;">
     <div class="containter" style="width:90%;margin:0 auto 20px auto;">
     <div class="row headerstuff">
      
        <div class="headerpic col-sm-6  ">
          <div id="map-canvas" style="width:100%;height:340px;"></div>
        </div>
        <div class="headerpic col-sm-6">
          <center><strong style="font-size:18px;margin-bottom:10px;display:block;">Letra Prevodi DOOEL Skopje</strong>
          ul. Kosta Shahov 14a MK-1000 Skopje</center><br/>
          <div class="row">
          <div style="width:50%;float:left;padding-left:15px;line-height: 18px;">
           <strong>Т:</strong><br/>+ 389 2 3 2 14 572
          </div>
          <div style="width:50%;float:right;text-align:right;line-height: 18px;">
            <strong>Е:</strong><br/><a href="mailto:info@letraprevodi.mk">info@letraprevodi.mk; letraglobal@gmail.com</a>
          </div>
          </div>
          <form method="POST" style="margin-top:10px;">
            <label><input required placeholder="Предмет" type="text" name="predmet"/></label><br/>
            <label><input required placeholder="Ваш контакт" type="email" name="kontakt"/></label><br/>
            <label>Опис:<br/><textarea name="opis" required></textarea></label><br/>
            <button style="float:left;width:20%;min-width:70px;" type="submit">Испрати</button>
            <div style="float:left;color:#999;margin-top:18px;width:80%;text-align:right;">Ihr Weg zu uns im Zentrum von Skopje:</div>
          </form>
        </div> 
       
      </div>
     </div>
     </div>
     </div>
     <!-- FOOOTER-->
	 <div class="footer /*bggreen */">	 
			 <div class="container">
			   <p>@Letra 2014</p>
			 </div>
	 </div>
   </body>
</html>