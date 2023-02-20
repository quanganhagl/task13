<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <title><?php wp_title('·',       TRUE,              'right');
			bloginfo('name');
			?>
    </title>

    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/reset.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>
    <?php wp_head() ?>

</head>

<body>
    <header class="c-header">
        <div class="l-container">
            <div class="c-header__top">
                <div class="logo">
                    <a href="<?php echo get_site_url(); ?>" class="u-defaulthover"><img
                            src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png"
                            alt="税理士法人下平会計事務所"></a>
                </div>
                <div class="contact">
                    <a href="tel:+0442332811" class="c-header__hedtel u-defaulthover"><img
                            src="<?php echo get_template_directory_uri(); ?>/assets/img/hed_tel.png"
                            alt="044-233-2811"></a><br />
                    <a href="<?php echo get_site_url(); ?>/enquiry"><img
                            src="<?php echo get_template_directory_uri(); ?>/assets/img/hed_con_no.png"
                            alt="Click here for email enquiry" class="js-imglink"></a>

                </div>
            </div>

            <nav class="c-gnav">
                <ul>
                    <li><a href="<?php echo get_site_url(); ?>/thoughts">私たちの想い</a></li>
                    <li><a href="<?php echo get_site_url(); ?>/strengths">6つの強み</a></li>
                    <li><a href="<?php echo get_site_url(); ?>/service">サービス</a></li>
                    <li><a href="<?php echo get_site_url(); ?>/staff">所員の紹介</a></li>
                    <li><a href="<?php echo get_site_url(); ?>/office">事務所案内</a></li>
                </ul>
            </nav>
        </div>

    </header>