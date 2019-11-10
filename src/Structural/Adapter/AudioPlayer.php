<?php


namespace App\Structural\Adapter;


use App\Structural\Adapter\MediaPlayers\MediaPlayer;

class AudioPlayer implements MediaPlayer
{
    /**
     * @var MediaPlayer
     */
    private $mediaAdapter;

    public function play(string $name, string $extension): string
    {
        $this->mediaAdapter = new MediaAdapter();

        if (in_array(strtolower($extension), ["mp4", "vlc"]))
            return $this->mediaAdapter->play($name, $extension);

        else if (strtolower($extension) == 'mp3')
            return "play." . $extension;

        return "Unreadable";
    }
}