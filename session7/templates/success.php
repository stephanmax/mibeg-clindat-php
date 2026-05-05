<h1>Herzlichen Glückwunsch!</h1>
<p>Sie sind volljährig!</p>

<?php
$fp = fopen("https://yesno.wtf/api?force=yes", "r");
$yes = json_decode(stream_get_contents($fp));
?>

<img src="<?= $yes->{"image"} ?>">