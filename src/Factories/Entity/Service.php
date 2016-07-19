<?php

namespace Benmag\Rancher\Factories\Entity;

class Service extends AbstractEntity
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
     * Account environment belongs to
     *
     * @var string
     */
    public $accountId;

    /**
     * The identifier of the Environment
     * the service belongs to
     *
     * @var string
     */
    public $environmentId;

    /**
     * Image container is using
     *
     * @var string
     */
    public $imageUuid;

    /**
     * The number of containers to deploy
     * as part of a service
     *
     * @var integer
     */
    public $scale = 1;

    /**
     * Current state of container
     *
     * @var string
     */
    public $state;

    /**
     * The Docker run configuration of a container
     *
     * @var object
     */
    public $launchConfig;

    /**
     * The fqdn of a service when the DNS service has started.
     *
     * @var string
     */
    public $fqdn;

    /**
     * Public endpoints of the service
     *
     * @var string
     */
    public $publicEndpoints;

}