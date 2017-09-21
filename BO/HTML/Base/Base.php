<?php
namespace BO\HTML\Base;

class Base
{

	protected $attr = null;
	protected $content = null;
	protected $indent = 0;
	protected $tag;

	public function __construct(array $params)
	{
		foreach ($params as $key => $value) {
			switch ($key) {
				case 'attr':
					$this->setAttributes($value);
					break;
				case 'content':
					$this->setContent($value);
					break;
				case 'indent':
					$this->indent = $value;
					break;
				case 'tag':
					$this->tag = $value;
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

	private function setContent($contents)
	{
		foreach ($contents as $content) {
			$this->content[] = $content;
		}
	}
}
