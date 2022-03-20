$(document).ready(function(){
    exibirtudo();

    $('#quantia').on('change', ()=>{
        if($("#quantia").val() != ''){
            $('#ganhei').on('click', ()=>{
                $.ajax({
                    url:'/adicionarquantia',
                    data: 'json',
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    data: {
                        valor: $('#quantia').val()
                    },
                    success: data => {
                        if(data){
                            exibirtudo();
                        }
                    },
                    error: (x, l, v) => {
                        alert('Algo não deu certo');
                    }
                })
            });
        
        
            $('#gastei').on('click', ()=>{
                $.ajax({
                    url:'/adicionargasto',
                    data: 'json',
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    data: {
                        valor: $('#quantia').val()
                    },
                    success: data => {
                        if(data){
                            exibirtudo();
                        }
                    },
                    error: (x, l, v) => {
                        alert('Algo não deu certo');
                    }
                });
            });

        }
        

    });


    
});

function exibirtudo()
{
    $.ajax({
        url: '/exibirtudo',
        data: 'json',
        dataType:'json',
        method: 'GET',
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        data: {
            id: 2
        },
        success: data => {
            $('#table-all').empty();
            if(data){
                data.map( function(j){
                    $('#table-all').append(`
                    <tr>
                        <td>${j.desc}</td>
                        <td>R$ ${j.valor}</td>
                        <td>12/09/2022</td>
                        <td><a href="#" onclick="javascript:removerItem(${j.id})" type="button" ><i class="fas fa-trash-alt"></i></a></td>
                    </tr>
                    `);
                    
                })
            }
        },
    })
}

function removerItem(id) {
    $.ajax({
        url: '/removeritem',
        data: {
            id: id
        },
        dataType:'json',
        method: 'POST',
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success: data => {
            if (data == 1) {
                exibirtudo()
            };
        },
        error: (x, y, z) => {
            throw new Error('Deu erro');
        }
    })
}

