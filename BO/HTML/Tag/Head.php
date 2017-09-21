<?php
namespace BO\HTML\Tag;

class Head
{

	private $head;

	public function __construct(array $content)
	{
		$this->head = new \BO\HTML\Base\Paired([
			'tag' => 'head',
			'indent' => 2,
			'content' => $content
		]);
	}

	public function __toString(): string
	{
		return $this->head;
	}
}
