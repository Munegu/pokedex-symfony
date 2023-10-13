<?php

namespace App\UserInterface\Exception;

use App\Core\Application\Port\Exception\InfrastructureExceptionInterface;

class InfrastructureException extends \Exception implements InfrastructureExceptionInterface
{
}
