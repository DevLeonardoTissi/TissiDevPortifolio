<x-layout title="Projects" :successMessage="$successMessage">
    <a href="{{route('projects.create')}}" class="btn btn-dark mb-2 ">Adicionar novo projeto</a>
    <div class="row mt-4">
        @foreach($projects as $project)

            <div class="col-md-4 mb-4">
                <div class="card" style="width: 18rem;">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{$project->name}}</h5>
                        <p class="card-text">{{$project->description}}.</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">{{$project->technologies}}</li>
                    </ul>
                    <div class="card-body">
                        <a href="{{$project->url}}" class="card-link">Link do projeto</a>
                    </div>
                </div>
            </div>

        @endforeach
    </div>
</x-layout>

