<?php

namespace App\View\Components\Proton;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Email extends Component
{
	/**
	 * Create a new component instance.
	 */
	public function __construct(
		public string $locale,
		public string $title,
	) {
	}

	/**
	 * Get the view / contents that represent the component.
	 */
	public function render(): View|Closure|string
	{
		return view('components.proton.email');
	}
}
