<?php
$page = get_sub_field('page');
$button_text = get_sub_field('button_text');
$external_url = get_sub_field('xternal_url');
$link = $page ? get_permalink($page) : $external_url;
$darkButton = new DarkButton($link, $button_text);
echo $darkButton;
