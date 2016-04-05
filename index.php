 for($i=0; $i<count($_FILES['project_image']['name']); $i++){
	
	
   
    $target_path = "RestImage/projectimage/";
    $ext = explode('.', basename( $_FILES['project_image']['name'][$i]));
	
	$storevariable = (uniqid()) . "." . $ext[count($ext)-1];
	
    $target_path = $target_path . $storevariable; 
	
	

    if(move_uploaded_file($_FILES['project_image']['tmp_name'][$i], $target_path)) { }
	
	$dataimage = array(
	
	'project_id' =>$id,
	'image' => ($storevariable)
	);

	


$resultimage = $m->insert('tbl_project_image',$dataimage);
	
	
	}
