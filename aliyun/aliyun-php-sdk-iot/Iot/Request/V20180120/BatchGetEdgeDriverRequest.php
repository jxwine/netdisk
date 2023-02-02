<?php

namespace Iot\Request\V20180120;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of BatchGetEdgeDriver
 *
 * @method array getDriverIdss()
 * @method string getIotInstanceId()
 * @method string getApiProduct()
 * @method string getApiRevision()
 */
class BatchGetEdgeDriverRequest extends \RpcAcsRequest
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
            'BatchGetEdgeDriver',
            'iot'
        );
    }

    /**
     * @param array $driverIds
     *
     * @return $this
     */
	public function setDriverIdss(array $driverIds)
	{
	    $this->requestParameters['DriverIdss'] = $driverIds;
		foreach ($driverIds as $i => $iValue) {
			$this->queryParameters['DriverIds.' . ($i + 1)] = $iValue;
		}

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
