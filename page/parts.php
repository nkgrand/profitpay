<?php

// Cookie block
function cookieblock( $lang ) {

	if ( $lang == 'en' ) : ?>

	  <div class="section-cookie">
	    <div class="section-cookie__container">
	      <span class="section-cookie__icon"></span>
	      <div class="section-cookie__text">
	        <p class="section-cookie__heading">This site uses cookies.</p>
	        <p class="section-cookie__desc">
	          By continuing to browse the site, you are agreeing to our usage of cookies.
	          <a href="https://policies.google.com/technologies/cookies?hl=en-US" class="section-cookie__link">
	            More info.
	          </a>
	        </p>
	      </div>

	      <button type="submit" class="section-cookie__btn cookiesBtnClose">
	        Accept <span class="section-cookie__vector"></span>
	      </button>
	    </div>
	  </div>

    <?php else : ?>

	    <div class="section-cookie">
	      <div class="section-cookie__container">
	        <span class="section-cookie__icon"></span>
	        <div class="section-cookie__text">
	          <p class="section-cookie__heading">Мы используем сookie</p>
	          <p class="section-cookie__desc">
              Используя этот веб-сайт, Вы даете согласие на обработку файлов cookie.
	            <a href="https://policies.google.com/technologies/cookies?hl=ru" class="section-cookie__link"> Подробнее. </a>
	          </p>
	        </div>

	        <button type="submit" class="section-cookie__btn cookiesBtnClose">
	          Понял <span class="section-cookie__vector"></span>
	        </button>
	      </div>
	    </div>

	<?php endif;

}

// Social networks block
function sonetblock( $lang ) {

	if ( $lang == 'en' ) : ?>

    <div class="modal-form">
      <span class="modal-form__x btnClose"></span>
      <h2 class="section-heading modal-form__heading">NETWORKS</h2>

      <div class="modal-form__socials">
        <div class="modal-form__item">
          <a  href="https://t.me/cpafbcat"  target="_blank"  class="modal-form__link">
            <span class="modal-form__icon modal-form__icon-tg"></span>
            <span class="modal-form__name">TELEGRAM</span>
            <span class="modal-form__desc">@PROFITPAYCPA</span>
            <span class="modal-form__btn">LOG IN <span class="modal-form__vector"></span></span>
          </a>
        </div>

        <div class="modal-form__item">
          <a  href="https://vk.com/profitpay"  target="_blank"  class="modal-form__link">
            <span class="modal-form__icon modal-form__icon-vk"></span>
            <span class="modal-form__name">ВКОНТАКТЕ</span>
            <span class="modal-form__desc">@PROFITPAYCPA</span>
            <span class="modal-form__btn">LOG IN <span class="modal-form__vector"></span></span>
          </a>
        </div>
      </div>
    </div>
    <div class="overlay"></div>

    <?php else : ?>

    <div class="modal-form">
      <span class="modal-form__x btnClose"></span>
      <h2 class="section-heading modal-form__heading">Мы в соц. сетях</h2>

      <div class="modal-form__socials">
        <div class="modal-form__item">
          <a
            href="https://t.me/cpafbcat"
            target="_blank"
            class="modal-form__link"
          >
            <span class="modal-form__icon modal-form__icon-tg"></span>
            <span class="modal-form__name">TELEGRAM</span>
            <span class="modal-form__desc">@PROFITPAYCPA</span>
            <span class="modal-form__btn"
              >ВОЙТИ <span class="modal-form__vector"></span
            ></span>
          </a>
        </div>

        <div class="modal-form__item">
          <a
            href="https://vk.com/profitpay"
            target="_blank"
            class="modal-form__link"
          >
            <span class="modal-form__icon modal-form__icon-vk"></span>
            <span class="modal-form__name">ВКОНТАКТЕ</span>
            <span class="modal-form__desc">@PROFITPAYCPA</span>
            <span class="modal-form__btn"
              >ВОЙТИ <span class="modal-form__vector"></span
            ></span>
          </a>
        </div>
      </div>
    </div>
    <div class="overlay"></div>

	<?php endif;

}

// Page header
function head( $lang, $page = '/' ) {

if ( $lang == 'en' ) : ?>

    <header>
      <div class="container header__container">
        <nav class="nav" id="nav">
          <button class="nav__toggle" id="toggle"></button>

          <div class="header__left">
            <a class="header__logo" href="/en/">
              <img  src="/image/logo.svg"  alt="Profit Pay"  class="header__logo-img"/>
            </a>
          </div>

          <div class="header__center">
            <ul class="nav-list">
              <li class="header__nav-item">
                <a
                  href="https://dashboard.profitpay.pro/login"
                  class="header__log-in-link"
                >
                  <span class="header__log-in-text-menu">Log in</span>
                  <span class="header__log-in-icon"></span>
                </a>
              </li>

              <li class="header__nav-item">
                <a href="/en/#section-us" class="nav-link">
                  <span>About us</span>
                  <span class="menu-vector"></span>
                </a>
              </li>

              <li class="header__nav-item">
                <a href="/en/#section-work" class="nav-link">
                  <span>Webmasters</span>
                  <span class="menu-vector"></span>
                </a>
              </li>

              <li class="header__nav-item">
                <a href="/en/#section-offers" class="nav-link">
                  <span>Offers</span>
                  <span class="menu-vector"></span>
                </a>
              </li>

              <li class="header__nav-item">
                <a href="/en/blog/" class="nav-link">
                  <span>Blog</span>
                  <span class="menu-vector"></span>
                </a>
              </li>

              <li class="header__nav-item">
                <a href="/en/contact/" class="nav-link">
                  <span>Contact</span>
                  <span class="menu-vector"></span>
                </a>
              </li>

              <li class="header__nav-item">
                <a href="/ru<?=$page;?>" class="nav-link">
                  <span>ru</span>
                  <span class="menu-vector"></span>
                </a>
              </li>
            </ul>
          </div>

          <div class="header__sigh-up-btn">
            <a  href="https://dashboard.profitpay.pro/register"  class="header__sign-up-link">SIGN UP</a>
          </div>

          <div class="header__log-in-btn">
            <a  href="https://dashboard.profitpay.pro/login"  class="header__log-in-link">
              <span class="header__log-in-text">Log in</span>
              <span class="header__log-in-icon"></span>
            </a>
          </div>
        </nav>
      </div>
    </header>

<?php else : ?>

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
            <a class="header__logo" href="/ru/">
              <img
                src="/image/logo.svg"
                alt="Profit Pay"
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
                <a href="/en<?=$page;?>" class="nav-link">
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

<?php endif;

}

// Page footer
function footer( $lang ) {

if ( $lang == 'en' ) : ?>
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

          <li class="footer-social-item footer__social-item-blog">
            <a  href="https://profitpay.pro/blog/"  target="_blank"  class="social-link">
              <span class="footer__icon footer__icon-blog"></span>
              <span>BLOG</span>
            </a>
          </li>

          <li class="footer-social-item">
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
<?php else : ?>
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

          <li class="footer-social-item footer__social-item-blog">
            <a
              href="https://profitpay.pro/blog/"
              target="_blank"
              class="social-link"
            >
              <span class="footer__icon footer__icon-blog"></span>
              <span>БЛОГ</span>
            </a>
          </li>

          <li class="footer-social-item">
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
<?php endif;

?><!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-175588031-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'UA-175588031-1');
</script>
<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");
   ym(68362042, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/68362042" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
<?php

}