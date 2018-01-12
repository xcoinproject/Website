<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>XCOIN Project</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Poppins:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">


</head>

<body>

  <!--==========================
  Header
  ============================-->
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <a href="#hero"><img src="https://www.xcoinproject.com/xcoin.png" alt="" title="" height=128 /></img></a>
        <!-- Uncomment below if you prefer to use a text logo -->
        <!--<h1><a href="#hero">Regna</a></h1>-->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="#hero">Home</a></li>
          <li><a href="#about">Coin Info</a></li>
          <li><a href="#services">Wallet</a></li>
                    <li><a href="#team">Community</a></li>
          <li><a href="#portfolio">Mining & Pool Info</a></li>

                    <li><a href="http://blockchain.xcoinproject.com/" target="_blank">Blockchain Explorer</a></li>
                    <li><a href="http://xcoin.ddns.net:8081/faucet" target="_blank">xCoin Faucet</a></li>
      </nav><!-- #nav-menu-container -->
    </div>
</header><!-- #header -->

  <!--==========================
    Hero Section
  ============================-->
  <section id="hero">
    <div class="hero-container">
    <img src=https://www.xcoinproject.com/xcoin.png height=128 width=128>
      <h1>xCoin Project</h1>
      <h2>xCoin is a new altcoin cryptocurrency with a really cool name</h2>
      <a href="#about" class="btn-get-started">Learn more</a>
      <br><br><font size=2><a href=https://www.xcoinproject.com/index2.html>our old, simple website</a></font>
    </div>
  </section><!-- #hero -->

  <main id="main">

    <!--==========================
      About Us Section
    ============================-->
    <section id="about">
      <div class="container">
        <div class="row about-container">

          <div class="col-lg-6 content order-lg-1 order-1">

<br><br>
            <div class="icon-box wow fadeInUp">
              <div class="icon"><i class="fa fa-bar-chart"></i></div>
              <h4 class="title"><a href="">Maximum Coin Supply</a></h4>
              <p class="description">The theoretical maximum supply is 52.5 million XCOIN. This consists of 51.2 million and a pre-mine of 1.3 million as explained below.</p>
            </div>
<br><br>
            <div class="icon-box wow fadeInUp" data-wow-delay="0.4s">
              <div class="icon"><i class="fa fa-th"></i></div>
              <h4 class="title"><a href="">Pre-Mine</a></h4>
              <p class="description">The first 130 blocks received a 10,000 XCOIN bonus. This is a very small pre-mine, representing under 2.5% of the maximum supply.</p>
            </div>
<br><br>  
          </div>
          <div class="col-lg-6 order-lg-2 order-2 wow fadeInRight">
<br><br> 
            <div class="icon-box wow fadeInUp" data-wow-delay="0.2s">
              <div class="icon"><i class="fa fa-handshake-o"></i></div>
              <h4 class="title"><a href="">Mining Rewards</a></h4>
              <p class="description">256 XCOIN per block mined, halving every 100,000 blocks.<br>Halving will happen approximately annually.</p>
            </div>
<br><br>
            <div class="icon-box wow fadeInUp" data-wow-delay="0.4s">
              <div class="icon"><i class="fa fa-th"></i></div>
              <h4 class="title"><a href="">Block Spacing</a></h4>
              <p class="description">Approximately 5.25 minutes.<br>Difficulty recalculation every 3840 blocks.</p>
            </div>
<br><br> 
          </div>

        </div>

      </div>
    </section><!-- #about -->
   
    <!--==========================
      Facts Section
    ============================-->
    <section id="facts">
      <div class="container wow fadeIn">
        <div class="section-header">
          <h3 class="section-title">xCoin Stats</h3>
          <p class="section-description">current xCoin statistics can be found below</p>
        </div>
        <div class="row counters">
  				<div class="col-lg-3 col-6 text-center">
            <span><?php $networkhash = (htmlspecialchars(trim(file_get_contents('http://xcoin.ddns.net/api/getnetworkhashps')))) / 1000000;echo substr($networkhash,0,5);?></span>
            <p>Network Hash Rate (MH/s)</p>
  				</div>

          <div class="col-lg-3 col-6 text-center">
            <span><?php echo htmlspecialchars(file_get_contents('http://xcoin.ddns.net:80/api/getblockcount')); ?></span>
            <p>Number of Blocks</p>
  				</div>

           <div class="col-lg-3 col-6 text-center">
            <span><?php $money = (htmlspecialchars(trim(file_get_contents('http://xcoin.ddns.net/ext/getmoneysupply')))) / 1000000;echo substr($money,0,5);?></span>
            <p>Million coins out there</p>
          </div>


          <div class="col-lg-3 col-6 text-center">
            <span><?php echo htmlspecialchars(file_get_contents('http://xcoin.ddns.net:80/api/getconnectioncount')); ?></span>
            <p>Connections</p>
  				</div>

  			</div>

      </div>
    </section><!-- #facts -->

    <!--==========================
      Services Section
    ============================-->
    <section id="services">
      <div class="container wow fadeIn">
        <div class="section-header">
          <h3 class="section-title">Wallets</h3>
          <p class="section-description">You can choose from the variety of ways to store your XCOIN below</p>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
            <div class="box">
              <div class="icon"><a href="https://xcoinproject.com/xcoin-0.1.1.zip"><i class="fa fa-windows"></i></a></div>
              <h4 class="title"><a href="https://xcoinproject.com/xcoin-0.1.1.zip">Windows</a></h4>
              <p class="description">Wallet software for Windows operating systems. Click the icon to download (.zip).</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
            <div class="box">
              <div class="icon"><a href="https://xcoinproject.com/xcoin-Qt.dmg"><i class="fa fa-apple"></i></a></div>
              <h4 class="title"><a href="https://xcoinproject.com/xcoin-Qt.dmg">Mac OSX</a></h4>
              <p class="description">Wallet software for Mac OSX (High Sierra). Click the icon to download (.dmg).</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
            <div class="box">
              <div class="icon"><a href="https://xcoinproject.com/xcoin_1.1-1_amd64.deb"><i class="fa fa-linux"></i></a></div>
              <h4 class="title"><a href="https://xcoinproject.com/xcoin_1.1-1_amd64.deb">Linux</a></h4>
              <p class="description">Wallet software for Linux. Click the icon to download (amd64 .deb).</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
            <div class="box">
              <div class="icon"><a href="http://wallet.xcoinproject.com/" target="_blank"><i class="fa fa-desktop"></i></a></div>
              <h4 class="title"><a href="http://wallet.xcoinproject.com/" target="_blank">Online Wallet</a></h4>
              <p class="description">Use our online wallet service to send and recieve XCOIN without the need for a software wallet.</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
            <div class="box">
              <div class="icon"><a href="http://paperwallet.xcoinproject.com/" target="_blank"><i class="fa fa-print"></i></a></div>
              <h4 class="title"><a href="http://paperwallet.xcoinproject.com/" target="_blank">Paper Wallet</a></h4>
              <p class="description">For secure storage, create your own paper wallet to store your XCOIN offline.</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
            <div class="box">
              <div class="icon"><a href="http://github.com/xcoinproject/xcoin" target="_blank"><i class="fa fa-github"></i></a></div>
              <h4 class="title"><a href="http://github.com/xcoinproject/xcoin" target="_blank">GitHub Source</a></h4>
              <p class="description">Compile your own wallet using the GitHub source code.</p>
            </div>
          </div>
        </div>

      </div>
    </section><!-- #services -->

    <!--==========================
    Call To Action Section
    ============================-->
    <section id="call-to-action">
      <div class="container wow fadeIn">
        <div class="row">
          <div class="col-lg-9 text-center text-lg-left">
            <h3 class="cta-title">Join Us</h3>
            <p class="cta-text"> You can join us in our Discord chat room.</p>
          </div>
          <div class="col-lg-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" href="https://discord.gg/JmFHQTv" target="_blank">Join Us</a>
          </div>
        </div>

      </div>
    </section><!-- #call-to-action -->

    <!--==========================
      Team Section
    ============================-->
    <section id="team">
<center>
     <div class="container wow fadeIn">
        <div class="section-header">
              <h3 class="section-title">Community</h3>
          <p class="section-description">join us at Reddit, Bitcointalk or Discord</p>
          </div>
        <div class="row">
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
            <div class="box">
              <font size=6><div class="icon"><a href="https://redd.it/7mejr3" target="_blank"><i class="fa fa-reddit"></i></a></div></font>
              <h4 class="title"><a href="https://redd.it/7mejr3" target="_blank">Reddit</a></h4>
              <p class="description"></p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
            <div class="box">
              <font size=6><div class="icon"><a href="https://bitcointalk.org/index.php?topic=2625076" target="_blank"><i class="fa fa-btc"></i></a></div></font>
              <h4 class="title"><a href="https://bitcointalk.org/index.php?topic=2625076" target="_blank">Bitcointalk.org</a></h4>
              <p class="description"></p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
            <div class="box">
              <font size=6><div class="icon"><a href="https://discord.gg/JmFHQTv" target="_blank"><i class="fa fa-comments"></i></a></div></font>
              <h4 class="title"><a href="https://discord.gg/JmFHQTv" target="_blank">Discord</a></h4>
              <p class="description"></p>
            </div>
          </div>
</div>
</div>
</center>
      </section><!-- #team -->

    <!--==========================
      Portfolio Section
    ============================-->
    <section id="portfolio">
      <div class="container wow fadeInUp">
        <div class="section-header">
          <h3 class="section-title">Mining & Pool Information</h3>
          <p class="section-description">below you'll find links to useful mining resources & xCoin mining pools</p>
        </div>
        <div class="row">

          <div class="col-lg-12">
            <ul id="portfolio-flters">
              <li data-filter=".filter-win, .filter-src, .filter-pool, .filter-block" class="filter-active">All</li>
              <li data-filter=".filter-win">Windows Mining Software</li>
              <li data-filter=".filter-src">Mining Software Source</li>
              <li data-filter=".filter-pool">Pool Information</li>
              <li data-filter=".filter-block">Blockchain Explorer</li>
            </ul>
          </div>
        </div>

        <div class="row" id="portfolio-wrapper">
          <div class="col-lg-3 col-md-6 portfolio-item filter-win">
            <a href="cpuminer-opt-3-3-8-windows.zip">
              <img src="img/portfolio/cpuminer-windows.png" alt="">
              <div class="details">
                <h4>cpuminer-opt 3.3.8</h4>
                <span>Windows Download (.zip)</span>
              </div>
            </a>
          </div>

          <div class="col-lg-3 col-md-6 portfolio-item filter-src">
            <a href="https://github.com/JayDDee/cpuminer-opt/" target="_blank">
              <img src="img/portfolio/cpuminer-source.png" alt="">
              <div class="details">
                <h4>cpuminer-opt</h4>
                <span>GitHub Source</span>
              </div>
            </a>
          </div>

          <div class="col-lg-3 col-md-6 portfolio-item filter-src">
            <a href="https://github.com/JayDDee/cpuminer-opt/releases" target="_blank">
              <img src="img/portfolio/cpuminer-releases.png" alt="">
              <div class="details">
                <h4>cpuminer-opt</h4>
                <span>GitHub Releases</span>
              </div>
            </a>
          </div>

          <div class="col-lg-3 col-md-6 portfolio-item filter-pool">
            <a href="https://arcpool.com" target="_blank">
              <img src="img/portfolio/arcpool.png" alt="">
              <div class="details">
                <h4>Arcpool.com</h4>
                <span>0.9% Fee</span>
              </div>
            </a>
          </div>

          <div class="col-lg-3 col-md-6 portfolio-item filter-pool">
            <a href="https://minerion.com" target="_blank">
              <img src="img/portfolio/minerion.png" alt="">
              <div class="details">
                <h4>Minerion.com</h4>
                <span>0.2% Fee</span>
              </div>
            </a>
          </div>

          <div class="col-lg-3 col-md-6 portfolio-item filter-pool">
            <a href="http://bitcoin-pool.de" target="_blank">
              <img src="img/portfolio/bitcoin-pool.png" alt="">
              <div class="details">
                <h4>Bitcoin-Pool.de</h4>
                <span>2.0% Fee</span>
              </div>
            </a>
          </div>

          <div class="col-lg-3 col-md-6 portfolio-item filter-block">
            <a href="http://blockchain.xcoinproject.com" target="_blank">
              <img src="img/portfolio/explorer.png" alt="">
              <div class="details">
                <h4>xCoin Blockchain Explorer</h4>
                <span></span>
              </div>
            </a>
          </div>

        </div>

      </div>
    </section><!-- #portfolio -->

  </main>

  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">

      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright 2018 <strong>xCoin Project</strong>.
      </div>
      <div class="credits">
        <!--
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Regna
        -->
        Bootstrap Templates by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/counterup/counterup.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

</body>
</html>
