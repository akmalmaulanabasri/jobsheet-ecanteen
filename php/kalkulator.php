<?php

class Hitung
{
    public $x;
    public $y;

    public function Tambah($x = null, $y = null)
    {
        $this->x = $x;
        $this->y = $y;
        return $x + $y;
    }
    public function Kurang($x = null, $y = null)
    {
        $this->x = $x;
        $this->y = $y;
        return $x - $y;
    }
    public function Kali($x = null, $y = null)
    {
        $this->x = $x;
        $this->y = $y;
        return $x * $y;
    }
    public function Bagi($x = null, $y = null)
    {
        $this->x = $x;
        $this->y = $y;
        return $x / $y;
    }
}