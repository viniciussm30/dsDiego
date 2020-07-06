<div class="titulo">Switch</div>

<?php
    $categoria = 'luxo';
    $preco = 0.0;
    $carro = '';

    if($categoria === 'luxo'){
        $carro = 'Mercedes';
        $preco =250000;
    }elseif($categoria === 'SUV'){
        $carro = 'Renegade';
        $preco = 80000;
    }else if($categoria === 'Sedan'){
        $carro = 'prisma';
        $preco = 55000;
    }else{
        $carro = 'up';
        $preco = 33000;
    }
    $precoFormatado = number_format($preco, 2, ',', '.');
    echo "<p>Carro: $carro<br>Preço: R$ $precoFormatado </p>";

    $categoria = 'sedan';
    switch(strtolower($categoria)){
        case 'luxo':
            $carro = 'Mercedes';
            $preco = 250000;
        break;
        case 'suv':
            case 'suv basico':
                $carro = 'Renegade';
                $preco = 80000;
        break;
        case 'sedan':
            $carro = 'prisma';
            $preco = 55000;
        break;
        default:
            $carro = 'up';
            $preco = 33000;
        break;
    }

    $precoFormatado = number_format($preco, 2, ',', '.');
    echo "<p>Carro: $carro<br>Preço: R$ $precoFormatado </p>";