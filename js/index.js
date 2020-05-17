$(function(){
    $("#btn-adicionar-formacao").click(function(e){
        e.preventDefault();

        var linha = '<div>'+
                    '    <div>'+
                    '        <div>'+
                    '            <div>'+
                    '                <input type="text" placeholder="Curso" name="curso[]">'+
                    '            </div>'+
                    '            <div>'+
                    '                <input type="text" placeholder="Instituição" name="instituicao[]">'+
                    '            </div>'+
                    '            <div>'+
                    '                <input type="text" placeholder="Conclusão" name="conclusao[]">'+
                    '            </div>'+
                    '            <div>'+
                    '                <button type="button" title="Remover formação">&times;</button>'+
                    '            </div>'+
                    '        </div>'+
                    '    </div>'+
                    '</div>';
        
        $("#div-formacoes").append(linha);
    });

    $("#btn-adicionar-experiencia").click(function(e){
        e.preventDefault();

        var linha = '<div>'+
                    '    <div>'+
                    '        <div>'+
                    '            <div>'+
                    '                <input type="text" placeholder="Cargo" name="cargo[]">'+
                    '            </div>'+
                    '            <div>'+
                    '                <input type="text" placeholder="Empresa" name="empresa[]">'+
                    '            </div>'+
                    '            <div>'+
                    '                <input type="text" placeholder="Início" name="inicio[]">'+
                    '            </div>'+
                    '            <div>'+
                    '                <input type="text" placeholder="Fim" name="fim[]">'+
                    '            </div>'+
                    '            <div>'+
                    '                <button type="button" title="Remover experiência">&times;</button>'+
                    '            </div>'+
                    '        </div>'+
                    '    </div>'+
                    '</div>';
        
        $("#div-experiencias").append(linha);
    });

    $("#div-formacoes, #div-experiencias").on("click", ".btn-remover-item", function(){
        $(this).parent().parent().parent().parent().remove();
    })
});