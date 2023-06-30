<x-proton::email title="Email" locale="pl">
	<x-slot:style>
		<style>
			.proton-flex img {
				margin: 10px;
				max-width: 15%;
				width: 40px;
			}

			.proton-table tr td {
				padding: 0px 40px;
			}
		</style>
	</x-slot:style>

	<x-proton::tr>
		<x-proton::td>
			<x-proton::margin />

			<center>
				<h1> Welcome {{ auth()->user()?->name ?? '!' }} </h1>
				<img src="https://proton.me/images/social/proton-mail-og.png" alt="Image">
			</center>

			<h2> Confirm email address </h2>
			<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae, architecto minus <a href="https://proton.me">go to site</a> . Placeat sapiente perspiciatis illum corporis earum obcaecati illo mollitia inventore voluptatibus, ipsa, quasi quaerat dolorem commodi labore accusantium
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
			<img src="https://media.cybernews.com/images/featured/2020/09/protonmail-review-1.jpg" alt="Image">
			<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae, architecto minus. Placeat sapiente perspiciatis illum corporis earum obcaecati illo mollitia inventore voluptatibus, ipsa, quasi quaerat dolorem commodi labore accusantium repudiandae!</p>
		</x-proton::td>

		<x-proton::td colspan="3" style="padding-left: 10px;">
			<img src="https://media.cybernews.com/images/featured/2020/09/protonmail-review-1.jpg" alt="Image">
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
			<a href="https://proton.me" class="proton-link">
				<img src="https://media.cybernews.com/images/featured/2020/09/protonmail-review-1.jpg" alt="Image">
			</a>
		</x-slot:slot1>
		<x-slot:slot2>
			<a href="https://proton.me" class="proton-link">
				<img src="https://media.cybernews.com/images/featured/2020/09/protonmail-review-1.jpg" alt="Image">
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
			<a href="https://proton.me" class="proton-link">
				<img src="https://media.cybernews.com/images/featured/2020/09/protonmail-review-1.jpg" alt="Image">
			</a>
		</x-slot:slot1>
		<x-slot:slot2>
			<a href="https://proton.me" class="proton-link">
				<img src="https://media.cybernews.com/images/featured/2020/09/protonmail-review-1.jpg" alt="Image">
			</a>
		</x-slot:slot2>
		<x-slot:slot3>
			<a href="https://proton.me" class="proton-link">
				<img src="https://media.cybernews.com/images/featured/2020/09/protonmail-review-1.jpg" alt="Image">
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
				<span style="color: #706d6b;"> © 2023 Proton Switzerland </span>
			</center>

			<x-proton::flex>
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
			</x-proton::flex>

			<x-proton::margin />
		</x-proton::td>
	</x-proton::tr>
</x-proton::email>