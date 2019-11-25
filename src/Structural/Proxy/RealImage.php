<?php


namespace App\Structural\Proxy;


class RealImage implements Image
{
    /**
     * @var string
     */
    public $fileName;

    public function __construct(string $path)
    {
        $this->fileName = $path;
        $this->loadFromDisk($this->fileName);
    }

    private function loadFromDisk(string $fileName)
    {
        printf("From '{$fileName}' image Loaded");
    }

    public function display()
    {
        return "Displaying {$this->fileName}";
    }
}