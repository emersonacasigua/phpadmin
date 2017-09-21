<?php
namespace BO\HTML\Tag;

class Title
{

	private $title;

	public function __construct($title)
	{
		$this->title = new \BO\HTML\Base\Inline([
			'tag' => 'title',
			'indent' => 3,
			'content' => [$title]
		]);
	}

	public function __toString(): string
	{
		return $this->title;
	}
}
