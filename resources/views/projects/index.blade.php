<x-layout title="Projetos" :successMessage="$successMessage">

    @auth()
        <a href="{{ route('projects.create') }}" class="btn btn-dark mb-2">Adicionar novo projeto</a>
    @endauth

    <div class="row mt-5">
        @foreach($projects as $project)
            <div class="col-md-3 mb-2 ">
                <div class="elevate card shadow">
                    @isset($project->img)
                        <img src="{{ asset('storage/' . $project->img) }}" class="card-img-top"
                             style="max-height: 200px; max-width: 100%;" alt="project image">
                    @endisset

                    <div class="card-body">
                        <h3 class="card-title">{{ $project->name }}</h3>
                        <p class="card-text">{{ $project->description }}.</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item ">{{ str_replace(' ', ' - ', $project->technologies) }}</li>
                    </ul>
                    <div class="card-body">
                        <a href="{{ $project->url }}" class="card-link link-underline link-underline-opacity-0">Link do
                            projeto</a>
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

