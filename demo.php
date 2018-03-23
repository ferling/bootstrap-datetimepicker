<!DOCTYPE html lang="hu">
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<script src="/js/bootstrap-datetimepicker.js?<?php echo mt_rand(1000,9999) ?>"></script>
	<script src="/js/locales/bootstrap-datetimepicker.hu.js?<?php echo mt_rand(1000,9999) ?>"></script>
</head>
<body>
	<div class="naptar"></div>

	<script>
		jQuery(function() {
			$('.naptar').datetimepicker({
				language: 'hu',
				todayHighlight: true,
				startView: 2,
				minView: 2,
				maxView: 2,
				format: 'yyyy-mm-dd hh:ii'
			});
		});
	</script>
</body>
</html>