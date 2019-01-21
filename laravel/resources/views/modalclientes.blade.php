<html>
<head>
    <title>Cadastro de Cliente</title>
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">
    <meta name="csrf-token" content="{{ csrf_token()}}">
    <style>
        body {padding: 30px;}
    </style>
</head>
<body>
    <main role="main">
        <div class="row">
            <div class="container col-md-8 offset-md-2">
                <div class="card border">
                    <div class="card-header">
                        <div class="card-title">Cadastro de Cliente</div>
                    </div>
                    <div class="card-body">
                        <form action="/cadastrocliente" method="POST">
                            @csrf

                            <div class="form-group">

                                <label for="nomecliente">Nome do Cliente</label>
                                <input type="text" id="nomecliente" 
                                class="form-control {{ $errors->has('nome') ? 'is-invalid' : ''}}" 
                                name="nome">

                                @if($errors->has('nome'))
                                    <div class="invalid-feedback"> {{$errors->first('nome')}} </div>
                                @endif

                            </div>

                            <div class="form-group">

                                <label for="idade">Idade do Cliente</label>
                                <input type="number" id="idade" class="form-control {{ $errors->has('idade') ? 'is-invalid' : ''}}" name="idade">

                                @if($errors->has('idade'))
                                    <div class="invalid-feedback"> {{$errors->first('idade')}} </div>
                                @endif

                            </div>

                            <div class="form-group">

                                <label for="endereco">Endereco do Cliente</label>
                                <input type="text" id="endereco" class="form-control {{ $errors->has('endereco') ? 'is-invalid' : ''}}" name="endereco">

                                @if($errors->has('endereco'))
                                    <div class="invalid-feedback"> {{$errors->first('endereco')}} </div>
                                @endif

                            </div>

                            <div class="form-group">

                                <label for="email">Email do Cliente</label>
                                <input type="text" id="email" class="form-control {{ $errors->has('email') ? 'is-invalid' : ''}}" name="email">

                                @if($errors->has('endereco'))
                                    <div class="invalid-feedback"> {{$errors->first('email')}} </div>
                                @endif

                            </div>

                            <button type="submit" class="btn btn-primary btn-sm">Salvar</button> 
                            <button type="submit" class="btn btn-primary btn-sm">Cancelar</button> 
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script src="{{ asset('js/app.js')}}" type="text/javasript"></script>
</body>

</html>