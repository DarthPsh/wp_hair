<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Novostroy
 */

get_header();
?>
  <script src="https://api-maps.yandex.ru/2.1/?apikey=fcf559ae-b68b-4a80-9e6d-f6ecb3dd470c&amp;lang=ru_RU"
          type="text/javascript"></script>
  <!-- Swiper JS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

  <main id="primary" class="main">

    <div id="mainPopup" class="popup">  
      <div class="popup__overlay">
        <div class="popup__content">
          <div class="popup__thx">
            <p class="font-accent white popup__title">СПАСИБО!</p>
            <p class="gold popup__subtitle">ЗАЯВКА ОТПРАВЛЕНА</p>
            <p class="gold popup__desc">Мы свяжемся с вами в ближайшее время</p>
          </div>
          <svg class="popup__close" xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25"
               fill="none">
            <path d="M23.75 6.25L6.25 23.75M23.75 23.75L6.25 6.25" stroke="#E2C08D" stroke-width="2"
                  stroke-linecap="round"/>
          </svg>
          <div class="popup__form active">
            <h2 class="font-accent white popup__title"></h2>
            <p class="gold popup__desc">Заполните форму и мы свяжемся с вами, чтобы выбрать удобное время</p>
            <?php echo do_shortcode('[contact-form-7 id="eb03234" title="Главная форма"]'); ?>
          </div>
        </div>
      </div>
    </div>

    <section class="hero wow animate__animated animate__fadeIn">
      <div class="container">
        <div class="hero__content">
          <a class="hero__logo" href="/">
            <img src="<?php echo THEME_DIR_URI . '/assets/img/svg/logo.svg'; ?>" alt="logo">
          </a>
          <div class="hero__box">
            <div class="hero__box-img">
              <img class="wow animate__animated animate__backInDown" src="<?php echo THEME_DIR_URI . '/assets/img/webp/hero.webp'; ?>" alt="woman">
            </div>
            <h1 class="hero__title font-accent wow animate__animated animate__fadeIn" data-wow-delay=".5s">НАРАЩИВАНИЕ ВОЛОС</h1>
            <p class="hero__desc">в Краснодаре</p>
            <p class="hero__subdesc">Волосы твоей мечты всего за 3-4 часа</p>
            <button data-title="НАРАЩИВАНИЕ <br /> ВОЛОС" class="hero__cta btn-accent js-btn">
              ЗАПИСАТЬСЯ
            </button>
          </div>
        </div>
      </div>
    </section>

    <section id="about" class="hello section-m">
      <div class="container">
      <div class="hello__content">
          <img src="<?php echo THEME_DIR_URI . '/assets/img/webp/Evgenya.webp'; ?>" alt="Evgenya" class="hello__img">
          <div class="hello__text brs border-gold">
            <div class="hello__desc">
              <p class="wow animate__animated animate__fadeInUp">Здравствуйте милые дамы, меня зовут Евгения, я колорист и мастер по наращиванию волос.</p>
              <p class="wow animate__animated animate__fadeInUp">Занимаюсь любимым делом уже более 5 лет,  очень люблю свою работу и делаю ее с душой.</p>
              <p class="wow animate__animated animate__fadeInUp">Приглашаю Вас на безопасное капсульное и ленточное наращивание волос!</p>
              <p class="wow animate__animated animate__fadeInUp">А также на окрашивание в разных техниках:</p>
            </div>
            <ul class="hello__perks">
              <li class="hello__perk wow animate__animated animate__fadeInUp">Airtouch</li>
              <li class="hello__perk wow animate__animated animate__fadeInUp">Контуринг</li>
              <li class="hello__perk wow animate__animated animate__fadeInUp">Мелирование</li>
              <li class="hello__perk wow animate__animated animate__fadeInUp">Тонирование</li>
              <li class="hello__perk wow animate__animated animate__fadeInUp">Тотал Блонд</li>
              <li class="hello__perk wow animate__animated animate__fadeInUp">Балаяж</li>
              <li class="hello__perk wow animate__animated animate__fadeInUp">Шатуш</li>
              <li class="hello__perk wow animate__animated animate__fadeInUp">Омбре</li>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <section class="perks section-m">
      <div class="container">
        <ul class="perks__list">
          <li class="perks__list-item border-gold wow animate__animated animate__fadeIn">
            <img src="<?php echo THEME_DIR_URI . '/assets/img/svg/perk-1.svg'; ?>"" alt="perk">
            Выполняю работу аккуратно и с любовью, поэтому наращивание и окрашивание  никак не навредит вашим волосам!
          </li>
          <li class="perks__list-item border-gold wow animate__animated animate__fadeIn">
            <img src="<?php echo THEME_DIR_URI . '/assets/img/svg/perk-2.svg'; ?>"" alt="perk">
            Мои капсулы маленькие, гладкие и незаметные. Благодаря правильной капсуляции, оттяжки и скрутки капсул - волосы не лезут!  С таким наращиванием вы сможете отрастить свои густые и длинные волосы!
          </li>
          <li class="perks__list-item border-gold wow animate__animated animate__fadeIn">
            <img src="<?php echo THEME_DIR_URI . '/assets/img/svg/perk-3.svg'; ?>"" alt="perk">
            Для более тонких волос подходит ленточное наращивание, оно отлично держится на тонких волосах и самое главное не утяжеляет свои волосы, так как нагрузка на ваши волосы идет равномерная.
          </li>
        </ul>
      </div>
    </section>

    <section class="about section-m">
      <div class="container">
        <div class="about__content">
          <img src="<?php echo THEME_DIR_URI . '/assets/img/webp/woman.webp'; ?>" alt="woman" class="about__img">
          <div class="about__text brs border-gold">
            <div class="section-desc about__desc">
              <p class="wow animate__animated animate__fadeInUp">
                Наращивание волос в нашем салоне позволит Вам всего за 3-4 часа получить волосы своей мечты - густые, длинные, объемные.
              </p>
              <p class="wow animate__animated animate__fadeInUp">И даже без длительного восстановления.</p>
              <p class="wow animate__animated animate__fadeInUp">
                Вопреки всем мифам о наращивании волос современные технологии позволяют делать это совершенно безопасно и без вреда для волос.
              </p>
              <p class="wow animate__animated animate__fadeInUp">Специалисты нашего салона работают во всех актуальных техниках наращивания.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="variables" class="variables">
      <div class="variables__bg variables__bg-top"></div>
      <div class="variables__bg variables__bg-bot"></div>
      <div class="container">
        <h2 class="section-title white center variables__title">
          ВЫБИРАЙТЕ СВОЙ ВАРИАНТ НАРАЩИВАНИЯ ВОЛОС:
        </h2>
        <ol class="variables__list">
          <li class="brs border-gold wow animate__animated animate__fadeIn">
            <h3 class="font-accent gold">Удлинение</h3>
            <p>«Отрастим» с помощью дополнительных прядей нужную вам длину волос: до плеч, лопаток, талии и ниже (до 80
              см).</p>
          </li>
          <li class="brs border-gold wow animate__animated animate__fadeIn">
            <h3 class="font-accent gold">Загущение</h3>
            <p>Сделаем густыми волосы, лишённые объёма, чтобы причёска была пышнее и держала форму.</p>
          </li>
          <li class="brs border-gold wow animate__animated animate__fadeIn">
            <h3 class="font-accent gold">Длина и объём</h3>
            <p>Поможем тем, кого не устраивает ни длина, ни объём своих волос. Добавим пряди для необходимого
              эффекта.</p>
          </li>
          <li class="brs border-gold wow animate__animated animate__fadeIn">
            <h3 class="font-accent gold">Цветной микс</h3>
            <p>Изменим цвет ваших волос без использования краски, нарастив пряди других оттенков (эффект омбрэ,
              мелирования, шатуш).</p>
          </li>
          <li class="brs border-gold wow animate__animated animate__fadeIn">
            <h3 class="font-accent gold">Интеграция</h3>
            <p>Скроем частичное выпадение волос с помощью системы их замещения.</p>
          </li>
          <li class="brs border-gold wow animate__animated animate__fadeIn">
            <h3 class="font-accent gold">Отдельные зоны</h3>
            <p>Уплотним кончики, нарастим чёлку или загустим виски. Можно спрятать непонравившуюся стрижку, «отрастив»
              волосы за 1-2 часа.</p>
          </li>
        </ol>
        <button data-title="НАРАЩИВАНИЕ <br/> ВОЛОС" class="variables__cta btn-accent js-btn">ЗАПИСАТЬСЯ</button>
      </div>
    </section>

    <section class="how section-m">
      <div class="container">
        <div class="how__content">
          <img src="<?php echo THEME_DIR_URI . '/assets/img/webp/hair.webp'; ?>" alt="hair" class="how__img">
          <div class="how__text brs border-gold">
            <h2 class="section-title how__title wow animate__animated animate__fadeInUp">КАК НАРАЩИВАЕМ</h2>
            <div class="section-desc how__desc">
              <p class="wow animate__animated animate__fadeInUp">С помощью маленьких прочных капсул дополнительные пряди прикрепляются к родным волосам.</p>
              <p class="wow animate__animated animate__fadeInUp">
                Размер капсул от 1,5 до 4 мм, вес - 0,2 гр. <br>
                Поэтому они комфортны в носке и незаметны окружающим.
              </p>
              <p class="wow animate__animated animate__fadeInUp">
                Наращивание совмещается с окрашиванием, выпрямлением, завивкой. Без ограничений в занятиях спортом и плаванием.
              </p>
              <p class="wow animate__animated animate__fadeInUp">Феном пользоваться можно.</p>
              <p class="wow animate__animated animate__fadeInUp">
                Срок носки наращенных волос: от 2 до 4 месяцев(влияет скорость роста собственных волос).
              </p>
              <p class="wow animate__animated animate__fadeInUp">Затем - коррекция или снятие прядей</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="features">
      <div class="features__bg features__bg-top"></div>
      <div class="features__bg features__bg-bot"></div>
      <div class="container">
        <h2 class="section-title white center features__title">РАБОТАЕМ ДЛЯ ВАШЕГО ПРЕОБРАЖЕНИЯ:</h2>
        <ul class="features__list">
          <li class="border-gold wow animate__animated animate__fadeIn">
            <div>
              <svg xmlns="http://www.w3.org/2000/svg" width="110" height="81" viewBox="0 0 110 81" fill="none">
                <g clip-path="url(#clip0_43_397)">
                  <path
                    d="M14.5198 13.5146H53.5921M14.5198 20.141H25.7836M14.5198 26.9418H22.2636M14.5198 33.7427H22.2636M66.9683 13.1658V20.141H41.7998C40.2512 20.1638 38.722 20.4885 37.3001 21.0968C35.8782 21.705 34.5915 22.5849 33.5129 23.686C32.4342 24.7872 31.585 26.088 31.0138 27.5143C30.4426 28.9407 30.1603 30.4646 30.1836 31.9989V52.7503C30.1547 53.4524 30.214 54.1552 30.3598 54.8428C27.4436 57.4559 24.0346 59.471 20.3283 60.7718C17.6883 61.8181 14.8716 59.5511 16.1036 57.2842C17.947 53.729 18.8551 49.7704 18.7436 45.7751H12.936C11.3832 45.7662 9.84745 45.4509 8.4191 44.8475C6.99075 44.2441 5.69868 43.3647 4.61723 42.2607C3.53577 41.1567 2.68684 39.8503 2.12074 38.4177C1.55464 36.9851 1.28236 35.4551 1.3198 33.9171V13.1658C1.29652 11.6314 1.57877 10.1075 2.14996 8.6812C2.72115 7.25485 3.57034 5.95392 4.64902 4.85277C5.7277 3.75163 7.01438 2.87181 8.43629 2.26356C9.85819 1.65531 11.3874 1.33062 12.936 1.30789H55.176C58.3209 1.34919 61.3225 2.6172 63.53 4.83702C65.7374 7.05685 66.9732 10.0495 66.9683 13.1658Z"
                    stroke="#E2C08D" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                  <path
                    d="M30.184 31.9989V52.7503C30.1607 54.2846 30.443 55.8084 31.0141 57.2348C31.5853 58.6611 32.4345 59.9621 33.5132 61.0632C34.5919 62.1643 35.8786 63.0442 37.3005 63.6524C38.7224 64.2607 40.2516 64.5855 41.8002 64.6082H60.6325C63.2725 72.6297 70.4887 77.1636 76.6487 79.4306C79.2887 80.4769 82.1045 78.2099 80.8725 75.943C79.0291 72.3878 78.1211 68.4291 78.2325 64.4337H83.864C85.4167 64.4249 86.9525 64.1097 88.3809 63.5063C89.8092 62.9029 91.1021 62.0235 92.1836 60.9195C93.265 59.8155 94.1131 58.5091 94.6792 57.0765C95.2453 55.6439 95.5176 54.1139 95.4802 52.5759V31.9989C95.495 28.9095 94.2874 25.9375 92.1157 23.7206C89.944 21.5037 86.9811 20.2186 83.864 20.141H41.624C38.5242 20.2233 35.5828 21.5155 33.4402 23.7365C31.2975 25.9574 30.1272 28.9271 30.184 31.9989Z"
                    stroke="#E2C08D" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                  <path
                    d="M64.5041 30.7783L66.7926 35.3122C66.9411 35.5739 67.1432 35.8021 67.3856 35.9822C67.628 36.1624 67.9051 36.2905 68.2003 36.3585L73.3041 37.056C73.6475 37.1042 73.9709 37.2463 74.2374 37.4663C74.5038 37.6864 74.7026 37.9756 74.8123 38.3016C74.922 38.6277 74.9377 38.9776 74.8578 39.312C74.7779 39.6464 74.6058 39.9522 74.3603 40.1949L70.6641 43.6825C70.4518 43.8803 70.293 44.1273 70.2009 44.4012C70.1087 44.6752 70.0864 44.9674 70.1364 45.2519L71.0164 50.309C71.106 50.6473 71.0906 51.0046 70.9726 51.3342C70.8546 51.6639 70.6394 51.9507 70.3547 52.1576C70.07 52.3644 69.7295 52.4816 69.3767 52.494C69.0239 52.5064 68.6752 52.4134 68.3764 52.2271L63.8003 49.9602C63.5389 49.7899 63.233 49.6992 62.9203 49.6992C62.6075 49.6992 62.3016 49.7899 62.0403 49.9602L57.4641 52.4015C57.1653 52.5879 56.8174 52.6809 56.4646 52.6685C56.1118 52.6561 55.7705 52.5388 55.4858 52.3319C55.2011 52.1251 54.9859 51.8382 54.8679 51.5086C54.7499 51.1789 54.7345 50.8216 54.8241 50.4833L55.7041 45.4263C55.7541 45.1418 55.7326 44.8495 55.6405 44.5756C55.5483 44.3017 55.3887 44.0547 55.1764 43.8568L51.4803 40.3692C51.2347 40.1265 51.0626 39.8208 50.9827 39.4863C50.9028 39.1519 50.9185 38.8021 51.0282 38.4761C51.1379 38.15 51.3367 37.8607 51.6031 37.6407C51.8696 37.4206 52.193 37.2786 52.5364 37.2304L57.6403 36.5328C58.1683 36.5328 58.6968 36.0097 59.0488 35.4866L61.3364 30.9527C61.4632 30.6491 61.6736 30.3872 61.944 30.1971C62.2145 30.007 62.5342 29.8965 62.8653 29.8782C63.1963 29.86 63.5257 29.9349 63.8157 30.0941C64.1058 30.2533 64.3441 30.4905 64.5041 30.7783Z"
                    stroke="#E2C08D" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                  <path
                    d="M98.9998 17.1765L105.16 11.0732L98.9998 17.1765ZM100.76 22.408L108.68 20.6642L100.76 22.408ZM95.4798 7.58557L93.7198 15.4327L95.4798 7.58557Z"
                    fill="#E2C08D"/>
                  <path d="M98.9998 17.1765L105.16 11.0732M100.76 22.408L108.68 20.6642M95.4798 7.58557L93.7198 15.4327"
                        stroke="#E2C08D" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </g>
                <defs>
                  <clipPath id="clip0_43_397">
                    <rect width="110" height="81" fill="white"/>
                  </clipPath>
                </defs>
              </svg>
              <h3 class="font-accent gold">консультация</h3>
            </div>
            <p>С учётом особенностей родных волос и цели наращивания (удлинение, объём, уплотнение висков и др.) мастер
              подбирает пряди нужного оттенка, структуры, длины и предлагает несколько вариантов, различных по цене.</p>
          </li>
          <li class="border-gold wow animate__animated animate__fadeIn">
            <div>
              <svg xmlns="http://www.w3.org/2000/svg" width="110" height="81" viewBox="0 0 110 81" fill="none">
                <g clip-path="url(#clip0_43_465)">
                  <path
                    d="M43.561 16.4484V24.5063M32.836 16.4484V33.2578M38.1985 16.4484V27.7547M16.1672 5.85938H27.9766C28.3066 5.85855 28.6336 5.92285 28.9388 6.04859C29.244 6.17433 29.5214 6.35904 29.755 6.59214C29.9887 6.82524 30.1741 7.10215 30.3006 7.40701C30.4271 7.71187 30.4922 8.03869 30.4922 8.36875V9.41719C30.4922 10.0388 30.7391 10.6349 31.1787 11.0745C31.6182 11.514 32.2144 11.7609 32.836 11.7609H43.4954C44.117 11.7609 44.7131 11.514 45.1526 11.0745C45.5922 10.6349 45.8391 10.0388 45.8391 9.41719C45.8391 7.23067 44.9706 5.13368 43.4247 3.58743C41.8787 2.04118 39.7819 1.17229 37.5953 1.17188H16.1735M93.8297 78.8281L83.2657 68.2641C82.3899 67.3881 81.3501 66.6932 80.2057 66.2192C79.0614 65.7451 77.8348 65.5011 76.5961 65.5011C75.3574 65.5011 74.1309 65.7451 72.9865 66.2192C71.8421 66.6932 70.8024 67.3881 69.9266 68.2641M93.8328 59.9172L92.2703 58.3547C90.8415 56.923 89.2395 55.6754 87.5016 54.6406M83.5157 52.7406C79.1798 51.1403 74.4772 50.8113 69.9607 51.7923C65.4442 52.7732 61.3017 55.0234 58.0204 58.2781M43.4891 38.4563C41.7251 40.1938 40.661 42.675 40.1766 45.9438M39.8672 50.7344V58.2078M43.5735 35.8125C43.5735 41.75 45.7688 46.1438 52.7672 50.1875C50.4094 50.1875 48.4985 52.0172 48.4985 54.2766C48.4985 56.5359 50.4078 58.3656 52.7656 58.3656M77.8891 51.325C78.3735 50.4234 82.3172 42.9125 81.3782 39.45C80.6938 36.925 77.6766 34.8672 69.8906 31.6094C69.6406 29.25 68.9531 26.65 67.5469 26.2766C65.95 25.8531 61.9344 28.6766 60.0719 28.6766M32.8375 58.2078V50.7344C32.8375 33.0781 44.8188 25.7203 55.4126 27.8031C54.0704 29.4953 53.2813 33.3391 53.6235 35.3688M58.9876 36.9219C59.8366 35.8987 60.4175 34.6803 60.6782 33.3766M71.1016 38.2281C72.5922 37.3094 73.7313 35.0813 73.9969 33.5781M16.1719 78.8281V58.3594H21.1954M25.8829 58.3594H70.6641C71.2857 58.3594 71.8818 58.6063 72.3214 59.0458C72.7609 59.4854 73.0079 60.0815 73.0079 60.7031C73.0079 67.1891 64.3078 75.4812 56.0859 78.8281"
                    stroke="#E2C08D" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </g>
                <defs>
                  <clipPath id="clip0_43_465">
                    <rect width="80" height="80" fill="white" transform="translate(15)"/>
                  </clipPath>
                </defs>
              </svg>
              <h3 class="font-accent gold">Подготовка к процедуре</h3>
            </div>
            <p>Перед наращиванием свои волосы должны быть чистыми. Вымыть голову можно в салоне или в домашних условиях.
              Важно! Используем только шампунь, без последующего нанесения бальзама и пр. средств.</p>
          </li>
          <li class="border-gold wow animate__animated animate__fadeIn">
            <div>
              <svg xmlns="http://www.w3.org/2000/svg" width="110" height="81" viewBox="0 0 110 81" fill="none">
                <g clip-path="url(#clip0_43_497)">
                  <path
                    d="M48.9495 28.3207C39.5641 40.1333 31.5296 55.0306 16.9626 59.6222M68.7571 1.55817L94.1162 26.9172C94.6132 27.4185 95.0067 28.0129 95.274 28.6662C95.5414 29.3196 95.6774 30.0192 95.6744 30.7252C95.6713 31.4311 95.5292 32.1295 95.2562 32.7806C94.9832 33.4316 94.5847 34.0225 94.0834 34.5195L91.758 36.8465C91.261 37.3479 90.6701 37.7464 90.0191 38.0194C89.368 38.2924 88.6696 38.4345 87.9636 38.4375C87.2577 38.4406 86.558 38.3046 85.9047 38.0372C85.2513 37.7699 84.657 37.3764 84.1557 36.8794L58.795 11.5204C57.7918 10.5075 57.2319 9.13766 57.2384 7.71207C57.2448 6.28649 57.8172 4.92181 58.8295 3.91807L61.1549 1.59104C61.6519 1.08969 62.2428 0.691144 62.8938 0.418161C63.5449 0.145177 64.2433 0.00310231 64.9492 5.0242e-05C65.6551 -0.00300183 66.3548 0.133029 67.0082 0.400373C67.6615 0.667717 68.2558 1.06114 68.7571 1.55817Z"
                    stroke="#E2C08D" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                  <path
                    d="M62.887 15.6107C59.0859 17.6354 55.7597 20.5409 52.6668 23.9246M68.4433 21.1654C50.9363 30.4801 43.5263 58.5507 22.5074 65.1752M74.1392 26.863C56.6355 36.1793 49.2272 64.25 28.2066 70.8744M52.2905 63.1111C47.1779 69.1111 41.408 74.2089 33.9059 76.5737M79.8451 32.5622C70.2658 37.6567 63.7087 48.3765 56.2904 58.1218"
                    stroke="#E2C08D" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                  <path
                    d="M85.6183 38.13C68.9758 46.8876 60.675 72.2943 44.4483 80.2614C43.1128 80.9215 41.6042 81.147 40.1341 80.9062C38.664 80.6654 37.3062 79.9704 36.2511 78.9188L15.0383 57.706C14.6366 57.2997 14.3376 56.8036 14.166 56.2587C13.9944 55.7137 13.9551 55.1358 14.0515 54.5727C14.1479 54.0095 14.3772 53.4775 14.7203 53.0207C15.0634 52.5639 15.5104 52.1955 16.0243 51.9459C32.3661 43.969 40.5222 18.4111 57.5674 9.62061"
                    stroke="#E2C08D" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </g>
                <defs>
                  <clipPath id="clip0_43_497">
                    <rect width="110" height="81" fill="white"/>
                  </clipPath>
                </defs>
              </svg>
              <h3 class="font-accent gold">Наращивание</h3>
            </div>
            <p>Капсулируем дополнительные пряди и закрепляем их на ваших волосах. Процесс занимает от 1 до 5,5 часов. На
              время влияет цель наращивания и количество капсул.</p>
          </li>
          <li class="border-gold wow animate__animated animate__fadeIn">
            <div>
              <svg xmlns="http://www.w3.org/2000/svg" width="110" height="82" viewBox="0 0 110 82" fill="none">
                <g clip-path="url(#clip0_43_480)">
                  <path
                    d="M36.3746 72.3906V75.4656C36.366 76.8563 35.7947 78.1875 34.7846 79.1709C33.7746 80.1542 32.4072 80.7103 30.9788 80.7188H24.7933C23.3649 80.7103 21.9975 80.1542 20.9874 79.1709C19.9774 78.1875 19.4061 76.8563 19.3975 75.4656V53.6844M49.6667 52.9156C49.7051 53.3538 49.6535 53.7951 49.515 54.2137C49.3764 54.6323 49.1536 55.0198 48.8597 55.3537C48.5657 55.6877 48.2063 55.9613 47.8026 56.1586C47.3989 56.3559 46.9589 56.473 46.5082 56.5031L44.4025 56.6313C44.1393 53.5563 43.8761 50.4813 43.4813 47.2781L45.7185 47.0219C46.1686 46.9845 46.6219 47.0347 47.0519 47.1696C47.4818 47.3045 47.8799 47.5214 48.2229 47.8076C48.5659 48.0938 48.8469 48.4437 49.0496 48.8367C49.2523 49.2297 49.3726 49.6581 49.4035 50.0969L49.6667 52.9156Z"
                    stroke="#E2C08D" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                  <path
                    d="M43.3562 46.6375C44.0142 52.275 44.5407 58.0406 44.8039 63.6781C45.0671 68.4188 41.1189 72.3906 36.2495 72.3906C31.3801 72.3906 27.5636 68.4188 27.6952 63.6781C27.9584 58.0406 28.4848 52.275 29.1428 46.6375"
                    stroke="#E2C08D" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                  <path
                    d="M44.4091 56.6312C44.1459 53.5562 43.8827 50.4813 43.4879 47.2781C43.5087 47.0153 43.4635 46.7514 43.3563 46.5094M74.81 31.5187H71.25C63.0905 31.5187 55.0625 34.0812 48.3507 38.6937C44.2709 41.5125 39.1384 42.7938 33.6109 42.1531C24.1354 41.1281 16.5022 33.5688 15.4493 24.2156C14.0017 11.7875 23.8721 1.28125 36.3746 1.28125C40.7043 1.29492 44.9272 2.59086 48.4823 4.99688C55.0626 9.48125 62.8273 12.1719 70.8552 12.1719H74.8034"
                    stroke="#E2C08D" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                  <path
                    d="M36.3746 33.5687C33.202 33.5574 30.1626 32.3253 27.9191 30.1412C25.6757 27.9571 24.4103 24.9981 24.3986 21.9094C24.4103 18.8206 25.6757 15.8616 27.9191 13.6775C30.1626 11.4934 33.202 10.2614 36.3746 10.25C42.9549 10.25 48.3507 15.375 48.3507 21.7813C48.3507 28.1875 42.9549 33.5687 36.3746 33.5687ZM80.0676 12.1719V31.5188L89.0168 35.6188C91.6489 36.7719 94.6758 34.9781 94.6758 32.1594V11.5313C94.6758 8.7125 91.6489 6.79063 89.0168 8.07188L80.0676 12.1719Z"
                    stroke="#E2C08D" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </g>
                <defs>
                  <clipPath id="clip0_43_480">
                    <rect width="82" height="82" fill="white" transform="translate(14)"/>
                  </clipPath>
                </defs>
              </svg>
              <h3 class="font-accent gold">Стрижка, укладка</h3>
            </div>
            <p>После процедуры вас ждёт бесплатная адаптационная стрижка, локоны в подарок и памятка по уходу за
              наращенными волосами.</p>
          </li>
        </ul>
      </div>
    </section>

    <section id="increasing" class="about section-m">
      <div class="container">
        <div class="about__content about__content--big-img">
          <img src="<?php echo THEME_DIR_URI . '/assets/img/webp/increasing.webp'; ?>" alt="increasing"
               class="about__img">
          <div class="about__text about__text--big-padding brs border-gold">
            <h2 class="section-title about__title wow animate__animated animate__fadeInUp">Наращиваем</h2>
            <div class="section-desc about__desc">
              <ul>
                <li>
                  <h3 class="wow animate__animated animate__fadeInUp">Качественно</h3>
                  <p class="wow animate__animated animate__fadeInUp">Наращенные волосы выглядят, как родные. Без переходов, видимых линий и заломов. Капсулы незаметны
                    окружающим.</p>
                </li>
                <li>
                  <h3 class="wow animate__animated animate__fadeInUp">Комфортно</h3>
                  <p class="wow animate__animated animate__fadeInUp">Нагрузка на свои волосы минимальна, неудобства во время сна отсутствуют. За наращенными прядями легко ухаживать.</p>
                </li>
                <li>
                  <h3 class="wow animate__animated animate__fadeInUp">Бережно</h3>
                  <p class="wow animate__animated animate__fadeInUp">Наращивание без боли. Капсулы не повреждают волосяную луковицу и не портят ваши волосы.</p>
                </li>
                <li>
                  <h3 class="wow animate__animated animate__fadeInUp">Безопасно</h3>
                  <p class="wow animate__animated animate__fadeInUp">Процедура подходит тонким, редким, коротким, светлым и тёмным, прямым и волнистым волосам.</p>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>

    <?php
      if (have_rows('our_works')) :
        ?>
        <section class="our-works">
          <div class="container">
            <h2 class="section-title center our-work__title">НАШИ РАБОТЫ по окрашиванию</h2>
            <div class="our-works__swipers">
              <div class="our-works__swiper-main">
                <div class="our-works__swiper-nav">
                  <div class="prev">
                    <svg xmlns="http://www.w3.org/2000/svg" width="43" height="43" viewBox="0 0 43 43" fill="none">
                      <ellipse cx="21.5" cy="21.5" rx="21.5" ry="21.5" fill="black" fill-opacity="0.5"/>
                      <path d="M25.8 32.8364L15.6364 22.2819L25.8 11.7273" stroke="white" stroke-width="1.27273" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                  </div>
                  <div class="next">
                    <svg xmlns="http://www.w3.org/2000/svg" width="43" height="43" viewBox="0 0 43 43" fill="none">
                      <ellipse cx="21.5" cy="21.5" rx="21.5" ry="21.5" transform="rotate(180 21.5 21.5)" fill="black" fill-opacity="0.5"/>
                      <path d="M17.2 10.1636L27.3636 20.7181L17.2 31.2727" stroke="white" stroke-width="1.27273" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                  </div>
                </div>
                <img class="our-works__main-before-after" src="<?php echo THEME_DIR_URI . '/assets/img/svg/before-after.svg'; ?>" alt="before-after">
                <div id="ourWorksMainSwiper" class="swiper">
                  <div class="swiper-wrapper">
                    <?php
                      while (have_rows('our_works')) : the_row();
                        $image = get_sub_field('img');
                        if ($image) :
                            ?>
                            <div class="swiper-slide">
                              <img src="<?php echo esc_url($image['url']) . '" alt="' . esc_attr($image['alt']) ?>">
                            </div>
                            <?php
                        endif;
                      endwhile;
                    ?>
                    </div>
                  </div>
                  <div class="our-works__swiper-pagination"></div>
                </div>
              <div class="our-works__swiper-thumbnails">
                <div id="ourWorksThumbnailsSwiper" class="swiper">
                    <div class="swiper-wrapper">
                    <?php
                      while (have_rows('our_works')) : the_row();
                        $image = get_sub_field('img');
                        if ($image) :
                            ?>
                            <div class="swiper-slide">
                              <img src="<?php echo esc_url($image['url']) . '" alt="' . esc_attr($image['alt']) ?>">
                            </div>
                            <?php
                        endif;
                      endwhile;
                    ?>
                    </div>
                  </div>
              </div>
            </div>
          </div>
        </section>
        <?php
      endif;
    ?>

    <section id="prices" class="prices">
      <div class="prices__bg prices__bg-top"></div>
      <div class="prices__bg prices__bg-bot"></div>
      <div class="container">
        <h2 class="section-title white center prices__title">
          НАШИ ЦЕНЫ:
        </h2>
        <div class="prices__items">
          <div class="prices__item wow animate__animated animate__fadeIn">
            <div class="brs prices__item-content">
              <h3 class="font-accent gold prices__item-title">КАПСУЛЬНОЕ НАРАЩИВАНИЕ</h3>
              <div class="price__list price__list--var-1">
                <div>
                  <h4>Наращивание</h4>
                  <p>(капсуляция/наращивание)</p>
                  <mark>35 ₽ <small>за капсулу</small></mark>
                </div>
                <div>
                  <h4>Коррекция</h4>
                  <p>(снятие/капсуляция/наращивание)</p>
                  <mark>40 ₽ <small>за капсулу</small></mark>
                </div>
                <div>
                  <h4>Снятие</h4>
                  <p>без дальнейшего наращивания</p>
                  <mark>1800 ₽</mark>
                </div>
                <div>
                  <h4>Капсуляция</h4>
                  <p>без дальнейшего наращивания</p>
                  <mark>10 ₽ <small>за капсулу</small></mark>
                </div>
              </div>
              <button data-title="КАПСУЛЬНОЕ <br /> НАРАЩИВАНИЕ" class="btn-accent prices__item-cta js-btn">ВЫБРАТЬ</button>
            </div>
          </div>
          <div class="prices__item wow animate__animated animate__fadeIn">
            <div class="brs prices__item-content">
              <h3 class="font-accent gold prices__item-title">ЛЕНТОЧНОЕ НАРАЩИВАНИЕ</h3>
              <div class="price__list price__list--var-2">
                <div class="price__list-item">
                  <h4>Лентирование</h4>
                  <ul>
                    <li>Переделка</li>
                    <li>Ремонт</li>
                    <li>Изготовление лент из срезов, капсул, трессов(возможна отправка в другие города)</li>
                  </ul>
                  <mark class="brs-top">4000 ₽ <small>за 100 г.</small></mark>
                  <br>
                  <mark class="brs-bot">6000 ₽ <small>за 100-200 г.</small></mark>
                </div>
                <div class="price__list-item">
                  <h4>лентирование + наращивание</h4>
                  <mark class="brs-top">5000 ₽ <small>за 100 г.</small></mark>
                  <br>
                  <mark class="brs-bot">8000 ₽ <small>за 100-200 г.</small></mark>
                  <p>
                    Без ограничений в занятиях спортом и плаванием.
                    Феном пользоваться можно.
                    Срок носки наращенных волос: от 2 до 4 месяцев
                    (влияет скорость роста собственных волос).
                    Затем - коррекция или снятие прядей
                  </p>
                </div>
              </div>
              <button data-title="ЛЕНТОЧНОЕ <br /> НАРАЩИВАНИЕ" class="btn-accent prices__item-cta js-btn">ВЫБРАТЬ</button>
            </div>
          </div>
        </div>
      </div>
    </section>

    <div class="cold">
      <div class="container">
        <h2 class="section-title center cold__title">ХОЛОДНОЕ ВОССТАНОВЛЕНИЕ ВОЛОС</h2>
        <div class="cold__content brs">
          <div class="cold__desc">
            <p>
            Цель холодного ухода - это обновление и омолаживание структуры. 
            В волосах заполняются пустоты, они напитываются, уплотняются, увлажняются, появляется блеск, уходит пористость 
            и всё это без выпрямляющего эффекта!
            </p>
            <p>
            Для более эффективного результата идеально пройти курс холодных уходов, в который будут входить отдельные шаги: реконструкция, питание и увлажнение.
            </p>
            <p>
            В холодном уходе, я не использую высокие температуры, в качестве помощника может быть выбрана Термошапка.
            </p>
          </div>
          <div class="cold__imgs">
            <div class="cold__img">
              <div class="cold__img-inner">
                <img src="<?php echo THEME_DIR_URI . '/assets/img/webp/cold-1.webp'; ?>" alt="hair">
              </div>
            </div>
            <div class="cold__img">
              <div class="cold__img-inner">
                <img src="<?php echo THEME_DIR_URI . '/assets/img/webp/cold-2.webp'; ?>" alt="hair">
              </div>
            </div>
            <div class="cold__img">
              <div class="cold__img-inner">
                <img src="<?php echo THEME_DIR_URI . '/assets/img/webp/cold-3.webp'; ?>" alt="hair">
              </div>
            </div>
            <div class="cold__img">
              <div class="cold__img-inner">
                <img src="<?php echo THEME_DIR_URI . '/assets/img/webp/cold-4.webp'; ?>" alt="hair">
              </div>
            </div>
          </div>
          <ol class="cold__steps">
            <li class="cold__step">
              <div class="cold__step-content brs border-gold">
              Подготовка волос: волосы необходимо очистить от накоплений железа, пыли, стайлинга, силиконов и т. д. специальным хелатным шампунем или ШГО.
              </div>
            </li>
            <li class="cold__step">
              <div class="cold__step-content brs border-gold">
              Активный шаг, который направлен или на глубокое увлажнение, реконструкцию или на питание волос с помощью аминокислот, коллагена, витамина В и протеинов.
              </div>
            </li>
            <li class="cold__step">
              <div class="cold__step-content brs border-gold">
              Восстановление баланса PH, влаги протеинов и липидов.
              </div>
            </li>
            <li class="cold__step">
              <div class="cold__step-content brs border-gold">
              Перед сушкой рекомендуем нанести на волосы термозащиту.
              </div>
            </li>
          </ol>
        </div>
        <div class="cold__info brs border-gold">
          <div class="cold__info-text">
            <p>
              Я работаю только на косметике премиум класса, поэтому вы можете не волноваться за ваши волосы.
            </p>
            <p>
            С помощью холодного восстановления я помогу Вам отрастить длину 
            и сделать волосы прочными и блестящими.
            </p>
          </div>
        </div>
      </div>
    </div>

    <section id="education" class="education section-m">
      <div class="container">
        <h2 class="section-title center education__title">ОБУЧЕНИЕ</h2>
        <div class="education__items">
          <div class="brs education__item wow animate__animated animate__fadeIn">
            <div class="education__img education__img--1">
              <img src="<?php echo THEME_DIR_URI . '/assets/img/webp/edu-1.webp'; ?>" alt="woman">
            </div>
            <div class="education__content">
              <div class="education__box">
                <h3 class="font-accent gold education__box-title">ОБУЧЕНИЕ ЛЕНТОЧНОМУ НАРАЩИВАНИЮ ОНЛАЙН</h3>
                <ol class="education__box-list">
                  <li>Замеры головы (схемы, расчеты)</li>
                  <li>Работа с волосами (подготовка, работа с кардой, окрас)</li>
                  <li>Инструменты и материалы</li>
                  <li>Техники лентирования волос</li>
                  <li>Техники наращивания лент, коррекция</li>
                  <li>Сертификат</li>
                  <li>Поставщики волос</li>
                </ol>
                <div class="white education__box-price">20 000 ₽</div>
                <button data-title="ОБУЧЕНИЕ ЛЕНТОЧНОМУ <br /> НАРАЩИВАНИЮ" class="btn-accent education__cta js-btn">ЗАПИСАТЬСЯ НА ОБУЧЕНИЕ</button>
              </div>
            </div>
          </div>
          <div class="brs education__item wow animate__animated animate__fadeIn">
            <div class="education__content">
              <div class="education__box">
                <h3 class="font-accent gold education__box-title">ОБУЧЕНИЕ КАПСУЛЬНОМУ НАРАЩИВАНИЮ ОНЛАЙН И ОФЛАЙН</h3>
                <ol class="education__box-list">
                  <li>Обзор инструментов</li>
                  <li>Обзор волос</li>
                  <li>Обзор кератина</li>
                  <li>Консультация клиента</li>
                  <li>Подготовка волос к наращиванию</li>
                  <li>Окрашивание среза</li>
                  <li>Смешивание оттенков</li>
                  <li>Плавная рстяжка</li>
                  <li>Окрашивание кератина</li>
                  <li>Вычес коротких волос</li>
                  <li>Капсуляция</li>
                  <li>Распределение волос при наращивании</li>
                  <li>Распределение волос при загущении</li>
                  <li>Заточенный инструмент</li>
                  <li>Внутренняя скрутка</li>
                  <li>Наружная скрутка</li>
                  <li>Техника углубление</li>
                  <li>Снятие волос</li>
                  <li>Как работать с обломанной макушкой</li>
                  <li>Как работать с ровным густым срезом</li>
                  <li>Как работать с короткой стрижкой</li>
                  <li>Как разделить срез на длины</li>
                  <li>Расстановка каскад</li>
                  <li>Как при коррекции не потерять длину</li>
                  <li>Как из волос 70 см получить густой срез</li>
                  <li>Загущение волной</li>
                  <li>Уход за наращёнными волосами</li>
                  <li>Методическое пособие</li>
                  <li>Поставщики</li>
                </ol>
                <div class="white education__box-price">40 000 ₽</div>
                <button data-title="ОБУЧЕНИЕ КАПСУЛЬНОМУ <br /> НАРАЩИВАНИЮ" class="btn-accent education__cta js-btn">ЗАПИСАТЬСЯ НА ОБУЧЕНИЕ</button>
              </div>
            </div>
            <div class="education__img education__img--1">
              <img src="<?php echo THEME_DIR_URI . '/assets/img/webp/edu-2.webp'; ?>" alt="woman">
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="contacts" class="contacts">
      <div class="container">
        <h2 class="section-title white contacts__title">НАШИ КОНТАКТЫ</h2>
        <div class="contacts__box">
          <div class="contacts__img">
            <div class="contacts__img-inner">
              <img src="<?php echo THEME_DIR_URI . '/assets/img/webp/evgeniya-contacts.webp'; ?>" alt="evgeniya">
            </div>
          </div>

          <div class="contacts__info">
            <div class="contacts__address">
              Наш адрес: г.Краснодар
              <br>
              ул. им. Героя Сарабеева В.И., 5к3
            </div>
            <div class="contacts__links">
              <a href="tel:79676716111" class="contacts__phone btn-o">
                <img src="<?php echo THEME_DIR_URI . '/assets/img/svg/phone.svg'; ?>" alt="phone">
                +7 (967) 671-61-11
              </a>
              <a href="https://wa.me/79676716111" class="contacts__whatsapp btn-o">
                <img src="<?php echo THEME_DIR_URI . '/assets/img/svg/whatsapp.svg'; ?>" alt="whatsapp">
                Написать в WhatsApp
              </a>
            </div>
          </div>

          <div class="contacts__map">
            <div class="contacts__map-inner"></div>
          </div>
        </div>
      </div>
    </section>

    <script>
      const contactMapParameters = {
        'zoom': 14,
        'centerOnPc': [45.054022, 39.029580],
        'placemarkCoord': [45.054022, 39.029580],
        'placemarkHint': 'им. Героя Сарабеева В.И., 5к3'
      };

      const contactMap = document.querySelector('.contacts .contacts__map .contacts__map-inner');
      if (contactMap) {
        ymaps.ready(() => {
          var isSmallScreen = window.screen.width < 991;

          const map = new ymaps.Map(
            contactMap,
            {
              'center': isSmallScreen ? contactMapParameters['placemarkCoord'] : contactMapParameters['centerOnPc'],
              'zoom': contactMapParameters['zoom'],
              'controls': []
            }
          );

          map.behaviors.disable("scrollZoom");
          if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
            map.behaviors.disable("drag")
          }
          window.addEventListener('resize', function () {
            isSmallScreen = window.screen.width < 991;
            if (isSmallScreen) {
              map.setCenter(contactMapParameters['placemarkCoord'])
            } else {
              map.setCenter(contactMapParameters['centerOnPc'])
            }
          }, true);

          map.controls.add(
            new ymaps.control.ZoomControl(
              {
                'options': {
                  'size': 'small',
                  'position': {
                    'top': 210,
                    'left': 'auto',
                    'right': 30
                  }
                }
              }
            )
          );

          map.controls.add(
            new ymaps.control.GeolocationControl(
              {
                'options': {
                  'position': {
                    'top': 281,
                    'left': 'auto',
                    'right': 30
                  }
                }
              }
            )
          );

          map.geoObjects.add(
            new ymaps.Placemark(
              contactMapParameters['placemarkCoord'], {
                'hintContent': contactMapParameters['placemarkHint']
              }, {
                'iconLayout': "default#image",
                //'iconImageHref': "<?php //get_template_directory_uri() ?>///static/images/common/placemark_new-building.svg",
                'iconImageHref': "<?php echo THEME_DIR_URI . '/assets/img/svg/geo.svg'; ?>",
                'iconImageSize': [28, 38],
                'iconImageOffset': [-10, -40],
                'searchControlProvider': "yandex#search"
              }
            )
          );
        });
      }
    </script>

  </main><!-- #main -->

<?php
get_footer();
