<?php
function calcular_idade($ano_nascimento)
{
    return date('Y') - $ano_nascimento;
}
echo 'Você tem ' . calcular_idade(1985) . ' anos!';
