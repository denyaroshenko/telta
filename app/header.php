<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="description" content="">
    <title><?php wp_title('«', true, 'right'); ?> <?php bloginfo('name'); ?></title>
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <?php wp_head(); ?>

  </head>
  <body <?php body_class(); ?>>
    <header>
      <div class="header__middle container">
        <a class="header__logo"></a>
        <div class="header__caption">Российский разработчик<br>и производитель средств связи</div>
        <div class="header__contacts">
          <select class="header__change_lang">
            <option value="">RU</option>
            <option value="">EN</option>
          </select>
          <div class="header__phone">8 800 244 90 90</div>
          <a href="#" class="header__callback">Заказать звонок</a>
        </div>
      </div>
      <nav class="main-nav">
        <div class="main-nav__wrapper container">
          <ul class="main-nav__list">
            <li class="main-nav__item"><a href="#">О компании</a></li>
            <li class="main-nav__item">
              <a href="#">Продукция</a>
              <ul class="dropdown-menu">
                <li><a href="#">Спецаппаратура</a></li>
                <li><a href="#">Бытовые и промышленные аппараты</a></li>
                <li><a href="#">ООКР</a></li>
                <li><a href="#">Инструментальное производство</a></li>
                <li><a href="#">Спецлаборатория</a></li>
                <li><a href="#">Пластмассовое производство</a></li>
              </ul>
            </li>
            <li class="main-nav__item"><a href="#">Услуги</a></li>
            <li class="main-nav__item"><a href="#">Поддержка</a></li>
            <li class="main-nav__item"><a href="#">Контактная информация</a></li>
          </ul>



          <form class="search">
            <input type="search" name="q" placeholder="Поиск по сайту">
            <input type="submit" value="">
          </form>
        </div>
      </nav>
    </header>
    <main>