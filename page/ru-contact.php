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
    <link rel="stylesheet" href="/css/contacts.css">
    <link rel="stylesheet" href="/css/media.css" />
  </head>

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
            <a href="/ru/" class="header__logo">
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
                <a
                  href="https://dashboard.profitpay.pro/login"
                  class="header__log-in-link"
                >
                  <span class="header__log-in-text-menu">Вход</span>
                  <span class="header__log-in-icon"></span>
                </a>
              </li>
              
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
                <a href="/ru/blog/" class="nav-link">
                  <span>блог</span> 
                  <span class="menu-vector"></span>
                </a>
              </li>

              <li class="header__nav-item">
                <a href="/ru/contact/" class="nav-link">
                  <span>контакт</span> 
                  <span class="menu-vector"></span>
                </a>
              </li>

              <li class="header__nav-item">
                <a href="/en/contact/" class="nav-link">
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
    
    <div class="bg_dolls-lights">
      <main>
        <section class="section-contacts">
          <div class="container">
            <h1 class="visually-hidden">Контакты Profit Pay</h1>
  
            <p class="section-contacts__ques">
              Есть к нам вопросы?
            </p>
            <p class="section-contacts__write">
              Напиши!
            </p>
  
            <span class="section-contacts__lines"></span>
  
            <div class="section-contacts__contacts">
              <div class="section-contacts__contact section-contacts__contact-a">
                <span class=" section-contacts__photo section-contacts__photo-a"></span>
  
                <h2 class="section-contacts__name">Alexandra - ProfitPay</h2>
  
                <p class="section-contacts__desc">Chief Marketing Officer</p>
  
                <span class="section-contacts__contact-info">
                  <a href="https://t.me/alexandradigital" target="_blank" class="section-contacts__link">
                    <span class="section-contacts__icon section-contacts__icon-tg"></span>
                    <span class="section-contacts__text">@alexandradigital</span>
                  </a>
                </span>
  
                <span class="section-contacts__contact-info">
                  <a href="https://vk.com/sannito" target="_blank" class="section-contacts__link">
                    <span class="section-contacts__icon section-contacts__icon-vk"></span>
                    <span class="section-contacts__text">sannito</span>
                  </a>
                </span>
              </div>
  
              <div class="section-contacts__contact section-contacts__contact-p">
                <span class="section-contacts__photo section-contacts__photo-p"></span>
    
                <h2 class="section-contacts__name">Pavel - ProfitPay</h2>
    
                <p class="section-contacts__desc">Vice of Chief Marketing Officer </p>
    
                <span class="section-contacts__contact-info">
                  <a href="https://t.me/yummypeep" target="_blank" class="section-contacts__link">
                    <span class="section-contacts__icon section-contacts__icon-tg"></span>
                    <span class="section-contacts__text">@yummypeep</span>
                  </a>
                </span>
    
                <span class="section-contacts__contact-info">
                  <a href="https://vk.com/yummypeep" target="_blank" class="section-contacts__link">
                    <span class="section-contacts__icon section-contacts__icon-vk"></span>
                    <span class="section-contacts__text">yummypeep</span>
                  </a>
                </span>
              </div>
            </div>

<?php if ( $cookie ) cookieblock( 'ru' ); ?>
			
      </section>
    </main>

<?php footer('ru'); ?>

    <script>
      toggle.onclick = () => {
        nav.classList.toggle("expand");
      };
    </script>
  </body>
</html>