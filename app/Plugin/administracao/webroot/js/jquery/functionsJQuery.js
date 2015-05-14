        function carregaCat2aF()
        {
        //alert('aqui carregaEstadoF');
        var valor = $("[id=Cat1a]").val();
        $.post("/administracao/produtos/retAjaxSelect",
            {tipo:valor},
            // Carregamos o resultado acima para o campo 
            function(valor)
            {
                $("select[id=Cat2a]").html(valor);
            })
         } // function carregaCat2aF
         
         
    $(document).ready(function()
    {
        // Evento change no campo ...  
        $("select[id=Cat1a]").change(function()
        {
            $.post("/administracao/cat2as/retAjaxSelect",
                  {tipo:$(this).val()},
                        function(valor)
                        {
                        $("select[id=Cat2a]").html(valor);
                        //alert('no rumo, fim');
                  }
            );
            $("div[class=boxAjaxInputs]").html("Aguarde..."); //caracacteristicas ligadas a categoria principal 
            $.post("/administracao/cat1as/retAjaxcamposCaracteristicasCat1",
                  {id:$(this).val()}, // $(this).val() // paga o valor do list box selecionado
                        function(valor)
                        {
                        //$("div[class=boxAjax]").append(valor);
                        $("div[class=boxAjaxInputs]").html(valor);
                        //alert('no rumo, fim');
                  }
             );
         });  
    });     
