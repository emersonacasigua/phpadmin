<?php
namespace BO\HTML\Tag;

class Charset
{

	private $charset;

	public function __construct()
	{
		$this->charset = new \BO\HTML\Base\Unpaired([
			'tag' => 'meta',
			'indent' => 3,
			'attr' => ['charset' => 'utf-8']
		]);
	}

	public function __toString(): string
	{
		return $this->charset;
	}
}
