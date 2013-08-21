
<!DOCTYPE html>
<!-- Designed by Joey Isaacson (yes, me) based on Bootsrap -->
<!--IMG of New York belongs to a mr (or ms?) "i am pigga" http://www.flickr.com/photos/kopb/-->
<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>UX Designer For Hire : Joey Isaacson</title>
    
    <?php 
        include_once "header_tags.php"; 
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
          <div class="span6 hidden-phone">
              <img src="img/title.png">
          </div>  
          <div class="span6">
            <h1 class="header">A UX Designer available for hire in <span class="bold">New York City.</span></h1>
            <h3>View my resume on <a href="http://www.linkedin.com/pub/joe-isaacson/1a/304/125">LinkedIn</a><h3>
          </div>
      </div>
    </div>  
    </div> 

    <hr class="hidden-phone">

    <div class="section" id="work_overview">
      <div class="container">
        <hr class="visible-phone">
        <div class="row">
          <div class="span3 hidden-phone">
              <img class="img-circle vertical-align-center" src="img/profile.png">
          </div>  
          <div class="span8 offset1">
            <h2 class="center">I design (and build) software that drives results.</h2>
            <hr>
            <h3 class="hidden-phone weak center">I am currently employed and living in San Francisco until mid-September but will be available for hire in New York starting October 1st. Feel free to take a look at my work below and contact me at <span class="bold">joeisaacson23@gmail.com</span></h3>
            <p class="visible-phone weak center">I am currently employed and living in San Francisco until mid-September but will be available for hire in New York starting October 1st. If you have any questions, please contact me at <span class="bold">joeisaacson23@gmail.com</span></p>
            <br><br>
          </div>  
          </div>  
        </div>
      </div>
    </div>    


    <div id="mobile-warning" class="visible-phone"> 
      <div class="row">
        <h4 class="weak">Thank you for viewing this site on your mobile device, but I <i>highly</i> reccomend you wait until you can view it on a desktop computer.</span> 
      </div>

      <div class="row">
        <span id="show" class="btn btn-large btn-inverse">Just show me the work</span>
      </div>
    </div>

    <!--Desktop Carousel-->

    <div id="work" class="content hidden-phone">
    
      <div id="houseplans" class="slide">
            <div class="container">
            
            <div class="span1 prev">
                 <div class="left dark"></div>
            </div>

            <div class="span4">
                <a href="houseplans.php">
                  <img class="pull-right" src="img/houseplans/houseplans_alt.png">
                </a>
            </div>  

            <div class="span5 description">
                <h1>HOUSEPLANS</h1>
                <hr>
                <h4 class="bold">What happens when you want customized architecture without the heavy price tag?</h4>
                <h4 class="weak">For the past 8 months, I have been working at Houseplans.com to bring affordable architecture to everyone.</h4>
                <div class="cta">
                  <a class="btn btn-large btn-inverse" href="houseplans.php">Learn More</a>
                </div>
            </div>

            <div class="span1 next">
              <div class="right dark pull-right"></div>
            </div>  

            </div>
      </div>  

      <div id="sortey" class="slide">  
            <div class="container">
            
            <div class="span1 prev">
                 <div class="left light"></div>
            </div>

            <div class="span4 description">
                <h1>SORTEY</h1>
                <hr>
                <h4 class="bold">Have you ever seen a product before but can't remember where you saw it?</h4>
                <h4 class="weak">Sortey is the brainchild of our General Assembly UX class, and now a concept in development.</h4>
                <div class="center cta">
                  <a class="btn btn-large btn-white" href="http://sortey.com/">View the concept</a>
                </div>
            </div>  

            <div class="span5">
                <img src="img/sortey.png">        
            </div>

            <div class="span1 next">
                <div class="right light pull-right"></div>
            </div>

            </div>
      </div> 


      <div id="healthyout" class="slide" >
        <div class="container">

          <div class="span1 prev">
                 <div class="left light"></div>
          </div>

              <img class="span3" src="img/healthyout/iphone-mock.png">

              <div class="span5 description">
                  <h1>HealthyOut</h1>
                      <hr>
                      <h4 class="bold">Jr Interactive Mobile Designer</h4>
                      <h4>I helped bring a concept to life as it made it into the top 10 food apps of the iTunes AppStore.</h4>
                      <div class="cta center">
                          <a class="btn btn-large btn-white" href="https://itunes.apple.com/us/app/healthyout-free-restaurant/id566409966?mt=8">View in the app store</a>
                      </div>
              </div>  

            <div class="span1 offset1 next">
                 <div class="right light pull-right"></div>
            </div>
      </div>  
      </div>

      <div id="ikea" class="slide">
             <div class="container">
             
            <div class="span1 prev">
                 <div class="left light"></div>
            </div>

             <div class="span4 description">
                <h1>IKEA Floor Map</h1>
                <hr>
                <h4>Never shop again without knowing the dimensions of your room.</h4>
                <div class="span3 cta">
                    <a class="btn btn-large btn-white" href="IKEA.php">View the concept</a>
                </div>
             </div>    

             <div class="span5">
                <a href="/IKEA.php">
                  <img src="img/IKEA/IKEA_HEADER.png">
                </a>
             </div>  

            <div class="span1 next">
              <div class="right light pull-right"></div>
            </div>

            </div>
      </div> 


      
      

    <ul class="triggers hidden">
       <li>0</li>
       <li>1</li>
       <li>2</li>
       <li>3</li>
    </ul>

    </div>
    </div>


    <!--Mobile Work (Hidden on Desktop)-->

    <div id="work-mobile" class="hidden">

    <div class="section" id="sortey">
      <div class="container" >
          <div class="row">
            <div class="span5 ">
                <h1>SORTEY</h1>
                <hr>
                <h4 class="bold">Have you ever seen a product before but can't remember where you saw it?</h4>
                <h4 class="weak">Sorety is the brainchild of our General Assembly UX class, and now a concept in development.</h4>
                <div class="center cta">
                  <a class="btn btn-large btn-white" href="http://sortey.com/">View the concept</a>
                </div>   
            </div>  

            <div class="span7 hidden-phone">
                <img src="img/sortey.png">
            </div> 
          
          </div>
      </div>  
    </div>

    <div class="section" id="houseplans">
      <div class="container">
        <div class="row">
            <div class="span4 center hidden-phone">
                <a href="houseplans.php">
                  <img src="img/houseplans/icon.png">
                </a>
            </div>  

            <div class="span5 offset1">
                <h1>HOUSEPLANS</h1>
                <hr>
                <h4 class="bold">What happens when you want customized architecture without the heavy price tag?</h4>
                <h4 class="weak">For the past 8 months, I have been working at Houseplans.com to bring affordable architecture to everyone.</h4>
                <div class="cta">
                  <a class="btn btn-large btn-inverse" href="houseplans.php">Learn More</a>
                </div>
            </div>  
        </div>
      </div>  
    </div>  

    <div class="section" id="healthyout">
        <div class="container">
          <div class="row">
              <div class="span4 offset1 hidden-phone">
                  <img src="img/healthyout/iphone-mock.png">
              </div>  

              <div class="span6">
                  <h1>HealthyOut</h1>
                      <hr>
                      <h4 class="bold">Jr Interactive Designer</h4>
                      <h4>I helped bring a concept to life as it made it into the top 10 food apps of the iTunes AppStore.</h4>
                      <div class="span3 cta">
                          <a class="btn btn-large btn-white" href="https://itunes.apple.com/us/app/healthyout-free-restaurant/id566409966?mt=8">View in the iTunes store</a>
                      </div>
              </div>  
          </div>  
        </div>  
    </div> 

    <div class="section" id="ikea">
      <div class="container">
        <div class="row">
            <div class="span4 offset1">
                <h1>IKEA Floor Map</h1>
                <hr>
                <h4>Never shop again without knowing the dimensions of your room.</h4>
                <div class="span3 cta">
                    <a class="btn btn-large btn-white" href="IKEA.php">View the concept</a>
                </div>
            </div>    

            <div class="span6 hidden-phone">
                <a href="/IKEA.php">
                  <img src="img/IKEA/IKEA_HEADER.png">
                </a>
            </div>    
        </div>
      </div>  
    </div>
 

    </div>



    <div class="section hidden-phone" id="contact">
        <div class="container">
           <?php 
                include_once "footer.php";
             ?>
        </div> 
      </div>


    <!-- Le javascript
    ================================================== -->
    
    <script src="js/jquery-1.8.3.min.js"></script>
    <script src="js/custom.js"></script>
    <script src="js/slider.js"></script>
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