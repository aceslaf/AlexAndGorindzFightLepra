     
<script type="text/javascript">
   var navbarResizeFunct=function(){
       var nWidth=$(window).width();   
       
      if(nWidth<768){             
        $("#nava").show();
        $("#bigmenu").hide();
        return;
      }
      if((nWidth>=768)&&(nWidth<992)){             
        $("#bigmenu").show();
        $("#nava").hide();
        $(".logoimg").css("left", (nWidth-10)/2 + "px");
        return;
      }else {
        $("#bigmenu").show();
        $("#nava").hide();
        $(".logoimg").css("left", (nWidth-125)/2 + "px");

      }        
   };           
   $(document).ready(navbarResizeFunct);         
   $(window).resize(navbarResizeFunct);
   
</script>



 <!-- LANGUAGES STRIPE -->
  <div class="lang ">
     <div class="container">
        <div class="pull-right" style="margin-top:5px">
           <a href="../langRedirect.php?lang=MK">MK</a> 
           <a href="../langRedirect.php?lang=EN">EN</a> 
           <a href="../langRedirect.php?lang=DE">DE</a> 
        </div>
     </div>
  </div>


  <!--NAVIGATION -->
  <div class="stripe">
  <div class="container">
     <div id="bigmenu">
        <img src="../images/logo1.png" class="logoimg"/>
        <div class="navbar-collapse collapse">
           <ul class="nav navbar-nav bigmenu">
              <li class="active"><a href="home.html">Home</a></li>
              <li class="dropdown">
                 <a href="#" class="dropdown-toggle" data-toggle="dropdown">About ussr <b class="caret"></b></a>
                 <ul class="dropdown-menu">
                    <li><a href="aboutus1.html">What we do</a></li>
                    <li><a href="aboutus2.html">Who we are</a></li>
                    <li><a href="aboutus3.html">Team</a></li>
                 </ul>
              </li>
              <li><a href="services.html" >Uslugi</a></li>
              <li><a href="galery.html" style="background-image:none">Uslugi</a></li>
           </ul>
           <ul class="nav navbar-nav navbar-right bigmenu" style="margin-right:-5px">
              <li><a href="#" style="background-color: rgb(165,182,42) !important; background-image:none;">Contact</a></li>
           </ul>
        </div>
     </div>
     <div id="nava">
        <nav id="nav" class="navbar navbar-default" role="navigation">
           <div class="container-fluid">
              <!-- Brand and toggle get grouped for better mobile display -->
              <div class="navbar-header">
                 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                 <span class="sr-only">Toggle navigation</span>
                 <span class="icon-bar"></span>
                 <span class="icon-bar"></span>
                 <span class="icon-bar"></span>
                 </button>
                 <a class="navbar-brand  asdbackground" href="#">Летра</a>
                 <!-- <img src="../images/logo.png" width="35" height="35" /> -->
              </div>
              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                 <ul class="nav navbar-nav navbar-right">
                    <li><a href="#" class="activelink">Home</a></li>
                    <li class="dropdown open">
                       <a href="#" class="dropdown-toggle" data-toggle="dropdown">About us <b class="caret"></b></a>
                       <ul class="dropdown-menu">
                          <li><a href="#">Action</a></li>
                          <li><a href="#">Another action</a></li>
                          <li><a href="#">Something else here</a></li>
                       </ul>
                    </li>
                    <li><a href="#">Uslugi</a></li>
                    <li><a href="#" style="background-color: rgb(165,182,42) !important; background-image:none;">Contact</a></li>
                 </ul>
              </div>
              <!-- /.navbar-collapse -->
           </div>
           <!-- /.container-fluid -->
        </nav>
     </div>
  </div>
 </div> 