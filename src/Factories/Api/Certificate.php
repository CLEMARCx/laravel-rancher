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

        // Send "create" service request
        $certificate = $this->client->post($this->endpoint, $certificate->toArray(), ['content_type' => 'json']);

        // Parse response
        $certificate = json_decode($certificate);

        // Create ContainerEntity from response
        return new CertificateEntity($certificate);

    }

    /**
     * {@inheritdoc}
     */
    public function remove($id)
    {
        // Send "delete" certificate request
        $certificate = $this->client->delete($this->endpoint."/".$id);

        // Parse response
        $certificate = json_decode($certificate);

        // Instantiate CertificateEntity with response
        return new CertificateEntity($certificate);
    }

    /**
     * {@inheritdoc}
     */
    public function purge($id)
    {

    }

}