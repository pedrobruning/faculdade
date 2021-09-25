<?php 
require_once "Exceptions/ServiceDoesNotExistsException.php";
require_once "Class/Services/ServiceFactory.php";

$servico = $_GET['servico'] ?? "Nenhum";
$html = "";
try {
    $service = \Class\Services\ServiceFactory::create($servico);
    $html = $service->getHtml();
} catch (\Exceptions\ServiceDoesNotExistsException $e) {
    $html = $e->getMessage();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Servicos</title>
</head>
<body>
    <?= $html ?>
</body>
</html>