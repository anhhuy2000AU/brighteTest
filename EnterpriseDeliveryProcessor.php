<?php

/*
 *
 * This file is part of PHP CS Fixer.
 *
 *
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 *     Dariusz Rumiński <dariusz.ruminski@gmail.com>
 *
 *
 *
 * This source file is subject to the MIT license that is bundled
 *
 * with this source code in the file LICENSE.
 *
 */

namespace BrighteTest;

/**
 * EnterpriseDeliveryProcessor Class Doc Comment.
 *
 * Delivery Processor as an interface so system can have different
 * work flows for different delivery type
 *
 * @category  Class
 *
 * @author    Alan Nguyen <anhhuy2000@gmail.com>
 * @copyright 2015 Company, Inc. All rights reserved.
 * @license   GNU General Public License
 *
 * @see      http://arctg.com
 * @since 1.0.1
 */
include ('IDeliveryProcessor.php');

class EnterpriseDeliveryProcessor implements IDeliveryProcessor
{
    /**
     * Process different work flow based on delivery type.
     *
     * @param $delivery
     *
     * @return Boolean
     *
     * @since 1.0.1
     */
    public function processDelivery($delivery)
    {
        // TODO: Implement custom processDelivery() method as each delivery type can have a different workflow.
        echo '<b>Doing custom work flow for Enterprise Delivery</b><br>';

        return true;
    }
}
