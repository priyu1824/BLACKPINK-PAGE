<?php
// session_start();if(!isset($_SESSION['user_id'])){  echo "<script>location.href = 'login.php'</script>";}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>BLINK</title>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
  <link rel="stylesheet" href="style.css">

</head>

<body>
  
  <header>
    <a href="#" class="logo ">BLINK</a>
    <nav class="navbar">
      <a class="active" href="#home">Home</a>
      <a href="#anime">Albums</a>
      <a href="#action">Singles</a>
      <a href="#child">Gallery</a>
      <a href="#family">Awards</a>

    </nav>
    <div class="icons">
      <i class="fa fa-bars" id="menu-bars"></i>
      <i class="fa fa-search" id="search-icon"></i>
      <a href="#" class="fa fa-heart"></a>
    </div>
  </header>

  <section class="home" id="home">
    <div class="swiper home-slider">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <div class="box"><img class="a" src="images/lisa5.png"  alt="LISA"></div>
          <div class="content">
            <h3>LISA</h3>
          </div>
        </div>

        <div class="swiper-slide">
          <div class="box second"><img class="a" src="images/jennie1.png" alt="JENNIE"></div>
          <div class="content">
            <h3>JENNIE</h3>
          </div>
        </div>

        <div class="swiper-slide">
          <div class="box"><img class="a"src="images/jisso1.png" alt="JISOO"></div>
          <div class="content">
            <h3>JISOO</h3>
          </div>
        </div>

        <div class="swiper-slide">
          <div class="box"><img class="a" src="images/rose1.png" alt="ROSE"></div>
          <div class="content">
            <h3>ROSE</h3>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="box"><img class="a" src="images/blpk.jpg" alt="blackpink">
        </div>

        <div class="swiper-scrollbar"></div>



  </section>
  <!--Anime section-->
  <section class="anime" id="anime">
    <h1 class="heading">Albums 📀</h1>
    <div class="swiper anime-slider">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <div class="box"><iframe width="200" height="170" src="https://www.youtube.com/embed/67otJZ6qe9Y" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>
          <div class="content">

            <h3>forever young</h3>
        
          </div>
        </div>
        <div class="swiper-slide">
          <div class="box"><iframe width="200" height="170" src="https://www.youtube.com/embed/Amq-qlqbjYA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe></div>
          <div class="content">

            <h3>as if its ur last</h3>
            
        
          </div>
        </div>
        <div class="swiper-slide">
          <div class="box"><iframe width="160" height="170" src="https://www.youtube.com/embed/LpSH8MrYCfg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe></div>
          <div class="content">

            <h3>boombayah</h3>
            
        
          </div>
        </div>
        <div class="swiper-slide">
          <div class="box"><iframe width="200" height="170" src="https://www.youtube.com/embed/IZnUWDugxnQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe></div>
          <div class="content">

            <h3>how u like that</h3>
            
  
          </div>
        </div>
        <div class="swiper-slide">
          <div class="box"><iframe width="200" height="170" src="https://www.youtube.com/embed/CEopCrGfLio" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe></div>
          <div class="content">

            <h3>kill this love</h3>
            
        
          </div>
        </div>
        <div class="swiper-slide">
          <div class="box"><iframe width="200" height="170" src="https://www.youtube.com/embed/jjFSRDUvETQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>></div>
          <div class="content">

            <h3>pink venom</h3>
            
        
          </div>
        </div>
        <div class="swiper-slide">
          <div class="box"><iframe width="200" height="170" src="https://www.youtube.com/embed/2vOVB03klrc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe></div>
          <div class="content">

            <h3>Whistle</h3>
            
        
          </div>
        </div>
        
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--Action section-->
  <section class="action" id="action">
    <h1 class="heading">Singles 🎵</h1>
    <div class="swiper action-slider">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <div class="box second"> <audio controls src="mp3/flower.mp3" type="audio/mp3" ></audio>
            <img src="images/flower.png" alt="Jisoo"></div>
          <div class="content">
            <h3>flower</h3>
            <p>Jisoo
            </p>
        

          </div>
        </div>
        <div class="swiper-slide">
          <div class="box second"><audio controls src="mp3/money.mp3" type="audio/mp3" 
            height="70" width="55"></audio>
            <img src="images/gone.png" alt="LISA"></div>
          <div class="content">
            <h3>gone</h3>
            <p>Rose
            </p>
        

          </div>
        </div>
        <div class="swiper-slide">
          <div class="box second"><audio controls src="mp3/solo.mp3" type="audio/mp3" 
            height="70" width="55"></audio>
            <img src="images/lalisa1.png" alt="LISA"></div>
          <div class="content">
            <h3>laLISA</h3>
            <p>Lisa
            </p>
        

          </div>
        </div>
        <div class="swiper-slide">
          <div class="box second"><audio controls src="mp3/aeom.mp3" type="audio/mp3" 
            height="70" width="55"></audio>
            <img src="images/solo.png" alt="LISA"></div>
          <div class="content">
            <h3>Solo</h3>
            <p>Jennie
            </p>
        

          </div>
        </div>
        <div class="swiper-slide">
          <div class="box second"><audio controls src="mp3/flower.mp3" type="audio/mp3" 
            height="70" width="55"></audio>
            <img src="images/otg.png" alt="LISA"></div>
          <div class="content">
            <h3>ground</h3>
            <p>Rose
            </p>
        

          </div>
        </div>
        <div class="swiper-slide">
          <div class="box second"><audio controls src="mp3/money.mp3" type="audio/mp3" 
            height="70" width="55"></audio>
            <img src="images/money.png" alt="LISA"></div>
          <div class="content">
            <h3>money</h3>
            <p>Lisa
            </p>
        

          </div>
        </div>
        <div class="swiper-slide">
          <div class="box second"><audio controls src="mp3/alom.mp3" type="audio/mp3" 
            height="70" width="55"></audio>
            <img src="images/aeom.png" alt="LISA"></div>
          <div class="content">
            <h3>all eyes on me</h3>
            <p>Jisoo
            </p>
        

          </div>
        </div>

      </div>
    </div>
  </section>
  <!--child section-->
  <section class="child" id="child">
    <h1 class="heading">Gallery 🖼️</h1>
    <div class="swiper child-slider">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <div class="box second"><img src="images/jennie2.png" alt="JENNIE"></div>
        </div>


        <div class="swiper-slide">
          <div class="box second"><img src="images/jisoo4.png" alt="JISOO"></div>
        </div>


        <div class="swiper-slide">
          <div class="box second"><img src="images/lisa2.png" alt="LISA"></div>
        </div>


        <div class="swiper-slide">
          <div class="box second"><img src="images/jennie4.png" alt="LISA"></div>
        </div>


        <div class="swiper-slide">
          <div class="box second"><img src="images/rose3.png" alt="LISA"></div>
        </div>
      

        <div class="swiper-slide">
          <div class="box second"><img src="images/jisso3.png" alt="LISA"></div>
        </div>


        <div class="swiper-slide">
          <div class="box second"><img src="images/rose7.png" alt="LISA"></div>
        </div>


        <div class="swiper-slide">
          <div class="box second"><img src="images/jisso3.png" alt="LISA"></div>
        </div>

      </div>
    </div>
  </section>
  <section class="family" id="family">
    <h1 class="heading">Awards 🏆</h1>
    <div class="swiper family-slider">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <div class="box"><img src="images/gldsk.png" alt=""></div>
          <div class="content">
            <h3>golden disk</h3>
            
        

          </div>
        </div>
        <div class="swiper-slide">
          <div class="box"><img src="images/tca.png" alt=""></div>
          <div class="content">
            <h3>teens choice</h3>
        

          </div>
        </div>
        <div class="swiper-slide">
          <div class="box"><img src="images/mtv.png" alt=""></div>
          <div class="content">
            <h3>MTV video music</h3>
        

          </div>
        </div>
        <div class="swiper-slide">
          <div class="box"><img src="images/mama.png" alt=""></div>
          <div class="content">
            <h3>MAMA 2017</h3>
        

          </div>
        </div>
        <div class="swiper-slide">
          <div class="box"><img src="images/mnet.png" alt=""></div>
          <div class="content">
            <h3>MNET Asian</h3>
        

          </div>
        </div>
        <div class="swiper-slide">
          <div class="box"><img src="images/bfg.png" alt=""></div>
          <div class="content">
            <h3>best female group</h3>
        

          </div>
        </div>
        <div class="swiper-slide">
          <div class="box"><img src="images/pca.png" alt=""></div>
          <div class="content">
            <h3>peoples choice</h3>
        

          </div>
        </div>
        <div class="swiper-slide">
          <div class="box"><img src="images/bro.png" alt=""></div>
          <div class="content">
            <h3>Bravo otto</h3>

          </div>
        </div>
      </div>
    </div>
  </section>

  <!--copyright-->
  <div class="copyright container">
    <a href="#" class="logo">Made with ❤️ by Priyadarsini Swain</a>
    <p>&#169;  All rights reserved</p>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
  <script src="index.js"></script>
</body>

</html>