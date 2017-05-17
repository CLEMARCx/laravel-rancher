<?php

namespace Benmag\Rancher\Contracts\Api;

/**
 * Volume
 *
 * @package  Rancher
 * @author   @CLEMARCx
 */
interface Volume {

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
     * @param \Benmag\Rancher\Factories\Entity\Volume $volume
     * @return \Benmag\Rancher\Factories\Entity\Volume
     */
    public function create(\Benmag\Rancher\Factories\Entity\Volume $volume);

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