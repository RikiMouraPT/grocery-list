<x-layout>
    @foreach ($items as $item)
        <x-item :item="$item"/>
    @endforeach

    @if(session('item-added'))
        <script>
            alert("{{ session('item-added') }}");
        </script>
    @endif
    @if(session('list-reset'))
        <script>
            alert("{{ session('list-reset') }}");
        </script>
    @endif
    @if(session('item-removed'))
        <script>
            alert("{{ session('item-removed') }}");
        </script>
    @endif
</x-layout>
