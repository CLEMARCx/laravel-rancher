<?php

namespace Benmag\Rancher\Factories\Api;

use \Benmag\Rancher\Factories\Entity\Container as ContainerEntity;

/**
 * Rancher API wrapper for Laravel
 *
 * @package  Rancher
 * @author   @benmagg
 */
class Container extends AbstractApi implements \Benmag\Rancher\Contracts\Api\Container
{

    /**
     * The class of the entity we are working with
     *
     * @var Container
     */
    protected $class = ContainerEntity::class;

    /**
     * The Rancher API endpoint of the resource type.
     *
     * @var string
     */
    protected $endpoint = "containers";


    /**
     * {@inheritdoc}
     */
    public function create(ContainerEntity $container)
    {

        // Send "create" container request
        $container = $this->client->post($this->endpoint, $container->toArray());

        // Parse response
        $container = json_decode($container);

        // Create ContainerEntity from response
        return new ContainerEntity($container);

    }



    /**
     * {@inheritdoc}
     */
    public function start($id)
    {

        // Send "start" container request
        $container = $this->client->post($this->endpoint."/".$id, [
            'action' => 'start'
        ]);

        // Parse response
        $container = json_decode($container);

        // Create ContainerEntity from response
        return new ContainerEntity($container);

    }

    public function execute($id)
    {

        // Send "stop" container request
        $container = $this->client->post($this->endpoint."/".$id."?action=execute", [
            'action' => 'execute',
            'attachStdin' => true,
            'attachStdout' => true,
            'tty' => true,
            'command' => [
                '/bin/sh',
                '-c',
                'TERM=xterm-256color; export TERM; [ -x /bin/bash ] && ([ -x /usr/bin/script ] && /usr/bin/script -q -c "/bin/bash" /dev/null || exec /bin/bash) || exec /bin/sh'
            ]
        ]);

        // Parse response
        $container = json_decode($container);

        // Create ContainerEntity from response
        return new ContainerEntity($container);

    }

    /**
     * {@inheritdoc}
     */
    public function stop($id)
    {

        // Send "stop" container request
        $container = $this->client->post($this->endpoint."/".$id, [
            'action' => 'stop'
        ]);

        // Parse response
        $container = json_decode($container);

        // Create ContainerEntity from response
        return new ContainerEntity($container);

    }

    /**
     * {@inheritdoc}
     */
    public function restart($id)
    {

        // Send "stop" container request
        $container = $this->client->post($this->endpoint."/".$id, [
            'action' => 'restart'
        ]);

        // Parse response
        $container = json_decode($container);

        // Create ContainerEntity from response
        return new ContainerEntity($container);

    }

    /**
     * {@inheritdoc}
     */
    public function remove($id)
    {

        // Send "stop" container request
        $container = $this->client->post($this->endpoint."/".$id, [
            'action' => 'remove'
        ]);

        // Parse response
        $container = json_decode($container);

        // Create ContainerEntity from response
        return new ContainerEntity($container);

    }

    /**
     * {@inheritdoc}
     */
    public function restore($id)
    {

        // Send "stop" container request
        $container = $this->client->post($this->endpoint."/".$id, [
            'action' => 'restore'
        ]);

        // Parse response
        $container = json_decode($container);

        // Create ContainerEntity from response
        return new ContainerEntity($container);

    }

    /**
     * {@inheritdoc}
     */
    public function purge($id)
    {

        // Send "stop" container request
        $container = $this->client->post($this->endpoint."/".$id, [
            'action' => 'purge'
        ]);

        // Parse response
        $container = json_decode($container);

        // Create ContainerEntity from response
        return new ContainerEntity($container);

    }

}