<?php

namespace MUONLINECORE\App\WordPress\Shortcodes;

use MUONLINECORE\App\Models\MUServerCharacter;
use MUONLINECORE\App\Widen\Traits\InstancesTrait;
use MUONLINECORE\Funcs;
use WPSPCORE\App\WordPress\Shortcodes\BaseShortcode;
use function Laravel\Prompts\select;

class muoc_top_players extends BaseShortcode {

	use InstancesTrait;

//	public $shortcode = null;

	/*
	 *
	 */

	public function index($atts, $content, $tag) {
		$characters = MUServerCharacter::query()
			->leftJoin(
				'MasterSkillTree',
				'Character.CharacterIndex',
				'=',
				'MasterSkillTree.CharacterIndex'
			)
			->selectRaw('
		        Character.Name,
		        Character.cLevel,
		        ISNULL(MasterSkillTree.MasterLevel, 0) as MasterLevel,
		        Character.cLevel + ISNULL(MasterSkillTree.MasterLevel, 0) as level
		    ')
			->orderByDesc('level')
			->take(5)
			->get();

		$view = Funcs::view('shortcodes.muoc_top_players', compact('characters'));

		return do_shortcode($view);
	}

	/*
	 *
	 */

	public function customProperties() {
//		$this->shortcode = 'custom_shortcode';
	}

}