<?php
$cookie = showitonce( 'cookie' );
$sonets = showitonce( 'sonets' );
?><!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Контакты ProfitPay - CPA-сети прямого нутра рекламодателя</title>
	<meta name="description" content="Контактные данные ProfitPay - прямого нутра рекламодателя Европы с гарантом апрува 50% от собственного колл-центра и высокими выплатами по эксклюзивным офферам" />
	<meta property="og:title" content="Контакты ProfitPay - CPA-сети прямого нутра рекламодателя" />
	<meta property="og:description" content="Контактные данные ProfitPay - прямого нутра рекламодателя Европы с гарантом апрува 50% от собственного колл-центра и высокими выплатами по эксклюзивным офферам" />
	<meta property="og:site_name" content="ProfitPay" />
	<meta property="og:type" content="website" />
	<meta property="og:locale" content="ru_RU" />
	<meta property="og:url" content="https://www.profitpay.one/ru/contact/" />
	<meta property="og:image" content="https://www.profitpay.one/image/profitpay.jpg" />
	<link rel="image_src" href="https://www.profitpay.one/image/profitpay.jpg" />	
    <link rel="stylesheet" href="/css/style.css" />
    <link rel="stylesheet" href="/css/contacts.css">
    <link rel="stylesheet" href="/css/media.css" />
	<link rel="alternate" href="/en/contact/" hreflang="en" />
	<link rel="canonical" href="https://www.profitpay.one/ru/contact/" />
	<link rel="preload" href="/image/contact-lines-right.svg" as="image" />
	<link rel="preload" href="/image/contact-lines-left.svg" as="image" />
	<link rel="icon" type="image/png" href="/favicon.png" />
	<link rel="shortcut icon" sizes="16x16" type="image/png" href="/favicon.png" />			
  </head>

<?php head( 'ru', '/contact/' ); ?>

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
              <div class="section-contacts__contact section-contacts__contact-a" id="girl">
                <span class=" section-contacts__photo section-contacts__photo-a"></span>

                <h2 class="section-contacts__name">Alexandra - ProfitPay</h2>

                <p class="section-contacts__desc">Аффилиэйт-менеджер Profit Pay</p>

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

                <p class="section-contacts__desc">Аффилиэйт-менеджер Profit Pay </p>

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

<?php if ( $cookie ) cookieblock( 'ru' ); ?>
<?php footer('ru'); ?>

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