<?php

namespace Ecs\Request\V20140526;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of AttachNetworkInterface
 *
 * @method string getResourceOwnerId()
 * @method string getTrunkNetworkInstanceId()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getWaitForNetworkConfigurationReady()
 * @method string getOwnerId()
 * @method string getInstanceId()
 * @method string getNetworkInterfaceId()
 */
class AttachNetworkInterfaceRequest extends \RpcAcsRequest
{

    /**
     * @var string
     */
    protected $method = 'POST';

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'Ecs',
            '2014-05-26',
            'AttachNetworkInterface',
            'ecs'
        );
    }

    /**
     * @param string $resourceOwnerId
     *
     * @return $this
     */
    public function setResourceOwnerId($resourceOwnerId)
    {
        $this->requestParameters['ResourceOwnerId'] = $resourceOwnerId;
        $this->queryParameters['ResourceOwnerId'] = $resourceOwnerId;

        return $this;
    }

    /**
     * @param string $trunkNetworkInstanceId
     *
     * @return $this
     */
    public function setTrunkNetworkInstanceId($trunkNetworkInstanceId)
    {
        $this->requestParameters['TrunkNetworkInstanceId'] = $trunkNetworkInstanceId;
        $this->queryParameters['TrunkNetworkInstanceId'] = $trunkNetworkInstanceId;

        return $this;
    }

    /**
     * @param string $resourceOwnerAccount
     *
     * @return $this
     */
    public function setResourceOwnerAccount($resourceOwnerAccount)
    {
        $this->requestParameters['ResourceOwnerAccount'] = $resourceOwnerAccount;
        $this->queryParameters['ResourceOwnerAccount'] = $resourceOwnerAccount;

        return $this;
    }

    /**
     * @param string $ownerAccount
     *
     * @return $this
     */
    public function setOwnerAccount($ownerAccount)
    {
        $this->requestParameters['OwnerAccount'] = $ownerAccount;
        $this->queryParameters['OwnerAccount'] = $ownerAccount;

        return $this;
    }

    /**
     * @param string $waitForNetworkConfigurationReady
     *
     * @return $this
     */
    public function setWaitForNetworkConfigurationReady($waitForNetworkConfigurationReady)
    {
        $this->requestParameters['WaitForNetworkConfigurationReady'] = $waitForNetworkConfigurationReady;
        $this->queryParameters['WaitForNetworkConfigurationReady'] = $waitForNetworkConfigurationReady;

        return $this;
    }

    /**
     * @param string $ownerId
     *
     * @return $this
     */
    public function setOwnerId($ownerId)
    {
        $this->requestParameters['OwnerId'] = $ownerId;
        $this->queryParameters['OwnerId'] = $ownerId;

        return $this;
    }

    /**
     * @param string $instanceId
     *
     * @return $this
     */
    public function setInstanceId($instanceId)
    {
        $this->requestParameters['InstanceId'] = $instanceId;
        $this->queryParameters['InstanceId'] = $instanceId;

        return $this;
    }

    /**
     * @param string $networkInterfaceId
     *
     * @return $this
     */
    public function setNetworkInterfaceId($networkInterfaceId)
    {
        $this->requestParameters['NetworkInterfaceId'] = $networkInterfaceId;
        $this->queryParameters['NetworkInterfaceId'] = $networkInterfaceId;

        return $this;
    }
}
