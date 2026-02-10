<?php

namespace MUONLINECORE\App\Models;

use Illuminate\Database\Eloquent\Model;

class MUServerMEMB_INFO extends Model {

	protected $connection = 'mu_server';
	protected $table      = 'MEMB_INFO';
	protected $primaryKey = 'memb_guid';

}
