<?php

namespace App\UserInterface\Exception;

use App\Core\Application\Port\Exception\InfrastructureExceptionInterface;
use Exception;

class InfrastructureException extends Exception implements InfrastructureExceptionInterface
{
}
