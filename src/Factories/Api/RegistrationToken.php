<?php

namespace Benmag\Rancher\Factories\Api;

use \Benmag\Rancher\Factories\Entity\RegistrationToken as RegistrationTokenEntity;

/**
 * Rancher API wrapper for Laravel
 *
 * @package  Rancher
 * @author   @benmagg
 */
class RegistrationToken extends AbstractApi implements \Benmag\Rancher\Contracts\Api\RegistrationToken
{

    /**
     * The class of the entity we are working with
     *
     * @var Registry
     */
    protected $class = RegistrationTokenEntity::class;

    /**
     * The Rancher API endpoint of the resource type.
     *
     * @var string
     */
    protected $endpoint = "registrationToken";


    /**
     * {@inheritdoc}
     */
    public function create(RegistrationTokenEntity $registrationToken)
    {

        // Data
        $data = $registrationToken->toArray();

        // Send "create" service request
        $registrationToken = $this->client->post($this->endpoint, $data, ['content_type' => 'json']);

        // Parse response
        $registrationToken = json_decode($registrationToken);

        // Create ContainerEntity from response
        return new RegistrationTokenEntity($registrationToken);

    }

}