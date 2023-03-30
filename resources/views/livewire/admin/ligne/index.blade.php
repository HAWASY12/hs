<div>
    <!-- Modal -->
    <div wire:ignore.self class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Suppressionn de Ligne</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form wire:submit.prevent="destroyLigne">
                    <div class="modal-body">
                        <h6>Est-ce que vous confirmez la suppression ?</h6>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                        <button type="submit" class="btn btn-primary">Oui</button>
                    </div>
                </form>

            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            @if (session('message'))
                <div class="alert alert-success">{{ session('message') }}</div>
            @endif
            <div class="card">
                <div class="card-header">
                    <h2>Lignes
                        <a href="{{ url('admin/ligne/create') }}" class="btn btn-primary btn-sm float-end">Ajouter des
                            Lignes</a>
                    </h2>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Depart</th>
                                <th>Destination</th>
                                <th>Heure</th>
                                <th>Prix</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($lignes as $ligne)
                                <tr>
                                    <td>{{ $ligne->id }}</td>
                                    <td>{{ $ligne->depart }}</td>
                                    <td>{{ $ligne->destination }}</td>
                                    <td>{{ $ligne->heure }}</td>
                                    <td>{{ $ligne->prix }}</td>
                                    <td>
                                        <a href="{{ url('admin/ligne/' . $ligne->id . '/edit') }}"
                                            class="btn btn-success">Modifier✏</a>
                                        <a href="#" wire:click="deleteLigne({{ $ligne->id }})"
                                            data-bs-toggle="modal" data-bs-target="#deleteModal"
                                            class="btn btn-danger">Supprimer❌</a>
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                    <div>
                        {{ $lignes->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@push('script')
    <script>
        window.addEventListener('close-modal', event => {
            $('#deleteModal').modal('hide');
        });
    </script> 
@endpush
