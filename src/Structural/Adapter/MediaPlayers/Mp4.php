<?php


namespace App\Structural\Adapter\MediaPlayers;


class Mp4 implements AdvancedMediaPlayer
{

    public function playVlc(string $name): string
    {
        return '';
    }


    public function playMp4(string $name): string
    {
        return str_replace(' ', '_', $name) . ".mp4";
    }
}