<?php
/**
 * The base configurations of the WordPress.
  *
   * This file has the following configurations: MySQL settings, Table Prefix,
    * Secret Keys, WordPress Language, and ABSPATH. You can find more information
     * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
      * wp-config.php} Codex page. You can get the MySQL settings from your web host.
       *
        * This file is used by the wp-config.php creation script during the
         * installation. You don't have to use the web site, you can just copy this file
          * to "wp-config.php" and fill in the values.
           *
            * @package WordPress
             */

             // ** MySQL settings - You can get this info from your web host ** //
             /** The name of the database for WordPress */
             define('DB_NAME', 'blog');

             /** MySQL database username */
             define('DB_USER', 'root');

             /** MySQL database password */
             define('DB_PASSWORD', '000000');

             /** MySQL hostname */
             define('DB_HOST', 'localhost');

             /** Database Charset to use in creating database tables. */
             define('DB_CHARSET', 'utf8');

             /** The Database Collate type. Don't change this if in doubt. */
             define('DB_COLLATE', '');

             /**#@+
              * Authentication Unique Keys and Salts.
               *
                * Change these to different unique phrases!
                 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
                  * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
                   *
                    * @since 2.6.0
                     */
                     define('AUTH_KEY',         '+z@T^|qUbb%[AceBc7q1Js|c:cG}Fi>%0EIMi+&;rFUdU}o#TNz7L{gWPs>Dl`4o');
                     define('SECURE_AUTH_KEY',  '5i-5w[Go kk3JZCv$Qca$IU!0}X de gr%-WC)AMzF{Ey79|2N6|O1<x|+--Y4y!');
                     define('LOGGED_IN_KEY',    'Xc1#{9K:9d3t~TUvJ_{vTpZ(>l8+N^JW<uL8[P6k_)986RiliMH5MZWn )Sg-gS0');
                     define('NONCE_KEY',        'P|;EP/vwKo-tJL|d+f=w[h#x(XxH2On0V7Y,J-9|F?WFOr&Fomsptu>p0ur+l:ih');
                     define('AUTH_SALT',        '|Y-~N*wY<F#yO]H!gkm)_C-;edUQ}+>mf]? 8r9D-Vv2a{3:|/G[M$:Qc]?-?8-M');
                     define('SECURE_AUTH_SALT', '*3bG,kva5|nJ5MJ_Qp`W064U?*Xk/fp26t_y3|>V-SaOy!mCV/i1+NW2=+>/|`kb');
                     define('LOGGED_IN_SALT',   '(?5?V]Gu-Sv_3yhq~D+-KBtPMg<8n29q~v)|lrWRte.<r|f-ZAzH#3a@qU`=gJnH');
                     define('NONCE_SALT',       'M!htvR/)3w%@Rr#tnK)}xg]{#%0@>d#2X[83BixYrPn#FX?5)}=rdU>B(c#lU O+');

                     /**#@-*/

                     /**
                      * WordPress Database Table prefix.
                       *
                        * You can have multiple installations in one database if you give each a unique
                         * prefix. Only numbers, letters, and underscores please!
                          */
                          $table_prefix  = 'wp_';

                          /**
                           * WordPress Localized Language, defaults to English.
                            *
                             * Change this to localize WordPress. A corresponding MO file for the chosen
                              * language must be installed to wp-content/languages. For example, install
                               * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
                                * language support.
                                 */
                                 define('WPLANG', '');

                                 /**
                                  * For developers: WordPress debugging mode.
                                   *
                                    * Change this to true to enable the display of notices during development.
                                     * It is strongly recommended that plugin and theme developers use WP_DEBUG
                                      * in their development environments.
                                       */
                                       define('WP_DEBUG', false);

                                       /* That's all, stop editing! Happy blogging. */

                                       /** Absolute path to the WordPress directory. */
                                       if ( !defined('ABSPATH') )
                                            define('ABSPATH', dirname(__FILE__) . '/');

                                            /** Sets up WordPress vars and included files. */
                                            require_once(ABSPATH . 'wp-settings.php');

