<?php
namespace BO\HTML\Base;

class Inline extends Base
{

	public function __construct(array $params)
	{
		parent::__construct($params);
	}

	public function __toString(): string
	{
		$tag[] = str_repeat("\t", $this->indent) . '<' . implode(' ', $this->attr) . ">";
		if ($this->content) {
			$tag[] = implode('', $this->content);
		}
		$tag[] = '</' . $this->tag . ">\n";
		return implode('', $tag);
	}
}
