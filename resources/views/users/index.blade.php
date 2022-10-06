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
        <a href="/index" class="nav__logo"> Rumahku <i class="bx bxs-home-alt-2"></i> </a>

        <div class="nav__menu">
          <ul class="nav__list">
            <li class="nav__item">
              <a href="/" class="nav__link active-link">
                <i class="bx bx-home-alt-2"></i>
                <span>Home</span>
              </a>
            </li>

            <li class="nav__item">
              <a href="#featured" class="nav__link">
                <i class="bx bx-building-house"></i>
                <span>Property</span>
              </a>
            </li>

            <li class="nav__item">
              <a href="/agent" class="nav__link">
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
              <a href="/contact" class="nav__link">
                <i class="bx bx-phone"></i>
                <span>Contact</span>
              </a>
            </li>
          </ul>
        </div>

        <!-- Theme change button -->
        <i class="bx bx-flashing bx-moon change-theme" id="theme-button"></i>

        <!-- <div class="nav__button">
          <a href="" class="button"> Login </a>
        </div> -->
      </nav>
    </header>

    <!--==================== MAIN ====================-->
    <main class="main">
      <!--==================== HOME ====================-->
      <section class="home section" id="home">
        <div class="home__container container grid">
          <div class="home__data">
            <h1 class="home__title">
              Discover <br />
              Most Suitable <br />
              Property
            </h1>
            <p class="home__description">Find a variety of properties that suit you very easily, forget all difficulties in finding a residence for you</p>

            <form action="#" class="home__search">
              <i class="bx bxs-map"></i>
              <input type="search" placeholder="Search by location..." class="home__search-input" />
              <button class="button">Search</button>
            </form>

            <div class="home__value">
              <div>
                <h1 class="home__value-number">9K <span>+</span></h1>
                <span class="home__value-description">
                  Premium <br />
                  Product
                </span>
              </div>

              <div>
                <h1 class="home__value-number">2K <span>+</span></h1>
                <span class="home__value-description">
                  Happy <br />
                  Customer
                </span>
              </div>

              <div>
                <h1 class="home__value-number">28K <span>+</span></h1>
                <span class="home__value-description">
                  Awards <br />
                  Winning
                </span>
              </div>
            </div>
          </div>

          <div class="home__images">
            <div class="home__orbe"></div>

            <div class="home__img">
              <img src="assets/img/home.jpg" alt="" />
            </div>
          </div>
        </div>
      </section>

      <!-- ==================== SERVICES ==================== -->
      <section class="services section">
        <div class="container">
          <span class="section__subtitle">Our Services</span>
          <h2 class="section__title">Our Main Focus <span>.</span></h2>

          <div class="services__container">
            <div class="services__card">
              <img src="assets/img/s-1.png" alt="" class="services__img">

              <div class="services__data">
                <h3 class="services__title">Buy a Home</h3>
                <p class="services__description">Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                <a href="#" class="services__link">
                  <button class="button contact__card-button">Learn More</button> 
                </a>
              </div>
            </div>

            <div class="services__card">
              <img src="assets/img/s-2.png" alt="" class="services__img">

              <div class="services__data">
                <h3 class="services__title">Rent a Home</h3>
                <p class="services__description">Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                <a href="#" class="services__link">
                  <button class="button contact__card-button">Learn More</button> 
                </a>
              </div>
            </div>

            <div class="services__card">

              <img src="assets/img/s-3.png" alt="" class="services__img">

              <div class="services__data">
                <h3 class="services__title">Sell a Home</h3>
                <p class="services__description">Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                  <a href="#" class="services__link">
                    <button class="button contact__card-button">Learn More</button> 
                  </a>
              </div>
            </div>
          </div>


      </section>

      <!--==================== POPULAR ====================-->
      <section class="popular section" id="popular">
        <div class="container">
          <span class="section__subtitle">Best Choise</span>
          <h2 class="section__title">Popular Residences <span>.</span></h2>

          <div class="pupolar__container swiper">
            <div class="swiper-wrapper">
              <article class="popular__card swiper-slide">
                <img src="assets/img/popular1.jpg" alt="" class="popular__img" />

                <div class="popular__data">
                  <h2 class="popular__price"><span>$</span>66,356</h2>
                  <h3 class="popular__title">Garden City Assat</h3>
                  <p class="popular__description">Street The Garden City Of Miraflores, Lima - Peru Av. Sol #9876</p>
                </div>
              </article>

              <article class="popular__card swiper-slide">
                <img src="assets/img/popular2.jpg" alt="" class="popular__img" />

                <div class="popular__data">
                  <h2 class="popular__price"><span>$</span>35,159</h2>
                  <h3 class="popular__title">Gables Luxurius House</h3>
                  <p class="popular__description">Street The Garden City Of Miraflores, Lima - Peru Av. Sol #9876</p>
                </div>
              </article>

              <article class="popular__card swiper-slide">
                <img src="assets/img/popular3.jpg" alt="" class="popular__img" />

                <div class="popular__data">
                  <h2 class="popular__price"><span>$</span>75,043</h2>
                  <h3 class="popular__title">Garden Orchard City</h3>
                  <p class="popular__description">Street The Garden City Of Miraflores, Lima - Peru Av. Sol #9876</p>
                </div>
              </article>

              <article class="popular__card swiper-slide">
                <img src="assets/img/popular4.jpg" alt="" class="popular__img" />

                <div class="popular__data">
                  <h2 class="popular__price"><span>$</span>62,024</h2>
                  <h3 class="popular__title">Luxurius City Garden</h3>
                  <p class="popular__description">Street The Garden City Of Miraflores, Lima - Peru Av. Sol #9876</p>
                </div>
              </article>

              <article class="popular__card swiper-slide">
                <img src="assets/img/popular5.jpg" alt="" class="popular__img" />

                <div class="popular__data">
                  <h2 class="popular__price"><span>$</span>47,043</h2>
                  <h3 class="popular__title">Aliva Private Garden</h3>
                  <p class="popular__description">Street The Garden City Of Miraflores, Lima - Peru Av. Sol #9876</p>
                </div>
              </article>
            </div>

            <div class="swiper-button-next">
              <i class="bx bx-chevron-right"></i>
            </div>
            <div class="swiper-button-prev">
              <i class="bx bx-chevron-left"></i>
            </div>
          </div>
        </div>
      </section>

      <!--==================== FEATURED ====================-->
      <section class="featured section" id="featured">
        <div class="container">
          <span class="section__subtitle">Best Choise</span>
          <h2 class="section__title">Featured Properties <span>.</span></h2>

        <div class="box-container">
@foreach ($all as $row)
            <div class="box">
                <div class="image-container">
                    <img src="assets/img/img-1.jpg" alt="">
                    <div class="info">
                        <h3>{{$row->created_at}}</h3>
                        <h3>for {{$row->tipe}}</h3>
                    </div>
                      <div class="loc">
                    <a href="#"><i class='bx bxs-map'></i><span>{{$row->lokasi}}</span></a>
                  </div>
                    <div class="icons">
                        <a href="#"><i class='bx bxs-videos'></i><span>1</span></a>
                        <a href="#"><i class='bx bxs-photo-album'></i><span>4</span></a>
                    </div>
                </div>
                <div class="content">
                    <div class="price">
                      <h2 class="popular__price"><span>$</span>{{$row->harga}}/<span class="limit">Month</span></h2>
                        <a href="#" ><i class='bx bx-heart' ></i></a>
                        <a href="#" ><i class='bx bx-chat'></i></a>
                        <a target="_blank" href="https://wa.me/{{$row->nomor_penjual}}" ><i class='bx bxl-whatsapp' ></i></a>
                    </div> 
                    <div class="location">
                        <h3 class="popular__title">{{$row->tipe_rumah}}</h3>
                        <p class="popular__description"> {{$row->lokasi}}</p>
                    </div>
                    <div class="details">
                        <h3> <i class='bx bx-expand'></i></i> {{$row->kasur}} sqft </h3>
                        <h3> <i class='bx bxs-bed'></i>  {{$row->kasur}} </h3>
                        <h3> <i class='bx bxs-bath' ></i> {{$row->kamar_mandi}} </h3>
                    </div>
                    <div class="buttons">
                        <a href="#" class="button contact__card-button">Request info</a>
                         <a href="/{{$row->id}}/detail-property" class="button contact__card-button">View details</a>
                    </div>
                </div>
            </div>
@endforeach
            
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
                  <i class="bx bx-flashing bxl-facebook-circle"></i>
                </a>
              </li>
              <li>
                <a href="#" class="footer__sosial-link">
                  <i class="bx bx-flashing bxl-instagram-alt"></i>
                </a>
              </li>
              <li>
                <a href="#" class="footer__sosial-link">
                  <i class="bx bx-flashing bxl-pinterest"></i>
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
