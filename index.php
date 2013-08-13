
<!DOCTYPE html>
<!-- Designed by Joey Isaacson (yes, me) based on Bootsrap -->
<!--IMG of New York belongs to a mr (or ms?) "i am pigga" http://www.flickr.com/photos/kopb/-->
<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>UX Designer For Hire : Joey Isaacson</title>
    
    <?php 
        include "header_tags.php"; 
    ?>
    
  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top hidden-phone">
      <div class="navbar-inner">
        <div class="container">
            <a  href="index.php">Joey Isaacson</a>
          
            <ul class="nav pull-right">
              <li><a href="#work">Work</a></li>
              <li><a href="#contact">Contact</a></li>
            </ul>
        </div>
      </div>
    </div>

    <div id="introduction">
    <div class="container">
      <div class="row">
          <div class="span10">
            <h1 class="header">A UX Designer available for hire in <span class="bold">New York City.</span></h1>
            <!--<h3><span class="weak">Reach me at </span>415.8472812. <span class="weak">or email me at joeisaacson23@gmail.com</span><h3>-->
          </div>
      </div>

      
      <div class="row hidden-phone">
         <!--<div class="span9">      
              <a class="btn btn-who btn-large" href="#contact">Who I am</a>
              <a class="btn btn-work btn-large" href="#contact">My Work</a>
          </div>-->
      </div> 

        <div id="icons" class="row">
          <div class="span9 hidden-phone">
            <h3><a href="mailto:joeisaacson23@gmail.com">E-mail</a> me or reach out on <a href="http://www.linkedin.com/pub/joe-isaacson/1a/304/125">LinkedIn</a><h3>
            <!--<div class="icon pull-left"><a href="https://twitter.com/Joe_Isaacson"><img src="img/icons/icon-twitter.png"></a></div>
            <div class="icon pull-left"><a href="mailto:joeisaacson23@gmail.com"><img src="img/icons/icon-email.png"></a></div>
            <div class="icon pull-left"><img src="img/icons/icon-linkedin.png"></div>
            <div class="icon pull-left"><img src="img/icons/icon-medium.png"></div>-->
            <div id="img"></div>
          </div>  
      </div>
    </div>  
    </div> 



     <div class="section" id="work_overview">
      <div class="container">
        <hr class="visible-phone">
        <div class="row">
          <div class="span10 offset1">
            <h1 class="center">I design user experiences and interfaces to solve problems.</h1>
            <hr>
            <h3 class="hidden-phone weak center">I am currently employed and living in San Francisco until mid-September but will be available for hire in New York starting October 1st. Feel free to take a look at my work below and contact me at <span class="bold">joeisaacson23@gmail.com</span></h3>
            <p class="visible-phone weak center">I am currently employed and living in San Francisco until mid-September but will be available for hire in New York starting October 1st. If you have any questions, please contact me at <span class="bold">joeisaacson23@gmail.com</span></p>

          </div>
        </div>
      </div>
     </div>    


    <div id="mobile-warning" class="visible-phone"> 
      <div class="row">
        <h4 class="weak">Thank you for viewing this site on your mobile device, but I <i>highly</i> reccomend you wait until you can view it on a desktop computer.</span> 
      </div>

      <div class="row">
        <span class="btn btn-large btn-inverse">Just show me your work</span>
      </div>
    </div>
    

    <!--Beginning of Work Pieces (3) Hidden on mobile-->
    <div id="work" class="hidden-phone">
   

    <div class="section" id="sortey">
      <div class="container" >
          <div class="row">


          

            <div class="span4 offset1">
                <h2>SORTEY</h2>
                <hr>
                <h4 class="bold">Have you ever seen a product before but can't remember where you saw it?</h4>
                <h4 class="weak">Sorety is the brainchild of our General Assembly UX class, and now a concept in development.</h4>
                  <div class="span3 cta">
                  <a class="btn btn-large" href="http://sortey.com/">View the concept</a>
                </div>   
            </div>  

              <div class="span7" style="position: relative;">
                <div class="background-img ">
                <a href="sortey.com">
                  <!--<img src="img/sortey.png">-->
                </div>
                </a>
            </div> 


          </div>
      </div>  
    </div>

    <div class="section" id="houseplans">
      <div class="container">
        <div class="row">
            <div class="span6 offset1">
                <img src="img/houseplans/houseplans_alt.png">
            </div>  

            <div class="span5">
                <h2>HOUSEPLANS</h2>
                <hr>
                <h4 class="bold">What happens when you want customized architecture without the heavy price tag?</h4>
                <h4 class="weak">For the past 8 months, I have been working at Houseplans.com to bring affordable architecture to everyone.</h4>
                <div class="cta">
                  <a class="btn btn-large" href="houseplans.php">Learn More</a>
                </div>
            </div>  
        </div>
      </div>  
    </div>  

    <div class="section" id="ikea">
      <div class="container">
        <div class="row">
            <div class="span4 offset1">
                <h3>IKEA Floor Map</h3>
                <hr>
                <h3>Never shop again without knowing the dimensions of your room.</h3>
                <div class="span3 cta">
                    <a class="btn btn-large" href="IKEA.php">View the concept</a>
                </div>
            </div>    

            <div class="span6">
                <a href="/IKEA.php">
                  <img src="img/IKEA/IKEA_header.png">
                </a>
            </div>    
        </div>
      </div>  
    </div>




    <div class="section hidden-phone" id="contact">
        <div class="container">
           <?php 
                //include("footer.php");
                include "footer.php";
             ?>
        </div> 
      </div>


    <!-- Le javascript
    ================================================== -->
    <script src="js/jquery-1.8.3.min.js"></script>
    <script src="js/jquery-ui-1.10.3.custom.min.js"></script>
    <script src="js/jquery.ui.touch-punch.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap-select.js"></script>
    <script src="js/bootstrap-switch.js"></script>
    <script src="js/flatui-checkbox.js"></script>
    <script src="js/flatui-radio.js"></script>
    <script src="js/jquery.tagsinput.js"></script>
    <script src="js/jquery.placeholder.js"></script>
    <script src="js/jquery.stacktable.js"></script>
    <script src="http://vjs.zencdn.net/c/video.js"></script>
    <script src="js/application.js"></script>


  

</body></html>