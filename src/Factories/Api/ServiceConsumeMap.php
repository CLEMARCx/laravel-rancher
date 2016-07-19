<?php

namespace Benmag\Rancher\Factories\Api;

use \Benmag\Rancher\Factories\Entity\ServiceConsumeMap as ServiceConsumeMapEntity;

/**
 * Rancher API wrapper for Laravel
 *
 * @package  Rancher
 * @author   @benmagg
 */
class ServiceConsumeMap extends AbstractApi implements \Benmag\Rancher\Contracts\Api\ServiceConsumeMap
{

    /**
     * The class of the entity we are working with
     *
     * @var Registry
     */
    protected $class = ServiceConsumeMapEntity::class;

    /**
     * The Rancher API endpoint of the resource type.
     *
     * @var string
     */
    protected $endpoint = "serviceConsumeMap";


    /**
     * {@inheritdoc}
     */
    public function remove($id)
    {

        // Send remove request
        $serviceConsumeMap = $this->client->post($this->endpoint."/".$id, [
            'action' => 'remove'
        ]);

        // Parse response
        $serviceConsumeMap = json_decode($serviceConsumeMap);

        // Create ServiceConsumeMapEntity from response
        return new ServiceConsumeMapEntity($serviceConsumeMap);

    }

}