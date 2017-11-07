<?php

namespace AmazonMws\Config;

class AmazonConfig {

  private $amazonStore;
  
  /**
   * 
   * @param \AmazonMws\Config\AmazonStore $amazonStore
   */
  public function setAmazonStore(\AmazonMws\Config\AmazonStore $amazonStore) {
    $this->amazonStore = $amazonStore;
  }
  
  /**
   * 
   * @return \AmazonMws\Config\AmazonStore
   */
  public function getAmazonStore() {
    return $this->amazonStore;
  }
  
  
  /*
   * 

$store['YourAmazonStore']['merchantId'] = '';//Merchant ID for this store
$store['YourAmazonStore']['marketplaceId'] = ''; //Marketplace ID for this store
$store['YourAmazonStore']['keyId'] = ''; //Access Key ID
$store['YourAmazonStore']['secretKey'] = ''; //Secret Access Key for this store
$store['YourAmazonStore']['serviceUrl'] = ''; //optional override for Service URL
$store['YourAmazonStore']['MWSAuthToken'] = ''; //token needed for web apps and third-party developers

//Service URL Base
//Current setting is United States
$AMAZON_SERVICE_URL = 'https://mws.amazonservices.com/';

//Location of log file to use
$logpath = __DIR__.'/log.txt';

//Name of custom log function to use
$logfunction = '';

//Turn off normal logging
$muteLog = false;
   */
  
}
