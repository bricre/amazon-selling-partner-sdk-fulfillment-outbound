<?php

namespace Amz\FulfillmentOutbound\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

class GetFulfillmentOrderResult extends AbstractModel
{
    /**
     * @var \Amz\FulfillmentOutbound\Model\FulfillmentOrder
     */
    public $fulfillmentOrder = null;

    /**
     * @var \Amz\FulfillmentOutbound\Model\FulfillmentOrderItemList
     */
    public $fulfillmentOrderItems = null;

    /**
     * @var \Amz\FulfillmentOutbound\Model\FulfillmentShipmentList
     */
    public $fulfillmentShipments = null;

    /**
     * @var \Amz\FulfillmentOutbound\Model\ReturnItemList
     */
    public $returnItems = null;

    /**
     * @var \Amz\FulfillmentOutbound\Model\ReturnAuthorizationList
     */
    public $returnAuthorizations = null;
}
