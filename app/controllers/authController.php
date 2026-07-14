<?php
require_once(MODEL_PATH . '/apprenant.model.php');

function showLoginPage()
{
    require_once(VIEWS_PATH . '/auth/login.view.php');
}

function showRegisterPage()
{
    require_once(VIEWS_PATH . '/auth/register.view.php');
}

function onLogin()
{
    $userConnected = findUtilisateurByEmail($_POST);

    if (!empty($userConnected)) {
        echo "<script>alert('login success')</script>";
        if ($userConnected["role"] == "apprenant") {
            header('Location: http://bah.mouhamadoufall.bah.odc.edu.sn:3001/apprenant/dashboard');
        } else if ($userConnected["role"] == "gerant") {
            header('Location: http://bah.mouhamadoufall.bah.odc.edu.sn:3001/gerant/dashboard');
        }
    } else {
        echo "<script>alert('login ou mot de passe incorect')</script>";
    }
}

function onRegister()
{
    // var_dump($_POST);
    onAddApprenant($_POST);
    // var_dump(getData('utilisateur'));
    header('Location: http://bah.mouhamadoufall.bah.odc.edu.sn:3001/login');
}

function onLogout()
{
    echo "logout succes";
}
