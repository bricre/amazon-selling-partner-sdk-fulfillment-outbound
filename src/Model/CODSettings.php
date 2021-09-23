<?php

namespace Amz\FulfillmentOutbound\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The COD (Cash On Delivery) charges that you associate with a COD fulfillment
 * order.
 */
class CODSettings extends AbstractModel
{
    /**
     * When true, this fulfillment order requires a COD (Cash On Delivery) payment.
     *
     * @var bool
     */
    public $isCodRequired = null;

    /**
     * The amount of the COD charge to be collected from the recipient for a COD order.
     *
     * @var \Amz\FulfillmentOutbound\Model\Money
     */
    public $codCharge = null;

    /**
     * The amount of the tax on the COD charge to be collected from the recipient for a
     * COD order.
     *
     * @var \Amz\FulfillmentOutbound\Model\Money
     */
    public $codChargeTax = null;

    /**
     * The amount of the tax on the COD charge to be collected from the recipient for a
     * COD order.
     *
     * @var \Amz\FulfillmentOutbound\Model\Money
     */
    public $shippingCharge = null;

    /**
     * The amount of the tax on the shipping charge to be collected from the recipient
     * for a COD order.
     *
     * @var \Amz\FulfillmentOutbound\Model\Money
     */
    public $shippingChargeTax = null;
}
