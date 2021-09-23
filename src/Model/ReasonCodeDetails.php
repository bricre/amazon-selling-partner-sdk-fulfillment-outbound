<?php

namespace Amz\FulfillmentOutbound\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * A return reason code, a description, and an optional description translation.
 */
class ReasonCodeDetails extends AbstractModel
{
    /**
     * A code that indicates a valid return reason.
     *
     * @var string
     */
    public $returnReasonCode = null;

    /**
     * A human readable description of the return reason code.
     *
     * @var string
     */
    public $description = null;

    /**
     * A translation of the description. The translation is in the language specified
     * in the Language request parameter.
     *
     * @var string
     */
    public $translatedDescription = null;
}
