<x-proton::email title="Email" locale="pl">
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
			<img src="https://raw.githubusercontent.com/atomjoy/proton/main/public/proton-default.png" alt="Image">
		</center>

		<h2> Welcome {{ auth()->user()?->name ?? 'Alex' }}! </h2>
		<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae, architecto minus <a href="">go to site</a> . Placeat sapiente perspiciatis illum corporis earum obcaecati illo mollitia inventore voluptatibus, ipsa, quasi quaerat dolorem commodi labore accusantium
			repudiandae!</p>
	</x-proton::row>

	<x-proton::row>
		<x-proton::button url="http://localhost">
			Confirm Email
		</x-proton::button>
	</x-proton::row>

	<x-proton::row>
		<h2> Secret code </h2>
		<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae, architecto minus accusantium repudiandae!</p>

		<x-proton::code>
			KLE-6677-HJS-7866
		</x-proton::code>
	</x-proton::row>

	<x-proton::row>
		<h2> About company </h2>
		<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae, architecto minus. Placeat sapiente perspiciatis illum corporis earum obcaecati illo mollitia inventore voluptatibus, ipsa, quasi quaerat dolorem commodi labore accusantium repudiandae!</p>
	</x-proton::row>

	<x-proton::row>
		<h2> Current promotions </h2>
	</x-proton::row>

	<x-proton::row2>
		<x-slot:slot1>
			<img src="https://raw.githubusercontent.com/atomjoy/proton/main/public/proton-default.png" alt="Image">
			<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae, architecto minus. Placeat sapiente perspiciatis illum corporis earum obcaecati illo mollitia inventore voluptatibus, ipsa, quasi quaerat dolorem commodi labore accusantium repudiandae!</p>
		</x-slot:slot1>
		<x-slot:slot2>
			<img src="https://raw.githubusercontent.com/atomjoy/proton/main/public/proton-default.png" alt="Image">
			<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae, architecto minus. Placeat sapiente perspiciatis illum corporis earum obcaecati illo mollitia inventore voluptatibus, ipsa, quasi quaerat dolorem commodi labore accusantium repudiandae!</p>
		</x-slot:slot2>
	</x-proton::row2>

	<x-proton::row>
		<h2> Gallery </h2>
	</x-proton::row>

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

	<x-proton::row>
		<h2> Links </h2>
	</x-proton::row>

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

	<x-proton::row>
		<br />
		<h3> Regards </h3>
		<p>Alex, <br /> Have a nice day!</p>
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