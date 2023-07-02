<x-proton::email title="{{ __('proton.password.title') }}" locale="{{ app()->getlocale() }}">
	<x-slot:style>
		<style>
			.proton-table tr td {
				padding: 0px 40px;
			}
		</style>
	</x-slot:style>

	<x-proton::row>
		<x-proton::margin />

		<center>
			<img src="{{ config('proton.password_image_url', 'https://raw.githubusercontent.com/atomjoy/proton/main/public/proton-default.png') }}" alt="Image">
		</center>

		<h2>@lang('proton.password.welcome') {{ $user?->name ?? 'User' }}!</h2>
		<p>@lang('proton.password.message')</p>
	</x-proton::row>

	<x-proton::row>
		<x-proton::code>
			{{ $password ?? 'INVALIDPASS'}}
		</x-proton::code>
	</x-proton::row>

	<x-proton::row>
		<h3>@lang('proton.password.regards_title')</h3>
		<strong>{{ $user?->name ?? '' }}</strong>
		<p>@lang('proton.password.regards_text')</p>
	</x-proton::row>

	<x-proton::row>
		<x-proton::divider />

		<center>
			<span class="proton-rights"> © @lang('proton.rights') </span>
		</center>

		<br />

		<x-proton::flex>
			<x-proton::social name="twitter" />
			<x-proton::social name="tiktok" />
			<x-proton::social name="facebook" />
			<x-proton::social name="instagram" />
		</x-proton::flex>

		<x-proton::margin />
	</x-proton::row>
</x-proton::email>