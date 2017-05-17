<?php

namespace Benmag\Rancher\Factories\Entity;

class Host extends AbstractEntity
{

    /**
     * The unique identifier for the host
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
     * The given hostname for the host.
     *
     * @var string
     */
    public $hostname;

    /**
     * Information about the host
     *
     * @var json
     */
    public $info;

    /**
     * Publicly available endpoints for the host
     *
     * @var array
     */
    public $publicEndpoints;

    /**
     * @var string
     */
    public $state;

    /**
     * @var string
     */
    public $agentState;

}