<?php
$page = get_sub_field('page');
$external_url = get_sub_field('external_url');
$link = $page ? get_permalink($page) : $external_url;
$lightButton = new LightButton($link, $button_text);
echo $lightButton;
