<?php

namespace Benmag\Rancher\Factories\Entity;

class LoadBalancerService extends AbstractEntity
{

    /**
     * The unique identifier for the load balancer service
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
    public $projectId;

    /**
     * @var string
     */
    public $environmentId;

    /**
     * @var string
     */
    public $scale = 1;

    /**
     * @var string
     */
    public $type = "loadBalancerService";

    /**
     * @var array
     */
    public $launchConfig = null;

    /**
     * @var array
     */
    public $loadBalancerConfig = null;

    public $lbConfig;

}