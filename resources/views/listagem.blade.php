<!DOCTYPE html>
<html>
    <head>
        <title>Tutorial - Filtragem de Dados</title>
        <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
        <script type="text/javascript" src="{{ asset('/js/app.js') }}"></script>
    </head>
    
    <body>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Tutorial</a>
                </div>
            </div>
        </nav>

        <div class="container">
            
            <div class="col-md-6 col-md-offset-3 form-group form-horizontal">
                <input type="text" class="form-control" id="campo_busca" placeholder="Digite o valor que deseja aqui">
            </div>

            <div class="row">
                <table class="table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nome</th>
                            <th>UF</th>
                        </tr>
                    </thead>
                    <tbody id="corpo_tabela">
                        @foreach($estados as $est)
                            <tr>
                                <td> {{ $est->id }} </td>
                                <td> {{ $est->nome }} </td>
                                <td> {{ $est->uf }} </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>  
        </div>

        <script type="text/javascript">
            $("#campo_busca").keyup(function () {
                var linhasTabela = $("#corpo_tabela").find("tr").hide();

                if (this.value.length) {
                    var palavrasChaveBusca = this.value.split(" ");
                    $.each(palavrasChaveBusca, function (indice, palavra) {
                        linhasTabela.filter(":contains('" + palavra + "')").show();
                    });
                } else {
                    linhasTabela.show();
                }
            });
        </script>

    </body>
</html>

