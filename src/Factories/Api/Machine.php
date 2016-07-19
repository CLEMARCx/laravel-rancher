<?php

namespace Benmag\Rancher\Factories\Api;

use \Benmag\Rancher\Factories\Entity\Machine as MachineEntity;

/**
 * Rancher API wrapper for Laravel
 *
 * @package  Rancher
 * @author   @benmagg
 */
class Machine extends AbstractApi implements \Benmag\Rancher\Contracts\Api\Machine
{

    /**
     * The class of the entity we are working with
     *
     * @var Container
     */
    protected $class = MachineEntity::class;

    /**
     * The Rancher API endpoint of the resource type.
     *
     * @var string
     */
    protected $endpoint = "machine";

    /**
     * {@inheritdoc}
     */
    public function create(MachineEntity $machine)
    {

        // Data
        $data = $machine->toArray();

        // Send "create" request
        $machine = $this->client->post($this->endpoint, $data, ['content_type' => 'json']);

        // Parse response
        $machine = json_decode($machine);

        // Create ContainerEntity from response
        return new MachineEntity($machine);

    }

    /**
     * {@inheritdoc}
     */
    public function delete($id)
    {

        // Send delete request
        $machine = $this->client->delete($this->endpoint."/".$id);

        // Parse response
        $machine = json_decode($machine);

        // Create ContainerEntity from response
        return new MachineEntity($machine);

    }

    /**
     * {@inheritdoc}
     */
    public function remove($id)
    {

        // Send "remove" container request
        $machine = $this->client->post($this->endpoint."/".$id, ['action' => 'remove']);


        // Parse response
        $machine = json_decode($machine);

        // Create ContainerEntity from response
        return new MachineEntity($machine);

    }

    /**
     * {@inheritdoc}
     */
    public function activate($id)
    {

        // Send "stop" container request
        $machine = $this->client->post($this->endpoint."/".$id, ['action' => 'activate']);

        // Parse response
        $machine = json_decode($machine);

        // Create ContainerEntity from response
        return new MachineEntity($machine);

    }

    /**
     * {@inheritdoc}
     */
    public function deactivate($id)
    {

        // Send "stop" container request
        $machine = $this->client->post($this->endpoint."/".$id, ['action' => 'deactivate']);

        // Parse response
        $machine = json_decode($machine);

        // Create ContainerEntity from response
        return new MachineEntity($machine);

    }

}