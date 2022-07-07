<?php

interface ButtonInterface
{
    public function __toString(): string;
}

class LightButton implements ButtonInterface
{
    private string $link;
    private string $text;

    public function __construct(string $link, string $text)
    {
        $this->link = $link;
        $this->text = $text;
    }

    public function __toString(): string
    {
        return "<a href='$this->link' class='border-[1px] p-4 bg-transparent border-secondary text-secondary hover:text-secondary hover:border-secondary hover:bg-accent'>$this->text</a>";
    }
}

class DarkButton implements ButtonInterface
{
    private string $link;
    private string $text;

    public function __construct(string $link, string $text)
    {
        $this->link = $link;
        $this->text = $text;
    }

    public function __toString(): string
    {
        return "<a href='$this->link' class='border-[1px] p-4 bg-transparent border-light text-light hover:text-accent hover:border-accent'>$this->text</a>";
    }
}
