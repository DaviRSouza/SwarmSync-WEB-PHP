<?php
if(isset($_GET['aviso']) && $_GET['aviso']=='tentativa'){
    echo <<<SAIDA
        <script>\n
            alert("Usuario ou senha invalidos \\n\\n Tente Novamente!!!");\n
        </script>
    SAIDA;
}
if(isset($_GET['aviso']) && $_GET['aviso']=='invasao'){
    echo <<<SAIDA
        <script>\n
            alert("Area Restrita! \\n\\n Se Autentique Primeiro!!");\n
        </script>
    SAIDA;
}
if(isset($_GET['aviso']) && $_GET['aviso']=='senha') {
    echo <<<SAIDA
        <script>\n
            alert("As Senhas Digitadas Não Coincidem! \\n\\n Certifique-se De Inserir a \\n Mesma Senha Nos Dois Campos De Senha!");\n
        </script>
    SAIDA;
}
if(isset($_GET['aviso']) && $_GET['aviso']=='cadastroCriado') {
    echo <<<SAIDA
        <script>
            alert("Bem Vindo a Nossa Plataforma \\nCadastro realizado com sucesso! \\nAgora você pode fazer login com suas credenciais");
        </script>
    SAIDA;
}