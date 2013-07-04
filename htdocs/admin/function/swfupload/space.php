
<?php
session_start();
@$do=$_GET['do'];

if($do=='album'){
	//$id=$_GET['id'];

	header("location:../../index.php?display=album&list_upid=".$_SESSION['album_upid']);
	//$arr = scandir('../../../upload/photos/');
	//foreach($arr as $v){
		//if(strlen($v)>2){
		//	echo "<img src='../../../upload/photos/$v' width='200'>\n";
		//}
	//}
}

?>