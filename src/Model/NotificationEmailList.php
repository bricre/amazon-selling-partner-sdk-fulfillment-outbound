<?php

namespace Amz\FulfillmentOutbound\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * A list of email addresses that the seller provides that are used by Amazon to
 * send ship-complete notifications to recipients on behalf of the seller.
 */
class NotificationEmailList extends AbstractModel
{
    protected $isRawObject = true;
}
