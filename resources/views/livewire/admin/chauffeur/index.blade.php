<div>
    <!-- Modal -->
    <div wire:ignore.self class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Suppressionn de Chauffeur</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form wire:submit.prevent="destroyChauffeur">
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
                    <h2>Chauffeurs
                        <a href="{{ url('admin/chauffeur/create') }}" class="btn btn-primary btn-sm float-end">Ajouter des
                            Chauffeurs</a>
                    </h2>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Prenom</th>
                                <th>Nom</th>
                                <th>Telephone</th>
                                <th>Adresse</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($chauffeurs as $chauffeur)
                                <tr>
                                    <td>{{ $chauffeur->id }}</td>
                                    <td>{{ $chauffeur->prenom }}</td>
                                    <td>{{ $chauffeur->nom }}</td>
                                    <td>{{ $chauffeur->tel }}</td>
                                    <td>{{ $chauffeur->adresse }}</td>
                                    <td><img src="{{asset('/uploads/chauffeur/'.$chauffeur->image)}}" width="60px" height="60px" alt="">
                                    </td>
                                    <td>
                                        <a href="{{ url('admin/chauffeur/' . $chauffeur->id . '/edit') }}"
                                            class="btn btn-success">Modifier✏</a>
                                        <a href="#" wire:click="deleteChauffeur({{ $chauffeur->id }})"
                                            data-bs-toggle="modal" data-bs-target="#deleteModal"
                                            class="btn btn-danger">Supprimer❌</a>
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                    <div>
                        {{ $chauffeurs->links() }}
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
