<?php

namespace ChatGenius;

class Exception extends \Exception {
    protected $message;
    protected $code;
    protected $statusCode;
    protected $errorLog;
    public function __construct(
        int $code = 0,
        int $statusCode = 500,
        string $message = '',
        bool $errorLog = false,
    ){
        $this->message = $message;
        $this->code = $code;
        $this->statusCode = $statusCode;
        $this->errorLog = $errorLog;
        if ($this->errorLog) {
            error_log("Error: {$message}", 0); 
        }
    }
    public function result() {
        $html = '<div style="background-color: #FFDDDD; padding: 10px; border: 1px solid #FF0000;">';
        $html .= '<h2>Error :</h2>';
        $html .= "<p>Error Code : {$this->code}</p>";
        $html .= "<p>Status Code : {$this->statusCode}</p>";
        $html .= '<p>' . $this->getMessage() . '</p>';
        $html .= '</div>';
        return $html;
    }
    
    public function getStatusCode(): int {
        return $this->statusCode;
    }
    
}