<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

?>
    <div class="container">
        <br>

        <p><?php _e( 'Custom Names for Seur Rates', 'seur' ); ?></p>

        <hr>
        <?php
            if ( ! isset( $_POST['seur_custom_name_rates_post'] ) ) {
	            $seur_bc2_custom_name  = '';
				$seur_10e_custom_name  = '';
				$seur_10ef_custom_name = '';
				$seur_13e_custom_name  = '';
				$seur_13f_custom_name  = '';
				$seur_48h_custom_name  = '';
				$seur_72h_custom_name  = '';
				$seur_cit_custom_name  = '';

				$seur_bc2_custom_name  = get_option( 'seur_bc2_custom_name_field'  );
				$seur_10e_custom_name  = get_option( 'seur_10e_custom_name_field'  );
				$seur_10ef_custom_name = get_option( 'seur_10ef_custom_name_field' );
				$seur_13e_custom_name  = get_option( 'seur_13e_custom_name_field'  );
				$seur_13f_custom_name  = get_option( 'seur_13f_custom_name_field'  );
				$seur_48h_custom_name  = get_option( 'seur_48h_custom_name_field'  );
				$seur_72h_custom_name  = get_option( 'seur_72h_custom_name_field'  );
				$seur_cit_custom_name  = get_option( 'seur_cit_custom_name_field'  );

            ?>


        <div class="content-loader">
            <form method="post" action="admin.php?page=seur_rates_prices&tab=custom_rates_name">

                <table class="form-table">
                    <tbody>
                        <tr>
                            <th scope="row">B2C Estándar</th>

                            <td><input title="<?php _e('Custom Name for ', 'seur'); ?>B2C Estándar" type="text" name="seur_bc2_custom_name_field" value="<?php if ( $seur_bc2_custom_name ) echo $seur_bc2_custom_name ?>" size="40"></td>
                        </tr>

                        <tr>
                            <th scope="row">SEUR 10 Estándar</th>

                            <td><input title="<?php _e('Custom Name for ', 'seur'); ?>SEUR 10 Estándar" type="text" name="seur_10e_custom_name_field" value="<?php if ( $seur_10e_custom_name ) echo $seur_10e_custom_name ?>" size="40"></td>
                        </tr>

                        <tr>
                            <th scope="row">SEUR 10 Frío</th>

                            <td><input title="<?php _e('Custom Name for ', 'seur'); ?>SEUR 10 Frío" type="text" name="seur_10ef_custom_name_field" value="<?php if ( $seur_10ef_custom_name ) echo $seur_10ef_custom_name ?>" size="40"></td>
                        </tr>

                        <tr>
                            <th scope="row">SEUR 13:30 Estándar</th>

                            <td><input title="<?php _e('Custom Name for ', 'seur'); ?>SEUR 13:30 Estándar" type="text" name="seur_13e_custom_name_field" value="<?php if ( $seur_13e_custom_name ) echo $seur_13e_custom_name ?>" size="40"></td>
                        </tr>

                        <tr>
                            <th scope="row">SEUR 13:30 Frío</th>

                            <td><input title="<?php _e('Custom Name for ', 'seur'); ?>SEUR 13:30 Frío" type="text" name="seur_13f_custom_name_field" value="<?php if ( $seur_13f_custom_name ) echo $seur_13f_custom_name ?>" size="40"></td>
                        </tr>

                        <tr>
                            <th scope="row">SEUR 48H Estándar</th>

                            <td><input title="<?php _e('Custom Name for ', 'seur'); ?>SEUR 48H Estándar" type="text" name="seur_48h_custom_name_field" value="<?php if ( $seur_48h_custom_name ) echo $seur_48h_custom_name ?>" size="40"></td>
                        </tr>

                        <tr>
                            <th scope="row">SEUR 72H Estándar</th>

                            <td><input title="<?php _e('Custom Name for ', 'seur'); ?>SEUR 72H Estándar" type="text" name="seur_72h_custom_name_field" value="<?php if ( $seur_72h_custom_name ) echo $seur_72h_custom_name ?>" size="40"></td>
                        </tr>

                        <tr>
                            <th scope="row">Classic Internacional Terrestre</th>

                            <td><input title="<?php _e('Custom Name for ', 'seur'); ?>Classic Internacional Terrestre" type="text" name="seur_cit_custom_name_field" value="<?php if ( $seur_cit_custom_name ) echo $seur_cit_custom_name ?>" size="40"></td>
                        </tr>
                        <input type="hidden" name="seur_custom_name_rates_post" value="true" >
                        <?php wp_nonce_field( 'seur_custom_name_rates', 'seur_custom_name_rates_nonce_field' ); ?>

                    </tbody>
                </table>

                <p class="submit"><input type="submit" name="submit" id="submit" class="button button-primary" value="<?php _e( 'Update Options', 'seur' ); ?>"></p>
            </form>
        </div>

        <?php } else {
	        if ( isset( $_POST['seur_custom_name_rates_post'] ) && ( ! isset( $_POST['seur_custom_name_rates_nonce_field'] )  || ! wp_verify_nonce( $_POST['seur_custom_name_rates_nonce_field'], 'seur_custom_name_rates' ) ) ) {
        print 'Sorry, your nonce did not verify.';
        exit;

    } else {
	    		$seur_bc2_custom_name  = sanitize_text_field( $_POST[ 'seur_bc2_custom_name_field'  ] );
				$seur_10e_custom_name  = sanitize_text_field( $_POST[ 'seur_10e_custom_name_field'  ] );
				$seur_10ef_custom_name = sanitize_text_field( $_POST[ 'seur_10ef_custom_name_field' ] );
				$seur_13e_custom_name  = sanitize_text_field( $_POST[ 'seur_13e_custom_name_field'  ] );
				$seur_13f_custom_name  = sanitize_text_field( $_POST[ 'seur_13f_custom_name_field'  ] );
				$seur_48h_custom_name  = sanitize_text_field( $_POST[ 'seur_48h_custom_name_field'  ] );
				$seur_72h_custom_name  = sanitize_text_field( $_POST[ 'seur_72h_custom_name_field'  ] );
				$seur_cit_custom_name  = sanitize_text_field( $_POST[ 'seur_cit_custom_name_field'  ] );

				update_option ( 'seur_bc2_custom_name_field', $seur_bc2_custom_name   );
				update_option ( 'seur_10e_custom_name_field', $seur_10e_custom_name   );
				update_option ( 'seur_10ef_custom_name_field',$seur_10ef_custom_name  );
				update_option ( 'seur_13e_custom_name_field', $seur_13e_custom_name   );
				update_option ( 'seur_13f_custom_name_field', $seur_13f_custom_name   );
				update_option ( 'seur_48h_custom_name_field', $seur_48h_custom_name   );
				update_option ( 'seur_72h_custom_name_field', $seur_72h_custom_name   );
				update_option ( 'seur_cit_custom_name_field', $seur_cit_custom_name   );

				$seur_bc2_custom_name  = get_option( 'seur_bc2_custom_name_field'  );
				$seur_10e_custom_name  = get_option( 'seur_10e_custom_name_field'  );
				$seur_10ef_custom_name = get_option( 'seur_10ef_custom_name_field' );
				$seur_13e_custom_name  = get_option( 'seur_13e_custom_name_field'  );
				$seur_13f_custom_name  = get_option( 'seur_13f_custom_name_field'  );
				$seur_48h_custom_name  = get_option( 'seur_48h_custom_name_field'  );
				$seur_72h_custom_name  = get_option( 'seur_72h_custom_name_field'  );
				$seur_cit_custom_name  = get_option( 'seur_cit_custom_name_field'  );
        ?>

         <div class="content-loader">
            <form method="post" action="admin.php?page=seur_rates_prices&tab=custom_rates_name">

                <table class="form-table">
                    <tbody>
                        <tr>
                            <th scope="row">B2C Estándar</th>

                            <td><input title="<?php _e('Custom Name for ', 'seur'); ?> B2C Estándar" type="text" name="seur_bc2_custom_name_field" value="<?php if ( $seur_bc2_custom_name ) echo $seur_bc2_custom_name ?>" size="40"></td>
                        </tr>

                        <tr>
                            <th scope="row">SEUR 10 Estándar</th>

                            <td><input title="<?php _e('Custom Name for ', 'seur'); ?> SEUR 10 Estándar" type="text" name="seur_10e_custom_name_field" value="<?php if ( $seur_10e_custom_name ) echo $seur_10e_custom_name ?>" size="40"></td>
                        </tr>

                        <tr>
                            <th scope="row">SEUR 10 Frío</th>

                            <td><input title="<?php _e('Custom Name for ', 'seur'); ?> SEUR 10 Frío" type="text" name="seur_10ef_custom_name_field" value="<?php if ( $seur_10ef_custom_name ) echo $seur_10ef_custom_name ?>" size="40"></td>
                        </tr>

                        <tr>
                            <th scope="row">SEUR 13:30 Estándar</th>

                            <td><input title="<?php _e('Custom Name for ', 'seur'); ?> SEUR 13:30 Estándar" type="text" name="seur_13e_custom_name_field" value="<?php if ( $seur_13e_custom_name ) echo $seur_13e_custom_name ?>" size="40"></td>
                        </tr>

                        <tr>
                            <th scope="row">SEUR 13:30 Frío</th>

                            <td><input title="<?php _e('Custom Name for ', 'seur'); ?> SEUR 13:30 Frío" type="text" name="seur_13f_custom_name_field" value="<?php if ( $seur_13f_custom_name ) echo $seur_13f_custom_name ?>" size="40"></td>
                        </tr>

                        <tr>
                            <th scope="row">SEUR 48H Estándar</th>

                            <td><input title="<?php _e('Custom Name for ', 'seur'); ?> SEUR 48H Estándar" type="text" name="seur_48h_custom_name_field" value="<?php if ( $seur_48h_custom_name ) echo $seur_48h_custom_name ?>" size="40"></td>
                        </tr>

                        <tr>
                            <th scope="row">SEUR 72H Estándar</th>

                            <td><input title="<?php _e('Custom Name for ', 'seur'); ?> SEUR 72H Estándar" type="text" name="seur_72h_custom_name_field" value="<?php if ( $seur_72h_custom_name ) echo $seur_72h_custom_name ?>" size="40"></td>
                        </tr>

                        <tr>
                            <th scope="row">Classic Internacional Terrestre</th>

                            <td><input title="<?php _e('Custom Name for ', 'seur'); ?> Classic Internacional Terrestre" type="text" name="seur_cit_custom_name_field" value="<?php if ( $seur_cit_custom_name ) echo $seur_cit_custom_name ?>" size="40"></td>
                        </tr>
                        <input type="hidden" name="seur_custom_name_rates_post" value="true" >
                        <?php wp_nonce_field( 'seur_custom_name_rates', 'seur_custom_name_rates_nonce_field' ); ?>

                    </tbody>
                </table>

                <p class="submit"><input type="submit" name="submit" id="submit" class="button button-primary" value="<?php _e( 'Update Options', 'seur' ); ?>"></p>
            </form>
        </div><?php } }?>
    </div>