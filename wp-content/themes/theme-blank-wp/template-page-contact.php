<?php
/* Template Name: page-contact  */
?>

<!doctype html>
<html <?php language_attributes(); ?>>

	<?php wp_head(); ?>
	<head>

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0">

    <!-- Site Metas -->
    <title>Restaurant La Fregate</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="<?= get_template_directory_uri() ?>/assets/images/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

   
    <!-- color -->
    <link id="changeable-colors" rel="stylesheet" href="<?= get_template_directory_uri() ?>/assets/css/colors/red.css" />
    <script type="text/javascript">
        var stylesheet_directory_uri = "<?php echo get_stylesheet_directory_uri(); ?>";
    </script>

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="loader">
        <div id="status"></div>
    </div>
    <div id="site-header">
        <header id="header" class="header-static">
            <div class="container">
                <div class="row">
                    <div class="main-menu">
                        <!-- navbar -->
                        <nav class="navbar navbar-default" id="mainNav">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <div class="logo">
                                    <a class="navbar-brand js-scroll-trigger logo-header" href="#">
                                        <img src="<?= get_template_directory_uri() ?>/assets/images/logo.png" alt="">
                                    </a>
                                </div>
                            </div>
                            <div id="navbar" class="navbar-collapse collapse">
                                <ul class="nav navbar-nav navbar-right">
                                    <li><a href="<?= esc_url(home_url('/')) ?>">Accueil</a></li>
                                    <li class="active"><a href="<?= esc_url(home_url('contact')) ?>">Contact</a></li>
                                </ul>
                            </div>
                            <!-- end nav-collapse -->
                        </nav>
                        <!-- end navbar -->
                    </div>
                </div>
                <!-- end row -->
            </div>
            <!-- end container-fluid -->
        </header>
        <!-- end header -->
    </div>
	<!-- end site-header -->
    <div id="ac-wrapper" style='display:none'>
        <div id="popup">
            <center>
                <h2>Votre message à bien été pris en compte, nous vous répondrons dans les plus brefs délais.</h2>  
                <p id="closeButton">X</p>
            </center>
        </div>
    </div>
    <div id="reservation" class="reservations-main pad-top-100 pad-bottom-100">
        <div class="container">
            <div class="row">
                <div class="form-reservations-box">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                            <h2 class="block-title text-center">
                                Contactez-nous			
                            </h2>
                                </div>
                                <h4 class="form-title">Formulaire de contact</h4>
                                <p>Renseigner les champs obligatoire* pour nous envoyer un message !</p>
                                <?php

                                $errors = array();
                                $success = false;


                                if (!empty($_POST['submitted'])) {
                                    // FAILLE XSS

                                    $nom = failleXSS('nom');
                                    $email = failleXSS('email');
                                    $phone = failleXSS('phone');
                                    $message = failleXSS('message');

                                    // fonction pour afficher les erreurs eventuelles
                                    $errors = validForm($errors, $nom, 'nom', 2, 50);
                                    $errors = validEmail($errors, $email, 'email', 2, 50);
                                    $errors = validPhone($errors, $phone, 'phone');
                                    $errors = validForm($errors, $message, 'message', 2, 1000);

                                    if (count($errors) == 0) {
                                        global $wpdb;
                                        $table = $wpdb->prefix .'contact';
                                        $table2 = $wpdb->prefix.'client';
                                        $wpdb->insert(
                                            $table2,
                                            array(
                                                'nom' => $nom,
                                                'numero' => $phone,
                                                'email' => $email,
                                                'created_at' => current_time('mysql')
                                            ),
                                            array(
                                                '%s',
                                            )
                                        );
                                        $wpdb->insert(
                                            $table,
                                            array(
                                                'id_client' => $wpdb->insert_id,
                                                'message' => $message,
                                                'created_at' => current_time('mysql')
                                            ),
                                            array(
                                                '%s',
                                            )
                                        );
                                        ?>
                                            <script type="text/javascript">
                                                function PopUp(hideOrshow) {
                                                if (hideOrshow == 'hide') document.getElementById('ac-wrapper').style.display = "none";
                                                else document.getElementById('ac-wrapper').removeAttribute('style');
                                                }
                                                window.onload = function () {
                                                    setTimeout(function () {
                                                        PopUp('show');
                                                    }, 0);
                                                }
                                            </script>
                                        <?php
                                        $success = true;
                                    }
                                }
                                if ($success == true) { ?>
                                    <div id="formincription">
                                        <p>Votre message a bien été transmis, nous vous recontacterons dans les plus bref délais</p>
                                        <?php $message = "Nouveau message \r\n de : ".$_POST['nom']."\r\n telephone : ".$_POST['phone']." \r\n email : ".$_POST['email']."\r\n message :\r\n ".$_POST['message'];
                                        mail('heros40@hotmail.fr', 'Message d\'un client de la Fregate', $message);
                                        $messageClient = "Votre message a bien ete transmis au restaurant la Fregate";
                                        mail($_POST['email'], 'Message du restaurant la Fregate', $messageClient);
                                    ?>
                                    </div>

                                <?php } else { ?>
                                    <form id="formincription" method="post" class="reservations-box" name="contactform" action="" novalidate>
                                                            
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <div class="form-box">
                                                <input type="text" name="nom" id="nom" placeholder="*Votre nom..." value="<?php if (!empty($_POST['nom'])) { echo $_POST['nom']; } ?>">
                                                <p><span class="error"><?php if (!empty($errors['nom'])) { echo $errors['nom']; } ?><span></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <div class="form-box">
                                                <input type="email" name="email" id="email" placeholder="*Votre email..." value="<?php if (!empty($_POST['email'])) {echo $_POST['email']; } ?>">
                                                <p><span class="error"><?php if (!empty($errors['email'])) {echo $errors['email'];  } ?><span></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <div class="form-box">
                                                <input type="text" pattern="[0-9]{10}" name="phone" placeholder="*Votre numéro..." value="<?php if (!empty($_POST['phone'])) { echo $_POST['phone'];} ?>"/>
                                                <p><span class="error"><?php if (!empty($errors['phone'])) {echo $errors['phone'];} ?><span></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <div class="form-box">
                                                <textarea name="message" id="message" placeholder="*Votre message..." style="overflow:auto;resize:none" rows="2" cols="120" value="<?php if (!empty($_POST['message'])) { echo $_POST['message'];} ?>" cols="80" rows="10"></textarea>
                                                <p><span class="error"><?php if (!empty($errors['message'])) { echo $errors['message']; } ?><span></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="reserve-book-btn text-center">
                                                <button class="hvr-underline-from-center" type="submit" id="btn_submit" name="submitted" value="Envoyer">Envoyer </button>
                                            </div>
                                        </div>

                                    </form>
                                <?php } ?>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end reservations-box -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end reservations-main -->
<?php
get_footer();