<?php
/**
 * Created by PhpStorm.
 * User: AlanN
 * Date: 23/01/2019
 * Time: 12:15 PM
 */

use BrighteTest\DeliveryController;

class DeliveryControllerTest extends PHPUnit_Framework_TestCase
{
    public function testGetDeliveryData()
    {
        /* Assumption: JSON delivery data is retrieved from a service call */
        $client = new Client('http://localhost:8000', array(
            'request.options' => array(
                'exceptions' => false,
            )
        ));

        $inputData = array();
        $request = $client->post('/api/getDeliveryData', null, json_encode($inputData));
        $response = $request->send();

        $this->assertEquals(201, $response->getStatusCode());
        $this->assertTrue($response->hasHeader('Location'));
        $data = json_decode($response->getBody(true), true);
        $this->assertArrayHasKey('customer', $data);
        $this->assertArrayHasKey('deliveryType', $data);
        $this->assertArrayHasKey('source', $data);
        $this->assertArrayHasKey('weight', $data);
        $this->assertArrayHasKey('deliveryType', $data);
        $this->assertArrayHasKey('deliveryType', $data);
    }

    public function testValidateEnterprise($enterpriseData)
    {
        $this->assertArrayHasKey('name', $enterpriseData);
        $this->assertArrayHasKey('type', $enterpriseData);
        $this->assertArrayHasKey('abn', $enterpriseData);
        $this->assertArrayHasKey('directors', $enterpriseData);
    }
}
