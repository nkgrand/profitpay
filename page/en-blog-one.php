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

<?php head('en', '/blog/'); ?>

    <main class="main">

<?php if ( $cookie ) cookieblock( 'en' ); ?>

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
	$bi = $b['id'] % 4;
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
      </section>
    </main>

	<?php footer('en'); ?>

	<script src="/js/cookie.js"></script>
    <script>
      toggle.onclick = () => {
        nav.classList.toggle("expand");
      };
    </script>
  </body>
</html>