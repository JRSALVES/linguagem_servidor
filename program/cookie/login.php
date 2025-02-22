<?php 
session_start();
$usuarios = [
    'matheus' => [
        'senha' => '123456',
        'mensagem' => 42
    ],
    'joao' => [
        'senha' => 'joao_eh_demais',
        'mensagem' => 12
    ],
    'maria' => [
        'senha' => 'mariainha123',
        'mensagem' => 0
    ],    
];

if(array_key_exists('usuario', $_POST) && 
// usuario enviado
    array_key_exists('senha', $_POST) &&
//senha enviada
    array_key_exists($_POST['usuario'], $usuarios) &&
//usuario existe
    $usuarios[$_POST['usuario']] ['senha'] ===$_POST['senha']
//senha está correta   
){
    $_SESSION['usuario'] = $_POST['usuario'];    
}

if(array_key_exists('usuario', $_SESSION)){
    $dados_usuario = $usuarios[$_SESSION['usuario']];
    ?>
    <h1>Seja bem-vindo "<?php echo $_SESSION['usuario']?>"!</h1>;
    <p>Você tem <?php  echo $dados_usuario['mensagens']?>mensagens não lidas</p>

    <?php 
    
}else {
    ?>
        <h1>Faça seu login!</h1>
        <form action="" method="post">
            <div><label for ="usuario">Usuário: </label><input type="text"
            id="usuario" name="usuario"></div>
            <div><label for="senha">Senha</label><input type="password"
            id="senha" name="senha"></div>
        <button type="sumit">Login</button>
        
    </form>
    <?php     
} //fim do if
