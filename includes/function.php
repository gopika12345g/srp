<?php
function email_exists($lastname,$con)
{
	$row=mysqli_query($con,"SELECT id FROM jl WHERE last_name='$lastname'");
	{
		if(mysqli_num_rows($row)==1)
		{
			return true;
		}
		else
		{
			return false;
		}
	}
}
?>