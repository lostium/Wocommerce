<?php
/**
 * SEUR User Settings.
 *
 * @package SEUR
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * SEUR nif
 */
function seur_nif_field(){ ?>
	<input title="<?php esc_html_e( 'Tax ID Number', 'seur' ); ?>" type="text" name="seur_nif_field" value="<?php echo esc_html( get_option( 'seur_nif_field' ) ); ?>" size="40" />
	<?php
}

/**
 * SEUR rate type
 */
function seur_rates_type_field() {
	$option = get_option( 'seur_rates_type_field' );
	?>

	<select id="seur_rates_type" name="seur_rates_type_field">
		<option value="price"  
		<?php
		if ( 'price' === $option ) {
			echo ' selected';}
		?>
		><?php esc_html_e( 'By Price', 'seur' ); ?></option>
		<option value="weight"  
		<?php
		if ( 'weight' === $option ) {
			echo ' selected';}
		?>
		><?php esc_html_e( 'By Weight', 'seur' ); ?></option>
	</select>
	<?php
}

/**
 * SEUR Apply TAX
 */
function seur_rates_tax_field() {
	$option = get_option( 'seur_rates_tax_field' );
	?>

	<select id="seur_tax_type" name="seur_rates_tax_field">
		<option value="withtax"  
		<?php
		if ( 'withtax' === $option ) {
			echo ' selected';}
		?>
		><?php esc_html_e( 'Check with Tax', 'seur' ); ?></option>
		<option value="withouttax"  
		<?php
		if ( 'withouttax' === $option ) {
			echo ' selected';}
		?>
		><?php esc_html_e( 'Check without Tax', 'seur' ); ?></option>
	</select>
	<?php
}

/**
 * SEUR empresa
 */
function seur_empresa_field() {
	?>
	<input title="<?php esc_html_e( 'Company', 'seur' ); ?>" type="text" name="seur_empresa_field" value="<?php echo esc_html( get_option( 'seur_empresa_field' ) ); ?>" size="40" />
	<?php
}

/**
 * SEUR via tipo
 */
function seur_viatipo_field() {
	$option = get_option( 'seur_viatipo_field' );
	?>

	<select id="street_type" name="seur_viatipo_field">
		<option value="AVD"  
		<?php
		if ( 'AVD' === $option ) {
			echo ' selected';}
		?>
		><?php esc_html_e( 'Avenue', 'seur' ); ?></option>
		<option value="PZA"  
		<?php
		if ( 'PZA' === $option ) {
			echo ' selected';}
		?>
		><?php esc_html_e( 'Square', 'seur' ); ?></option>
		<option value="CL"  
		<?php
		if ( 'CL' === $option ) {
			echo ' selected';}
		?>
		><?php esc_html_e( 'Street', 'seur' ); ?></option>
	</select>
	<?php
}

/**
 * SEUR Via nombre
 */
function seur_vianombre_field() {
	?>
	<input title="<?php esc_html_e( 'Pickup Address', 'seur' ); ?>" type="text" name="seur_vianombre_field" value="<?php echo esc_html( get_option( 'seur_vianombre_field' ) ); ?>" size="40" />
	<?php
}

/**
 * SEUR Via numero
 */
function seur_vianumero_field() {
	?>
	<input title="<?php esc_html_e( 'Pickup Address', 'seur' ); ?>" type="text" name="seur_vianumero_field" value="<?php echo esc_html( get_option( 'seur_vianumero_field' ) ); ?>" size="40" />
	<?php
}

/**
 * SEUR escalera
 */
function seur_escalera_field() {
	?>
	<input title="<?php esc_html_e( 'Pickup Address', 'seur' ); ?>" type="text" name="seur_escalera_field" value="<?php echo esc_html( get_option( 'seur_escalera_field' ) ); ?>" size="40" />
	<?php
}

/**
 * SEUR piso
 */
function seur_piso_field() {
	?>
	<input title="<?php esc_html_e( 'Pickup Address', 'seur' ); ?>" type="text" name="seur_piso_field" value="<?php echo esc_html( get_option( 'seur_piso_field' ) ); ?>" size="40" />
	<?php
}

/**
 * SEUR puerta
 */
function seur_puerta_field() {
	?>
	<input title="<?php esc_html_e( 'Pickup Address', 'seur' ); ?>" type="text" name="seur_puerta_field" value="<?php echo esc_html( get_option( 'seur_puerta_field' ) ); ?>" size="40" />
	<?php
}

/**
 * SEUR postal
 */
function seur_postal_field() {
	?>
	<input title="<?php esc_html_e( 'For Spain 5 digits, for Portugal 4 digits', 'seur' ); ?>" type="text" name="seur_postal_field" value="<?php echo esc_html( get_option( 'seur_postal_field' ) ); ?>" size="40" />
	<?php
}

/**
 * SEUR poblacion
 */
function seur_poblacion_field() {
	?>
	<input title="<?php esc_html_e( 'Pickup Address', 'seur' ); ?>" type="text" name="seur_poblacion_field" value="<?php echo esc_html( get_option( 'seur_poblacion_field' ) ); ?>" size="40" />
	<?php
}

/**
 * SEUR provincia
 */
function seur_provincia_field() {
	?>
	<input title="<?php esc_html_e( 'Pickup Address', 'seur' ); ?>" type="text" name="seur_provincia_field" value="<?php echo esc_html( get_option( 'seur_provincia_field' ) ); ?>" size="40" />
	<?php
}

/**
 * SEUR pais
 */
function seur_pais_field() {
	$option = get_option( 'seur_pais_field' );
	?>

	<select id="country" name="seur_pais_field">
		<option value="ES"  
		<?php
		if ( 'ES' === $option ) {
			echo ' selected';}
		?>
		><?php esc_html_e( 'Spain', 'seur' ); ?></option>
		<option value="PT"  
		<?php
		if ( 'PT' === $option ) {
			echo ' selected';}
		?>
		><?php esc_html_e( 'Portugal', 'seur' ); ?></option>
		<option value="AD"  
		<?php
		if ( 'AD' === $option ) {
			echo ' selected';}
		?>
		><?php esc_html_e( 'Andorra', 'seur' ); ?></option>
	</select>

	<?php
}

/**
 * SEUR teléfono
 */
function seur_telefono_field() {
	?>
	<input title="<?php esc_html_e( 'Contact phone', 'seur' ); ?>" type="text" name="seur_telefono_field" value="<?php echo esc_html( get_option( 'seur_telefono_field' ) ); ?>" size="40" />
	<?php
}

/**
 * SEUR email
 */
function seur_email_field() {
	?>
	<input title="<?php esc_html_e( 'Contact email', 'seur' ); ?>" type="text" name="seur_email_field" value="<?php echo esc_html( get_option( 'seur_email_field' ) ); ?>" size="40" />
	<?php
}

/**
 * SEUR contacto nombre
 */
function seur_contacto_nombre_field() {
	?>
	<input title="<?php esc_html_e( 'Contact name', 'seur' ); ?>" type="text" name="seur_contacto_nombre_field" value="<?php echo esc_html( get_option( 'seur_contacto_nombre_field' ) ); ?>" size="40" />
	<?php
}

/**
 * SEUR contacto apellidos
 */
function seur_contacto_apellidos_field() {
	?>
	<input title="<?php esc_html_e( 'Contact Surnames', 'seur' ); ?>" type="text" name="seur_contacto_apellidos_field" value="<?php echo esc_html( get_option( 'seur_contacto_apellidos_field' ) ); ?>" size="40" />
	<?php
}

/**
 * SEUR CIT código
 */
function seur_cit_codigo_field() {
	?>
	<input title="<?php esc_html_e( 'Integrated client code (given by SEUR)', 'seur' ); ?>" type="text" name="seur_cit_codigo_field" value="<?php echo esc_html( get_option( 'seur_cit_codigo_field' ) ); ?>" size="40" />
	<?php
}

/**
 * SEUR CIT usuario
 */
function seur_cit_usuario_field() {
	?>
	<input title="<?php esc_html_e( 'User to generate labels (given by SEUR)', 'seur' ); ?>" type="text" name="seur_cit_usuario_field" value="<?php echo esc_html( get_option( 'seur_cit_usuario_field' ) ); ?>" size="40" />
	<?php
}

/**
 * SEUR CIT contraseña
 */
function seur_cit_contra_field() {
	?>
	<input title="<?php esc_html_e( 'Password to generate the labels (given by SEUR)', 'seur' ); ?>" type="text" name="seur_cit_contra_field" value="<?php echo esc_html( get_option( 'seur_cit_contra_field' ) ); ?>" size="40" />
	<?php
}

/**
 * SEUR CCC
 */
function seur_ccc_field() {
	?>
	<input title="<?php esc_html_e( 'Country Account Code with SEUR (given by SEUR)', 'seur' ); ?>" type="text" name="seur_ccc_field" value="<?php echo esc_html( get_option( 'seur_ccc_field' ) ); ?>" size="40" maxlength="5" />
	<?php
}

/**
 * SEUR CCC Internacional
 */
function seur_int_ccc_field() {
	?>
	<input title="<?php esc_html_e( 'International Account Code with SEUR (given by SEUR)', 'seur' ); ?>" type="text" name="seur_int_ccc_field" value="<?php echo esc_html( get_option( 'seur_int_ccc_field' ) ); ?>" size="40" maxlength="5" />
	<?php
}

/**
 * SEUR franquicia
 */
function seur_franquicia_field() {
	?>
	<input title="<?php esc_html_e( 'Two-digit numeric code (given by SEUR)', 'seur' ); ?>" type="text" name="seur_franquicia_field" value="<?php echo esc_html( get_option( 'seur_franquicia_field' ) ); ?>" size="40" maxlength="2" />
	<?php
}

/**
 * SEUR seurcom usuario
 */
function seur_seurcom_usuario_field() {
	?>
	<input title="<?php esc_html_e( 'User access to seur.com (given by SEUR)', 'seur' ); ?>" type="text" name="seur_seurcom_usuario_field" value="<?php echo esc_html( get_option( 'seur_seurcom_usuario_field' ) ); ?>" size="40" />
	<?php
}

/**
 * SEUR seurcom contraseña
 */
function seur_seurcom_contra_field() {
	?>
	<input title="<?php esc_html_e( 'Access password seur.com (given by SEUR)', 'seur' ); ?>" type="text" name="seur_seurcom_contra_field" value="<?php echo esc_html( get_option( 'seur_seurcom_contra_field' ) ); ?>" size="40" />
	<?php
}

/**
 * SEUR display user settings
 */
function display_seur_user_sittings_panel_fields() {

	add_settings_section( 'seur-user-settings-section', null, null, 'seur-user-settings-options' );
	add_settings_field( 'seur_nif_field', __( 'Tax ID Number', 'seur' ), 'seur_nif_field', 'seur-user-settings-options', 'seur-user-settings-section' );
	add_settings_field( 'seur_rates_tax_field', __( 'Check price with tax', 'seur' ), 'seur_rates_tax_field', 'seur-user-settings-options', 'seur-user-settings-section' );
	add_settings_field( 'seur_rates_type_field', __( 'How to apply rates?', 'seur' ), 'seur_rates_type_field', 'seur-user-settings-options', 'seur-user-settings-section' );
	add_settings_field( 'seur_empresa_field', __( 'Company', 'seur' ), 'seur_empresa_field', 'seur-user-settings-options', 'seur-user-settings-section' );
	add_settings_field( 'seur_viatipo_field', __( 'Type of road', 'seur' ), 'seur_viatipo_field', 'seur-user-settings-options', 'seur-user-settings-section' );
	add_settings_field( 'seur_vianombre_field', __( 'Road name', 'seur' ), 'seur_vianombre_field', 'seur-user-settings-options', 'seur-user-settings-section' );
	add_settings_field( 'seur_vianumero_field', __( 'Road number', 'seur' ), 'seur_vianumero_field', 'seur-user-settings-options', 'seur-user-settings-section' );
	add_settings_field( 'seur_escalera_field', __( 'Stairwell', 'seur' ), 'seur_escalera_field', 'seur-user-settings-options', 'seur-user-settings-section' );
	add_settings_field( 'seur_piso_field', __( 'Floor', 'seur' ), 'seur_piso_field', 'seur-user-settings-options', 'seur-user-settings-section' );
	add_settings_field( 'seur_puerta_field', __( 'Door', 'seur' ), 'seur_puerta_field', 'seur-user-settings-options', 'seur-user-settings-section' );
	add_settings_field( 'seur_postal_field', __( 'Postcode', 'seur' ), 'seur_postal_field', 'seur-user-settings-options', 'seur-user-settings-section' );
	add_settings_field( 'seur_provincia_field', __( 'Province', 'seur' ), 'seur_provincia_field', 'seur-user-settings-options', 'seur-user-settings-section' );
	add_settings_field( 'seur_poblacion_field', __( 'Town/City', 'seur' ), 'seur_poblacion_field', 'seur-user-settings-options', 'seur-user-settings-section' );
	add_settings_field( 'seur_pais_field', __( 'Country', 'seur' ), 'seur_pais_field', 'seur-user-settings-options', 'seur-user-settings-section' );
	add_settings_field( 'seur_telefono_field', __( 'Telephone', 'seur' ), 'seur_telefono_field', 'seur-user-settings-options', 'seur-user-settings-section' );
	add_settings_field( 'seur_email_field', __( 'E-mail', 'seur' ), 'seur_email_field', 'seur-user-settings-options', 'seur-user-settings-section' );
	add_settings_field( 'seur_contacto_nombre_field', __( 'Name', 'seur' ), 'seur_contacto_nombre_field', 'seur-user-settings-options', 'seur-user-settings-section' );
	add_settings_field( 'seur_contacto_apellidos_field', __( 'Surnames', 'seur' ), 'seur_contacto_apellidos_field', 'seur-user-settings-options', 'seur-user-settings-section' );
	add_settings_field( 'seur_cit_codigo_field', __( 'CIT code<sup>*</sup>', 'seur' ), 'seur_cit_codigo_field', 'seur-user-settings-options', 'seur-user-settings-section' );
	add_settings_field( 'seur_cit_usuario_field', __( 'CIT user<sup>*</sup>', 'seur' ), 'seur_cit_usuario_field', 'seur-user-settings-options', 'seur-user-settings-section' );
	add_settings_field( 'seur_cit_contra_field', __( 'CIT password<sup>*</sup>', 'seur' ), 'seur_cit_contra_field', 'seur-user-settings-options', 'seur-user-settings-section' );
	add_settings_field( 'seur_ccc_field', __( 'CCC<sup>*</sup>', 'seur' ), 'seur_ccc_field', 'seur-user-settings-options', 'seur-user-settings-section' );
	add_settings_field( 'seur_int_ccc_field', __( 'International CCC<sup>*</sup>', 'seur' ), 'seur_int_ccc_field', 'seur-user-settings-options', 'seur-user-settings-section' );
	add_settings_field( 'seur_franquicia_field', __( 'Franchise<sup>*</sup>', 'seur' ), 'seur_franquicia_field', 'seur-user-settings-options', 'seur-user-settings-section' );
	add_settings_field( 'seur_seurcom_usuario_field', __( 'SEUR.com user<sup>*</sup>', 'seur' ), 'seur_seurcom_usuario_field', 'seur-user-settings-options', 'seur-user-settings-section' );
	add_settings_field( 'seur_seurcom_contra_field', __( 'SEUR.com password<sup>*</sup>', 'seur' ), 'seur_seurcom_contra_field', 'seur-user-settings-options', 'seur-user-settings-section' );

	// register all setings.
	register_setting( 'seur-user-settings-section', 'seur_nif_field' );
	register_setting( 'seur-user-settings-section', 'seur_rates_tax_field' );
	register_setting( 'seur-user-settings-section', 'seur_rates_type_field' );
	register_setting( 'seur-user-settings-section', 'seur_empresa_field' );
	register_setting( 'seur-user-settings-section', 'seur_viatipo_field' );
	register_setting( 'seur-user-settings-section', 'seur_vianombre_field' );
	register_setting( 'seur-user-settings-section', 'seur_vianumero_field' );
	register_setting( 'seur-user-settings-section', 'seur_escalera_field' );
	register_setting( 'seur-user-settings-section', 'seur_piso_field' );
	register_setting( 'seur-user-settings-section', 'seur_puerta_field' );
	register_setting( 'seur-user-settings-section', 'seur_postal_field' );
	register_setting( 'seur-user-settings-section', 'seur_poblacion_field' );
	register_setting( 'seur-user-settings-section', 'seur_provincia_field' );
	register_setting( 'seur-user-settings-section', 'seur_pais_field' );
	register_setting( 'seur-user-settings-section', 'seur_telefono_field' );
	register_setting( 'seur-user-settings-section', 'seur_email_field' );
	register_setting( 'seur-user-settings-section', 'seur_contacto_nombre_field' );
	register_setting( 'seur-user-settings-section', 'seur_contacto_apellidos_field' );
	register_setting( 'seur-user-settings-section', 'seur_cit_codigo_field' );
	register_setting( 'seur-user-settings-section', 'seur_cit_usuario_field' );
	register_setting( 'seur-user-settings-section', 'seur_cit_contra_field' );
	register_setting( 'seur-user-settings-section', 'seur_ccc_field' );
	register_setting( 'seur-user-settings-section', 'seur_int_ccc_field' );
	register_setting( 'seur-user-settings-section', 'seur_franquicia_field' );
	register_setting( 'seur-user-settings-section', 'seur_seurcom_usuario_field' );
	register_setting( 'seur-user-settings-section', 'seur_seurcom_contra_field' );

}
add_action( 'admin_init', 'display_seur_user_sittings_panel_fields' );
