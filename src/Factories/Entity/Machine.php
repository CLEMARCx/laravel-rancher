<?php

namespace Benmag\Rancher\Factories\Entity;

class Machine extends AbstractEntity
{

    /**
     * The unique identifier for the host
     *
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $accountId;

    /**
     * @var string
     */
    public $driver;

    /**
     * @var string
     */
    public $dockerVersion;

    /**
     * @var string
     */
    public $engineInstallUrl = "https://releases.rancher.com/install-docker/1.10.sh";

    /**
     * The labels on a machine.
     *
     * @var string[]
     */
    public $labels;

    /**
     * Configuration for launching
     * a host on hosting provider
     *
     * @var mixed
     */
    public $amazonec2Config,
            $digitaloceanConfig,
            $exoscaleConfig,
            $googleConfig,
            $hypervConfig,
            $openstackConfig,
            $packetConfig,
            $rackspaceConfig,
            $softlayerConfig,
            $ubiquityConfig,
            $virtualboxConfig,
            $vmwarefusionConfig,
            $vmwarevcloudairConfig,
            $vmwarevsphereConfig;


}