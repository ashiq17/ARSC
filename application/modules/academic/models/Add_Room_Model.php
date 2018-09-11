<?php
class Add_Room_Model extends CI_Model {

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
		
    }


    public function get_roomData() {
        $Query = "SELECT * FROM tbl_room
            WHERE 1=1  ORDER BY Room_ID ASC";
        $query_result = $this->db->query($Query)->result();

        // echo '<pre>',print_r($query_result),'</pre>';
        return $query_result;
    }

    public function upload_new_room() {
        $Room_Name       = $this->input->post('Room_Name');
		$publishStatus      = $this->input->post('pubstatus');

		$this->db->trans_start();
        $tbl_room_entry_Data = array(
            'Room_Name'     => $Room_Name,
            'Room_Status'     => $publishStatus
        );
        $this->db->insert('tbl_room', $tbl_room_entry_Data);
        //echo '<pre>',print_r($tbl_division_entry_Data),'</pre>';
        $this->db->trans_complete();
    }

    public function update_room() {
    	$id                 = $this->input->post('editID');
		$Room_Name       = $this->input->post('stnameEdit');
		$Room_Status      = $this->input->post('pubstatusEdit');

		$this->db->trans_start();
        $tbl_room_updateData = array(
            'Room_Name'   => $Room_Name,
            'Room_Status'   => $Class_Status
        );
        $this->db->where('Room_ID', $id);
		$this->db->update('tbl_room', $tbl_room_updateData); 
        //echo '<pre>',print_r($tbl_division_updateData),'</pre>';
        $this->db->trans_complete();

    }

    public function deleteInfo($Eid = NULL){
        $this->db->where('Room_ID', $Eid);
        $this->db->delete('tbl_room');
    }





    
}