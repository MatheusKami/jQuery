<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <title>Inicio</title>
        <script>
            $(function(){

                /*Pega info da area de texto de nome campo*/
                $('#nome_btn').on("click", function(){
                    let nome_var = $('#campo').val();

                    alert("Olá " + nome_var);
                })

                /*muda as cores dos h1*/
                $("#btnRed").on("click", function(){
                    $("h1").css("color","red");
                })
                $("#btnBlack").on("click", function(){
                    $("h1").css("color","black");
                })
                $("#btnGreen").on("click", function(){
                    $("h1").css("color","green");
                })

            })

        </script>
    </head>


    <body>
        <h1>Eu sou um titulo</h1>

        <p>Pegar info da area de texto</p>
        <input type="text" id="campo">
        <button id="nome_btn">Aperte</button>
        <br>
        <br>
        <br>
        <p>Mudar cores dos Titulos</p>
        <button id="btnRed">Vermelho</button>
        <button id="btnBlack">Preto</button>
        <button id="btnGreen">Verde</button>

    </body>
</html>
