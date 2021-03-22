<?php
$cookie = showitonce( 'cookie' );
$sonets = showitonce( 'sonets' );
$page = max( 1, (int) $_GET['page'] );
$url = 'https://dashboard.profitpay.pro/api/sys/news.json?id=1-a5ea36973b3611a8d9b37ce8f2c2140a&public=1&lang=ru&show=8';
$base = '/en/blog/';
if ( $page > 1 ) $url .= '&page=' . $page;
if (isset( $_GET['search'] )) {
	$url .= '&search='.urlencode( $_GET['search'] );
	$base .= '?search='.urlencode( $_GET['search'] );
}
$blog = cached( $url );
?><!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Блог | Profit Pay</title>
    <link rel="stylesheet" href="/css/style.css" />
    <link rel="stylesheet" href="/css/blog.css">
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
                <a href="/en/blog/" class="nav-link">
                  <span>en</span>
                  <span class="menu-vector"></span>
                </a>
              </li>
            </ul>

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
      <h1 class="visually-hidden">Блог Profit Pay</h1>

      <section class="blog-section">
        <div class="container">
          <span class="blog__dolls"></span>
          <span class="blog__lightning blog__lightning1"></span>
          <span class="blog__lightning blog__lightning2"></span>
          <span class="blog__doll"></span>

          <ul class="article-list">
<?php foreach ( $blog['data'] as $b ) : 
if ( $b['image'] ) {
	$bcl = 'blog__article';
	$bs = 'style="background-image: url('.$b['image'].')"';
} else {
	$bi = $b['id'] % 5;
	$bi += 1;
	$bcl = 'blog__article blog__article-' . $bi;
	$bs = false;
}
?>			  
            <li class="blog__article-item">
              <a href="/ru/blog/<?=$b['id'];?>-<?=text2link($b['title']);?>" class="<?=$bcl;?>" <?=$bs;?>>
                <span class="blog__desc">
                  <h2 class="blog__name"><?=$b['title'];?></h2>
                  <p class="blog__article-desc"><?=excerpt( $b['descr'] ? $b['descr'] : $b['text'] );?></p>
                </span>
              </a>
            </li>
<?php endforeach; ?>
          </ul>
        </div>

		<div class="paginator"><?php pages( $base, $blog['total'], $blog['page'], $blog['show'] ); ?></div>

		<?php if ( $cookie ) cookieblock( 'ru' ); ?>

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

    <script>
      toggle.onclick = () => {
        nav.classList.toggle("expand");
      };
    </script>
  </body>
</html>