<!DOCTYPE html>
<html>
<head>
	<title>error</title>
	<style type="text/css">

.content {
    width: 15%;
    margin: 5% auto;
    border: 1px solid #999;
    padding: 1%;
	}
p {
    font-family: arial, sans-serif;
    color: red;
	}
a {
    text-decoration: none;
    font-family: arial, sans-serif;
    color: white;
    background-color: #999;
    padding: 10px;
	}
a:hover {
    color: black;
	}
	</style>
</head>
<body>
	<div class="content">
		<?php echo validation_errors(); ?>
		<a href="javascript:history.go(-1)">Go Back</a>
	</div>

</body>
</html>