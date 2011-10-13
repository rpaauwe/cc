<?php
namespace CC;

class Factory
{
    public static function assemblyLine($item)
    {
        $className = '\CC\Product\\' . ucfirst($item);
        
        $class = new $className;

        if (!($class instanceof \CC\Product\Standard)) {
            throw new \Exeption;
        }

        return $class;
    }
}