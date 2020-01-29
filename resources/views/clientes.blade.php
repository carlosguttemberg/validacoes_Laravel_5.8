<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro de Cliente</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" rel="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <style>
        body{
            padding: 20px;
        }
    </style>
</head>
<body>
    <main role="main">
        <div class="row">
            <div class="container col-sm-8 offset-md-2">
                <div class="card border">
                    <div class="card-header">
                        <div class="card-title">
                            Cadastro de Cliente
                        </div>
                    </div>
                </div>

                <div class="card-body border">
                    <table class="table table-bordered table-hover" id="tabelaClientes">
                        <thead>
                            <tr>
                                <th>Código</th>
                                <th>Nome</th>
                                <th>Idade</th>
                                <th>Email</th>
                                <th>Endereco</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($clientes as $cliente)
                                <tr>
                                    <td>{{ $cliente->id }}</td>
                                    <td>{{ $cliente->nome }}</td>
                                    <td>{{ $cliente->idade }}</td>
                                    <td>{{ $cliente->email }}</td>
                                    <td>{{ $cliente->endereco }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
    <script src="{{ asset('js/app.js') }}" type="text/javascript"></script>
</body>
</html>