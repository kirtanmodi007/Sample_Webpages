<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<div id="show">
	
</div>
	<script src="jquery-3.3.1.min.js" type="text/javascript"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			setInterval(function(){
				$('#show').load('data.php')
			},1000);
		});
	</script>
</body>
</html>