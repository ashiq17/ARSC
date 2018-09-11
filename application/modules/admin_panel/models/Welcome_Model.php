<?php
class Welcome_Model extends CI_Model {

    function __construct()
    {
        parent::__construct();
		
    }

    function get_all_query_row_countall($search = NULL)
    {
        $str = "SELECT COUNT(Std_ID) as con FROM tbl_student WHERE Std_status='1'";
        $query=$this->db->query($str);
        return $query->result();
    }

    function get_all_query_row_countallt($search = NULL)
    {
        $str = "SELECT COUNT(Teacher_ID) as tt FROM tbl_teacher WHERE Teacher_status='1'";
        $query=$this->db->query($str);
        return $query->result();
    }

   function get_all_query_row_countallp($search = NULL)
    {
        $str = "SELECT COUNT(Parents_ID) as tp FROM tbl_parents WHERE Parents_status='1'";
        $query=$this->db->query($str);
        return $query->result();
    }

    function get_all_query_row_countallu($search = NULL)
    {
        $str = "SELECT COUNT(UserID) as tu FROM tbl_user WHERE Status='1'";
        $query=$this->db->query($str);
        return $query->result();
    }


      function get_all_query_row_countallfees($search = NULL)
    {
        $str = "SELECT sum(account_trn_payment_amount) as tfe FROM tbl_account_transaction WHERE account_trn_Status='1'";
        $query=$this->db->query($str);
        return $query->result();
    }

   function get_all_query_row_countallexpense($search = NULL)
    {
        $str = "SELECT sum(Expense_Amount) as texp FROM tbl_expense WHERE Expense_Status='1'";
        $query=$this->db->query($str);
        return $query->result();
    }


	
}