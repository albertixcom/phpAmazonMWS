<?php

namespace AmazonMws\Config;

class AmazonEnviroment {
  
  const AMAZON_APPLICATION = 'phpAmazonMWS';
  const AMAZON_APPVERSION = '1.0';

  //Version numbers for cores
  const AMAZON_VERSION_FEEDS       = '2009-01-01';
  const AMAZON_VERSION_FINANCE     = '2015-05-01';
  const AMAZON_VERSION_INBOUND     = '2010-10-01';
  const AMAZON_VERSION_INVENTORY   = '2010-10-01';
  const AMAZON_VERSION_MERCHANT    = '2015-06-01';
  const AMAZON_VERSION_ORDERS      = '2013-09-01';
  const AMAZON_VERSION_OUTBOUND    = '2010-10-01';
  const AMAZON_VERSION_PRODUCTS    = '2011-10-01';
  const AMAZON_VERSION_RECOMMEND   = '2013-04-01';
  const AMAZON_VERSION_REPORTS     = '2009-01-01';
  const AMAZON_VERSION_SELLERS     = '2011-07-01';
  const AMAZON_VERSION_SUBSCRIBE   = '2013-07-01';

  //Amazon Throttle Values in seconds
  //Fetching Orders
  const THROTTLE_LIMIT_ORDER = 6;
  const THROTTLE_TIME_ORDER = 60;
  //Fetching Order Lists
  const THROTTLE_LIMIT_ORDERLIST = 6;
  const THROTTLE_TIME_ORDERLIST = 60;
  //Fetching Items
  const THROTTLE_LIMIT_ITEM = 30;
  const THROTTLE_TIME_ITEM = 2;
  //Fetching Service Status
  const THROTTLE_LIMIT_STATUS = 2;
  const THROTTLE_TIME_STATUS = 300;
  //Fetching Sellers Participation
  const THROTTLE_LIMIT_SELLERS = 15;
  const THROTTLE_TIME_SELLERS = 60;
  //Anything in Inbound/Inventory/Outbound
  const THROTTLE_LIMIT_INVENTORY = 30;
  const THROTTLE_TIME_INVENTORY = 2;
  //Products
  const THROTTLE_LIMIT_PRODUCT = 20;
  const THROTTLE_TIME_PRODUCTLIST = 5;
  const THROTTLE_TIME_PRODUCTMATCH = 1;
  const THROTTLE_TIME_PRODUCTID = 4;
  const THROTTLE_TIME_PRODUCTPRICE = 2;
  const THROTTLE_TIME_PRODUCTFEE = 10;
  //Requesting a Report
  const THROTTLE_LIMIT_REPORTREQUEST = 15;
  const THROTTLE_TIME_REPORTREQUEST = 60;
  //Fetching a Report Request List
  const THROTTLE_LIMIT_REPORTREQUESTLIST = 10;
  const THROTTLE_TIME_REPORTREQUESTLIST = 45;
  //Using a token with a report request
  const THROTTLE_LIMIT_REPORTTOKEN = 30;
  const THROTTLE_TIME_REPORTTOKEN = 2;
  //Fetching a Report List
  const THROTTLE_LIMIT_REPORTLIST = 10;
  const THROTTLE_TIME_REPORTLIST = 60;
  //Fetching a Report
  const THROTTLE_LIMIT_REPORT = 15;
  const THROTTLE_TIME_REPORT = 60;
  //Fetching a Report Request List
  const THROTTLE_LIMIT_REPORTSCHEDULE = 10;
  const THROTTLE_TIME_REPORTSCHEDULE = 45;
  //Submitting a Feed
  const THROTTLE_LIMIT_FEEDSUBMIT = 15;
  const THROTTLE_TIME_FEEDSUBMIT = 120;
  //Fetching a Feed List
  const THROTTLE_LIMIT_FEEDLIST = 10;
  const THROTTLE_TIME_FEEDLIST = 45;
  //Getting a Feed
  const THROTTLE_LIMIT_FEEDRESULT = 15;
  const THROTTLE_TIME_FEEDRESULT = 60;
  //Merchant Fulfillments
  const THROTTLE_LIMIT_MERCHANT = 10;
  const THROTTLE_TIME_MERCHANT = 1;
  //Subscriptions
  const THROTTLE_LIMIT_SUBSCRIBE = 25;
  const THROTTLE_TIME_SUBSCRIBE = 1;
  //Recommendations
  const THROTTLE_LIMIT_RECOMMEND = 8;
  const THROTTLE_TIME_RECOMMEND = 2;
  //Recommendations
  const THROTTLE_LIMIT_FINANCE = 30;
  const THROTTLE_TIME_FINANCE = 2;
}
