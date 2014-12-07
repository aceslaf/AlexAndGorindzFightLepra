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


      <script type="text/javascript">
         $(document).ready(function(){
			//fixPicture();
			makeCarousel();
         });
         
         // $(window).resize(function(){
			// fixPicture();
         // });

        // function fixPicture(){
        //    var widthVrzHeight=2.13178294574; 
        //    var nWidth=$(window).width();   
        //    if(nWidth<768){
        //      $(".headerpic>img").attr("width",nWidth);
        //      return;
        //    }
        //     if(nWidth<1400){
        //       $(".headerpic>img").attr("width",825);	
        //       return;
        //     }

        //     if(nWidth>=1400){
        //        $(".headerpic>img").attr("width",Math.floor(nWidth*0.55));	
        //       return;	
        //     }
        //   };    


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
		       autoPlay : 3000,
			    stopOnHover : true,
			    navigation:true,
			    paginationSpeed : 1000,
			    goToFirstSpeed : 2000,
			    singleItem : true,
			    autoHeight : true			    
		 
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
          	padding: 5px;
          }
          /*#owl-demo .owl-item img{
			  display: block;
			  width: 100%;
			  height: auto;
			  -webkit-border-radius: 3px;
			  -moz-border-radius: 3px;
			  border-radius: 3px;
			}
			#owl-demo{
				max-width: 920px;
				margin right: auto;
				margin-left: auto;

			}*/
			#owl-demo .item img{
			    display: block;
			    width: 100%;
			    height: auto;
			}
			.container1 {				
				margin-right: auto;
				margin-left: auto;
			}
      </style>
   </head>
   <body>
   <?php require_once('navbar.php'); ?>


     <!--CONTENT -->
     <div class="content">
     <div style="max-width: 950px; margin: 0 auto;">
     <div class="containter">
     <!-- <div class="row headerstuff">
        <div class="col-sm-12">         -->
  			 <!--  <div id="owl-demo" class="owl-carousel owl-theme" >
  	         <div class="item">
                  <img src="../images/img1.jpg" alt="The Last of us">
             </div>              
             <div class="item">
                  <img src="../images/img3.jpg" alt="The Last of us">
             </div> 
             <div class="item">
                  <img src="../images/img4.jpg" alt="The Last of us">
             </div>              
             <div class="item">
                  <img src="../images/cloud.jpg" alt="The Last of us">
             </div>         -->
            
		        <div class="container1">
		          <div class="row">
		            <div class="span12">
		              <div id="owl-demo" class="owl-carousel owl-theme" style="opacity: 1; display: block;">
		                 <div class="item">
		                  		<img src="../images/galery/img1.png" alt="LETRA">
				             </div>              
				             <div class="item">
				                  <img src="../images/galery/img2.jpg" alt="LETRA">
				             </div> 
                     <div class="item">
                          <img src="../images/galery/img3.jpg" alt="LETRA">
                     </div> 
                     <div class="item">
                          <img src="../images/galery/img4.jpg" alt="LETRA">
                     </div>                    
                     <div class="item">
                          <img src="../images/galery/img7.jpg" alt="LETRA">
                     </div> 
                     <div class="item">
                          <img src="../images/galery/img8.jpg" alt="LETRA">
                     </div> 
                     <div class="item">
                          <img src="../images/galery/img9.jpg" alt="LETRA">
                     </div> 
				             <div class="item">
				                  <img src="../images/galery/img10.jpg" alt="LETRA">
				             </div>              
				             <div class="item">
				                  <img src="../images/galery/img11.jpg" alt="LETRA">
				             </div>      
		              
		            </div>
		          </div>
		         </div>
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