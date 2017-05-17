<?php

namespace Benmag\Rancher\Contracts\Api;

/**
 * Stack
 *
 * @package  Rancher
 * @author   @CLEMARCx
 */
interface Stack {

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
     * @param \Benmag\Rancher\Factories\Entity\Stack $stack
     * @return \Benmag\Rancher\Factories\Entity\Stack
     */
    public function create(\Benmag\Rancher\Factories\Entity\Stack $stack);

    /**
     * Send remove container request to API
     *
     * @param $id
     * @return mixed
     */
    public function remove($id);

    /**
     * Send purge container request to API
     *
     * @param $id
     * @return mixed
     */
    public function purge($id);

}