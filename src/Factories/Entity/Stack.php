<?php

namespace Benmag\Rancher\Factories\Entity;

class Stack extends AbstractEntity
{

    /**
     * The unique identifier for the host
     *
     * @var string
     */
    public $id;

    public $name;

    protected $kind; 

    protected $system;     

    public $group;

    public $serviceIds;

    public $environment;

    public $dockerCompose;

    public $rancherCompose;

}