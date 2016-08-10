<?php
namespace App\Lib\Proffer;

class ProductPath extends \Proffer\Lib\ProfferPath
{
    /**
     * Return the complete absolute path to an upload. If it's an image with thumbnails you can pass the prefix to
     * get the path to the prefixed thumbnail file.
     *
     * @param string $prefix Thumbnail prefix
     * @return string
     */
    public function fullPath($prefix = null)
    {
        $table = $this->getTable();
        $table = (!empty($table)) ? $table . DS : null;

        $seed = $this->getSeed();
        $seed = (!empty($seed)) ? $seed . DS : null;

        return $this->getRoot() . DS . $table . $seed . $this->getFilename();
    }

    /**
     * Return the absolute path to the containing parent folder where all the files will be uploaded
     *
     * @return string
     */
    public function getFolder()
    {
        $table = $this->getTable();
        $table = (!empty($table)) ? $table . DS : null;

        $seed = $this->getSeed();
        $seed = (!empty($seed)) ? $seed . DS : null;

        return $this->getRoot() . DS . $table . $seed;
    }
}
