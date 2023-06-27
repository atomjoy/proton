{{--
<x-proton.row3>
	<x-slot:slot1>
		<p> Table row content </p>
	</x-slot:slot1>
	<x-slot:slot2>
		<p> Table row content </p>
	</x-slot:slot2>
	<x-slot:slot3>
		<p> Table row content </p>
	</x-slot:slot3>
</x-proton.row3>
--}}
<x-proton::tr>
	<x-proton::td colspan="2" style="padding-right: 5px;  width: 33%;">
		{{ $slot1 }}
	</x-proton::td>
	<x-proton::td colspan="2" style="padding-left: 5px; padding-right: 5px;  width: 28%;">
		{{ $slot2 }}
	</x-proton::td>
	<x-proton::td colspan="2" style="padding-left: 5px;  width: 33%;">
		{{ $slot3 }}
	</x-proton::td>
</x-proton::tr>