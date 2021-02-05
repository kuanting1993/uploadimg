<?php

$action=htmlspecialchars(trim($_POST["action"]),ENT_QUOTES);

switch($action){
	case 'ImageUpload':
		
		$fileCount = count($_FILES['file']['name']);
		for($i=0; $i<$fileCount; $i++){ 
			if ($_FILES['file']['error'][$i] === UPLOAD_ERR_OK){
				$file=$_FILES['file']['tmp_name'][$i];
				
				$filename=time().'.jpg';
				$dest="upload/".$filename;
				
				if(move_uploaded_file($file, $dest)){
					echo "上傳成功";
				}
				else{
					echo "失敗：".$file;
				}
			}
			else{
				echo $_FILES['file']['error'] . '<br/>';
			}
		}
	break;
	
	case 'CheckImageSize':
		$fileCount = count($_FILES['file']['name']);
		for ($i = 0; $i < $fileCount; $i++) {
			$file=$_FILES["file"]["tmp_name"][$i];
			$imagesize=getimagesize($file);
			//檢查圖片長寬，照片尺寸需寬800以上，高600以上，可隨需求調整
			if($imagesize[0]<800 || $imagesize[1]<600){
				echo $_FILES['file']['name'][$i].'檔案尺寸錯誤，!!';
				//echo $imagesize[0];
			}
			else{ echo "";}
		}
	break;
	default:
		echo "上傳失敗!!";
	break;
}
?>