<?php

namespace Benmag\Rancher\Contracts\Api;

/**
 * Service Consume Map.
 *
 * @package  Rancher
 * @author   @benmagg
 */
interface ServiceConsumeMap {

    /**
     * Send remove container request to API
     *
     * @param $id
     * @return \Benmag\Rancher\Factories\Entity\ServiceConsumeMap
     */
    public function remove($id);

}