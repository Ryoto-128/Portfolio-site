<!DOCTYPE html>
<html lang="ja">

<head>
  <?php wp_head(); ?>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php bloginfo('name');
          wp_title('|', true, 'left'); ?></title>
  <link rel="shortcut icon" href="<?php bloginfo('template_url') ?>/img/icon.png">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
  <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/style.css" type="text/css">
</head>

<body>
  <header>
    <div class=title_wrapper>
      <h1 id="title">
        <a href="http://this-mylog.net/">
          This MyLog
        </a>
      </h1>

      <div class="socialIcon pc_icon">
        <div class="icon">
            <a href="https://github.com/Ryoto-128">
              <i class="fab fa-github fa-3x"></i>
            </a>
        </div>
        <div class="space">
        </div>
        <div class="icon">
            <a href="https://www.facebook.com/engr.ryoto/">
              <i class="fab fa-facebook fa-3x"></i>
            </a>
        </div>  
      </div>
    </div>

    <nav class="menu">
      <ul>
        <li class="about">
          <a href="<?php echo get_page_link(21); ?>">About</a>
        </li>
        <li class="portfolio">
          <a href="<?php echo get_page_link(25); ?>/portfolio">Portfolio</a>
        </li>
        <li class="tipslog">
          <a href="http://this-mylog.net/tipslog/" target="_blank" rel="noopener noreferrer">TipsLog</a>
        </li>
        <li class="contact">
          <a href="<?php echo get_page_link(23); ?>/contact">Contact</a>
        </li>
      </ul>
    </nav>

    <div class="socialIcon sp_icon">
      <div class="icon">
          <a href="https://github.com/Ryoto-128">
            <i class="fab fa-github fa-3x"></i>
          </a>
      </div>
      <div class="space">
      </div>
      <div class="icon">
          <a href="https://www.facebook.com/engr.ryoto/">
            <i class="fab fa-facebook fa-3x"></i>
          </a>
      </div>  
    </div>
  </header>
  <div class="wrapper">