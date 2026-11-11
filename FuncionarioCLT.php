<?php
require_once 'Funcionario.php';

class FuncionarioCLT extends Funcionario
{
    private string $cpf;
    private string $carteiraTrabalho;
    private string $dataAdmissao;
    private float $cargaHoraria;
    private float $salario;

    public function __construct(string $nome, string $email, string $cpf, string $carteira, string $data, float $horas, float $salario)
    {
        parent::__construct($nome, $email);
        $this->cpf = $cpf;
        $this->carteiraTrabalho = $carteira;
        $this->dataAdmissao = $data;
        $this->cargaHoraria = $horas;
        $this->salario = $salario;
    }

    public function getDados(): string
    {
        return parent::getDados()
            . "CPF: {$this->cpf}\nCarteira de Trabalho: {$this->carteiraTrabalho}\n"
            . "Data de Admissão: {$this->dataAdmissao}\nCarga Horária: {$this->cargaHoraria} horas\n"
            . "Salário: R$ {$this->salario}\n";
    }

    public function contratar(): string
    {
        return $this->contrato(true, $this->nome, 'CLT');
    }

    public function demitir(): string
    {
        return $this->contrato(false, $this->nome, 'CLT');
    }
}
?>