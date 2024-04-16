<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php wp_head() ?>
</head>
<body>
    <header class="header">
        <div class="container">
            <div class="header__wrapper flex">
                <svg width="66" height="72" id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 83 71.98"><path fill="#FFBC0D" d="M0,72H10.23S10,4.18,22.93,4.39c13.51.22,13.4,62.19,13.4,62.19H46.41s-.6-62,12.5-62.19S72.21,72,72.21,72H83S82.11,0,59.11,0C46.18-.37,40.94,24.35,40.94,24.35,36.14,12.42,32.48,0,22.74.05,11.87,0,.56,25.59,0,72Z" class="cls-1"></path></svg>
                
                <div class="header_nav">

                  <?php wp_nav_menu( array(
                    'theme_location' => 'header_menu',
                  ))?>

                </div>

                <div class="dropdown">
                  <button class="close"><i class="fas fa-chevron-right"></i></button>
                  <nav class="nav">
                    <ul class="nav__menu">
                      <li>
                        <a href="#">About Us</a>
                        <ul class="nav__submenu">
                          <li><a href="#">Our Story</a></li>
                          <li><a href="#">Our Food</a></li>
                          <li><a href="#">Our Stores</a></li>
                        </ul>
                      </li>
                      <li><a href="#">McDelivery</a></li>
                      <li><a href="#">Careers</a></li>
                      <li><a href="#">Charity</a></li>
                      <li>
                        <a href="#">Opportunities</a>
                        <ul class="nav__submenu">
                          <li><a href="#">Property Leasing</a></li>
                          <li><a href="#">Franchising</a></li>
                        </ul>
                      </li>
                      <li>
                        <a href="#">Family Activities</a>
                        <ul class="nav__submenu">
                          <li><a href="#">Mcdo Party</a></li>
                        </ul>
                      </li>
                      <li><a href="#">NXTGEN</a></li>
                      <li><a href="#">McCafe</a></li>
                      <li><a href="#">McCafe</a></li>
                      <li><a href="#">Contact Us</a></li>
                      <li><a href="#">Digital Treats</a></li>
                    </ul>
                  </nav>
                  <div class="dropdown__footer">
                    <img src="./images/logo-footer.png" alt="">
                    <ul class="tnc">
                      <li><a href="#">Terms & Conditions</a></li>
                      <li><a href="#">Privacy Policy</a></li>
                      <li><a href="#">Contact Us</a></li>
                    </ul>
                  </div>
                </div>
                
                <div class="toggle__button">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </div>
    </header>