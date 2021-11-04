var xmlhttp;

function requisicao(url, destino){

    document.querySelector(destino).innerHTML = '<center><img src="assets/img/loading.gif"></center>';

    if(window.XMLHttpRequest){
        xmlhttp = new XMLHttpRequest;
    }

    xmlhttp.onreadystatechange = envioPagina;

    xmlhttp.open('POST', url);
    xmlhttp.send()
}

function envioPagina(){
    if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
        document.querySelector('#container-formulario-agendamento').innerHTML = xmlhttp.responseText;
    }
}


