<?php
class bankAccount{
    private $owner;
    private $balance;
    private $interest;
    private $currency;
    
    public function __construct($newOwner,$balance,$interest,$currency) {
        $this->setBalance($balance);
        $this->setCurrency($currency);
        $this->setInterest($interest);
        $this->setOwner($newOwner);
    }
    
    public function credit($amount){
        $this->balance += $amount;
    }
    public function debit($amount){
        $this->balance -= $amount;
    }
    public function owner(){
        return $this->owner;
    }
    public function balance(){
        return $this->balance;
    }
    public function interest(){
        return $this->interest;
    }
    public function currency(){
        return $this->currency;
    }
    public function setOwner($owner){
        if(!is_string($owner)){
            trigger_error('Le propriétaire du compte doit être de type string', E_USER_WARNING);
      return;
        }else{
            $this->owner=$owner;
        }
    }
    public function setBalance($balance){
        if(!is_int($balance)){
            trigger_error('Le solde doit etre un entier', E_USER_WARNING);
      return;
        }else{
            $this->balance=$balance;
        }
    }
    public function setInterest($interest){
        if(!is_float($interest)){
            trigger_error('Le taux d\'interet doit etre un entier', E_USER_WARNING);
      return;
        }else{
            $this->interest=$interest;
        }
    }
    public function setCurrency($currency){
        if(!is_string($currency)){
            trigger_error('Ceci n\'est pas une monnaie', E_USER_WARNING);
      return;
        }else{
            $this->currency=$currency;
        }
    }
}
?>
