<x-layout>
    <div class="container-fluid customMargin ">
        <div class="row">
            <div class="flex flex-col items-center justify-center">
                <div class="text-2xl font-bold text-center align-items-center">
                    <h1 class="text-2xl font-bold text-center text-white">Per Favore fai il Log-in per continuare!</h1>
                </div>
            </div>
        </div>
    </div>
    
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
        <div class="shadow rounded p-4 customCardForms" >
            <form action="{{route('login')}}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="email" name="email" aria-describedby="email">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password">
                </div>
                <button type="submit" class="customButton">Submit to Log-in!</button>
            </form>
        </div>
    </div>
</x-layout>