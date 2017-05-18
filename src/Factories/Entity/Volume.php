<?php

namespace Benmag\Rancher\Factories\Entity;

class Volume extends AbstractEntity
{

    /**
     * The unique identifier for the host
     *
     * @var string
     */
    protected $id;

    /**
     * @var string
     */
    public $name;

    /**
     * Volume driver
     *
     * @var string
     */
    protected $driver; 

    /**
     * Volume state
     *
     * @var string
     */
    protected $state;     

}