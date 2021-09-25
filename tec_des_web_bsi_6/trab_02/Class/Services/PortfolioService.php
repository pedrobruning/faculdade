<?php

namespace Class\Services;

require_once "Interfaces/Service.php";

class PortfolioService implements Interfaces\Service
{
    public function getHtml() : string 
    {
        return "<div>Salve aqui fica a parte de Portfolio</div>";
    }
}