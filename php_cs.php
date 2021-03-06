<?php
$header = <<<'EOF'
This file is part of RGPD project.

(c) Sébastien CHOMY <sebastien.chomy@gmail.com>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.
EOF;

$finder = PhpCsFixer\Finder::create()
                           ->in(__DIR__.'/src');

$config = PhpCsFixer\Config::create()
                           ->setCacheFile(__DIR__.'/var/.php_cs.cache')
                           ->setUsingCache(true)
                           ->setRiskyAllowed(true)
                           ->setLineEnding("\r\n")
                           ->setRules(
                               [
                                   '@DoctrineAnnotation'                           => true,
                                   '@PHP56Migration'                               => true,
                                   '@PHPUnit60Migration:risky'                     => true,
                                   '@PHP70Migration'                               => true,
                                   '@PHP71Migration'                               => true,
                                   '@Symfony'                                      => true,
                                   '@Symfony:risky'                                => true,
                                   'align_multiline_comment'                       => true,
                                   'array_indentation'                             => true,
                                   'array_syntax'                                  => ['syntax' => 'short'],
                                   'blank_line_before_statement'                   => true,
                                   // [@symfony] override
                                   'binary_operator_spaces'                        =>
                                       ['operators' => ['=>' => 'align_single_space_minimal']],
                                   'combine_consecutive_issets'                    => true,
                                   'combine_consecutive_unsets'                    => true,
                                   'comment_to_phpdoc'                             => true,
                                   'compact_nullable_typehint'                     => true,
                                   'escape_implicit_backslashes'                   => true,
                                   'explicit_indirect_variable'                    => true,
                                   'explicit_string_variable'                      => true,
                                   'final_internal_class'                          => true,
                                   'fully_qualified_strict_types'                  => true,
                                   'function_to_constant'                          => [
                                       'functions' => [
                                           'get_class',
                                           'get_called_class',
                                           'php_sapi_name',
                                           'phpversion',
                                           'pi'
                                       ]
                                   ],
                                   'header_comment'                                => ['header' => $header],
                                   'heredoc_to_nowdoc'                             => true,
                                   'linebreak_after_opening_tag'                   => true,
                                   'list_syntax'                                   => ['syntax' => 'long'],
                                   'logical_operators'                             => true,
                                   'mb_str_functions'                              => true,
                                   'method_argument_space'                         => ['on_multiline' => 'ensure_fully_multiline'],
                                   'method_chaining_indentation'                   => true,
                                   'multiline_comment_opening_closing'             => true,
                                   'multiline_whitespace_before_semicolons'        => ['strategy' => 'new_line_for_chained_calls'],
                                   'no_alternative_syntax'                         => true,
                                   'no_binary_string'                              => true,
                                   'no_extra_blank_lines'                          => [
                                       'tokens' => [
                                           'break',
                                           'continue',
                                           'extra',
                                           'return',
                                           'throw',
                                           'use',
                                           'parenthesis_brace_block',
                                           'square_brace_block',
                                           'curly_brace_block'
                                       ]
                                   ],
                                   'no_multiline_whitespace_around_double_arrow'   => false, // [@Symfony] default true
                                   'no_null_property_initialization'               => true,
                                   'no_short_echo_tag'                             => true,
                                   'no_superfluous_elseif'                         => true,
                                   'no_unneeded_curly_braces'                      => true,
                                   'no_unneeded_final_method'                      => true,
                                   'no_unreachable_default_argument_value'         => true,
                                   'no_unset_on_property'                          => true,
                                   'no_useless_else'                               => true,
                                   'no_useless_return'                             => true,
                                   'ordered_class_elements'                        => true,
                                   'ordered_imports'                               => true,
                                   // PHPUNIT
                                   'php_unit_internal_class'                       => true,
                                   'php_unit_ordered_covers'                       => true,
                                   'php_unit_set_up_tear_down_visibility'          => true,
                                   'php_unit_strict'                               => true,
                                   'php_unit_test_annotation'                      => true,
                                   'php_unit_test_case_static_method_calls'        => ['call_type' => 'this'],
                                   'php_unit_test_class_requires_covers'           => true,
                                   // PHPDoc
                                   'phpdoc_add_missing_param_annotation'           => true,
                                   'phpdoc_order'                                  => true,
                                   'phpdoc_to_return_type'                         => true, // Require PHP > 7.0
                                   'phpdoc_trim_consecutive_blank_line_separation' => true,
                                   'phpdoc_types_order'                            => true,
                                   'return_assignment'                             => true,
                                   'semicolon_after_instruction'                   => true,
                                   'silenced_deprecation_error'                    => true,
                                   'simplified_null_return'                        => true,
                                   'single_line_comment_style'                     => true,
                                   'strict_comparison'                             => true,
                                   'strict_param'                                  => true,
                                   'string_line_ending'                            => true,
                                   'yoda_style'                                    => true,
                               ]
                           )
                           ->setFinder($finder);

return $config;
