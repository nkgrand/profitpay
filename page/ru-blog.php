<?php
$cookie = showitonce( 'cookie' );
$sonets = showitonce( 'sonets' );
$page = max( 1, (int) $_GET['page'] );
$url = 'https://my.profitpay.one/api/sys/news.json?id=1-a5ea36973b3611a8d9b37ce8f2c2140a&public=1&lang=ru&show=8';
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
    <title>Блог сети Profit Pay - прямого нутра рекламодателя в Европе</title>
	<meta name="description" content="Новости из сферы CPA-маркетинга от ProfitPay - партнёрской сети прямого нутра рекламодателя в Европе. Лей с нами!" />
	<meta property="og:title" content="Блог сети Profit Pay - прямого нутра рекламодателя в Европе" />
	<meta property="og:description" content="Новости из сферы CPA-маркетинга от ProfitPay - партнёрской сети прямого нутра рекламодателя в Европе. Лей с нами!" />
	<meta property="og:site_name" content="ProfitPay" />
	<meta property="og:type" content="website" />
	<meta property="og:locale" content="ru_RU" />
	<meta property="og:url" content="https://www.profitpay.one/ru/blog/" />
	<meta property="og:image" content="https://www.profitpay.one/image/profitpay.jpg" />
	<link rel="image_src" href="https://www.profitpay.one/image/profitpay.jpg" />
    <link rel="stylesheet" href="/css/style.css" />
    <link rel="stylesheet" href="/css/blog.css" />
    <link rel="stylesheet" href="/css/media.css" />
	<link rel="alternate" href="/en/blog/" hreflang="en" />
	<link rel="canonical" href="https://www.profitpay.one/ru/blog/" />
	<link rel="icon" type="image/png" href="/favicon.png" />
	<link rel="shortcut icon" sizes="16x16" type="image/png" href="/favicon.png" />
  </head>

  <body class="body">

<?php if ( $sonets ) sonetblock( 'ru' ); ?>
<?php head('ru', '/blog/'); ?>

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

<?php if ( $cookie ) cookieblock( 'ru' ); ?>
<?php footer('ru'); ?>

	<script src="/js/cookie.js"></script>
  <script>
      toggle.onclick = () => {
        nav.classList.toggle("expand");
        document.querySelector('.body').classList.toggle("modal-open");
      };
    </script>
  </body>
</html>