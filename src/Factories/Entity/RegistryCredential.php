<?php

namespace Benmag\Rancher\Factories\Entity;

class RegistryCredential extends AbstractEntity
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
     * The unique identifier of a registry
     *
     * @var string
     */
    public $registryId;

    /**
     * The email address of the credential to use with a registry
     *
     * @var string
     */
    public $email;

    /**
     * The public value of the registryCredential
     *
     * @var string
     */
    public $publicValue;

    /**
     * The secret value of the registryCredential
     *
     * @var string
     */
    public $secretValue;

}