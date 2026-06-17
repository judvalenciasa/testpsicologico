@extends('layouts.app')


<head>
    <link rel="stylesheet" href="{{ asset('css/pines_table.css') }}">
</head>

@section('title', 'Listado de Pines')

@section('content')
@php
    $query = request()->except('_token');
    $sortUrl = function (string $field) use ($query, $filters) {
        $direction = $filters['sort'] === $field && $filters['direction'] === 'asc' ? 'desc' : 'asc';

        return route('pines.index', array_merge($query, [
            'sort' => $field,
            'direction' => $direction,
        ]));
    };
    $sortIcon = function (string $field) use ($filters) {
        if ($filters['sort'] !== $field) {
            return '↕';
        }

        return $filters['direction'] === 'asc' ? '↑' : '↓';
    };
@endphp

<section class="pines-page">
    <div class="pines-header">
        <div>
            <h2>Listado de Pines</h2>
            <p>Filtra y ordena los códigos generados para revisar su uso con mayor claridad.</p>
        </div>
        <a href="{{ route('administrator-page') }}" class="btn">Volver a administradores</a>
    </div>

    <form method="GET" action="{{ route('pines.index') }}" class="filters-card">
        <div class="filters-grid">
            <div class="filter-field field-search">
                <label for="search">Buscar</label>
                <input type="search" id="search" name="search" value="{{ $filters['search'] }}" placeholder="Pin o correo del usuario">
            </div>

            <div class="filter-field">
                <label for="asignacion">Asignación</label>
                <select id="asignacion" name="asignacion">
                    <option value="todos" @selected($filters['asignacion'] === 'todos')>Todos</option>
                    <option value="asignados" @selected($filters['asignacion'] === 'asignados')>Asignados</option>
                    <option value="libres" @selected($filters['asignacion'] === 'libres')>Sin asignar</option>
                </select>
            </div>
        </div>

        <input type="hidden" name="sort" value="{{ $filters['sort'] }}">
        <input type="hidden" name="direction" value="{{ $filters['direction'] }}">

        <div class="filters-actions">
            <a href="{{ route('pines.index') }}" class="secondary-btn">Limpiar</a>
            <button type="submit">Aplicar filtros</button>
        </div>
    </form>

    <div class="table-card">
        <table class="table">
            <thead>
                <tr>
                    <th><a href="{{ $sortUrl('pin') }}">Pin <span>{{ $sortIcon('pin') }}</span></a></th>
                    <th><a href="{{ $sortUrl('creacion_fecha') }}">Fecha de creación <span>{{ $sortIcon('creacion_fecha') }}</span></a></th>
                    <th><a href="{{ $sortUrl('usuario') }}">Usuario <span>{{ $sortIcon('usuario') }}</span></a></th>
                </tr>
            </thead>
            <tbody>
                @forelse($pines as $pin)
                <tr>
                    <td class="pin-code">{{ $pin->pin }}</td>
                    <td>{{ $pin->creacion_fecha }}</td>
                    <td>{{ $pin->usuario->email ?? 'Sin asignar' }}</td>
                </tr>
                @empty
                <tr>
                    <td colspan="3" class="empty-state">No hay pines que coincidan con los filtros seleccionados.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>

</section>
@endsection


<script>
    //funcion para cambiar el estado de la lista de pines dependiendo del estado
    function togglePinState(pinId, state) {}
</script>