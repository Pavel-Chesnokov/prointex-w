<!DOCTYPE html>
<html lang="ru"></html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="theme-color" content="#fff">
  <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <link rel="icon" href="https://prointechnology.ru/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php bloginfo('template_url');?>/img/favicons/favicon.ico" type="image/x-icon">
  <link rel="icon" sizes="16x16" href="<?php bloginfo('template_url');?>/img/favicons/favicon-16x16.png" type="image/png">
  <link rel="icon" sizes="32x32" href="<?php bloginfo('template_url');?>/img/favicons/favicon-32x32.png" type="image/png">
  <link rel="apple-touch-icon-precomposed" href="<?php bloginfo('template_url');?>/img/favicons/apple-touch-icon-precomposed.png">
  <link rel="apple-touch-icon" href="<?php bloginfo('template_url');?>/img/favicons/apple-touch-icon.png">
  <link rel="apple-touch-icon" sizes="57x57" href="<?php bloginfo('template_url');?>/img/favicons/apple-touch-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="<?php bloginfo('template_url');?>/img/favicons/apple-touch-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="<?php bloginfo('template_url');?>/img/favicons/apple-touch-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="<?php bloginfo('template_url');?>/img/favicons/apple-touch-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="<?php bloginfo('template_url');?>/img/favicons/apple-touch-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="<?php bloginfo('template_url');?>/img/favicons/apple-touch-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="<?php bloginfo('template_url');?>/img/favicons/apple-touch-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="<?php bloginfo('template_url');?>/img/favicons/apple-touch-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="167x167" href="<?php bloginfo('template_url');?>/img/favicons/apple-touch-icon-167x167.png">
  <link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo('template_url');?>/img/favicons/apple-touch-icon-180x180.png">
  <link rel="apple-touch-icon" sizes="1024x1024" href="<?php bloginfo('template_url');?>/img/favicons/apple-touch-icon-1024x1024.png"><?php wp_head(); ?>
</head>
<body>
  <div class="container-1200px">
    <header class="header row" id="header"><a class="header__link menu__main" href="#main">
        <div class="logo header__logo"><img class="logo__img" src="<?php bloginfo('template_url');?>/img/header/logo.png" alt="логотип"><span class="header_text text_logo header__text-logo">Проинтех</span></div></a>
      <div class="header__email">
        <div class="header__icon"><a href="mailto:prointex@bk.ru"> <img class="header__icon-email" src="<?php bloginfo('template_url');?>/img/header/email.png" alt="почта"></a></div><a class="text_main header__text" href="mailto:prointex@bk.ru">prointex@bk.ru</a>
      </div>
      <div class="header__phone">
        <div class="header__icon"><a href="tel:+74992682650"><img class="header__icon-phone" src="<?php bloginfo('template_url');?>/img/header/phone.png" alt="телефон"></a></div><a class="text_main header__text" href="tel:+74992682650">+7 499 268-26-50</a>
      </div>
      <div class="header__menu">
        <div class="menu">
          <div class="menu__button button-send_shadow" id="menu__button">
            <div class="hamburger hamburger1"><span class="bar bar1"></span><span class="bar bar2"></span><span class="bar bar3"></span><span class="bar bar4"></span></div>
          </div>
          <div class="menu__nav text_main text_half-bold text_mini">
            <nav>
              <ul>
                <li class="menu__advantages"><a href="#advantages">Почему выбирают нас?</a></li>
                <li class="menu__molds"><a href="#molds">Что мы производим?</a></li>
                <li class="menu__examples"><a href="#examples">Примеры работ</a></li>
                <li class="menu__stages"><a href="#stages">Как мы работаем?</a></li>
                <li class="menu__make"><a href="#make">Наше производство</a></li>
                <li class="menu__about"><a href="#about">О нас</a></li>
                <li class="menu__form"><a href="#form">Обсудим Ваш проект?</a></li>
                <li class="menu__contacts"><a href="#contacts">Контакты</a></li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </header>
    <!--include ../blocks/modules/nav-dot/nav-dot.pug-->
    <section class="main row" id="main">
      <div class="col-xl-7">
        <h1 class="text_title main__title"><?php the_field('header');?></h1>
        <button class="button-send__modal main__button-send button-send button-send_shadow">Оставить заявку</button>
      </div>
      <div class="col-xl-1"></div>
      <div class="main__img-wrapper col-xl-4">
        <div class="main__img">
          <div class="main__background"><img src="<?php bloginfo('template_url');?>/img/main/main.png" alt="пресс-форма"></div>
        </div>
      </div><a class="menu__main" href="#main"><span class="main__arrow-up"></span></a>
    </section>
    <section class="advantages row" id="advantages">
      <div class="advantages__background"></div>
      <h2 class="text_title text_line col-lg-6">Почему <br> выбирают нас? </h2>
      <div class="w-100"></div>
      <div class="owl-carousel advantages__slider owl-theme">
        <div class="col advantages__mob-item">
          <h3 class="text_title text_sub">Высокое качество</h3>
          <p class="text_main">Мы гарантируем 1000 0000 смыканий. Наши пресс-формы изготовлены из качественного металла и расчитаны на долгий срок службы</p>
        </div>
        <div class="col advantages__mob-item">
          <h3 class="text_title text_sub">Полный цикл</h3>
          <p class="text_main">От модели пластикового изделия, до готовой пресс-формы для серийного производства</p>
        </div>
        <div class="col advantages__mob-item">
          <h3 class="text_title text_sub">Точность</h3>
          <p class="text_main">Изготовление прототипа с точностью до 0.01 мм. Использование современного оборудования, позволяет выдерживать заявленную точность</p>
        </div>
        <div class="col advantages__mob-item">
          <h3 class="text_title text_sub">Быстрый сервис</h3>
          <p class="text_main">В случае поломки в максимально короткие сроки изготовим запасные части по имеющимся чертежам</p>
        </div>
        <div class="col advantages__mob-item">
          <h3 class="text_title text_sub">Индивидуальный подход</h3>
          <p class="text_main">Наши клиенты небольшие фирмы, которые получают наилучшее качество за умеренные деньги</p>
        </div>
        <div class="col advantages__mob-item">
          <h3 class="text_title text_sub">Опыт более 20 лет</h3>
          <p class="text_main">Сотрудничая с зарубежными партнерами, мы перенимаем технологии и внедряем их в свое производство</p>
        </div>
      </div><span class="text_title advantages__number text_number col-lg-1 reveal1" id="trigger1">1</span>
      <div class="advantages__item col-lg-5 advantages__item-left content-tween-left">
        <h3 class="text_title text_sub">Высокое качество</h3>
        <p class="text_main">Мы гарантируем 1000 0000 смыканий. Наши пресс-формы изготовлены из качественного металла и расчитаны на долгий срок службы</p>
      </div><span class="text_title advantages__number text_number col-lg-1">2</span>
      <div class="advantages__item col-lg-5 advantages__item-right content-tween-right">
        <h3 class="text_title text_sub">Полный цикл</h3>
        <p class="text_main">От модели пластикового изделия, до готовой пресс-формы для серийного производства</p>
      </div><span class="text_title advantages__number text_number col-lg-1"> 3</span>
      <div class="advantages__item col-lg-5 advantages__item-left">
        <h3 class="text_title text_sub">Точность</h3>
        <p class="text_main">Изготовление прототипа с точностью до 0.01 мм. Использование современного оборудования, позволяет выдерживать заявленную точность</p>
      </div><span class="text_title advantages__number text_number col-lg-1">4</span>
      <div class="advantages__item col-lg-5 advantages__item-right">
        <h3 class="text_title text_sub">Быстрый сервис</h3>
        <p class="text_main">В случае поломки в максимально короткие сроки изготовим запасные части по имеющимся чертежам</p>
      </div><span class="text_title advantages__number text_number col-lg-1">5</span>
      <div class="advantages__item col-lg-5 advantages__item-left">
        <h3 class="text_title text_sub">Индивидуальный подход</h3>
        <p class="text_main">Наши клиенты небольшие фирмы, которые получают наилучшее качество за умеренные деньги</p>
      </div><span class="text_title advantages__number text_number col-lg-1">6</span>
      <div class="advantages__item col-lg-5 advantages__item-right">
        <h3 class="text_title text_sub">Современные технологии</h3>
        <p class="text_main">Сотрудничая с зарубежными партнерами, мы перенимаем технологии и внедряем их в свое производство</p>
      </div>
    </section>
    <!--include ../blocks/modules/molds/molds.pug-->
    <section class="examples row" id="examples">
      <h2 class="examples__title text_title text_sub col-xl-6">Галерея работ</h2>
      <div class="w-100"></div>
      <div class="col-xl-6 examples_big" id="examples-1"></div>
      <div class="col-xl-6 examples__smale-wrapper row m-0 p-0 text_main text_mini">
        <div class="col-6 examples_smale mb-15" id="examples-2"></div>
        <div class="col-6 examples_smale mb-15" id="examples-3"></div>
        <div class="col-6 examples_smale mt-15" id="examples-4"></div>
        <div class="col-6 mt-15 examples__see-all">
          <h4 class="examples__see-all-title text_title text_bold text_fs-m">Посмотрите <br> другие <br>  проекты</h4><span class="examples__arr-right"><img src="<?php bloginfo('template_url');?>/img/examples/ArrowRight.png" alt="стрелка вправо"></span>
        </div>
      </div>
    </section>
    <div class="numbers row" id="numbers">
      <div class="numbers__background"></div>
      <div class="numbers__item col-lg-3"><span class="js-count-1 text_title text_numbers"></span>
        <p class="numbers_text text_title text_bold text_fs-m">лет опыта <br> работы <br> в производстве</p>
      </div>
      <div class="numbers__item col-lg-3"><span class="js-count-2 text_title text_numbers"></span>
        <p class="numbers_text text_title text_bold text_fs-m">элементов <br> пресс-формы <br> в неделю</p>
      </div>
      <div class="numbers__item col-lg-3"><span class="js-count-3 text_title text_numbers"></span>
        <p class="numbers_text text_title text_bold text_fs-m">элементов <br> пресс-формы <br> в месяц</p>
      </div>
      <div class="numbers__item col-lg-3"><span class="js-count-4 text_title text_numbers"></span>
        <P class="numbers_text text_title text_bold text_fs-m">пресс-форм <br> собрано <br> за год</P>
      </div>
    </div>
    <section class="stages row" id="stages">
      <h2 class="text_title text_line col-lg-6">Этапы <br> производства</h2>
      <div class="stages__slider owl-carousel owl-theme">
        <div class="stages__item col">
          <h3 class="text_title text_sub">Обсуждение технического задания</h3>
          <p class="text_main">Оставьте заявку на сайте или по телефону. Приложите техническое задание содержащее требование к пресс-форме, прототип изделия, чертеж, эскиз или 3D-модель</p>
        </div>
        <div class="stages__item col">
          <h3 class="text_title text_sub">Коммерческое предложение</h3>
          <p class="text_main">После согласования технического задания на проектирование пресс-формы. Мы вышлем коммерческое предложение с расчётом базовой стоимости и сроков работ <br><a class="text_link" href="<?php bloginfo('template_url');?>/files/Пример комерческого предложения.pdf" download="">Cкачать пример</a></p>
        </div>
        <div class="stages__item col">
          <h3 class="text_title text_sub">Проектирование</h3>
          <p class="text_main">Строится сборочная 3D модель пресс-формы, продумывается технология производства, разрабатываются управляющие программы для станков с ЧПУ, закупается металл и элементы формы</p>
        </div>
        <div class="stages__item col">
          <h3 class="text_title text_sub">Изготовление</h3>
          <p class="text_main">Комплекс металлообрабатывающих работ - фрезерные, шлифовальные, термообрабатывающие, электроэрозионные проволочные и прошивные операции. Слесарные работы и сборка пресс-формы</p>
        </div>
        <div class="stages__item col">
          <h3 class="text_title text_sub">Испытания</h3>
          <p class="text_main">Испытание в реальных условиях на вашем оборудование. Получение первых образцов отливки. Оценка качества готового изделия</p>
        </div>
        <div class="stages__item col">
          <h3 class="text_title text_sub">Доводка</h3>
          <p class="text_main">Доработка пресс-формы, внесение правок в конструкцию и технологический процесс литья</p>
        </div>
      </div>
      <div class="w-100"></div>
      <div class="stages__content col-lg-5 stages__row-1">
        <div class="stages__item">
          <h3 class="text_title text_sub">Обсуждение технического задания</h3>
          <p class="text_main">Оставьте заявку на сайте или по телефону. Приложите техническое задание содержащее требование к пресс-форме, прототип изделия, чертеж, эскиз или 3D-модель</p>
        </div>
        <div class="stages__item">
          <h3 class="text_title text_sub">Проектирование</h3>
          <p class="text_main">Строится сборочная 3D модель пресс-формы, продумывается технология производства, разрабатываются управляющие программы для станков с ЧПУ, закупается металл и элементы формы</p>
        </div>
        <div class="stages__item">
          <h3 class="text_title text_sub">Испытания</h3>
          <p class="text_main">Испытание в реальных условиях на вашем оборудование. Получение первых образцов отливки. Оценка качества готового изделия</p>
        </div>
      </div>
      <div class="stages__icon col-lg-2">
        <div class="stages__icon-dot-accent stages__1">
          <div class="stages__icon-dot-black"></div>
        </div>
        <div class="stages__icon-line-black"></div>
        <div class="stages__icon-dot-accent stages__2">
          <div class="stages__icon-dot-black"></div>
        </div>
        <div class="stages__icon-line-black"></div>
        <div class="stages__icon-dot-accent stages__3">
          <div class="stages__icon-dot-black"></div>
        </div>
        <div class="stages__icon-line-black"></div>
        <div class="stages__icon-dot-accent stages__4">
          <div class="stages__icon-dot-black"></div>
        </div>
        <div class="stages__icon-line-black"></div>
        <div class="stages__icon-dot-accent stages__5">
          <div class="stages__icon-dot-black"></div>
        </div>
        <div class="stages__icon-line-black"></div>
        <div class="stages__icon-dot-accent stages__6">
          <div class="stages__icon-dot-black"></div>
        </div>
      </div>
      <div class="stages__content col-lg-5 stages__row-2">
        <div class="stages__item">
          <h3 class="text_title text_sub">Коммерческое предложение</h3>
          <p class="text_main">После согласования технического задания на проектирование пресс-формы. Мы вышлем коммерческое предложение с расчётом базовой стоимости и сроков работ <br><a class="text_link" href="<?php bloginfo('template_url');?>/files/Пример комерческого предложения.pdf" download="">Cкачать пример</a></p>
        </div>
        <div class="stages__item">
          <h3 class="text_title text_sub">Изготовление</h3>
          <p class="text_main">Комплекс металлообрабатывающих работ - фрезерные, шлифовальные, термообрабатывающие, электроэрозионные проволочные и прошивные операции. Слесарные работы и сборка пресс-формы</p>
        </div>
        <div class="stages__item">
          <h3 class="text_title text_sub">Доводка</h3>
          <p class="text_main">Доработка пресс-формы, внесение правок в конструкцию и технологический процесс литья</p>
        </div>
      </div>
    </section>
    <section class="request row" id="request">
      <div class="request__background"></div>
      <button class="button-send button-send__modal request__button-send button-send_shadow">Оставить заявку</button>
    </section>
    <div class="popup-fade popup-fade-button-send">
      <form class="modalDialog form" id="form_modal" type="submit" method="post">
        <div class="modal-guts row"><a class="close-modal close" title="Закрыть">
            <div class="icon_close"><span class="line1"></span><span class="line2"></span></div></a>
          <h2 class="text_title text_line col-lg-12 col-6">Оставьте заявку</h2>
          <div class="w-100"></div>
          <p class="text_main col-lg-12">и мы свяжемся с вами в ближайшее время. <br> Заполните опросный лист или оставьте контакты</p><a class="text_link link_accent text_main col-lg-12" href="#">Скачать опросный лист</a>
          <div class="form__row col-md">
            <input class="input form__input form-control only_letters" placeholder="Имя*" required name="name">
            <input class="input form__input form-control only_number" id="phone1" name="phone" placeholder="Телефон*" type="tel" minlength="11" maxlength="11" required><span class="text_main form__error">Это поле должно содержать 11-ти значный номер телефона</span>
            <input class="input input__email form__input form-control" id="inputEmail4" name="email" placeholder="Email" type="email" required><span class="text_main form__error">Это поле должно содержать E-Mail в формате example@site.com</span>
            <div class="form__input form">
              <div class="control-group">
                <label class="control control-checkbox text_main text_mini label_whithe">Согласие на обработку персональных данных
                  <input class="control_indicator" type="checkbox" required>
                  <div class="control_indicator"></div>
                </label>
              </div>
            </div>
          </div>
          <div class="form__row col-md">
            <textarea class="input__comment form__textarea input form__input form__input_big form-control" name="message" type="text" placeholder="Комментарий*"></textarea>
            <div class="input-file col text_main text_accent form__input input_accent">
              <input class="inputfile" id="userfile_modal" type="file" name="userfile_modal[]" data-multiple-caption="{count} files selected" multiple="" accept="image/*">
              <label class="text_accent text_mini" for="userfile_modal"><span id="span_modal">Прикрепить файл</span></label>
            </div>
            <div class="alert" id="alert_modal"></div>
            <input id="recaptchaResponse_modal" type="hidden" name="recaptcha_response">
            <button class="button-send button-send_big form__button button-send_shadow col">Отправить заявку</button>
          </div>
        </div>
      </form>
    </div>
    <section class="make row" id="make">
      <h2 class="text_title text_line col-lg-6 col">Наше <br> производство</h2>
      <div class="w-100"></div>
      <div class="row">
        <div class="make__text col-xl-4 col">
          <h3 class="text_title text_sub col">Фрезерный участок</h3>
          <p class="text_main col"> Механическая обработка деталей пресс-формы, а также изготовление электродов для электроэрозии – зона ответственности фрезерного участка. В день выпускается от 10 до 30 единиц продукции</p>
        </div>
        <div class="make__slider offset-1 col-xl-7 col">
          <div class="owl-carousel slider-hover slider-hover__mill">
            <div class="slider-hover__info"><img class="slider-hover__img" src="<?php bloginfo('template_url');?>/img/make/mill/mcv300.jpg" alt="вертикальный обрабатывающий центр mcv 300">
              <div class="slider-hover__text slider-hover__mill-text">
                <h4 class="text_main text_half-bold">Вертикальны обрабатывающий центр MCV-300</h4>
                <p class="text_main text_mini">Ход по осям - X 610 мм, Y 305 мм, Z 460 мм <br> Скорость шпинделя - 10‘000 об/мин <br> Система ЧПУ - Fanuc</p>
              </div>
            </div>
            <div class="slider-hover__info"><img class="slider-hover__img" src="<?php bloginfo('template_url');?>/img/make/mill/IMG_2884.jpg" alt="вертикальный обрабатывающий центр mcv 300"></div>
            <div class="slider-hover__info"><img class="slider-hover__img" src="<?php bloginfo('template_url');?>/img/make/mill/IMG_2939.jpg" alt="инструмент для фрезерования"></div>
          </div>
        </div>
      </div>
      <div class="row flex-wrap-reverse">
        <div class="make__slider col-xl-7 col">
          <div class="owl-carousel slider-hover slider-hover__elec">
            <div class="slider-hover__info"><img class="slider-hover__img" src="<?php bloginfo('template_url');?>/img/make/elec/IMG_2759.jpg" alt="Электроэрозионный проволочно-вырезной станок Excetek v350">
              <div class="slider-hover__text slider-hover__elec-text">
                <h4 class="text_main text_half-bold">Электроэрозионный проволочно-вырезной станок Excetek v350 </h4>
                <p class="text_main text_mini">5 осей, управляемых серво двигателями <br>  Максимальный угол резания - 26 градусов / 80 мм</p>
              </div>
            </div>
            <div class="slider-hover__info"><img class="slider-hover__img" src="<?php bloginfo('template_url');?>/img/make/elec/IMG_2755.jpg" alt="Электроэрозионный копировально-прошивной станок AgieCharmilles Form 20">
              <div class="slider-hover__text slider-hover__elec-text">
                <h4 class="text_main text_half-bold">Электроэрозионный копировально-прошивной станок AgieCharmilles Form 20 </h4>
                <p class="text_main text_mini">Наилучшая шероховатость - Ra 0.1 Макс. <br> Cкорость съема материала - мм3/мин 800</p>
              </div>
            </div>
            <div class="slider-hover__info"><img class="slider-hover__img" src="<?php bloginfo('template_url');?>/img/make/elec/IMG_2817.jpg" alt="Супердрель AgieCharmiles Drill 20">
              <div class="slider-hover__text slider-hover__elec-text">
                <h4 class="text_main text_half-bold">Супердрель AgieCharmiles Drill 20</h4>
                <p class="text_main text_mini">Ход осей X, Y, Z мм - 300 x 200 x 300 <br> Максимальная глубина сверления 200 мм</p>
              </div>
            </div>
            <div class="slider-hover__info"><img class="slider-hover__img" src="<?php bloginfo('template_url');?>/img/make/elec/IMG_2879.jpg" alt="Формообразующая поверхность пресс-формы">
              <div class="slider-hover__text slider-hover__elec-text">
                <h4 class="text_main text_half-bold">Формообразующая поверхность пресс-формы</h4>
                <p class="text_main text_mini">Изготовлено на AgieCharmilles Form 20</p>
              </div>
            </div><img class="slider-hover__img" src="<?php bloginfo('template_url');?>/img/make/elec/IMG_2920.jpg" alt="Электроэрозионный проволочно-вырезной станок Excetek v350"><img class="slider-hover__img" src="<?php bloginfo('template_url');?>/img/make/elec/IMG_2768.jpg" alt="Электроэрозионный проволочно-вырезной станок Excetek v350"><img class="slider-hover__img" src="<?php bloginfo('template_url');?>/img/make/elec/IMG_2758.jpg" alt="Электроэрозионный проволочно-вырезной станок Excetek v350">
          </div>
        </div>
        <div class="make__text col-xl-4 offset-1 col">
          <h3 class="text_title text_sub col">Электро- <br> эрозионный участок</h3>
          <p class="text_main col">Здесь решают следующие задачи: прожиг формообразующей поверхности пресс-формы, обработка металлов высокой твердости, производство вставок, знаков, обрабокта конических поверхностей</p>
        </div>
      </div>
      <div class="row">
        <div class="make__text col-xl-4 col">
          <h3 class="text_title text_sub col">Слесарный участок</h3>
          <p class="text_main col" id="make-scroll"> Здесь выполняются шлифовальные, сверлильные, доводочные работы. А также производится сборка и упаковка пресс формы перед отправкой</p>
        </div>
        <div class="make__slider offset-1 col-xl-7 col">
          <div class="owl-carousel slider-hover slider-hover__manual">
            <div class="slider-hover__info"><img class="slider-hover__img" src="<?php bloginfo('template_url');?>/img/make/manual/IMG_2803.jpg" alt="слесарный стол"></div>
            <div class="slider-hover__info"><img class="slider-hover__img" src="<?php bloginfo('template_url');?>/img/make/manual/IMG_2827.jpg" alt="токарный станок"></div>
            <div class="slider-hover__info"><img class="slider-hover__img" src="<?php bloginfo('template_url');?>/img/make/manual/IMG_2869.jpg" alt="сверлильный станок"></div><img class="slider-hover__img" src="<?php bloginfo('template_url');?>/img/make/manual/IMG_2844.jpg" alt="комплектующие пресс-формы"><img class="slider-hover__img" src="<?php bloginfo('template_url');?>/img/make/manual/IMG_2853.jpg" alt="заточной станок"><img class="slider-hover__img" src="<?php bloginfo('template_url');?>/img/make/manual/IMG_2810.jpg" alt="сверлильный станок"><img class="slider-hover__img" src="<?php bloginfo('template_url');?>/img/make/manual/IMG_2809.jpg" alt="заточной станок Metabo">
          </div>
        </div>
      </div>
    </section>
    <section class="about row" id="about">
      <h2 class="text_title text_line col">О компании</h2>
      <div class="w-100"></div>
      <div class="about__photo col-lg-4"><img src="<?php bloginfo('template_url');?>/img/about/boss.jpg" alt="Генеральный директор ООО Принтех"></div>
      <div class="about__content offset-1 col-lg-7">
        <p class="about__post text_main">Высокая производительность и точность проделанной работы, постоянное улучшение количественных и, конечно, качественных показателей – этим характеризуется коллектив нашей компании. Новейшие разработки, связанные с литьем пластмасс и изготовлением инструментального производства, активно используются в процессе нашей работы. Каждая пресс-форма, изготовленная в наших цехах, является высококачественным продуктом. Если Вам необходимо качественное изделие, рассчитанное на длительный срок эксплуатации, отсутствие брака и гарантированное качество – приглашаем вас к сотрудничеству!</p>
        <p class="about__sign text_half-bold text_fs-m">Генеральный директор Натальчук С. А.</p>
      </div>
    </section>
    <!--include ../blocks/modules/team/team.pug-->
    <!--include ../blocks/modules/review/review.pug-->
    <!--include ../blocks/modules/client/client.pug-->
    <form class="form row" id="form" type="submit" method="post" enctype="multipart/form-data">
      <div class="form__background"></div>
      <h2 class="form__title text_title text_line col-lg-3">Оставьте заявку</h2>
      <div class="w-100"></div>
      <p class="form__comment text_main col-lg-7">и мы свяжемся с вами в ближайшее время. <br> Заполните опросный лист или оставьте контакты</p>
      <div class="w-100"></div><a class="text_link link_accent text_main col" href="<?php bloginfo('template_url');?>/files/Пример технического задания.docx" download="">Скачать опросный лист</a>
      <div class="w-100"></div>
      <div class="form__row col-lg-6">
        <input class="input form__input col form-control only_letters" placeholder="Имя*" name="name" required>
        <input class="input form__input col form-control only_number" id="phone1" placeholder="Телефон*" type="tel" minlength="11" maxlength="11" name="phone" required><span class="text_main form__error">Это поле должно содержать 11-ти значный номер телефона</span>
        <input class="input input__email form__input col form-control" id="inputEmail4" name="email" placeholder="Email" type="email" required><span class="text_main form__error">Это поле должно содержать E-Mail в формате example@site.com</span>
        <div class="form__input form">
          <div class="control-group">
            <label class="control control-checkbox text_main text_mini label_whithe">Согласие на обработку персональных данных
              <input class="control_indicator" type="checkbox" required>
              <div class="control_indicator"></div>
            </label>
          </div>
        </div>
      </div>
      <div class="form__row col-lg-6">
        <textarea class="input__comment form__textarea input form__input col form__input_big form-control" type="text" name="message" placeholder="Комментарий*"></textarea>
        <div class="input-file col text_main text_accent form__input input_accent">
        <?php if (empty($msg)) { ?>
          <input class="inputfile" id="userfile" type="file" name="userfile[]" data-multiple-caption="{count} files selected" multiple="" accept="image/*">
           <?php } else { echo $msg;} ?>
          <label class="text_accent text_mini" for="userfile"><span>Прикрепить файл</span></label>
        </div>
        <div class="alert" id="alert"></div>
        <input id="recaptchaResponse" type="hidden" name="recaptcha_response">
        <button class="button-send button-send_big form__button button-send_shadow col">Отправить заявку</button>
      </div>
    </form>
    <section class="contacts row" id="contacts">
      <div class="contacts__row col-lg-5 p-0 col-md-6">
        <h2 class="contacts__title text_title text_line col">Свяжитесь <br> с нами</h2>
        <div class="contacts__info col">
          <h3 class="text_main text_mini">Адрес:</h3>
          <p class="text-main text_half-bold text_fs-m">г. Москва, Колодезный переулок, дом 2а, стр. 1</p>
          <h3 class="text_main text_mini">Телефон:</h3>
          <p class="text-main text_half-bold text_fs-m">+7 (499) 268-26-50 <br> +7 (916) 182-21-38</p>
          <h3 class="text_main text_mini">Часы работы:</h3>
          <p class="text-main text_half-bold text_fs-m">Пн-Пт: 9:00 - 23:00 <br> Сб-Вс: 11:00 - 18:00</p>
        </div>
      </div>
      <div class="contacts__map col-lg-7 col-md-6">
        <div id="map"></div>
      </div>
      <div class="accordion col">
        <div class="tab text_main">
          <input id="tab1" type="checkbox" name="tab-group">
          <label class="tab-title text_title text_fs-m" for="tab1">Как добраться?</label>
          <section class="tab-content row">
            <div class="contacts__text col-lg-5">
              <ul class="text_bold">от метро «Сокольники»
                <li class="text_main">Автобусы <span class="bus">716</span></li>
                <li class="text_main">Троллейбус <span class="bus">Т32</span><span class="bus">Т41</span></li>
                <li class="text_main">Трамваи <span class="bus">7</span><span class="bus">13</span></li>
              </ul>
              <ul class="text_bold">от метро <br> «Преображенская площадь»
                <li class="text_main">Автобусы <span class="bus">716</span><span class="bus">332</span><span class="bus">265 </span></li>
                <li class="text_main">Троллейбус <span class="bus">т41</span><span class="bus">т32</span><span class="bus">т14</span></li>
                <li class="text_main">Трамваи <span class="bus">7</span><span class="bus">13</span></li>
              </ul>
              <p class="mt-15">До остановки -<span class="text_main bus m-0">«Трамвайное депо имени Русакова»</span></p>
              <p class="my-15">8 минут пешком по Колодезному переулку, через переход под путепроводом, до проходной -<span class="text_main bus m-0">«Новейшие технологии и связи»</span></p>
            </div>
            <div class="contacts__frame col-lg-7"><iframe src="https://www.google.com/maps/embed?pb=!4v1577335293009!6m8!1m7!1slP1_7oZzSsX_8mbdhanmaQ!2m2!1d55.79869977677306!2d37.69629840762851!3f266.60617503695147!4f-7.265917931323642!5f0.7820865974627469" width="100%" height="570px" frameborder="0" style="border:0;" allowfullscreen=""></iframe></div>
          </section>
        </div>
      </div>
    </section>
    <footer class="footer row text_main text_mini text_accent" id="footer">
      <div class="footer__background"></div>
      <ul class="footer__link col-12">
        <li><a class="text_link text_half-bold" href="<?php bloginfo('template_url');?>/files/Карточка.pdf" download="">Получить реквизиты</a></li>
        <li><a class="text_link text_half-bold" href="<?php bloginfo('template_url');?>/files/Политика конфиденциальности.pdf" download="">Политика конфидициальности</a></li>
      </ul>
      <p class="footer__copyright col-xl col-lg-12">© ООО “Проинтех” 2019. Все права защищены</p>
      <div class="footer__made-in col-xl col-lg-12"></div>
    </footer>
    <div class="popup-fade popup-fade-secces">
      <div class="alert-message-send modalDialog">
        <p class="alert-message-send__message text_main text_accent text_half-bold">СПАСИБО, <br> мы свяжемся с Вами в ближайшее время</p><a class="close-modal close" title="Закрыть">
          <div class="icon_close"><span class="line1"></span><span class="line2"></span></div></a>
      </div>
    </div><?php wp_footer(); ?>
  </div>
</body>