<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

function seur_create_tables_hook(){
    global $wpdb;

    $charset_collate = '';

    $seur_db_version_saved = '';
    $seur_db_version_saved = get_option('seur_db_version');

    if ( !$seur_db_version_saved || ( version_compare( SEUR_DB_VERSION, $seur_db_version_saved, '>' ) ) ) {

        require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
        $charset_collate = $wpdb->get_charset_collate();

        $table_name = $wpdb->base_prefix . "seur_reco";
        $sql = "CREATE TABLE " . $table_name . " (
            fecha varchar(6) NOT NULL,
            id varchar(15) NOT NULL,
            UNIQUE KEY `Clave` (`fecha`,`id`)
        ) $charset_collate;";

        dbDelta( $sql );


        $table_name = $wpdb->base_prefix . "seur_ecb";
        $sql = "CREATE TABLE " . $table_name . " (
            pedido varchar(15) NOT NULL,
            extension int(1) NOT NULL,
            fecha varchar(6) NOT NULL,
            PRIMARY KEY (`pedido`)
        ) $charset_collate;";

        dbDelta($sql);

        $table_name = $wpdb->base_prefix . "seur_svpr";

        $sql = "CREATE TABLE " . $table_name . " (
            ID bigint(20) unsigned NOT NULL auto_increment,
            ser varchar(3) NOT NULL,
            pro varchar(3) NOT NULL,
            descripcion varchar(50) NOT NULL,
            tipo varchar(50) NOT NULL,
            PRIMARY KEY (ID)
        ) $charset_collate;";

        dbDelta($sql);

        $table_name = $wpdb->base_prefix . "seur_custom_rates";

        $sql = "CREATE TABLE " . $table_name . " (
            ID bigint(20) unsigned NOT NULL auto_increment,
            country varchar(50) NOT NULL default '',
            state varchar(200) NOT NULL default '',
            postcode varchar(7) NOT NULL default '00000',
            minprice bigint(20) unsigned NOT NULL default '0',
            maxprice bigint(20) unsigned NOT NULL default '0',
            minweight bigint(20) unsigned NOT NULL default '0',
            maxweight bigint(20) unsigned NOT NULL default '0',
            rate varchar(200) NOT NULL default '',
            rateprice bigint(20) unsigned NOT NULL default '0',
            PRIMARY KEY (ID)
        ) $charset_collate;";

        dbDelta($sql);

        update_option('seur_db_version', SEUR_DB_VERSION );
    }
}

function seur_add_data_to_tables_hook(){
    global $wpdb;

    $seur_table_version_saved = '';
    $seur_table_version_saved = get_option('seur_table_version');

    if ( !$seur_table_version_saved || ( version_compare( SEUR_TABLE_VERSION, $seur_table_version_saved, '>' ) ) ) {

        $table_name = $wpdb->prefix . 'seur_svpr';

        $wpdb->insert(
            $table_name,
            array(
                'ser' => '31',
                'pro' => '2',
                'descripcion' => 'PARTICULARES 24H ESTANDAR',
                'tipo' => 'ESTANDAR',
            )
        );
        $wpdb->insert(
            $table_name,
            array(
                'ser' => '3',
                'pro' => '2',
                'descripcion' => 'SEUR 10',
                'tipo' => 'ESTANDAR',
            )
        );
        $wpdb->insert(
            $table_name,
            array(
                'ser' => '3',
                'pro' => '18',
                'descripcion' => 'SEUR 10 FRIO',
                'tipo' => 'FRIO',
            )
        );
        $wpdb->insert(
            $table_name,
            array(
                'ser' => '9',
                'pro' => '2',
                'descripcion' => 'SEUR 13:30 ESTANDAR',
                'tipo' => 'ESTANDAR',
            )
        );
        $wpdb->insert(
            $table_name,
            array(
                'ser' => '9',
                'pro' => '18',
                'descripcion' => 'SEUR 13:30 FRIO',
                'tipo' => 'FRIO',
            )
        );
        $wpdb->insert(
            $table_name,
            array(
                'ser' => '15',
                'pro' => '2',
                'descripcion' => 'SEUR 48 ESTANDAR',
                'tipo' => 'ESTANDAR',
            )
        );
        $wpdb->insert(
            $table_name,
            array(
                'ser' => '13',
                'pro' => '2',
                'descripcion' => 'SEUR 72 ESTANDAR',
                'tipo' => 'ESTANDAR',
            )
        );
        $wpdb->insert(
            $table_name,
            array(
                'ser' => '17',
                'pro' => '2',
                'descripcion' => 'MARITIMO ESTANDAR',
                'tipo' => 'ESTANDAR',
            )
        );
        $wpdb->insert(
            $table_name,
            array(
                'ser' => '77',
                'pro' => '70',
                'descripcion' => 'CLASSIC INTERTNACIONAL ESTANDAR',
                'tipo' => 'ESTANDAR',
            )
        );

        $table_name = $wpdb->prefix . 'seur_custom_rates';

        $wpdb->insert(
            $table_name,
            array(
                'country'   => 'ES',
                'state'     => '*',
                'postcode'  => '*',
                'minprice'  => '0',
                'maxprice'  => '60',
                'minweight' => '0',
                'maxweight' => '1000',
                'rate'      => 'PARTICULARES 24H ESTANDAR',
                'rateprice' => '10'
                )
        );
        $wpdb->insert(
            $table_name,
            array(
                'country'   => 'ES',
                'state'     => '*',
                'postcode'  => '*',
                'minprice'  => '60',
                'maxprice'  => '9999999',
                'minweight' => '0',
                'maxweight' => '1000',
                'rate'      => 'PARTICULARES 24H ESTANDAR',
                'rateprice' => '0'
                )
        );
        $wpdb->insert(
            $table_name,
            array(
                'country'   => 'ES',
                'state'     => 'PM',
                'postcode'  => '*',
                'minprice'  => '0',
                'maxprice'  => '100',
                'minweight' => '0',
                'maxweight' => '1000',
                'rate'      => 'SEUR 48 ESTANDAR',
                'rateprice' => '15'
                )
        );
        $wpdb->insert(
            $table_name,
            array(
                'country'   => 'ES',
                'state'     => 'PM',
                'postcode'  => '*',
                'minprice'  => '100',
                'maxprice'  => '9999999',
                'minweight' => '0',
                'maxweight' => '1000',
                'rate'      => 'SEUR 48 ESTANDAR',
                'rateprice' => '0'
                )
        );
        $wpdb->insert(
            $table_name,
            array(
                'country'   => 'ES',
                'state'     => 'GC',
                'postcode'  => '*',
                'minprice'  => '0',
                'maxprice'  => '200',
                'minweight' => '0',
                'maxweight' => '1000',
                'rate'      => 'SEUR 72 ESTANDAR',
                'rateprice' => '35'
                )
        );
        $wpdb->insert(
            $table_name,
            array(
                'country'   => 'ES',
                'state'     => 'GC',
                'postcode'  => '*',
                'minprice'  => '200',
                'maxprice'  => '9999999',
                'minweight' => '0',
                'maxweight' => '1000',
                'rate'      => 'SEUR 72 ESTANDAR',
                'rateprice' => '0'
                )
        );
        update_option('seur_table_version', SEUR_TABLE_VERSION );
    }
}

function seur_create_random_string(){

    $characters = 'abcdefghijklmnopqrstuvwxyz0123456789';
    $string = '';
    $max = strlen($characters) - 1;
    $random_string_length = 10;
    for ($i = 0; $i < $random_string_length; $i++) {
        $string .= $characters[mt_rand(0, $max)];
    }

    return $string;
 }

function seur_create_upload_folder_hook(){

    $seur_upload_dir = get_option( 'seur_uploads_dir' );

    if ( $seur_upload_dir && file_exists( $seur_upload_dir ) ){
        return;
    } else {
        $upload_dir                 = wp_upload_dir();
        $random_string              = seur_create_random_string();
        $seur_uploads_name_prefix   = 'seur_uploads_';
        $seur_uploads_name          = $seur_uploads_name_prefix . $random_string;
        $seur_upload_dir            = $upload_dir['basedir'] . '/' . $seur_uploads_name;
        $seur_upload_dir_labels     = $upload_dir['basedir'] . '/' . $seur_uploads_name . '/labels';
        $seur_upload_dir_manifest   = $upload_dir['basedir'] . '/' . $seur_uploads_name . '/manifests';
        $seur_upload_url            = $upload_dir['baseurl'] . '/' . $seur_uploads_name;
        $seur_upload_url_labels     = $upload_dir['baseurl'] . '/' . $seur_uploads_name . '/labels';
        $seur_upload_url_manifest   = $upload_dir['baseurl'] . '/' . $seur_uploads_name . '/manifests';

        if ( !file_exists( $seur_upload_dir ) ) {
            wp_mkdir_p( $seur_upload_dir );
            wp_mkdir_p( $seur_upload_dir_labels );
            wp_mkdir_p( $seur_upload_dir_manifest );
            update_option( 'seur_uploads_dir', $seur_upload_dir );
            update_option( 'seur_uploads_url', $seur_upload_url );
            update_option( 'seur_uploads_dir_labels', $seur_upload_dir_labels );
            update_option( 'seur_uploads_dir_manifest', $seur_upload_dir_manifest );
            update_option( 'seur_uploads_url_labels', $seur_upload_url_labels );
            update_option( 'seur_uploads_url_manifest', $seur_upload_url_manifest );
        }
    }
}

function seur_create_content_for_download(){

    $create_password = seur_create_random_string();
    $content = '<?php' . PHP_EOL;
    $content .= '   $file      = $_GET["label"];' . PHP_EOL;
    $content .= '   $name      = $_GET["label_name"];' . PHP_EOL;
    $content .= '   $password  = $_GET["pass"];' . PHP_EOL;
    $content .= '   $file_type = $_GET["file_type"];' . PHP_EOL;
    $content .= '' . PHP_EOL;
    $content .= '   if ( $file_type == "pdf" ){' . PHP_EOL;
    $content .= '        $headercontent = "application/pdf";' . PHP_EOL;
    $content .= '   } else {' . PHP_EOL;
    $content .= '        $headercontent = "text/plain";' . PHP_EOL;
    $content .= '   }' . PHP_EOL;
	$content .= '' . PHP_EOL;
    $content .= '   if( $password == "' . $create_password . '" ) {' . PHP_EOL;
    $content .= '          if ( file_exists( $file ) ) {' . PHP_EOL;
	$content .= '' . PHP_EOL;
    $content .= '                header("Content-Disposition: attachment; filename=" . $name . "");' . PHP_EOL;
    $content .= '                header("Content-type: " . $headerconten . "");' . PHP_EOL;
    $content .= '                header("Expires: 0");' . PHP_EOL;
    $content .= '                header("Cache-Control: must-revalidate");' . PHP_EOL;
    $content .= '                header("Pragma: public");' . PHP_EOL;
    $content .= '                header("Content-Length: " . filesize( $file ) . "");' . PHP_EOL;
	$content .= '' . PHP_EOL;
    $content .= '                readfile( $file );' . PHP_EOL;
	$content .= '' . PHP_EOL;
    $content .= '                exit;' . PHP_EOL;
    $content .= '           }' . PHP_EOL;
    $content .= '   } else {' . PHP_EOL;
    $content .= '       exit;' . PHP_EOL;
    $content .= '     }';

    update_option( 'seur_pass_for_download', $create_password );

    return $content;
}

function seur_create_download_files(){
    global $wp_filesystem;

    if ( empty( $wp_filesystem ) ) {
        require_once ( ABSPATH . '/wp-admin/includes/file.php' );
        WP_Filesystem();
    }
    $seur_download_file = get_option( 'seur_download_file_path' );
    if( $seur_download_file ) {
        wp_delete_file( $seur_download_file );
        }
    delete_option('seur_download_file_url');
    delete_option('seur_download_file_path');

    $content_url    = content_url();
    $random_string  = seur_create_random_string();
    $file_prefix    = 'seur-downloader-';
    $full_name      = $file_prefix . $random_string . '.php';
    $full_url_file  = $content_url . '/' . $full_name;
    $full_path_file = WP_CONTENT_DIR . '/' . $full_name;
    $content_add    = seur_create_content_for_download();

    $wp_filesystem->put_contents(
      $full_path_file,
      $content_add,
      FS_CHMOD_FILE // predefined mode settings for WP files
    );

    update_option( 'seur_download_file_url',  $full_url_file  );
    update_option( 'seur_download_file_path', $full_path_file );

}

function seur_add_avanced_settings_preset(){

    $seur_add = get_option( 'seur_add_advanced_settings_field_pre' );

    if ( $seur_add != '1' ) {
        update_option( 'seur_after_get_label_field',            'shipping'              );
        update_option( 'seur_preaviso_notificar_field',         NULL                    );
        update_option( 'seur_reparto_notificar_field',          NULL                    );
        update_option( 'seur_tipo_notificacion_field',          'EMAIL'                 );
        update_option( 'seur_manana_desde_field',               '09:00'                 );
        update_option( 'seur_manana_hasta_field',               '14:00'                 );
        update_option( 'seur_tarde_desde_field',                '16:00'                 );
        update_option( 'seur_tarde_hasta_field',                '19:00'                 );
        update_option( 'seur_tipo_etiqueta_field',              'PDF'                   );
        update_option( 'seur_aduana_origen_field',              'D'                     );
        update_option( 'seur_aduana_destino_field',             'D'                     );
        update_option( 'seur_tipo_mercancia_field',             'C'                     );
        update_option( 'seur_valor_declarado_field',            '50'                    );
        update_option( 'seur_id_mercancia_field',               '400'                   );
        update_option( 'seur_descripcion_field',                'MANUFACTURAS DIVERSAS' );
        update_option( 'seur_add_advanced_settings_field_pre',  '1'                     );
    }
}