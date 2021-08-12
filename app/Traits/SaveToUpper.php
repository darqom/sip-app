<?php

namespace App\Traits;

trait SaveToUpper
{
    public function setAttribute($key, $value) 
    {
        parent::setAttribute($key, $value);
        $noUppers = $this->no_uppercase ?? [];
        
        if(is_string($value)) {
            if(!in_array($key, $noUppers)) {
                $this->attributes[$key] = strtoupper($value);
            }
        }
    }
}
