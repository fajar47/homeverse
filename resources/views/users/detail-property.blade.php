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
  <link rel="stylesheet" href="{{asset('assets/css/swiper-bundle.min.css')}}" />

  <!--=============== CSS ===============-->
  <link rel="stylesheet" href="{{asset('assets/css/styles.css')}}" />

  <title>HOMEVERSE</title>
</head>

<body>
  <!--==================== HEADER ====================-->
  <header class="header" id="header">
    <nav class="nav container">
      <a href="/" class="nav__logo">
        Rumahku <i class="bx bxs-home-alt-2"></i>
      </a>

      <div class="nav__menu">
        <ul class="nav__list">
          <li class="nav__item">
            <a href="/index" class="nav__link">
              <i class="bx bx-home-alt-2"></i>
              <span>Home</span>
            </a>
          </li>

          <li class="nav__item">
            <a href="/property" class="nav__link">
              <i class="bx bx-building-house"></i>
              <span>Property</span>
            </a>
          </li>

          <li class="nav__item">
            <a href="/agent" class="nav__link">
              <i class="bx bx-user"></i>
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
    </nav>
  </header>

  <!--==================== MAIN ====================-->
  <main class="main">
    <!--==================== DETAILS PROPERTY ====================-->
    <section class="details section">
      <div class="container">
        <h2 class="section__title">Details Property <span>.</span></h2>

        <div class="view">
          <div class="view__out">
            <h2>
              <a href="#"><i class="bx bx-left-arrow-alt"></i>Back</a>
            </h2>
          </div>
          <div class="view__details">
            <div class="show__media">
              <div class="image-container">
                <img src="{{asset('assets/img/img-1.jpg')}}" alt="" class="jumbo" />
                <div class="info">
                  <h3>{{$all->created_at}}</h3>
                  <h3>for {{$all->tipe}}</h3>
                </div>
              </div>

              <div class="view__media pupolar__container swiper">
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <img src="{{asset('assets/img/img-2.jpg')}}" alt="" class="thumb" />
                  </div>

                  <div class="swiper-slide">
                    <img src="{{asset('assets/img/img-3.jpg')}}" alt="" class="thumb" />
                  </div>

                  <div class="swiper-slide">
                    <img src="{{asset('assets/img/img-4.jpg')}}" alt="" class="thumb" />
                  </div>

                  <div class="swiper-slide">
                    <img src="{{asset('assets/img/img-5.jpg')}}" alt="" class="thumb" />
                  </div>

                  <div class="swiper-slide">
                    <img src="{{asset('assets/img/img-1.jpg')}}" alt="" class="thumb" />
                  </div>
                </div>

                <div class="swiper-button-next">
                  <i class="bx bx-chevron-right"></i>
                </div>
                <div class="swiper-button-prev">
                  <i class="bx bx-chevron-left"></i>
                </div>
              </div>
            </div>
          </div>
          <div class="view__agent">
            <div class="property__agent">
              <h1>Agent</h1>
              <img src="{{asset('assets/img/pic-1.png')}}" alt="" />
              <h2>{{$all->nama_penjual}}</h2>
              <div class="contact__agent">
                <h3>
                  <a href="#"><i class="bx bx-envelope"></i> {{$all->email_penjual}}</a>
                </h3>
                <h3>
                  <a href="#"><i class="bx bx-phone"></i> {{$all->nomor_penjual}}</a>
                </h3>
              </div>
              <div class="agent__socmed">
                <a href="#"><i class="bx bxl-facebook"></i></a>
                <a href="https://whatsapp.com/{{$all->nomor_penjuam}}"><i class="bx bxl-twitter"> </i></a>
                <a href="#"><i class="bx bxl-instagram"></i></a>
                <a href="#"><i class="bx bxl-linkedin-square"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="view__info">
          <div class="harga" style="margin-bottom: 1rem">
            <h2><span>$</span>{{$all->harga}}/<span class="limit">Month</span></h2>
          </div>
          <div class="agent__socmed">
            <a href="#"><i class="bx bx-heart"></i></a>
            <a href="#"><i class="bx bx-chat"></i></a>
            <a href="#"><i class="bx bxl-whatsapp"></i></a>
            <a href="#"><i class="bx bx-share-alt"></i></a>
          </div>
        </div>
        <h1>{{$all->tipe_rumah}}</h1>
        <p>{{$all->lokasi}}, india - 400104</p>

        <div class="view__facilities">
          <div class="facilities__title">
            <h2>Specification Product</h2>
          </div>
          <div class="facilities">
            <div class="specification1">
              <span style="opacity: 0.8;"><i class="bx bxs-bed"></i> Beds </span>
              <span style="opacity: 0.8;"><i class="bx bxs-bath"></i> Baths </span>
              <span style="opacity: 0.8;"><i class='bx bx-home'></i>Condition </span>
              <span style="opacity: 0.8;"><i class='bx bx-wind'></i>Convenience </span>
              <span style="opacity: 0.8;"><i class='bx bxl-whatsapp'></i>No WhatsApp </span>
              <span style="opacity: 0.8;"><i class='bx bx-list-check'></i>Stock </span>
              <span style="opacity: 0.8;"><i class='bx bxs-location-plus'></i>Locations </span>
            </div>
            <div class="specification">
              <span style="opacity: 0.8;">{{$all->kasur}}</span>
              <span style="opacity: 0.8;">{{$all->kamar_mandi}}</span>
              <span style="opacity: 0.8;">{{$all->kondisi_rumah}}</span>
              <span style="opacity: 0.8;">{{$all->kenyamanan_rumah}}</span>
              <span style="opacity: 0.8;">{{$all->nomor_penjual}}</span>
              <span style="opacity: 0.8;">{{$all->stok}}</span>
              <span style="opacity: 0.8;">{{$all->lokasi}}</span>
            </div>
          </div>
        </div>

        <!-- ========== LOKASI ============ -->
        <div class="detail__property-lokasi">
          <iframe target="_blank" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1980.6270479953077!2d107.91961005872193!3d-6.86012029999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68d10cffffffff%3A0x3195814444157c42!2sAlun-alun%20Sumedang!5e0!3m2!1sid!2sid!4v1664980861945!5m2!1sid!2sid" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe><br>
        </div>
        <div class="property__description">
          <h2>Description</h2>
          <div class="read__more-container">

            <p>
              {{$all->deskripsi}}
              <span class="read__more-text">
                consectetur nemo qui hic, alias.
                Quisquam eum neque nostrum dicta accusantium in? Incidunt ullam
                consectetur minima vero numquam temporibus quos perferendis
                tenetur consequuntur aliquid, nostrum reprehenderit, quidem totam
                modi ab soluta nulla?
              </span>


            </p>
            <span class="read__more-btn">Read More...</span>

          </div>

        </div>
        <br>
        <!-- ============ KOMENTAR ============ -->
        <div class="property__description container ">
          <h2>Product Rating</h2>
          <br>
          <div class="nilai">
            <h3>4.9 dari 5</h3>
            <i class='bx bxs-star'></i>
            <i class='bx bxs-star'></i>
            <i class='bx bxs-star'></i>
            <i class='bx bxs-star'></i>
            <i class='bx bxs-star-half'></i>
          </div>
          <hr />
          <div class="kotak__komentar">
            <div class="profile__komentar">
              <div class="img__komentar">
                <img src="{{asset('assets/img/pic-1.png')}}" alt="" />
              </div>
            </div>
            <div class="komentar__total">
              <div class="komentar">
                <div class="nama">Jhon Ghoe</div>
                <div class="bintang">
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
                  <i class="bx bx-star"></i>
                </div>
                <div class="tanggal">
                  <h5>2022-02-02 22:32</h5>
                </div>
                <div class="tipe__penilaian">
                  <span style="opacity: 0.5;">Texture : Keren </span>
                  <span style="opacity: 0.5;">Kondisi : Keren </span>
                  <span style="opacity: 0.5;">Kenyamanan : Keren</span>
                </div>
                <div class="text">
                  <p>Please, dong admin.. lain kali kardusnya pastikan masih tersegel.. itu aku terima segelnya udah lepas.. aku kan jadi kawatir produknya ga full.. next tolong diperbaiki yaa Admin.. pleasee</p>
                </div>
                <div class="foto__komentar">
                  <img src="{{asset('assets/img/pic-1.png')}}" alt="" />
                  <img src="{{asset('assets/img/pic-1.png')}}" alt="" />
                  <img src="{{asset('assets/img/pic-1.png')}}" alt="" />
                  <img src="{{asset('assets/img/pic-1.png')}}" alt="" />
                </div>
              </div>
            </div>
          </div>
          <br>
          <hr>
          <div class="kotak__komentar">
            <div class="profile__komentar">
              <div class="img__komentar">
                <img src="{{asset('assets/img/pic-1.png')}}" alt="" />
              </div>
            </div>
            <div class="komentar__total">
              <div class="komentar">
                <div class="nama">Jhon Ghoe</div>
                <div class="bintang">
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
                  <i class="bx bx-star"></i>
                </div>
                <div class="tanggal">
                  <h5>2022-02-02 22:32</h5>
                </div>
                <div class="tipe__penilaian">
                  <span style="opacity: 0.5;">Texture </span>
                  <span style="opacity: 0.5;">Kondisi </span>
                  <span style="opacity: 0.5;">Kenyamanan </span>
                </div>
                <div class="text">
                  <p>Please, dong admin.. lain kali kardusnya pastikan masih tersegel.. itu aku terima segelnya udah lepas.. aku kan jadi kawatir produknya ga full.. next tolong diperbaiki yaa Admin.. pleasee</p>
                </div>
                <div class="foto__komentar">
                  <img src="{{asset('assets/img/pic-1.png')}}" alt="" />
                  <img src="{{asset('assets/img/pic-1.png')}}" alt="" />
                  <img src="{{asset('assets/img/pic-1.png')}}" alt="" />
                  <img src="{{asset('assets/img/pic-1.png')}}" alt="" />
                </div>
              </div>
            </div>
          </div>
          <br>
          <hr>
        </div>
      </div>
    </section>
    <!-- ================== Rekomended =================== -->
    <section class="popular section" id="popular">
      <div class="container">
        <span class="section__subtitle">Best Choise</span>
        <h2 class="section__title">Recomended <span>.</span></h2>

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
  </main>

  <!--==================== FOOTER ====================-->
  <footer class="footer section">
    <div class="footer__container container grid">
      <div>
        <a href="#" class="footer__logo">
          RumahKu <i class="bx bxs-home-alt-2"></i>
        </a>
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
  <script src="{{asset('assets/js/scrollreveal.min.js')}}"></script>

  <!--=============== SWIPER JS ===============-->
  <script src="{{asset('assets/js/swiper-bundle.min.js')}}"></script>

  <!--=============== MAIN JS ===============-->
  <script src="{{asset('assets/js/main.js')}}"></script>
</body>

</html>