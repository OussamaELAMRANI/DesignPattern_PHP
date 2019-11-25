<?php


namespace Tests\Unit;


use App\Structural\Proxy\ImageProxy;
use PHPUnit\Framework\TestCase;

class ProxyTest extends TestCase
{

    /**
     * @test
     */
    public function it_a_proxy_of_real_image()
    {
        $path = '/opt/images/me.jpg';
        $img = new ImageProxy($path);

        $this->assertSame(
            "Displaying {$path}",
            $img->display()
        );
    }
}