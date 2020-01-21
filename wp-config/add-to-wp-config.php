/**
 * define a constant to recognize a staging environment
 * remember to turn this to false in the real website
 */
define( 'WPD_IS_STAGING', true );

/**
 * define useful paths based on a staging or production environment
 */
define( 'WPD_URL', ( WPD_IS_STAGING ? 'http://localhost:8888/wpdesign/' : 'https://wpdesign.com/' ) );
define( 'WPD_INCLUDES', WPD_URL.'wp-content/themes/wpdesign/inc/' );
