<?php

interface HeadingInterface
{
    public function __toString(): string;
}

class Heading implements HeadingInterface
{
    private string $text;

    public function __construct(string $text, string $level, string $color)
    {
        $this->text = $text;
        $this->level = $level;
        $this->color = $color;
        $this->leading_classes = $this->get_leading_classes();
    }
    private function get_leading_classes()
    {
        switch ($this->level) {
            case 'h1':
                return 'leading-loosest text-3xl md:text-6xl sm:text-4xl';
            case 'h2':
                return 'leading-looser text-xxl md:text-5xl sm:text-3xl';
            case 'h3':
                return 'leading-loose text-lg md:text-4xl sm:text-text-2xl';
            case 'h4':
                return 'leading-normal text-md md:text-3xl sm:text-xl';
            case 'h5':
                return 'leading-tight text-md md:text-xl sm:text-lg';
            case 'h6':
                return 'leading-tighter text-base';
        }
    }
    public function __toString(): string
    {

        return "<$this->level class='w-full text-ellipsis bold $this->leading_classes text-$this->color'>$this->text</$this->level>";
    }
}
