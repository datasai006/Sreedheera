<?php if (!defined('BASEPATH'))exit('No direct script access allowed');

class CommonModel extends CI_Model{
	
    public function __construct() 
	{
		parent::__construct();
		$this->load->library("session");
		$this->load->library('form_validation');	
	}
	 


     /*********************** Crud Opertaions *********************************/
     function getMax($table,$id) {
        $maxID=0;
        $sql = "SELECT max($id) as $id FROM $table ";
        $binds = array();
        $query = $this->db->query($sql);
        if ($query->num_rows() > 0) {
          $max=$query->result();
          foreach ($max as $info){
            $maxID=$info->$id;
          }
          return ++$maxID;
        } else {
          return false;
        }
	  }	
	function dataExits($emp_id,$table,$colName){
	
		$sql="select * from $table where $colName=?";
		$binds=array($emp_id);
		$query =$this->db->query($sql,$binds);
		if ($query->num_rows() > 0) {
			return true;
		}
		else{
			return false;
		}
	
	}
	function save($data,$table)
	{
		$this->db->insert($table,$data);
		return $this->db->insert_id();
	}
	function Update($table,$col,$id,$updatedData)
	{
		$this->db->where($col,$id);
		$this->db->update($table,$updatedData);
	}
	public function payrollUpdate($data,$employee_id)
	{
		$this -> db -> select('*');
		$this -> db -> from('mst_employee_payroll');
		$this -> db -> where('employee_id',$employee_id);
		$query = $this -> db -> get();
		if($query -> num_rows() > 0)
		{
			$this -> db -> where('employee_id',$employee_id);
			$this->db->update('mst_employee_payroll',$data);
		}
		else
		{
			$this->db->insert('mst_employee_payroll', $data);
		}	
	}
	function login($mobile, $password)
	{
		$query=$this->db->query("select * from mst_employee where mobile='$mobile' and login_password='$password' and employee_status='1'");
	
		if($query -> num_rows() == 1)
		{
			return $query->result();
		}
		else { return false; } 
	}
	
/*********************** Crud Opertaions *********************************/
    function getDetails($table_name,$col_name,$val)
    {
        if($val!="All"){
			$query=$this->db->query("select * from $table_name where $col_name=$val");
			$result = $query->result();
			
		}
		else if($val=="All"){
			$query=$this->db->query("select * from $table_name");
			$result = $query->result();
			
		}
		return $result;
    }  
	/********************UPDATE***********************/
	function getData($table,$type,$id)
{
	if($type=="vehicle")
	{
		$query=$this->db->query("SELECT * from $table where sk_vehicle_id='$id'");
		$result = $query->result();
		return $result;
	}
	if($type=="store")
	{
		$query=$this->db->query("SELECT * from $table where sk_store_id='$id'"); 
		$result = $query->result();
		return $result;
	}
	if($type=="payroll")
	{
		$query=$this->db->query("SELECT * from $table where employee_id='$id' order by payroll_status DESC,sk_payroll_id DESC");
		$result = $query->result();
		return $result;
	}
	if($type=="supplier")
	{
		$query=$this->db->query("SELECT * from $table where sk_supplier_id='$id'");
		$result = $query->result();
		return $result;
	}
	if($type=="purchase_support")
	{
		$query=$this->db->query("SELECT * from $table where purchase_id='$id' and tran_status='1'");
		$result = $query->result();
		return $result;
	}
	if($type=="item")
	{
		$query=$this->db->query("SELECT * from $table where sk_item_id='$id'"); 
		$result = $query->result();
		return $result;
	}
	if($type=="manage_expense")
	{
		$query=$this->db->query("SELECT * from $table where sk_expense_id='$id'"); 
		$result = $query->result();
		return $result;
	}
	if($type=="supplier")
	{
		$query=$this->db->query("SELECT * from $table where sk_expense_id='$id'");
		$result = $query->result();
		return $result;
	}
	if($type=="expense")
	{
		$query=$this->db->query("SELECT * from $table where sk_tran_id='$id'");
		$result = $query->result();
		return $result; 
	}
	if($type=="employee")
	{
		$query=$this->db->query("SELECT * from $table where sk_employee_id='$id'");
		$result = $query->result();
		return $result;
	}
	if($type=="employee_bank"){
		$query=$this->db->query("SELECT * from $table where employee_id='$id' order by bank_status DESC");
		$result = $query->result();
		return $result;
	}
	if($type=="worklocation"){
		$query=$this->db->query("SELECT * from $table where sk_location_id='$id' order by location_status DESC");
		$result = $query->result();
		return $result;
	}
	if($type=="employee_designation"){
		$query=$this->db->query("SELECT * from $table where sk_designation_id='$id' order by designation_status DESC");
		$result = $query->result();
		return $result;
	}
	if($type=="department"){
		$query=$this->db->query("SELECT * from $table where sk_department_id='$id' order by department_status DESC");
		$result = $query->result();
		return $result;
	}
	if($type=="employee_details"){
		$query=$this->db->query("SELECT * from $table where employee_id='$id'");
		$result = $query->result();
		return $result;
	}
	if($type=="country"){
		$query=$this->db->query("SELECT * from $table where sk_country_id='$id'");
		$result = $query->result();
		return $result;
	}
	if($type=="state"){
		$query=$this->db->query("SELECT * from $table where sk_state_id='$id'");
		$result = $query->result();
		return $result;
	}
	
	if($type=="employee_document"){
		$query=$this->db->query("SELECT * from $table where employee_id='$id' order by doc_status DESC");
		$result = $query->result();
		return $result;
		}
    if($type=='OnDutyCount'){
        $query=$this->db->query("SELECT * from $table where employee_id='$id' order by doc_status DESC");
        $result = $query->result();
        return $result;
    }
    if($type=='purchase'){
        if(empty($id)){
            $query = $this->db->query("SELECT * from $table where purchase_status='1'");
        }else {
            $query = $this->db->query("SELECT * from $table where sk_purchase_id='$id' and purchase_status='1'");
        }
        $result = $query->result();
        return $result;
    }
	else
	{
		$query=$this->db->query("SELECT * from $table order by $id ASC");
		$result = $query->result();
		return $result;
	}
}

   //****************************Settings************************//

   function getsetting(){
   	$query=$this->db->query("select * from mst_company where company_status=1");
		return $query->result();
   }
   
   function getDesignation($filter){
   	if($filter==""){
       $query=$this->db->query("select * from mst_employee_designation");
       return $query->result();
   	}
   	else
   	{
   		$query=$this->db->query("select * from mst_employee_designation where sk_designation_id=$filter");
   		return $query->result();
   	}
   }
   function getDepartment($filter){
   	
   	if($filter==""){
   		$query=$this->db->query("select * from mst_department");
   		return $query->result();
   	}
   	else
   	{
   		$query=$this->db->query("select * from mst_department where sk_department_id=$filter");
   		return $query->result();
   	}
   }
   function getVerificationType($filter){
   	
   	if($filter==""){
   		$query=$this->db->query("select * from mst_verification_type");
   		return $query->result();
   	}
   	else
   	{
   		$query=$this->db->query("select * from mst_verification_type where sk_verification_type_id=$filter");
   		return $query->result();
   	}
   }
   function getRole($filter){
   	
   	if($filter==""){
   		$query=$this->db->query("select * from tbl_roles");
   		return $query->result();
   	}
   	else
   	{
   		$query=$this->db->query("select * from tbl_roles where id=$filter");
   		return $query->result();
   	}
   }
   //****************************Settings************************//

   function setAttendance($year,$employee_id,$attendance,$date,$data){
       
       $table="create table IF NOT EXISTS txn_attendance_$year(sk_attendance_id bigint primary key AUTO_INCREMENT,employee_id bigint,attendance_date date,attendance varchar(20),start_time varchar(20),end_time varchar(20),total_hrs time,login_id bigint,attendance_status varchar(20),salary_state boolean default 0)";
       $this->db->query($table);
      
       
       
       $query=$this->db->query("select * from txn_attendance_$year where employee_id='$employee_id' and attendance_date='$date'");
       if($query -> num_rows() == 1)
       {
           $this->db->where("employee_id",$employee_id);
           $this->db->where("attendance_date",$date);
           $this->db->update("txn_attendance_$year",$data);
           
       }else{
           $this->db->insert("txn_attendance_$year",$data);
       }
       
       
   }
   
   function getAttendance($year,$employee_id,$date){
       
       $table="create table IF NOT EXISTS txn_attendance_$year(sk_attendance_id bigint primary key AUTO_INCREMENT,employee_id bigint,attendance_date date,attendance varchar(20),start_time varchar(20),end_time varchar(20),total_hrs time,login_id bigint,attendance_status varchar(20),salary_state boolean default 0)";
       $this->db->query($table);
       
       $query=$this->db->query("select * from txn_attendance_$year where employee_id='$employee_id' and attendance_date='$date'");
       return $query->result();
       
      
   }
   function getMonthAttendance($year,$start_date,$end_date,$employee_id){
       

       
       $query=$this->db->query("select * from txn_attendance_$year where employee_id='$employee_id' and attendance_date between '$start_date' and '$end_date'");
       return $query->result();
       
       
   }

   function getissqut($itemn_id,$category_id){
   	 $query=$this->db->query("select sum(qty) as qty from mst_purchase_support where purchase_id in (select sk_purchase_id from mst_purchase where purchase_status=1) and itemn_id=$itemn_id and category_id='$category_id'");
       return $query->result();

   }

   function getdesign(){
	$query=$this->db->query("SELECT * FROM mst_employee INNER JOIN mst_employee_designation ON mst_employee.designation=mst_employee_designation.sk_designation_id");
	return $query->result();
   }
   function getEmployeesActive(){
        $query=$this->db->query("SELECT * FROM mst_employee INNER JOIN mst_employee_designation ON mst_employee.designation=mst_employee_designation.sk_designation_id where employee_status=1 order by employee_code asc");
        return $query->result();
   }
   function getEmployeesInActive(){
	    $query=$this->db->query("SELECT * FROM mst_employee INNER JOIN mst_employee_designation ON mst_employee.designation=mst_employee_designation.sk_designation_id where employee_status=0 order by updated_date desc");
	    return $query->result();
   }
   function getLive(){
	$query=$this->db->query("SELECT count(*)  FROM mst_employee e join txn_attendance_2022 a on e.sk_employee_id = a.employee_id where a.attendance='P' and a.attendance_date=DATE(now());");
	return $query->result();
   }
   function getEmployeeToday(){
	$query=$this->db->query("SELECT e.*, d.designation_name  FROM mst_employee e join mst_employee_designation d on d.sk_designation_id=e.designation join txn_attendance_2022 a on e.sk_employee_id = a.employee_id where a.attendance='P' and a.attendance_date=DATE(now());");
	return $query->result();
   }

    function getTodayPurchaseAmount(){
        $query=$this->db->query("select coalesce(sum(total_amount),0) as total from mst_purchase where invoice_date = DATE(now()) and purchase_status='1';");
        return $query->row()->total;
    }

    function getTodayPurchase(){
        $query=$this->db->query("SELECT * from mst_purchase where invoice_date=DATE(now()) and purchase_status='1' order by sk_purchase_id ASC");
        $result = $query->result();
        return $result;
    }

    function getFuelQty(){
        $query=$this->db->query("select sum(qty) as qty, fule_type from txn_transaction t join mst_vehicle v on v.sk_vehicle_id=t.vehicle_id where tran_type = 'Fuel Expense' group by fule_type;");
        $result = $query->result();
        return $result;
    }

    function getPurchaseQty(){
        $query=$this->db->query("select sum(qty) as qty,item_name from mst_purchase_support s join mst_item i on s.itemn_id=i.sk_item_id where purchase_id in (select sk_purchase_id from mst_purchase where purchase_status=1) group by item_name;");
        $result = $query->result();
        return $result;
    }

    function getTodayIssue(){
        $query=$this->db->query("select coalesce(sum(issue_qty),0) as total from txn_issue_stoke where create_date=DATE(now());");
        return $query->row()->total;
    }

    function getAdvanceSal($month,$year, $employee_id){
        $startDate = date($year.'-'.$month.'-01');
        $endDate = date($year.'-'.$month.'-t');
        $query=$this->db->query("select * from txn_employee_advance_salary s where s.employee_id='$employee_id' and s.date between '$startDate' and '$endDate';");
        return $query->result();
    }

    function getWorkingData($month,$year, $employee_id){
        $startDate = date($year.'-'.$month.'-01');
        $endDate = date($year.'-'.$month.'-t');
        $query=$this->db->query("select * from txn_attendance_2022 s where s.employee_id='$employee_id' and s.attendance_date between '$startDate' and '$endDate';");
        return $query->result();
    }

    function getPaySlip($month,$year, $employee_id){
        $query=$this->db->query("select * from txn_employee_payslip  where employee_id='$employee_id' and month='$month' and year='$year';");
        return $query->result();
    }

    function getIssuedStock($employee_id){
        if(empty($employee_id)){
            $query = $this->db->query("select ts.*,ms.store_id,ms.employee_id,ms.issue_type,ms.issue_date,store_name,item_name,employee_name from txn_issue_stoke ts left join mst_issue_stock ms on ms.id=ts.issue_id left join mst_store s on s.sk_store_id=ms.store_id left join mst_item i on i.sk_item_id=ts.item_id left join mst_employee e on e.sk_employee_id=ms.employee_id;");
        }else {
            $query = $this->db->query("select ts.*,ms.store_id,ms.employee_id,ms.issue_type,ms.issue_date,store_name,item_name from txn_issue_stoke ts left join mst_issue_stock ms on ms.id=ts.issue_id left join mst_store s on s.sk_store_id=ms.store_id left join mst_item i on i.sk_item_id=ts.item_id where ms.employee_id='$employee_id' ;");
        }
        return $query->result();
    }

    function getIssueItem($id){
          $query = $this->db->query("select * from txn_issue_stoke where id='$id';");
        return $query->row();
    }


    function updatePayroll($month,$year, $employee_id,$data,$table){
        $this->db->where("employee_id",$employee_id);
        $this->db->where("month",$month);
        $this->db->where("year",$year);
        $this->db->update($table,$data);
    }


    function getAvailableQtyByStoreByItem($itemId,$storeId){
        $query=$this->db->query("select (select ifnull(sum(qty),0) from mst_stock_transfer where to_store='$storeId' and item_id='$itemId')-(select ifnull(sum(qty),0) from mst_stock_transfer where from_store='$storeId' and item_id='$itemId')-(select ifnull(sum(issue_qty)-sum(return_qty),0) from txn_issue_stoke where item_id='$itemId') as qty;");
        return $query->row()->qty;
    }

    function getSupervisorData($employee_id){
    	$query = $this->db->query("select a.id,a.supervisor_id, b.employee_name FROM `mst_employee_supervisor` a left join mst_employee b on a.supervisor_id=b.sk_employee_id WHERE a.employee_id=1 and a. status='active'");
    	return $query->result();

    }

    public function delete_row($table, $col, $id){
    $this -> db -> where($col, $id);
    $this -> db -> delete($table);
	}

	function getFieldsSelect(){
   	$query=$this->db->query("select * from tbl_data_fields where field_type='Select'");
		return $query->result();
   }

   function getDataFieldsJoin(){
   	 $this->db->select('tbl_data_fields.*, b.field_name as parent_field_name, mst_clients.client_name,mst_verification_type.verification_type_name')
         ->from('tbl_data_fields')
         ->join('mst_clients', 'tbl_data_fields.field_for = mst_clients.sk_client_id')
         ->join('mst_verification_type','tbl_data_fields.field_for_type = mst_verification_type.sk_verification_type_id')
         ->join('tbl_data_fields as b', 'tbl_data_fields.parent_field_id=b.id','left outer');
	$query = $this->db->get();
	 return $query->result();
   }

   function getEmployeesWhomAuditors(){
     $this->db->select('mst_employee.*, tbl_users.role_id, tbl_roles.role ')
         ->from('mst_employee')
         ->join('tbl_users', 'tbl_users.employee_id = mst_employee.sk_employee_id')
         ->join('tbl_roles','tbl_roles.id = tbl_users.role_id')
         ->where('tbl_roles.role="auditor"');
   $query = $this->db->get();
   return $query->result();
   }



   function getDataWithFilters($table,$where){

   		$this->db->select('*')
	   		->from($table)
	   		->where($where);
   		$query= $this->db->get();
   		return $query->result();
   }


   function getAuditDetails($status){
     $this->db->select('a.*, b.employee_name, c.verification_type_name, d.client_name, e.country_name, f.state_name')
         ->from('mst_audit_schedule as a')
         ->join('mst_employee as b', 'b.sk_employee_id = a.auditor_id')
         ->join('mst_verification_type as c','c.sk_verification_type_id=a.verification_type_id')
         ->join('mst_clients as d', 'd.sk_client_id=a.client_id')
         ->join('mst_geo_country as e', 'e.sk_country_id=a.country_id')
         ->join('mst_geo_state as f', 'f.sk_state_id=a.state_id')
         ->where('a.status',$status);
  $query = $this->db->get();
   return $query->result();
   }


   function getEmployeedByRoles($role_id){
     $this->db->select('mst_employee.*, tbl_users.role_id, tbl_roles.role ')
         ->from('mst_employee')
         ->join('tbl_users', 'tbl_users.employee_id = mst_employee.sk_employee_id')
         ->join('tbl_roles','tbl_roles.id = tbl_users.role_id')
         ->where('tbl_roles.id',$role_id);
   $query = $this->db->get();
   // var_dump($this->db->last_query()); exit;
   return $query->result();
   }

}



