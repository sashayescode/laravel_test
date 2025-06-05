<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CustomException extends Exception
{
    protected array $errors;

    public function __construct(string $message = "Validation failed", array $errors = [], int $code = 422)
    {
        parent::__construct($message, $code);
        $this->errors = $errors;
    }

    /**
     * Return validation errors
     */
    public function getErrors(): array
    {
        return $this->errors;
    }

    /**
     * Render exception into an HTTP response
     */

}
