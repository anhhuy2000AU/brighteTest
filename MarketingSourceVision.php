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

include ('IMarketingSource.php');
/**
 * Class MarketingSourceVision.
 */
class MarketingSourceVision implements IMarketingSource
{
    /**
     * @param $campaignId
     *
     * @return mixed|void
     */
    public function load($campaignId)
    {
        // TODO: Implement load() method.
        echo 'Loading Vision Marketing Campaign<br>';
    }

    /**
     * @param $campaign
     *
     * @return mixed|void
     */
    public function save($campaign)
    {
        // TODO: Implement save() method.
        echo 'Saving Vision Marketing Campaign<br>';
    }

    /**
     * @param $campaign
     *
     * @return mixed|void
     */
    public function update($campaign)
    {
        // TODO: Implement update() method.
        echo 'Updating Vision Marketing Campaign<br>';
    }

    /**
     * @param $campaignId
     *
     * @return mixed|void
     */
    public function delete($campaignId)
    {
        // TODO: Implement delete() method.
        echo '<br>Deleting Vision Marketing Campaign<br>';
    }
}
