<script>
    $(document).ready(function() {

        $('#finalizar').click(function() {
            let compraTotal = $('#compraTotal').val().split(' ');

            if (parseFloat(compraTotal[1]) === 0) {
                Swal.fire({
                    icon: 'info',
                    title: 'Não existe nenhum produto nesta compra !!',
                    confirmButtonColor: '#063970',
                });
            } else {
                $(this).attr('type', 'submit');
                $(this).click();
            }

        });


        $('#addprod').click(function() {
            let cont = 0;
            let idTr = 0;
            $(".prod").each(function(index) {
                idTr = $(this).attr('id');
            });
            cont = parseInt(idTr) + 1;
            $.ajax({
                type: "post",
                url: "{{ route('compra.buscaprod') }}",
                data: {
                    "_token": "{{ csrf_token() }}",
                },
                success: function(data) {
                    let select =
                        `<select class="form-control produtoId" id="produto_id${cont}" onchange="trazValor(${cont});" name="idProduto[]" required>`;
                    select += "<option value=''>Escolha um carro</option>";
                    for (const prod of data) {
                        select += `<option value="${prod.id}">${prod.nome}</option>`;
                    }
                    select += "</select>";
                    $("#prod").append(`<tr class="text-center prod" id="${cont}">\n\
                                            <td class="col-4">${select}</td>\n\
                                            <td class="col-3">\n\
                                                <input type="text" class="form-control" readonly="readonly" value="0" name="valorUnitario[]" id="valor${cont}">\n\
                                            </td>\n\
                                            <td class="col-1">\n\
                                                <input type="number" class="form-control qtd_produto" min="1" value="0" onchange="calcTotal(${cont});" name="quantidade[]" id="qtd${cont}">\n\
                                            </td>\n\
                                            <td class="col-3">\n\
                                                <input type="text" class="form-control valorTotal" readonly="readonly" value="0" name="valorTotal[]" id="valorTotal${cont}">\n\
                                            </td>\n\
                                            <td class="col-1">\n\
                                                <a href="#" onclick="excluirProd(${cont});">\n\
                                                    <i class="fa fa-trash fa-2x text-danger"></i>\n\
                                                </a>\n\
                                            </td>\n\
                                        </tr>`);

                }
            });

        });

    });



    function excluirProd(id) {
        $('#' + id).remove();
        calcTotalGeral();
    }

    function trazValor(id) {
        let produto_id = $(`#produto_id${id} option:selected`).val();
        let produto = 0;
        $(".produtoId").each(function(index) {
            id_produto = $(this).val();
            if (produto_id === id_produto) {
                produto++;
            }
        });

        if (produto >= 2) {
            $(`#produto_id${id}`).val("").change();
            $(`#valor${id}`).val(0);
            $(`#valorTotal${id}`).val(0);
            $(`#qtd${id}`).val(0);
            Swal.fire({
                icon: 'info',
                title: 'Selecione outro produto, este já existe na lista !',
                confirmButtonColor: '#063970',
            });
        } else {
            $.ajax({
                type: "post",
                url: "{{ route('compra.buscapreco') }}",
                data: {
                    "_token": "{{ csrf_token() }}",
                    produto_id
                },
                success: function(produto) {
                    let valorformat = Intl.NumberFormat('de-DE').format(produto.valorVenda);
                    $(`#valor${id}`).val(valorformat);
                    calcTotal(id);
                }
            });

        }

    }

    function calcTotal(id) {

        let produto_id = $(`#produto_id${id}`).val();
        if (produto_id == '') {
            $(`#valor${id}`).val(0);
            $(`#valorTotal${id}`).val(0);
            $(`#qtd${id}`).val(0);
        } else {
            let qtd = parseInt($(`#qtd${id}`).val());

            if (qtd == 0) {
                $(`#qtd${id}`).val(1);
                qtd = 1;
            }
            let valor = $(`#valor${id}`).val();
            valor = valor.replace('.', '');
            valor = valor.replace(',', '.');
            let total = parseFloat(valor * qtd);
            let valorformat = Intl.NumberFormat('de-DE').format(total);

            $(`#valorTotal${id}`).val(valorformat);
            calcTotalGeral();
        }

    }

    function calcTotalGeral() {
        let total = 0.0;
        let qtd_produto = 0;
        $(".valorTotal").each(function(index) {
            let val = $(this).val();
            if (!val.indexOf('.').length) {
                val = val.replace('.', '');
            }

            if (!val.indexOf(',').length) {
                val = val.replace(',', '.');
            }

            total += parseFloat(val);
        });

        $(".qtd_produto").each(function(index) {
            qtd_produto += parseInt($(this).val());
        });

        let valorformat = Intl.NumberFormat('de-DE').format(total);
        $(`#qtd_produto`).val(qtd_produto);
        $(`#compraTotal`).val("R$ " + valorformat);

    }
</script>
