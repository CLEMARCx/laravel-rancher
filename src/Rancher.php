<?php

namespace Benmag\Rancher;

use Benmag\Rancher\Factories\Api\Container;
use Benmag\Rancher\Factories\Api\Host;
use Benmag\Rancher\Factories\Api\Project;

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
     * @return Factories\Api\Container
     */
    public function container()
    {
        return new Container($this->client);
    }

    /**
     * @return Project
     */
    public function project()
    {
        return new Project($this->client);
    }

}