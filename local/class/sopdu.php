<?php
	//require_once($_SERVER['DOCUMENT_ROOT'] . "/bitrix/modules/main/include/prolog_before.php");
	class sopdu{
		public function getSiteData(){
			require_once($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_before.php");
			$rsSites = CSite::GetByID(SITE_ID);
			return $rsSites->Fetch();
		}
		public function phone($path){
			$phone = file_get_contents($path);
			$result = preg_replace('/[^0-9]/', '', $phone);
			return 'tel:'.$result;
		}
		public function phone1($path){
			$phone = file_get_contents($path);
			$result = preg_replace('/[^0-9]/', '', $phone);
			return 'tel:+'.$result;
		}
		public function inCard($id){
			$zapros = CSaleBasket::GetList(
				[],
				[
					"FUSER_ID"  =>  CSaleBasket::GetBasketUserID(),
					"PRODUCT_ID"=>	$id,
					"LID" 		=> SITE_ID,
					"ORDER_ID" 	=> "NULL"
				],
				false,
				false,
				["PRODUCT_ID"]
			);
            //echo '<pre>'; print_r($zapros->Fetch()); '</pre>';
			if($res = $zapros->Fetch()){
				return $res["UALIAS_0"];
			} else {
				return 'N';
			}
		}
	}
?>