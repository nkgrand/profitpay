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
	          By continuing to browse the site, you are agreeing to our use of cookies.
	          <a href="" class="section-cookie__link">
	            More info.
	          </a>
	        </p>
	      </div>

	      <button type="submit" class="section-cookie__btn cookiesBtnClose">
	        Accept it <span class="section-cookie__vector"></span>
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
	            Во время посещения сайта «Культура.РФ» вы соглашаетесь с тем,
	            что мы обрабатываем ваши персональные данные с использованием
	            метрических программ.
	            <a href="" class="section-cookie__link"> Подробнее. </a>
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
<?php endif;	
	
}