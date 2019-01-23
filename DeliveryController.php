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
 * Class DeliveryController
 * @package BrighteTest
 */
class DeliveryController
{
    /**
     * @Inject
     * @var IDeliveryProcessor
     */
    /**
     * Inject
     * @var IValidator
     */
    /**
     * Inject
     * @var IMarketingSource
     */
    private $_deliveryProcessor, $_validator, $_marketingSource;

    /**
     * @return IDeliveryProcessor
     */
    public function getDeliveryProcessor(): IDeliveryProcessor
    {
        return $this->_deliveryProcessor;
    }

    /**
     * @param IDeliveryProcessor $deliveryProcessor
     * @return DeliveryController
     */
    public function setDeliveryProcessor(IDeliveryProcessor $deliveryProcessor): DeliveryController
    {
        $this->_deliveryProcessor = $deliveryProcessor;
        return $this;
    }

    /**
     * @return IValidator
     */
    public function getValidator(): IValidator
    {
        return $this->_validator;
    }

    /**
     * @param IValidator $validator
     * @return DeliveryController
     */
    public function setValidator(IValidator $validator): DeliveryController
    {
        $this->_validator = $validator;
        return $this;
    }

    /**
     * @return IMarketingSource
     */
    public function getMarketingSource(): IMarketingSource
    {
        return $this->_marketingSource;
    }

    /**
     * @param IMarketingSource $marketingSource
     * @return DeliveryController
     */
    public function setMarketingSource(IMarketingSource $marketingSource): DeliveryController
    {
        $this->_marketingSource = $marketingSource;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDeliveryData()
    {
        //STEP 1: get delivery data from service API. Return JSON data
        return json_decode('[  
                           {                              
                              "customer":{  
                                 "name":"Johnny Bravo",
                                 "address":"56 Pitt Street, 2000, Sydney"
                              },
                              "deliveryType":"personalDelivery",
                              "source":"web",
                              "weight":1500
                           },
                           {  
                              "customer":{  
                                 "name":"Jack Ripper",
                                 "address":"822 Anzac Parade, 2035, Maroubra"
                              },
                              "deliveryType":"personalDeliveryExpress",
                              "source":"email",
                              "weight":2000,
                              "campaign":{  
                                 "name":"Christmas2018",
                                 "type":"holiday",
                                 "ad":"opportunity"
                              }
                           },
                           {  
                              "customer":{  
                                 "name":"Elvis Presley",
                                 "address":"333 George Street, 2000, Sydney"
                              },
                              "deliveryType":"enterpriseDelivery",
                              "source":"direct",
                              "onBehalf":"True Capital",
                              "enterprise":{  
                                 "name":"Bayview Motel",
                                 "type":"PtyLtd",
                                 "abn":"SN123OK",
                                 "directors":[  
                                    {  
                                       "name":"Michael Jackskon",
                                       "address":"242 Bayview, 2434, Sydney"
                                    },
                                    {  
                                       "name":"Freddie Mercury",
                                       "address":"132 Coast, 2354, Newcastle"
                                    }
                                 ]
                              },
                              "weight":5000
                           }
                        ]', true);
    }

    /**
     * @param $delivery
     */
    public function processDelivery($delivery)
    {
        $this->_deliveryProcessor->processDelivery($delivery);
    }

    /**
     * @param $campaign
     */
    public function updateMarketingSource($campaign)
    {
        $this->_marketingSource->update($campaign);
    }

    /**
     * @param $delivery
     */
    public function validateEnterprise($delivery)
    {
        $this->_validator->validate($delivery);
    }
}
