<?php

$filename = 'ARKNIGHTS_CG';

$data = json_decode(file_get_contents($filename), true);

$names = array_column($data, 'name');

$randomName = $names[array_rand($names)];

$url = "https://cdn.jsdelivr.net/gh/Nobi-kamo/pics@main/ARKNIGHTS_CG/" . urlencode($randomName);
header("Location: " . $url);
exit;

?>