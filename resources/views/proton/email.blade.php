<x-proton.email title="Email" locale="pl">
	<x-slot:style>
		<style>
			.proton-flex {
				/* justify-content: space-between !important; */
			}

			.proton-flex img {
				margin: 10px;
				max-width: 15%;
				width: 40px;
			}
		</style>
	</x-slot:style>

	<x-proton.tr>
		<x-proton.td>
			<center>
				<h1> Welcome {{ auth()->user()?->name ?? '!' }} </h1>
				<img src="https://proton.me/images/social/proton-mail-og.png" alt="Image">
			</center>

			<h2> Confirm email address </h2>
			<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae, architecto minus <a href="http://google.pl">go to site</a> . Placeat sapiente perspiciatis illum corporis earum obcaecati illo mollitia inventore voluptatibus, ipsa, quasi quaerat dolorem commodi labore accusantium
				repudiandae!</p>
		</x-proton.td>
	</x-proton.tr>

	<x-proton.tr>
		<x-proton.td>
			<x-proton.button url="http://localhost">
				Confirm Email
			</x-proton.button>
		</x-proton.td>
	</x-proton.tr>

	<x-proton.tr>
		<x-proton.td>
			<h2> Secret code </h2>
			<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae, architecto minus accusantium repudiandae!</p>

			<x-proton.code>
				KLE-6677-HJS-7866
			</x-proton.code>
		</x-proton.td>
	</x-proton.tr>

	<x-proton.tr>
		<x-proton.td>
			<h2> About company </h2>
			<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae, architecto minus. Placeat sapiente perspiciatis illum corporis earum obcaecati illo mollitia inventore voluptatibus, ipsa, quasi quaerat dolorem commodi labore accusantium repudiandae!</p>
		</x-proton.td>
	</x-proton.tr>

	<x-proton.tr>
		<x-proton.td>
			<h2> Current promotions </h2>
		</x-proton.td>
	</x-proton.tr>

	<x-proton.tr>
		<x-proton.td colspan="">
			<img src="https://media.cybernews.com/images/featured/2020/09/protonmail-review-1.jpg" alt="Image">
			<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae, architecto minus. Placeat sapiente perspiciatis illum corporis earum obcaecati illo mollitia inventore voluptatibus, ipsa, quasi quaerat dolorem commodi labore accusantium repudiandae!</p>
		</x-proton.td>

		<x-proton.td colspan="">
			<img src="https://media.cybernews.com/images/featured/2020/09/protonmail-review-1.jpg" alt="Image">
			<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae, architecto minus. Placeat sapiente perspiciatis illum corporis earum obcaecati illo mollitia inventore voluptatibus, ipsa, quasi quaerat dolorem commodi labore accusantium repudiandae!</p>
		</x-proton.td>
	</x-proton.tr>

	<x-proton.tr>
		<x-proton.td>
			<h3> Regards </h3>
			<p>Alex, <br /> Have a nice day!</p>
		</x-proton.td>
	</x-proton.tr>

	<x-proton.tr>
		<x-proton.td>
			<x-proton.divider />

			<center>
				<span style="color: #706d6b;"> © 2023 Proton Switzerland </span>
			</center>

			<x-proton.flex>
				<a href="http://google.pl">
					<img src="https://proton.me/static/e275bc24286d55a130181bafbe549119/proton-mail-icon-alone.svg" alt="Image">
				</a>

				<a href="http://google.pl">
					<img src="https://proton.me/static/a5839bdbc4a95548bbe2945727a06f4c/proton-calendar-icon-alone.svg" alt="Image">
				</a>

				<a href="http://google.pl">
					<img src="https://proton.me/static/3e9b321066f0ab40915402c0347fb51f/proton-drive-icon-alone.svg" alt="Image">
				</a>

				<a href="http://google.pl">
					<img src="https://proton.me/static/fc1a13db1762e73ad64439d5cc3d348b/proton-vpn-icon-alone.svg" alt="Image">
				</a>
			</x-proton.flex>
		</x-proton.td>
	</x-proton.tr>
</x-proton.email>