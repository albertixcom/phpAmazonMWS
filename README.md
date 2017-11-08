phpAmazonMWS
============

This library is based on original https://github.com/CPIGroup/phpAmazonMWS library. Instead of fork, I prefered to clone it and make changes for my purposes.

Main changes is focused to dinamicaly pass configuration and using more modern variables managment (php >=7.0)

This library is still in development, not all classes are rewrited to use common configurations.

A library to connect to Amazon's Merchant Web Services (MWS) in an object-oriented manner, with a focus on intuitive usage.  

This is __NOT__ for Amazon Web Services (AWS) - Cloud Computing Services.

## Example Usage

At your constructor set authentication data example:

```php
$amazonStore = new \AmazonMws\Config\AmazonStore();
      $amazonStore->setAccessKeyId($amazonData['access_key_id']);
      $amazonStore->setMarketplaceId($amazonData['marketplace_id']);
      $amazonStore->setMerchantId($amazonData['merchant_id']);
      $amazonStore->setSecretAccessKey($amazonData['secret_access_key']);
      $amazonStore->setSellerDevAuthToken($amazonData['seller_dev_auth_token']);
      $amazonStore->setServiceUrl($amazonData['service_url']);
      $amazonStore->setIsoCode($amazonData['iso_code']);
      $this->amazonStores[] = $amazonStore;
```

Here is an example of a function used to get all warehouse-fulfilled orders from Amazon updated in the past 24 hours:
```php
public function getOrders() {
    
    foreach ($this->amazonStores as $amazonStore) {
      try {
        $amazonOrderList = new \AmazonMws\Orders\AmazonOrderList($amazonStore);
        $amazonOrderList->setLimits('Modified', "- 24 hours"); //accepts either specific timestamps or relative times 
        $amazonOrderList->setFulfillmentChannelFilter("MFN"); //no Amazon-fulfilled orders
//        $amz->setOrderStatusFilter(
//            array("Unshipped", "PartiallyShipped", "Canceled", "Unfulfillable")
//            ); //no shipped or pending orders
        $amazonOrderList->setUseToken(); //tells the object to automatically use tokens right away
        $amazonOrderList->fetchOrders(); //this is what actually sends the request
        
        /* @var $orders \AmazonMws\Orders\AmazonOrder[] */
        $orders = $amazonOrderList->getList();
        if (!empty($orders)) {
          foreach ($orders as $order) {
            /* @var $amazonOrderItemList \AmazonMws\Orders\AmazonOrderItemList */
            $amazonOrderItemList = $order->fetchItems();
            $items = $amazonOrderItemList->getItems();
            var_dump($items);
            
            // order dettails
            $order->fetchOrder();
            $test = $order->getShippingAddress();
            print_r($test);
            die();
          }
        }
        
        return $orders;
      } catch (Exception $ex) {
        echo 'There was a problem with the Amazon library. Error: '.$ex->getMessage();
      }
    }
  }
```
## NOTES

Original classes are dated some years ago and used php 5.4 as minimal version. In new enviroment all variables should be explicit to better flow and debugging. I've removed all mocks, because have a plan to use new phpunit.

<i>Sorry for my horrible english ... ;)</i>

## TODO
- rewrite all classes to use "common config"
- include excel classes to generate flat files
- revise all nullable variables
- use new phpunit
- implement roubust logger
