<?php

namespace MUONLINECORE\App\Models;

use Illuminate\Database\Eloquent\Model;

class MUServerMasterSkillTree extends Model {

	protected $connection = 'mu_server';
	protected $table      = 'MasterSkillTree';
	protected $primaryKey = 'CharacterIndex';

}
