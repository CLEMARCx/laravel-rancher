<?php

namespace Benmag\Rancher\Contracts\Api;

/**
 * A registry is where image repositories are hosted.
 * The repository can be either from DockerHub, Quay.io,
 * or a custom private registry.
 *
 * @package  Rancher
 * @author   @benmagg
 */
interface RegistryCredential {

    /**
     * Send create request to API
     *
     * @param \Benmag\Rancher\Factories\Entity\RegistryCredential $registryCredential
     * @return \Benmag\Rancher\Factories\Entity\RegistryCredential
     */
    public function create(\Benmag\Rancher\Factories\Entity\RegistryCredential $registryCredential);

    /**
     * Send update load balancer service request to API
     *
     * @param $id
     * @param \Benmag\Rancher\Factories\Entity\RegistryCredential $registryCredential
     * @return \Benmag\Rancher\Factories\Entity\RegistryCredential
     */
    public function update($id, \Benmag\Rancher\Factories\Entity\RegistryCredential $registryCredential);

    /**
     * Send delete registry request to API
     *
     * @param $id
     * @return mixed
     */
    public function delete($id);

    /**
     * Activate a registry
     *
     * @param $id
     * @return \Benmag\Rancher\Factories\Entity\RegistryCredential
     */
    public function activate($id);

    /**
     * Deactivate a registry
     *
     * @param $id
     * @return \Benmag\Rancher\Factories\Entity\RegistryCredential
     */
    public function deactivate($id);

    /**
     * Purge a registry
     *
     * @param $id
     * @return \Benmag\Rancher\Factories\Entity\RegistryCredential
     */
    public function purge($id);

    /**
     * Remove a registry
     *
     * @param $id
     * @return mixed
     */
    public function remove($id);

    /**
     * Restore a registry
     *
     * @param $id
     * @return mixed
     */
    public function restore($id);

}