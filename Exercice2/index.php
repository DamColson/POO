<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <link rel="stylesheet" href="bankAccount.css">
        <title></title>
    </head>
    <body>
        <?php
        function loadClass($class){
            require $class . '.php';
        }
        
        spl_autoload_register('loadClass');
        
        $ArielAccount = new bankAccount;
        
        $ArielAccount->setOwner('Ariel');
        $ArielAccount->setBalance(10000);
        $ArielAccount->setInterest(1.9);
        $ArielAccount->setCurrency('euros');
        echo 'Titulaire : ' . $ArielAccount->owner();
        ?><p><?= 'Solde : ' . $ArielAccount->balance() . ' euros';?></p>
        <p><?= 'Taux d\'intêret : ' . $ArielAccount->interest() . '%';?></p>
        <p><?= 'Devise : ' . $ArielAccount->currency();?></p>
        <?php
        $ArielAccount->credit(1250);
        ?><p><?= 'Vous venez de créditer votre compte de 1250 euros et votre nouveau solde est : ' . $ArielAccount->balance() .' euros';?></p><?php
        $ArielAccount->debit(500);
        ?><p><?= 'Vous venez de débiter votre compte de 500 euros et votre nouveau solde est : ' . $ArielAccount->balance() .' euros';?></p><?php
        ?>
    </body>
</html>

