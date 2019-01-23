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
 * Class PersonalDeliveryExpressProcessor.
 */
class PersonalDeliveryExpressProcessor implements IDeliveryProcessor
{
    /**
     * @param $delivery
     *
     * @return Boolean
     */
    public function processDelivery($delivery)
    {
        // TODO: Implement custom processDelivery() method as each delivery type can have a different workflow.
        echo '<b>Doing custom work flow for Personal Delivery Express</b><br>';

        return true;
    }
}
