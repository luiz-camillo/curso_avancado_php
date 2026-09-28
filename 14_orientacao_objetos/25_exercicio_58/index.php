<?php       
    /*exercicio, criar classe calculadora com as 4 operações básicas retornando os resultados em cada método */ 
    
    class Calculadora{

        public function somar(float $a, float $b): float {
            $soma = $a + $b;
            return $soma;
        }

        public function subtrair(float $a, float $b): float {
            $subtracao = $a - $b;
            return $subtracao;
        }

        public function multiplicar(float $a, float $b): float {
            $multiplicacao = $a * $b;
            return $multiplicacao;
        }

        public function dividir(float $a, float $b): float {
            if($b == 0 ){
                throw new InvalidArgumentException('Divisão por zero não é permitida!');
            } 
            
            $divisao = $a / $b; 
            return $divisao;
        }

    }


