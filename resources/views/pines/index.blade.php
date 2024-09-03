@extends('layouts.app')

@section('title', 'Listado de Pines')

@section('content')
<div class="container">
    <h2>Listado de Pines</h2>
    <table class="table">
        <thead>
            <tr>
                <th><input type="checkbox" id="selectAll"></th>
                <th>Pin</th>
                <th>Fecha de Creación</th>
                <th>Fecha de Expiración</th>
                <th>Estado</th>
                <th>Usuario</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pines as $pin)
            <tr>
                <td><input type="checkbox" class="pin-checkbox" data-pin-id="{{ $pin->id_pin }}" {{ $pin->estado == 1 ? 'checked' : '' }}></td>
                <td>{{ $pin->pin }}</td>
                <td>{{ $pin->creacion_fecha }}</td>
                <td>{{ $pin->fecha_expiracion }}</td>
                <td>
                    {{ $pin->estado == 1 ? 'Activo' : 'Inactivo' }}
                </td>
                <td>{{ $pin->usuario->email ?? 'Sin asignar' }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<script>
    document.getElementById('selectAll').addEventListener('click', function(event) {
        const checkboxes = document.querySelectorAll('.pin-checkbox');
        checkboxes.forEach(checkbox => {
            checkbox.checked = event.target.checked;
            togglePinState(checkbox.dataset.pinId, checkbox.checked);
        });
    });

    document.querySelectorAll('.pin-checkbox').forEach(checkbox => {
        checkbox.addEventListener('change', function(event) {
            togglePinState(event.target.dataset.pinId, event.target.checked);
        });
    });

    function togglePinState(pinId, state) {
        fetch(`/api/pines/cambiar/${pinId}`, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({
                estado: state ? 1 : 0
            })
        }).then(response => response.json())
          .then(data => {
              if (data.success) {
                  console.log('Estado actualizado');
              } else {
                  console.error('Error al actualizar el estado');
              }
          });
    }
</script>
@endsection
