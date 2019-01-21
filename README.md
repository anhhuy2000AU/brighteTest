# brighteTest
Brighte Technical Test

Instructions:
Design and implement a domain service that will process these three delivery orders
(JSON on 2nd page) and return appropriate types of objects based on the delivery type with
the following specifications:
? Each delivery type can have a different workflow.
? Delivery with “enterpriseDelivery” type needs to be sent off to a 3rd party API
for validation of the enterprise.
? Delivery order coming from an email campaign needs to communicate with a
separate marketing service indicating the success of the given email campaign.

Design Process
Based on the requirements, the domain that required to be design is to read the inputs from the
JSON on 2nd page, and process the delivery based on the delivery type. Therefore, I created a domain
called Delivery Processor

? Each delivery type can have a different workflow.
For this requirement, I have created an Interface IDeliveryProcessor with a public function processDelivery
and 3 abstract classes with the same function for each different work flow, i.e. EnterpriseDeliveryProcessor,
PersonalDeliveryProcessor, and PersonalDeliveryExpressProcessor. This design allows a custom
work flow for each delivery type.

? Delivery with “enterpriseDelivery” type needs to be sent off to a 3rd party API
for validation of the enterprise.
Following the SOLID design pattern, I have decided to slit the validator into its own class. This could
be a single class that calls the 3rd party API for enterprise validation. However, following the Open-Closed
principle, I have created an Interface for validation called IValidator and an abstract class EnterpriseValidator.
In future, if other validation is required, we can extend the validation without modify the source code.

? Delivery order coming from an email campaign needs to communicate with a
separate marketing service indicating the success of the given email campaign.
For this requirement, it requires to update an email campaign. As it is a separate marketing service, which could
change or extend in the future, I have decided to create an IMarketingSource interface and an example email
marketing service of Vision6, i.e. MarketingSourceVision. This design allows integration with more than one
marketing services.

Dependency Injection design pattern is used various places through out the design.

Single Responsibility pattern is strictly follow, breakout responsibility to validate, update marketing campaign
into their own classes.

? Indicate and showcase what sort of automated testing procedure would you recommend
to use for such a service.
Tips to follow for automated testing procedure
- Decide what Test Cases to Automate
- Test Early and Test Often
- Select the Right Automated Testing Tool
- Divide your Automated Testing Efforts
- Create Good, Quality Test Data
- Create Automated Tests that are Resistant to Changes in the UI

For this case, I would use PHPUnit test and the case I would use is the validation of the JSON delivery input.
From the example data, it requires to have deliveryType, source, weight and customer object for all cases so this test
can be automated for validation.
Enterprise validation can also be automated as the format should be consistent.
Campaign validation can also be automated as the format should be consistent.

Other automated test tools that can be used are: Selenium, TestComplete.
