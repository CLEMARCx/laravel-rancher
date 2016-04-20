<?php

namespace Benmag\Rancher\Factories\Api;

use \Benmag\Rancher\Factories\Entity\Certificate as CertificateEntity;

/**
 * Rancher API wrapper for Laravel
 *
 * @package  Rancher
 * @author   @CLEMARCx
 */
class Certificate extends AbstractApi implements \Benmag\Rancher\Contracts\Api\Certificate
{

    /**
     * The class of the entity we are working with
     *
     * @var Certificate
     */
    protected $class = CertificateEntity::class;

    /**
     * The Rancher API endpoint of the resource type.
     *
     * @var string
     */
    protected $endpoint = "certificates";


    /**
     * {@inheritdoc}
     */
    public function create(CertificateEntity $certificate)
    {


    }

    /**
     * {@inheritdoc}
     */
    public function remove($id)
    {

    }

    /**
     * {@inheritdoc}
     */
    public function purge($id)
    {

    }

}