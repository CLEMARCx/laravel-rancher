<?php

namespace Benmag\Rancher\Factories\Api;

use \Benmag\Rancher\Factories\Entity\Volume as VolumeEntity;

/**
 * Rancher API wrapper for Laravel
 *
 * @package  Rancher
 * @author   @CLEMARCx
 */
class Volume extends AbstractApi implements \Benmag\Rancher\Contracts\Api\Volume
{

    /**
     * The class of the entity we are working with
     *
     * @var Volume
     */
    protected $class = VolumeEntity::class;

    /**
     * The Rancher API endpoint of the resource type.
     *
     * @var string
     */
    protected $endpoint = "volumes";


    /**
     * {@inheritdoc}
     */
    public function create(VolumeEntity $volume)
    {
        // Send "create" volume request
        $volume = $this->client->post($this->endpoint, $volume->toArray());

        // Parse response
        $volume = json_decode($volume);

        // Create ContainerEntity from response
        return new VolumeEntity($volume);
    }

    /**
     * {@inheritdoc}
     */
    public function remove($id)
    {
        // Send "delete" volume request
        $volume = $this->client->delete($this->endpoint."/".$id);

        // Parse response
        $volume = json_decode($volume);

        // Create ContainerEntity from response
        return new VolumeEntity($volume);
    }

    /**
     * {@inheritdoc}
     */
    public function purge($id)
    {
        // Send purge request
        $volume = $this->client->post($this->endpoint."/".$id, ['action' => 'purge']);

        // Parse response
        $volume = json_decode($volume);

        // Create RegistryEntity from response
        return new VolumeEntity($volume);
    }

}