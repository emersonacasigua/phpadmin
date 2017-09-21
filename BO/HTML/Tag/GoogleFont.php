<?php
namespace BO\HTML\Tag;

class GoogleFont
{

	private $stylesheet;

	public function __construct($resource)
	{
		$this->stylesheet = new \BO\HTML\Base\Unpaired([
			'tag' => 'link',
			'indent' => 3,
			'attr' => ['rel' => 'stylesheet',
				'href' => 'https://fonts.googleapis.com/css?family=' . $resource]
		]);
	}

	public function __toString(): string
	{
		return $this->stylesheet;
	}
}
