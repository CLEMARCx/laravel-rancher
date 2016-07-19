<?php

namespace Benmag\Rancher\Contracts\Api;

/**
 * A "Machine" is a host. Machines are created whenever
 * Rancher uses `docker-machine` to create hosts.
 *
 * @package  Rancher
 * @author   @benmagg
 */
interface Machine {

    /**
     * {@inheritdoc}
     */
    public function all();

    /**
     * {@inheritdoc}
     */
    public function get($id);

    /**
     * {@inheritdoc}
     */
    public function filter($params);


    /**
     * Send create request to API
     *
     * @param \Benmag\Rancher\Factories\Entity\Machine $machine
     * @return \Benmag\Rancher\Factories\Entity\Machine
     */
    public function create(\Benmag\Rancher\Factories\Entity\Machine $machine);

    /**
     * Send delete request to API
     *
     * @param $id
     * @return \Benmag\Rancher\Factories\Entity\Machine
     */
    public function delete($id);


    /**
     * Send activate request to API
     *
     * @param $id
     * @return \Benmag\Rancher\Factories\Entity\Machine
     */
    public function activate($id);

    /**
     * Send deactivate request to API
     *
     * @param $id
     * @return \Benmag\Rancher\Factories\Entity\Machine
     */
    public function deactivate($id);

}