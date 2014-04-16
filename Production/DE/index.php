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
           var widthVrzHeight=2.13178294574; 
           var nWidth=$(window).width();   
           if(nWidth<768){
             $(".headerpic>img").attr("width",nWidth);
             return;
           }else{
             var textHeight=$('.contentHolder').height(); 
             var paddT = $('.contentHolder').outerHeight() - textHeight;
             var neededPicWidth=widthVrzHeight*textHeight;
               if(neededPicWidth<(nWidth/2)){
                  $(".headerpic>img").attr("width",Math.floor(nWidth/2)); 
               }else{
                   $(".headerpic>img").attr("width",neededPicWidth); 
                   $(".headerpic").attr("padding-top",Math.floor(paddT/2)+"px");
               }   
           }
        }               
      </script>
   </head>
   <body>
   <?php require_once('navbar.php'); ?>


     <!--CONTENT -->
     <div class="containter">
     <div class="row headerstuff">
      
        <div class="headerpic col-sm-6  ">
          <img src="http://alldaycreative.co.uk/wp-content/themes/allday/images/new-slide-one.jpg"/>
        </div>
        <div class="col-sm-6">
            <div class="contentHolder bigMessage" >
				 <h1 >
					Normal ist überbewertet
				 </h1>
				 <p >
				  Wir sind etwas besonderes!
				 </p>
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