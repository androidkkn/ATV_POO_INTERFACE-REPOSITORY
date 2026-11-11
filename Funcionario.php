<?php
require_once 'FuncionarioRepository.php';

abstract class Funcionario extends FuncionarioRepository
{
    protected string $nome;
    protected string $email;

    public function __construct(string $nome, string $email)
    {
        $this->nome = $nome;
        $this->email = $email;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getStatus(): bool
    {
        return $this->status;
    }

    public function getDados(): string
    {
        $status = $this->status ? 'Ativo' : 'Inativo';
        return "Nome: {$this->nome}\nE-mail: {$this->email}\nStatus: $status\n";
    }
}
