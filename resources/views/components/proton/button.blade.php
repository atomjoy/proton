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
	<a href="{{ $url ?? request()->getSchemeAndHttpHost() }}" class="proton-button" target="_blank">{{ $slot }}</a>
</center>