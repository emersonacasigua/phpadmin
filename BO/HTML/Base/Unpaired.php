<?php
namespace BO\HTML\Base;

class Unpaired
{

	private $attr = null;
	private $indent = 0;
	private $tag;

	public function __construct(array $params)
	{
		foreach ($params as $key => $value) {
			switch ($key) {
				case 'attr':
					$this->setAttributes($value);
					break;
				case 'indent':
					$this->indent = $value;
					break;
				case 'tag':
					$this->attr[] = $value;
			}
		}
	}

	private function setAttributes($attributes)
	{
		foreach ($attributes as $key => $value) {
			$this->attr[] = $key . "='" . $value . "'";
		}
	}

	public function __toString(): string
	{
		return str_repeat("\t", $this->indent) . '<' . implode(' ', $this->attr) . " />\n";
	}
}
