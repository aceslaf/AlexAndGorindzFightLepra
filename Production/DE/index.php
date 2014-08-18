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
      
      <!-- OWL CAROUSEL-->
      <link rel="stylesheet" href="../owl-carousel/owl.carousel.css"> 
	  <link rel="stylesheet" href="../owl-carousel/owl.theme.css">
	  <script src="../owl-carousel/owl.carousel.js"></script>
	  <script src="../js/contentHover.js"></script>
      

      <script type="text/javascript">
         $(document).ready(function(){
			fixPicture();
			makeCarousel();
			//makeContentHover();
         });
         
         $(window).resize(function(){
			fixPicture();
         });
        
        function makeContentHover(){
              $('.contentNoHover').contenthover({
              	  data_selector: '.contentHover',
			      overlay_background:'#000',
			      overlay_opacity:0.8
			  });

        }

        function fixPicture(){
           var widthVrzHeight=2.13178294574; 
           var nWidth=$(window).width();   
           if(nWidth<768){
             $(".headerpic img").attr("width",nWidth);
             return;
           }
            if(nWidth<1400){
              $(".headerpic img").attr("width",825);	
              return;
            }

            if(nWidth>=1400){
               $(".headerpic img").attr("width",Math.floor(nWidth*0.55));	
              return;	
            }
          };    


           //   var textHeight=$('.contentHolder').height(); 
           //   var paddT = $('.contentHolder').outerHeight() - textHeight;
           //   var neededPicWidth=widthVrzHeight*textHeight;
           //     if(neededPicWidth<(nWidth/2)){
           //        $(".headerpic>img").attr("width",Math.floor(nWidth/2)); 
           //     }else{
           //         $(".headerpic>img").attr("width",neededPicWidth); 
           //         $(".headerpic").attr("padding-top",Math.floor(paddT/2)+"px");
           //     }   
            function makeCarousel(){
        	$("#owl-demo").owlCarousel({ 
		      navigation : false, // Show next and prev buttons
		      slideSpeed : 300,
		      paginationSpeed : 400,
		      singleItem:true,
		      autoPlay:true
		 
		      // "singleItem:true" is a shortcut for:
		      // items : 1, 
		      // itemsDesktop : false,
		      // itemsDesktopSmall : false,
		      // itemsTablet: false,
		      // itemsMobile : false
		 
		    });};               
      </script>
      <style type="text/css">
          .item{
          	padding-right: 5%;
          }
      </style>
   </head>
   <body>
   <?php require_once('navbar.php'); ?>


     <!--CONTENT --><div class="content">
     <div style="max-width: 1150px; margin: 0 auto;">
     <div class="containter">
     <div class="row headerstuff">
      
        <div class="headerpic col-sm-6  ">
        <div class="contentNoHover">
          <img src="http://alldaycreative.co.uk/wp-content/themes/allday/images/new-slide-one.jpg"/>
        </div>
        <!-- <div class="contentHover">
          <div class="item">
	              
					 <h1 class="fancyTitleFont colorGreen" style="
                                font-family: 'proxima-nova', 'Helvetica Neue', Helvetica, Arial, sans-serif;
                                color: rgb(165,182,42);
                                text-align: center;" >
						Mislam deka naslov e pozelen
					 </h1>
					 <p class="defaultFont"  style="font-family: "Bariol_Regular", "Helvetica Neue", Helvetica, Arial, sans-serif;
                                color: #999;
                                text-align: justify; ">
					 Letra Translations ist Ihr Übersetzungsbüro in Mazedonien. Fachübersetzungen, beglaubigte Dokumenten, Konferenzdolmetschen -wir sind spezialisiert für Deutsch, English, Spanisch und Mazedonisch, aber sehen Sie sich die anderen Sprachkombinationen die wir anbieten.
					 </p>
				   </div>
           </div> -->
          
        </div>
        <div class="col-sm-6 .defaultFont">
            <div class="contentHolder bigMessage" >
			<div id="owl-demo" class="owl-carousel owl-theme" >
	               <div class="item">
	              
					 <h1 class="fancyTitleFont colorGreen"  >
						Übersetzungen
					 </h1>
					 <p class="defaultFont"
					    >
					 Sie haben Fernweh oder Reiselust? Oder Sie arbeiten oft mit dem Ausland?
					 </p>
				   </div>	 
				   <div class="item">
	                   <h1 class="fancyTitleFont colorGreen">
						Letra Übersetzungen
					 </h1>
	                  <p class="defaultFont">
					  Sie gedenken in Mazedonien geschäftlich tätig zu sein?
					 </p>
					
					 
				   </div>	 
				   <div class="item">
	              
					 <h1 class="fancyTitleFont colorGreen">
						 Letra Übersetzungen
					 </h1>
					 <p class="defaultFont">
					    Sie verreisen oder übersiedeln und benötigen plötzlich eine Reihe von Dokumenten?
					 </p>

				   </div>	 
				   <div class="item">
	              
					 <h1 class="fancyTitleFont colorGreen">
						 Letra Übersetzungen 
					 </h1>
					  <p class="defaultFont">
					      Sie organisieren internationale Konferenzen und Events?
					 </p> 

				   </div>
				   <div class="item">
	              
					 <h1 class="fancyTitleFont colorGreen">
						Sie sind hier richtig.
					 </h1>
					<!--  <p class="defaultFont">
					
					 </p> -->

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