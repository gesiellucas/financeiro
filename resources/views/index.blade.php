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
                        <input type="number" name="quantia" id="quantia" required class="form-control" aria-label="Reais">
                    </div>
                    <div class="d-flex flex-row align-items-center justify-content-between my-3">
                        <button class="btn btn-warning" type="button" id="ganhei">Ganhei</button>
                        <button class="btn btn-danger" type="button" id="gastei">Gastei</button>
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
                
                <tbody id="table-all">
                    
                </tbody>
            </table>
        </div>
    </div>

</div>


@endsection