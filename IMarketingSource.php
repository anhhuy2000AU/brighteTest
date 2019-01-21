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
 * Interface IMarketingSource.
 */
interface IMarketingSource
{
    /**
     * Load campaign based on the campaign Id
     *
     * @param $campaignId
     *
     * @return mixed
     */
    public function load($campaignId);

    /**
     * Save campaign
     *
     * @param $campaign
     *
     * @return mixed
     */
    public function save($campaign);

    /**
     * Update Campaign
     *
     * @param $campaign
     *
     * @return mixed
     */
    public function update($campaign);

    /**
     * Delete Campaign based on campaignId
     *
     * @param $campaignId
     *
     * @return mixed
     */
    public function delete($campaignId);
}
