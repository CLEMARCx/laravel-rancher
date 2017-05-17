<?php

namespace Benmag\Rancher\Factories\Entity;

class Certificate extends AbstractEntity
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
     * Certificates state
     *
     * @var string
     */
    protected $state; 

    /**
     * Domain Names
     *
     * @var array
     */
    protected $subjectAlternativeNames;

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