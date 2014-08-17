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

      <script type="text/javascript">
         $(document).ready(function(){
			               fixPicture();
         });
         
         $(window).resize(function(){
			               fixPicture();
         });

         function fixPicture(){
          var widthVrzHeight=/*2.13178294574*/ 1; 
           var nWidth=$(window).width();   
           if(nWidth<768){   //ZA MOBILNI NEKA GO ZAFAKJA CELL EKRAN
             $(".headerpic>img").attr("width",nWidth);
             return;
           }else{
             //ZA GOLEMI EKRANI,
             var textHeight=$('.contentHolder').height(); 
             var paddT = $('.contentHolder').outerHeight() - textHeight;
             var neededPicWidth=widthVrzHeight*textHeight;
             //AKO E VISOKA KOLKU TEKSTOT ARNO
               if(neededPicWidth<(nWidth/2)){
                  $(".headerpic>img").attr("width",/*Math.floor(nWidth/2)*/neededPicWidth); 
               }else{
                //AKO E PONISKA OD TEKSTOT NEKA  RASTE PO CENA DA NE SE GLEDA CELA
                   $(".headerpic>img").attr("width",neededPicWidth); 
                  // $(".headerpic").attr("padding-top",Math.floor(paddT/2)+"px");
               }   
           }

           var contentHeight = $(".contentHolder").innerHeight();
          var slikaHeigt = parseInt($(".headerpic>img").css("height"));
          if(contentHeight>slikaHeigt){
            $(".headerpic>img").css("margin-bot",Math.floor((contentHeight-slikaHeigt)/2)+"px"); 
          }
                                    
            
           
         }
      </script>    
   </head>
   <body>
   <?php require_once('navbar.php'); ?>


     <!--CONTENT -->
     <div class="content">
     <div style="max-width: 1150px; margin: 0 auto;">
     <div class="containter">
     <div class="row headerstuff">
      
        <div class="headerpic col-sm-6  ">
          <img src="http://upload.wikimedia.org/wikipedia/en/7/71/Deep-Magenta-Square%2C-1978.jpg"/>
        </div>
        <div class=" col-sm-6">
          <div class="contentHolder prored" >
				    <center><h3> Quality</h3></center>
            <p>
               All the studies abroad, countless training and seminars made it possible to please our clients that have placed their trust in our abilities.
               Nevertheless, we shall continue to learn for as long as we live. In reality, every client is different, so is every translation, 
               every terminology and every document that goes with it. Our approach and dedication to you, the client, guarantees the quality of our services.
           </p>
            <br/>
            <center><h3>On-time delivery and swiftness</h3></center>
            <p>
              Our daily habitat consists of commands such as "I need it fast" and "I need it right this instant".
               As a team, we consider ourselves enthusiasts that thrive 
              on challenge. If you are in doubt whether something "can" or "cannot be done", do not hesitate to call us.
            </p>

            <br/>
            <center><h3>Discretion</h3></center>
            <p>
              Letra Prevodi declares that any concluded business with us, be it formal or informal,
               binding or informative, written, electronic or spoken, will be classified and confidential.
               Every single team member of Letra Prevodi has signed a non-disclosure agreement and the company itself is willing to sign all your non-disclosure agreements.
            </p>
            <br/>
          </div>
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