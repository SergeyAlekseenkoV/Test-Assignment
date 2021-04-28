<?php
require_once("dbcontroller.php");
$db_handle = new DBController();


if(!empty($_POST["title"])) {
	$title = strip_tags($_POST['title'],'<tr><tr>');
	$amount = strip_tags($_POST['amount'],'<td><td>');
    $length = strip_tags($_POST['length'],'<td><td>');
    $power_usage = strip_tags($_POST['power_usage'],'<td><td>');
    
    $sql = "INSERT INTO posts (post_title,amount,length,power_usage) VALUES ('" . $title . "','" . $amount . "','". $length ."','". $power_usage ."')";
   
    $faq_id = $db_handle->executeInsert($sql);


	if(!empty($faq_id)) {
		$sql = "SELECT * from posts WHERE id = '$faq_id' ";
		$posts = $db_handle->runSelectQuery($sql);
	}
?>
<tr scope="row" class="table-row" id="table_row_<?php echo $posts[0]["id"];?>">
    <td contenteditable="true" onBlur="saveToDatabase(this, 'post_title','<?php echo $posts[0]["id"];?>')" ><?php echo $posts[0]["post_title"];?></td>
    <td contenteditable="true" onBlur="saveToDatabase(this,'amount', '<?php echo $posts[0]["id"];?>')" ><?php echo $posts[0]["amount"];?></td>
    <td contenteditable="true" onBlur="saveToDatabase(this, 'length','<?php echo $posts[0]["id"];?>')" ><?php echo $posts[0]["length"];?></td>
    <td contenteditable="true" onBlur="saveToDatabase(this,'power_usage', '<?php echo $posts[0]["id"];?>')" ><?php echo $posts[0]["power_usage"];?></td>
    <td></td>
    <td><a class="ajax-action-links" onclick="deleteRecord(<?php echo $posts[0]["id"]; ?>);">Удалить</a></td>
</tr>
<?php } ?>