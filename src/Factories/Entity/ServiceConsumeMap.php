<?php

namespace Benmag\Rancher\Factories\Entity;

class ServiceConsumeMap extends AbstractEntity
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
     * The unique identifier of the associated service
     *
     * @var string
     */
    public $serviceId;

    /**
     * The unique identifier of the consumed service
     *
     * @var string
     */
    public $consumedServiceId;

    /**
     * @var array[string]
     */
    public $ports;

    /**
     * @var string
     */
    public $state;

}