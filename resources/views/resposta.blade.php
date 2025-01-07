@extends('layout')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-lg">
                <div class="card-body">
                    <h1 class="text-center mb-4">Resultado do Empréstimo</h1>
                    <p class="lead text-center">Valor do Empréstimo: <strong>R$ {{ number_format($emprestimo, 2) }}</strong></p>
                    <table class="table table-bordered table-striped table-hover">
                        <thead>
                            <tr>
                                <th>Parcela</th>
                                <th>Valor Atualizado</th>
                                <th>Juros</th>
                                <th>Valor da Parcela</th>
                                <th>Restante</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($resultados as $resultado)
                            <tr>
                                <td>{{ $resultado['parcela'] }}</td>
                                <td>R$ {{ $resultado['valor_atualizado'] }}</td>
                                <td>R$ {{ $resultado['juros'] }}</td>
                                <td>R$ {{ $resultado['valor_parcela'] }}</td>
                                <td>R$ {{ $resultado['restante'] }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <p class="lead text-center mt-3">Total Pago: <strong>R$ {{ $totalPago }}</strong></p>
                    <div class="text-center mt-4">
                        <button onclick="window.location.href='/';" type="button" class="btn btn-lg btn-primary w-100">Voltar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
