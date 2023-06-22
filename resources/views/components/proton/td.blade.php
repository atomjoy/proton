{{--
<x-proton.tr>
	<x-proton.td colspan="10">
		<center>
			<div class="title"> Proton </div>
		</center>
	</x-proton.td>
</x-proton.tr>
--}}
<td class="proton-td" colspan="{{ $colspan ?? 10}}">
	{{ $slot }}
</td>