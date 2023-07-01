<x-proton::email title="{{ __('Activation') }}" locale="pl">
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
				<img src="https://raw.githubusercontent.com/atomjoy/proton/main/public/proton-register.png" alt="Image">
			</center>

			<h2> @lang(config('proton.welcome.register', 'Welcome')) {{ $user?->name ?? 'User' }}! </h2>
			<p>@lang(config('proton.activation_text', 'This activation e-mail is sent to the e-mail address that you registered on our site. To activate your account, please click on the link below.'))</p>
		</x-proton::td>
	</x-proton::tr>

	<x-proton::tr>
		<x-proton::td>
			<x-proton::button url="{{ request()->getSchemeAndHttpHost() }}/activate/{{ $user?->id ?? '0' }}/{{ $user?->code ?? 'nocode' }}?locale={{ app()->getLocale() }}">
				@lang(config('proton.button.confirm_email', 'Confirm Email'))
			</x-proton::button>
		</x-proton::td>
	</x-proton::tr>

	<x-proton::tr>
		<x-proton::td>
			<h3> @lang(config('proton.regards_title', 'Regards')) </h3>
			<p> @lang(config('proton.regards_text', 'Have a nice day!'))</p>
		</x-proton::td>
	</x-proton::tr>

	<x-proton::tr>
		<x-proton::td>
			<x-proton::divider />

			<center>
				<span class="proton-rights"> © @lang(config('proton.rights', '2023 Proton Email')) </span>
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