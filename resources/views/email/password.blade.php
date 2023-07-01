<x-proton::email title="{{ __('Password') }}" locale="pl">
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

			<h2> @lang(config('proton.welcome.password', 'Welcome again')) {{ $user?->name ?? 'User' }}! </h2>
			<p>@lang(config('proton.password_text', 'This is your new password.'))</p>
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
			<h3> @lang(config('proton.regards_title', 'Regards')) </h3>
			<p> @lang(config('proton.regards_text', 'Have a nice day!'))</p>
		</x-proton::td>
	</x-proton::tr>

	<x-proton::tr>
		<x-proton::td>
			<x-proton::divider />

			<center>
				<span style="color: #706d6b;"> © @lang(config('proton.rights', '2023 Proton Email')) </span>
			</center>

			<br />

			<x-proton::flex>
				<a href="" class="proton-link proton-social-link" target="_blank">
					<img src="https://raw.githubusercontent.com/atomjoy/proton/main/public/social/facebook.png" alt="Image">
				</a>

				<a href="" class="proton-link proton-social-link" target="_blank">
					<img src="https://raw.githubusercontent.com/atomjoy/proton/main/public/social/twitter.png" alt="Image">
				</a>

				<a href="" class="proton-link proton-social-link" target="_blank">
					<img src="https://raw.githubusercontent.com/atomjoy/proton/main/public/social/instagram.png" alt="Image">
				</a>

				<a href="" class="proton-link proton-social-link" target="_blank">
					<img src="https://raw.githubusercontent.com/atomjoy/proton/main/public/social/tiktok.png" alt="Image">
				</a>
			</x-proton::flex>

			<x-proton::margin />
		</x-proton::td>
	</x-proton::tr>
</x-proton::email>