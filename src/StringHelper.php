<?php
namespace Cloud\StringHelper;
/**
 * Description of FileHandler
 *
 * @author Cloud
 */
class StringHelper 
{
    public function getUniqueString()
    {        
        return uniqid(rand());
    }
}
