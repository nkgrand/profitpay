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
  </head>

<?php if ( $sonets ) sonetblock( 'en' ); ?>

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

<?php if ( $cookie ) cookieblock( 'en' ); ?>
			
      </section>
    </main>

<?php footer('en'); ?>

    <script>
      toggle.onclick = () => {
        nav.classList.toggle("expand");
      };
    </script>
  </body>
</html>