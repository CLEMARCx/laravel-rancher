<?php

namespace Benmag\Rancher\Factories\Entity;

class RegistrationToken extends AbstractEntity
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
    public $token;

    /**
     * The registration URL of the registration token
     *
     * @var string
     */
    public $registrationUrl;

    /**
     * @var string
     */
    public $command;

    /**
     * @var string
     */
    public $image;

    /**
     * @var string
     */
    public $state;

}