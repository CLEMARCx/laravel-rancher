<?php

namespace Benmag\Rancher\Factories\Api;

use \Benmag\Rancher\Factories\Entity\RegistryCredential as RegistryCredentialEntity;

/**
 * Rancher API wrapper for Laravel
 *
 * @package  Rancher
 * @author   @benmagg
 */
class RegistryCredential extends AbstractApi implements \Benmag\Rancher\Contracts\Api\RegistryCredential
{

    /**
     * The class of the entity we are working with
     *
     * @var Registry
     */
    protected $class = RegistryCredentialEntity::class;

    /**
     * The Rancher API endpoint of the resource type.
     *
     * @var string
     */
    protected $endpoint = "registryCredential";

    /**
     * {@inheritdoc}
     */
    public function create(RegistryCredentialEntity $registryCredential)
    {

        // Data
        $data = $registryCredential->toArray();

        // Send "create" request
        $registryCredential = $this->client->post($this->endpoint, $data, ['content_type' => 'json']);

        // Parse response
        $registryCredential = json_decode($registryCredential);

        // Create RegistryCredentialEntity from response
        return new RegistryCredentialEntity($registryCredential);

    }

    /**
     * {@inheritdoc}
     */
    public function update($id, RegistryCredentialEntity $registryCredential)
    {

        // Send "update" request
        $registryCredential = $this->client->put($this->endpoint."/".$id, $registryCredential->toArray());

        // Parse response
        $registryCredential = json_decode($registryCredential);

        // Create ContainerEntity from response
        return new RegistryCredentialEntity($registryCredential);

    }

    /**
     * {@inheritdoc}
     */
    public function delete($id)
    {

        // Send delete request
        $registryCredential = $this->client->delete($this->endpoint."/".$id);

        // Parse response
        $registryCredential = json_decode($registryCredential);

        // Create RegistryCredentialEntity from response
        return new RegistryCredentialEntity($registryCredential);

    }

    /**
     * {@inheritdoc}
     */
    public function activate($id)
    {

        // Send "activate" request
        $registryCredential = $this->client->post($this->endpoint."/".$id, ['action' => 'activate']);

        // Parse response
        $registryCredential = json_decode($registryCredential);

        // Create RegistryCredentialEntity from response
        return new RegistryCredentialEntity($registryCredential);

    }

    /**
     * {@inheritdoc}
     */
    public function deactivate($id)
    {

        // Send "deactivate" request
        $registryCredential = $this->client->post($this->endpoint."/".$id, ['action' => 'deactivate']);

        // Parse response
        $registryCredential = json_decode($registryCredential);

        // Create RegistryCredentialEntity from response
        return new RegistryCredentialEntity($registryCredential);

    }

    /**
     * {@inheritdoc}
     */
    public function purge($id)
    {

        // Send purge request
        $registryCredential = $this->client->post($this->endpoint."/".$id, ['action' => 'purge']);

        // Parse response
        $registryCredential = json_decode($registryCredential);

        // Create RegistryCredentialEntity from response
        return new RegistryCredentialEntity($registryCredential);

    }

    /**
     * {@inheritdoc}
     */
    public function remove($id)
    {

        // Send "remove" request
        $registryCredential = $this->client->post($this->endpoint."/".$id, ['action' => 'remove']);


        // Parse response
        $registryCredential = json_decode($registryCredential);

        // Create RegistryCredentialEntity from response
        return new RegistryCredentialEntity($registryCredential);

    }

    /**
     * {@inheritdoc}
     */
    public function restore($id)
    {

        // Send "restore" request
        $registryCredential = $this->client->post($this->endpoint."/".$id, ['action' => 'restore']);

        // Parse response
        $registryCredential = json_decode($registryCredential);

        // Create ContainerEntity from response
        return new RegistryCredentialEntity($registryCredential);

    }

}