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
     <div class="content">
     <div style="max-width: 1150px; margin: 0 auto;">
     <div class="row">
        <!-- <div class="uslugiimg"><img src="../images/uslugi.png"/></div> -->
        <div class="col-sm-6  ">
           <div class="uslugatitle">Pismen prevod</div>    
           <div class="acrd acrd0">
                  <h3 style="border: none; border-radius: 0;" onclick="acordionClick(mobileScreen,0)">Судски преводи</h3>
                  <div>
                    <p>
                    Ако преводот кој Ви е потребен, треба да го приложите пред државни органи или нотари, тогаш Ви треба превод  од овластен судски преведувач.  
                    <br/>
                    <br/>
                    <br/>
                    <br/>
                    <br/>
                    <br/>
                   

                    </p>
                  </div>

                  <h3 onclick="acordionClick(mobileScreen,0)" >Брзи преводи</h3>
                  <div>
                    <p>
                    Некогаш и покрај најдоброто планирање, излегуваат непредвлидливи
                     околности кои наложуваат да се реагира брзо и ефикасно. Затоа нашиот тим е флексибилен и 
                    посветен. Без разлика дали Ви треба превод со заверка или само по електронски пат, обратете ни се. 
                    </p>
                  </div>

                  <h3 onclick="acordionClick(mobileScreen,0)">Локализирање на софтвер</h3>
                  <div>
                    <p>
						          DasПревод на софтвер и веб страници претставува посебна дисциплина за која се потребни познавања од програмски јазици, структурата и функционирањето на софтверот, културата во која се локализира производот, однесувањето и навиките на целните групи. Овој вид на преводи ни претставува 
                      особено задоволство, бидејќи припаѓаме на таа генерација која понекогаш го гледа светот електронски  
                     и едвај чека да ги поврзе културите, луѓето и производите од целиот свет преку интернет. 				    </p>                    
                  </div>

                  <h3 onclick="acordionClick(mobileScreen,0)">Консалтинг </h3>
                  <div>
                    <p>
          						Поради искуството, Ви стоиме на располагање за консултации од типот:
                      информации за потребна документација за регулирање престој во странство или за странци во Македонија
                      општи необврзувачки информации за законските прописи во Македонија и во земјите од германско говорно подрачје, посебно оние од областа на трговските друштва и корпоративното право
				           </p>                    
                  </div>
                  
          </div>
        </div>
        <div class="col-sm-6">
          <div class="uslugatitle">Interpretirawe</div>    
          <div class="acrd acrd1">
                   <h3 onclick="acordionClick(mobileScreen,1)">Толкување</h3>
                  <div>
                    <p>
                         Толкувањето претставува устен превод и се користи на конференции, семинари, обуки или пак во затворени кругови, на состаноци, преговори и слично. 
                         <br/>
                       <br/>
                       <br/>
                       <br/>
                       <br/>
                       <br/>
                       <br/>
                     </p>                    
                  </div>
                  <h3 style="border: none; border-radius: 0;" onclick="acordionClick(mobileScreen,1)">Симултано </h3>
                  <div>
                    <p>
                       За симултаното толкување потребни се минимум двајца толкувачи и една кабина за една јазична комбинација
                       
                       

                   </p>
                  </div>
                  <h3 onclick="acordionClick(mobileScreen,1)">Консекутивно</h3>
                  <div>
                    <p>
                        Кај консекутивното толкување не е потребна кабина, но имајте предвид дека вашиот настан може да трае речиси двојно подолго поради преводот. 
                    </p>
                  </div>
                  <h3 onclick="acordionClick(mobileScreen,1)">Двонасочно</h3>
                  <div>
                    <p>
                      Толкување на состаноци, преговори, на терен. 
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