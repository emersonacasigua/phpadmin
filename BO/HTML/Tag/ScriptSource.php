<?php
namespace BO\HTML\Tag;

class ScriptSource
{

	private $script;

	public function __construct($filename)
	{
		$this->script = new \BO\HTML\Base\Inline([
			'tag' => 'script',
			'indent' => 3,
			'attr' => [
				'type' => 'text/javascript',
				'src' => '/js/' . $filename . '.js'
			]
		]);
	}

	public function __toString(): string
	{
		return $this->script;
	}
}
