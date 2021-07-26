<?php

// INTERFACES SAO USADAS PARA ORGANIZAR O USO DE VARIAS CLASSES QUE TRABALHAM DA MESMA FORMA 
// OBRIGANDO QUE AS CLASSES QUE VAO UTILIZAR A INTERFACE, SEJAM OBRIGADAS A TEREM OS MESMO METODOS
// QUE FORAM DEFINIDOS NA INTERFACE.

interface Database
{
    public function listarProdutos();
    public function adicionarProduto();
    public function alterarProduto();
    public function removerProduto();
}

class MysqlDb implements Database
{
    public function listarProdutos()
    {
    }

    public function adicionarProduto()
    {
    }

    public function alterarProduto()
    {
    }

    public function removerProduto()
    {
    }
}

class OracleDb implements Database
{
    public function listarProdutos()
    {
    }

    public function adicionarProduto()
    {
    }

    public function alterarProduto()
    {
    }

    public function removerProduto()
    {
    }
}
