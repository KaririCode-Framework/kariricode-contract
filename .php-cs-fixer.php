<?php

$finder = PhpCsFixer\Finder::create()
    ->exclude('vendor')
    ->in(__DIR__);

$config = new PhpCsFixer\Config();
return $config->setRules([
    '@PSR12' => true,
    'full_opening_tag' => false,
    'phpdoc_var_without_name' => false,
    'phpdoc_to_comment' => false,
    'no_unused_imports' => true,
    'array_syntax' => [
        'syntax' => 'short',
    ],
    'no_trailing_whitespace' => true, // Remove espaços no final das linhas
    'no_whitespace_in_blank_line' => true, // Remove espaços em linhas em branco
    'binary_operator_spaces' => [
        'default' => 'single_space', // Garante um espaço em operadores binários
    ],
    'method_argument_space' => [
        'on_multiline' => 'ensure_fully_multiline', // Formata espaços em argumentos de métodos em múltiplas linhas
        'after_heredoc' => true,
    ],
    'trim_array_spaces' => true, // Remove espaços desnecessários em arrays
    'single_blank_line_at_eof' => true, // Garante uma única linha em branco no final do arquivo
    // Adicione outras regras conforme necessário
])->setFinder($finder);
