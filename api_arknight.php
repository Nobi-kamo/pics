<?php
$seed = time();
$num = rand(1,18);
$picpath = "https://cdn.jsdelivr.net/gh/Nobi-kamo/pics@main/ARKNIGHT_CG".$num.".webp";
die(header("Location: $picpath"));
?>
