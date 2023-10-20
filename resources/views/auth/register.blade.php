<x-layout>
    <div class="container">
        <h1 class="text-center">Registrati qui:</h1>
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form method="POST" action="/register">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Username:</label>
            <input name='name' type="text" class="form-control" id="name">
          </div>
         
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Email:</label>
          <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Password:</label>
          <input name='password' type="password" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword2" class="form-label">Conferma Password:</label>
            <input name='password_confirmation' type="password" class="form-control" id="exampleInputPassword2">
          </div>
        
           
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
</x-layout>