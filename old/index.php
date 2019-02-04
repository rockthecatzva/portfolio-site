<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="utf-8" />
  <title>dan.catzva</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://use.fontawesome.com/4d986391b0.js"></script>
  <link href="css/style.css" rel="stylesheet" />
  
  <link rel="stylesheet" href="./node_modules/spectre.css/dist/spectre.min.css" />
  <!--<link rel="stylesheet" href="./node_modules/spectre.css/dist/spectre-exp.min.css" />-->
  <!--<link rel="stylesheet" href="spectre-icons.min.css" />-->


  <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-15876167-1', 'auto');
  ga('send', 'pageview');
  </script>


</head>

<body>
  <div class="bg-image">
    <div class="elevator-bio">
      <span class="intro-name">DAN CATZVA</span>
      <br/>
      <span class="indent web-dev">JAVASCRIPT DEVELOPER</span>
      <br/>
      <span class="indent web-dev">RESEARCH NINJA</span>
    </div>
  </div>


  <div class="container">
    <div class="columns center-text">
      <div class="column col-sm-4"><a href="#projects"><span class="block-btn btn-text">Projects</span></a></div>
      <div class="column col-sm-4"><a href="#contact"><span class="block-btn btn-text">Contact</span></a></div>
      <div class="column col-sm-4"><a href="#about"><span class="block-btn btn-text">About</span></a></div>
    </div>
  </div>

  <div id="projects" class="container">
    <div class="project-title block-text">Angular & D3.js Data Visualization</div>
      <div class="columns">
          <div class="column col-4 col-sm-12">
             <div class="mobilpic pic3-lastfm">
             </div>
          </div>
          
          <div class="column col-8 col-sm-12">
             <div class="mobilpic picset-lastfm">
             </div>
          </div>
        </div> <!--columns-->

      <div class="columns">  
        <div class="column col-8 col-offset-2 bottom-pad">
          <div class="project-descript"><p>A fully custom d3.js visualization using data from the LastFM API. Currently built using Angular. The visualization plots a user's monthly top-artists on a circular graphic. Genres are assigned unique color values. Roll-overs reveal artist name and the month's play count. THE LASTFM API IS CURRENTLY BROKEN, but the visualization still works fairly well.</p>
            <a class="iframe" href="http://rockthecatzva.com/lastfm/#/beau_slims/1435723200/1454302800">
              <span class="glyphicon glyphicon-link"></span>
              <span class="">
                Example 1
              </span>
            </a>
            |
            <a class="iframe" href="http://rockthecatzva.com/lastfm/#/beau_slims/1409544000/1438401600">
              <span class="glyphicon glyphicon-link"></span>
              <span class="">
                Example 2
              </span>
            </a>
            | <a href="https://github.com/rockthecatzva/lastfm-dataviz-angular" class="gitlogo"><div class="fa fa-github fa-1x"></div></a>
          </div>
        </div>  
      </div>



    <div class="project-box col-sm-10 col-sm-offset-1">
      <span class="project-title block-text">
        React & D3.js Data Dashboard (+ php API)
      </span>
      <div class="row">
        <div class="col-sm-8 mobilpic slimtrack-pic1"></div>
        <div class="col-sm-4 mobilpic slimtrack-pic2"></div>
      </div>
    </div>
    <div class="col-sm-8 col-sm-offset-2 bottom-pad">
      <div class="row project-descript"><p>A React Data Dashboard prototype built using  PHP Slim API & mySQL on the backend, and React.js, Bootstrap & c3.js on the front-end. The project was for a large TV company to demonstrate the capabilities of developing a more robust data management and reporting tool.</p>
        <a class="iframe" href="http://rockthecatzva.com/slim-tracker/">
          <span class="glyphicon glyphicon-link"></span>
          <span class="">
            Link
          </span>
        </a>
        | <a href="https://github.com/rockthecatzva/tvratings-slimtracker" class="gitlogo"><div class="fa fa-github fa-1x"></div></a>
      </div>
    </div>


  <div class="project-box col-sm-6 col-sm-offset-3">
    <div class="">
      <span class="project-title block-text">
        Animated microsite
      </span>
    </div>
    <div id="carousel-hichew">
      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img src="images/hichew.png" alt="">
        </div>
        <!--<div class="item">
        <iframe src="http://rockthecatzva.com/chew/" width="625" height="400"></iframe>
      </div>-->
    </div>
  </div>
</div>
<div class="col-sm-6 col-sm-offset-3 bottom-pad">
  <div class="row project-descript"><p>A quick turn-around mircrosite for a Colorado-based marketing and graphic design agency. Simple HTML and jQuery. Features complex cell-like animations.</p>
    <a href="http://rockthecatzva.com/chew/index.html" target="_blank">
      <span class="glyphicon glyphicon-link"></span>
      <span class="">
        Link
      </span>
    </a>
    | <a href="https://github.com/rockthecatzva/hichew-microsite" class="gitlogo"><div class="fa fa-github fa-1x"></div></a>
  </div>
</div>



<div class="project-box  col-sm-6 col-sm-offset-3">
  <div class="">
    <span class="project-title block-text">
      Educational mini-game prototype
    </span>
  </div>
  <div id="carousel-f2b" class="carousel slide" data-ride="carousel">
    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="images/f2b.jpg" alt="">
      </div>
      <div class="item">
        <iframe style="width: 100%; height: 365px;" src="https://www.youtube.com/embed/FVdhUuo1qwo" frameborder="0" allowfullscreen></iframe>
      </div>
      <!--<div class="item">
      <iframe src="http://rockthecatzva.com/lastfm/#/beau_slims/1430452800/1456808400" style="width: 100%; height: 463px;"></iframe>
    </div>-->
  </div>
</div>
</div>
<div class="col-sm-6 col-sm-offset-3 bottom-pad">
  <div class="row project-descript"><p>An Adobe Flash game prototype that demonstrates the ability to develop large-scale projects and an understanding of OOP and Game Development. I was given the basic graphic assets, the game rules, and a script of character dialog. An audio engine was developed to sequence the pre-recorded sounds. It was written with Action Script 3.0 (an ECMAscript-based language).</p>
    <a class="iframe" href="https://www.youtube.com/embed/FVdhUuo1qwo" >
      <span class="glyphicon glyphicon-link"></span>
      <span class="">
        Video
      </span>
    </a>
  </div>
</div>



<div class="project-box  col-sm-6 col-sm-offset-3">
  <div class="">
    <span class="project-title block-text">
      Portfolio site
    </span>
  </div>
  <img src="images/Beau_shot1.jpg" style="width: 100%; height: 100%;"/>
</div>
<div class="col-sm-6 col-sm-offset-3 bottom-pad">
  <div class="project-descript"><p>HTML & jQuery portfolio site to showcase the work of a graphic designer.</p>
    <a class="iframe" href="http://rockthecatzva.com/beau/" >
      <span class="glyphicon glyphicon-link"></span>
      <span class="">
        Link
      </span>
    </a>
  </div>
</div>


</div>


<div id="about">
  <div class="row">
    <div class="col-sm-6 col-sm-offset-3 col-xs-6 col-xs-offset-3">
      <img style="width: 100%;" src="./images/B&W.JPG" />
    </div>
  </div>
  <div class="row">

    <div class="col-sm-6 col-sm-offset-3 col-xs-6 col-xs-offset-3 pad-section">
      <p>Hello, I'm Dan. I love writing code, animating objects, and making things dynamic. I have a strong foundation in research, including over 7 years as a TV-ratings analyst, however development and tech are my passion! I have experience building a wide range of front-end projects including micro-sites, data-visualizations and data-rich dashboards. I enjoy working with the React.js, D3.js and CSS packages (Bootstrap).</p>
      <p>On the back-end I've been using PHP (Slim API, CodeIgniter) and MySQL.</p>
      <br/>
      Here are some other fun hobbies and project:
    </div>
  </div>

  <div class="row">
    <div class="col-sm-4 col-sm-offset-2">
      <a class="hobby-btn" target="_blank" >
        <img class="full-w hobby-pic" src="./images/atpic-small.jpg" />
      </a>
    </div>
    <div class="col-sm-4 hobby-box">
      <h4>Appalachain Trail Thru-Hiker</h4>
      <p>In 2005 I completed a 2,175 mile hike of the entire length of the Appalachain Trail. It took 6 months to navigate from Georgia to Maine.</p>
    </div>
  </div>

  <div class="row">
    <div class="col-sm-4 col-sm-offset-2">
      <a class="hobby-btn iframe" href="https://www.youtube.com/embed/WyLPpGdfR7s" >
        <img class="full-w hobby-pic" src="./images/xyplotter.jpg" />
      </a>
    </div>
    <div class="col-sm-4 hobby-box">
      <h4>Arduino X-Y Plotter</h4>
      <p>An Arduino-based X-Y plotter that draws SVG files to any vertical surface. Two stepper motors located in the upper corners pulled webbing-rope to triangulate the position of the pen. Arduino communicated with a PC running a Python script that takes care of the heavy-lifting.</p>
    </div>
  </div>


  <div class="row">
    <div class="col-sm-4 col-sm-offset-2">
      <a class="hobby-btn iframe" href="https://www.youtube.com/embed/RLGpJlh3Peo" target="_blank" >
        <img class="full-w hobby-pic" src="./images/eboard-small.jpg" />
      </a>
    </div>
    <div class="col-sm-4 hobby-box">
      <h4>Electric Skateboard</h4>
      <p>With a 6 mile range a top-speed of 22mph and weighing in at under 20lbs, this Lipo-powered project is also useful for getting around town.</p>
    </div>
  </div>

</div>


<div id="contact" class="pad-section container bottom-pad">
  <div class="row">
    <div class="col-sm-8 col-sm-offset-2">
      <div class="row address-sect">
        <p class="address-sect-b">Dan Catzva</p>
        <p>Washington, DC 20001</p>
        <p>dcatzva@gmail.com</p>
        <div class="col-centered">
          <a class="social-logo" href="https://github.com/rockthecatzva"><div class="fa fa-github fa-2x"></div></a>
          <a class="social-logo" href="https://www.linkedin.com/in/daniel-catzva-a940b319"><div class="fa fa-linkedin fa-2x"></div></a>
          <!--<a class="social-logo" href="https://www.linkedin.com/in/daniel-catzva-a940b319"><div class="fa fa-envelope fa-2x"></div></a>-->
        </div>
      </div>
      <!--<div class="row">
      <img class="map-box" src="http://maps.googleapis.com/maps/api/staticmap?center=38.90994,-77.017425&zoom=10&format=png&sensor=true&size=640x240&maptype=roadmap">
    </div>-->
  </div>
</div>

</div><!--contact-->


</body>
</html>
