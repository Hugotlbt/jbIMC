<?php

namespace App\Vue;

use App\Utilitaire\Vue_Composant;

class Vue_CaseA_PageSuivante extends Vue_Composant
{
    private string $msgErreur;
    public function __construct(string $msgErreur ="")
    {
        $this->msgErreur=$msgErreur;
    }

    function donneTexte(): string
    {
        $str= "
<h1>Vous êtes dans le contexte A!</h1>

<div  style='    width: 50%;    display: block;    margin: auto;'>  
    Page suivante du contexte A
    <form action='index.php' method='post'>
            <input type='hidden' name='case' value='A'>
            <button type='submit' name='action' value='pageAccueil'>
                Retour à l'accueil
            </button>
    </form>
</div>

 <form action='index.php' method='post'>
            <input type='hidden' name='case' value='B'>
            <button type='submit' name='action' value='versB'>
                Aller vers le case B
            </button>
    </form>
        $this->msgErreur
    ";
        return $str ;
    }
}