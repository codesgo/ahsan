<?php

namespace Ahsan\Foundation;

class Foundation
{
	public $prop;

	function __construct()
	{
		$this->prop = 'Property Value Working. but now updated.';
	}

	/**
	 * Attempt to get the guard from the local cache.
	 *
	 * @param  string  $name
	 * @return \Illuminate\Contracts\Auth\Guard|\Illuminate\Contracts\Auth\StatefulGuard
	 */
	public function fetch()
	{
		return $this->prop;
	}

	/**
	 * Attempt to get the guard from the local cache.
	 *
	 * @param  string  $name
	 * @return \Illuminate\Contracts\Auth\Guard|\Illuminate\Contracts\Auth\StatefulGuard
	 */
	public function name()
	{
		return $this->prop;
	}
}