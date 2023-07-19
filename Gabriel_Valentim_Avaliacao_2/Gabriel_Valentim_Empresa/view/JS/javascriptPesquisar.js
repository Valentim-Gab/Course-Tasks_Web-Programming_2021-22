$(function(){
	$('#pesquisa').keyup(function(){
		var pesquisa = $(this).val();

		if (pesquisa != '') {
			var dados = {
				palavra : pesquisa
			}
			$.post('../../control/busca.php', dados, function(retorna){
				$('.resultadoPesquisa').html(retorna);
			});
		} else {
			var dados = {
				palavra: "tudo"
			}
			$.post('../../control/busca.php', dados, function(retorna){
				$('.resultadoPesquisa').html(retorna);
			});
		}
	});
}); 