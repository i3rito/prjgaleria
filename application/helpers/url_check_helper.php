<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * @param $url
 * is the recived URL
 * @return bool
 * true = if $url is a valid URL
 * false = if $url isn't a valid URL
 */

function is_valid($url)
{
	if (filter_var($url, FILTER_VALIDATE_URL) === FALSE)
	{
		return FALSE;
	}
	else
	{
		return TRUE;
	}
}
