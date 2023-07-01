<x-proton::email title="{{ __('proton.password.title') }}" locale="{{ app()->getlocale() }}">
	<x-slot:style>
		<style>
			.proton-table tr td {
				padding: 0px 40px;
			}
		</style>
	</x-slot:style>

	<x-proton::tr>
		<x-proton::td>
			<x-proton::margin />

			<center>
				<img src="https://raw.githubusercontent.com/atomjoy/proton/main/public/proton-password.png" alt="Image">
			</center>

			<h2>@lang('proton.password.welcome') {{ $user?->name ?? 'User' }}!</h2>
			<p>@lang('proton.password.message')</p>
		</x-proton::td>
	</x-proton::tr>

	<x-proton::tr>
		<x-proton::td>
			<x-proton::code>
				{{ $password ?? 'INVALIDPASS'}}
			</x-proton::code>
		</x-proton::td>
	</x-proton::tr>

	<x-proton::tr>
		<x-proton::td>
			<h3>@lang('proton.password.regards_title')</h3>
			<strong>{{ $user?->name ?? '' }}</strong>
			<p>@lang('proton.password.regards_text')</p>
		</x-proton::td>
	</x-proton::tr>

	<x-proton::tr>
		<x-proton::td>
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
		</x-proton::td>
	</x-proton::tr>
</x-proton::email>