<?php

namespace Benmag\Rancher\Factories\Api;

use \Benmag\Rancher\Factories\Entity\Project as ProjectEntity;

/**
 * Rancher API wrapper for Laravel
 *
 * @package  Rancher
 * @author   @benmagg
 */
class Project extends AbstractApi implements \Benmag\Rancher\Contracts\Api\Project
{

    /**
     * The class of the entity we are working with
     *
     * @var Container
     */
    protected $class = ProjectEntity::class;

    /**
     * The Rancher API endpoint of the resource type.
     *
     * @var string
     */
    protected $endpoint = "projects";

    /**
     * {@inheritdoc}
     */
    public function create(ProjectEntity $project)
    {

        // Data
        $data = $project->toArray();

        // Send "create" project request
        $project = $this->client->post($this->endpoint, $data);

        // Parse response
        $project = json_decode($project);

        // Create ContainerEntity from response
        return new ProjectEntity($project);

    }

    /**
     * {@inheritdoc}
     */
    public function delete($id)
    {

        // Send "stop" container request
        $project = $this->client->delete($this->endpoint."/".$id);

        // Parse response
        $project = json_decode($project);

        // Create ContainerEntity from response
        return new ProjectEntity($project);

    }

    /**
     * {@inheritdoc}
     */
    public function remove($id)
    {

        // Send "remove" container request
        $project = $this->client->post($this->endpoint."/".$id, ['action' => 'remove']);


        // Parse response
        $project = json_decode($project);

        // Create ContainerEntity from response
        return new ProjectEntity($project);

    }

    /**
     * {@inheritdoc}
     */
    public function activate($id)
    {

        // Send "stop" container request
        $project = $this->client->post($this->endpoint."/".$id, ['action' => 'activate']);

        // Parse response
        $project = json_decode($project);

        // Create ContainerEntity from response
        return new ProjectEntity($project);

    }

    /**
     * {@inheritdoc}
     */
    public function deactivate($id)
    {

        // Send "stop" container request
        $project = $this->client->post($this->endpoint."/".$id, ['action' => 'deactivate']);

        // Parse response
        $project = json_decode($project);

        // Create ContainerEntity from response
        return new ProjectEntity($project);

    }

    /**
     * {@inheritdoc}
     */
    public function setMembers($id, array $members)
    {
        // TODO
        // I can't figure this out just yet. I think it has something to do
        // with different access permissions for different environments/entities.
        //
        // This is confusing as hell because for some endpoints you need to unauthorise
        // and with this you might need to potentially authorise with a specific key...
    }
}