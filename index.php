<?php
use BrighteTest\DeliveryController;

/**
 * Created by PhpStorm.
 * User: AlanN
 * Date: 22/01/2019
 * Time: 1:16 PM
 */
// Check if path is available or not empty
if(isset($_SERVER['PATH_INFO'])){
    $path= $_SERVER['PATH_INFO'];
// Do a path split
    $path_split = explode('/', ltrim($path));
}else{
// Set Path to '/'
    $path_split = '/';
}
if($path_split === '/') {
    /* match with index route
    *   Import IndexController and match requested method with it
    */

    require_once __DIR__ . '\DeliveryController.php';
    require_once __DIR__ . '\EnterpriseDeliveryProcessor.php';
    require_once __DIR__ . '\PersonalDeliveryProcessor.php';
    require_once __DIR__ . '\PersonalDeliveryExpressProcessor.php';
    require_once __DIR__ . '\MarketingSourceVision.php';
    require_once __DIR__ . '\EnterpriseValidator.php';

    $deliveryController = new DeliveryController();
    $enterpriseDeliveryProcessor = new \BrighteTest\EnterpriseDeliveryProcessor();
    $personalExpressDeliveryProcessor = new \BrighteTest\PersonalDeliveryExpressProcessor();
    $personalDeliveryProcessor = new \BrighteTest\PersonalDeliveryProcessor();
    $enterpriseValidator = new \BrighteTest\EnterpriseValidator();
    $marketingSource = new \BrighteTest\MarketingSourceVision();

    $deliveryData = $deliveryController->getDeliveryData();
    foreach($deliveryData as $delivery)
    {
        echo '<pre>';
        print_r($delivery);
        echo 'Delivery type is ' . $delivery['deliveryType'] . ' <br>';
        echo '</pre>';
        switch ($delivery['deliveryType'])
        {
            case 'personalDelivery':
                $deliveryController->setDeliveryProcessor($personalDeliveryProcessor);
                break;
            case 'personalDeliveryExpress':
                $deliveryController->setDeliveryProcessor($personalExpressDeliveryProcessor);
                break;
            case 'enterpriseDelivery':
                $deliveryController->setDeliveryProcessor($enterpriseDeliveryProcessor);
                $deliveryController->setValidator($enterpriseValidator);
                $deliveryController->validateEnterprise($delivery);
                break;
        }
        $deliveryController->processDelivery($delivery);

        //Updating Campaign
        if (array_key_exists('campaign', $delivery))
        {
            $deliveryController->setMarketingSource($marketingSource);
            $deliveryController->updateMarketingSource($delivery['campaign']);
        }
    }
}