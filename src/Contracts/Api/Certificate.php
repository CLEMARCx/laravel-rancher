<?php

namespace Benmag\Rancher\Contracts\Api;

/**
 * Certificate
 *
 * @package  Rancher
 * @author   @CLEMARCx
 */
interface Certificate {

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
     * @param \Benmag\Rancher\Factories\Entity\Certificate $certificate
     * @return \Benmag\Rancher\Factories\Entity\Certificate
     */
    public function create(\Benmag\Rancher\Factories\Entity\Certificate $certificate);

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