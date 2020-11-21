<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">
</head>
<?php
$dir    = '../';
$files = scandir($dir);
unset($files[0]);
unset($files[1]);
print_r($files1);
?>