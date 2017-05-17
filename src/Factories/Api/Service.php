<?php

namespace Benmag\Rancher\Factories\Api;

use Benmag\Rancher\Factories\Entity\Service as ServiceEntity;

/**
 * Rancher API wrapper for Laravel
 *
 * @package  Rancher
 * @author   @benmagg
 */
class Service extends AbstractApi implements \Benmag\Rancher\Contracts\Api\Service
{

    /**
     * The class of the entity we are working with
     *
     * @var Container
     */
    protected $class = ServiceEntity::class;

    /**
     * The Rancher API endpoint of the resource type.
     *
     * @var string
     */
    protected $endpoint = "services";


    /**
     * {@inheritdoc}
     */
    public function create(ServiceEntity $service)
    {

        // Send "create" service request
        $project = $this->client->post($this->endpoint, $service->toArray(), ['content_type' => 'json']);

        // Parse response
        $project = json_decode($project);

        // Create ContainerEntity from response
        return new ServiceEntity($project);

    }

    /**
     * {@inheritdoc}
     */
    public function update($id, ServiceEntity $service)
    {

        // Send "update" environment request
        $service = $this->client->put($this->endpoint."/".$id, $service->toArray());

        // Parse response
        $service = json_decode($service);

        // Create ContainerEntity from response
        return new ServiceEntity($service);

    }

    public function restart($id) {
        // Send "update" environment request
        $service = $this->client->post($this->endpoint."/".$id ."?action=restart", ['action' => 'restart', 'rollingRestartStrategy' => ['batchSize' => 1]]);

        // Parse response
        $service = json_decode($service);

        // Create ContainerEntity from response
        return new ServiceEntity($service);
    }    


    /**
     * {@inheritdoc}
     */
    public function delete($id)
    {

        // Send "delete" service request
        $service = $this->client->delete($this->endpoint."/".$id);

        // Parse response
        $service = json_decode($service);

        // Instantiate ServiceEntity with response
        return new ServiceEntity($service);
    }


    /**
     * {@inheritdoc}
     */
    public function activate($id)
    {

        // Send "activate" host request
        $service = $this->client->post($this->endpoint . "/" . $id, [
            'action' => 'activate'
        ]);

        // Parse response
        $service = json_decode($service);

        // Instantiate HostEntity with response
        return new ServiceEntity($service);

    }

    /**
     * {@inheritdoc}
     */
    public function deactivate($id)
    {

        // Send "deactivate" host request
        $service = $this->client->post($this->endpoint . "/" . $id, [
            'action' => 'deactivate'
        ]);

        // Parse response
        $service = json_decode($service);

        // Create HostEntity from response
        return new ServiceEntity($service);

    }


    /**
     * {@inheritdoc}
     */
    public function addServiceLink($id, array $serviceLink)
    {

        // Prepare data for submission
        $serviceLink = ['serviceLink' => $serviceLink];

        // Send "addservicelink" request
        $service = $this->client->post($this->endpoint . "/" . $id."?action=addservicelink", $serviceLink, ['content_type' => 'json']);

        // Parse response
        $service = json_decode($service);

        // Create HostEntity from response
        return new ServiceEntity($service);
    }

    /**
     * {@inheritdoc}
     */
    public function setServiceLinks($id, array $serviceLinks)
    {

        // Prepare data for submission
        $serviceLinks = ['serviceLinks' => $serviceLinks];

        // Send "setservicelinks" request
        $service = $this->client->post($this->endpoint . "/" . $id."?action=setservicelinks", $serviceLinks, ['content_type' => 'json']);

        // Parse response
        $service = json_decode($service);

        // Create HostEntity from response
        return new ServiceEntity($service);

    }

    /**
     * {@inheritdoc}
     */
    public function removeServiceLink($id, array $serviceLink)
    {

        // Prepare data for submission
        $serviceLink = ['serviceLink' => $serviceLink];

        // Send "removeservicelink" request
        $service = $this->client->post($this->endpoint . "/" . $id."?action=removeservicelink", $serviceLink, ['content_type' => 'json']);

        // Parse response
        $service = json_decode($service);

        // Create HostEntity from response
        return new ServiceEntity($service);

    }




    /**
     * {@inheritdoc}
     */
    public function upgrade($id, array $serviceUpgrade)
    {

        // Send upgrade request
        $service = $this->client->post($this->endpoint . "/" . $id."?action=upgrade", $serviceUpgrade, ['content_type' => 'json']);

        // Parse response
        $service = json_decode($service);

        // Create HostEntity from response
        return new ServiceEntity($service);

    }

    /**
     * {@inheritdoc}
     */
    public function finishUpgrade($id)
    {

        // Send finish upgrade request
        $service = $this->client->post($this->endpoint . "/" . $id, [
            'action' => 'finishupgrade'
        ]);

        // Parse response
        $service = json_decode($service);

        // Create HostEntity from response
        return new ServiceEntity($service);

    }

    /**
     * {@inheritdoc}
     */
    public function cancelUpgrade($id)
    {

        // Send cancel upgrade request
        $service = $this->client->post($this->endpoint . "/" . $id, [
            'action' => 'cancelupgrade'
        ]);

        // Parse response
        $service = json_decode($service);

        // Create HostEntity from response
        return new ServiceEntity($service);

    }

    /**
     * {@inheritdoc}
     */
    public function rollback($id)
    {

        // Send cancel upgrade request
        $service = $this->client->post($this->endpoint . "/" . $id, [
            'action' => 'rollback'
        ]);

        // Parse response
        $service = json_decode($service);

        // Create HostEntity from response
        return new ServiceEntity($service);

    }

    /**
     * {@inheritdoc}
     */
    public function cancelRollback($id)
    {

        // Send cancel upgrade request
        $service = $this->client->post($this->endpoint . "/" . $id, [
            'action' => 'cancelrollback'
        ]);

        // Parse response
        $service = json_decode($service);

        // Create HostEntity from response
        return new ServiceEntity($service);

    }

}