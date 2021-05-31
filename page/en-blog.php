<?php
$cookie = showitonce( 'cookie' );
$sonets = showitonce( 'sonets' );
$page = max( 1, (int) $_GET['page'] );
$url = 'https://dashboard.profitpay.one/api/sys/news.json?id=1-a5ea36973b3611a8d9b37ce8f2c2140a&public=1&lang=en&show=8';
$base = '/en/blog/';
if ( $page > 1 ) $url .= '&page=' . $page;
if (isset( $_GET['search'] )) {
	$url .= '&search='.urlencode( $_GET['search'] );
	$base .= '?search='.urlencode( $_GET['search'] );
}
$blog = cached( $url );
?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Blog of ProfitPay - direct nutra advertiser CPA from Europe</title>
	<meta name="description" content="Latest news in CPA marketing from ProfitPay - direct nutra advertiser CPA affiliate network in Europe. Join us!" />
	<meta property="og:title" content="Blog of ProfitPay - direct nutra advertiser CPA from Europe" />
	<meta property="og:description" content="Latest news in CPA marketing from ProfitPay - direct nutra advertiser CPA affiliate network in Europe. Join us!" />
	<meta property="og:site_name" content="ProfitPay" />
	<meta property="og:type" content="website" />
	<meta property="og:locale" content="en_US" />
	<meta property="og:url" content="https://www.profitpay.one/en/blog/" />
	<meta property="og:image" content="https://www.profitpay.one/image/profitpay.jpg" />
	<link rel="image_src" href="https://www.profitpay.one/image/profitpay.jpg" />
    <link rel="stylesheet" href="/css/style.css" />
    <link rel="stylesheet" href="/css/blog.css" />
    <link rel="stylesheet" href="/css/media.css" />
	<link rel="alternate" href="/ru/blog/" hreflang="ru" />
	<link rel="canonical" href="https://www.profitpay.one/en/blog/" />
	<link rel="icon" type="image/png" href="/favicon.png" />
	<link rel="shortcut icon" sizes="16x16" type="image/png" href="/favicon.png" />
  </head>

  <body class="body">

<?php if ( $sonets ) sonetblock( 'en' ); ?>
<?php head('en', '/blog/'); ?>

    <main class="main">

      <h1 class="visually-hidden">Profit Pay Blog</h1>

      <section class="blog-section">
        <div class="container">

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
              <a href="/en/blog/<?=$b['id'];?>-<?=text2link($b['title']);?>" class="<?=$bcl;?>" <?=$bs;?>>
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

<?php if ( $cookie ) cookieblock( 'en' ); ?>
<?php footer('en'); ?>

	<script src="/js/cookie.js"></script>
  <script>
      toggle.onclick = () => {
        nav.classList.toggle("expand");
        document.querySelector('.body').classList.toggle("modal-open");
      };
    </script>
  </body>
</html>