<?php

function redireciona (string $url): void
{
    //local para que se deve ser redirecionado apos ser execultado o codigo
    header("Location: $url");
    die();
}

?>