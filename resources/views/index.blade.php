@extends('layouts.app')

@section('content')
<div class="container">
    <div class="d-flex mx-auto justify-content-center">
        <form action="" method="POST" enctype="multipart/form-data">
            @csrf 
            <div class="row justify-content-center d-flex">
                <h2 class="text-center fs-1 fw-bolder">Financeiro</h2>
                <div class="col-12 col-md-8">
                    <div class="input-group">
                        <span class="input-group-text">R$</span>
                        <input type="number" class="form-control" aria-label="Reais">
                    </div>
                    <div class="d-flex flex-row align-items-center justify-content-between my-3">
                        <button class="btn btn-warning">Ganhei</button>
                        <button class="btn btn-danger">Gastei</button>
                    </div>
                </div>
            </div>
            
        </form>
    </div>

    <div class="row justify-content-center">
        <div class="col-12 col-md-8">
            <table class="table table-striped mx-auto">
                <thead>
                    <tr>
                        <td>Ação</td>
                        <td>Valor</td>
                        <td>Data</td>
                    </tr>
                </thead>
                
                <tbody>
                    <tr>
                        <td>Adicionado</td>
                        <td>R$ 00.00</td>
                        <td>27/02/2022 18:00</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

</div>


@endsection