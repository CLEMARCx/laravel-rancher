<?php

namespace Benmag\Rancher\Factories\Api;

use \Benmag\Rancher\Factories\Entity\Stack as StackEntity;

/**
 * Rancher API wrapper for Laravel
 *
 * @package  Rancher
 * @author   @CLEMARCx
 */
class Stack extends AbstractApi implements \Benmag\Rancher\Contracts\Api\Stack
{

    /**
     * The class of the entity we are working with
     *
     * @var Stack
     */
    protected $class = StackEntity::class;

    /**
     * The Rancher API endpoint of the resource type.
     *
     * @var string
     */
    protected $endpoint = "stacks";


    /**
     * {@inheritdoc}
     */
    public function create(StackEntity $stack)
    {


    }

    public function update($id, StackEntity $stack)
    {

        // Send "update" environment request
        $stack = $this->client->put($this->endpoint."/".$id."?action=update", $stack->toArray());

        // Parse response
        $stack = json_decode($stack);

        // Create ContainerEntity from response
        return new StackEntity($stack);

    }

    public function upgrade($id, array $stackUpgrade)
    {

        // Send upgrade request
        $stack = $this->client->post($this->endpoint . "/" . $id."?action=upgrade", $stackUpgrade, ['content_type' => 'json']);

        // Parse response
        $stack = json_decode($stack);

        // Create HostEntity from response
        return new StackEntity($stack);

    }

    /**
     * {@inheritdoc}
     */
    public function finishUpgrade($id)
    {

        // Send finish upgrade request
        $stack = $this->client->post($this->endpoint . "/" . $id, [
            'action' => 'finishupgrade'
        ]);

        // Parse response
        $stack = json_decode($stack);

        // Create HostEntity from response
        return new StackEntity($stack);

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