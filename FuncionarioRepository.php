<?php
require_once 'FuncionarioInterface.php';

abstract class FuncionarioRepository implements FuncionarioInterface
{
    protected bool $status = false;

    abstract public function contratar(): string;
    abstract public function demitir(): string;

    protected function contrato(bool $contratar, string $nome, string $tipo): string
    {
        if ($this->status === $contratar) {
            return $contratar
                ? "$nome já está contratado como $tipo."
                : "$nome não está contratado como $tipo.";
        }

        $this->status = $contratar;

        return $contratar
            ? "$nome contratado como $tipo."
            : "$nome desligado do serviço $tipo.";
    }
};

?>