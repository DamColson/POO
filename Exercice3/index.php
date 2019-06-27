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
        
        $bankAccounts = ['John'=>[1250,2.3,'euros'],'Jane'=>[1500,2.3,'euros'],'David'=>[12000,2.3,'euros'],'Toto'=>[1000,2.3,'euros'],'Lala'=>[5000,2.3,'euros']];
           
        foreach($bankAccounts as $key=>$value):
            
            ${$key . 'Account'} = new bankAccount($key,$value[0],$value[1],$value[2]);
            
            ?><p><?= 'Titulaire : ' . ${$key . 'Account'}->owner();?></p>
            
            <p><?= 'Solde : ' . ${$key . 'Account'}->balance() . ' ' . ${$key . 'Account'}->currency();?></p>
            <p><?= 'Taux d\'intêret : ' . ${$key . 'Account'}->interest() . ' %';?></p>
            <hr/>
            <?php
        endforeach;
        ?>
    </body>
</html>

