<?
    
    class MyClass(){
        var $pdo;
		function __construct(){
			$this->pdo = new PDO('mysql:host='.$this->host.$this->port.';dbname='.$this->db, $this->user, $this->password); 
		}
        
        function limitarTexto($texto, $limite){
            $contador = strlen($texto);
            if ( $contador >= $limite ) {      
                $texto = substr($texto, 0, strrpos(substr($texto, 0, $limite), ' ')) . '...';
                return $texto;
            }
            else{
                return $texto;
            }
        }
    } 
    

?>