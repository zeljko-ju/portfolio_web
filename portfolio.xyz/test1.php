<!doctype html>
<html class="no-js" lang="en">

<head>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css'>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Portfolio</title>
  <link rel="stylesheet" href="https://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.min.css">
  <link rel="stylesheet" href="css/app.css">
  <link rel="stylesheet" href="css/foundation.min.css">
</head>

<!doctype html>
<html class="no-js" lang="en">

<head>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css'>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Portfolio</title>
  <link rel="stylesheet" href="https://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.min.css">
  <link rel="stylesheet" href="css/app.css">
  <link rel="stylesheet" href="css/foundation.min.css">
</head>

<body>

  <div class="off-canvas-wrapper">
    <!--start tijelo-->
    <div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>

      <div class="off-canvas position-left reveal-for-large" id="my-info" data-off-canvas data-position="left">
        <div class="row column">
          <br>
          <img class="thumbnail" src="profilePic.JPG">

          <h3>About Me</h3>
          <h5>Education</h5>
          
          <ul class="tockica">
            <li>Elektrotehnička škola Nova Gradiška 2006-2010</li>
            <li class="tockica">Fakultet organizacije i informatike 2010-2012
          </ul>
          <li class="tockica">Edunova 2022-</li>
          </ul>
        </div>
      </div>

      <div class="off-canvas-content" data-off-canvas-content>
        <div class="title-bar hide-for-large">
          <div class="title-bar-left">
            <button class="menu-icon" type="button" data-open="my-info"></button>
            <span class="title-bar-title">Željko Jukić</span>
          </div>
        </div>
        <div class="callout primary">
          <div class="row column">
            <h2>Hello, my name is Željko Jukić</h2>
            
            <p class="lead">Welcome to my portfolio webpage! I'm PHP student at Edunova aiming to become full stack
              developer.</p>
          </div>
        </div>

        <div class="row small-up-2 medium-up-3 large-up-4">
          <h3>My work</h3>
          <hr>
          <div class="column">
            <img class="thumbnail" src="https://th.bing.com/th/id/R.a6144cc77edd33d92e4c39dcc77e1bef?rik=Xk%2beFNaDZY5yiA&pid=ImgRaw&r=0">
            <a href="/bikeshop1.hr/index.php" target="_blank" ><h5>bike shop (in progress)</h5></a>
          </div>

        </div>
        <hr>
        <hr>
        <div class="row small-up-2 medium-up-3 large-up-4">
          <h3>My skils</h3>
          <hr>
          <div class="column">
            <img class="thumbnail" src="js.png">
            <h5>JavaScript</h5>
          </div>
          <div class="column">
            <img class="thumbnail" src="mysql.png">
            <h5>Mysql</h5>
          </div>
          <div class="column">
            <img class="thumbnail" src="htmlcss.png">
            <h5>HTML & CSS</h5>
          </div>

          <div class="column">
            <img class="thumbnail" src="php.png">
            <h5>PHP</h5>
          </div>
        </div>
        <hr>
        <hr>

        <div class="row">
          <div class="medium-6 columns">
            <!--social media-->
            <h5></h5>

            <ul class="menu">
              <div class="wrapper">
                <a href="https://web.facebook.com/" target="_blank" class="icon">
                  <div class="tooltip">Facebook</div>
                  <span><i class="fab fa-facebook">Facebook</i></span>

                </a>
                <br>
                <a href="https://www.linkedin.com/in/%C5%BEeljko-jukic-5697651b4/" target="_blank" class="icon linkedin">
                  <div class="tooltip">Github</div>
                  <span><i class="fab fa-linkedin">Linkedin</i></span>
                </a>
                <br>
                <a href="https://github.com/zeljko-ju" target="_blank" class="icon github">
                  <div class="tooltip">Github</div>
                  <span><i class="fab fa-github">Github</i></span>
                </a>
            </ul>

          </div>


          <div class="medium-6 columns">
            <label>Name
              <input type="text" placeholder="Name">
            </label>
            <label>Email
              <input type="text" placeholder="Email">
            </label>
            <label>
              Message
              <textarea placeholder="holla at a designerd"></textarea>
            </label>
            <input type="submit" class="button expanded" value="Submit">
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--podnožje start-->
 <?php include_once 'podnozje.php'?>
<!--podnožje end-->
<!--skripte-->
 <?php require_once 'jsskripte.php'?>
  
</body>

</html>