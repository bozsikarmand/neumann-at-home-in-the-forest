<?php
/** 
 * A WordPress fő konfigurációs állománya
 *
 * Ebben a fájlban a következő beállításokat lehet megtenni: MySQL beállítások
 * tábla előtagok, titkos kulcsok, a WordPress nyelve, és ABSPATH.
 * További információ a fájl lehetséges opcióiról angolul itt található:
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php} 
 *  A MySQL beállításokat a szolgáltatónktól kell kérni.
 *
 * Ebből a fájlból készül el a telepítési folyamat közben a wp-config.php
 * állomány. Nem kötelező a webes telepítés használata, elegendő átnevezni 
 * "wp-config.php" névre, és kitölteni az értékeket.
 *
 * @package WordPress
 */

// ** MySQL beállítások - Ezeket a szolgálatótól lehet beszerezni ** //
/** Adatbázis neve */
define('WP_CACHE', true); //Added by WP-Cache Manager
define( 'WPCACHEHOME', '/home/tvgwgikj/public_html/wp-content/plugins/wp-super-cache/' ); //Added by WP-Cache Manager
define('DB_NAME', 'tvgwgikj_neumanna');

/** MySQL felhasználónév */
define('DB_USER', 'tvgwgikj_neumann');


/** MySQL jelszó. */
define('DB_PASSWORD', 'Arm62486+');

/** MySQL  kiszolgáló neve */
define('DB_HOST', 'localhost');

/** Az adatbázis karakter kódolása */
define('DB_CHARSET', 'utf8');

/** Az adatbázis egybevetése */
define('DB_COLLATE', '');

/**#@+
 * Bejelentkezést tikosító kulcsok
 *
 * Változtassuk meg a lenti konstansok értékét egy-egy tetszóleges mondatra.
 * Generálhatunk is ilyen kulcsokat a {@link http://api.wordpress.org/secret-key/1.1/ WordPress.org titkos kulcs szolgáltatásával}
 * Ezeknek a kulcsoknak a módosításával bármikor kiléptethető az összes bejelentkezett felhasználó az oldalról. 
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'z.(UrX3W#9R|=&s-O@jy ^F,/$1_$4t0MHjxTw50g_4f$Pt[d,xGX}{|3;o=`/$h');
define('SECURE_AUTH_KEY', '?P<2?t}wj4uIOZQT-Bx+U6!`B67S&hk=5}l^fcl=Hqt<Wj:92cxLYj]G+b;fT9wW');
define('LOGGED_IN_KEY', '1e7IMNz+<l#?+b0!a(Yy1d4~=NUSV?^+Ppm4F^1zWfrNG((k:x>3)SH1_WU|1VR]');
define('NONCE_KEY', '[,q@%*Xq|Lzh6&R? F[glpGSQ~Q,vw]eP9vTT{qNs[(>X`RN-cMoVOca|hzg!Fuh');
define('AUTH_SALT',        'A9}B+w?F6$).L<zYt^_1:nuEl,IjDLR`H6|JdX]}B}|`E3_~hY =5Z#>G|+6gqYt');
define('SECURE_AUTH_SALT', 'T9.(#A%n|nu|xCD.hfk7:0y(bA|DD[S9l (%0lL%-$Ke!tV+l_FO=#|a|+I{C/|b');
define('LOGGED_IN_SALT',   '/p:Q%OiNRb2GA+iYB2fGt+V7XFYoI4-3,j %VoB8DK(=uYiQTe}ac#R#)39BrU%b');
define('NONCE_SALT',       '?i^&qY;EjKD{?3o!E4l|vosle?HkUG?17fEF=_mB<9~f>C,CWOu[mmG+Rd-m*VI7');

/**#@-*/

/**
 * WordPress-adatbázis tábla előtag.
 *
 * Több blogot is telepíthetünk egy adatbázisba, ha valamennyinek egyedi
 * előtagot adunk. Csak számokat, betűket és alulvonásokat adhatunk meg.
 */
$table_prefix  = 'wp_';

/**
 * WordPress nyelve. Ahhoz, hogy magyarul működjön az oldal, ennek az értéknek
 * 'hu_HU'-nak kell lennie. Üresen hagyva az oldal angolul fog megjelenni.
 *
 * A beállított nyelv .mo fájljának telepítve kell lennie a wp-content/languages
 * könyvtárba, ahogyan ez a magyar telepítőben alapértelmezetten benne is van.
 *  
 * Például: be kell másolni a hu_HU.mo fájlokat a wp-content/languages könyvtárba, 
 * és be kell állítani a WPLANG konstanst 'hu_HU'-ra, 
 * hogy a magyar nyelvi támogatást bekapcsolásra kerüljön.
 */

define ('WPLANG', 'hu_HU');

/**
 * Fejlesztőknek: WordPress hibakereső mód.
 *
 * Engedélyezzük ezt a megjegyzések megjelenítéséhez a fejlesztés során. 
 * Erősen ajánlott, hogy a bővítmény- és sablonfejlesztők használják a WP_DEBUG
 * konstansot.
 */
define('WP_DEBUG', false);

/* Ennyi volt, kellemes blogolást! */

/** A WordPress könyvtár abszolút elérési útja. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Betöltjük a WordPress változókat és szükséges fájlokat. */
require_once(ABSPATH . 'wp-settings.php');
