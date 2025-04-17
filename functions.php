<?php
if (!defined('_S_VERSION')) {
  // Версия темы. Если сменить, то закешированные стили и скрипты обновятся актуальными
  define('_S_VERSION', '1.0.0');
}

// Эта функция регистрирует необходимые вордпрессу вещи
function fast_vid_setup() {

  // эта фича позволяет вордпрессу управлять названием сайта (тегом title). Менять незачем.
  add_theme_support('title-tag');

  // тоже некоторые вещи регистрируемые по умолчанию в наше время. Менять незачем.
  add_theme_support(
    'html5',
    array(
      'search-form',
      'comment-form',
      'comment-list',
      'gallery',
      'caption',
      'style',
      'script',
    )
  );
}
add_action('after_setup_theme', 'fast_vid_setup');



// Функция для подключения скриптов и стилей
function fast_vid_scripts() {
  // подключение глобальной таблицы стилей. Не убирать.
  wp_enqueue_style('fast-vid-global-style', get_stylesheet_uri(), array(), _S_VERSION);

  /* подключение вашего стиля из папки css. Первый аргумент в функции wp_enqueue_style
   это ID (имя) стиля. Их нужно строго писать разными. Именовать можно, например, в
   соответствии с названием файла. Второй аргумент - это путь до файла стилей. Просто делайте по аналогии.
   Остальные аргументы можно не менять. 
  */
  wp_enqueue_style('fast-vid-style', get_template_directory_uri() . '/assets/styles/index.css', array(), _S_VERSION);

  /* 
    В случае использования jQuery в вашей вёрстке раскомментируйте три строки кода ниже,
    эти действия отключаеют стандартный JQuery с фронта сайта, затем 
    регистрируют и подключают ваш JQuery
  */
  // wp_deregister_script('jquery');
  // wp_register_script('jquery', get_template_directory_uri() . '/js/jquery-3.3.1.min.js', array(), _S_VERSION, true);
  // wp_enqueue_script('jquery');


  /* подключение вашего скрипта из папки js. Первый аргумент в функции wp_enqueue_script
   это ID (имя) скрипта. Их нужно строго писать разными. Именовать можно, например, в
   соответствии с названием файла. Второй аргумент - это путь до скрипта. Просто делайте по аналогии.
   Остальные аргументы можно не менять. 
  */
  wp_enqueue_script('fast-vid-script', get_template_directory_uri() . 'assets/scripts/index.bundle.js', array(), _S_VERSION, true);
}
add_action('wp_enqueue_scripts', 'fast_vid_scripts');


// если нужно будет подключать сюда ещё файл то вот пример как:
// require get_template_directory() . '/shortcodes/custom-shortcodes.php';
