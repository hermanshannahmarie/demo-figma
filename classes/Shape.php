<?php

declare(strict_types=1);

class Shape
{
    private int $x;
    private int $y;
    private string $color;

    public function __construct(int $x = 0, int $y = 0, string $color = 'red')
    {
        $this->setX($x);
        $this->setY($y);
        $this->setColor($color);
    }

    public function getX(): int
    {
        return $this->x;
    }

    public function setX(int $x): void
    {
        $this->x = $x;
    }

    public function getY(): int
    {
        return $this->y;
    }

    public function setY(int $y): void
    {
        $this->y = $y;
    }

    public function getColor(): string
    {
        return $this->color;
    }

    public function setColor(string $color): void
    {
        $this->color = $color;
    }

    public function render(): string
    {
        $x = $this->getX();
        $y = $this->getY();
        $color = htmlspecialchars($this->getColor(), ENT_QUOTES, 'UTF-8');

        return sprintf(
            '<div class="shape" style="left: %dpx; top: %dpx; background-color: %s;"></div>',
            $x,
            $y,
            $color
        );
    }
}
