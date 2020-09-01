
function nomeVazio(){
	
	var nome = document.getElementById('nome').value;
	
	if(nome == ''){
		alert('Nos diga o seu Nome:!');
		return false;
		
	}
	else{
		alert('Beleza então ' + nome + ',' + despedida + '!');
		return true;
	}
}

function verifica(){

	function mensagem(){
		var name=confirm("Pressione um botão.")
		if (name==true){
			document.write("Você pressionou o botão OK!")
		}else{
			document.write("Você pressionou o botão CANCELAR")
	}
}

}
function ClickBotao(){
    
    //document.getElementById("abrirModal").click();
	//document.getElementById('search').click();

} 
function aceitar1(){ /* funcao para liberar botoes do frcompraplanos */
//	document.getElementById("myCheckAceito").checked = true;
//	alert('tem que marcar a caixa box');
	
	var a = 1;
 
	var ax = document.getElementById("myCheckAceito").checked;
		/*sessionStorage.setItem("SessaAberta", a);
		console.log(a);*/
	document.getElementById('pla').style.display = "none";
	document.getElementById('plac').style.display = "none";
	document.getElementById('plad').style.display = "none";
			
	if(	ax == false){
		alert('tem que marcar a caixa box');
	
	
	}else{
		
		document.getElementById('pla').style.display="block";
		document.getElementById('plac').style.display = "block";
		document.getElementById('plad').style.display = "block";
		alert('Botoes liberados');

	  
		/*
		document.getElementById("pla").style['pointer-events'] = 'auto';
		document.getElementById("pla").style.color='blue';

		document.getElementById("plac").style['pointer-events'] = 'auto';
		document.getElementById("plac").style.color='blue';

		document.getElementById("plad").style['pointer-events'] = 'auto';
		document.getElementById("plad").style.color='blue';


		//document.getElementById("myCheckAceito").checked = true;
		//document.getElementById("esquerda").style.display = "flex";
		//document.getElementById("myCheckAceito").checked = false;
		*/
	
		
	} 
	

}


function fechar(){

	close();
	/*
	window.addEventListener("beforeunload", function (e) {

		var confirmationMessage = "quer sair ?";
		(e || window.event).returnValue = confirmationMessage;
		return confirmationMessage;
	  
	  }); */

}


function fecharLAliberar(){ /* FRlistaAliberar */
	
		menubar.visible = false;
		locationbar.visible = false;
		personalbar.visible = false;
		toolbar.visible = false;
	
}

function BtnRepasse(){
	var x = document.getElementById("myCheck").checked;
	
	if(	x == false){
		document.getElementById("myCheck").checked = true;
	}else{
		
		document.getElementById("myCheck").checked = false;
	}

}

function buscacfop(){
	var cf = document.getElementById('cfopdigitado').value ;
	window.location="teste3.html";
	localStorage.setItem('nome', cf );
	var resultdo = cf.substring(0,2); 
	//var checarRepasse = document.getElementById("myCheck").checked;
	//document.getElementById("tabelacfop").style.display = 'none';

/*
	if (cf == ''){
		alert("Preencher o CFOP");
		document.getElementById('cfopdigitado').focus();
		document.getElementById('myInput').value='';
		limpa();
	}else{
	  // document.getElementById('tabelacfop').style.display = 'block';
	  // document.getElementById('myInput').value=cf;
	   localStorage.setItem('nome', cf );
	   window.location="busca.html";
	   document.getElementById('cfopdigitado').value=cf;
	
	}*/
} 

function buscatabela(){
	window.open("html/busca.html");
	// windows.location="C:/xampp/htdocs/projetos_teste/projetos_teste/cfopt/trunk/projetos_teste/templates/html/busca.html"
}

function voltar(){
	close();
	//window.location="indexFF.html";
	//document.getElementById('btn-cfop').onclick();

	// document.getElementById('btn-cfop').disabled=false;
	//document.getElementById("btn-cfop").click();
}

function desbilitarbtn(){

	document.getElementById('btn-cfop').disabled=false;
}

					/* verificar MELHOR A tabela de cfop (AUMENTAR    )   */

var cfop1 = [5101,5102,5103,5104,5105,5106,5109,6101,6102,6103,6104,6105,6106,6107,6108,6109];
var cfop2 = [5401,5402,5403,5405,5408,5409,6401,6402,6403,6404,6408,6409];
var cfopbrinde = [1910,2910,2911,2912,2913,2414,2915,2916,2917,2918,2919,5902,5903,5904,5905,5906,5907,5908,5909,5910,
5911,5912,5913,5914,5915,5916,5917,5918,5919,6910,6911]; /* VERIFICAR MELHOR */
var cfop_comb_lubr =[5651,5652, 5653,5654,5655,5656,5657,6651,6652,6653,6654,6655,6656,6657]

function checarRep(){

	 var cf = document.getElementById('cfopdigitado').value ;
	 var resultdo = cf.substring(0,2); 
	 var checarRepasse = document.getElementById("myCheck").checked;
	// document.getElementById("tabelacfop").style.display = 'none';
	 localStorage.setItem('nome', cf );

	 function ver(){
	
		for(i=0; i< cfop2.length; i++){
			if(cf!=cfop2[i]){
				limpa();
			}
		}
	 }

	 if (cf == ''){
	 	alert("Preencher o CFOP  (Todos os campos em vermelho são de preenchimento obrigatório)");
	 	document.getElementById('cfopdigitado').focus();
	 //	document.getElementById('myInput').value='';
		limpa();
	
	 }else
	 ver();
	
		for(i=0; i < cfop1.length; i++){

			if(cf==cfop1[i]){
				
					limpa();

					document.getElementById('cfopDento').value="5102";
					document.getElementById('cfopFora').value="6102";
					document.getElementById('Pis').value="49";
					document.getElementById('Cofins').value="49"
					pintaverde();
					
					if (checarRepasse === true){
						document.getElementById('csosnDentro').value="101";
						document.getElementById('csosnFora').value="101";
						pintaverde();
						alert("Quando marcado Repasse, o CSOSN : 101 serve só para Danfe, caso tambem use cupom fiscal, consultar um técnico do suporte da BRAIN");
				
						document.getElementById("myCheck").checked=false;
					}else{
						document.getElementById('csosnDentro').value="102";
						document.getElementById('csosnFora').value="102";
						pintaverde();
						document.getElementById("myCheck").checked=false;
						
					}

			}else{
			  console.log("cfop  51 nao encontrado");
			}
			
		}
			
		for(i=0; i< cfop2.length; i++){
			if(cf==cfop2[i]){
				limpa();
				pintaverde();
				document.getElementById("myCheck").checked=false;
				document.getElementById('Pis').value="49";
				document.getElementById('Cofins').value="49"
				document.getElementById('cfopDento').value="5405";
				document.getElementById('cfopFora').value="6404";
				document.getElementById('csosnDentro').value="500";
				document.getElementById('csosnFora').value="500";

			}else{
				console.log("cfop nao encontrado");
			}

		}
		for(i=0; i< cfopbrinde.length; i++){
			if(cf==cfopbrinde[i]){
				limpa();
				pintavermelho();
				alert('Devido o numero grande de variações é preciso consultar o seu escritorio de contabilidade');
			}

		}
		for(i=0; i< cfop_comb_lubr.length; i++){
			if(cf==cfop_comb_lubr[i]){
				
				alert('O CFOP a ser cadastro é para venda a consumidor final; caso for usado para outros fins, consultar a tabela');
				limpa();
				pintaverde();
				document.getElementById("myCheck").checked=false;
				document.getElementById('Pis').value="49";
				document.getElementById('Cofins').value="49"
				document.getElementById('cfopDento').value="5656";
				document.getElementById('cfopFora').value="6656";
				document.getElementById('csosnDentro').value="500";
				document.getElementById('csosnFora').value="500";
			

			}	
		}

function limpa(){
	document.getElementById('cfopdigitado').value="";
	document.getElementById('cfopdigitado').focus();

	document.getElementById('csosnFora').value="";
	document.getElementById('csosnDentro').value="";

 	document.getElementById('cfopDento').value="";
	document.getElementById('cfopFora').value="";
   
    document.getElementById('Pis').value="";
	document.getElementById('Cofins').value=""
	pintavermelho();
	
}
	 
function pintaverde(){
	document.getElementById('cfopDento').style.borderColor = 'green'; //rgb(7, 201, 65);
	document.getElementById('cfopFora').style.borderColor = 'green'; // rgb(7, 201, 65);
	document.getElementById('Pis').style.borderColor = 'green'; //rgb(7, 201, 65);
	document.getElementById('Cofins').style.borderColor = 'green';
	document.getElementById('csosnDentro').style.borderColor = 'green';
	document.getElementById('csosnFora').style.borderColor = 'green';

}
	 
function pintavermelho(){
	document.getElementById('cfopDento').style.borderColor = 'red'; //rgb(7, 201, 65);
	document.getElementById('cfopFora').style.borderColor = 'red'; // rgb(7, 201, 65);
	document.getElementById('Pis').style.borderColor = 'red'; //rgb(7, 201, 65);
	document.getElementById('Cofins').style.borderColor = 'red';
	document.getElementById('csosnDentro').style.borderColor = 'red';
	document.getElementById('csosnFora').style.borderColor = 'red';

}

function confirmar(texto,callback1, callback2){
   var confirmacao = prompt(texto);
    if(confirmacao)
        callback1(); // executa a primeira função de "OK"
    else
        callback2(); // executa a segunda função se "Cancelar"
}
}

$(function(){
	$("#pesquisa1").keyup(function(){

		var pesquisa = $(this).val();
		if(pesquisa != ''){
			var dados = {
				palavra : pesquisa
			
			}
			$.get('FRbusca.php',dados, function(retorna){
				$(".resultado").html(retorna);
			});
	    }else{
			$(".resultado").html('');
		}	
	});

});
/*
function simnao(res){
    var res
    
    if (res == "s") {
		alert(res);
		window.open("FRCompraPlanos.php");
		
    } else {
		window.open("FRlogin.php");
    }
} */

function simnao(res){
  
 switch(res){
	 case "s":
		//window.open("FRCompraPlanos.php");	 
		window.top.location = '/projetoCorrecoes/templates/FRcompraPlanos.php';
        // exit;
		 break;
	 case "n":
		 window.open("FRlogin.php");
		 break;
	 case "a":
		 window.open("index.php");
		 break;
		 
 }

}
/*
function testes(ret){

  var t = ret;
 
  if (t == 's'){
	  t = "variavel sim";
	
  }else{
	  t = "n";
  }
  return t;

} */





function abreModal() {
	$("#exampleModal").modal({
	  show: true
	});
  }


function abrecompra(){
	window.open("FRcompraPlanos.php");
}
function FechaModal(){
	window.open("FRlogin.php");

}



//----------------------------- exemplos diversos 
/*
function confirmar() {
    $( "#dialog-confirm" ).dialog({
      resizable: false,
    /  height: "auto",
      width: 400,
      modal: true,
      buttons: {
        "Yap executa função b": function() {
          $( this ).dialog( "close" );
          funcao_b();
        },
        'Não executa nada': function() {
          $( this ).dialog( "close" );
          console.log('cancelado');
        }
      }
    });
}*/


/*
    function pergunta() {

            if (confirm("Deseja confirmar essa operação?")) {

			  //  return true;
			  alert('aqui');

            } else {

                return false;

            }

        }

// Read more: http://www.linhadecodigo.com.br/artigo/3156/confirm-button-com-javascript.aspx#ixzz6EzTf7EOQ


function createButton()
{
     var btn = document.createElement('BUTTON');
     var lbl = document.createTextNode("CLICK ME");        
     btn.appendChild(lbl);   
     btn.onclick = function()
     {
        window.history.go(0);
     }
     document.body.appendChild(btn);    
}


*/

/*
$(function() {
    /* caixa-confirmacao representa a id onde o caixa de confirmação deve ser criada no html 
    $( "#caixa-confirmacao" ).dialog({
      resizable: false,
      height:140,

      /* 
       * Modal desativa os demais itens da tela, impossibilitando interação com eles,
       * forçando usuário a responder à pergunta da caixa de confirmação
       *
      modal: true,

      /* Os botões que você quer criar 
      buttons: {
        "Sim": function() {
          $( this ).dialog( "close" );
          alert("Você clicou em Sim!");
        },
        "Não": function() {
          $( this ).dialog( "close" );
          alert("Você clicou em Não");
        }
      }
    });
  }); 
*/
     




     
