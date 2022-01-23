<?php

function wpdocs_register_my_custom_moderation_page(){
    add_menu_page( 
        __( 'moderation', 'textdomain' ),
        '',
        'manage_options',
        'custompage_moderation',
        'my_custom_menu_page_moderation',
        '',
        // plugins_url( 'myplugin/images/icon.png' ),
        100
    ); 
}
add_action( 'admin_menu', 'wpdocs_register_my_custom_moderation_page' );
 
function my_custom_menu_page_moderation(){ 
    if(!empty($_GET['id'])){
        $id = $_GET['id'];
        global $wpdb;
        $table = $wpdb->prefix.'reservation';
        $table2 = $wpdb->prefix.'client';
        $sdl =  "SELECT * FROM $table WHERE id = $id ";
        $sdl2 =  "SELECT * FROM $table2 WHERE id = $id ";
        $reservations = $wpdb->get_results($sdl, ARRAY_A);
        $clients = $wpdb->get_results($sdl2, ARRAY_A);
        $adminUrl = admin_url().'admin.php?page=custompage_moderation&id='.$id;
        $errors = array();
        $success = false;
     

        if (!empty($_POST['submitted'])) {
            $valid = failleXSS('valid');
            $errors = validSelect($errors,'valid');
            if (count($errors) == 0) {
                if ($_POST['valid'] === 'validé') {
                    $sql = $wpdb->query( $wpdb->prepare( "
                        UPDATE $table
                        SET status = %s
                        WHERE id = $id",
                        $valid
                    ) ); 
                    
                    if ( false === $sql ) { ?>
                        <p>La modification a echouée</p>
                    <?php }
                    $validationClient = "Madame, Monsieur,
                    Votre réservation a été confirmé, le restaurant la Fregate vous attends";
                    mail($clients[0]['email'], 'Reservation La Fregate', $validationClient); 
                }elseif ($_POST['valid'] === 'supprimer') {
                    $wpdb->delete( $table, array( 'id' => $id ) );
                }
                if ($_POST['valid'] === 'refusé') {
                    $sql = $wpdb->query( $wpdb->prepare( "
                        UPDATE $table
                        SET status = %s
                        WHERE id = $id",
                        $valid
                    ) );
                    $refusClient = "Madame, Monsieur,
                    je vous informe que votre réservation a été refusé, le restaurant affiche complet, n'hésitez pas à nous contacter pour plus d'information, à bientôt à la Fregate !";
                    mail($clients[0]['email'], 'Reservation La Fregate', $refusClient); 
                }
                
                $success = true;
                echo "<script>location.href = 'https://bay-key.fr/wp-admin/admin.php?page=custompage_reservation';</script>";
                // wp_redirect('admin.php?page=custompage_reservation');
            }
        }
    }
    
?>
<form style="text-align:center;margin-top:200px;" action="" method="POST" novalidate>
    <div>
         <p style="font-size: 26px;">Valider, refuser ou supprimer la réservation</p>
    </div>
    <select style="font-size: 26px;padding: 0 100px;" name="valid" id="valid">
        <option value="validé">Valider</option>
        <option value="refusé">Refuser</option>
        <option value="supprimer">Supprimer</option>
    </select>
    <p><span class="error"><?php if (!empty($errors['valid'])) { echo $errors['valid']; } ?><span></p>
    <input style="font-size: 26px;padding: 0 100px;" type="submit" name="submitted" value="Confirmer">
</form>

<?php }