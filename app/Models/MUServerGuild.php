<?php

namespace MUONLINECORE\app\Models;

use Illuminate\Database\Eloquent\Model;

class MUServerGuild extends Model {

	protected $connection   = 'mu_server';
	protected $table        = 'Guild';
	protected $primaryKey   = 'G_Name';
	public    $incrementing = false;
	public    $keyType      = 'string';

}
