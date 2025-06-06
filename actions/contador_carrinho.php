<?php
session_start();

// Soma todas as quantidades dos produtos adicionados ao carrinho
$total = array_sum(array_column($_SESSION['carrinho'] ?? [], 'quantidade'));

echo $total; // Exemplo: 3
