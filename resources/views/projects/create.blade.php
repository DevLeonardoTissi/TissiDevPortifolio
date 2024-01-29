<x-layout title="Adicionar">
    <form action="{{ route('projects.store') }}" method="post" enctype="multipart/form-data">
        @csrf

        <div class="row mb-4">

            <div class="col-12">

                <label for="name" class="form-label">Nome do projeto:</label>
                <input type="text"
                       autofocus
                       class="form-control"
                       id="name"
                       name="name"
                       value="{{old('name')}}">
            </div>

            <div class="col-12 mt-3">

                <label for="description" class="form-label">Descrição:</label>
                <textarea type="text"
                          class="form-control"
                          id="description"
                          name="description" rows="3">
                    {{old('description')}}
                </textarea>
            </div>

            <div class="col-12 mt-3">

                <label for="technologies" class="form-label">Tecnologias utilizadas:</label>
                <input type="text"
                       class="form-control"
                       id="technologies"
                       name="technologies"
                       value="{{old('technologies')}} ">
            </div>

            <div class="col-12 mt-3">

                <label for="url" class="form-label">Url do projeto:</label>
                <input type="url"
                       class="form-control"
                       id="url"
                       name="url"
                       value="{{old('technologies')}} ">
            </div>

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


        <button type="submit" class="btn btn-primary">Criar</button>
    </form>
</x-layout>
