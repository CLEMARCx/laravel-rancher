<?php

namespace Benmag\Rancher\Contracts\Api;

/**
 * Registration Token.
 *
 * @package  Rancher
 * @author   @benmagg
 */
interface RegistrationToken {

    /**
     * Send create request to API
     *
     * @param \Benmag\Rancher\Factories\Entity\RegistrationToken $registrationToken
     * @return \Benmag\Rancher\Factories\Entity\RegistrationToken
     */
    public function create(\Benmag\Rancher\Factories\Entity\RegistrationToken $registrationToken);

}