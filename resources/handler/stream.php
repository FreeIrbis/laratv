<?php
if(isset($_GET['stream']) && !empty($_GET['stream']))
{
    $stream = $_GET['stream'];

    $tv = file_get_contents($stream);
    $tv = str_replace('/swf/uppod161216.swf', 'https://www.glaz.tv/swf/uppod161216.swf', $tv);
    $tv = str_replace('top.location.href = location.href;', ' ', $tv);
    $tv = str_replace('<script type="text/javascript" src="/js/main.js"></script>', ' ', $tv);
    $tv = str_replace('uppodEvent(\'video-player\', \'init\');', ' ', $tv);
    $tv = str_replace('<link rel="stylesheet" type="text/css" href="/css/popup/styles.css"/>', ' ', $tv);
    $tv = str_replace('checkStream(normalTimeout);', ' ', $tv);

    echo $tv;

}