<?php
namespace BO\HTML\Base;

class Paired extends Base
{

	public function __construct(array $params)
	{
		parent::__construct($params);
	}

	public function __toString(): string
	{
		$tag[] = str_repeat("\t", $this->indent) . '<' . implode(' ', $this->attr) . ">\n";
		if ($this->content) {
			$tag[] = implode('', $this->content);
		}
		$tag[] = str_repeat("\t", $this->indent) . '</' . $this->tag . ">\n";
		return implode('', $tag);
	}
}
