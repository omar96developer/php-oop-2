<?php 
require __DIR__ ."/Utente.php";



class Carrello extends Utente  {

    public $indirizzo;
    public $caratDiCredito;
    public $tempiSpedizione;

    function __construct($_abbonamento){
        $this->abbonamento = strtolower($_abbonamento);
    }

    function spedizione() {
        if($this->abbonamento == "basic"){
            $this->tempiSpedizione = "5 Giorni";
        } 
        
        if ($this->abbonamento == "premium"){
            $this->tempiSpedizione = "1 Giorni";
        } 
    } 
   
}
$carrello = new Carrello('Premium');
$carrello->indirizzo = "via mario blu 28, (MI), 20048";
$carrello->caratDiCredito = 1234123412341234;
$carrello->spedizione();
$carrello->nome = $utente->nome; 
$carrello->cognome = $utente->cognome; 
$carrello->email = $utente->email; 
var_dump($carrello);

?>


<h1><?php echo $carrello->tempiSpedizione ?></h1>
<h1><?php echo $carrello->abbonamento ?></h1>
