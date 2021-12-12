<?php 
require __DIR__ ."/Utente.php";
require __DIR__ ."/Prodotti.php";



class Carrello extends Utente  {

    use Prodotti;

    public $indirizzo;
    public $caratDiCredito;
    public $tempiSpedizione;

    function __construct($_abbonamento){
        if((!is_string($_abbonamento))) {
            
            try{
                throw new Exception("Puoi solo scrivere in lettere.");
            } catch (Exception $e) {
                echo $e->getMessage() . '<br>' ;
            }

        } else {
            $this->abbonamento = strtolower($_abbonamento);
        }   
         
        
        if(($this->abbonamento != "basic") && ($this->abbonamento != "premium")){
            try{
                throw new Exception ("L' abbonamento puo essere solo Basic o Premium");
            } catch (Exception $a) {
                echo $a-> getMessage();
            }
           
        } 
            
        
        
        
    }

    function spedizione() {
        
        
        if ($this->abbonamento == "basic"){
            $this->tempiSpedizione = " Spedito entro 5 Giorni";
        } 

        if ($this->abbonamento == "premium"){
            $this->tempiSpedizione = "Spedito entro 1 Giorni";
        } 
    } 
   
}
$carrello = new Carrello('basic');
;
$carrello->indirizzo = "via mario blu 28, (MI), 20048";
$carrello->caratDiCredito = 1234123412341234;
$carrello->spedizione(); 
$carrello->nome = $utente->nome; 
$carrello->cognome = $utente->cognome; 
$carrello->email = $utente->email; 
var_dump($carrello);

?>


<h1><?php echo $carrello->tempiSpedizione ?></h1>

