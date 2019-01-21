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
 * Class EnterpriseValidator.
 */
class EnterpriseValidator implements IValidator
{
    /**
     * @param $delivery
     *
     * @return mixed
     */
    public function validate($delivery)
    {
        echo 'Validating Enterprise using 3rd party API';

        return $delivery;
    }
}
