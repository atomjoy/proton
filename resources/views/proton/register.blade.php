<x-proton.email title="{{ __('Activation') }}" locale="pl">
	<x-slot:style>
		<style>
			.proton-flex img {
				margin: 10px;
				max-width: 15%;
				width: 40px;
			}
		</style>
	</x-slot:style>

	<x-proton.tr>
		<x-proton.td>
			<x-proton.margin />

			<center>
				<h1> @lang(config('proton.email.message.welcome', 'Welcome')) {{ $user?->name ?? '' }}! </h1>
				<img src="https://proton.me/images/social/proton-mail-og.png" alt="Image">
			</center>

			<h2> @lang('Confirm email address') </h2>
			<p>@lang(config('proton.email.message.activation', 'Activate youe email addres now.'))</p>
		</x-proton.td>
	</x-proton.tr>

	<x-proton.tr>
		<x-proton.td>
			<x-proton.button url="{{ request()->getSchemeAndHttpHost() }}/activate/{{ $user?->id ?? '0' }}/{{ $user?->code ?? 'nocode' }}?locale={{ app()->getLocale() }}">
				@lang('Confirm Email')
			</x-proton.button>
		</x-proton.td>
	</x-proton.tr>

	<x-proton.tr>
		<x-proton.td>
			<h3> @lang('Regards') </h3>
			<p> @lang('Have a nice day!')</p>
		</x-proton.td>
	</x-proton.tr>

	<x-proton.tr>
		<x-proton.td>
			<x-proton.divider />

			<center>
				<span style="color: #706d6b;"> © 2023 Proton Switzerland </span>
			</center>

			<x-proton.flex>
				<a href="https://proton.me" class="proton-link">
					<img src="https://img.icons8.com/?size=64&id=LPcVDft9Isqt&format=png" alt="Image">
				</a>

				<a href="https://proton.me" class="proton-link">
					<img src="https://img.icons8.com/?size=64&id=LPcVDft9Isqt&format=png" alt="Image">
				</a>

				<a href="https://proton.me" class="proton-link">
					<img src="https://img.icons8.com/?size=64&id=LPcVDft9Isqt&format=png" alt="Image">
				</a>

				<a href="https://proton.me" class="proton-link">
					<img src="https://img.icons8.com/?size=64&id=LPcVDft9Isqt&format=png" alt="Image">
				</a>
			</x-proton.flex>

			<x-proton.margin />
		</x-proton.td>
	</x-proton.tr>
</x-proton.email>