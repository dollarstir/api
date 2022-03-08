<?php

$file = file_get_contents("js/music.json");

$file = json_decode($file);
echo $file->fname; 

