<?php
class Menus_Model extends CI_Model {

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
		
    }

	public function gets_items_names(){//`HeadID``HeadName``PtnID``PtnGroupCode``GroupID``CompanyID``IsTransactable`
		$CompanyID = 1;//it is default company ID
		$itemQuery = "select HeadID, HeadName, PtnID, OrderID, GroupID, IsTransactable, PtnGroupCode, 0 as process_status, 0 as process_statusaa 
			from tbl_news_menu
			where 1=1 order by PtnID, cast(OrderID as SIGNED) ASC";
		$query_result = $this->db->query($itemQuery)->result();
        return $query_result;
        //echo '<pre>',print_r($query_result),'</pre>';		
    }

    public function find_content_list(){
		$find_content_list = "select NewsID, NewsTitle from tbl_news where 1=1 and PublishStatus=1 order by NewsTitle ASC";
		$query_result = $this->db->query($find_content_list)->result();
        return $query_result;
    }

    public function group_category_insert_model() {
    	$IsTransactable = 0; //"no"
		//$CompanyID = 1;
        $PtnID = $this->input->post('new_non_PtnID');
		//getting parent's PtnGroupCode
		$GroupIdQuery = $this->db->get_where('tbl_news_menu', array('HeadID' => $PtnID))->result_array();
		$GetGroupId = isset($GroupIdQuery[0]["GroupID"]) ? $GroupIdQuery[0]["GroupID"] : "";
		$PtnGroupCodeParent = isset($GroupIdQuery[0]["PtnGroupCode"]) ? $GroupIdQuery[0]["PtnGroupCode"] : "";
		$GroupID = $GetGroupId + 1;
		//getting parent's PtnGroupCode
		$parentChild = $this->db->get_where('tbl_news_menu', array('PtnID' => $PtnID));
		$parentChildCount = $parentChild->num_rows();
		$parentChildCount++;
		$PtnGroupCode = $PtnGroupCodeParent."-".$parentChildCount;
		
        $this->db->trans_start();
        $tbl_Head_Data = array(
            'PtnID' => $PtnID,
            'HeadName' => $this->input->post('new_non_HeadName'),
            'MenuSlug' => $this->input->post('grp_menu_slug'),
			'PtnGroupCode' => $PtnGroupCode,
            'GroupID' => $GroupID,
            'OrderID' => $parentChildCount,
            'IsTransactable' => $IsTransactable,
        );
        $this->db->insert('tbl_news_menu', $tbl_Head_Data);
        $insert_id = $this->db->insert_id();
        $this->db->trans_complete();

        return $insert_id;
    }

    public function group_category_Update_model() {
    	$HeadID = $this->input->post('edit_non_HeadID');

        $this->db->trans_start();
        $ItemID_UpdateData = array(
            'HeadName' => $this->input->post('edit_non_HeadName'),
            'MenuSlug' => $this->input->post('edit_grp_menu_slug'),
        );
		$this->db->update('tbl_news_menu', $ItemID_UpdateData, array("HeadID" => $HeadID));
        $this->db->trans_complete();
    }

    public function category_insert_model() {
    	$IsTransactable = 1; //"yes"
		//$CompanyID = 1;
        $PtnID = $this->input->post('new_tra_PtnID');
		//getting parent's PtnGroupCode
		$GroupIdQuery = $this->db->get_where('tbl_news_menu', array('HeadID' => $PtnID))->result_array();
		$GetGroupId = isset($GroupIdQuery[0]["GroupID"]) ? $GroupIdQuery[0]["GroupID"] : "";
		$PtnGroupCodeParent = isset($GroupIdQuery[0]["PtnGroupCode"]) ? $GroupIdQuery[0]["PtnGroupCode"] : "";
		$GroupID = $GetGroupId + 1;
		//getting parent's PtnGroupCode
		$parentChild = $this->db->get_where('tbl_news_menu', array('PtnID' => $PtnID));
		$parentChildCount = $parentChild->num_rows();
		$parentChildCount++;
		$PtnGroupCode = $PtnGroupCodeParent."-".$parentChildCount;
		
        $this->db->trans_start();
        $tbl_Head_Data = array(
            'PtnID' => $PtnID,
            'HeadName' => $this->input->post('new_tra_HeadName'),
            'MenuSlug' => $this->input->post('category_menu_slug'),
            // 'FacebookShare' => $this->input->post('facebook_share'),
			'PtnGroupCode' => $PtnGroupCode,
            'GroupID' => $GroupID,
            'OrderID' => $parentChildCount,
            'IsTransactable' => $IsTransactable,
        );
        $this->db->insert('tbl_news_menu', $tbl_Head_Data);
        $insert_id = $this->db->insert_id();
        $this->db->trans_complete();

        return $insert_id;
    }

    public function category_Update_model() {
    	$HeadID = $this->input->post('editTraHeadID');

        $this->db->trans_start();
        $ItemID_UpdateData = array(
            'HeadName' => $this->input->post('edit_tra_HeadName'),
            'MenuSlug' => $this->input->post('edit_category_menu_slug'),
            'FacebookShare' => $this->input->post('edit_facebook_share'),
        );
		$this->db->update('tbl_news_menu', $ItemID_UpdateData, array("HeadID" => $HeadID));
        $this->db->trans_complete();
    }

    public function sort_group_category_model() {
    	$destinationHeadID = $this->input->post('destination_head_id');
    	$currentHeadID = $this->input->post('current_HeadID');
    	$destinationInsertPosition = $this->input->post('insertPosition');
    	$dstInsertOrderHeadID = $this->input->post('destination_order_head_id');

    	$currentOrderQuery = $this->db->get_where('tbl_news_menu', array('HeadID' => $currentHeadID))->result_array();
		$currentGroupID = isset($currentOrderQuery[0]["GroupID"]) ? $currentOrderQuery[0]["GroupID"] : "";
		$currentOrderID = isset($currentOrderQuery[0]["OrderID"]) ? $currentOrderQuery[0]["OrderID"] : "";
		$currentPtnID = isset($currentOrderQuery[0]["PtnID"]) ? $currentOrderQuery[0]["PtnID"] : "";
		$currPtngrpCode = isset($currentOrderQuery[0]["PtnGroupCode"]) ? $currentOrderQuery[0]["PtnGroupCode"] : "";
		//getting parent's PtnGroupCode

		$destinationQuery = $this->db->get_where('tbl_news_menu', array('HeadID' => $destinationHeadID))->result_array();
		$destinationGroupID = isset($destinationQuery[0]["GroupID"]) ? $destinationQuery[0]["GroupID"] : "";
		$destinationOrderID = isset($destinationQuery[0]["OrderID"]) ? $destinationQuery[0]["OrderID"] : "";
		$destinationPtnID = isset($destinationQuery[0]["PtnID"]) ? $destinationQuery[0]["PtnID"] : "";
		$destinationPtngrpCode = isset($destinationQuery[0]["PtnGroupCode"]) ? $destinationQuery[0]["PtnGroupCode"] : "";

		$dstInsertOrderQuery = $this->db->get_where('tbl_news_menu', array('HeadID' => $dstInsertOrderHeadID))->result_array();
		$dstInsertGroupID = isset($dstInsertOrderQuery[0]["GroupID"]) ? $dstInsertOrderQuery[0]["GroupID"] : "";
		$dstInsertOrderID = isset($dstInsertOrderQuery[0]["OrderID"]) ? $dstInsertOrderQuery[0]["OrderID"] : "";
		$dstInsertPtnID = isset($dstInsertOrderQuery[0]["PtnID"]) ? $dstInsertOrderQuery[0]["PtnID"] : "";
		$dstInsertPtngrpCode = isset($dstInsertOrderQuery[0]["PtnGroupCode"]) ? $dstInsertOrderQuery[0]["PtnGroupCode"] : "";

		//$ptngrpCodeQuery = $this->db->get_where('tbl_news_menu', array('HeadID' => $currPtnCode))->result_array();
		//$PtngrpCode = isset($ptngrpCodeQuery[0]["PtnGroupCode"]) ? $ptngrpCodeQuery[0]["PtnGroupCode"] : "";

		//UPDATE tbl_news_menu SET PtnGroupCode=CONCAT('2', SUBSTRING(PtnGroupCode FROM 1)) WHERE LEFT(PtnGroupCode, 1) = '1';

		//$ptnLength = strlen($PtngrpCode);

		$CurrReorderDataQuery = "
			SELECT * from tbl_news_menu
			where 1=1 and PtnID='$currentPtnID' and OrderID>'$currentOrderID'
		";
		$CurrReorderData = $this->db->query($CurrReorderDataQuery)->result();

		$countCurrReorderData = count($CurrReorderData);
		//echo $countCurrReorderData;

		if($countCurrReorderData > 0 ) {
			foreach ($CurrReorderData as $key => $info) {
				$CurrNextOrderID = $info->OrderID - 1;
				//$this->db->trans_start();
		        $CurrOrderID_UpdateData = array(
		            'OrderID' => $CurrNextOrderID,
		        );
				$this->db->update('tbl_news_menu', $CurrOrderID_UpdateData, array("HeadID" => $info->HeadID));
				//echo '<pre>',print_r($CurrOrderID_UpdateData),'</pre>';	
		        //$this->db->trans_complete();
			}
		}

		$dstInsertReorderData = "";
		$CngDestinationOrderID = "";

		if($destinationInsertPosition == "") {
			$CngDestinationOrderID = 1;

		} else {
			if($destinationInsertPosition == 1 ) {
				$CngDestinationOrderID = $dstInsertOrderID;
				$dstInsertReorderDataQuery = "
					SELECT * from tbl_news_menu
					where 1=1 and PtnID='$dstInsertPtnID' and OrderID>='$dstInsertOrderID'
				";
				$dstInsertReorderData = $this->db->query($dstInsertReorderDataQuery)->result();			
			} else {
				$CngDestinationOrderID = $dstInsertOrderID + 1;
				$dstInsertReorderDataQuery = "
					SELECT * from tbl_news_menu
					where 1=1 and PtnID='$dstInsertPtnID' and OrderID>'$dstInsertOrderID'
				";
				$dstInsertReorderData = $this->db->query($dstInsertReorderDataQuery)->result();
			}
		}
		

		$countDstInsertReorderData = count($dstInsertReorderData);

		if($countDstInsertReorderData > 0 ) {
			foreach ($dstInsertReorderData as $key => $dstReOrdinfo) {
				$DstNextOrderID = $dstReOrdinfo->OrderID + 1;
				//$this->db->trans_start();
		        $DstOrderID_UpdateData = array(
		            'OrderID' => $DstNextOrderID,
		        );
				$this->db->update('tbl_news_menu', $DstOrderID_UpdateData, array("HeadID" => $dstReOrdinfo->HeadID));
				//echo '<pre>',print_r($DstOrderID_UpdateData),'</pre>';	
		        //$this->db->trans_complete();
			}
		}
		
		$CngDestinationGroupID = $destinationGroupID + 1;
		
        //$this->db->trans_start();
        $UpdateData = array(
            'PtnID' => $destinationHeadID,
            'GroupID' => $CngDestinationGroupID,
            'OrderID' => $CngDestinationOrderID,
        );
        // echo '<pre>',print_r($UpdateData),'</pre>';	
		$this->db->update('tbl_news_menu', $UpdateData, array("HeadID" => $currentHeadID));
       // $this->db->trans_complete();

		$ptnGroupquery = "
			SELECT * from tbl_news_menu
			where 1=1 and HeadID!=1
		";
		$ptnGroupqueryData = $this->db->query($ptnGroupquery)->result();

		$ptnGroupqueryDataCount = count($ptnGroupqueryData);

		foreach ($ptnGroupqueryData as $key => $ptnGinfo) {
			$ptnGPtnID = $ptnGinfo->PtnID;
			$currOrderID = $ptnGinfo->OrderID;

			$Query = $this->db->get_where('tbl_news_menu', array('HeadID' => $ptnGPtnID))->result_array();
			$parentPtnGrpCode = isset($Query[0]["PtnGroupCode"]) ? $Query[0]["PtnGroupCode"] : "";

			$PtnGroupCode = $parentPtnGrpCode."-".$currOrderID;
			//$this->db->trans_start();
	        $PtnGroupCode_UpdateData = array(
	            'PtnGroupCode' => $PtnGroupCode,
	        );
			$this->db->update('tbl_news_menu', $PtnGroupCode_UpdateData, array("HeadID" => $ptnGinfo->HeadID));
			//echo '<pre>',print_r($CurrOrderID_UpdateData),'</pre>';	
	        //$this->db->trans_complete();
		}

    }
}