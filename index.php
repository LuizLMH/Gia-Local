<?php



if (isset($_GET['tipo'])) {
    $tipo = $_GET['tipo'];
    // var_dump($tipo);
} else {
    $tipo = '';
}

$content = file("comercio.csv");


// foreach ($content as $key => $row) {


//     $arr  = explode(';', $row);

//     echo "<ul>";
//     foreach ($arr as $item) {
//         echo  "<li>" . $item . "</li>";
//     }
//     echo "</ul>";

//     if ($key == 1) {
//         exit();
//     }
// }
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="output.css">
</head>

<body class="select-none">

    <main class="max-w-full w-5/5 mx-auto border p-18  ">

        <div class="pai flex border border-t-transparent border-l-transparent border-r-transparent w-auto border-b-cyan-400">
            <div class="filha">
                <h1>Guia Local - Novo Cruzeiro</h1>
                <p>Comércios da cidade</p>
            </div>
        </div>
        <div class="pai2">
            <div class="">
                <h2 class="py-5">Categorias</h2>
                <a class=" border bg-cyan-300 p-1 mt-10 rounded-xl hover:bg-amber-50" href="index.php">Todos</a>
                <a class=" border bg-cyan-300 p-1 mt-10 rounded-xl hover:bg-amber-50" href="?tipo=Restaurante">Restaurantes</a>
                <a class=" border bg-cyan-300 p-1 mt-10 rounded-xl hover:bg-amber-50" href="?tipo=Farmacia">Farmácias</a>
                <a class=" border bg-cyan-300 p-1 mt-10 rounded-xl hover:bg-amber-50" href="?tipo=Pizzaria">Pizzaria</a>
                <a class=" border bg-cyan-300 p-1 mt-10 rounded-xl hover:bg-amber-50" href="?tipo=Servicos">Serviços</a>
                <a class=" border bg-cyan-300 p-1 mt-10 rounded-xl hover:bg-amber-50" href="?tipo=Supermercado">Supermercados</a>
                <a class=" border bg-cyan-300 p-1 mt-10 rounded-xl hover:bg-amber-50" href="?tipo=Padaria">Padarias</a>
                <a class=" border bg-cyan-300 p-1 mt-10 rounded-xl hover:bg-amber-50" href="?tipo=Vestuário">Vestuario</a>
            </div>
        </div>
        <div class="flex flex-wrap justify-center">
            <?php
            for ($i = 0; $i <= count($content) - 1; $i++) {
                $linha = explode(';', $content[$i]);
                // var_dump($linha)

                if (trim($linha[4]) == $tipo) {


            ?>
                    <div class="flex ">

                        <div class="border border-cyan-400 mt-6 rounded-xl flex m-4 p-3 w-60">
                            <div class="filha3">
                                <div class="w-full inline-flex justify-end">
                                    <img class="flex align-left " src="icons/cooking-pot.svg" alt="Ícone">
                                </div>

                                <div class="">
                                    <h1 class="text-2xl"><?php echo "$linha[0]"; ?></h1>
                                    <a class="border bg-cyan-300 rounded-xl p-0.3 flex items-center justify-center mb-2 mt-2 " href="#">Redes Sociais</a>
                                    <p class="mb-2">
                                        <?php
                                        echo "$linha[4]";
                                        ?>
                                    </p>
                                    <hr>
                                    <div class="text-xl">
                                        <p class="mb-2">
                                            Telefone:
                                            <?php
                                            echo "$linha[1]";
                                            ?>
                                        </p>
                                        <p class="mb-2">
                                            E-mail:
                                            <?php
                                            echo "$linha[2]";
                                            ?>
                                        </p>
                                        <p class="mb-2">
                                            Endereço:
                                            <?php
                                            echo "$linha[3]";
                                            ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                } elseif (empty($tipo)) {
                ?>

                    <div class="flex ">

                        <div class="border border-cyan-400 mt-6 rounded-xl flex m-4 p-3 w-60">
                            <div class="filha3">
                                <div class="w-full inline-flex justify-end">
                                    <img class="flex align-left " src="icons/cooking-pot.svg" alt="Ícone">
                                </div>

                                <div class="">
                                    <h1 class="text-2xl"><?php echo "$linha[0]"; ?></h1>
                                    <a class="border bg-cyan-300 rounded-xl p-0.3 flex items-center justify-center mb-2 mt-2 " href="#">Redes Sociais</a>
                                    <p class="mb-2">
                                        <?php
                                        echo "$linha[4]";
                                        ?>
                                    </p>
                                    <hr>
                                    <div class="text-xl">
                                        <p class="mb-2">
                                            Telefone:
                                            <?php
                                            echo "$linha[1]";
                                            ?>
                                        </p>
                                        <p class="mb-2">
                                            E-mail:
                                            <?php
                                            echo "$linha[2]";
                                            ?>
                                        </p>
                                        <p class="mb-2">
                                            Endereço:
                                            <?php
                                            echo "$linha[3]";
                                            ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

            <?php
                }
            }
            ?>
        </div>

        <div class="pai4">
            <div class="pai5">
                &copy; 2026 Guia Local - Novo Cruzeiro. Todos os direitos reservados.
            </div>
        </div>

    </main>
</body>

</html>