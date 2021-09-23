<?php

namespace Amz\FulfillmentOutbound\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * Return authorization information for items accepted for return.
 */
class ReturnAuthorization extends AbstractModel
{
    /**
     * An identifier for the return authorization. This identifier associates return
     * items with the return authorization used to return them.
     *
     * @var string
     */
    public $returnAuthorizationId = null;

    /**
     * An identifier for the Amazon fulfillment center that the return items should be
     * sent to.
     *
     * @var string
     */
    public $fulfillmentCenterId = null;

    /**
     * The address of the Amazon fulfillment center that the return items should be
     * sent to.
     *
     * @var \Amz\FulfillmentOutbound\Model\Address
     */
    public $returnToAddress = null;

    /**
     * The return merchandise authorization (RMA) that Amazon needs to process the
     * return.
     *
     * @var string
     */
    public $amazonRmaId = null;

    /**
     * A URL for a web page that contains the return authorization barcode and the
     * mailing label. This does not include pre-paid shipping.
     *
     * @var string
     */
    public $rmaPageURL = null;
}
