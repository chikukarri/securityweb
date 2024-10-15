<?php
/* index.php */
include('classes/AwesomeTemplateEngine.class.php');

$aT=new AwesomeTemplateEngine('./templates/');

/* Some sample data */
$data['title']="RAGVENDRA SECURITY FORCE";
$data['message']="RAGVENDRA SECURITY FORCE";
$data['table'][1]['item']="charvi";
$data['table'][1]['url']="http://www.php.net/include";
$data['table'][2]['item']="karri";
$data['table'][2]['url']="http://www.php.net/manual/en/language.oop.php#keyword.class";
$data['poweredby']="Powered by AwesomeTemplateEngine";

/* Show the template */
$aT->parseTemplate($data,"example_template.php");
function Message($msg)
			{
			echo "<script language=\"JavaScript\">\nwindow.alert('".$msg."');\n</script>";
			}

Message(" hi........................welcome to ragvendra security force designed by charvi");
?>
