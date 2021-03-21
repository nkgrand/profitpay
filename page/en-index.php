<?php
$cookie = showitonce( 'cookie' );
$sonets = showitonce( 'sonets' );
?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Profit Pay</title>
    <link rel="stylesheet" href="/css/style.css" />
    <link rel="stylesheet" href="/css/media.css">
  </head>

  <body class="body">
<?php if ( $sonets ) sonetblock( 'en' ); ?>

    <header>
      <div class="container header__container">
        <button class="nav__toggle" id="toggle"></button>

        <div class="header__left">
          <a class="header__logo">
            <img  src="/image/logo.svg"  alt="Логотип Profit Pay"  class="header__logo-img"/>
          </a>
        </div>

        <div class="header__center">
          <ul class="nav-list">
            <li class="header__nav-item">
              <a href="#section-us" class="header__nav-link">ABOUT US</a>
            </li>

            <li class="header__nav-item">
              <a href="#section-work" class="header__nav-link">FOR WEBMASTERS</a>
            </li>

            <li class="header__nav-item">
              <a href="#section-offers" class="header__nav-link">TOOLS</a>
            </li>

            <li class="header__nav-item">
              <a href="/en/blog/" class="header__nav-link">BLOG</a>
            </li>

            <li class="header__nav-item">
              <a href="/en/contact/" class="header__nav-link">CONTACT</a>
            </li>

            <li class="header__nav-item">
              <a href="/ru/" class="header__nav-link">RU</a>
            </li>

          </ul>
        </div>

        <div class="header__sigh-up-btn">
          <a  href="https://dashboard.profitpay.pro/register"  class="header__sign-up-link">REGISTRATION</a>
        </div>

        <div class="header__log-in-btn">
          <a  href="https://dashboard.profitpay.pro/login"  class="header__log-in-link">
            <span class="header__log-in-text">Login</span>
            <span class="header__log-in-icon"></span>
          </a>
        </div>
      </div>
    </header>

    <main>
      <h1 class="visually-hidden">Profit Pay</h1>

      <div class="section-hero__circle">
        <section class="section-hero">
          <div class="container section-hero__container">
            <div class="section-hero__lightnings">
              <img  src="/image/hero-lightnings.png"  alt=""  class="additional-img"/>
            </div>

            <div class="section-hero__dolls">
              <img src="/image/hero-doll.png" alt="" class="additional-img" />
            </div>

            <p class="section-hero__profit">
              You love <span class="green-color">PROFIT</span> - so do we! With us -
              <span class="green-color">$$$</span> more
            </p>

            <p class="section-hero__write-us">
              <span class="green-color">CONTACT US <br />AND GET A BOOST</span> AT THE START
            </p>

            <div class="section-hero__offers-btn-desc">
              <div class="section-hero__offers-btn">
                <a href="https://dashboard.profitpay.pro/offers" class="section-hero__offers-link">
                  <span>VIEW OFFERS</span>
                  <span class="section-hero__vector"></span></a>
              </div>

              <div>
                <p class="section-hero__link-desc">
                  Approve from 50%. We guarantee it
                </p>
              </div>
            </div>

            <p class="section-hero__profitpay">PROFITPAY</p>

            <ul class="section-hero__social-list">
              <li class="section-hero__social-item section-hero__social-item-tg">
                <a  href="https://t.me/cpafbcat"  target="_blank"  class="section-hero__social-link section-hero__social-link-tg">
                  <span  class="section-hero__social-icon section-hero__social-icon-tg"></span>

                  <span>
                    <span class="section-hero__social-name">Telegram</span>
                    <br />@PROFITPAYCPA
                  </span>
                </a>
              </li>

              <li class="section-hero__social-item section-hero__social-item-vk">
                <a  href="https://vk.com/profitpay"  target="_blank"  class="section-hero__social-link section-hero__social-link-vk">
                  <span  class="section-hero__social-icon section-hero__social-icon-vk"></span>
                  <span>
                    <span class="section-hero__social-name">Vkontakte</span>
                    <br />VK.COM/PROFITPAY
                  </span>
                </a>
              </li>
            </ul>
          </div>

<?php if ( $cookie ) cookieblock( 'en' ); ?>		

        </section>
      </div>

      <section id="section-us" class="section-us">
        <div class="section-us__container">
          <div class="section-us__info">
            <h2 class="section-heading section-us__heading">WHO ARE WE?</h2>
            <p class="section-desc section-us__desc">
              <strong>ProfitPay</strong> - CPA - the network of the direct gut of the advertiser from Europe!
            </p>
          </div>
        </div>
      </section>

      <section id="section-work" class="section-work">
        <div class="section-work__doll">
          <img src="/image/work-doll.png" alt="" class="additional-img" />
        </div>

        <div class="conf section-work__conf1"></div>
        <div class="conf section-work__conf2"></div>

        <h2 class="section-heading section-work__heading">
          WHAT YOU WILL GET WHEN WORKING WITH US?
        </h2>

        <div class="section-work__container">
          <div class="section-work__info">
            <ul class="section-work__benefit-list">
              <li  class="section-work__benefit-item section-work__benefit-item-doll">
                <p class="section-desc section-work__desc">
                  <strong>High stakes from start</strong>
                </p>
              </li>

              <li  class="section-work__benefit-item section-work__benefit-item-percent">
                <p class="section-desc section-work__desc">
                  <strong>Approve from 50%</strong>
                </p>
              </li>

              <li  class="section-work__benefit-item section-work__benefit-item-money">
                <p class="section-desc section-work__desc">
                  <strong>Daily payouts from $100</strong>
                </p>
              </li>

              <li  class="section-work__benefit-item section-work__benefit-item-call-center">
                <p class="section-desc section-work__desc">
                  <strong>Own Call Center</strong>
                </p>
              </li>

              <li  class="section-work__benefit-item section-work__benefit-item-support">
                <p class="section-desc section-work__desc">
                  <strong>Support 24/7</strong>
                </p>
              </li>

              <li  class="section-work__benefit-item section-work__benefit-item-crown">
                <p class="section-desc section-work__desc">
                  <strong>Эксклюзивные офферы и перевод промо-материалов</strong>
                </p>
              </li>
            </ul>
          </div>
        </div>
				
      </section>

      <section id="section-offers" class="section-offers">
        <div class="container">
          <div class="section-offers__doll">
            <img src="/image/work-doll.png" alt="" class="additional-img" />
          </div>

          <h2 class="section-heading section-offers__heading">BEST OFFERS</h2>

          <ul class="section-offers__offers-list">
            <li class="section-offers__offer">
              <img src="/image/offer-adult.png" alt="" class="section-offers__img section-offers__adult-img"/>

              <div class="section-offers__block section-offers__block-odd">
                <div class="section-offers__btn">
                  <a href="" class="section-offers__offer-link section-offers__offer-info">
                    <span class="section-offers__icon section-offers__icon-adult" ></span>

                    <h3 class="section-offers__offer-name">Adult</h3>

                    <span class="section-offers__icon section-offers__offer-vector" ></span>
                  </a>
                </div>

                <p class="section-offers__offer-info">
                  Approve <span class="section-heading">57%</span>
                </p>
              </div>
            </li>

            <li class="section-offers__offer">
              <img src="/image/offer-ear.png" alt="" class="section-offers__img section-offers__ear-img"/>

              <div class="section-offers__block section-offers__block-even">
                <div class="section-offers__btn">
                  <a href="" class="section-offers__offer-link section-offers__offer-info">
                    <span class="section-offers__icon section-offers__icon-ear"></span>

                    <h3 class="section-offers__offer-name">Hearing</h3>

                    <span class="section-offers__icon section-offers__offer-vector" ></span>
                  </a>
                </div>

                <p class="section-offers__offer-info">
                  Approve <span class="section-heading">76%</span>
                </p>
              </div>
            </li>

            <li class="section-offers__offer">
              <img src="/image/offer-cardio.png" alt="" class="section-offers__img section-offers__cardio-img"/>

              <div class="section-offers__block section-offers__block-odd">
                <div class="section-offers__btn">
                  <a href="" class="section-offers__offer-link section-offers__offer-info">
                    <span class="section-offers__icon section-offers__icon-cardio"></span>
                    <h3 class="section-offers__offer-name">Cholesterol</h3>
                    <span class="section-offers__icon section-offers__offer-vector"></span>
                  </a>
                </div>

                <p class="section-offers__offer-info">
                  Approve <span class="section-heading">72%</span>
                </p>
              </div>
            </li>

            <li class="section-offers__offer">
              <img  src="/image/offer-bone.png"  alt=""  class="section-offers__img section-offers__bone-img"/>

              <div class="section-offers__block section-offers__block-even">
                <div class="section-offers__btn">
                  <a  href=""  class="section-offers__offer-link section-offers__offer-info">
                    <span  class="section-offers__icon section-offers__icon-bone"></span>
                    <h3 class="section-offers__offer-name">Joints</h3>
                    <span  class="section-offers__icon section-offers__offer-vector"></span>
                  </a>
                </div>

                <p class="section-offers__offer-info">
                  Approve <span class="section-heading">67%</span>
                </p>
              </div>
            </li>

            <li class="section-offers__offer">
              <img  src="/image/offer-blood.png"  alt=""  class="section-offers__img section-offers__blood-img"/>

              <div class="section-offers__block section-offers__block-odd">
                <div class="section-offers__btn">
                  <a  href=""  class="section-offers__offer-link section-offers__offer-info">
                    <span  class="section-offers__icon section-offers__icon-blood"></span>
                    <h3 class="section-offers__offer-name">Diabetes</h3>
                    <span  class="section-offers__icon section-offers__offer-vector"></span>
                  </a>
                </div>

                <p class="section-offers__offer-info">
                  Approve <span class="section-heading">66%</span>
                </p>
              </div>
            </li>

            <li class="section-offers__offer">
              <img  src="/image/offer-eye.png"  alt=""  class="section-offers__img section-offers__eye-img"/>

              <div class="section-offers__block section-offers__block-even">
                <div class="section-offers__btn">
                  <a  href=""  class="section-offers__offer-link section-offers__offer-info">
                    <span  class="section-offers__icon section-offers__icon-eye"></span>
                    <h3 class="section-offers__offer-name">Vision</h3>
                    <span  class="section-offers__icon section-offers__offer-vector"></span>
                  </a>
                </div>

                <p class="section-offers__offer-info">
                  Approve <span class="section-heading">64%</span>
                </p>
              </div>
            </li>
          </ul>
        </div>
      </section>

      <section class="section-review">
        <div class="container">
          <div class="conf section-review__conf"></div>

          <h2 class="section-heading section-review__heading">REVIEWS</h2>

          <ul class="section-review__reviews-list">
            <li class="section-review__reviews-item">
              <div class="section-review__review">
                <p class="section-review__review-heading">
                  I wouldn't be surprised if it goes to the TOP...
                </p>

                <p class="section-review__review-text">
                  ProfitPay. They do their best for the web. Fact! There is a sense of a civilized approach to business in general. As for a young partner, a rarity. It can be regarded as defirambs, but not taken away. Technically, everything is there: it is easy, clear and works. Not broken offers, sharpened by common sense. The affiliate program for your GEO is local, so they know their target audience well. And this, for a moment, is high approve. If the $100 minimum price scares beginners, make a mistake. It is a newbie, 5 leads went, 4 approved in 15 min. Without any problems. Managers: Pavel, Alexandra. There is a suspicion that they do not sleep at all :) haha, joke, but they are constantly in touch. To me as a "Noob", they threw off the landing pages configured for the API, and even threw a bunch. Anyway, I'm with you guys.
                  Aleksandr
                </p>
              </div>

              <div class="section-review__user">
                <span>
                  <img  src="/image/review-person.svg"  alt=""  class="section-review__user-icon"/>
                </span>

                <h3 class="section-review__user-name">Aleksandr</h3>
              </div>
            </li>

            <li class="section-review__reviews-item">
              <div class="section-review__review">
                <p class="section-review__review-heading">PP is not bad</p>

                <p class="section-review__review-text">
                  I try to pour adult here, the offers are uncompressed compared to the same terra. The payout is higher significantly, which even on tests comes out a positive swarm. The output is at least a hundred.

                  The only inconvenience may be for beginners - in the land you need to prescribe API integration. Not difficult, there is an instruction, bat anyway. And the manager, it seems, can throw off everything ready. By the way, they answer almost at any time of the day. Out of a dozen pp, this one still seems to be the most normal. Mainly because of the fresh offers.
                  Mikhail
                </p>
              </div>

              <div class="section-review__user">
                <span>
                  <img  src="/image/review-person.svg"  alt=""  class="section-review__user-icon"/>
                </span>

                <h3 class="section-review__user-name">Mikhail</h3>
              </div>
            </li>

            <li class="section-review__reviews-item">
              <div class="section-review__review">
                <p class="section-review__review-heading">Review of ProfitPay</p>

                <p class="section-review__review-text">
                  Posh PP. Previously, I worked mainly with leadrock, but when I got acquainted with ProfitPay, it was something with something: high payouts for all offers, a low offer price on the site, a good KC and, as a result, a high approve. On the technical side too, everything is OK, if you have any questions - Pavel is always online. As for the payments, everything is fine here - no delays. There are also various contests in which it is a pleasure to participate, as the saying goes "a good toastmaster and interesting contests").
                  Lorrens
                </p>
              </div>

              <div class="section-review__user">
                <span>
                  <img  src="/image/review-person.svg"  alt=""  class="section-review__user-icon"/>
                </span>

                <h3 class="section-review__user-name">Lorrens</h3>
              </div>
            </li>

            <li class="section-review__reviews-item">
              <div class="section-review__review">
                <p class="section-review__review-heading">
                  First impressions of the affiliate program
                </p>

                <p class="section-review__review-text">
                  I came to the ProfitPay affiliate program for the sake of interest, as the manager was very much talking about their high approval and high-quality promos. Well, I was pleasantly surprised indeed! Now the team and I have been working with them for 1.5 months. There are no special comments. There were issues with form validation - but they were quickly eliminated. Tech suport - fire! Always in touch. So I recommend it from the bottom of my heart!
                  Anton
                </p>
              </div>

              <div class="section-review__user">
                <span>
                  <img  src="/image/review-person.svg"  alt=""  class="section-review__user-icon"/>
                </span>

                <h3 class="section-review__user-name">Anton</h3>
              </div>
            </li>
          </ul>
        </div>
      </section>

      <section class="section-team">
        <div class="container">
          <div class="section-team__lightning">
            <img  src="/image/team-lightning.png"  alt=""  class="additional-img"/>
          </div>

          <div class="section-team__doll">
            <img src="/image/team-doll.png" alt="" class="additional-img" />
          </div>

          <div class="conf section-team__conf"></div>

          <h2 class="section-heading section-team__heading">Our team:</h2>

          <ul class="section-team__team-list">
            <li class="section-team__item">
              <img src="/image/photo1.png" alt="" />
            </li>

            <li class="section-team__item">
              <img src="/image/photo2.png" alt="" />
            </li>

            <li class="section-team__item">
              <img src="/image/photo3.png" alt="" />
            </li>

            <li class="section-team__item">
              <img src="/image/photo4.png" alt="" />
            </li>

            <li class="section-team__item">
              <img src="/image/photo5.png" alt="" />
            </li>

            <li class="section-team__item">
              <img src="/image/photo6.png" alt="" />
            </li>
          </ul>

          <!-- <div class="section-team__person section-team__person1">
            <div class="section-team__name-info">
              <span class="section-team__name">Pavel lushko</span>
              <span class="section-team__vector"></span>
            </div>

            <div class="section-team__photo">
              <img src="/image/photo1.png" alt="" />
            </div>

            <div class="section-team__about">
              <p>
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Temporibus beatae velit quibusdam voluptatibus, fugit illum iusto rem error suscipit expedita aperiam officiis porro tenetur, blanditiis dolore a? Dicta, quam voluptatem.
              </p>
            </div>
          </div>

          <div class="section-team__person section-team__person2">
            <div class="section-team__name-info">
              <span class="section-team__name">Pavel lushko</span>
              <span class="section-team__vector"></span>
            </div>

            <div class="section-team__photo">
              <img src="/image/photo2.png" alt="" />
            </div>

            <div class="section-team__about">
              <p>
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Temporibus beatae velit quibusdam voluptatibus, fugit illum iusto rem error suscipit expedita aperiam officiis porro tenetur, blanditiis dolore a? Dicta, quam voluptatem.
              </p>
            </div>
          </div>

          <div class="section-team__person section-team__person3">
            <div class="section-team__name-info">
              <span class="section-team__name">Pavel lushko</span>
              <span class="section-team__vector"></span>
            </div>

            <div class="section-team__photo">
              <img src="/image/photo3.png" alt="" />
            </div>

            <div class="section-team__about">
              <p>
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Temporibus beatae velit quibusdam voluptatibus, fugit illum iusto rem error suscipit expedita aperiam officiis porro tenetur, blanditiis dolore a? Dicta, quam voluptatem.
              </p>
            </div>
          </div>

          <div class="section-team__person section-team__person4">
            <div class="section-team__name-info">
              <span class="section-team__name">Pavel lushko</span>
              <span class="section-team__vector"></span>
            </div>

            <div class="section-team__photo">
              <img src="/image/photo4.png" alt="" />
            </div>

            <div class="section-team__about">
              <p>
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Temporibus beatae velit quibusdam voluptatibus, fugit illum iusto rem error suscipit expedita aperiam officiis porro tenetur, blanditiis dolore a? Dicta, quam voluptatem.
              </p>
            </div>
          </div>

          <div class="section-team__person section-team__person5">
            <div class="section-team__name-info">
              <span class="section-team__name">Pavel lushko</span>
              <span class="section-team__vector"></span>
            </div>

            <div class="section-team__photo">
              <img src="/image/photo5.png" alt="" />
            </div>

            <div class="section-team__about">
              <p>
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Temporibus beatae velit quibusdam voluptatibus, fugit illum iusto rem error suscipit expedita aperiam officiis porro tenetur, blanditiis dolore a? Dicta, quam voluptatem.
              </p>
            </div>
          </div>

          <div class="section-team__person section-team__person6">
            <div class="section-team__name-info">
              <span class="section-team__name">Pavel lushko</span>
              <span class="section-team__vector"></span>
            </div>

            <div class="section-team__photo">
              <img src="/image/photo6.png" alt="" />
            </div>

            <div class="section-team__about">
              <p>
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Temporibus beatae velit quibusdam voluptatibus, fugit illum iusto rem error suscipit expedita aperiam officiis porro tenetur, blanditiis dolore a? Dicta, quam voluptatem.
              </p>
            </div>
          </div> -->

          <!-- <div class="section-team__person-320 section-team__person1-320">
            <p class="section-team__name-320">
              Lorem ipsum
            </p>

            <p class="section-desc">
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatem magnam accusantium odio obcaecati error tempore aspernatur, architecto officia amet corrupti. Accusantium voluptatum provident quibusdam eius velit alias excepturi. Eos, nam.
            </p>
          </div>

          <div class="section-team__person-320 section-team__person2-320">
            <p class="section-team__name-320">
              Lorem ipsum
            </p>

            <p class="section-desc">
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatem magnam accusantium odio obcaecati error tempore aspernatur, architecto officia amet corrupti. Accusantium voluptatum provident quibusdam eius velit alias excepturi. Eos, nam.
            </p>
          </div>

          <div class="section-team__person-320 section-team__person3-320">
            <p class="section-team__name-320">
              Lorem ipsum
            </p>

            <p class="section-desc">
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatem magnam accusantium odio obcaecati error tempore aspernatur, architecto officia amet corrupti. Accusantium voluptatum provident quibusdam eius velit alias excepturi. Eos, nam.
            </p>
          </div>

          <div class="section-team__person-320 section-team__person4-320">
            <p class="section-team__name-320">
              Lorem ipsum
            </p>

            <p class="section-desc">
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatem magnam accusantium odio obcaecati error tempore aspernatur, architecto officia amet corrupti. Accusantium voluptatum provident quibusdam eius velit alias excepturi. Eos, nam.
            </p>
          </div>

          <div class="section-team__person-320 section-team__person5-320">
            <p class="section-team__name-320">
              Lorem ipsum
            </p>

            <p class="section-desc">
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatem magnam accusantium odio obcaecati error tempore aspernatur, architecto officia amet corrupti. Accusantium voluptatum provident quibusdam eius velit alias excepturi. Eos, nam.
            </p>
          </div>

          <div class="section-team__person-320 section-team__person6-320">
            <p class="section-team__name-320">
              Lorem ipsum
            </p>

            <p class="section-desc">
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatem magnam accusantium odio obcaecati error tempore aspernatur, architecto officia amet corrupti. Accusantium voluptatum provident quibusdam eius velit alias excepturi. Eos, nam.
            </p>
          </div> -->

        </div>
      </section>
    </main>

    <footer>
      <div class="container footer__container">
        <div class="conf footer__conf1"></div>

        <div class="conf footer__conf2"></div>

        <h2 class="section-heading footer__heading">NETWORKS</h2>

        <ul class="footer__social-list">
          <li class="footer-social-item">
            <a href="https://t.me/cpafbcat" target="_blank" class="social-link">
              <span class="footer__icon footer__icon-tg"></span>
              <span>TELEGRAM</span>
            </a>
          </li>

          <li class="footer-social-item">
            <a  href="https://vk.com/profitpay"  target="_blank"  class="social-link">
              <span class="footer__icon footer__icon-vk"></span>
              <span>VKONTAKTE</span>
            </a>
          </li>

          <li class="footer-social-item">
            <a  href="https://www.youtube.com/channel/UCQJb5KlQ7QaWTb9ZSTVBlJw"  target="_blank"  class="social-link">
              <span class="footer__icon footer__icon-youtube"></span>
              <span>YOUTUBE</span>
            </a>
          </li>

          <li class="footer-social-item">
            <a  href="https://profitpay.pro/blog/"  target="_blank"  class="social-link">
              <span class="footer__icon footer__icon-blog"></span>
              <span>BLOG</span>
            </a>
          </li>

          <li class="footer-social-item footer__social-item-inst">
            <a  href="https://bit.ly/3rY7jdA"  target="_blank"  class="social-link">
              <span class="footer__icon footer__icon-inst"></span>
              <span>INSTAGRAM</span>
            </a>
          </li>
        </ul>

        <p class="footer__copyright">
          Copyright © 2020-2021 Profitpay.pro
        </p>
      </div>
    </footer>

    <link rel="stylesheet" href="/libs/slick/slick-theme.css" />
    <link rel="stylesheet" href="/libs/slick/slick.css" />
    <script src="/libs/jquery.min.js"></script>
    <script src="/libs/slick/slick.min.js"></script>
    <script src="/js/main.js"></script>
    <script>
      toggle.onclick = () => {
        nav.classList.toggle("expand");
      };
    </script>
  </body>
</html>
