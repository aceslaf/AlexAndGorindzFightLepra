<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
      <meta name="viewport" content="width=device-width, initial-scale=1"/>
      <meta name="description" content=""/>
      <meta name="author" content=""/>
      <link rel="shortcut icon" href="../../assets/ico/favicon.ico"/>
      <title>Letra</title>
      <link rel="shortcut icon" href="../images/logo1.png" />
      <!--bootstrap-->
      <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
      <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css"/>
      <script src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
      <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.css"/>
      <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.css"/>
      <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
      <link href="../css/jubmatron.css" rel="stylesheet"/>
      <!--end bootstrap-->
      <link href="../css/reset.css" rel="stylesheet"/>
      <link href="../css/main.css" rel="stylesheet"/>

      <script type="text/javascript">
         $(document).ready(function(){
			     fixPicture();
            setTimeout( "$(window).trigger('resize');",50 );
         });
         
         $(window).resize(function(){
			     fixPicture();
         });

         // function fixPicture(){



         // 	 var nWidth=$(window).width();   
	        //  if(nWidth<768){
	        //    $(".headerpic>img").attr("width",nWidth);
         //     return;
	        //  }
         //   if((nWidth>=768)&&(nWidth<1400)){	                       
         //      var paddT = $('.contentHolder').outerHeight() - $('.contentHolder').height();              
         //     $(".headerpic>img").attr("width",825); 
         //     $(".headerpic").attr("padding-top",Math.floor(paddT/2)+"px");
	        //  }else{//nwidth>=1400
         //     $(".headerpic>img").attr("width",Math.floor(nWidth/2)); 
         //   }

         //  var contentHeight = $(".contentHolder").innerHeight();
         //  var slikaHeigt = parseInt($(".headerpic>img").css("height"));
         //  if(contentHeight>slikaHeigt){
         //    $(".headerpic>img").css("margin-top",Math.floor((contentHeight-slikaHeigt)/2)+"px"); 
         //  }

         // }

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
            $(".headerpic>img").css("margin-top",Math.floor((contentHeight-slikaHeigt)/2)+"px"); 
          }
                                    
            
           
         }
      </script>
      <style type="text/css">
           .contentHolder{
              text-align: justify;
              padding-top: 8%;
              padding-bottom: 10%;
           }
           .contentHolder > div{
              padding-left: 10%;

           }
      </style>
   </head>
   <body>
   <?php require_once('navbar.php'); ?>


     <!--CONTENT -->
     <div class="content">
     <div style="max-width: 1150px; margin: 0 auto;">
     <div class="containter">
     <div class="row headerstuff">
      
        <div class="headerpic col-sm-6  ">
          <!-- <img src="http://alldaycreative.co.uk/wp-content/themes/allday/images/new-slide-one.jpg"/> -->
          <!-- <img src="http://upload.wikimedia.org/wikipedia/en/7/71/Deep-Magenta-Square%2C-1978.jpg"/> -->
          <img src="../images/apstrakt.png"/>
        </div>
        <div class="col-sm-6">
            <div class="contentHolder prored" >
				 
                
              <h3>Sprachen und Tools:</h3>
              <div>
                <ul>
                  <li><span>Deutsch</span></li>
                  <li><span>Englisch</span></li>
                  <li><span>Spanisch</span></li>
                  <li><span>Mazedonisch</span></li>
                  <li><span>CAT-Tools: TRADOS 2011</span></li>
                </ul>
              </div>



              <h3>Externe:</h3>
              <div>
                <ul>              
                
                <li><span>Albanisch</span></li>
                <li><span>Italienisch</span></li>
                <li><span>Französich</span></li>
                <li><span>Russisch</span></li>
                <li><span>Kroatisch</span></li>
                <li><span>Rumänisch</span></li>
                <li><span>Niederländisch</span></li>
                
                </ul>
              </div>

              <h3>Branchen:</h3>
              <div>
                <ul>
                  <li><span>Jura (Straf-, Zivil-, Handels-, Korporationsrecht, europäisches Recht uva.)</span></li>
                  <li><span>Wirtschaft, Finanzen und Bankwesen</span></li>
                  <li><span>Architektur</span></li>
                  <li><span>Geologie</span></li>
                  <li><span>IT</span></li>
                  <li><span>Medizin und Pharmakologie</span></li>
                </ul>
              </div>


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