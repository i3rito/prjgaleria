<?php

public function is_valid($str)
{
	if (filter_var($str, FILTER_VALIDATE_URL) === FALSE)
	{
		return FALSE;
	}
	else
	{
		return TRUE;
	}
}

