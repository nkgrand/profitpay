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

<?php head( 'en', '/' );?>

    <main class="main">
      <h1 class="visually-hidden">Profit Pay</h1>

      <section class="section-hero">
        <div class="container section-hero__container">
          <p class="section-hero__profit">
            YOU LOVE <span class="green-color">PROFIT</span> - SO DO WE! WITH US -
            <span class="green-color">$$$</span> MORE
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

      <section id="section-us" class="section-us">
        <div class="section-us__container">
          <div class="section-us__pp-hashes">
            <span class="section-us__hashes"></span>
            <span class="section-us__pp">ProfitPay</span>
          </div>

          <div class="section-us__info">
            <h2 class="section-heading section-us__heading">WHO ARE WE?</h2>
            <p class="section-desc section-us__desc">
              <strong>ProfitPay</strong> CPA is the network of the direct gut of the advertiser from Europe!
            </p>
          </div>
        </div>
      </section>

      <section id="section-work" class="section-work">
        <div class="conf section-work__conf1"></div>
        <div class="conf section-work__conf2"></div>

        <h2 class="section-heading section-work__heading">
          WHAT WILL YOU GET WORKING WITH US?
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
                  <strong>Exclusive offers and translated promo materials</strong>
                </p>
              </li>
            </ul>
          </div>
        </div>
				
      </section>

      <section id="section-offers" class="section-offers">
        <div class="container">
          <h2 class="section-heading section-offers__heading">BEST OFFERS</h2>

          <div class="section-offers__ul">
            <ul class="section-offers__offers-list section-offers__offers-list-1">
              <li class="section-offers__offer">
                <img
                  src="/image/offer-adult.png"
                  alt=""
                  class="section-offers__img section-offers__adult-img"
                />
  
                <div class="section-offers__block section-offers__block-odd">
                  <div class="section-offers__btn">
                    <a
                      href=""
                      class="section-offers__offer-link section-offers__offer-info"
                    >
                      <span
                        class="section-offers__icon section-offers__icon-adult"
                      ></span>
  
                      <h3 class="section-offers__offer-name">Adult</h3>
  
                      <span
                        class="section-offers__icon section-offers__offer-vector"
                      ></span>
                    </a>
                  </div>
  
                  <p class="section-offers__offer-info">
                    Approve <span class="section-heading">57%</span>
                  </p>
                </div>
              </li>
  
              <li class="section-offers__offer">
                <img
                  src="/image/offer-cardio.png"
                  alt=""
                  class="section-offers__img section-offers__cardio-img"
                />
  
                <div class="section-offers__block section-offers__block-odd">
                  <div class="section-offers__btn">
                    <a
                      href=""
                      class="section-offers__offer-link section-offers__offer-info"
                    >
                      <span
                        class="section-offers__icon section-offers__icon-cardio"
                      ></span>
                      <h3 class="section-offers__offer-name">Cholesterol</h3>
                      <span
                        class="section-offers__icon section-offers__offer-vector"
                      ></span>
                    </a>
                  </div>
  
                  <p class="section-offers__offer-info">
                    Approve <span class="section-heading">72%</span>
                  </p>
                </div>
              </li>
  
              <li class="section-offers__offer">
                <img
                  src="/image/offer-blood.png"
                  alt=""
                  class="section-offers__img section-offers__blood-img"
                />
  
                <div class="section-offers__block section-offers__block-odd">
                  <div class="section-offers__btn">
                    <a
                      href=""
                      class="section-offers__offer-link section-offers__offer-info"
                    >
                      <span
                        class="section-offers__icon section-offers__icon-blood"
                      ></span>
                      <h3 class="section-offers__offer-name">Diabetes</h3>
                      <span
                        class="section-offers__icon section-offers__offer-vector"
                      ></span>
                    </a>
                  </div>
  
                  <p class="section-offers__offer-info">
                    Approve <span class="section-heading">66%</span>
                  </p>
                </div>
              </li>
            </ul>
  
            <ul class="section-offers__offers-list section-offers__offers-list-2">
              <li class="section-offers__offer">
                <img
                  src="/image/offer-ear.png"
                  alt=""
                  class="section-offers__img section-offers__ear-img"
                />
  
                <div class="section-offers__block section-offers__block-even">
                  <div class="section-offers__btn">
                    <a
                      href=""
                      class="section-offers__offer-link section-offers__offer-info"
                    >
                      <span
                        class="section-offers__icon section-offers__icon-ear"
                      ></span>
  
                      <h3 class="section-offers__offer-name">Hearing</h3>
  
                      <span
                        class="section-offers__icon section-offers__offer-vector"
                      ></span>
                    </a>
                  </div>
  
                  <p class="section-offers__offer-info">
                    Approve <span class="section-heading">76%</span>
                  </p>
                </div>
              </li>
  
              <li class="section-offers__offer">
                <img
                  src="/image/offer-bone.png"
                  alt=""
                  class="section-offers__img section-offers__bone-img"
                />
  
                <div class="section-offers__block section-offers__block-even">
                  <div class="section-offers__btn">
                    <a
                      href=""
                      class="section-offers__offer-link section-offers__offer-info"
                    >
                      <span
                        class="section-offers__icon section-offers__icon-bone"
                      ></span>
                      <h3 class="section-offers__offer-name">Joints</h3>
                      <span
                        class="section-offers__icon section-offers__offer-vector"
                      ></span>
                    </a>
                  </div>
  
                  <p class="section-offers__offer-info">
                    Approve <span class="section-heading">67%</span>
                  </p>
                </div>
              </li>
  
              <li class="section-offers__offer">
                <img
                  src="/image/offer-eye.png"
                  alt=""
                  class="section-offers__img section-offers__eye-img"
                />
  
                <div class="section-offers__block section-offers__block-even">
                  <div class="section-offers__btn">
                    <a
                      href=""
                      class="section-offers__offer-link section-offers__offer-info"
                    >
                      <span
                        class="section-offers__icon section-offers__icon-eye"
                      ></span>
                      <h3 class="section-offers__offer-name">Vision</h3>
                      <span
                        class="section-offers__icon section-offers__offer-vector"
                      ></span>
                    </a>
                  </div>
  
                  <p class="section-offers__offer-info">
                    Approve <span class="section-heading">64%</span>
                  </p>
                </div>
              </li>
            </ul>
          </div>
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
          <div class="conf section-team__conf"></div>

          <h2 class="section-heading section-team__heading">Our team:</h2>

          <div class="section-team__team-list">
            <div class="section-team__item">
              <img src="/image/photo1.png" alt="" id="person1" />
            </div>

            <div class="section-team__item">
              <img src="/image/photo2.png" alt="" id="person2" />
            </div>

            <div class="section-team__item">
              <img src="/image/photo3.png" alt="" id="person3" />
            </div>

            <div class="section-team__item">
              <img src="/image/photo4.png" alt="" id="person4" />
            </div>

            <div class="section-team__item">
              <img src="/image/photo5.png" alt="" id="person5" />
            </div>

            <div class="section-team__item">
              <img src="/image/photo6.png" alt="" id="person6" />
            </div>
          </div>

          <!-- Detailed blok of team player -->
          <div
            class="section-team__person section-team__person1 person_detailed"
          >
            <div class="section-team__name-info">
              <span class="section-team__name">Pavel</span>
              <span class="section-team__vector"></span>
            </div>

            <div class="section-team__photo">
              <img src="/image/photo1.png" alt="" />
            </div>

            <div class="section-team__about">
              <p><strong>Profit Pay Affiliate Manager</strong></p>
              <p>
                I develop the network from the technical part. If you need a specific prelend with a form or need an integration - call me. I also help novice web users with advice on how and what to start with. In the past, I worked with FB and Google.
              </p>
            </div>
          </div>

          <!-- Detailed blok of team player -->

          <div
            class="section-team__person section-team__person2 person_detailed"
          >
            <div class="section-team__name-info">
              <span class="section-team__name">Aleksandra</span>
              <span class="section-team__vector"></span>
            </div>

            <div class="section-team__photo">
              <img src="/image/photo2.png" alt="" />
            </div>

            <div class="section-team__about">
              <p><strong>Profit Pay Affiliate Manager</strong></p>
              <p>
                I find the perfect package for you that will bring you good profit. I will make sure that you receive your money on time. I closely follow the work of the call center so that you can be satisfied with the profits. And also a huge motivation for our team - ProfitPay for me will become the best PP soon. Are you looking for a tasty, highly appreciated offer? E-mail me! 
              </p>
            </div>
          </div>

          <div
            class="section-team__person section-team__person3 person_detailed"
          >
            <div class="section-team__name-info">
              <span class="section-team__name">Karol</span>
              <span class="section-team__vector"></span>
            </div>

            <div class="section-team__photo">
              <img src="/image/photo3.png" alt="" />
            </div>

            <div class="section-team__about">
              <p><strong>Graphic designer of ProfitPay</strong></p>
              <p>
                I create creative visions that I reflect in my graphic designs. From the very beginning, I take care of the modern and consistent appearance of the entire PP network. All graphics, posts or landing pages that you see in our network are mine. I have millions of creative ideas in my head everyday, which I hope, you will see in our ProfitPay network soon.
              </p>
            </div>
          </div>

          <div
            class="section-team__person section-team__person4 person_detailed"
          >
            <div class="section-team__name-info">
              <span class="section-team__name">Gabrysia</span>
              <span class="section-team__vector"></span>
            </div>

            <div class="section-team__photo">
              <img src="/image/photo4.png" alt="" />
            </div>

            <div class="section-team__about">
              <p><strong>Copywriter ProfitPay</strong></p>
              <p>
                I have a very crazy view of the world around me. I think it can be seen from the texts that I am writing. I love doing it, and writing content on ProfitPay is a real honor. I hope that you really like what you are reading. If you do not – let me know and I will start over.
              </p>
            </div>
          </div>

          <div
            class="section-team__person section-team__person5 person_detailed"
          >
            <div class="section-team__name-info">
              <span class="section-team__name">Tomek</span>
              <span class="section-team__vector"></span>
            </div>

            <div class="section-team__photo">
              <img src="/image/photo5.png" alt="" />
            </div>

            <div class="section-team__about">
              <p><strong>Front-end developer of ProfitPay</strong></p>
              <p>
                I definitely combine my work with passion. I deal with creating, supporting websites and combining offers with CRM on a daily basis. I don't like standing still - personal development is my second name. In my free time, I deepen my Front-end skills, read Sci-Fi books and beat opponents in LOL game.
              </p>
            </div>
          </div>

          <div
            class="section-team__person section-team__person6 person_detailed"
          >
            <div class="section-team__name-info">
              <span class="section-team__name">Magda</span>
              <span class="section-team__vector"></span>
            </div>

            <div class="section-team__photo">
              <img src="/image/photo6.png" alt="" />
            </div>

            <div class="section-team__about">
              <p><strong>Senior Copywriter of Profitpay</strong></p>
              <p>
                Creating landing page content is my main task. My work is also based on cooperation with a graphic designer and programmer. I make sure that our pages are stylistically and visually correct. I will find every - even the smallest mistake and nothing can be hidden from me.
              </p>
            </div>
          </div>
        </div>
      </section>
    </main>

	<?php footer('en'); ?>

    <link rel="stylesheet" href="/libs/slick/slick-theme.css" />
    <link rel="stylesheet" href="/libs/slick/slick.css" />
    <script src="/libs/jquery.min.js"></script>
    <script src="/libs/slick/slick.min.js"></script>
    <script src="/js/main.js"></script>
    <script src="/js/personClick.js"></script>
    <script>
      toggle.onclick = () => {
        nav.classList.toggle("expand");
      };
    </script>
  </body>
</html>
