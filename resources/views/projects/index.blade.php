<x-layout title="Projects" :successMessage="$successMessage">
    @auth()
    <a href="{{ route('projects.create') }}" class="btn btn-dark mb-2">Adicionar novo projeto</a>
    @endauth

    <div class="row mt-4">
        @foreach($projects as $project)
            <div class="col-md-4 mb-4">
                <div class="card">
                    @isset($project->img)
                        <img src="{{ asset('storage/' . $project->img) }}" class="card-img-top"
                             style="max-height: 200px; max-width: 100%;" alt="project image">
                    @endisset

                    <div class="card-body">
                        <h5 class="card-title">{{ $project->name }}</h5>
                        <p class="card-text">{{ $project->description }}.</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">{{ $project->technologies }}</li>
                    </ul>
                    <div class="card-body">
                        <a href="{{ $project->url }}" class="card-link">Link do projeto</a>
                    </div>

                    @auth()
                        <div class="card-body border-top d-flex justify-content-center">
                            <a href="{{ route('projects.edit', $project->id) }}" class="btn btn-primary m-2">Editar</a>
                            <form action="{{ route('projects.destroy', $project->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger m-2">Excluir</button>
                            </form>
                        </div>
                    @endauth
                </div>
            </div>
        @endforeach

    </div>
</x-layout>
