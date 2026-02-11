<?php

namespace MUONLINECORE\App\Models;

use Illuminate\Database\Eloquent\Model;

class MUServerMEMB_INFO extends Model {

	protected $connection = 'mu_server';
	protected $table      = 'MEMB_INFO';
	protected $primaryKey = 'memb_guid';

	protected $fillable = [
		'memb___id',
		'memb_name',
		'memb__pwd',
		'mail_addr',
		'sno__numb',
		'post_code',
		'fpas_ques',
		'fpas_answ',
		'mail_chek',
		'bloc_code',
		'ctl1_code',
		'AccountLevel',
	];

	public $timestamps = false;

}
