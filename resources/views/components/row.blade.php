{{--
<x-proton.row colspan="10">
	<p> Table row content </p>
</x-proton.row>
--}}
<x-proton::tr>
	<x-proton::td colspan="100">
		{{ $slot }}
	</x-proton::td>
</x-proton::tr>