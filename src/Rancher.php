<?php

namespace Benmag\Rancher;

use Benmag\Rancher\Factories\Api\Certificate;
use Benmag\Rancher\Factories\Api\Stack;
use Benmag\Rancher\Factories\Api\Volume;
use Benmag\Rancher\Factories\Api\Container;
use Benmag\Rancher\Factories\Api\Environment;
use Benmag\Rancher\Factories\Api\Host;
use Benmag\Rancher\Factories\Api\Machine;
use Benmag\Rancher\Factories\Api\Project;
use Benmag\Rancher\Factories\Api\RegistryCredential;
use Benmag\Rancher\Factories\Api\Service;
use Benmag\Rancher\Factories\Api\LoadBalancerService;
use Benmag\Rancher\Factories\Api\Registry;
use Benmag\Rancher\Factories\Api\RegistrationToken;
use Benmag\Rancher\Factories\Api\ServiceConsumeMap;

/**
 * Rancher API wrapper for Laravel
 *
 * @package  Rancher
 * @author   @benmagg
 */
class Rancher {

    public $client;

    public function __construct(Factories\Client $client)
    {
        $this->client = $client;
    }

    public function setClient($client)
    {
        $this->client = $client;
    }

    /**
     * @return Factories\Api\Host
     */
    public function machine()
    {
        return new Machine($this->client);
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
     * @return Factories\Api\Stack
     */
    public function stack()
    {
        return new Stack($this->client);
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
     * @return Factories\Api\Volume
     */
    public function volume()
    {
        return new Volume($this->client);
    }       

    /**
     * @return Factories\Api\LoadBalancerService
     */
    public function loadBalancerService()
    {
        return new LoadBalancerService($this->client);
    }

    /**
     * @return Factories\Api\Registry
     */
    public function registry()
    {
        return new Registry($this->client);
    }

    /**
     * @return Factories\Api\RegistryCredential
     */
    public function registryCredential()
    {
        return new RegistryCredential($this->client);
    }

    /**
     * @return Factories\Api\RegistrationToken
     */
    public function registrationToken()
    {
        return new RegistrationToken($this->client);
    }

    /**
     * @return Factories\Api\ServiceConsumeMap
     */
    public function serviceConsumeMap()
    {
        return new ServiceConsumeMap($this->client);
    }

 

}