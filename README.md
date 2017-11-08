phpAmazonMWS
============

This library is based on original https://github.com/CPIGroup/phpAmazonMWS library. Instead of fork, I prefered to clone it and make changes for my purposes.

Main changes is focused to dinamicaly pass configuration and using more modern variables managment (php >=7.0)

This library is still in development, not all classes are rewrited to use common configurations.

A library to connect to Amazon's Merchant Web Services (MWS) in an object-oriented manner, with a focus on intuitive usage.  

This is __NOT__ for Amazon Web Services (AWS) - Cloud Computing Services.

## Example Usage

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

