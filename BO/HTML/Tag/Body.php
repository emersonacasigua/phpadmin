<?php
namespace BO\HTML\Tag;

class Body
{

	private $body;

	public function __construct(array $content)
	{
		$this->body = new \BO\HTML\Base\Paired([
			'tag' => 'body',
			'indent' => 2,
			'content' => $content
		]);
	}

	public function __toString(): string
	{
		return $this->body;
	}
}
