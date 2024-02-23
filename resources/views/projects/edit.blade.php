<x-layout title="Editar Projeto '{!! $project->name !!}'">

    <form action="{{ route('projects.update' , $project->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="col-12 form-floating mb-3">
            <input type="text"
                   autofocus
                   class="form-control"
                   id="name"
                   name="name"
                   @isset($project->name) value="{{$project->name}} @endisset"
                   placeholder="nome do projeto">
            <label for="name" class="form-label">Nome do projeto</label>
        </div>


        <div class="col-12 form-floating mb-3 mt-3">
            <textarea name="description" class="form-control" placeholder="Descrição" id="description"
                      style="height: 100px"
            >@isset($project->description){{$project->description}}@endisset</textarea>
            <label for="description">Descrição</label>
        </div>

        <div class="col-12 form-floating mb-3 mt-3">
            <input type="text"
                   class="form-control"
                   id="technologies"
                   name="technologies"
                   placeholder="Tecnologias utilizadas"
                   @isset($project->technologies) value="{{$project->technologies}} @endisset">
            <label for="technologies" class="form-label">Tecnologias utilizadas</label>
        </div>

        <div class="col-12 form-floating mb-3 mt-3">
            <input type="url"
                   class="form-control"
                   id="url"
                   name="url"
                   placeholder="Url"
                   @isset($project->url) value="{{$project->url}} @endisset">
            <label for="url" class="form-label">Url do projeto</label>
        </div>

        <button type="submit" class="btn btn-primary">Editar</button>
    </form>

</x-layout>
