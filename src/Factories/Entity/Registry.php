<?php

namespace Benmag\Rancher\Factories\Entity;

class Registry extends AbstractEntity
{

    /**
     * The unique identifier for the registry
     *
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $accountId;

    /**
     * @var string
     */
    public $serverAddress;

    /**
     * @var string
     */
    public $state;

}