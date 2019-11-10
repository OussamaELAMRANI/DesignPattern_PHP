<?php


namespace App\Structural\Adapter;


use App\Structural\Adapter\MediaPlayers\MediaPlayer;
use App\Structural\Adapter\MediaPlayers\Mp4;
use App\Structural\Adapter\MediaPlayers\VLC;

class MediaAdapter implements MediaPlayer
{
    private $advanceMedia;

    public function play(string $name, string $extension): string
    {
        if (strtolower($extension) == 'mp4')
            return $this->advanceMedia = (new Mp4())->playMp4($name);

        else if (strtolower($extension) == 'vlc')
            return $this->advanceMedia = (new VLC())->playVlc($name);
    }
}