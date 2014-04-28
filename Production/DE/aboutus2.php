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

           var contentHeight = $(".contentHolder").innerHeight();
          var slikaHeigt = parseInt($(".headerpic>img").css("height"));
          if(contentHeight>slikaHeigt){
            $(".headerpic>img").css("margin-top",Math.floor((contentHeight-slikaHeigt)/2)+"px"); 
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
          <img src="http://alldaycreative.co.uk/wp-content/themes/allday/images/new-slide-one.jpg"/>
        </div>
        <div class=" col-sm-6">
          <div class="contentHolder prored" >
				    <center><h3> Qualität</h3></center>
            <p>
                Die Hochwertigkeit, die LETRA Ihnen anbietet bekommen Sie nirgendwo sonst. Wir sind die besten in unserem Geschäft und das haben schon viele Klienten bezeugt. Suchen Sie nicht weiter, wenn sie eine professionelle, schnelle und hochwertige Übersetzung brauchen. Überzeugen Sie sich selbst von unseren Fachkenntnissen und Fertigkeiten.
           </p>
            <br/>
            <center><h3>Schnelligkeit</h3></center>
            <p>
              Brauchen Sie eine schnelle Übersetzung? Hier sind Sie richtig. STOP gibt es für uns nicht, genauso wenig wie UNMÖGLICH. Wir machen alles MÖGLICH, so SCHNELL wie MÖGLICH. Und das alles ohne an Qualität einbüßen zu müssen, so gut sind wir. Schneller als bei uns geht es nicht, fragen Sie nicht weiter. Die Konkurenz lügt.
            </p>

            <br/>
            <center><h3>Diskretion</h3></center>
            <p>
              Vertraulich? Kein problem, vertrauen Sie uns. Alle unsere mitarbeiter sind an eine Geheimhaltungsvereinbarung gebunden. Wir achten auf den Schutz Ihrer Daten und versichern sorgfältigen Umgang mit Ihren Dokumenten. Was bei LETRA passiert, bleibt bei LETRA.
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