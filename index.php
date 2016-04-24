<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="utf-8" />

  <title>dan.catzva</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">



  <!-- attach CSS styles -->
  <script type="text/javascript" src="bower_components/jquery/dist/jquery.min.js"></script>

  <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap-theme.min.css">
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">

  <link href="css/style.css" rel="stylesheet" />

  <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-15876167-1', 'auto');
  ga('send', 'pageview');

</script>

  <script type="text/javascript">

  $(document).ready(function(){

    $("#email, #message, #sender_name").click(function(){
      $(".email-sent").css("visibility", "hidden");
    });

    $('#submit').click(function()
    {
      var email_address = $("#email").val();
      var message = $("#message").val();
      var sender = $("#sender_name").val();

      if((email_address)&&(message)&&(sender))
      {

        $.ajax({
          url: "sendComment.php",
          type:'POST',
          data:
          {
            email: email_address,
            sender: sender,
            message: message
          },
          success: function(msg)
          {
                              //alert('Email Sent');
                              $(".email-sent").css("visibility", "visible");
                              $(':input','#email_form')
                              .not(':button, :submit, :reset, :hidden')
                              .val('')
                              .removeAttr('checked')
                              .removeAttr('selected');
                            }               
                          });
      }

    });

  });


</script>
</head>
<body>



  <div class="container-full">

    <div class="home row">
      <div class="bg-image"></div>
      <div class="elevator-bio">
        <span class="intro-name block-text shadow">dan CATZVA</span>
        <br/>


        <span class="indent block-text web-dev shadow">Web developer</span> 
        <br/> 
        <br/> 
        <a href="#about" class="other-description hidden-xs">
          <span class="sub-text block-text">Tinkerer</span> <span class="sub-text block-text">DIY-superstar</span> <span class="sub-text block-text">Hiking-ninja</span> <span class="sub-text block-text">Cat-whisperer</span>
        </a>
        <br/> 
        <br/> 
        <div class="indent home-links">
          <a href="#projects"><span class="sub-text block-text">Projects</span></a> <a href="#contact"><span class="sub-text block-text">Contact</span></a> <a href="#about"><span class="sub-text block-text">Other</span></a>
        </div>

      </div>
    </div>


    <div id="projects" class="">

      <div class="row">
        <div class="project-box col-sm-6 col-sm-offset-3">
          <img src="images/lastfm-angular.jpg" style="width: 100%; height: 100%;"/>
          <div class="descript-container">
            <p><span class="project-title block-text shadow">
              Angular & D3.js Data Visualization
            </span></p>
            
            <p><span class="block-text sub-text shadow">
              Angular, d3.js, Bootstrap, jQuery
            </span></p>

          </div>
        </div>  
      </div>

      <div class="col-sm-6 col-sm-offset-3 bottom-pad">
        <div class="row project-descript"><p>A fully custom d3.js visualization using data from the LastFM API. Currently built using Angular. The visualization plots a user's monthly top-artists on a circular graphic. Genres are assigned unique color values. Roll-overs reveal artist name and the month's play count. THE LASTFM API IS CURRENTLY BROKEN, but the visualization still works fairly well.</p>
              <a href="http://rockthecatzva.com/lastfm/#/beau_slims/1435723200/1454302800" target="_blank">
              <span class="block-text shadow">
                Example 1
              </span>  
            </a>

            <a href="http://rockthecatzva.com/lastfm/#/beau_slims/1409544000/1438401600" target="_blank">
              <span class="block-text shadow">
                Example 2
              </span>
            </a>

        </div>
      </div>
      





      <div class="row">
        <div class="project-box  col-sm-6 col-sm-offset-3">  
          <img src="images/portfolio-slimtracker.jpg" style="width: 100%; height: 100%;"/>
          <div class="descript-container">
            <p><span class="project-title block-text shadow">
              React & D3.js Data Dashboard
            </span></p>
            <p><span class="sub-text block-text shadow">
              PHP Slim API, mySQL, react.js, c3 (d3.js), ES6, Bootstrap
            </span></p>
            
          </div>

        </div>  
      </div>
      <div class="col-sm-6 col-sm-offset-3 bottom-pad">
        <div class="row project-descript"><p>A Bootstrap Data Dashboard prototype built for a large television media company to demonstrate the capabilities of developing a more robust data management and reporting tool. The project was full stack, including a SQL database and pathways for users to add new data via uploading text files. The API was developed using the PHP Slim Framework. Front end is React.js (ES6) and c3.js (a d3 library).</p>
            <a href="http://rockthecatzva.com/slim-tracker/" target="_blank">
              <span class="block-text shadow">
                Link
              </span>
            </a>


        </div>
      </div>
      




      <div class="row">
        <div class="project-box col-sm-6 col-sm-offset-3">  
          <img src="images/hichew.png" style="width: 100%; height: 100%;"/>
          <div class="descript-container">
            <p><span class="project-title block-text shadow">
              Animated microsite
            </span></p>
            <p><span class="sub-text block-text shadow">
              HTML, jQuery
            </span></p>
          </div>

        </div>  
      </div>
      <div class="col-sm-6 col-sm-offset-3 bottom-pad">
        <div class="row project-descript"><p>A quick turn-around mircrosite for a Colorado-based marketing and graphic design agency. Simple HTML and jQuery. Features complex cell-like animations.</p>
            <a href="http://rockthecatzva.com/chew/index.html" target="_blank">
              <span class="block-text shadow">
                Link
              </span>
            </a>

        </div>
      </div>


      




      <div class="row">
        <div class="project-box  col-sm-6 col-sm-offset-3">
          <img src="images/f2b.jpg" style="width: 100%; height: 100%;"/>

          <div class="descript-container">
            <p><span class="project-title block-text shadow">
              Educational mini-game prototype
            </span></p>
            <p><span class="sub-text block-text shadow">
              OOP. Game dev. Flash + AS3.
            </span></p>
            
          </div>

        </div>  
      </div>
      <div class="col-sm-6 col-sm-offset-3 bottom-pad">
        <div class="row project-descript"><p>An Adobe Flash game prototype developed as part of a Game Developer job interview. I was given the basic graphic assets, the game rules, and a script of character dialog. The challenge required that all game elements be dynamic, including the letters used in each level. An audio engine was developed to sequence the pre-recorded sounds. Built using Action Script 3.0 (an ECMAscript-based language). It demonstrates the ability to develop more complex projects using some OOP and game design.</p>
            <a href="https://youtu.be/FVdhUuo1qwo" target="_blank">
              <span class="block-text shadow">
                Video
              </span>
            </a>  
        </div>
      </div>
      


      <div class="row">
        <div class="project-box  col-sm-6 col-sm-offset-3">
          <img src="images/Beau_shot1.jpg" style="width: 100%; height: 100%;"/>

          <div class="descript-container">
            <p><span class="project-title block-text shadow">
              Portfolio site
            </span></p>
            <p><span class="sub-text block-text shadow">
              HTML, jQuery
            </span></p>
            
          </div>
        </div>  
      </div>

      <div class="row">
        <div class="col-sm-6 col-sm-offset-3 bottom-pad">
          <div class="project-descript"><p>HTML & jQuery portfolio site to showcase the work of a graphic designer client.</p>
              <a href="http://rockthecatzva.com/beau/" target="_blank">
              <span class="block-text shadow">
                Link
              </span>
            </a>
          </div>
        </div>
      </div>

    </div>  

    
    <div id="about">
      <div class="row">

        <div class="circlepic col-sm-2 col-sm-offset-1 col-xs-4 col-xs-offset-4">
          <img style="width: 100%;" src="./images/circle-selfie.png" />
        </div>

        <div class="col-sm-8 col-xs-12 bottom-pad">
          <p>Hello, I'm Dan. I love writing code, animating objects, and making things dynamic. I have a strong foundation in research, including over 7 years as a TV-ratings analyst, but development and tech are my passion. I have experience building a wide range of front-end projects including micro-sites, data-visualizations and data-rich dashboards. Currently, I am playing with react.js, D3.js and Bootstrap.</p>
          <p>I've also done some development on the back-end using 2 popular PHP frameworks, CodeIgniter and Slim API.</p>
          Here are some other fun skills:
        </div>
      </div>

      <div class="row">
        <div class="col-sm-4 col-sm-offset-3 biobox-sm">
          <a href="https://www.youtube.com/watch?v=WyLPpGdfR7s" target="_blank" >
            <img style="width: 100%" src="./images/xyplotter.jpg" />
            <span class="block-text bio-text shadow">Tinkerer</span>
          </a>
        </div>

        <div class="col-sm-4 biobox-sm">
          <a href="https://www.youtube.com/watch?v=RLGpJlh3Peo" target="_blank">
            <img style="width: 100%" src="./images/eboard-small.jpg" />
            <span class="block-text bio-text shadow">DIY-superstar</span>
          </a>
        </div>

        <div class="col-sm-4  col-sm-offset-3  biobox-sm">
          <img style="width: 100%" src="./images/atpic-small.jpg" />
          <span class="block-text bio-text shadow">Hiking-ninja</span>
        </div>

        <div class="col-sm-4 biobox-sm">
          <a href="https://youtu.be/TKoJgo5DLRU" target="_blank">
            <img style="width: 100%; height: 100%" src="./images/catwhisp-small.jpg" />
            <span class="block-text bio-text shadow">Cat-whisperer</span>
          </a>
        </div>
      </div>



      
    </div>
    
    <div id="contact" class="pad-section">
      <div class="row bottom-pad">
          <span class="contact-title block-text shadow">Contact me</span>
      </div>


      <div class="row">

        <div class="col-sm-4 col-sm-offset-1">
          <div class="row">
            <img class="map-box" src="http://maps.googleapis.com/maps/api/staticmap?center=38.90994,-77.017425&zoom=13&format=png&sensor=false&size=640x480&maptype=roadmap">
          </div>

          <div class="row address-sect">
            <p class="address-sect-b">Dan Catzva</p>
            <p>Washington, DC 20001</p>
            <p>dcatzva@gmail.com</p>
          </div>
        </div>


        <div class="col-sm-6 contact-box">

          <form id="email_form" class="form-horizontal" role="form" method="post" action="index.php">
            <div class="form-group">
              <label for="name" class="col-sm-2 control-label">Name</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="sender_name" name="name" placeholder="Name" value="<?php echo htmlspecialchars($_POST['name']); ?>">
                <?php echo "<p class='text-danger'>$errName</p>";?>
              </div>
            </div>
            <div class="form-group">
              <label for="email" class="col-sm-2 control-label">Email</label>
              <div class="col-sm-10">
                <input type="email" class="form-control" id="email" name="email" placeholder="example@domain.com" value="<?php echo htmlspecialchars($_POST['email']); ?>">
                <?php echo "<p class='text-danger'>$errEmail</p>";?>
              </div>
            </div>
            <div class="form-group">
              <label for="message" class="col-sm-2 control-label">Message</label>
              <div class="col-sm-10">
                <textarea class="form-control" id="message" rows="4" name="message"><?php echo htmlspecialchars($_POST['message']);?></textarea>
                <?php echo "<p class='text-danger'>$errMessage</p>";?>
              </div>
            </div>


            <div class="form-group">
              <div class="col-sm-10 col-sm-offset-2">
                <input id="submit" name="submit" type="button" value="Send" class="btn btn-primary">
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-10 col-sm-offset-2">
                <div class="email-sent alert alert-success">Thank You! I will be in touch</div>
              </div>
            </div>
          </form> 
        </div>
      </div>

    </div>



  </div>
</body>
</html>