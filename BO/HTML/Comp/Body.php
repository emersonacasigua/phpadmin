<?php
namespace BO\HTML\Comp;

class Body
{

	private $body;

	public function __construct(array $content, array $scripts = array())
	{
		$javascript[] = new \BO\HTML\Tag\ScriptSource('jquery');
		$javascript[] = new \BO\HTML\Tag\ScriptSource('bootstrap');
		$javascript[] = new \BO\HTML\Tag\ScriptSource('slimscroll');
		$javascript[] = new \BO\HTML\Tag\ScriptSource('fastclick');
		$javascript[] = new \BO\HTML\Tag\ScriptSource('adminlte');
		$this->body = new \BO\HTML\Tag\Body(array_merge($content, $javascript, $scripts));
	}

	public function __toString(): string
	{
		return $this->body;
	}
}
