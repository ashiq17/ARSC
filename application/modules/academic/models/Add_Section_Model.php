<?php
class Add_Section_Model extends CI_Model {

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
  

      public function get_classData() {
        $Query = "SELECT * FROM tbl_class
            WHERE 1=1  AND Class_Status=1";
        $query_result = $this->db->query($Query)->result();

        return $query_result;
        //echo '<pre>',print_r($query_result),'</pre>';
    }

       public function get_sectionData() {
        $Query = "SELECT * FROM tbl_section
            WHERE 1=1  AND Section_Status=1";
        $query_result = $this->db->query($Query)->result();

        return $query_result;
        //echo '<pre>',print_r($query_result),'</pre>';
    }


    // public function get_sectionData() {
    //     $Query = "SELECT tbl_section.*,  tbl_class.Class_Name as C_Name
    //         FROM tbl_section
    //         LEFT JOIN tbl_class ON tbl_class.Class_ID = tbl_section.Section_class_ID
    //         WHERE 1=1 ORDER BY tbl_section.Section_ID ASC";
    //     $query_result = $this->db->query($Query)->result();

    //     // echo '<pre>',print_r($query_result),'</pre>';
    //     // die();
    //     return $query_result;
    // }

  public function upload_new_section() {
        // $BranchID           = $this->input->post('BranchID');
        // $Class_ID         = $this->input->post('Class_ID');
        $Section_Name       = $this->input->post('stname');
        $publishStatus      = $this->input->post('pubstatus');

        $this->db->trans_start();
        $tbl_section_entry_Data = array(
            // 'BranchID'         => $BranchID,
            // 'Section_class_ID'       => $Class_ID,
            'Section_Name'     => $Section_Name,
            'Section_Status'     => $publishStatus
        );
        $this->db->insert('tbl_section', $tbl_section_entry_Data);
        // echo '<pre>',print_r($tbl_district_entry_Data),'</pre>';
        $this->db->trans_complete();
    }

    public function update_section() {
        $id                 = $this->input->post('editID');
        // $Class_ID         = $this->input->post('Class_ID');
        $Section_Name       = $this->input->post('stnameEdit');
        $publishStatus      = $this->input->post('pubstatusEdit');

        $this->db->trans_start();
        $tbl_section_updateData = array(
            // 'Section_class_ID'     => $Class_ID,
            'Section_Name'   => $Section_Name,
            'Section_Status'   => $publishStatus
        );
        $this->db->where('Section_ID', $id);
        $this->db->update('tbl_section', $tbl_section_updateData); 
        //echo '<pre>',print_r($tbl_district_updateData),'</pre>';
        $this->db->trans_complete();

    }

    public function deleteInfo($Eid = NULL){
        $this->db->where('Section_ID', $Eid);
        $this->db->delete('tbl_section');
    }





    
}