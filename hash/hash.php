<?php
$nameUser = '';
$email = '';
$password = '';
$save1 = false;
$save2 = false;
$save3 = false;

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if (!empty($_GET['nameUser'])) {
        $nameUser = $_GET['nameUser'];
        $save1 = true;
    }

    if (!empty($_GET['email'])) {
        $email = $_GET['email'];
        $save2 = true;
    }
    if (!empty($_GET['password'])) {
        $password = $_GET['password'];
        $save3 = true;
    }
}
?>
<style>
    .center {
        margin: auto;
        margin-top: 20px;
        width: 50%;
        text-align: center;
        border: 2px black solid;
        min-width: min-content;
    }
</style>

<?php
$save = false;
if ($save1 & $save2 & $save3) {

    $save = true;
}
?>

<?php
$token = '123';
$datexml = 'date';
function encrypt($txt, $token1, $t)
{
    $tokenizer = $txt . $token1 . $t;
    $hash = hash('gost', $tokenizer, false);
    return $hash;
}

?>
<?php
if ($save) {

    $usuarios = new SimpleXMLElement('hash.xml', 0, true);
    $nuevoUsuario = $usuarios->addChild('user');
    $nuevoUsuario->addChild('nameUser', $nameUser);
    $nuevoUsuario->addChild('email', encrypt($email, $token, $datexml));
    $nuevoUsuario->addChild('password', encrypt($password, $token, $datexml));
    $usuarios->saveXML('hash.xml');
    echo 'Guardando datos...';
} else {
    echo '<b>Bienvenido</b> <br />';
    if (!$xml = simplexml_load_file('hash.xml')) {
        echo "No se ha podido cargar el archivo";
    } else {
        foreach ($xml as $user) {
              if($user->email==encrypt($email, $token, $datexml)){
                    if($user->password==encrypt($password, $token, $datexml)){
                        echo $user->nameUser.'<br />';
                    
                    }
              }
        }
    }
}
?>