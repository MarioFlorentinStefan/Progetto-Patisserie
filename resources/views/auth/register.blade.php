<x-layout>
    <div class="container-fluid customMargin ">
        <div class="row">
            <div class="flex flex-col items-center justify-center">
                <div class="text-2xl font-bold text-center align-items-center">
                    <h1 class="text-2xl font-bold text-center text-white">Per Favore Registrati per continuare!</h1>
                </div>
            </div>
        </div>
    </div>

     {{-- @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif --}}
    @if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <div class="container d-flex justify-content-center mt-5">
        <div class="card shadow rounded p-4" style="width: 100%; max-width: 600px;">
            <form action="{{route('register')}}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" aria-describedby="Name">
                    
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="email" name="email" aria-describedby="email">
                    
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password">
                </div>
                <div class="mb-3">
                    <label for="passwordConfirmation" class="form-label">Password Confirmation</label>
                    <input type="password" class="form-control" id="passwordConfirmation" name="password_confirmation">
                </div>
                <button type="submit" class="CustomButton">Submit To Register!</button>
            </form>
        </div>
    </div>
</x-layout>