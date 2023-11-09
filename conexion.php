<?php

		$con = mysqli_connect("localhost","root","","medro")
			or die("Error no conencta".mysqli_error($con));

			mysqli_query($con,"SET NAMES 'utf8'");

?>