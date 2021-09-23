<?php

namespace Amz\FulfillmentOutbound\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

class CreateFulfillmentReturnResult extends AbstractModel
{
    /**
     * @var \Amz\FulfillmentOutbound\Model\ReturnItemList
     */
    public $returnItems = null;

    /**
     * @var \Amz\FulfillmentOutbound\Model\InvalidReturnItemList
     */
    public $invalidReturnItems = null;

    /**
     * @var \Amz\FulfillmentOutbound\Model\ReturnAuthorizationList
     */
    public $returnAuthorizations = null;
}
