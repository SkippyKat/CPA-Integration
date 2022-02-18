<?php
$API_KEY = "API KEY";
$API_SECRET = "API SECRET";
$WALL_DOMAIN = "NETWORK DOMAIN";
?>

<iframe src="https://app.<?php echo $WALL_DOMAIN; ?>.com/offerwall/<?php echo $API_KEY; ?>?hash=<?php echo md5($username . $API_SECRET); ?>&user=<?php echo $username; ?>" width="100%" height="800px" style="border:0; padding:0; scrolling=" auto" margin:0;" frameborder="0" /><a href="https://app.<?php echo $WALL_DOMAIN; ?>.com/offerwall/<?php echo $API_KEY; ?>?hash=<?php echo md5($username . $API_SECRET); ?>&user=<?php echo $username; ?> " target="_blank">iFrames are required to see this page. Please click here!</a></iframe>
