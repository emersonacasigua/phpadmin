<?php
namespace BO\HTML\Comp;

class Head
{

	public function __toString(): string
	{
		return new \BO\HTML\Tag\Head([
			new \BO\HTML\Tag\Charset(),
			new \BO\HTML\Tag\Viewport(),
			new \BO\HTML\Tag\Stylesheet('bootstrap'),
			new \BO\HTML\Tag\Stylesheet('fontawesome'),
			new \BO\HTML\Tag\Stylesheet('ionicons'),
			new \BO\HTML\Tag\Stylesheet('adminlte'),
			new \BO\HTML\Tag\Stylesheet('skin'),
			new \BO\HTML\Tag\GoogleFont('Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic')
		]);
	}
}
