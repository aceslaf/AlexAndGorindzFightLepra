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
          var widthVrzHeight=/*2.13178294574*/ 1.6; 
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
          <img src="../images/boutUs2.jpg"/>
          <!-- <div class="item">                
             <h1 class="fancyTitleFont colorGreen"  >
              Willkomen
             </h1>
             <p class="defaultFont" style="text-align: justify;"
                >
             Letra Translations ist Ihr Übersetzungsbüro in Mazedonien. Fachübersetzungen, beglaubigte Dokumenten, Konferenzdolmetschen -wir sind spezialisiert für Deutsch, English, Spanisch und Mazedonisch, aber sehen Sie sich die anderen Sprachkombinationen die wir anbieten.
             </p>
           </div>   -->
        </div>
        <div class=" col-sm-6">
          <div class="contentHolder prored" >
				    <center><h3> Hochwertigkeit</h3></center>
            <p>
                Studien, langjährige Auslandsaufenthalte, zahlreiche Trainings und Semirane haben uns zufriedene Kunden gebracht mit denen wir unsere Erfahrung stets vertiefen.
                Trotzdem hören wir mit dem Lernen nie auf. Da jeder Kunde verschieden ist,  gibt es Spezifika bei jeder Übersetzung, Terminologie und Dokument. Unser persönlicher Ansatz und gewidmete Kundenorientung gewährleisten den Erfolg unserer Dienste. 
           </p>
            <br/>
            <center><h3>Schnelligkeit</h3></center>
            <p>
              Aussagen wie "ich brauche es dringend" gehören zu unserem Alltag. Unser Team setzt sich aus Enthusiasten zusammen, die durch Herausforderungen wachsen.
            </p>

            <br/>
            <center><h3>Verlässlichkeit und Diskretion</h3></center>
            <p>
              Letra Translations verpflichtet sich darauf, dass jegliche mit uns aufgenommene Korrespondenz, unabhängig ob formell oder informell, verbindlich oder unverbindlich, schriftlich, elektronisch oder mündlich, geheimgehalten wird.
              Das gesamte Team von Letra Translation hat Geheimhaltungserklärungen unterzeichnet und das Unternehmen als juristische Person unterschreibt gerne einen NDA-Vertrag mit Ihnen.
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