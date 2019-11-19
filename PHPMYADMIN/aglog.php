<?php
/**
 * Export to PHP Array plugin for PHPMyAdmin
 * @version 4.9.1
 */

/**
 * Database `aglog`
 */

/* `aglog`.`cadastro_cliente` */
$cadastro_cliente = array(
  array('cpf' => '3573138950','email' => 'a@a.com','telefone' => '2147483647','nome' => 'and'),
  array('cpf' => '10716274906','email' => 'matheuscamarques@gmail.com','telefone' => '2147483647','nome' => 'Matheus Camargo'),
  array('cpf' => '10716274908','email' => 'andersonfagundes@gmail.com','telefone' => '2147483647','nome' => 'Anderson Fagundes'),
  array('cpf' => '12345678900','email' => 'a@a.com','telefone' => '2147483647','nome' => 'ana'),
  array('cpf' => '80942555954','email' => 'parctb@gmail.com','telefone' => '2147483647','nome' => 'Sergio Kasuma'),
  array('cpf' => '82989761853','email' => 'ande@fdff.com','telefone' => '1122222222','nome' => 'mio')
);

/* `aglog`.`endereco_cliente` */
$endereco_cliente = array(
  array('logradouro' => 'Rua do Camacuan','numero' => '252','complemento' => 'Casa','bairro' => 'Uberaba','cidade' => 'Curitiba','estado' => 'PR','cep' => '81550360','cod_endereco' => '1','cpf' => '10716274906'),
  array('logradouro' => 'Rua do Camacuan','numero' => '252','complemento' => 'Casa','bairro' => 'Uberaba','cidade' => 'Curitiba','estado' => 'PR','cep' => '82800065','cod_endereco' => '14','cpf' => '10716274908'),
  array('logradouro' => 'rua no','numero' => '58','complemento' => 'casa','bairro' => 'taruma','cidade' => 'curitiba','estado' => 'pr','cep' => '82800000','cod_endereco' => '15','cpf' => '12345678900')
);

/* `aglog`.`lote` */
$lote = array(
  array('cod_lote' => '4','cod_usuario' => '5','data_entrega' => '2019-10-23','status' => '1'),
  array('cod_lote' => '5','cod_usuario' => '3','data_entrega' => '2019-11-05','status' => '1'),
  array('cod_lote' => '6','cod_usuario' => '3','data_entrega' => '0000-00-00','status' => '0')
);

/* `aglog`.`nivel` */
$nivel = array(
  array('cod_nivel' => '1','nome' => 'administrador'),
  array('cod_nivel' => '2','nome' => 'motorista'),
  array('cod_nivel' => '3','nome' => 'operador'),
  array('cod_nivel' => '4','nome' => 'logistico')
);

/* `aglog`.`objeto` */
$objeto = array(
  array('cod_objeto' => '1','tamanho' => '10','distancia' => '100','preco' => '53.3333','cod_taxa' => '1','cpf_origem' => '10716274906','cpf_destino' => '10716274908','peso' => '50','status' => '2'),
  array('cod_objeto' => '2','tamanho' => '10','distancia' => '100','preco' => '53.3333','cod_taxa' => '1','cpf_origem' => '10716274906','cpf_destino' => '10716274908','peso' => '50','status' => '1'),
  array('cod_objeto' => '3','tamanho' => '1','distancia' => '200','preco' => '70.3333','cod_taxa' => '1','cpf_origem' => '10716274906','cpf_destino' => '10716274908','peso' => '10','status' => '1'),
  array('cod_objeto' => '4','tamanho' => '10','distancia' => '800','preco' => '276.667','cod_taxa' => '1','cpf_origem' => '10716274906','cpf_destino' => '10716274908','peso' => '20','status' => '2'),
  array('cod_objeto' => '6','tamanho' => '10','distancia' => '100','preco' => '38.3333','cod_taxa' => '1','cpf_origem' => '10716274906','cpf_destino' => '10716274908','peso' => '5','status' => '1'),
  array('cod_objeto' => '8','tamanho' => '1','distancia' => '120','preco' => '43.6667','cod_taxa' => '1','cpf_origem' => '10716274908','cpf_destino' => '10716274906','peso' => '10','status' => '0')
);

/* `aglog`.`objeto_lote` */
$objeto_lote = array(
  array('cod_lote_objeto' => '9','cod_objeto' => '1','cod_lote' => '4','status' => '0'),
  array('cod_lote_objeto' => '10','cod_objeto' => '2','cod_lote' => '4','status' => '0'),
  array('cod_lote_objeto' => '11','cod_objeto' => '3','cod_lote' => '4','status' => '0'),
  array('cod_lote_objeto' => '12','cod_objeto' => '4','cod_lote' => '4','status' => '0'),
  array('cod_lote_objeto' => '13','cod_objeto' => '6','cod_lote' => '4','status' => '0')
);

/* `aglog`.`passos` */
$passos = array(
  array('cod_passos' => '1','cod_objeto' => '1','cep' => '81550360','hora' => '19:55:00','data' => '2019-10-22','status' => 'Saida do Estoque'),
  array('cod_passos' => '2','cod_objeto' => '1','cep' => '80010010','hora' => '20:22:00','data' => '2019-10-22','status' => 'Chegou no CD'),
  array('cod_passos' => '3','cod_objeto' => '1','cep' => '80010060','hora' => '20:39:00','data' => '2019-10-22','status' => 'Saida do CD'),
  array('cod_passos' => '5','cod_objeto' => '1','cep' => '81550360','hora' => '18:36:35','data' => '2019-10-23','status' => 'Unidade de Distribuicao'),
  array('cod_passos' => '7','cod_objeto' => '1','cep' => '81550360','hora' => '23:05:47','data' => '2019-10-23','status' => 'Entregue destinatario'),
  array('cod_passos' => '9','cod_objeto' => '1','cep' => '81550360','hora' => '18:22:09','data' => '2019-11-11','status' => 'Receita Federal')
);

/* `aglog`.`taxas` */
$taxas = array(
  array('cod_taxa' => '1','taxa' => '0.3')
);

/* `aglog`.`usuario` */
$usuario = array(
  array('cod_usuario' => '3','nome' => 'manolo','email' => 'manolo@manolo.com','senha' => '123','cod_nivel' => '2'),
  array('cod_usuario' => '4','nome' => 'rute','email' => 'rute@rute.com','senha' => '123','cod_nivel' => '2'),
  array('cod_usuario' => '5','nome' => 'lolo','email' => 'lolo@lolo.com.br','senha' => '123','cod_nivel' => '3'),
  array('cod_usuario' => '8','nome' => 'lol','email' => 'lol@huio','senha' => '123','cod_nivel' => '2'),
  array('cod_usuario' => '9','nome' => 'oio','email' => 'aass@gggg','senha' => '123','cod_nivel' => '2'),
  array('cod_usuario' => '10','nome' => 'a','email' => 'a@a.com','senha' => '123','cod_nivel' => '1')
);
