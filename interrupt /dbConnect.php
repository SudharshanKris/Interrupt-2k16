<?php

	function dbConnect()
	{
		$sql = mysqli_connect('localhost' ,'****','****','****');
		return $sql;

	}

?>
