{{--
<x-proton.tr>
	<x-proton.td colspan="10">
		<center>
			<div class="title"> Proton </div>
		</center>
	</x-proton.td>
</x-proton.tr>
--}}
<td class="proton-td {{ $class ?? '' }}" colspan="{{ $colspan ?? 10}}" style="{{ $style ?? '' }}">
	{{ $slot }}
</td>