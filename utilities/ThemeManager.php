<?php

class ThemeManager
{
    public $theme = array();
    public $json = "";
    function __construct($jsonFile)
    {
        if (file_exists($jsonFile)) {
            $this->jsonFile = $jsonFile;
            $this->setThemeSettings();
        } else {
            throw new Exception("JSON file does not exist");
        }
    }

    private function setThemeSettings()
    {
        $this->jsonData = file_get_contents($this->jsonFile);
        $this->theme = json_decode($this->jsonData, true);
    }

    public function updateTheme($json)
    {
        $this->jsonData = $json;
        $this->theme = json_decode($json);
    }

    public function saveSettings()
    {
        file_put_contents($this->jsonFile, $this->theme);
    }

    public function getColors()
    {
        return $this->theme["settings"]["color"]["palette"];
    }

    public function setColors($colors)
    {
        $this->theme["settings"]["color"]["palette"] = $colors;
    }

    public function getColorByName($name)
    {
        return array_filter($this->theme["settings"]["color"]["palette"], function ($color) use ($name) {
            return $color["name"] == $name;
        })[0];
    }

    public function getColorBySlug($slug)
    {
        return array_filter($this->theme["settings"]["color"]["palette"], function ($color) use ($slug) {
            return $color["slug"] == $slug;
        })[0];
    }

    public function hexToRgb($hex, $alpha = false)
    {
        $hex = str_replace('#', '', $hex);
        $length = strlen($hex);
        $rgb['r'] = hexdec($length == 6 ? substr($hex, 0, 2) : ($length == 3 ? str_repeat(substr($hex, 0, 1), 2) : 0));
        $rgb['g'] = hexdec($length == 6 ? substr($hex, 2, 2) : ($length == 3 ? str_repeat(substr($hex, 1, 1), 2) : 0));
        $rgb['b'] = hexdec($length == 6 ? substr($hex, 4, 2) : ($length == 3 ? str_repeat(substr($hex, 2, 1), 2) : 0));
        if ($alpha) {
            $rgb['a'] = $alpha;
        }
        return $rgb;
    }
}
