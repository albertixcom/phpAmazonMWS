<?php

namespace AmazonMws\Config;

class AmazonStore {
  
  /**
   *
   * @var string 
   */
  private $merchant_id;
  
  /**
   *
   * @var string 
   */
  private $access_key_id;
  
  /**
   *
   * @var string 
   */
  private $secret_access_key;
  
  /**
   *
   * @var string 
   */
  private $seller_dev_auth_token;
  
  /**
   *
   * @var string 
   */
  private $marketplace_id;
  
  /**
   *
   * @var string 
   */
  private $service_url;
  
  /**
   *
   * @var string 
   */
  private $iso_code;
  
  
  // == END DECLARATIONS
  
  /**
   * 
   * @return string
   */
  public function getMerchantId(){
    return $this->merchant_id;
  }
  
  /**
   * 
   * @param string $merchant_id
   * @return $this
   */
  public function setMerchantId(string $merchant_id){
    $this->merchant_id = $merchant_id;
    return $this;
  }
  
  /**
   * 
   * @return string
   */
  public function getAccessKeyId(){
    return $this->access_key_id;
  }
  
  /**
   * 
   * @param string $access_key_id
   * @return $this
   */
  public function setAccessKeyId(string $access_key_id){
    $this->access_key_id = $access_key_id;
    return $this;
  }
  
  /**
   * 
   * @return string
   */
  public function getSecretAccessKey(){
    return $this->secret_access_key;
  }
  
  /**
   * 
   * @param string $secret_access_key
   * @return $this
   */
  public function setSecretAccessKey(string $secret_access_key){
    $this->secret_access_key = $secret_access_key;
    return $this;
  }
  
  /**
   * 
   * @return string
   */
  public function getSellerDevAuthToken(){
    return $this->seller_dev_auth_token;
  }
  
  /**
   * 
   * @param string $seller_dev_auth_token
   * @return $this
   */
  public function setSellerDevAuthToken(string $seller_dev_auth_token){
    $this->seller_dev_auth_token = $seller_dev_auth_token;
    return $this;
  }
  
  /**
   * 
   * @return string
   */
  public function getMarketplaceId(){
    return $this->marketplace_id;
  }
  
  /**
   * 
   * @param string $marketplace_id
   * @return $this
   */
  public function setMarketplaceId(string $marketplace_id){
    $this->marketplace_id = $marketplace_id;
    return $this;
  }
  
  /**
   * 
   * @return string
   */
  public function getServiceUrl(){
    return $this->service_url;
  }
  
  /**
   * 
   * @param string $service_url
   * @return $this
   */
  public function setServiceUrl(string $service_url){
    $this->service_url = $service_url;
    return $this;
  }
  
  /**
   * 
   * @return string
   */
  public function getIsoCode(){
    return $this->iso_code;
  }
  
  /**
   * 
   * @param string $iso_code
   * @return $this
   */
  public function setIsoCode(string $iso_code){
    $this->iso_code = $iso_code;
    return $this;
  }
  
  
}
