<x-layout titulo="Listado de Proyectos">
    <ul>
        @foreach ($proyectos as $proyecto)
            <li>
                    {{ $proyecto['nombre'] }}
            </li>
        @endforeach
    </ul>
</x-layout>