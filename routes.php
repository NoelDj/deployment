<?php

require_once __DIR__ . '/router.php';

get('/', 'views/index.php');
get('/monochromatic-color-scheme-creator', 'views/monochromatic-color-scheme-creator.php');
get('/password-generator-based-on-words', 'views/password-generator-based-on-words.php');
get('/image-to-color-palette', 'views/image-to-color-palette.php');
get('/word-counter-for-essays-and-posts', 'views/word-counter-for-essays-and-posts.php');
get('/to-do-list-editor', 'views/to-do-list-editor.php');
get('/online-image-editor', 'views/online-image-editor.php');
get('/pie-chart', 'views/pie-chart.php');
get('/numerals', 'views/numerals.php');
get('/business-name-generator-ideas', 'views/business-name-generator-ideas.php');




any('/404', 'views/404.php');
