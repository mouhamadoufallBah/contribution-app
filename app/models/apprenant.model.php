<?php
require_once(CORE_PATH . '/sessionManager.php');
// id, nomComplet, email, mdp, telephone, role
$apprenants = [];

function onAddApprenant(array $apprenant)
{
    $apprenant["role"] = "apprenant";
    $apprenant[] = $apprenant;
    save('utilisateur', $apprenant);
}

function findUtilisateurByEmail(array $apprenant): array | null
{
    global $apprenants;
    $apprenants = getData('utilisateur');
    $userConnected = null;
    foreach ($apprenants as $a) {

        if ($a["email"] === $apprenant["email"]) {
            if ($a["mdp"] === $apprenant["mdp"]) {
                $userConnected = $a;
            }
            break;
        }
    }
    return $userConnected; 
}
