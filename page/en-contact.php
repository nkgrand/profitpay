<?php
$cookie = showitonce( 'cookie' );
$sonets = showitonce( 'sonets' );
?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contacts | Profit Pay</title>
    <link rel="stylesheet" href="/css/style.css" />
    <link rel="stylesheet" href="/css/contacts.css">
    <link rel="stylesheet" href="/css/media.css" />
	<link rel="alternate" href="/ru/contact/" hreflang="ru" />
	<link rel="canonical" href="https://www.profitpay.pro/en/contact/" />
	<link rel="preload" href="/image/contact-lines-right.svg" as="image" />
	<link rel="preload" href="/image/contact-lines-left.svg" as="image" />
	<link rel="icon" type="image/png" href="/favicon.png" />
	<link rel="shortcut icon" sizes="16x16" type="image/png" href="/favicon.png" />			
  </head>

<?php head( 'en', '/contact/' ); ?>

    <div class="bg_dolls-lights">
      <main>

        <section class="section-contacts">
          <div class="container">
            <h1 class="visually-hidden">Profit Pay contacts</h1>

            <p class="section-contacts__ques">
              Have any questions?
            </p>
            <p class="section-contacts__write">
              Ask us!
            </p>

            <span class="section-contacts__lines"></span>

            <div class="section-contacts__contacts">
              <div class="section-contacts__contact section-contacts__contact-a" id="girl">
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

              <div class="section-contacts__contact section-contacts__contact-p" id="boy">
                <span class="section-contacts__photo section-contacts__photo-p"></span>

                <h2 class="section-contacts__name">Pavel - ProfitPay</h2>

                <p class="section-contacts__desc">Vice of Chief Marketing Officer</p>

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
      </section>
    </main>

<?php if ( $cookie ) cookieblock( 'en' ); ?>
<?php footer('en'); ?>

	<script src="/js/lines.js"></script>
	<script src="/js/cookie.js"></script>
  <script>
      toggle.onclick = () => {
        nav.classList.toggle("expand");
        document.querySelector('.body').classList.toggle("modal-open");
      };
    </script>
  </body>
</html>