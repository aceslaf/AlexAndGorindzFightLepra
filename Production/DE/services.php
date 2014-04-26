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


        

      </style>
      <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
        <script src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
        <style>
           .acrd >h3{
             border: none !important; 
           border-radius: 0 !important;
           background: none;
           background-color: /*#eaeade*/ #a5b62a !important;
           color: white !important;
           font-weight: bold;
         }
        </style>
        <script>
               var mobileScreen=true;
               var accordions=new Object();
               $(document).ready(function(){
				  var windowWidth=$(window).width(); 
                  mobileScreen=(windowWidth<768);
                  
                  makeAccordion(mobileScreen);              	  
              	});              
               
              


              var makeAccordion=function(isMobile) {
              	var settings;
               	if(isMobile){// MOBILE SCREEN
               		settings={
		                collapsible: true,
		                active:false,
		                icons:false,
		                heightStyle: "content",
                       autoHeight: false,
        clearStyle: true, 
	                }	                
                }else{// LARGE SCREEN
                	settings={};
                }

                
                accordions[0]=$( ".acrd0" ).accordion(settings);                 
                accordions[1]=$( ".acrd1" ).accordion(settings);
              };
              var acordionClick=function(isMobile,acrNum){
                         if(!isMobile){
                             return;
                         }
                         //calculate other acordion
                         var other= 1 - acrNum; 
                         
                         accordions[other].accordion("option","active",false);



              };
        </script>


      
      <link href="../css/reset.css" rel="stylesheet">
   </head>
   <body>
     <?php require_once('navbar.php'); ?>






     <!--CONTENT -->
     <div class="containter">
     <style type="text/css">        
        .acrd>h1, .acrd>div{
           font-family: 'proxima-nova', 'Helvetica Neue', Helvetica, Arial, sans-serif; 
        }
        .acrd p{
          font-family: "Bariol_Regular", "Helvetica Neue", Helvetica, Arial, sans-serif;
          color: #999;
        }
        .containter .row{
          width: 90%;
          margin: 50px auto 0 auto;
        }
        .uslugiimg{
          margin: 0 auto 10px auto;
          width: 80%;
          height: 66px;
          max-width: 547px;
        }
        .uslugiimg img{
          width: 100%;
        }

        .row .col-sm-4 {
          margin-top:40px;
        }

        .row .acrd{
          padding-left:10px;
          padding-right: 10px;
        }

        .uslugatitle{
          font-size: 18px;
          font-weight: bold;
          margin-bottom: 10px;
          text-align: center
        }

     </style>
     <div class="row">
        <!-- <div class="uslugiimg"><img src="../images/uslugi.png"/></div> -->
        <div class="col-sm-6  ">
           <div class="uslugatitle">Pismen prevod</div>    
           <div class="acrd acrd0">
                  <h3 style="border: none; border-radius: 0;" onclick="acordionClick(mobileScreen,0)">Beglaubigte Übersetzung</h3>
                  <div>
                    <p>
                    Sollten Sie eine von einem staatlich geprüften Übersetzer beglaubigte Übersetzung brauchen, die Rechtsgültigkeit hat, dann sind Sie bei uns an der richtigen Adresse. 
                    Wir sind  für beglaubigte Übersetzungen in zahlreichen Sprachen zugelassen, vor allem in Deutsch, Englisch, Spanisch und Mazedonisch.
                    Wenn Sie einen solchen Service in anderen Sprachen benötigen, verfügen wir über ein breites Netzwerk an staatlich geprüften Übersetzern in allen Sprachen und Branchen.
                    <br/>
                    <br/>
                    
                    </p>
                  </div>

                  <h3 onclick="acordionClick(mobileScreen,0)" >Eilaufträge</h3>
                  <div>
                    <p>Da LETRA auch Schnelligkeit bedeutet, sind Sie an der richtigen Stelle für Übersetzungen in kürzester Zeit. 
                       Wir übersetzen Ihre amtlichen Dokumente vor Ihren Augen und Sie können Sie sofort mitnehmen. 
                       Einzelne Dokumente in Länge von 100 bis 200 Wörtern können von unseren Mitarbeitern in ca. 30 bis 60 Minuten fertiggestellt werden. 
                    </p>
                  </div>

                  <h3 onclick="acordionClick(mobileScreen,0)">Lokalisierung von Internetseiten </h3>
                  <div>
                    <p>
                       Heutzutage ist es für Unternehmen wichtig sich überall auf der Welt vorstellen zu können, natürlich über das Internet und im Idealfall in der Sprache des Landes, 
                       in dem man sich präsentieren möchte. So ist es von äußerster Wichtigkeit eine Internetseite lokaliesieren lassen zu können. 
                   </p>                    
                  </div>
                  
          </div>
        </div>
        <div class="col-sm-6">
          <div class="uslugatitle">Interpretirawe</div>    
          <div class="acrd acrd1">
                  <h3 style="border: none; border-radius: 0;" onclick="acordionClick(mobileScreen,1)">Dolmetschen</h3>
                  <div>
                    <p>
                       Langjährige Erfahrung und Kenntnisse zeichnen LETRA auch im bereich des Dolmetschen aus. Wenn wir dolmetschen, können die anderen nur gucken.
                        Lehnen Sie sich zurück und stören Sie sich nicht damit, eine fremde Sprache verstehen zu müssen. Das machen wir für Sie.
                       onferenzen, Sitzungen, Versammlungen, Tagungen und sonstige Veranstalltungen - wir sind immer dort, wo Sie uns brauchen und geben 130%. Unsere Kompetenzen stehen Ihnen stehts zu Diensten. 
                       Wir dolmetschen aus dem Deutschen, Englischen und Spanischen ins Mazedonische, sowie umgekehrt.   
                   </p>
                  </div>
                  <h3 onclick="acordionClick(mobileScreen,1)">Simultandolmetschen</h3>
                  <div>
                    <p>
                        Beim Simultandolmetschen findet die Verdolmetschung zeitgleich mit dem Redner   statt.
                        Als Dolmetscher arbeiten wir zu zweit oder sogar zu dritt in einer   Dolmetscherkabine für jede gedolmetschte Sprache und wir wechseln uns   regelmäßig ab.
                        Diese Art des Dolmetschens ist die gebräuchlichste und wird  insbesondere bei Mehrsprachigen Konferenzen, Kongressen, Pressekonferenzen  und Fernsehsendungen verwendet.
                    </p>
                  </div>
                  <h3 onclick="acordionClick(mobileScreen,1)">Konsekutivdolmetschen</h3>
                  <div>
                    <p>
                      Hier trägt der Redner größere inhaltlich zusammenhängende Passagen seiner   Ansprache ohne Unterbrechung vor und wir verdolmetschung unmittelbar im   Anschluss. 
                      Konsekutivdolmetschen erfordert einen geringen technischen Aufwand, ein   Mikrofon ist reicht vollkommen aus und ist daher äußerst praktisch. 
                    </p>                    
                  </div>
                  
          </div>  
        </div> 
      <!--   <div class="col-sm-4">
          <div class="uslugatitle">USLUGI3</div>    
          <div class="acrd">
                  <h3 style="border: none; border-radius: 0;">Section 1</h3>
                  <div>
                    <p>
                  cipit eget, quam. Integer ut neque. Vivamus nisi metus, molestie vel, gravida in, condimentum sit amet, nunc. Nam a nibh. Donec suscipit eros. Nam mi. Proin viverra leo ut odio. Curabitur malesuada. Vestibulum a velit eu ante scelerisque vulputate</p>
                  </div>
                  <h3>Section 2</h3>
                  <div>
                    <p>Sed non urna. Donec et ante. Phasellus eu ligula. Vestibulum sit amet purus. Vivamus hendrerit, dolor at aliquet laoreet, mauris turpis porttitor velit, faucibus interdum tellus libero ac justo. Vivamus non quam. In suscipit faucibus urna. </p>
                  </div>
                  <h3>Section 3</h3>
                  <div>
                    <p>Nam enim risus, molestie et, porta ac, aliquam ac, risus. Quisque lobortis. Phasellus pellentesque purus in massa. Aenean in pede. Phasellus ac libero ac tellus pellentesque semper. Sed ac felis. Sed commodo, magna quis lacinia ornare, quam ante aliquam nisi, eu iaculis leo purus venenatis dui. </p>                    
                  </div>
                  <h3>Section 4</h3>
                  <div>
                    <p>Cras dictum. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean lacinia mauris vel est. </p><p>Suspendisse eu nisl. Nullam ut libero. Integer dignissim consequat lectus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. </p>
                  </div>
          </div>
        </div> -->
       </div> 
      </div>
     </div>
     












     <!-- FOOOTER-->
        <!-- FOOOTER-->
   <div class="footer  /*bggreen*/ " style="border-top: none;">   
       <div class="container">
         <p>@Letra 2014</p>
       </div>
   </div>
   </body>
</html>