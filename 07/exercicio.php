<?php
/*
Defina uma classe veiculo com as seguintes propriedades:
- marca
- modelo
- ano
- ligado (indicando se o veíuclo está ligado ou desligado)

2 - Implemente um método construtor que inicialize marca, modelo e ano.
Por padrão, o veículo é instanciado desligado.
Implemente o método ligar(esse método deve alterar a propriedade "ligado", se o veículo estiver desligado)
Implemente o método desligar(deve desligar se o veículo estiver ligado)
Implemnete o método exibirDados(esse método deve exibir as informações "marca, modelo, ano e ligado")

*/



class Veiculo {
  public $marca;
  public $modelo;
  public $ano; 
  public $estado_carro;
  public $funcionamento;
    
    function __construct($marca, $modelo, $ano){
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->ano = $ano;
        $this->estado_carro = false;
        $this->funcionamento = true;
    }

    function ligar(){
     $this->estado_carro = true;
    }

    function desligar(){
    $this->estado_carro = false;
    }

    function exibirdados(){
        echo "Veículo $this->marca com o modelo $this->modelo do ano $this->ano está " . ($this->estado_carro ? "ligado <br>" : "desligado");
       
        // echo $this->estado_carro ? "ligado <br>" : "desligado <br>";
    }

    function manuntencao(){
        
        if($this->funcionamento == true){
            $this->funcionamento = false;
            echo "O veículo está em manuntenção! <br>";
        }
        else{
            $this->funcionamento = true;
        }
        
    }

}

$meucarro1 = new Veiculo("Nissan", "Livina", "2020");
$meucarro2 = new Veiculo("Honda", "HB20", "2021");


$meucarro1->ligar();
$meucarro1->exibirdados();
$meucarro1->desligar();
$meucarro1->exibirdados();
$meucarro1->ligar();
$meucarro1->exibirdados();
$meucarro1->manuntencao();
$meucarro1->exibirdados();




?>