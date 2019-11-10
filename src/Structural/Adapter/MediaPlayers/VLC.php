<?php


namespace App\Structural\Adapter\MediaPlayers;


class VLC implements AdvancedMediaPlayer
{

    public function playVlc(string $name): string
    {
        return str_replace(' ', '_', $name) . ".vlc";
    }

    public function playMp4(string $name): string
    {
        return '';
    }
}