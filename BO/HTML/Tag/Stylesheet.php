<?php
namespace BO\HTML\Tag;

class Stylesheet
{

	private $stylesheet;

	public function __construct($filename)
	{
		$this->stylesheet = new \BO\HTML\Base\Unpaired([
			'tag' => 'link',
			'indent' => 3,
			'attr' => ['rel' => 'stylesheet',
				'type' => 'text/css',
				'href' => '/css/' . $filename . '.css']
		]);
	}

	public function __toString(): string
	{
		return $this->stylesheet;
	}
}
