<?php

// Class definition for ErrorHandler
class ErrorHandler
{

    // Static method to handle exceptions
    public static function handleException(Throwable $exception): void
    {
        // Set the HTTP response code to 500 (Internal Server Error)
        http_response_code(500);

        // Return the exception information as a JSON encoded string
        echo json_encode([
            "code" => $exception->getCode(), // get the exception code
            "message" => $exception->getMessage(), // get the exception message
            "file" => $exception->getFile(), // get the file where the exception was thrown
            "line" => $exception->getLine() // get the line number where the exception was thrown
        ]);
    }
}
