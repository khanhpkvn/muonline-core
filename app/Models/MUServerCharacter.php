<?php

namespace MUONLINECORE\App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;

class MUServerCharacter extends Model {

	protected $connection = 'mu_server';
	protected $table      = 'Character';
	protected $primaryKey = 'CharacterIndex';
//	protected $appends    = ['level'];

	public function masterSkillTree() {
		return $this->hasOne(MUServerMasterSkillTree::class, 'CharacterIndex', 'CharacterIndex');
	}

//	public function level(): Attribute {
//		return new Attribute(
//			get: function($value) {
//				$cLevel = $this->cLevel ?? 1;
//				$masterLevel = $this->masterSkillTree->MasterLevel ?? 0;
//				return $cLevel + $masterLevel;
//			}
//		);
//	}

}
