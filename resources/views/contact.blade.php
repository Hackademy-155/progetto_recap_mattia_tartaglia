<x-layout>
    <div class="container my-5">
        <div class="row">
            <div class="col-12">
                <h2 class="text-center">Contattataci</h2>
            </div>
        </div>
    </div>
    <div class="container my-5">
        <div class="row">
            <div class="col-12 col-md-6">
                <form action="{{route('contact.submit')}}" method="">
                    @if (session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label">Titolo</label>
                        <input type="text" class="form-control" id="title" name="title">
                    </div>
                    <div class="mb-3">
                        <label for="director" class="form-label">Regista</label>
                        <input type="text" class="form-control" id="director" name="director">
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Plot</label>
                        <textarea name="description" class="form-control" id="description"></textarea>
                    </div>
                    <button type="submit" class="btn btn-dark">Invia</button>
                </form>
            </div>
        </div>
    </div>
</x-layout>