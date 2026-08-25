<?php


  /*Exercício Médio — Mini Sistema de Chamados (tipo NOC)

Crie uma classe abstrata Chamado com propriedades id, descricao, status (protected) e um método abstrato prioridade(): string. Crie duas subclasses: ChamadoCritico (prioridade "Alta") e ChamadoRotina (prioridade "Baixa"). Implemente também GerenciadorChamados, que armazena um array de objetos Chamado e tem um método listar() que percorre e imprime id, descricao e prioridade() de cada um.

Teste esperado:

php
$gerenciador = new GerenciadorChamados();
$gerenciador->adicionar(new ChamadoCritico(1, "Link caiu no site X"));
$gerenciador->adicionar(new ChamadoRotina(2, "Solicitação de troca de senha"));
$gerenciador->listar(); */