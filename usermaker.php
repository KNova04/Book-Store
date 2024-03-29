<?php

class Users{
    private $id;
    private $name;
    private $email;
    
    private $isadmin;
    private $age;
    private $contact;
    public function __construct($id,$name,$emai,$isadmin,$age,$TF){
        $this->id = $id;
        $this->name = $name;
        $this->email = $emai;
        $this->isadmin = $isadmin;
        $this->age = $age;
        $this->contact=$TF;
    }
    public function getId(){return $this->id;}
    public function getName(){return $this->name;}
    public function getEmail(){return $this->email;}
    public function getadmin(){return $this->isadmin;}
    public function getAge(){return $this->age;}
    public function adminNT(){
        if($this->isadmin==1){return "remove admin";
        }else{
            return "make admin";
        }
    }
    public function givebutton(){
        if($this->contact==1){
            return "<a href='checkComplanys.php?id=".$this->getId()."'><button class='editter_button'>CheckHistory</button></a>";
        }else{
            return "";
        }
    }
    public function GiveCard(){
        echo "<div class='card'>
            <div class='info-column'>
                <p class='label'>Name:</p>
                <p class='value'>".$this->getName()."</p>
            </div>
            <div class='info-column'>
                <p class='label'>Email:</p>
                <p class='value'>".$this->getEmail()."</p>
            </div>
            <div class='info-column'>
                <p class='label'>Age:</p>
                <p class='value'>".$this->getAge()."</p>
            </div>
            
            <a href='changestatus.php?id=".$this->getId()."&state=".$this->isadmin."'><button class='editter_button'>".$this->adminNT()."</button></a>
            <a href='deletuser.php?id=".$this->getId()."'><button class='editter_button'>Delete</button></a>
            <a href='checkhistory.php?name=".$this->getName()."'><button class='editter_button'>Check history</button></a>
            ".$this->givebutton()."
        </div>";
    }
    
    

}