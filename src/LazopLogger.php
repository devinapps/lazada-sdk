<?php

namespace Inapps;

use Illuminate\Support\Facades\Log;

class LazopLogger
{
	public $conf = array(
		"separator" => "\t",
		"log_file" => ""
	);

	public function log($logData)
	{
		if ("" == $logData || array() == $logData)
		{
			return false;
		}
		if (is_array($logData))
		{
			$logData = implode($this->conf["separator"], $logData);
		}
		Log::error($logData);
	}
}
