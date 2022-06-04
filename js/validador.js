
function logar(){
    var login = document.getElementById('login').value;
    var senha = document.getElementById('senha').value;

    if(login=="adm" && senha=="adm"){
        window.location.replace("https://www.google.com.br/");
    }else{
        alert("Login ou senha incorretos");
    }
}

function test(){
    $.ajax({url:"echo.php", success:function(result){
    $("div").text(result);}
})
// alert ("Conexão efetuada com sucesso");
} 

