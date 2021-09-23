<?php

namespace Amz\FulfillmentOutbound\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * An item that Amazon accepted for return.
 */
class ReturnItem extends AbstractModel
{
    /**
     * An identifier assigned by the seller to the return item.
     *
     * @var string
     */
    public $sellerReturnItemId = null;

    /**
     * The identifier assigned to the item by the seller when the fulfillment order was
     * created.
     *
     * @var string
     */
    public $sellerFulfillmentOrderItemId = null;

    /**
     * The identifier for the shipment that is associated with the return item.
     *
     * @var string
     */
    public $amazonShipmentId = null;

    /**
     * The return reason code assigned to the return item by the seller.
     *
     * @var string
     */
    public $sellerReturnReasonCode = null;

    /**
     * An optional comment about the return item.
     *
     * @var string
     */
    public $returnComment = null;

    /**
     * The return reason code that the Amazon fulfillment center assigned to the return
     * item.
     *
     * @var string
     */
    public $amazonReturnReasonCode = null;

    /**
     * Indicates if the return item has been processed by an Amazon fulfillment center.
     *
     * @var \Amz\FulfillmentOutbound\Model\FulfillmentReturnItemStatus
     */
    public $status = null;

    /**
     * Indicates when the status last changed.
     *
     * @var \Amz\FulfillmentOutbound\Model\Timestamp
     */
    public $statusChangedDate = null;

    /**
     * Identifies the return authorization used to return this item. See
     * ReturnAuthorization.
     *
     * @var string
     */
    public $returnAuthorizationId = null;

    /**
     * @var \Amz\FulfillmentOutbound\Model\ReturnItemDisposition
     */
    public $returnReceivedCondition = null;

    /**
     * The identifier for the Amazon fulfillment center that processed the return item.
     *
     * @var string
     */
    public $fulfillmentCenterId = null;
}
