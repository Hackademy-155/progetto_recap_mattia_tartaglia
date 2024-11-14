<x-layout>
    <div class="container-fluid header2">
        <div class="row">
            <div class="col-12 my-5">
                <h2 class="text-center">Contact us</h2>
            </div>
        </div>
        <form class="justify-content-center align-items-center text-center py-5" action="" method="POST">
            <div class="mb-3">
                @csrf
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="nome" class="form-label">Name</label>
                <input type="text" class="form-control" name="user" id="nome">
            </div>
            <div class="icon-link-hover">
                <label for="messaggio">Your request</label>
                <textarea class="form-control" id="messaggio" name="message"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</x-layout>