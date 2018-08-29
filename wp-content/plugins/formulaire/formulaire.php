<?php
/*
Plugin Name:  My formulaire
Version:      1
Author:       MC
License:      GPL2
*/
/** Step 2 (from text above). */
add_action( 'admin_menu', 'my_plugin_menu' );
add_action( 'admin_init', 'register_mysettings' );


/** Step 1. */
function my_plugin_menu() {
	add_options_page( 'My Plugin Options', 'My Plugin By MC', 'manage_options', 'my-unique-identifier', 'my_plugin_options' );
}

/** Step 3. */
function my_plugin_options() {
	if ( !current_user_can( 'manage_options' ) )  {
		wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
	}
	echo '<div class="wrap">';
	echo '<h1>Super Formulaire</h1>';
	echo '<form method="post" action="options.php">';
        settings_fields( 'myoption-group' );
		
		//@TODO Find out what it does
        do_settings_sections( 'myoption-group' );

        echo '<table class="form-table">';?>
        <th scope="row">Prénom</th>
        <td><input type="text" name="mc_firstName" value="<?php echo esc_attr( get_option('mc_firstName') ); ?>" /></td>
        <th scope="row">Nom</th>
        <td><input type="text" name="mc_lastName" value="<?php echo esc_attr( get_option('mc_lastName') ); ?>" /></td>
        <th scope="row">Nom de la boîte</th>
        <td><input type="text" name="mc_society" value="<?php echo esc_attr( get_option('mc_society') ); ?>" /></td>
        <th scope="row">Display banner?</th>
        <?php if(get_option('mc_check') == "true"): ?>
            <td><input type="checkbox" name="mc_check" value="true" checked/></td>
        <?php else: ?>
            <td><input type="checkbox" name="mc_check" value="true"/></td>
        <?php endif; ?>
    </table>
    <?php
    submit_button();
    echo '</form>';
    echo '<h2>Affichage du nom : ' . get_option('mc_firstName') . '</h2>';
	echo '</div>';
}
function register_mysettings() { // whitelist options
  register_setting( 'myoption-group', 'mc_firstName' );
  register_setting( 'myoption-group', 'mc_lastName' );
  register_setting( 'myoption-group', 'mc_society' );
  register_setting( 'myoption-group', 'mc_check' );

}


function name_funct() {
    return get_option('mc_firstName');
}

function society_funct() {
    return get_option('mc_society');
}

function check_funct() {
    return get_option('mc_check');
}

add_shortcode( 'name', 'name_funct' );
add_shortcode( 'society', 'society_funct' );
add_shortcode( 'check', 'check_funct' );