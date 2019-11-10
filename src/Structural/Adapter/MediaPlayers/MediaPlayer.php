<?php


namespace App\Structural\Adapter\MediaPlayers;


interface MediaPlayer
{
    public function play(string $name, string $extension): string ;
}