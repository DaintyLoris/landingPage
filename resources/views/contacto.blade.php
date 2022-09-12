<!DOCTYPE html>
    <html lang="en">
    <head>

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Contacto</title>
        

    </head>

    <body>

        <h1>Contacto</h1>

        @if($errors->any())
            <div class="alert alert-danger">
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </div>
        @endif

        <form action="/recibe-form-contacto" method="POST">
            @csrf

            <label for="name">Nombre:</label><br>
            <input type="text" name="name" id="name" value="{{ old('name') }}">
            @error('name')
                <i>{{ $message }}</i>
            @enderror
            <br>

            <label for="email">Correo:</label><br>
            <input type="email" name="email" id="email" value="{{ old('email') }}">
            @error('email')
                <i>{{ $message }}</i>
            @enderror
            <br>

            <label for="comentario">Comentario:</label><br>
            <textarea name="comentario" id="comentario" cols="30" rows="10" value="{{ old('comentario') }}">

            </textarea>
            @error('comentario')
                <i>{{ $message }}</i>
            @enderror
            <br>

            <input type="submit" value="UwU">

        </form>
        
        @if(!empty($codigo))
            @if($codigo == 1234)
                <script>
                    document.getElementById("name").value = "Josue";
                    document.getElementById("email").value = "josueanguianoortiz28@gmail.com";
                    document.getElementById("comentario").value = "Hola Este es un comentario agregado!";
                </script>
            @endif
        @endif

    </body>

</html>