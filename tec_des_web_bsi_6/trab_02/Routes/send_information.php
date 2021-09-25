<?php
require "../Validations/SendMessageValidation.php";
require_once "../Exceptions/MissingRequiredFieldException.php";
require "../Class/Contact.php";
try {
    $request = new \Validations\SendMessageValidation($_POST);
    $fields = $request->validated();
    $contact = new \Class\Contact($fields);
    $contact->sendMessage();
    header("Location:../contato.php?success=true");
} catch(\Exceptions\MissingRequiredFieldException $e) {
    $errorMessage = $e->getMessage();
    header("Location:../contato.php?errors=$errorMessage");
} catch (\Exception $e) {
    header("Location:../contato.php?errors=Erro interno do servidor");
}