<?php

namespace GoogleSpeech;


/**
 * Class File
 * @package GoogleSpeech
 */
class File
{
    private $path;
    private $name;
    private $type;

    public function __construct()
    {
        $this->type = 'mp3';
        $this->name = 'audio';
    }

    /**
     * @return string
     */
    public function getCompletePath(){
        return $this->path . DIRECTORY_SEPARATOR . $this->name .'.' . $this->type;
    }

    /**
     * @return mixed
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * @param mixed $path
     */
    public function setPath($path)
    {
        $this->path = $path;
    }



    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }


}