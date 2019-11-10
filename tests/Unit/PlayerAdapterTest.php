<?php


namespace Tests\Unit;


use App\Structural\Adapter\AudioPlayer;
use PHPUnit\Framework\TestCase;

class PlayerAdapterTest extends TestCase
{

    /**
     * @test
     */
    public function it_a_mp3()
    {
        $mp3 = (new AudioPlayer())->play('Eminem | Love the way lie', 'mp3');

        $this->assertEquals("play.mp3", $mp3);
    }

    /**
     * @test
     */
    public function it_a_mp4()
    {
        $mp4 = (new AudioPlayer())->play('Eminem Love the way lie', 'mp4');

        $this->assertEquals("Eminem_Love_the_way_lie.mp4", $mp4);
    }

    /**
     * @test
     */
    public function it_a_VLC()
    {
        $vlc = (new AudioPlayer())->play('Eminem Love the way lie', 'vlc');

        $this->assertEquals("Eminem_Love_the_way_lie.vlc", $vlc);
    }

    /**
     * @test
     */
    public function it_a_unreadable()
    {
        $flac = (new AudioPlayer())
            ->play('Eminem Love the way lie', 'FLAC');

        $this->assertEquals("unreadable", strtolower($flac));
    }
}