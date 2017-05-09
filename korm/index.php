<?php

require_once 'simple_html_dom.php';

$html = file_get_html('https://tv.yandex.ua/187/channels/1506?date=2017-05-09&period=all-day');

foreach($html->find('li.channel-schedule__event') as $element) {
  	$time = $element->find('.channel-schedule__time', 0)->plaintext;
  	$text = $element->find('.channel-schedule__text', 0)->plaintext;
  	echo $time . " - " . $text . '<br>';
}

?>

  

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/swfobject/2.2/swfobject.js"></script>

<div id="video-player"></div>
<script type="text/javascript">
		var signature = "c2VydmVyX3RpbWU9NS85LzIwMTcgODo1ODoyMyBBTSZoYXNoX3ZhbHVlPVdKTllyT3ZUVkNOTzJrdnBTcTlrWnc9PSZ2YWxpZG1pbnV0ZXM9MjAw";
        var ua = navigator.userAgent.toLowerCase();
        var flashInstalled = false;

        if (typeof(navigator.plugins) != "undefined" && typeof(navigator.plugins["Shockwave Flash"]) == "object") {
            flashInstalled = true;
        } else if (typeof window.ActiveXObject != "undefined") {
            try {
                if (new ActiveXObject("ShockwaveFlash.ShockwaveFlash")) {
                    flashInstalled = true;
                }
            } catch (e) {
            }
        }
        if (ua.indexOf("iphone") != -1 || ua.indexOf("ipad") != -1 || ua.indexOf("android") != -1 || ua.indexOf("windows phone") != -1 || ua.indexOf("blackberry") != -1) {
            new Uppod({m: "video", uid: "video-player", file: "http://178.162.218.83:8081/liveg/ntv.stream/playlist.m3u8?wmsAuthSign=".replace('liveg', 'livea') + signature});

            $('.video-player-container').attr ('style', 'overflow: visible');

            var padding = $('#pre-roll')[0].style.paddingTop;
            padding = padding.substring(0, padding.length - 1);

            if ($(window).width() > 400 && $(window).width() < 800) {
                $('#pre-roll').css ('padding-top', 50+'%');
            }

            $( window ).resize(function() {
                if ($(window).width() > 400 && $(window).width() < 800) {
                    var newPadding = $('#pre-roll')[0].style.paddingTop;
                    newPadding = newPadding.substring(0, newPadding.length - 1);
                    console.log (newPadding + ' ->' + padding);
                    if (newPadding == padding) {
                        console.log ('change');
                        $('#pre-roll').css ('padding-top', '60%');
                    }
                }
            });
            $('#video-player').css ('height', '100%');
        } else {
            if (!flashInstalled) {
                document.getElementById("video-player").innerHTML = '<div class="user-without-flash"><a href=http://www.adobe.com/go/getflashplayer>Требуется обновить Flash-плеер</a></div>';
            } else {                                                                                           
                var flashvars = {
                        "uid": "video-player",
                        "file": "http://178.162.205.105:8081/liveg/rossiya24.stream/playlist.m3u8?wmsAuthSign=" + signature +" or http://178.162.205.107:8081/liveg/rossiya24b.stream/playlist.m3u8?wmsAuthSign="+ signature,
                        "auto": "play",
                        "debug": "1",
                        "st": "psHocjtTlUdBMvwTaCHbLvnTOTc5VicoZin8VScycU5hzUITOTHslScycU=6l4wTOTH8z4=xcT8TI3Vhz4NoMvx6cjt5aCHblJHduv7TOjEycUVYlJHyR2kyuRBTOQyTzv=sM3dYz4NUlCc1ZC8TI3Vhz4mTOjEYVR7ycUVYlJHyR2MWzJNoMSc1psHouRHQLvxyMvM7cjt5VS8TI3Vhz4mTOjEYVR7ycUVYlJHyR2MWz4HhIU5ezUmTOQyTI3Vhz4mTOjEYVR7ycUVYlJHyR3M6z48TOQyTLvVWzTc1cjcTaCHouRHQLvxyMvM7cjtsDS8Tu3x7IU5Dz4dYMSc1psHTlvMUz4dYMvVWz4gscjtTMUMUMUMUcQ7ycUVYlJHyuUljz35WITc1cjkwZCcycUVYlJHyR36xVCc1psH7MRh7cjt8aCHeu3gYcjtTLJX7IftWa3lyuRtYlJuWLJE5Zsx8zUITaCHyLvxrcjtTLQZ1LJ=UlvxjcT8TI4djcjt5aCHouRHQLvxyMvM7cjt5ZC8Tzv=sM3dYIUdQLJnTOjc8aCHouRHQLvxTz2X7z37TOjIycQkeu6g2cjtbZC8TI4djR39TOjZ8aCH7LRATOTanUg4f7uDXTVC67am97arnyV4J7aRX9l4C7aanWTHgaCHTM3VWz4gscjtTMUMUMUMUcT8Tl4d8cjt5aCHYz2XdI3HQu3gyz2cTOTc8cT8TIJHWcjt5aCHjzQXsz=gopiZTOQyTl4NGlCc1ZC8TLvVWzTc1cUh7lJA1asgQz4=1aQX3a2eWz37susx8zUITaCHouRHQLvxTz2X7z37TOT7baCHouRHQLvxyMvM7cjtsaCHyLvxrcjtTI3Vhz4mocT8TI4djcjt5aCH8LvVDlsc1ZiuycUxWl4d8cjtTZScycQkeu6gtcjt5VQ7ycUVYlJHyR36xZTc1psH7MRh7cjt8aCHeu3gYcjtTLJX7IftWa2l2lsxQz4=1aQX3a2eWz36jaQkYMscycU6hIUlezUHWlJXWzSc1aiZycUxWl4d8cjtTZScycU5ezUyTOTHbu3=yMSyTaCH8LvZTOjEycQkeu6g2cjt5VT8TI4djR39TOjE3DS8Tu3gYlJHWzJZTOTH8z4=xaJMWzJNoMS53z35TuRHyLvxdaJV8uvVda46xZs5opicyzRB7a4M6z48yuQNUMUNscQ7F",
                        "hlsplugin_manifestLoadMaxRetry": 1
                    };
                var params = {
                    bgcolor: "#000",
                    allowFullScreen: "true",
                    allowScriptAccess: "always",
                    id: "video-player",
                    aspect: 1.3
                };
                new swfobject.embedSWF("https://www.glaz.tv/swf/uppod161216.swf", "video-player", "100%", "100%", "10.0.0", false, flashvars, params);
                        
                uppodEvent('video-player', 'init');
                var normalTimeout = 9000;
                checkStream(normalTimeout);
            }
        }
    </script>