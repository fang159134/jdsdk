<?php
class AdsIbgUniversalJosServiceOrderQueryRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.ads.ibg.UniversalJosService.order.query";
	}
	
	public function getApiParas(){
	    if(empty($this->apiParas)){
            return "{}";
        }
        return json_encode($this->apiParas);
	}
	
	public function check(){
		
	}
	
	public function putOtherTextParam($key, $value){
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}

    private $version;

    public function setVersion($version){
        $this->version = $version;
    }

    public function getVersion(){
        return $this->version;
    }
                                    	                   			private $clickStartDay;
    	                        
	public function setClickStartDay($clickStartDay){
		$this->clickStartDay = $clickStartDay;
         $this->apiParas["clickStartDay"] = $clickStartDay;
	}

	public function getClickStartDay(){
	  return $this->clickStartDay;
	}

                        	                   			private $orderType;
    	                        
	public function setOrderType($orderType){
		$this->orderType = $orderType;
         $this->apiParas["orderType"] = $orderType;
	}

	public function getOrderType(){
	  return $this->orderType;
	}

                        	                   			private $orderStartDay;
    	                        
	public function setOrderStartDay($orderStartDay){
		$this->orderStartDay = $orderStartDay;
         $this->apiParas["orderStartDay"] = $orderStartDay;
	}

	public function getOrderStartDay(){
	  return $this->orderStartDay;
	}

                        	                   			private $orderStatus;
    	                        
	public function setOrderStatus($orderStatus){
		$this->orderStatus = $orderStatus;
         $this->apiParas["orderStatus"] = $orderStatus;
	}

	public function getOrderStatus(){
	  return $this->orderStatus;
	}

                        	                   			private $pageSize;
    	                        
	public function setPageSize($pageSize){
		$this->pageSize = $pageSize;
         $this->apiParas["pageSize"] = $pageSize;
	}

	public function getPageSize(){
	  return $this->pageSize;
	}

                        	                   			private $platform;
    	                        
	public function setPlatform($platform){
		$this->platform = $platform;
         $this->apiParas["platform"] = $platform;
	}

	public function getPlatform(){
	  return $this->platform;
	}

                        	                   			private $adGroupId;
    	                        
	public function setAdGroupId($adGroupId){
		$this->adGroupId = $adGroupId;
         $this->apiParas["adGroupId"] = $adGroupId;
	}

	public function getAdGroupId(){
	  return $this->adGroupId;
	}

                        	                        	                   			private $paymentType;
    	                        
	public function setPaymentType($paymentType){
		$this->paymentType = $paymentType;
         $this->apiParas["paymentType"] = $paymentType;
	}

	public function getPaymentType(){
	  return $this->paymentType;
	}

                        	                   			private $activityId;
    	                        
	public function setActivityId($activityId){
		$this->activityId = $activityId;
         $this->apiParas["activityId"] = $activityId;
	}

	public function getActivityId(){
	  return $this->activityId;
	}

                        	                   			private $mediaGroupId;
    	                        
	public function setMediaGroupId($mediaGroupId){
		$this->mediaGroupId = $mediaGroupId;
         $this->apiParas["mediaGroupId"] = $mediaGroupId;
	}

	public function getMediaGroupId(){
	  return $this->mediaGroupId;
	}

                        	                   			private $province;
    	                        
	public function setProvince($province){
		$this->province = $province;
         $this->apiParas["province"] = $province;
	}

	public function getProvince(){
	  return $this->province;
	}

                        	                   			private $clickOrOrderDay;
    	                        
	public function setClickOrOrderDay($clickOrOrderDay){
		$this->clickOrOrderDay = $clickOrOrderDay;
         $this->apiParas["clickOrOrderDay"] = $clickOrOrderDay;
	}

	public function getClickOrOrderDay(){
	  return $this->clickOrOrderDay;
	}

                        	                   			private $clickOrOrderCaliber;
    	                        
	public function setClickOrOrderCaliber($clickOrOrderCaliber){
		$this->clickOrOrderCaliber = $clickOrOrderCaliber;
         $this->apiParas["clickOrOrderCaliber"] = $clickOrOrderCaliber;
	}

	public function getClickOrOrderCaliber(){
	  return $this->clickOrOrderCaliber;
	}

                        	                   			private $orderEndDay;
    	                        
	public function setOrderEndDay($orderEndDay){
		$this->orderEndDay = $orderEndDay;
         $this->apiParas["orderEndDay"] = $orderEndDay;
	}

	public function getOrderEndDay(){
	  return $this->orderEndDay;
	}

                        	                   			private $clickEndDay;
    	                        
	public function setClickEndDay($clickEndDay){
		$this->clickEndDay = $clickEndDay;
         $this->apiParas["clickEndDay"] = $clickEndDay;
	}

	public function getClickEndDay(){
	  return $this->clickEndDay;
	}

                        	                   			private $giftFlag;
    	                        
	public function setGiftFlag($giftFlag){
		$this->giftFlag = $giftFlag;
         $this->apiParas["giftFlag"] = $giftFlag;
	}

	public function getGiftFlag(){
	  return $this->giftFlag;
	}

                        	                   			private $campaignId;
    	                        
	public function setCampaignId($campaignId){
		$this->campaignId = $campaignId;
         $this->apiParas["campaignId"] = $campaignId;
	}

	public function getCampaignId(){
	  return $this->campaignId;
	}

                        	                   			private $deliveryType;
    	                        
	public function setDeliveryType($deliveryType){
		$this->deliveryType = $deliveryType;
         $this->apiParas["deliveryType"] = $deliveryType;
	}

	public function getDeliveryType(){
	  return $this->deliveryType;
	}

                        	                   			private $mediaType;
    	                        
	public function setMediaType($mediaType){
		$this->mediaType = $mediaType;
         $this->apiParas["mediaType"] = $mediaType;
	}

	public function getMediaType(){
	  return $this->mediaType;
	}

                        	                   			private $impressionOrClickEffect;
    	                        
	public function setImpressionOrClickEffect($impressionOrClickEffect){
		$this->impressionOrClickEffect = $impressionOrClickEffect;
         $this->apiParas["impressionOrClickEffect"] = $impressionOrClickEffect;
	}

	public function getImpressionOrClickEffect(){
	  return $this->impressionOrClickEffect;
	}

                        	                   			private $posPackageId;
    	                        
	public function setPosPackageId($posPackageId){
		$this->posPackageId = $posPackageId;
         $this->apiParas["posPackageId"] = $posPackageId;
	}

	public function getPosPackageId(){
	  return $this->posPackageId;
	}

                        	                   			private $page;
    	                        
	public function setPage($page){
		$this->page = $page;
         $this->apiParas["page"] = $page;
	}

	public function getPage(){
	  return $this->page;
	}

                        	                   			private $startDay;
    	                        
	public function setStartDay($startDay){
		$this->startDay = $startDay;
         $this->apiParas["startDay"] = $startDay;
	}

	public function getStartDay(){
	  return $this->startDay;
	}

                        	                   			private $endDay;
    	                        
	public function setEndDay($endDay){
		$this->endDay = $endDay;
         $this->apiParas["endDay"] = $endDay;
	}

	public function getEndDay(){
	  return $this->endDay;
	}

                        	                   			private $myself;
    	                        
	public function setMyself($myself){
		$this->myself = $myself;
         $this->apiParas["myself"] = $myself;
	}

	public function getMyself(){
	  return $this->myself;
	}

                        	                   			private $businessType;
    	                        
	public function setBusinessType($businessType){
		$this->businessType = $businessType;
         $this->apiParas["businessType"] = $businessType;
	}

	public function getBusinessType(){
	  return $this->businessType;
	}

                        	                        	                   			private $accessPin;
    	                        
	public function setAccessPin($accessPin){
		$this->accessPin = $accessPin;
         $this->apiParas["accessPin"] = $accessPin;
	}

	public function getAccessPin(){
	  return $this->accessPin;
	}

                        	                   			private $authType;
    	                        
	public function setAuthType($authType){
		$this->authType = $authType;
         $this->apiParas["authType"] = $authType;
	}

	public function getAuthType(){
	  return $this->authType;
	}

                        	                        	                        	                        	                        	                        	                   			private $deliverySystemType;
    	                        
	public function setDeliverySystemType($deliverySystemType){
		$this->deliverySystemType = $deliverySystemType;
         $this->apiParas["deliverySystemType"] = $deliverySystemType;
	}

	public function getDeliverySystemType(){
	  return $this->deliverySystemType;
	}

                        	                   			private $jdMediaUserId;
    	                        
	public function setJdMediaUserId($jdMediaUserId){
		$this->jdMediaUserId = $jdMediaUserId;
         $this->apiParas["jdMediaUserId"] = $jdMediaUserId;
	}

	public function getJdMediaUserId(){
	  return $this->jdMediaUserId;
	}

}





        
 

