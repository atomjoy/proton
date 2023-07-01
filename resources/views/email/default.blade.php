<x-proton::email title="Email" locale="pl">
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
				<img src="https://raw.githubusercontent.com/atomjoy/proton/main/public/proton-default.png" alt="Image">
			</center>

			<h2> Welcome {{ auth()->user()?->name ?? 'Alex' }}! </h2>
			<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae, architecto minus <a href="">go to site</a> . Placeat sapiente perspiciatis illum corporis earum obcaecati illo mollitia inventore voluptatibus, ipsa, quasi quaerat dolorem commodi labore accusantium
				repudiandae!</p>
		</x-proton::td>
	</x-proton::tr>

	<x-proton::tr>
		<x-proton::td>
			<x-proton::button url="http://localhost">
				Confirm Email
			</x-proton::button>
		</x-proton::td>
	</x-proton::tr>

	<x-proton::tr>
		<x-proton::td>
			<h2> Secret code </h2>
			<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae, architecto minus accusantium repudiandae!</p>

			<x-proton::code>
				KLE-6677-HJS-7866
			</x-proton::code>
		</x-proton::td>
	</x-proton::tr>

	<x-proton::tr>
		<x-proton::td>
			<h2> About company </h2>
			<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae, architecto minus. Placeat sapiente perspiciatis illum corporis earum obcaecati illo mollitia inventore voluptatibus, ipsa, quasi quaerat dolorem commodi labore accusantium repudiandae!</p>
		</x-proton::td>
	</x-proton::tr>

	<x-proton::tr>
		<x-proton::td>
			<h2> Current promotions </h2>
		</x-proton::td>
	</x-proton::tr>

	<x-proton::tr>
		<x-proton::td colspan="3" style="padding-right: 10px;">
			<img src="https://raw.githubusercontent.com/atomjoy/proton/main/public/proton-default.png" alt="Image">
			<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae, architecto minus. Placeat sapiente perspiciatis illum corporis earum obcaecati illo mollitia inventore voluptatibus, ipsa, quasi quaerat dolorem commodi labore accusantium repudiandae!</p>
		</x-proton::td>

		<x-proton::td colspan="3" style="padding-left: 10px;">
			<img src="https://raw.githubusercontent.com/atomjoy/proton/main/public/proton-default.png" alt="Image">
			<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae, architecto minus. Placeat sapiente perspiciatis illum corporis earum obcaecati illo mollitia inventore voluptatibus, ipsa, quasi quaerat dolorem commodi labore accusantium repudiandae!</p>
		</x-proton::td>
	</x-proton::tr>

	<x-proton::tr>
		<x-proton::td>
			<h2> Gallery </h2>
		</x-proton::td>
	</x-proton::tr>

	<x-proton::row2>
		<x-slot:slot1>
			<a href="" class="proton-link" target="_blank">
				<img src="https://raw.githubusercontent.com/atomjoy/proton/main/public/proton-default.png" alt="Image">
			</a>
		</x-slot:slot1>
		<x-slot:slot2>
			<a href="" class="proton-link" target="_blank">
				<img src="https://raw.githubusercontent.com/atomjoy/proton/main/public/proton-default.png" alt="Image">
			</a>
		</x-slot:slot2>
	</x-proton::row2>

	<x-proton::row2>
		<x-slot:slot1>
			<a href="" class="proton-link" target="_blank">
				<img src="https://raw.githubusercontent.com/atomjoy/proton/main/public/proton-default.png" alt="Image">
			</a>
		</x-slot:slot1>
		<x-slot:slot2>
			<a href="" class="proton-link" target="_blank">
				<img src="https://raw.githubusercontent.com/atomjoy/proton/main/public/proton-default.png" alt="Image">
			</a>
		</x-slot:slot2>
	</x-proton::row2>

	<x-proton::tr>
		<x-proton::td>
			<h2> Links </h2>
		</x-proton::td>
	</x-proton::tr>

	<x-proton::row3>
		<x-slot:slot1>
			<a href="" class="proton-link" target="_blank">
				<img src="https://raw.githubusercontent.com/atomjoy/proton/main/public/proton-default.png" alt="Image">
			</a>
		</x-slot:slot1>
		<x-slot:slot2>
			<a href="" class="proton-link" target="_blank">
				<img src="https://raw.githubusercontent.com/atomjoy/proton/main/public/proton-default.png" alt="Image">
			</a>
		</x-slot:slot2>
		<x-slot:slot3>
			<a href="" class="proton-link" target="_blank">
				<img src="https://raw.githubusercontent.com/atomjoy/proton/main/public/proton-default.png" alt="Image">
			</a>
		</x-slot:slot3>
	</x-proton::row3>

	<x-proton::tr>
		<x-proton::td>
			<br />
			<h3> Regards </h3>
			<p>Alex, <br /> Have a nice day!</p>
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