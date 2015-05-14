$(document).ready(function(e) {
    $('#maisDesc').click(function(e){
		e.preventDefault();
		var $this = $(this);
		if($('#descCurso :not(:first-child)').css('display') == 'none'){
			$('#descCurso :not(:first-child)').slideDown('slow');
			$this.removeClass('mais');
			$this.addClass('menos');
			$this.text('menos');
		} else{
			$('#descCurso :not(:first-child)').slideUp('slow');
			$this.removeClass('menos');
			$this.addClass('mais');
			$this.text('mais');
		}
	})
});




//lolszitos
function countKeywords(obj)
{
    var strText = obj;
    var qdePalavras = 0;
    var vetorPalavras = strText.split(",");
    //qdePalavras = vetorPalavras.length;
    if(strText.length > 0)
    {
        var index = 0;
        console.log("ante loop ------------------------------------------");
    	while(index < vetorPalavras.length)
        {
    		//alert(vetorPalavras[index]);
    		var palavra = vetorPalavras[index].trim()
    		//console.log("while: \""+ vetorPalavras[index]+"\"");
    		console.log("while: \""+ palavra+"\"");
    		
    		//if(vetorPalavras[index] && vetorPalavras[index].length > 0)
    		if(palavra && palavra.length > 0)
    		{
    			qdePalavras++;
    			console.log("sim, tamnho: "+ vetorPalavras[index].length);
    		} else
    		{
    			console.log("não");
    		}
    		index++;
    	}
    } else
    {
    	console.log("A String não é maior que 0");
    }
    $("#keywordsQuantidePalavras").html(qdePalavras);
}
    
$(document).ready(function(e)
{
    //conta caracteres da descrição
    $("#ArtigoDescricao").keydown(function() {
        var caracteres = $(this).val().length;
        $("#caracteres").html(caracteres);
        $("#caractersRestantsArtigoDescricao").html(225 - ($(this).val().length));
    });
    $("#ArtigoDescricao").keyup(function() {
        var caracteres = $(this).val().length;
        $("#caracteres").html(caracteres);
        $("#caractersRestantsArtigoDescricao").html(225 - ($(this).val().length));
    });
    $('#ArtigoDescricao').click(function(){
    	$("#caracteres").html($(this).val().length);
    	$("#caractersRestantsArtigoDescricao").html(225 - ($(this).val().length));
	});  
    
    //conta caracteres de abstract
    $("#ArtigoAbstract").keydown(function() {
        var caracteres = $(this).val().length;
        $("#quantideCaractersArtigoAbstract").html(caracteres);
        $("#caractersRestantesArtigoAbstract").html(160 - ($(this).val().length));
    });
    $("#ArtigoAbstract").keyup(function() {
        var caracteres = $(this).val().length;
        $("#quantideCaractersArtigoAbstract").html(caracteres);
        $("#caractersRestantesArtigoAbstract").html(160 - ($(this).val().length));
    });

    // keywords
    $("#ArtigoKeywords").keydown(function() {
        var caracteres = $(this).val().length;
        $("#quantideCaractersArtigoKeywords").html(caracteres);
        $("#caractersRestantesArtigoKeywords").html(225 - ($(this).val().length));
        countKeywords($(this).val());
    });
    $("#ArtigoKeywords").keyup(function() {
        var caracteres = $(this).val().length;
        $("#quantideCaractersArtigoKeywords").html(caracteres);
        $("#caractersRestantesArtigoKeywords").html(225 - ($(this).val().length));
        countKeywords($(this).val());
    });
});




