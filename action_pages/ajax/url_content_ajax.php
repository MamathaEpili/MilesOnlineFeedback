<?php 
include ('../../common/connection.php');
$url_cat=$_POST['url_cat']==''?NULL : $_POST['url_cat'] ;
$cat_data;
$sql_cat="SELECT * FROM tbl_city WHERE int_cat_id=$url_cat";
//var_dump($sql_cat);die;
$result_cat=$mysqli->query($sql_cat);
$url_cat='<option value="">Select City/Univ/Corporate</option>';
while($row_cat=$result_cat->fetch_assoc()){
	$url_cat.='<option value="'.$row_cat["int_city_id"].'">'.$row_cat["txt_city"].'</option>';
}
echo $url_cat;
?>