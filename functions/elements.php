<?php
foreach (glob(get_template_directory() . "/functions/elements/*.php") as $filename) {
    include_once($filename);
}
