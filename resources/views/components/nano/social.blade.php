<x-proton::nano.row>
	<div class="nano-padding-inline">
		<div class="nano-divider"></div>

		<center>
			@if (!empty(config('proton.social.facebook')))
			<a href="{{ request()->getSchemeAndHttpHost() . '/social/facebook' }}" class="nano-icon" target="_blank">
				<img class="nano-image-mb" src="https://raw.githubusercontent.com/atomjoy/icons/refs/heads/main/black/facebook-40.png" alt="logo">
			</a>
			@endif

			@if (!empty(config('proton.social.x')))
			<a href="{{ request()->getSchemeAndHttpHost() . '/social/x' }}" class="nano-icon" target="_blank">
				<img class="nano-image-mb" src="https://raw.githubusercontent.com/atomjoy/icons/refs/heads/main/black/x-40.png" alt="logo">
			</a>
			@endif

			@if (!empty(config('proton.social.linkedin')))
			<a href="{{ request()->getSchemeAndHttpHost() . '/social/linkedin' }}" class="nano-icon" target="_blank">
				<img class="nano-image-mb" src="https://raw.githubusercontent.com/atomjoy/icons/refs/heads/main/black/linkedin-40.png" alt="logo">
			</a>
			@endif

			@if (!empty(config('proton.social.youtube')))
			<a href="{{ request()->getSchemeAndHttpHost() . '/social/youtube' }}" class="nano-icon" target="_blank">
				<img class="nano-image-mb" src="https://raw.githubusercontent.com/atomjoy/icons/refs/heads/main/black/youtube-40.png" alt="logo">
			</a>
			@endif

			@if (!empty(config('proton.social.instagram')))
			<a href="{{ request()->getSchemeAndHttpHost() . '/social/instagram' }}" class="nano-icon" target="_blank">
				<img class="nano-image-mb" src="https://raw.githubusercontent.com/atomjoy/icons/refs/heads/main/black/instagram-40.png" alt="logo">
			</a>
			@endif

			@if (!empty(config('proton.social.behance')))
			<a href="{{ request()->getSchemeAndHttpHost() . '/social/behance' }}" class="nano-icon" target="_blank">
				<img class="nano-image-mb" src="https://raw.githubusercontent.com/atomjoy/icons/refs/heads/main/black/behance-40.png" alt="logo">
			</a>
			@endif

			@if (!empty(config('proton.social.dribbble')))
			<a href="{{ request()->getSchemeAndHttpHost() . '/social/dribbble' }}" class="nano-icon" target="_blank">
				<img class="nano-image-mb" src="https://raw.githubusercontent.com/atomjoy/icons/refs/heads/main/black/dribbble-40.png" alt="logo">
			</a>
			@endif

			@if (!empty(config('proton.social.pinterest')))
			<a href="{{ request()->getSchemeAndHttpHost() . '/social/pinterest' }}" class="nano-icon" target="_blank">
				<img class="nano-image-mb" src="https://raw.githubusercontent.com/atomjoy/icons/refs/heads/main/black/pinterest-40.png" alt="logo">
			</a>
			@endif
		</center>
	</div>
</x-proton::nano.row>