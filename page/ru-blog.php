<?php
$cookie = showitonce( 'cookie' );
$sonets = showitonce( 'sonets' );
$page = max( 1, (int) $_GET['page'] );
$url = 'https://dashboard.profitpay.pro/api/sys/news.json?id=1-a5ea36973b3611a8d9b37ce8f2c2140a&public=1&lang=ru&show=8';
$base = '/ru/blog/';
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
    <link rel="stylesheet" href="/css/blog.css" />
    <link rel="stylesheet" href="/css/media.css" />
	<link rel="alternate" href="/en/blog/" hreflang="en" />
	<link rel="canonical" href="https://www.profitpay.pro/ru/blog/" />
	<link rel="icon" type="image/png" href="/favicon.png" />
	<link rel="shortcut icon" sizes="16x16" type="image/png" href="/favicon.png" />			
  </head>

  <body class="body">

<?php if ( $sonets ) sonetblock( 'ru' ); ?>

<?php head('ru', '/blog/'); ?>

    <main>

<?php if ( $cookie ) cookieblock( 'ru' ); ?>

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
	$bi = $b['id'] % 4;
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

		    <div class="paginator"><?=pages( $base, $blog['total'], $page, 8 );?></div>
      </section>
    </main>

<?php footer('ru'); ?>

	<script src="/js/cookie.js"></script>
    <script>
      toggle.onclick = () => {
        nav.classList.toggle("expand");
      };
    </script>
  </body>
</html>