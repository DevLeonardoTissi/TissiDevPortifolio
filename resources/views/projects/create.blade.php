<x-layout title="Adicionar projeto">
    <form action="{{ route('projects.store') }}" method="post" enctype="multipart/form-data">
        @csrf

        <div class="col-12 form-floating mb-3 mt-5">
            <input type="text"
                   autofocus
                   class="form-control"
                   id="name"
                   name="name"
                   value="{{old('name')}}"
                   placeholder="nome do projeto">
            <label for="name" class="form-label">Nome do projeto</label>
        </div>


        <div class="col-12 form-floating mb-3 mt-3">
            <textarea name="description" class="form-control" placeholder="Descrição" id="description"
                      style="height: 100px">{{old('description')}}</textarea>
            <label for="description">Descrição</label>
        </div>

        <div class="col-12 form-floating mb-3 mt-3">
            <input type="text"
                   class="form-control"
                   id="technologies"
                   name="technologies"
                   placeholder="Tecnologias utilizadas"
                   value="{{old('technologies')}}">
            <label for="technologies" class="form-label">Tecnologias utilizadas</label>
        </div>

        <div class="col-12 form-floating mb-3 mt-3">
            <input type="url"
                   class="form-control"
                   id="url"
                   name="url"
                   placeholder="Url"
                   value="{{old('url')}} ">
            <label for="url" class="form-label">Url do projeto</label>
        </div>


        <div class="row mb-3">
            <div class="col-12">
                <label for="img" class="form-label">Imagem</label>
                <input type="file"
                       id="img"
                       name="img"
                       class="form-control"
                       accept="image/gif, image/jpeg, image/png">
            </div>
        </div>

        <div class="d-grid gap-2">
            <button type="submit" class="btn btn-success">Adicionar projeto</button>
        </div>


    </form>
</x-layout>
