<?php
$cookie = showitonce( 'cookie' );
$sonets = showitonce( 'sonets' );
?><!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Profit Pay</title>
    <link rel="stylesheet" href="/css/style.css" />
    <link rel="stylesheet" href="/css/media.css" />
  </head>

  <body class="body">

<?php if ( $sonets ) sonetblock( 'ru' ); ?>

    <header>
      <div class="container header__container">
        <nav class="nav" id="nav">
          <button class="nav__toggle" id="toggle"></button>

          <div class="header__log-in-btn-menu">
            <a
              href="https://dashboard.profitpay.pro/login"
              class="header__log-in-link"
            >
              <span class="header__log-in-text-menu">Вход</span>
              <span class="header__log-in-icon"></span>
            </a>
          </div>

          <div class="header__left">
            <a class="header__logo">
              <img
                src="/image/logo.svg"
                alt="Логотип Profit Pay"
                class="header__logo-img"
              />
            </a>
          </div>

          <div class="header__center">
            <!-- <button class="nav__toggle" id="toggle"></button> -->
            <ul class="nav-list">
              <li class="header__nav-item">
                <a href="/ru/#section-us" class="nav-link">
                  <span>о нас</span> 
                  <span class="menu-vector"></span>
                </a>
              </li>

              <li class="header__nav-item">
                <a href="/ru/#section-work" class="nav-link">
                  <span>вебмастерам</span> 
                  <span class="menu-vector"></span>
                </a>
              </li>

              <li class="header__nav-item">
                <a href="/ru/#section-offers" class="nav-link">
                  <span>офферы</span> 
                  <span class="menu-vector"></span>
                </a>
              </li>

              <li class="header__nav-item">
                <a href="/blog/" class="nav-link">
                  <span>блог</span> 
                  <span class="menu-vector"></span>
                </a>
              </li>

              <li class="header__nav-item">
                <a href="/contact/" class="nav-link">
                  <span>контакт</span> 
                  <span class="menu-vector"></span>
                </a>
              </li>

              <li class="header__nav-item">
                <a href="/en/" class="nav-link">
                  <span>en</span> 
                  <span class="menu-vector"></span>
                </a>
              </li>
            </ul>

            <!-- <ul class="nav-list">
            <li class="header__nav-item">
              <a href="#section-us" class="nav-link">О НАС</a>
            </li>

            <li class="header__nav-item">
              <a href="#section-work" class="nav-link">ВЕБМАСТЕРАМ</a>
            </li>

            <li class="header__nav-item">
              <a href="#section-offers" class="nav-link">ИНСТРУМЕНТЫ</a>
            </li>

            <li class="header__nav-item">
              <a href="" class="nav-link">БЛОГ</a>
            </li>

            <li class="header__nav-item">
              <a href="" class="nav-link">КОНТАКТ</a>
            </li>
          </ul> -->
          </div>

          <div class="header__sigh-up-btn">
            <a
              href="https://dashboard.profitpay.pro/register"
              class="header__sign-up-link"
              >РЕГИСТРАЦИЯ</a
            >
          </div>

          <div class="header__log-in-btn">
            <a
              href="https://dashboard.profitpay.pro/login"
              class="header__log-in-link"
            >
              <span class="header__log-in-text">Вход</span>
              <span class="header__log-in-icon"></span>
            </a>
          </div>
        </nav>
      </div>
    </header>

    <main>
      <h1 class="visually-hidden">Profit Pay</h1>

      <section class="section-hero">
        <div class="container section-hero__container">
          <p class="section-hero__profit">
            ЛЮБИШЬ <span class="green-color">PROFIT</span> - МЫ ТОЖЕ! С НАМИ -
            <span class="green-color">$$$</span> БОЛЬШЕ
          </p>

          <p class="section-hero__write-us">
            <span class="green-color">НАПИШИ НАМ <br />И ПОЛУЧИ БУСТ</span> НА
            СТАРТЕ
          </p>

          <div class="section-hero__offers-btn-desc">
            <div class="section-hero__offers-btn">
              <a
                href="https://dashboard.profitpay.pro/offers"
                class="section-hero__offers-link"
              >
                <span>СМОТРЕТЬ ОФФЕРЫ</span>
                <span class="section-hero__vector"></span
              ></a>
            </div>

            <div>
              <p class="section-hero__link-desc">
                Аппрув от 60%. Гарантируем
              </p>
            </div>
          </div>

          <ul class="section-hero__social-list">
            <li class="section-hero__social-item section-hero__social-item-tg">
              <a  href="https://t.me/cpafbcat" target="_blank" class="section-hero__social-link section-hero__social-link-tg">
                <span class="section-hero__social-icon section-hero__social-icon-tg"></span>
                <span>
                  <span class="section-hero__social-name">Telegram</span>
                  <br />@PROFITPAYCPA
                </span>
              </a>
            </li>

            <li
              class="section-hero__social-item section-hero__social-item-vk"
            >
              <a
                href="https://vk.com/profitpay"
                target="_blank"
                class="section-hero__social-link section-hero__social-link-vk"
              >
                <span
                  class="section-hero__social-icon section-hero__social-icon-vk"
                ></span>
                <span>
                  <span class="section-hero__social-name">Vkontakte</span>
                  <br />VK.COM/PROFITPAY
                </span>
              </a>
            </li>
          </ul>
        </div>

<?php if ( $cookie ) cookieblock( 'ru' ); ?>

      </section>

    <section id="section-us" class="section-us">
      <div class="section-us__container">
        <div class="section-us__pp-hashes">
          <span class="section-us__hashes"></span>
          <span class="section-us__pp">ProfitPay</span>
        </div>

        <div class="section-us__info">
          <h2 class="section-heading section-us__heading">КТО МЫ?</h2>
          <p class="section-desc section-us__desc">
            <strong>ProfitPay</strong> - CPA-сеть прямого нутра рекламодателя из Европы!
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
          Работая с нами, ты получишь
        </h2>

        <div class="section-work__container">
          <div class="section-work__info">
            <ul class="section-work__benefit-list">
              <li
                class="section-work__benefit-item section-work__benefit-item-doll"
              >
                <p class="section-desc section-work__desc">
                  <strong>Высокие ставки со старта</strong>
                </p>
              </li>

              <li
                class="section-work__benefit-item section-work__benefit-item-percent"
              >
                <p class="section-desc section-work__desc">
                  <strong>Апрув с кэшем - от 60%</strong>
                </p>
              </li>

              <li
                class="section-work__benefit-item section-work__benefit-item-money"
              >
                <p class="section-desc section-work__desc">
                  <strong>Ежедневные выплаты от 100$</strong>
                </p>
              </li>

              <li
                class="section-work__benefit-item section-work__benefit-item-call-center"
              >
                <p class="section-desc section-work__desc">
                  <strong>Собственный Call Center</strong>
                </p>
              </li>

              <li
                class="section-work__benefit-item section-work__benefit-item-support"
              >
                <p class="section-desc section-work__desc">
                  <strong>Саппорт, который на связи 24/7</strong>
                </p>
              </li>

              <li
                class="section-work__benefit-item section-work__benefit-item-crown"
              >
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

          <h2 class="section-heading section-offers__heading">Лучшие офферы</h2>

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
  
                      <h3 class="section-offers__offer-name">Адалт</h3>
  
                      <span
                        class="section-offers__icon section-offers__offer-vector"
                      ></span>
                    </a>
                  </div>
  
                  <p class="section-offers__offer-info">
                    Апрув <span class="section-heading">57%</span>
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
                      <h3 class="section-offers__offer-name">Холестерин</h3>
                      <span
                        class="section-offers__icon section-offers__offer-vector"
                      ></span>
                    </a>
                  </div>
  
                  <p class="section-offers__offer-info">
                    Апрув <span class="section-heading">72%</span>
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
                      <h3 class="section-offers__offer-name">Диабет</h3>
                      <span
                        class="section-offers__icon section-offers__offer-vector"
                      ></span>
                    </a>
                  </div>
  
                  <p class="section-offers__offer-info">
                    Апрув <span class="section-heading">66%</span>
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
  
                      <h3 class="section-offers__offer-name">Слух</h3>
  
                      <span
                        class="section-offers__icon section-offers__offer-vector"
                      ></span>
                    </a>
                  </div>
  
                  <p class="section-offers__offer-info">
                    Апрув <span class="section-heading">76%</span>
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
                      <h3 class="section-offers__offer-name">Суставы</h3>
                      <span
                        class="section-offers__icon section-offers__offer-vector"
                      ></span>
                    </a>
                  </div>
  
                  <p class="section-offers__offer-info">
                    Апрув <span class="section-heading">67%</span>
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
                      <h3 class="section-offers__offer-name">Зрение</h3>
                      <span
                        class="section-offers__icon section-offers__offer-vector"
                      ></span>
                    </a>
                  </div>
  
                  <p class="section-offers__offer-info">
                    Апрув <span class="section-heading">64%</span>
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

          <h2 class="section-heading section-review__heading">Отзывы</h2>

          <ul class="section-review__reviews-list">
            <li class="section-review__reviews-item">
              <div class="section-review__review">
                <p class="section-review__review-heading">
                  Не удивлюсь, если выйдет в ТОП...
                </p>

                <p class="section-review__review-text">
                  ProfitPay. Стараются для вэбов. Факт! Чувствуется цивилизованный подход к бизнесу в целом. Как для молодой партнерки, редкость. Можно расценивать - как дефирамбы, но не отнять. Технически все есть: легко, понятно, работает. Не заезженые офферы, заточены под здравый смысл. Партнерка для своего ГЕО местная, поэтому хорошо знают свою ЦА. А это, на минуточку, высокий апрув. Если 100$ минималка пугает новичков, ошибаються. Сам новичек, зашло 5 лидов, 4 апрува. 15 мин. на вывод. Вааще без проблем. Менеджеры: Павел, Александра. Есть подозрение что не спят вообще...) Шутка, но на связи постоянно. Мне как "Нубу", скинули настроенные под API ленды, и даже связочку подкинули. Короче, я с Вами ребята.
                </p>
              </div>

              <div class="section-review__user">
                <span>
                  <img
                    src="/image/review-person.svg"
                    alt=""
                    class="section-review__user-icon"
                  />
                </span>

                <h3 class="section-review__user-name">Aleksandr</h3>
              </div>
            </li>

            <li class="section-review__reviews-item">
              <div class="section-review__review">
                <p class="section-review__review-heading">ПП неплохая</p>

                <p class="section-review__review-text">
                  Пробую тут адалт лить, офферы неотжатые по сравнению с той же террой. Выплата выше ощутимо, что даже на тестах выходит плюсовой рои. Вывод минимум сотка. 
                  
                  Единственное неудобство может быть для новичков - в ленды надо прописывать апи интеграцию. Не сложно, есть инстуркция, бат энивей. Да и манагер, вроде как, может всё готовое скинуть. Кстати отвечают практически в любое время суток. Из десятка пп, даже бурж, эта пока что кажется самой норм. В основном из-за свежих офферов
                </p>
              </div>

              <div class="section-review__user">
                <span>
                  <img
                    src="/image/review-person.svg"
                    alt=""
                    class="section-review__user-icon"
                  />
                </span>

                <h3 class="section-review__user-name">Mikhail</h3>
              </div>
            </li>

            <li class="section-review__reviews-item">
              <div class="section-review__review">
                <p class="section-review__review-heading">Отзыв о ProfitPay</p>

                <p class="section-review__review-text">
                  Шикарная ПП. Раньше работал в основном с leadrock, но когда познакомился с ProfitPay - то это что-то с чем то: высокие выплаты по всем офферам, низкая цена оффера на сайте, хороший КЦ и как следствие - высокий аппрув. По технической части тоже все ок, если возникают какие либо вопросы - Павел всегда онлайн. По поводу выплат, то тут все отлично - никаких задержек. Так же есть различные конкурсы в которых одно удовольствие участвовать, как говорится "хороший тамада и конкурсы интересные").
                </p>
              </div>

              <div class="section-review__user">
                <span>
                  <img
                    src="/image/review-person.svg"
                    alt=""
                    class="section-review__user-icon"
                  />
                </span>

                <h3 class="section-review__user-name">Lorrens</h3>
              </div>
            </li>

            <li class="section-review__reviews-item">
              <div class="section-review__review">
                <p class="section-review__review-heading">
                  Первые впечатления о партнерке
                </p>

                <p class="section-review__review-text">
                  В партнерку ProfitPay пришел ради интереса, так как очень уж менеджер рассказывала о их высоких аппрувах и качественных промо. 
                  Ну и был приятно удивлен действительно! Сейчас мы с командой работаем уже 1,5 месяца с ними. Замечаний особо никаких нет. Были вопросы с валидацией формы - но быстро устранили. Тех поддержка - огонь! всегда на связи. Так что рекомендую от души!
                </p>
              </div>

              <div class="section-review__user">
                <span>
                  <img
                    src="/image/review-person.svg"
                    alt=""
                    class="section-review__user-icon"
                  />
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
            <img
              src="/image/team-lightning.png"
              alt=""
              class="additional-img"
            />
          </div>

          <div class="section-team__doll">
            <img src="/image/team-doll.png" alt="" class="additional-img" />
          </div>

          <div class="conf section-team__conf"></div>

          <h2 class="section-heading section-team__heading">Наша команда:</h2>

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

        <h2 class="section-heading footer__heading">Мы в соц. сетях</h2>

        <ul class="footer__social-list">
          <li class="footer-social-item">
            <a href="https://t.me/cpafbcat" target="_blank" class="social-link">
              <span class="footer__icon footer__icon-tg"></span>
              <span>TELEGRAM</span>
            </a>
          </li>

          <li class="footer-social-item">
            <a
              href="https://vk.com/profitpay"
              target="_blank"
              class="social-link"
            >
              <span class="footer__icon footer__icon-vk"></span>
              <span>VKONTAKTE</span>
            </a>
          </li>

          <li class="footer-social-item">
            <a
              href="https://www.youtube.com/channel/UCQJb5KlQ7QaWTb9ZSTVBlJw"
              target="_blank"
              class="social-link"
            >
              <span class="footer__icon footer__icon-youtube"></span>
              <span>YOUTUBE</span>
            </a>
          </li>

          <li class="footer-social-item">
            <a
              href="https://profitpay.pro/blog/"
              target="_blank"
              class="social-link"
            >
              <span class="footer__icon footer__icon-blog"></span>
              <span>БЛОГ</span>
            </a>
          </li>

          <li class="footer-social-item footer__social-item-inst">
            <a
              href="https://bit.ly/3rY7jdA"
              target="_blank"
              class="social-link"
            >
              <span class="footer__icon footer__icon-inst"></span>
              <span>INSTAGRAM</span>
            </a>
          </li>
        </ul>

        <p class="footer__copyright">
          Авторские права © 2020-2021 Profitpay.pro
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