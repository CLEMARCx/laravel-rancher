<?php

namespace Benmag\Rancher\Factories\Entity;

class Certificate extends AbstractEntity
{

    /**
     * The unique identifier for the host
     *
     * @var string
     */
    protected $id;

    /**
     * @var string
     */
    protected $name;

    /**
     * Certificates state
     *
     * @var string
     */
    protected $state; 

    /**
     * Common name
     *
     * @var string
     */
    protected $CN;

    /**
     * Certificate
     *
     * @var string
     */
    protected $cert; 

    /**
     * Certificate key
     *
     * @var string
     */
    protected $key;     

    /**
     * CA Chain Certificate
     *
     * @var string
     */
    protected $certChain;       

}