<?php
require_once ("../include/initialize.php");
	 if (!isset($_SESSION['ACCOUNT_ID'])){
      redirect(web_root."index.php");
     }

$action = (isset($_GET['action']) && $_GET['action'] != '') ? $_GET['action'] : '';

switch ($action) {
	case 'add' :
	doInsert();
	break;
	
	case 'edit' :
	doEdit();
	break;
	
	case 'delete' :
	doDelete();
	break;

	case 'photos' :
	doupdateimage();
	break;

 
	}
   
	function doInsert(){
		if(isset($_POST['save'])){


		if ($_POST['DEPARTMENT_NAME'] == "" OR $_POST['DEPARTMENT_DESC'] == "") {
			$messageStats = false;
			message("All field is required!","error");
			redirect('index.php?view=add');
		}else{	
			$dept = New Department(); 
		    $dept->Department 		= $_POST['DEPARTMENT_NAME'];
			$dept->Description		= $_POST['DEPARTMENT_DESC']; 
			$dept->create();

		 $autonum = New Autonumber(); 
			

			message("New [". $_POST['DEPARTMENT_NAME'] ."] created successfully!", "success");
			redirect("index.php");
			
		}
		}

	}

	function doEdit(){
	if(isset($_POST['save'])){ 

 		$desc = $_POST['DESCRIPTION'];

			$dept = New Department(); 
			$dept->Department 		= $_POST['DEPARTMENT_NAME'];
			$dept->Description		= $desc;  
			$res = $dept->update($_POST['DEPT_ID']);

			  message("[". $_POST['DEPARTMENT_NAME'] ."] has been updated!", "success");
			redirect("index.php");
			 
			
		}
	}


	function doDelete(){
		
	 
				$id = 	$_GET['id'];

				$dept = New Department();
	 		 	$dept->delete($id);
			 
			message("Department already Deleted!","info");
			redirect('index.php');
		 
		
	}

	 
 
?>