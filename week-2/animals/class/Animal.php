<?php

namespace App;

class Animal
{
    protected $sound;

    /**
     * Get the value of sound
     */ 
    public function getSound(): bool
    {
        return $this->sound;
    }

    /**
     * Set the value of sound
     *
     * @return  self
     */ 
    public function setSound(string $sound): self
    {
        $this->sound = $sound;

        return $this;
    }
}