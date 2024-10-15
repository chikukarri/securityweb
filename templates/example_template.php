<!doctype html public "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" href="kkd.css" type="text/css">
<meta name="generator" content="DocBook XSL Stylesheets V1.69.1">
<title> <?php echo ($data['title']); ?> </title>
</head>



<body>

<table>
<tr><h1><U><?php echo ($data['message']); ?></U></h1>
</tr>
<tr>
<td>HOME</td>
<td>CLIENTS</td>
<td>SERVICE</td>
<td>CONTACT US</td>
</table></br></br>


<h2>SECURITY FORCE AT YOUR SERVICE WITH FULL POWER</h2>

<table  bgcolor="pink">
<tr>
<td colspan="2">This is blog dedicated to all cyber aspirants to gather latest knowledge and share threat intel for securing the doors of vulnerabitites. The required force is continous threat feeds and regular sharing of knowledge and make aware the public domain about threats which may harm the society. Lets work togetger to make this mission possible. THIS COMPANY BELONGS TO S S KARRI.
</td>
</tr>

<?php
foreach ($data['table'] as $row) {
?>

<tr>
<td><?php echo ($row['item']); ?></td>
<td><a href="<?php echo ($row['url']); ?>">Read More</a></td>
</tr>

<?php
}
?>
</table>


<h2>shiv shankar karri</h2>

<p align="center"><?php echo ($data['poweredby']); ?>

<p align="center">The AwesomeTemplateEngine was inspired by 
<a href="http://www.sitepointforums.com/showthread.php?s=&threadid=67849">this discussion at Sitepointforums</a>.
Pay close attention to comments by <b>voostind</b>
<p align="center">Flames to the shivyamcharvs author
</body>

</html>
