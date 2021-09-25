<?php

namespace Class\Services;

require_once "Interfaces/Service.php";

class SiteService implements Interfaces\Service
{
    public function getHtml() : string 
    {
        return "<div>Salve aqui fica a parte de Sites</div>";
    }
}