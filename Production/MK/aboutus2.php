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
                     setTimeout( "$(window).trigger('resize');",50 );
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
          <!-- <img src="http://upload.wikimedia.org/wikipedia/en/7/71/Deep-Magenta-Square%2C-1978.jpg"/> -->
          <img src="../images/apstrakt.png"/>
        </div>
        <div class=" col-sm-6">
          <div class="contentHolder prored" >
				    <center><h3> Квалитет</h3></center>
            <p>
                Стручните студии, долгогодишните престои во 
                странство, безбројните обуки и семинари ни дозволија да имаме задоволни клиенти со кои можеме да градиме длабоко искуство. 
                Но, нашето учење никогаш не застанува. Бидејќи секој клиент е различен, така и секој превод, секоја терминологија и 
                 документ имаат своја специфика. Нашиот личен пристап и посветеност кон Вас, го гарантира квалитетот на нашите услуги. 
           </p>
            <br/>
            <center><h3>Брзина</h3></center>
            <p>
              Речениците како „ ми треба брзо“ и  „за вчера“ се нашето секојдневие. Како тим, ние сме ентузијасти кои сакаат предизвик. Ако се двоумите дали нешто „може“ или „не може да се изведе“, само обратете ни се. 
            </p>

            <br/>
            <center><h3>Дискреција</h3></center>
            <p>
              Летра Преводи изјавува дека секоја кореспондеција со нас, без разлика дали
               е формална или неформална, обврзувачка или информативна, писмена, електронска или усмена, се чува како настрога деловна тајна. 
              Целиот тим на Летра Преводи има потпишано изјава за строга доверливост и чување деловна тајна, а самата компанија со задоволство 
              е подготвена да ги потпише сите ваши изјави и договори за доверливост.  
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