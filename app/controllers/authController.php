<?php
function showLoginPage(){
    require_once(VIEWS_PATH.'/auth/login.view.php');
}

function showRegisterPage(){
    require_once(VIEWS_PATH.'/auth/register.view.php');
}

function onLogin(){
    
    header('Location: http://bah.mouhamadoufall.bah.odc.edu.sn:3001/gerant/dashboard');
}

function onRegister(){}

function onLogout(){
    echo "logout succes";
}