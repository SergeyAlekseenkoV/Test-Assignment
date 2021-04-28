<?php
require_once("dbcontroller.php");
$db_handle = new DBController();

$sql = "SELECT * from posts";
$posts = $db_handle->runSelectQuery($sql);
?>
<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <link type="image/png" sizes="16x16" rel="icon" href="img/logo.png">
    <script src="js/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/menu-up.js"></script>
    <title>Ввод показателей</title>
    <script>
     //create Save and Delete options for the rows   
function createNew() {
	$("#add_more").hide();
	var data = '<tr scope="row" class="table-row" id="new_row_ajax">' +
	'<td contenteditable="true" id="txt_title" onBlur="addToHiddenField(this,\'title\')" ></td>' +
	'<td contenteditable="true" id="txt_amount" onBlur="addToHiddenField(this,\'amount\')" ></td>' +
    '<td contenteditable="true" id="txt_length" onBlur="addToHiddenField(this,\'length\')" ></td>' +
	'<td contenteditable="true" id="txt_power_usage" onBlur="addToHiddenField(this,\'power_usage\')" ></td>' +
	'<td><input type="hidden" id="title" ><input type="hidden" id="amount" ><input type="hidden" id="length" ><input type="hidden" id="power_usage" ><span id="confirmAdd"><a onClick="addToDatabase()" class="text-info ajax-action-links">Сохранить</a> / <a onclick="cancelAdd();" class="text-warning ajax-action-links">Отмена</a></span></td>' +
	'</tr>';
  $("#table-body").append(data);
}
function cancelAdd() {
	$("#add-more").show();
	$("#new_row_ajax").remove();
}


function saveToDatabase(column,id) {
    console.log(2);
  $.ajax({
    url: "edit.php",
    type: "POST",
    data:'column='+column+'&editval='+$(editableObj).text()+'&id='+id,
  });
}
function addToDatabase() {
    console.log(1);
  var title = $("#title").val();
  var amount = $("#amount").val();
  var length = $("#length").val();

  var power_usage = $("#power_usage").val();
      //show loader while loading   
	  $.ajax({
		url: "add.php",
		type: "POST",
		data:'title='+title+'&amount='+amount+'&length='+length+'&power_usage='+power_usage,
		success: function(data){
		    $("#new_row_ajax").remove();
		    $("#add-more").show();		  
		    $("#table-body").append(data);
		}
	  });
}
function addToHiddenField(addColumn,hiddenField) {
	var columnValue = $(addColumn).text();
	$("#"+hiddenField).val(columnValue);
}
//deleting of a record
function deleteRecord(id) {
	if(confirm("Вы действительно хотите удалить эту запись?")) {
		$.ajax({
			url: "delete.php",
			type: "POST",
			data:'id='+id,
			success: function(data){
			    $("#table-row-"+id).remove();
			}
		});
	}
}
</script>
</head>

<body id="home">
    <!--navigation-->
    <nav id="navbarUp" class="navbar navbar-expand-md bg-dark navbar-dark fixed-top shadow">
        <div class="container">
            <!--LOGO-->
            <div class="logo mr-0 d-flex justify-content-center bg-linear">
                <a href="index.php">
                    <img src="img/logo.png" alt="MGOK" class="mt-1 ml-1 inner-logo">
                </a>
                <a href="index.php" class="navbar-brand text-logo font-weight-bold pl-1">МГОК</a>
            </div>
            <!--menu button-->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!--dropdowns-->
            <div class="collapse navbar-collapse text-center text-md-left text-lg-left" id="navbarCollapse">
                <ul class="navbar-nav nav-pills ml-auto mt-1">
                    <li class="nav-item border border-primary rounded position-relative">
                        <a class="nav-link dropdown-toggle text-white font-weight-bold" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" 
                           aria-expanded="false">Производство</a>
                        <div class="dropdown-menu position-absolute dropdown-content p-0 row border border-primary bg-primary text-center text-md-left text-lg-left width-dropdown-smallscreen">
                            <a class="dropdown-item text-white col-md-12" href="enterprise-condition.html">Состояние производства</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a href="#social" class="nav-link font-weight-bold text-white">Социальная сфера</a>
                    </li>
                    <li class="nav-item">
                        <a href="#other" class="nav-link font-weight-bold text-white">Прочее</a>
                    </li>
                    <li class="nav-item">
                        <a href="#directory" class="nav-link font-weight-bold text-white">Справочни<br class="d-none d-md-inline-block d-lg-none">ки</a>
                    </li>
                    <li class="nav-item">
                        <a href="divisions.html" class="nav-link font-weight-bold text-white pr-lg-0">Подразделе<br class="d-none d-md-inline-block d-lg-none">ния</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!--exit-->
    <nav class="container pt-5 d-flex justify-content-end">
        <a href="logout.php" class="btn btn-small btn-primary text-white mt-5 shadow log-out" role="button">Выйти</a>
    </nav>
    <!--breadcrumbs-->
    <header class="container">
        <div class="row ml-0 mr-0">
            <nav aria-label="breadcrumb" class="col col-md-7 col-lg-6 col-xl-5 pl-0 pr-0">
                <ol class="breadcrumb mt-5 bg-dark border border-secondary p-1 shadow">
                    <li class="breadcrumb-item pl-2"><a href="index.php">Главная</a></li>
                    <li class="breadcrumb-item active text-white" aria-current="page">Ввод производственных показателей</li>
                </ol>
            </nav>
        </div>
    </header>
    <!--table section-->
    <section id="indicators" class="container mt-5">
        <!--table-->
        <table id="ind_table" class="table table-dark table-striped table-responsive-md table-bordered shadow tbl-qa">
            <caption class="bg-dark text-center">Производственные показатели за <strong>ЯНВАРЬ</strong> <a href="#">месяц</a></caption>
            <thead>
                <tr>
                    <th scope="col" class="align-top text-info">Подразделение</th>
                    <th scope="col" class="align-top text-info">Добыча<br>тонн</th>
                    <th scope="col" class="align-top text-info">Нарезка<br>п.м</th>
                    <th scope="col" class="align-top text-info">Использование электроенергии<br>кВт</th>
                    <th colspan="2" scope="col" class="align-top text-info">Действие</th> 
                </tr>
            </thead>
            <tbody id="table-body">
                <?php
                if(!empty($posts)) {
                    foreach($posts as $k=>$v) {
                
                ?>
                <tr scope="row" class="table-row" id="table-row-<?php echo $posts[$k]["id"];?>">
                    <td contenteditable="true" onBlur="saveToDatabase(this, 'post_title','<?php echo $posts[$k]["id"];?>')" ><?php echo $posts[$k]["post_title"];?></td>
                    <td contenteditable="true" onBlur="saveToDatabase(this,'amount', '<?php echo $posts[$k]["id"];?>')" ><?php echo $posts[$k]["amount"];?></td>
                    <td contenteditable="true" onBlur="saveToDatabase(this, 'length','<?php echo $posts[$k]["id"];?>')"><?php echo $posts[$k]["length"];?></td>
                    <td contenteditable="true" onBlur="saveToDatabase(this,'power_usage', '<?php echo $posts[$k]["id"];?>')" ><?php echo $posts[$k]["power_usage"];?></td>
                    <td><a class="text-danger ajax-action-links" onclick="deleteRecord(<?php echo $posts[$k]["id"]; ?>);">Удалить</a></td>
                </tr>
                <?php
                    }
                }
                ?>    
            </tbody>
        </table>
        <div class="d-flex justify-content-end">
            <button type="button" name="add" id="add_more" 
                    onClick="createNew();" 
                    class="ajax-action-button btn d-block bg-transparent text-primary border border-primary mr-0 shadow">Добавить запись</button>
        </div>
    </section>
    <!--footer-->
    <?php include_once "footer.php"; ?>
</body>

</html>