<?php
$API_KEY = ""; // Your API Code
$API_SECRET = ""; // Your API Secret
$WALL_DOMAIN = ""; // Network domain

session_start();
include_once('lib/lib.php');
include_once('lib/configuration.php');
include_once('lib/lib_security.php');
include_once("banned_chk.php");
$ddir = THDIR . $do->get_file_url();
include($ddir);
if (file_exists(HEADER)) {
    include_once(HEADER);
}
if ($loggedin) {
?>
    <iframe src="https://app.<?php echo $WALL_DOMAIN; ?>.com/offerwall/<?php echo $API_KEY; ?>?hash=<?php echo md5($ir['username'] . $API_SECRET); ?>&user=<?php echo $ir['username']; ?>" width="100%" height="800px" style="border:0; padding:0; scrolling=" auto" margin:0;" frameborder="0" /><a href="https://app.<?php echo $WALL_DOMAIN; ?>.com/offerwall/<?php echo $API_KEY; ?>?hash=<?php echo md5($ir['username'] . $API_SECRET); ?>&user=<?php echo $ir['username']; ?>" target="_blank">iFrames are required to see this page. Please click here!</a></iframe>
<?php
} else {
    $do->login_return();
}
if (file_exists(FOOTER)) {
    include_once(FOOTER);
}
?>
