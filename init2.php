<?php

error_reporting(0);
ini_set("display_errors", 0);
define("MAIN_DIR", "/home/xtreamcodes/");
define("IPTV_ROOT_PATH", "/home/www/goto/do/");
define("IPTV_INCLUDES_PATH", "/home/www/goto/do/includes/");
define("IPTV_TEMPLATES_PATH", "/home/www/goto/do/templates/");
require "/home/xtreamcodes/iptv_xtream_codes/xfirewall.php";
@ini_set("user_agent", "Mozilla/5.0 (Windows NT 6.1; WOW64; rv:9.0) Gecko/20100101 Firefox/9.0");
define("IN_SCRIPT", true);
define("SCRIPT_VERSION", "2.9.0");
define("IPTV_PANEL_DIR", "/home/xtreamcodes/iptv_xtream_codes/");
define("BIN_PATH", "/home/xtreamcodes/iptv_xtream_codes/bin/");
define("FFMPEG_PATH", file_exists("/home/xtreamcodes/iptv_xtream_codes/bin/ffmpeg") ? "/home/xtreamcodes/iptv_xtream_codes/bin/ffmpeg" : "/usr/bin/ffmpeg");
define("FFPROBE_PATH", file_exists("/home/xtreamcodes/iptv_xtream_codes/bin/ffprobe") ? "/home/xtreamcodes/iptv_xtream_codes/bin/ffprobe" : "/usr/bin/ffprobe");
define("YOUTUBE_PATH", "/home/xtreamcodes/iptv_xtream_codes/bin/youtube");
define("STREAMS_PATH", "/home/xtreamcodes/iptv_xtream_codes/streams/");
define("MOVIES_IMAGES", "/home/xtreamcodes/iptv_xtream_codes/wwwdir/images/");
define("MOVIES_PATH", "/home/xtreamcodes/iptv_xtream_codes/movies/");
define("CREATED_CHANNELS", "/home/xtreamcodes/iptv_xtream_codes/created_channels/");
define("CRON_PATH", "/home/xtreamcodes/iptv_xtream_codes/crons/");
define("PHP_BIN", "/home/xtreamcodes/iptv_xtream_codes/php/bin/php");
define("ASYNC_DIR", "/home/xtreamcodes/iptv_xtream_codes/async_incs/");
define("TMP_DIR", "/home/xtreamcodes/iptv_xtream_codes/tmp/");
define("TV_ARCHIVE", "/home/xtreamcodes/iptv_xtream_codes/tv_archive/");
define("SIGNALS_PATH", "/home/xtreamcodes/iptv_xtream_codes/signals/");
define("DELAY_STREAM", "/home/xtreamcodes/iptv_xtream_codes/delay/");
define("FFMPEG_FONTS_PATH", "/home/xtreamcodes/iptv_xtream_codes/signals/free-sans.ttf");
define("KEY_CRYPT", md5(base64_encode("K76eTItpqxJA4iTmrytrmDo1LTndAG")));
define("TOOLS_PATH", "/home/xtreamcodes/iptv_xtream_codes/tools/");
define("CONFIG_CRYPT_KEY", "5709650b0d7806074842c6de575025b1");
define("RESTART_TAKE_CACHE", 5);
define("TOTAL_SAVES_DROP", 6);
define("CLOSE_OPEN_CONS_PATH", "/home/xtreamcodes/iptv_xtream_codes/tmp/opened_cons/");
define("GEOIP2_FILENAME", "/home/xtreamcodes/iptv_xtream_codes/GeoLite2.mmdb");
if (defined("USE_CACHE")) {
    goto B6fc7633298fe920fb0b3572606e7a79;
}
define("USE_CACHE", true);
B6fc7633298fe920fb0b3572606e7a79:
if (defined("FETCH_BOUQUETS")) {
    goto E70d3fa7e815e5cd52c0e14f2a946fae;
}
define("FETCH_BOUQUETS", true);
E70d3fa7e815e5cd52c0e14f2a946fae:
require "/home/www/goto/do/includes/functions.php";
require "/home/www/goto/do/includes/lib.php";
require "/home/www/goto/do/includes/mysql.php";
require "/home/www/goto/do/includes/streaming.php";
require "/home/www/goto/do/includes/servers.php";
require "/home/www/goto/do/includes/stream.php";
include "/home/www/goto/do/includes/geo/Reader.php";
include "/home/www/goto/do/includes/geo/Decoder.php";
include "/home/www/goto/do/includes/geo/Util.php";
include "/home/www/goto/do/includes/geo/Metadata.php";
$_INFO = array();
if (file_exists("/home/xtreamcodes/iptv_xtream_codes/config")) {
    $_INFO = json_decode(f08Cc5C567Cd66B30A2a1F399445489c(base64_decode(file_get_contents("/home/xtreamcodes/iptv_xtream_codes/config")), CONFIG_CRYPT_KEY), true);
    define("SERVER_ID", $_INFO["server_id"]);
    define("MAIN_SERVER_ID", $_INFO["main_server_id"]);
    b0d83e74ad57a53d44e28c2178eb1036:
    $F30ccc8fd3427f97ca35bc6ba6610d01 = new ipTV_db($_INFO["host"], $_INFO["db_user"], $_INFO["db_pass"], $_INFO["db_name"], $_INFO["db_port"], empty($_INFO["pconnect"]) ? false : true);
    e2d73953a5089b9c7983838f61f23acf::$ipTV_db =& $F30ccc8fd3427f97ca35bc6ba6610d01;
    F1Ca094152763c79018E9f1893ef1E48::$ipTV_db =& $F30ccc8fd3427f97ca35bc6ba6610d01;
    c872bCfa04b3Eaee1B4a93A0d775b9D7::$ipTV_db =& $F30ccc8fd3427f97ca35bc6ba6610d01;
    E2d73953a5089B9c7983838f61f23aCF::fBbDDfc7A3d7fe6018b1BB84802EBFd4();
    // [PHPDeobfuscator] Implied script end
    return;
}
die(json_encode(array("main_fetch" => false, "error" => "Config Not Found")));
