<?php
	function error_without_field($message)
	{
		return '<script>
					document.getElementById("error").innerHTML = "'.$message.'";
					document.getElementById("error-message").style.display = "block";
				</script>';
	}
	
	function error_with_field($message, $field)
	{
		return '<script>
					document.getElementById("error").innerHTML = "'.$message.'";
					document.getElementById("error-message").style.display = "block";
					document.getElementById("'.$field.'").className += " error-field";
				</script>';
	}
	
	function success($message)
	{
		return '<script>
					document.getElementById("error").innerHTML = "'.$message.'";
					document.getElementById("error-message").className = "success-message";
				</script>';
	}
?>