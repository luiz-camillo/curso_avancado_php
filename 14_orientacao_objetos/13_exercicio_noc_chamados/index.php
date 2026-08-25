<?php


  /*Exercício Médio — Mini Sistema de Chamados (tipo NOC)

Crie uma classe abstrata Chamado com propriedades id, descricao, status (protected) e um método abstrato prioridade(): string. Crie duas subclasses: ChamadoCritico (prioridade "Alta") e ChamadoRotina (prioridade "Baixa"). Implemente também GerenciadorChamados, que armazena um array de objetos Chamado e tem um método listar() que percorre e imprime id, descricao e prioridade() de cada um.

Teste esperado:

php
$gerenciador = new GerenciadorChamados();
$gerenciador->adicionar(new ChamadoCritico(1, "Link caiu no site X"));
$gerenciador->adicionar(new ChamadoRotina(2, "Solicitação de troca de senha"));
$gerenciador->listar(); */


abstract class Chamado{
  protected int $id;
  protected string $descricao;
  protected string $status;

  function __construct(int $id, string $descricao){
    $this->id = $id;
    $this->descricao = $descricao;
    $this->status = "Aberto";
  }

  function getId(): int {
    return $this->id;
  }

  function getDescricao(): string {
    return $this->descricao;
  }

  abstract function prioridade(): string; // função abstrata termina com ';' e não com '{}'
  
  }


class ChamadoCritico extends Chamado{
  function prioridade(): string {
    return "Alta";   
  }
}

class ChamadoRotina extends Chamado{
  function prioridade(): string {
    return "Baixa";
  }
}

class GerenciadorChamados{
  private array $chamado = [];

  function adicionar(Chamado $chamado): void {
    array_push($this->chamado, $chamado);
  }

  function listar(){
    foreach($this->chamado as $chamado){
      echo $chamado->getId() . " - " . $chamado->getDescricao() . " - " . $chamado->prioridade() . "<br>";
    }
    
  }

}

$gerenciador = new GerenciadorChamados();
$gerenciador->adicionar(new ChamadoCritico(1, "Link caiu no site X"));
$gerenciador->adicionar(new ChamadoRotina(2, "Solicitação de troca de senha"));
$gerenciador->listar();