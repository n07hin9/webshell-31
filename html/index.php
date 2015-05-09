<?php /*@var $this App*/ ?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title></title>
</head>
<body>
<style type="text/css">
#tabmenu{
	border-bottom: 1px solid #cad0db;

}
#tabmenu li{
	display: inline;
    list-style: outside none none;
    margin: 0 -1px 0 0;
    padding: 0;
}
#tabmenu li a {		
    background: none repeat scroll 0 0 #e9ecf0;
    border-color: #cad0db #cad0db;
    border-radius: 4px 4px 0 0;
    border-style: solid solid none;
    border-width: 1px 1px medium;
    color: #666666;
    display: inline-block;
    font-family: "微软雅黑";
    font-size: 14px;
    line-height: 26px;
    outline: 0 none;
    padding: 0 14px;
    text-decoration: none;
    margin-right: 5px;
}
</style>
	<ul id="tabmenu">
	<?php 
		$pages = $this->getPages();
		foreach ($pages as $c => $_pages) {
			foreach ($_pages as $name => $page) {
				if($page){
					$r = "c={$c}&a={$page}";
				}else{
					$r= "c={$c}";
				}
				echo "<li><a href='index.php?{$r}'>{$name}</a></li>";
			}
		}
	?>
	</ul>
	<?php echo $this->controllerData; ?>
</body>
</html>
