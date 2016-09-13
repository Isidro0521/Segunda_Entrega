var xhr;
function crearObject(){
    if(window.ActiveXObject){
        xhr = new ActiveXObject("Microsoft.XMLHttp");
    }else if((window.XMLHttpRequest)|| (typeofXMLHttpRequest) != undefined){
        xhr = new XMLHttpRequest();
    }else{
        alert("Su navegador no soporta AJAX");
        return;
    }
}

function nameBase(){
	crearObject();
	txtNameBD = document.getElementById('name_BD').value;
	//alert(txtNameBD);
    xhr.open("GET","proceso.php?BDusuario="+txtNameBD,true);           
    xhr.onreadystatechange=verificaDetalle5001;
    xhr.send(null);
}                  
function verificaDetalle5001(){
    if(xhr.readyState===4){
        document.getElementById("jaja").innerHTML="<em>"+xhr.responseText;  
        
    }
}

function nameTable(){
	crearObject();
	txtNameTD = document.getElementById('name_Table').value;
	//alert(txtNameTD);
    xhr.open("GET","proceso2.php?TDusuario="+txtNameTD,true);           
    xhr.onreadystatechange=verificaDetalle5002;
    xhr.send(null);
}                  
function verificaDetalle5002(){
    if(xhr.readyState===4){
        document.getElementById("jaja2").innerHTML="<em>"+xhr.responseText;  
        
    }
}

function cantiCol(){
	crearObject();
	selecCol = document.getElementById('cantidadCol').value;
	//alert(selecCol);
    xhr.open("GET","proceso3.php?Cols="+selecCol,true);           
    xhr.onreadystatechange=verificaDetalle5003;
    xhr.send(null);
}                  
function verificaDetalle5003(){
    if(xhr.readyState===4){
        document.getElementById("jajaja").innerHTML="<em>"+xhr.responseText;  
        
    }
}

function Create(){
	crearObject();
    nombre = document.getElementById('name_BD').value;
    nombreTabla = document.getElementById('name_Table').value;
    nombreCampos = document.getElementById('namesCols').value;
    alert(nombre +" "+ nombreTabla) +" "+ nombreCampos;
	//Campos =new Array();
	//Campos[0]= document.getElementById('namesCols[]').value;
	//alert('campos enviados: '+Campos[0]);
	/*xhr.open("GET","crea.php?name="+nombre+"name_t="+nombreTabla,true);           
    xhr.onreadystatechange=verificaDetalle5004;
    xhr.send(null);*/
	
}                  
function verificaDetalle5004(){
    if(xhr.readyState===4){
        document.getElementById("creada").innerHTML="<em>"+xhr.responseText;  
    }
}