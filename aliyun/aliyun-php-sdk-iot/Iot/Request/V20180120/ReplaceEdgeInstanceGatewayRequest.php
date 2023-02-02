<?php

namespace Iot\Request\V20180120;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of ReplaceEdgeInstanceGateway
 *
 * @method string getNewGatewayId()
 * @method string getIotInstanceId()
 * @method string getInstanceId()
 * @method string getCurrentGatewayId()
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class ReplaceEdgeInstanceGatewayRequest extends \RpcAcsRequest
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
            'Iot',
            '2018-01-20',
            'ReplaceEdgeInstanceGateway',
            'iot'
        );
    }

    /**
     * @param string $newGatewayId
     *
     * @return $this
     */
    public function setNewGatewayId($newGatewayId)
    {
        $this->requestParameters['NewGatewayId'] = $newGatewayId;
        $this->queryParameters['NewGatewayId'] = $newGatewayId;

        return $this;
    }

    /**
     * @param string $iotInstanceId
     *
     * @return $this
     */
    public function setIotInstanceId($iotInstanceId)
    {
        $this->requestParameters['IotInstanceId'] = $iotInstanceId;
        $this->queryParameters['IotInstanceId'] = $iotInstanceId;

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
     * @param string $currentGatewayId
     *
     * @return $this
     */
    public function setCurrentGatewayId($currentGatewayId)
    {
        $this->requestParameters['CurrentGatewayId'] = $currentGatewayId;
        $this->queryParameters['CurrentGatewayId'] = $currentGatewayId;

        return $this;
    }

    /**
     * @param string $apiProduct
     *
     * @return $this
     */
    public function setApiProduct($apiProduct)
    {
        $this->requestParameters['ApiProduct'] = $apiProduct;
        $this->queryParameters['ApiProduct'] = $apiProduct;

        return $this;
    }

    /**
     * @param string $apiRevision
     *
     * @return $this
     */
    public function setApiRevision($apiRevision)
    {
        $this->requestParameters['ApiRevision'] = $apiRevision;
        $this->queryParameters['ApiRevision'] = $apiRevision;

        return $this;
    }
}
