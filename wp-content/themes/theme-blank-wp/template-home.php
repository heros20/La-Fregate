<?php
/* Template Name: home  */
$args = array(
    'post_type' => 'menu_du_jour',
    'post_status' => 'publish',
    'posts_per_page' => -1,
    'orderby' => 'date',
    'order' => 'ASC'
);

$entree = array(
    'post_type' => 'entree',
    'post_status' => 'publish',
    'posts_per_page' => -1,
    'orderby' => 'date',
    'order' => 'ASC'
);

$plats = array(
    'post_type' => 'plats',
    'post_status' => 'publish',
    'posts_per_page' => -1,
    'orderby' => 'date',
    'order' => 'ASC'
);

$desserts = array(
    'post_type' => 'desserts',
    'post_status' => 'publish',
    'posts_per_page' => -1,
    'orderby' => 'date',
    'order' => 'ASC'
);

$boisson = array(
    'post_type' => 'boisson',
    'post_status' => 'publish',
    'posts_per_page' => -1,
    'orderby' => 'date',
    'order' => 'ASC'
);

$team = array(
    'post_type' => 'equipier',
    'post_status' => 'publish',
    'posts_per_page' => -1,
    'orderby' => 'date',
    'order' => 'ASC'
);

$gallerie = array(
    'post_type' => 'gallerie',
    'post_status' => 'publish',
    'posts_per_page' => -1,
    'orderby' => 'date',
    'order' => 'ASC'
);
get_header();
?>

<div id="banner" class="banner full-screen-mode parallax">
        <div class="container pr">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="banner-static">
                    <div class="banner-text">
                        <div class="banner-cell">
                            <h1>Venez chez nous  <span class="typer" id="some-id" data-delay="200" data-delim=":" data-words="Entre ami(e)s:En familles:Entres collègues" data-colors="red"></span><span class="cursor" data-cursorDisplay="_" data-owner="some-id"></span></h1>
                            <h2>Restaurant La Fregate </h2>
                            
                            <div class="book-btn">
                                <a href="#reservation" class="table-btn hvr-underline-from-center">Réservez une table</a>
                            </div>
                            <a href="#about">
                                <div class="mouse"></div>
                            </a>
                        </div>
                        <!-- end banner-cell -->
                    </div>
                    <!-- end banner-text -->
                </div>
                <!-- end banner-static -->
            </div>
            <!-- end col -->
        </div>
        <!-- end container -->
    </div>
    <!-- end banner -->
<div id="ac-wrapper" style='display:none'>
    <div id="popup">
        <center>
             <h2>Votre réservation à bien été pris en compte, vous recevrez une confirmation par mail.</h2>  
             <p id="closeButton">X</p>
        </center>
    </div>
</div>
    <div id="about" class="about-main pad-top-100 pad-bottom-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                        <h2 class="block-title"> À propos </h2>
                        <h3>Restaurant moderne, accueil sympa et chaleureux .</h3>
                        <p>Du choix sur la carte.</p>
                        <p>Produits de la mer achetés directement chez le maraîcher.</p>
                        <p>Viande achetée chez le producteur.</p>
                        <p>Equipe jeune et dynamique.</p>
                        <p>Parking facile d'accès.</p>
                        <p>Formule le midi : entrée + plat + dessert</p>
                    </div>
                </div>
                <!-- end col -->
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                        <div class="about-<?= get_template_directory_uri() ?>/assets/images">
                            <img class="about-main" src="<?= get_template_directory_uri() ?>/assets/images/about-main.jpg" alt="About Main Image">
                            <img class="about-inset" src="<?= get_template_directory_uri() ?>/assets/images/about-inset.jpg" alt="About Inset Image">
                        </div>
                    </div>
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>

    <div id="menu_du_jour" class="special-menu pad-top-100 parallax">
        <div  class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                        <h2 class="block-title color-white text-center"> Menu du jour: </h2>
                        <h5 class="title-caption text-center">Chaque jour, un nouveau menu, retrouvez le ici au restaurant la Fregate!</h5>
                    </div>
                    <div class="special-box">
                        <div id="owl-demo">
                            <?php
                            $the_query = new WP_Query($args);
                            // The Loop
                            if ($the_query->have_posts()) { ?>
                                <?php while ($the_query->have_posts()) {
                                    $the_query->the_post(); ?>
                                    <?php $image = get_the_post_thumbnail_url(get_the_ID(), 'slider-img'); 
                                    $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');?>
                                     <div class="item item-type-zoom">
                                        <a href="#" class="item-hover">
                                            <div class="item-info">
                                                <div class="headline">
                                                   <?= get_the_title() ?>
                                                    <div class="line"></div>
                                                    <div class="dit-line"><?= get_the_content() ?></div>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="item-img">
                                            <img src="<?=  $image ?>">
                                        </div>
                                    </div>
                                <?php  } ?>
                            <?php } ?>
                        </div>
                    </div>
                    <!-- end special-box -->
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end special-menu -->

    <div id="menu" class="menu-main pad-top-100 pad-bottom-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                        <h2 class="block-title text-center">
						Notre carte 	
					</h2>
                        <p class="title-caption text-center">Retrouver ici l'intégralité de la carte de notre restaurant la Fregate!</p>
                    </div>
                    <div class="tab-menu">
                        <div class="slider slider-nav">
                            <div class="tab-title-menu">
                                <h2>Entrée</h2>
                                <p> <i class="flaticon-canape"></i> </p>
                            </div>
                            <div class="tab-title-menu">
                                <h2>Plat</h2>
                                <p> <i class="flaticon-dinner"></i> </p>
                            </div>
                            <div class="tab-title-menu">
                                <h2>Dessert</h2>
                                <p> <i class="flaticon-desert"></i> </p>
                            </div>
                            <div class="tab-title-menu">
                                <h2>Boisson</h2>
                                <p> <i class="flaticon-coffee"></i> </p>
                            </div>
                        </div>
                        <div class="slider slider-single">
                            <div>
                                <?php
                                $the_query = new WP_Query($entree);
                                // The Loop
                                if ($the_query->have_posts()) { ?>
                                    <?php while ($the_query->have_posts()) {
                                        $the_query->the_post(); ?>
                                        <?php $image = get_the_post_thumbnail_url(get_the_ID(), 'slider-img'); 
                                        $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');?>
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                                        <div class="offer-item">
                                            <img src="<?= $image ?>" alt="" class="img-responsive">
                                            <div>
                                                <h3> <?= get_the_title() ?> </h3>
                                                <p>
                                                <?= get_the_content() ?>
                                                </p>
                                            </div>
                                            <span class="offer-price"> <?= get_the_excerpt() ?> </span>
                                        </div>
                                    </div>
                                    <?php  } ?>
                                <?php } ?>
                            </div>
                            <div>
                                <?php
                                    $the_query = new WP_Query($plats);
                                    // The Loop
                                    if ($the_query->have_posts()) { ?>
                                        <?php while ($the_query->have_posts()) {
                                            $the_query->the_post(); ?>
                                            <?php $image = get_the_post_thumbnail_url(get_the_ID(), 'slider-img'); 
                                            $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');?>
                                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                                            <div class="offer-item">
                                                <img src="<?= $image ?>" alt="" class="img-responsive">
                                                <div>
                                                    <h3> <?= get_the_title() ?> </h3>
                                                    <p>
                                                    <?= get_the_content() ?>
                                                    </p>
                                                </div>
                                                <span class="offer-price"> <?= get_the_excerpt() ?> </span>
                                            </div>
                                        </div>
                                        <?php  } ?>
                                    <?php } ?>
                            </div>
                            <div>
                                <?php
                                    $the_query = new WP_Query($desserts);
                                    // The Loop
                                    if ($the_query->have_posts()) { ?>
                                        <?php while ($the_query->have_posts()) {
                                            $the_query->the_post(); ?>
                                            <?php $image = get_the_post_thumbnail_url(get_the_ID(), 'slider-img'); 
                                            $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');?>
                                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                                            <div class="offer-item">
                                                <img src="<?= $image ?>" alt="" class="img-responsive">
                                                <div>
                                                    <h3> <?= get_the_title() ?> </h3>
                                                    <p>
                                                    <?= get_the_content() ?>
                                                    </p>
                                                </div>
                                                <span class="offer-price"> <?= get_the_excerpt() ?> </span>
                                            </div>
                                        </div>
                                        <?php  } ?>
                                    <?php } ?>
                            </div>
                            <div>
                                <?php
                                    $the_query = new WP_Query($boisson);
                                    // The Loop
                                    if ($the_query->have_posts()) { ?>
                                        <?php while ($the_query->have_posts()) {
                                            $the_query->the_post(); ?>
                                            <?php $image = get_the_post_thumbnail_url(get_the_ID(), 'slider-img'); 
                                            $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');?>
                                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                                            <div class="offer-item">
                                                <img src="<?= $image ?>" alt="" class="img-responsive">
                                                <div>
                                                    <h3> <?= get_the_title() ?> </h3>
                                                    <p>
                                                    <?= get_the_content() ?>
                                                    </p>
                                                </div>
                                                <span class="offer-price"> <?= get_the_excerpt() ?> </span>
                                            </div>
                                        </div>
                                        <?php  } ?>
                                    <?php } ?>
                            </div>
                        </div>
                    </div>
                    <!-- end tab-menu -->
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end menu -->

    <div id="our_team" class="team-main pad-top-100 pad-bottom-100 parallax">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                        <h2 class="block-title text-center">
						Notre équipe	
					</h2>
                        <p class="title-caption text-center">Vous souhaitez connaitre le visage de celui qui cuisine pour vous à la Fregate?
                        <br>Retrouvez-le ci-dessous !</p>
                    </div>
                    <div class="team-box">

                        <div class="row flex_row">
                            <?php
                            $the_query = new WP_Query($team);
                            // The Loop
                            if ($the_query->have_posts()) { ?>
                                <?php while ($the_query->have_posts()) {
                                    $the_query->the_post(); ?>
                                    <?php $image = get_the_post_thumbnail_url(get_the_ID(), 'slider-img'); 
                                    $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');?>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="sf-team">
                                            <div class="thumb">
                                                <a href="#"><img src="<?= $image ?>" alt=""></a>
                                            </div>
                                            <div class="text-col">
                                                <h3><?= get_the_title() ?></h3>
                                                <p><?= get_the_content() ?></p>
                                                <!-- <ul class="team-social">
                                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                                </ul> -->
                                            </div>
                                        </div>
                                    </div>
                                <?php  } ?>
                            <?php } ?>
                        </div>
                        <!-- end row -->

                    </div>
                    <!-- end team-box -->

                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end team-main -->

    <div id="gallery" class="gallery-main pad-top-100 pad-bottom-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                        <h2 class="block-title text-center">
						Gallerie d'image	
					</h2>
                        <p class="title-caption text-center">Ci-dessous, les plats et divers que notre chef a préparés dans notre restaurant : la Fregate</p>
                    </div>
                    <div class="gal-container clearfix">
                        <?php
                            $the_query = new WP_Query($gallerie);
                            // The Loop
                            if ($the_query->have_posts()) { ?>
                                <?php while ($the_query->have_posts()) {
                                    $the_query->the_post(); ?>
                                    <?php $image = get_the_post_thumbnail_url(get_the_ID(), 'slider-img'); 
                                    $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');?>
                                    <div class="col-md-8 col-sm-12 co-xs-12 gal-item">
                                        <div class="box">
                                            <a href="#" data-toggle="modal" data-target="#<?= get_the_excerpt() ?>">
                                                <img src="<?= $image ?>" alt="" />
                                            </a>
                                            <div class="modal fade" id="<?= get_the_excerpt() ?>" tabindex="-1" role="dialog">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                                        <div class="modal-body">
                                                            <img src="<?= $image ?>" alt="" />
                                                        </div>
                                                        <div class="col-md-12 description">
                                                            <h4><?= get_the_content() ?></h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php  } ?>
                        <?php } ?>
                    </div>
                </div>
                    <!-- end gal-container -->
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end gallery-main -->

 



    <div id="reservation" class="reservations-main pad-top-100 pad-bottom-100">
        <div class="container">
            <div class="row">
                <div class="form-reservations-box">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                            <h2 class="block-title text-center">
						Reservations			
					</h2>
                        </div>
                        <h4 class="form-title">Formulaire de réservation</h4>
                        <p>Vous pouvez, si vous le souhaitez, réserver une table dans notre restaurant en quelques clics!
                        <br> veillez à bien remplir les champs avant de valider. 
                        </p>

                        <?php
                        $errors = array();
                        $success = false;
                        
                        if (!empty($_POST['submitted'])) {
                            // FAILLE XSS
                        
                            $nom = failleXSS('nom');
                            $email = failleXSS('email');
                            $nbrecouvert = failleXSS('nbrecouvert');
                            $date = failleXSS('date');
                            $phone = failleXSS('phone');
                        
                            // fonction pour afficher les erreurs eventuelles
                            $errors = validForm($errors, $nom, 'nom');
                            $errors = validEmail($errors, $email, 'email', 2, 50);
                            $errors = validNumber($errors, $nbrecouvert, 'nbrecouvert');
                            $errors = validDate($errors, $date, 'date');
                            $errors = validPhone($errors, $phone, 'phone');
                            
                        
                            if (count($errors) == 0) {
                                global $wpdb;
                                $table = $wpdb->prefix .'reservation';
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
                                        'hours' => $date,
                                        'nbrecouvert' => $nbrecouvert,
                                        'created_at' => current_time('mysql')
                                    ),
                                    array(
                                        '%s',
                                    )
                                );
                                $success = true;
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
                            }
                        }
                        
                        if($success == true){ ?>
                            <div id="formincription">
                                 <p>Merci d'avoir réservé, nous vous confirmerons celle-ci dans les plus brefs délais</p>
                            </div>
                            <?php $message = "Nouvelle reservation \r\n au nom de : ".$_POST['nom']."\r\n nombre de couvert : ".$_POST['nbrecouvert']."\r\n reservation le : ".date('d/m/Y  H:i',strtotime($_POST['date']));
                                mail('heros40@hotmail.fr', 'Reservation La Fregate', $message);
                                $messageClient = "Votre reservation a bien ete transmise au restaurant";
                                mail($_POST['email'], 'Reservation La Fregate', $messageClient);
                            ?>
                            
                        <?php } else { ?>
                        <form id="formincription" method="post" class="reservations-box" name="contactform" action="" novalidate>
                            
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="form-box">
                                        <input type="text" name="nom" id="nom" placeholder="Votre nom..." value="<?php if (!empty($_POST['nom'])) { echo $_POST['nom']; } ?>">
                                        <p><span class="error"><?php if (!empty($errors['nom'])) { echo $errors['nom']; } ?><span></p>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="form-box">
                                        <input type="email" name="email" id="email" placeholder="Votre email..." value="<?php if (!empty($_POST['email'])) {echo $_POST['email']; } ?>">
                                        <p><span class="error"><?php if (!empty($errors['email'])) {echo $errors['email'];  } ?><span></p>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-box">
                                    <select name="nbrecouvert" id="nbrecouvert" class="selectpicker" value="<?php if (!empty($_POST['nbrecouvert'])) { echo $_POST['nbrecouvert'];} ?>">
                                        <option selected disabled>Nombre de personnes</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                    </select>
                                    <p><span class="error"><?php if (!empty($errors['nbrecouvert'])) {echo $errors['nbrecouvert'];  } ?><span></p>

                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-box">
                                    <input type="datetime-local" id="date" name="date" placeholder="Date de réservation">
                                    <p><span class="error"><?php if (!empty($errors['date'])) {echo $errors['date']; } ?><span></p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-box">
                                    <input type="text" pattern="[0-9]{10}" name="phone" placeholder="Votre numéro..." value="<?php if (!empty($_POST['phone'])) { echo $_POST['phone'];} ?>"/>
                                    <p><span class="error"><?php if (!empty($errors['phone'])) {echo $errors['phone'];} ?><span></p>
                                </div>
                            </div>
                                
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="reserve-book-btn text-center">
                                    <button class="hvr-underline-from-center" type="submit" id="btn_submit" name="submitted" value="Envoyer">Réserver </button>
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