<?php

require_once 'simple_html_dom.php';

$html = file_get_html($_POST['tv']);

foreach($html->find('li.channel-schedule__event') as $element) {
    $time = $element->find('.channel-schedule__time', 0)->plaintext;
    $text = $element->find('.channel-schedule__text', 0)->plaintext;
    echo $time . " - " . $text . '<br>';
}