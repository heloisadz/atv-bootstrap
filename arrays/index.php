<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array - revisão</title>
    <link rel="stylesheet" href="juliao.css">
</head>
<body>
    <h1>Array - Revisão</h1>
                <?php
                // pra imprimir html dentro do php coloca assim:
                 echo'<h2> - Arrays como lista ordenada - explicito </h2>';
                 $lista_ordenada = array("carro", "bicicleta", "motocicleta");
                //pre aq é tipo um header, body, div... serve p editar
                
                echo '<pre>';
                 
                //echo '<h2>Adicionar item ao array</h2>';
                 // aq vc tá chamando o campo vazio pra receber a informação
                $lista_ordenada[] = 'valor a ser adicionado';
                

                //echo '<h2>Alterar item do array</h2>';
                 // aq vc tá chamando o campo que quer alterar e coloca oq é pra mudar 
                //neste exemplo, moto vira caminhao
                 $lista_ordenada[2] = 'valor a ser alterado';
               
                
                
                // printr serve pra mostrar a estrutura do objeto, o que tá dentro;
                 print_r($lista_ordenada);
                 
                 echo '</pre>';
                 
                ?>

<h2>Array impicito</h2>


<pre>
<?php
                 
                 $lista_ord = [
                    "carro",
                  "bicicleta",
                   "motocicleta"
                ];
                echo'<teste>';
                print_r($lista_ord);
                 echo'</teste>';
                ?>
                </pre>


                <h2>Array associativo</h2>


    <pre>
            <?php
                            
                            $roupas = [
                                0 => 'saia',
                                1 => 'vestido',
                                2 => 'blusa'

                            ];
                            echo'<teste>';
                            //adicionando e modificando os valores das posiçoes
                            $roupas[2]= 'sapatao';
                            $roupas[]= 'sapataozao';
                            $roupas[15]= 'sapatinho';
                            $roupas[]= 'sapatilha';
                            $roupas['tipo']= 'calça';

                            
                            print_r($roupas);
                            echo'<br>';
                            echo'</teste>';
                            echo $roupas[2];

                            
                            ?>
                            </pre>
                
                <h2> Array com vários tipos</h2>

                <pre>
            <?php
                            
                            $materias = [
                                0=> 'isa',
                                1=> 17,
                                2=> '05/04/2006',
                                'tel'=> '38 992185216',
                                'materia_fav'=> 'fisica',
                            ];
                             print_r($materias);
                            ?>
                            </pre>

                            <h2>Array multidimensional</h2>

                            <pre>
            <?php
                            $turma = [

                            'aluno' => [
                                'nome'=> 'isa',
                                'idade'=> 17,
                                'data_nasc'=> '05/04/2006',
                                'tel'=> '38 992185216',
                                'materia_fav'=> 'psw1',
                            ],
                            'professor' => [
                                'nome'=> 'fabio',
                                'idade'=> 60,
                                'data_nasc'=> '05/04/1902',
                                'tel'=> '38 40028922',
                                'materia_fav'=> 'psw1',
                            ]
                            ];
                             print_r($turma);
                            ?>
                            </pre>


<h2>Vários arrays dentro do array</h2>
                            <pre>
            <?php
                            $turma = [

                            'alunos' => [
                                // nao tem o numero
                                [
                                0=> 'isa',
                                1=> 17,
                                3=> '05/04/2006',
                                4=> '38 992185216',
                                5=> 'psw1',
                                ],
                                [
                                    0=> 'isa',
                                    1=> 17,
                                    3=> '05/04/2006',
                                    4=> '38 992185216',
                                    5=> 'psw1',
                                ],
                                [
                                    'nome'=> 'isa',
                                    1=> 17,
                                    3=> '05/04/2006',
                                    4=> '38 992185216',
                                    5=> 'psw1',
                                    ]
                            ]
                            
                            ];
                             print_r($turma);
                             print_r($turma['alunos'][2]['nome']);
                            ?>
                            </pre>
</body>
</html>