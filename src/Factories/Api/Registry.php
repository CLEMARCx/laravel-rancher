<?php

namespace Benmag\Rancher\Factories\Api;

use \Benmag\Rancher\Factories\Entity\Registry as RegistryEntity;

/**
 * Rancher API wrapper for Laravel
 *
 * @package  Rancher
 * @author   @benmagg
 */
class Registry extends AbstractApi implements \Benmag\Rancher\Contracts\Api\Registry
{

    /**
     * The class of the entity we are working with
     *
     * @var Registry
     */
    protected $class = RegistryEntity::class;

    /**
     * The Rancher API endpoint of the resource type.
     *
     * @var string
     */
    protected $endpoint = "registry";

    /**
     * {@inheritdoc}
     */
    public function create(RegistryEntity $registry)
    {

        // Data
        $data = $registry->toArray();

        // Send "create" request
        $registry = $this->client->post($this->endpoint, $data, ['content_type' => 'json']);

        // Parse response
        $registry = json_decode($registry);

        // Create RegistryEntity from response
        return new RegistryEntity($registry);

    }

    /**
     * {@inheritdoc}
     */
    public function update($id, RegistryEntity $registry)
    {

        // Send "update" request
        $registry = $this->client->put($this->endpoint."/".$id, $registry->toArray());

        // Parse response
        $registry = json_decode($registry);

        // Create ContainerEntity from response
        return new RegistryEntity($registry);

    }

    /**
     * {@inheritdoc}
     */
    public function delete($id)
    {

        // Send delete request
        $registry = $this->client->delete($this->endpoint."/".$id);

        // Parse response
        $registry = json_decode($registry);

        // Create RegistryEntity from response
        return new RegistryEntity($registry);

    }

    /**
     * {@inheritdoc}
     */
    public function activate($id)
    {

        // Send "activate" request
        $registry = $this->client->post($this->endpoint."/".$id, ['action' => 'activate']);

        // Parse response
        $registry = json_decode($registry);

        // Create RegistryEntity from response
        return new RegistryEntity($registry);

    }

    /**
     * {@inheritdoc}
     */
    public function deactivate($id)
    {

        // Send "deactivate" request
        $registry = $this->client->post($this->endpoint."/".$id, ['action' => 'deactivate']);

        // Parse response
        $registry = json_decode($registry);

        // Create RegistryEntity from response
        return new RegistryEntity($registry);

    }

    /**
     * {@inheritdoc}
     */
    public function purge($id)
    {

        // Send purge request
        $registry = $this->client->post($this->endpoint."/".$id, ['action' => 'purge']);

        // Parse response
        $registry = json_decode($registry);

        // Create RegistryEntity from response
        return new RegistryEntity($registry);

    }

    /**
     * {@inheritdoc}
     */
    public function remove($id)
    {

        // Send "remove" request
        $registry = $this->client->post($this->endpoint."/".$id, ['action' => 'remove']);


        // Parse response
        $registry = json_decode($registry);

        // Create RegistryEntity from response
        return new RegistryEntity($registry);

    }

    /**
     * {@inheritdoc}
     */
    public function restore($id)
    {

        // Send "restore" request
        $registry = $this->client->post($this->endpoint."/".$id, ['action' => 'restore']);

        // Parse response
        $registry = json_decode($registry);

        // Create ContainerEntity from response
        return new RegistryEntity($registry);

    }

}