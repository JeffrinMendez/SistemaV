
@extends("maestra")
@section("titulo", "Agregar cliente")
@section("contenido")
    <div class="row">
        <div class="col-12">
            <h1>Para agreggar un cliente</h1>
            <form method="POST" action="{{route("clientes.store")}}">
                @csrf
                <div class="form-group">
                    <label class="label">Su Nombre</label>
                    <input required autocomplete="off" name="nombre" class="form-control"
                           type="text" placeholder="Nombre">
                </div>
                <div class="form-group">
                    <label class="label">Su Teléfono</label>
                    <input required autocomplete="off" name="telefono" class="form-control"
                           type="text" placeholder="Teléfono">
                </div>

                @include("notificacion")
                <button class="btn btn-success">Guardar</button>
                <a class="btn btn-primary" href="{{route("clientes.index")}}">ir al listado</a>
            </form>
        </div>
    </div>
@endsection
