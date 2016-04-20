<?php

namespace Benmag\Rancher;

use Benmag\Rancher\Factories\Api\Certificate;
use Benmag\Rancher\Factories\Api\Container;
use Benmag\Rancher\Factories\Api\Environment;
use Benmag\Rancher\Factories\Api\Host;
use Benmag\Rancher\Factories\Api\Project;
use Benmag\Rancher\Factories\Api\Service;
use Benmag\Rancher\Factories\Api\LoadBalancerService;

/**
 * Rancher API wrapper for Laravel
 *
 * @package  Rancher
 * @author   @benmagg
 */
class Rancher {

    protected $client;

    public function __construct(Factories\Client $client)
    {
        $this->client = $client;
    }

    /**
     * @return Factories\Api\Host
     */
    public function host()
    {
        return new Host($this->client);
    }

    /**
     * @return Factories\Api\Certificate
     */
    public function certificate()
    {
        return new Certificate($this->client);
    }

    /**
     * @return Factories\Api\Container
     */
    public function container()
    {
        return new Container($this->client);
    }

    /**
     * @return Factories\Api\Environment
     */
    public function environment()
    {
        return new Environment($this->client);
    }

    /**
     * @return Factories\Api\Project
     */
    public function project()
    {
        return new Project($this->client);
    }

    /**
     * @return Factories\Api\Service
     */
    public function service()
    {
        return new Service($this->client);
    }

    /**
     * @return Factories\Api\LoadBalancerService
     */
    public function loadBalancerService()
    {
        return new LoadBalancerService($this->client);
    }


}