<?php

namespace Amz\FulfillmentOutbound\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The weight.
 */
class Weight extends AbstractModel
{
    /**
     * The unit of weight.
     *
     * @var string
     */
    public $unit = null;

    /**
     * The weight value.
     *
     * @var string
     */
    public $value = null;
}
