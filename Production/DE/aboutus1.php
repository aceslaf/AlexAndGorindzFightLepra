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
         	
             var nWidth=$(window).width();   
	         if(nWidth<768){
	           $(".headerpic>img").attr("width",nWidth);
             return;
	         }
           if(nWidth<1400){	         
		     var picWidth=Math.floor(nWidth*0.65);
             $(".headerpic>img").attr("width",picWidth); 
			 
             var divHeight=$(".headerpic").height();
             var picHeight=0.4688*picWidth;
			 var padding=Math.floor((divHeight-picHeight)/2);
			 var paddingString=padding+"px";
			 
             $(".headerpic").css("padding-top",paddingString);			 
			 $(".headerpic").css("padding-bottom",paddingString);
	       }else{		     
             $(".headerpic>img").attr("width",1045); 
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
     <div class="containter">
     <div class="row headerstuff">
      
        <div class="headerpic col-sm-6  ">
          <img src="http://alldaycreative.co.uk/wp-content/themes/allday/images/new-slide-one.jpg"/>
        </div>
        <div class=" col-sm-6">
            <div class="contentHolder" >
				 
                
              <h3>Sprachen:</h3>
              <div>
                <ul>
                  <li><span>Deutsch</span></li>
                  <li><span>Englisch</span></li>
                  <li><span>Spanisch</span></li>
                  <li><span>Mazedonisch</span></li>
                </ul>
              </div>



              <h3>Nur für Übersetzungen:</h3>
              <div>
                <ul>              
                <li><span>Französich</span></li>
                <li><span>Albanisch</span></li>
                <li><span>Croatisch</span></li>
                <li><span>Serbisch</span></li>
                <li><span>Griechisch</span></li>
                <li><span>Niederländisch</span></li>
                <li><span>Italienisch</span></li>
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

     <!-- FOOOTER-->
	 <div class="footer /*bggreen */">	 
			 <div class="container">
			   <p>@Letra 2014</p>
			 </div>
	 </div>
   </body>
</html>