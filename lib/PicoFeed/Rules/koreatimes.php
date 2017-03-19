<?php
return array(
    'grabber' => array(
        '%.*%' => array(
            'test_url' => 'http://www.koreatimes.co.kr/www/news/nation/2015/12/116_192409.html',
            'body' => array(
                '//div[@id="startts"]',
            ),
            'strip' => array(
                '//div[@id="webtalks_btn_listenDiv"]',
            ),
        ),
    ),
);
