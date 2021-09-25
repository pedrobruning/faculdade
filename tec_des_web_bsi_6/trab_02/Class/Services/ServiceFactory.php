<?php 

namespace Class\Services;

require_once "Exceptions/ServiceDoesNotExistsException.php";
require_once "Interfaces/Service.php";
require_once "SiteService.php";
require_once "PortfolioService.php";

class ServiceFactory
{
    public static function create(string $name): Interfaces\Service
    {
        switch($name){
            case "site":
                return new SiteService();
                break;
            case "portfolio":
                return new PortfolioService();
                break;
            default:
                throw new \Exceptions\ServiceDoesNotExistsException();
        }
    }
}