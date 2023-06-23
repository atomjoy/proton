{{--
<x-proton.row2>
	<x-slot:slot1>
		<p> Table row content </p>
	</x-slot:slot1>
	<x-slot:slot2>
		<p> Table row content </p>
	</x-slot:slot2>
</x-proton.row2>
--}}
<x-proton.tr>
	<x-proton.td colspan="" style="padding-right: 10px;">
		{{ $slot1 }}
	</x-proton.td>
	<x-proton.td colspan="" style="padding-left: 10px;">
		{{ $slot2 }}
	</x-proton.td>
</x-proton.tr>