@php
$password = (string) $password ?? '000000';
@endphp

<x-proton::email title="{{ __('proton.f2a.subject') }}" locale="{{ app()->getlocale() }}">
	<x-slot:style>
		<style>
			.proton-table tr td {
				padding: 0px 40px;
			}

			cyfra {
				display: inline-block;
				padding: 10px 15px;
				margin: 5px 5px;
				border-radius: 6px;
				border: 1px dashed #024ef0aa;
				background: #fff;
				color: #024ef0;
				font-weight: 900;
				font-size: 21px;
			}
		</style>
	</x-slot:style>

	<x-proton::row>
		<x-proton::margin />

		<center>
			<img src="{{ config('proton.f2a_image_url', 'https://raw.githubusercontent.com/atomjoy/proton/main/public/proton-default.png') }}" alt="Image">
		</center>

		<h2>@lang('proton.f2a.welcome') {{ $user?->name ?? '' }}!</h2>
		<p>@lang('proton.f2a.message')</p>
	</x-proton::row>

	<x-proton::row>
		<x-proton::code>
			<cyfra>{{ $password[0] ?? 0 }}</cyfra>
			<cyfra>{{ $password[1] ?? 0 }}</cyfra>
			<cyfra>{{ $password[2] ?? 0 }}</cyfra>
			<cyfra>{{ $password[3] ?? 0 }}</cyfra>
			<cyfra>{{ $password[4] ?? 0 }}</cyfra>
			<cyfra>{{ $password[5] ?? 0 }}</cyfra>
		</x-proton::code>
	</x-proton::row>

	<x-proton::row>
		<h3>@lang('proton.f2a.regards_title')</h3>
		<strong>{{ $user?->name ?? '' }}</strong>
		<p>@lang('proton.f2a.regards_text')</p>
	</x-proton::row>

	<x-proton::row>
		<x-proton::divider />

		<center>
			<span class="proton-rights"> © @lang('proton.rights') </span>
		</center>

		<br />

		<x-proton::flex>
			<x-proton::social name="twitter" />
			<x-proton::social name="facebook" />
			<x-proton::social name="instagram" />
			<x-proton::social name="tiktok" />
		</x-proton::flex>

		<x-proton::margin />
	</x-proton::row>
</x-proton::email>