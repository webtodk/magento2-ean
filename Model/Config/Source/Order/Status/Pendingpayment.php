<?php
/**
 * Copyright © 2017 Webto ApS. All rights reserved.
 * https://www.webto.dk - info@webto.dk
 * See LICENSE.txt for license details (http://opensource.org/licenses/osl-3.0.php).
 */
namespace Webto\EAN\Model\Config\Source\Order\Status;

use Magento\Sales\Model\Order;
use Magento\Sales\Model\Config\Source\Order\Status;

/**
 * Order Status source model
 */
class Pendingpayment extends Status
{
    /**
     * @var string[]
     */
    protected $_stateStatuses = [Order::STATE_PENDING_PAYMENT];
}
