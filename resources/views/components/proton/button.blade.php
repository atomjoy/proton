{{--
<x-proton.tr>
	<x-proton.td colspan="10">
		<x-proton.button>
			Confirm Email
		</x-proton.button>
	</x-proton.td>
</x-proton.tr>
--}}
<center>
	<a href="{{ $url ?? 'http://localhost/welcome'}}" class="proton-button">{{ $slot }}</a>
</center>