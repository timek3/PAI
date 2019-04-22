$(document).ready(function(){
//$('tr:even').css('background','#b2aaaa');
//$('tr:odd').css('background','#f7f0f0');
$('#tabela1 tr:even').css('background','#d45a5a');
$('#tabela1 tr:odd').css('background','#b20000');
$('#tabela1 tr:first').css('background','#aaa');
$('#tabela1 tr:last').css('background','#ddd');
$('#tabela1 tr:eq(3)').css('color','#aca');
$('#tabela1 td:contains("Sól")').css('color','yellow');
$('#widoczny').click(function(){
	$('#obraz').show();
})	;
$('#niewidoczny').click(function(){
	$('#obraz').hide();
})	;
});



