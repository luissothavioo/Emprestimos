@extends('layout')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow-lg">
                <div class="card-body">
                    <h1 class="text-center mb-4">SIMULADOR DE EMPRÉSTIMOS</h1>
                    <form method="POST" action="{{ route('calcular') }}">
                        @csrf
                        <div class="mb-3">
                            <label for="valor_emprestimo" class="form-label">Valor do Empréstimo</label>
                            <input type="number" step="0.01" class="form-control" id="valor_emprestimo" name="valor_emprestimo" required>
                        </div>
                        <div class="mb-3">
                            <label for="taxa_juros" class="form-label">Taxa de Juros (%)</label>
                            <input type="number" step="0.01" class="form-control" id="taxa_juros" name="taxa_juros" required>
                        </div>
                        <div class="mb-3">
                            <label for="quantidade_parcelas" class="form-label">Quantidade de Parcelas</label>
                            <input type="number" class="form-control" id="quantidade_parcelas" name="quantidade_parcelas" required>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary w-100">Calcular</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
