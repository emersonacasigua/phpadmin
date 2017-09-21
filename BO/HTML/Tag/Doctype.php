<?php
namespace BO\HTML\Tag;

class Doctype
{

	private $html;

	public function __construct($body, $head)
	{
		$this->html = new \BO\HTML\Base\Paired([
			'tag' => 'html',
			'indent' => 1,
			'content' => [$body, $head]
		]);
	}

	public function __toString(): string
	{
		$doctype[] = "<!DOCTYPE html>\n";
		$doctype[] = $this->html;
		return implode('', $doctype);
	}
}
