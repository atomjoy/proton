{{--
<x-proton.row colspan="10">
	<p> Table row content </p>
</x-proton.row>
--}}
<x-proton::tr>
	<x-proton::td class="{{ $class ?? '' }}" colspan="{{ $colspan ?? 10 }}" style="{{ $style ?? '' }}">
		{{ $slot }}
	</x-proton::td>
</x-proton::tr>