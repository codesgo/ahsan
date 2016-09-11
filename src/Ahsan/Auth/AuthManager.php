<?php

namespace Ahsan\Auth;

class AuthManager
{
	/**
	 * Attempt to get the guard from the local cache.
	 *
	 * @param  string  $name
	 * @return \Illuminate\Contracts\Auth\Guard|\Illuminate\Contracts\Auth\StatefulGuard
	 */
	public function fetch()
	{
		return 'Working';
	}
}