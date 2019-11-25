<?php


namespace App\Structural\Proxy;


class ImageProxy implements Image
{
    /**
     * @var Image
     */
    private $realImage;
    /**
     * @var string
     */
    private $fileName;

    /**
     * ImageProxy constructor.
     * @param string $fileName
     */
    public function __construct(string $fileName)
    {
        $this->fileName = $fileName;
    }


    public function display()
    {
        if( is_null($this->realImage))
            $this->realImage = new RealImage($this->fileName);

        return $this->realImage->display();
    }

}