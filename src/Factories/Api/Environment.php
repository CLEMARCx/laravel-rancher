<?php

namespace Benmag\Rancher\Factories\Api;

use Benmag\Rancher\Factories\Entity\Environment as EnvironmentEntity;

/**
 * Rancher API wrapper for Laravel
 *
 * @package  Rancher
 * @author   @benmagg
 */
class Environment extends AbstractApi implements \Benmag\Rancher\Contracts\Api\Environment
{

    /**
     * The class of the entity we are working with
     *
     * @var Container
     */
    protected $class = EnvironmentEntity::class;

    /**
     * The Rancher API endpoint of the resource type.
     *
     * @var string
     */
    protected $endpoint = "environments";


    /**
     * {@inheritdoc}
     */
    public function create(EnvironmentEntity $environment)
    {
        // Send "create" environment request
        $environment = $this->client->post($this->endpoint, $environment->toArray());

        // Parse response
        $environment = json_decode($environment);

        // Create ContainerEntity from response
        return new EnvironmentEntity($environment);
    }

    /**
     * {@inheritdoc}
     */
    public function update($id, EnvironmentEntity $environment)
    {

        // Send "update" environment request
        $environment = $this->client->put($this->endpoint."/".$id, $environment->toArray());

        // Parse response
        $environment = json_decode($environment);

        // Create ContainerEntity from response
        return new EnvironmentEntity($environment);

    }

    /**
     * {@inheritdoc}
     */
    public function delete($id)
    {

        // Send "update" environment request
        $environment = $this->client->delete($this->endpoint."/".$id);

        // Parse response
        $environment = json_decode($environment);

        // Create ContainerEntity from response
        return new EnvironmentEntity($environment);

    }




    /**
     * {@inheritdoc}
     */
    public function remove($id)
    {

        // Send "update" environment request
        $environment = $this->client->post($this->endpoint."/".$id, [
            'action' => 'remove'
        ]);

        // Parse response
        $environment = json_decode($environment);

        // Create ContainerEntity from response
        return new EnvironmentEntity($environment);

    }

    /**
     * {@inheritdoc}
     */
    public function activateServices($id)
    {

        // Send "update" environment request
        $environment = $this->client->post($this->endpoint."/".$id, [
            'action' => 'activateservices'
        ]);

        // Parse response
        $environment = json_decode($environment);

        // Create ContainerEntity from response
        return new EnvironmentEntity($environment);

    }

    /**
     * {@inheritdoc}
     */
    public function deactivateServices($id)
    {

        // Send "update" environment request
        $environment = $this->client->post($this->endpoint."/".$id, [
            'action' => 'deactivateservices'
        ]);

        // Parse response
        $environment = json_decode($environment);

        // Create ContainerEntity from response
        return new EnvironmentEntity($environment);

    }

    /**
     * {@inheritdoc}
     */
    public function upgrade($id, \Benmag\Rancher\Factories\Entity\Environment $environment)
    {
        // Does this functionality actually exist yet within Rancher??
    }

    /**
     * {@inheritdoc}
     */
    public function finishUpgrade($id)
    {
        // Does this functionality actually exist yet within Rancher??
    }

    /**
     * {@inheritdoc}
     */
    public function cancelUpgrade($id)
    {
        // Does this functionality actually exist yet within Rancher??
    }

    /**
     * {@inheritdoc}
     */
    public function rollback($id)
    {
        // Does this functionality actually exist yet within Rancher??
    }

    /**
     * {@inheritdoc}
     */
    public function cancelRollback($id)
    {
        // Does this functionality actually exist yet within Rancher??
    }

}