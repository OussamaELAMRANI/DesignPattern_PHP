<?php


namespace App\Structural\Adapter\MediaPlayers;


interface AdvancedMediaPlayer
{
    public function playVlc(string $name): string ;

    public function playMp4(string $name): string ;
}