<?php
require_once 'Funcionario.php';

class FuncionarioPJ extends Funcionario
{
    private string $cnpj;
    private string $nomeEmpresa;
    private float $valorContrato;
    private string $formaPagamento;

    public function __construct(string $nome, string $email, string $cnpj, string $empresa, float $valor, string $pagamento)
    {
        parent::__construct($nome, $email);
        $this->cnpj = $cnpj;
        $this->nomeEmpresa = $empresa;
        $this->valorContrato = $valor;
        $this->formaPagamento = $pagamento;
    }

    public function getDados(): string
    {
        return parent::getDados()
            . "CNPJ: {$this->cnpj}\nEmpresa: {$this->nomeEmpresa}\n"
            . "Valor do Contrato: R$ {$this->valorContrato}\nForma de pagamento: {$this->formaPagamento}\n";
    }

    public function contratar(): string
    {
        return $this->contrato(true, $this->nome, 'PJ');
    }

    public function demitir(): string
    {
        return $this->contrato(false, $this->nome, 'PJ');
    }
}
?>