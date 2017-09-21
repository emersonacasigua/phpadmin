<?php
namespace BO\HTML\Tag;

class Viewport
{

	private $viewport;

	public function __construct()
	{
		$this->viewport = new \BO\HTML\Base\Unpaired([
			'tag' => 'meta',
			'indent' => 3,
			'attr' => ['content' => 'width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no',
				'name' => 'viewport']
		]);
	}

	public function __toString(): string
	{
		return $this->viewport;
	}
}
