<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!--=============== FAVICON ===============-->
    <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon" />

    <!--=============== BOXICONS ===============-->
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />

    <!--=============== SWIPER CSS ===============-->
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css " />

    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="assets/css/styles.css" />

    <title>HOMEVERSE</title>
  </head>
  <body>
    <!--==================== HEADER ====================-->
    <header class="header" id="header">
      <nav class="nav container">
        <a href="#" class="nav__logo"> Rumahku <i class="bx bxs-home-alt-2"></i> </a>

        <div class="nav__menu">
          <ul class="nav__list">
            <li class="nav__item">
              <a href="/index" class="nav__link ">
                <i class="bx bx-home-alt-2"></i>
                <span>Home</span>
              </a>
            </li>

            <li class="nav__item">
              <a href="/property" class="nav__link active-link">
                <i class="bx bx-building-house"></i>
                <span>Property</span>
              </a>
            </li>

            <li class="nav__item">
              <a href="/agent" class="nav__link ">
                <i class='bx bx-user'></i>
                <span>Agent</span>
              </a>
            </li>

            <li class="nav__item">
              <a href="/faqs" class="nav__link">
                <i class="bx bx-award"></i>
                <span>Faqs</span>
              </a>
            </li>

            <li class="nav__item">
              <a href="/contact" class="nav__link ">
                <i class="bx bx-phone"></i>
                <span>Contact</span>
              </a>
            </li>
          </ul>
        </div>

        <!-- Theme change button -->
        <i class="bx bx-flashing bx-moon change-theme" id="theme-button"></i>

       
      </nav>
    </header>

    <!--==================== MAIN ====================-->
    <main class="main">

      <!--==================== FEATURED ====================-->
      <section class="featured section" id="featured">
        <div class="container">
          <span class="section__subtitle">Best Choise</span>
          <h2 class="section__title">Featured Properties <span>.</span></h2>

        <div class="box-container">

            <div class="box">
                <div class="image-container">
                    <img src="assets/img/img-1.jpg" alt="">
                    <div class="info">
                        <h3>3 days ago</h3>
                        <h3>for rent</h3>
                    </div>
                      <div class="loc">
                    <a href="#"><i class='bx bxs-map'></i><span>SUMEDANG</span></a>
                  </div>
                    <div class="icons">
                        <a href="#"><i class='bx bxs-videos'></i><span>1</span></a>
                        <a href="#"><i class='bx bxs-photo-album'></i><span>4</span></a>
                    </div>
                </div>
                <div class="content">
                    <div class="price">
                       <h2 class="popular__price"><span>$</span>25,000/<span class="limit">Month</span></h2>
                        <a href="#" ><i class='bx bx-heart' ></i></a>
                        <a href="#" ><i class='bx bx-chat'></i></a>
                        <a href="#" ><i class='bx bxl-whatsapp' ></i></a>
                    </div>
                    <div class="location">
                        <h3 class="popular__title">Modern Apartments</h3>
                        <p class="popular__description"> jogeshwari west, mumbai, india - 400104</p>
                    </div>
                    <div class="details">
                        <h3> <i class='bx bx-expand'></i></i> 3500 sqft </h3>
                        <h3> <i class='bx bxs-bed'></i> 3 beds </h3>
                        <h3> <i class='bx bxs-bath' ></i> 2 baths </h3>
                    </div>
                    <div class="buttons">
                        <a href="#" class="button contact__card-button">Request info</a>
                        <a href="detail" class="button contact__card-button">View details</a>
                    </div>
                </div>
            </div>

            <div class="box">
              <div class="image-container">
                  <img src="assets/img/img-2.jpg" alt="">
                  <div class="info">
                      <h3>3 days ago</h3>
                      <h3>for rent</h3>
                  </div>
                  <div class="loc">
                    <a href="#"><i class='bx bxs-map'></i><span>SUMEDANG</span></a>
                  </div>
                  <div class="icons">
                    <div class="icon"></div>
                      <a href="#"><i class='bx bxs-videos'></i><span>1</span></a>
                      <a href="#"><i class='bx bxs-photo-album'></i><span>4</span></a>
                  </div>
              </div>
              <div class="content">
                  <div class="price">
                      <h2 class="popular__price"><span>$</span>25,000/<span class="limit">Month</span></h2>
                      <a href="#" ><i class='bx bx-heart' ></i></a>
                      <a href="#" ><i class='bx bx-chat'></i></a>
                      <a href="#" ><i class='bx bxl-whatsapp' ></i></a>
                  </div>
                  <div class="location">
                      <h3 class="popular__title">Modern Apartments</h3>
                      <p class="popular__description"> jogeshwari west, mumbai, india - 400104</p>
                  </div>
                  <div class="details">
                      <h3> <i class='bx bx-expand'></i></i> 3500 sqft </h3>
                      <h3> <i class='bx bxs-bed'></i> 3 beds </h3>
                      <h3> <i class='bx bxs-bath' ></i> 2 baths </h3>
                  </div>
                  <div class="buttons">
                        <a href="#" class="button contact__card-button">Request info</a>
                        <a href="detail" class="button contact__card-button">View details</a>
                    </div>
              </div>
          </div>

            <div class="box">
              <div class="image-container">
                  <img src="assets/img/img-3.jpg" alt="">
                  <div class="info">
                      <h3>3 days ago</h3>
                      <h3>for rent</h3>
                  </div>
                  <div class="loc">
                    <a href="#"><i class='bx bxs-map'></i><span>SUMEDANG</span></a>
                  </div>
                  <div class="icons">
                      <a href="#"><i class='bx bxs-videos'></i><span>1</span></a>
                      <a href="#"><i class='bx bxs-photo-album'></i><span>4</span></a>
                  </div>
              </div>
              <div class="content">
                  <div class="price">
                      <h2 class="popular__price"><span>$</span>25,000/<span class="limit">Month</span></h2>
                      <a href="#" ><i class='bx bx-heart' ></i></a>
                      <a href="#" ><i class='bx bx-chat'></i></a>
                      <a href="#" ><i class='bx bxl-whatsapp' ></i></a>
                  </div>
                  <div class="location">
                      <h3 class="popular__title">Modern Apartments</h3>
                      <p class="popular__description"> jogeshwari west, mumbai, india - 400104</p>
                  </div>
                  <div class="details">
                      <h3> <i class='bx bx-expand'></i></i> 3500 sqft </h3>
                      <h3> <i class='bx bxs-bed'></i> 3 beds </h3>
                      <h3> <i class='bx bxs-bath' ></i> 2 baths </h3>
                  </div>
                  <div class="buttons">
                        <a href="#" class="button contact__card-button">Request info</a>
                        <a href="detail" class="button contact__card-button">View details</a>
                    </div>
              </div>
          </div>

            <div class="box">
              <div class="image-container">
                  <img src="assets/img/img-4.jpg" alt="">
                  <div class="info">
                      <h3>3 days ago</h3>
                      <h3>for rent</h3>
                  </div>
                  <div class="loc">
                    <a href="#"><i class='bx bxs-map'></i><span>SUMEDANG</span></a>
                  </div>
                  <div class="icons">
                      <a href="#"><i class='bx bxs-videos'></i><span>1</span></a>
                      <a href="#"><i class='bx bxs-photo-album'></i><span>4</span></a>
                  </div>
              </div>
              <div class="content">
                  <div class="price">
                      <h2 class="popular__price"><span>$</span>25,000/<span class="limit">Month</span></h2>
                      <a href="#" ><i class='bx bx-heart' ></i></a>
                      <a href="#" ><i class='bx bx-chat'></i></a>
                      <a href="#" ><i class='bx bxl-whatsapp' ></i></a>
                  </div>
                  <div class="location">
                      <h3 class="popular__title">Modern Apartments</h3>
                      <p class="popular__description"> jogeshwari west, mumbai, india - 400104</p>
                  </div>
                  <div class="details">
                      <h3> <i class='bx bx-expand'></i></i> 3500 sqft </h3>
                      <h3> <i class='bx bxs-bed'></i> 3 beds </h3>
                      <h3> <i class='bx bxs-bath' ></i> 2 baths </h3>
                  </div>
                  <div class="buttons">
                        <a href="#" class="button contact__card-button">Request info</a>
                        <a href="detail" class="button contact__card-button">View details</a>
                    </div>
              </div>
          </div>

            <div class="box">
              <div class="image-container">
                  <img src="assets/img/img-5.jpg" alt="">
                  <div class="info">
                      <h3>3 days ago</h3>
                      <h3>for rent</h3>
                  </div>
                  <div class="loc">
                    <a href="#"><i class='bx bxs-map'></i><span>SUMEDANG</span></a>
                  </div>
                  <div class="icons">
                      <a href="#"><i class='bx bxs-videos'></i><span>1</span></a>
                      <a href="#"><i class='bx bxs-photo-album'></i><span>4</span></a>
                  </div>
              </div>
              <div class="content">
                  <div class="price">
                      <h2 class="popular__price"><span>$</span>25,000/<span class="limit">Month</span></h2>
                      <a href="#" ><i class='bx bx-heart' ></i></a>
                      <a href="#" ><i class='bx bx-chat'></i></a>
                      <a href="#" ><i class='bx bxl-whatsapp' ></i></a>
                  </div>
                  <div class="location">
                      <h3 class="popular__title">Modern Apartments</h3>
                      <p class="popular__description"> jogeshwari west, mumbai, india - 400104</p>
                  </div>
                  <div class="details">
                      <h3> <i class='bx bx-expand'></i></i> 3500 sqft </h3>
                      <h3> <i class='bx bxs-bed'></i> 3 beds </h3>
                      <h3> <i class='bx bxs-bath' ></i> 2 baths </h3>
                  </div>
                  <div class="buttons">
                        <a href="#" class="button contact__card-button">Request info</a>
                        <a href="detail" class="button contact__card-button">View details</a>
                    </div>
              </div>
          </div>

            <div class="box">
              <div class="image-container">
                  <img src="assets/img/img-6.jpg" alt="">
                  <div class="info">
                      <h3>3 days ago</h3>
                      <h3>for rent</h3>
                  </div>
                  <div class="loc">
                    <a href="#"><i class='bx bxs-map'></i><span>SUMEDANG</span></a>
                  </div>
                  <div class="icons">
                      <a href="#"><i class='bx bxs-videos'></i><span>1</span></a>
                      <a href="#"><i class='bx bxs-photo-album'></i><span>4</span></a>
                  </div>
              </div>
              <div class="content">
                  <div class="price">
                      <h2 class="popular__price"><span>$</span>25,000/<span class="limit">Month</span></h2>
                      <a href="#" ><i class='bx bx-heart' ></i></a>
                      <a href="#" ><i class='bx bx-chat'></i></a>
                      <a href="#" ><i class='bx bxl-whatsapp' ></i></a>
                  </div>
                  <div class="location">
                      <h3 class="popular__title">Modern Apartments</h3>
                      <p class="popular__description"> jogeshwari west, mumbai, india - 400104</p>
                  </div>
                  <div class="details">
                      <h3> <i class='bx bx-expand'></i></i> 3500 sqft </h3>
                      <h3> <i class='bx bxs-bed'></i> 3 beds </h3>
                      <h3> <i class='bx bxs-bath' ></i> 2 baths </h3>
                  </div>
                  <div class="buttons">
                        <a href="#" class="button contact__card-button">Request info</a>
                        <a href="detail" class="button contact__card-button">View details</a>
                    </div>
              </div>
          </div>
          </div>
        </div>
        
      </section>

    </main>

    <!--==================== FOOTER ====================-->
    <footer class="footer section">
      <div class="footer__container container grid">
        <div>
          <a href="#" class="footer__logo"> RumahKu <i class="bx bxs-home-alt-2"></i> </a>
          <p class="footer__description">
            Our vision is to make all peopel <br />
            the best place to live for them.
          </p>
        </div>

        <div class="footer__content">
          <div>
            <h3 class="footer__title">About</h3>
            <ul class="footer__links">
              <li>
                <a href="#" class="footer__link">About Us</a>
              </li>
              <li>
                <a href="#" class="footer__link">Features</a>
              </li>
              <li>
                <a href="#" class="footer__link">News & blog</a>
              </li>
            </ul>
          </div>

          <div>
            <h3 class="footer__title">Company</h3>
            <ul class="footer__links">
              <li>
                <a href="#" class="footer__link">How We Work</a>
              </li>
              <li>
                <a href="#" class="footer__link">Capital</a>
              </li>
              <li>
                <a href="#" class="footer__link">Security</a>
              </li>
            </ul>
          </div>

          <div>
            <h3 class="footer__title">Support</h3>
            <ul class="footer__links">
              <li>
                <a href="#" class="footer__link">FAQs</a>
              </li>
              <li>
                <a href="#" class="footer__link">Support Center</a>
              </li>
              <li>
                <a href="#" class="footer__link">Contact Us</a>
              </li>
            </ul>
          </div>

          <div>
            <h3 class="footer__title">Follow Us</h3>
            <ul class="footer__sosial">
              <li>
                <a href="#" class="footer__sosial-link">
                  <i class="bx bxl-facebook-circle"></i>
                </a>
              </li>
              <li>
                <a href="#" class="footer__sosial-link">
                  <i class="bx bxl-instagram-alt"></i>
                </a>
              </li>
              <li>
                <a href="#" class="footer__sosial-link">
                  <i class="bx bxl-pinterest"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>

      <div class="footer__info container">
        <span class="footer__copy"> &#169; uyuyyy. All Rigths reserved </span>

        <div class="footer__privacy">
          <a href="#">Terms & Agreements</a>
          <a href="#">Privacy Policy</a>
        </div>
      </div>
    </footer>

    <!--========== SCROLL UP ==========-->
    <a href="#" class="scrollup" id="scroll-up">
      <i class="bx bx-chevrons-up"></i>
    </a>

    <!--=============== SCROLLREVEAL ===============-->
    <script src="assets/js/scrollreveal.min.js"></script>

    <!--=============== SWIPER JS ===============-->
    <script src="assets/js/swiper-bundle.min.js"></script>

    <!--=============== MAIN JS ===============-->
    <script src="assets/js/main.js"></script>
  </body>
</html>
