<?php
// id, nomComplet, email, mdp, telephone, role
$apprenants = [];

function onAddApprenant(array $apprenant){
    $apprenant[] = $apprenant;
    save('utilisateur', $apprenant);
}