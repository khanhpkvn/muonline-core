<?php

namespace MUONLINECORE\App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class MUServerMEMB_STAT extends Authenticatable {

	protected $connection   = 'mu_server';
	protected $table        = 'MEMB_STAT';
	protected $primaryKey   = 'memb___id';
	protected $keyType      = 'string';
	public    $timestamps   = false;
	public    $incrementing = false;

}
