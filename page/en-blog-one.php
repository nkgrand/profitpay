<?php
$cookie = showitonce( 'cookie' );
$sonets = showitonce( 'sonets' );
$xx = explode( '-', SLUG );
$id = (int) $xx[0];
$page = cached( 'https://dashboard.profitpay.pro/api/sys/news.json?id=1-a5ea36973b3611a8d9b37ce8f2c2140a&public=1&uid='.$id );
$page = $page['data'][0];
$blog = cached( 'https://dashboard.profitpay.pro/api/sys/news.json?id=1-a5ea36973b3611a8d9b37ce8f2c2140a&public=1&show=6&lang=ru' );
?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?=$page['title'];?> | Profit Pay</title>
    <link rel="stylesheet" href="/css/style.css" />
    <link rel="stylesheet" href="/css/blog-page.css">
    <link rel="stylesheet" href="/css/media.css" />
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
              <a href="/en/#section-us" class="header__nav-link">ABOUT US</a>
            </li>

            <li class="header__nav-item">
              <a href="/en/#section-work" class="header__nav-link">FOR WEBMASTERS</a>
            </li>

            <li class="header__nav-item">
              <a href="/en/#section-offers" class="header__nav-link">TOOLS</a>
            </li>

            <li class="header__nav-item">
              <a href="/en/blog/" class="header__nav-link">BLOG</a>
            </li>

            <li class="header__nav-item">
              <a href="/en/contact/" class="header__nav-link">CONTACT</a>
            </li>

            <li class="header__nav-item">
              <a href="/ru/blog/" class="header__nav-link">RU</a>
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

    <main class="main">
      <section class="blog-page">
        <div class="container">

          <div class="blog-page__container">
            <div class="blog-page__left">
              <a href="/ru/blog/" class="blog-page__back-link">
                <span class="blog-page__vector"></span>
                Back to the blog
              </a>

              <?php if ( $page['image'] ) : ?><img src="<?=$page['image'];?>" alt="" class="blog-page__main-img"><?php endif; ?>

              <h1><?=$page['title'];?></h1>

              <p class="blog-page__date"><?=$page['date'];?></p>

			  <?=$page['text'] ? $page['text'] : $page['descr'];?>

            </div>

            <div class="blog-page__right">
			<form action="/ru/blog/" method="get">
              <div class="blog-page__search">
                	<input type="search" name="search" placeholder="search" class="blog-page__search-input">
					<button type="submit" class="blog-page__search-btn"></button>
              </div>
			</form>

              <ul class="blog-page__article-list">
<?php $z = 0; foreach ( $blog['data'] as $b ) :
if ( $b['id'] == $page['id'] ) continue;
$z += 1;
if ( $z > 4 ) break;
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
            <li class="blog-page__article-item">
              <a href="/ru/blog/<?=$b['id'];?>-<?=text2link($b['title']);?>" class="<?=$bcl;?>" <?=$bs;?>>
                <span class="blog__desc">
                  <h2 class="blog__name"><?=$b['title'];?></h2>
                  <p class="blog__article-desc"><?=excerpt( $b['descr'] ? $b['descr'] : $b['text'] );?></p>
                </span>
              </a>
            </li>
<?php endforeach; ?>
              </ul>

              <a href="/ru/blog/" class="blog-page__more-btn">
                all the posts
              </a>
            </div>
          </div>
        </div>

<?php if ( $cookie ) cookieblock( 'en' ); ?>

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

    <script>
      toggle.onclick = () => {
        nav.classList.toggle("expand");
      };
    </script>
  </body>
</html>