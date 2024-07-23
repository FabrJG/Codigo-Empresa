@if (session('estado'))
    {{ session('estado') }}
@else
    <form action="{{ route('contacto') }}" method="post">
        @csrf {{-- Token para verificar que el fromulario es seguro --}}
        <tbody>
                            
        </tbody>
    </form>
@endif