<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">
<link rel="stylesheet" href="style.css">
</head>
<?php
$dir    = '../../';
$files = scandir($dir);
unset($files[0]);
unset($files[1]);
echo '
<div class="level container vertical-center" style="position:relative;width:25%">
<div class="level-left">Wow.</div>
<div class="level-right"><ul>';
foreach($files as $value){
echo "<li><a href='https://$value'>$value</a></li>";
}
echo '</ul></div></div>';
?>