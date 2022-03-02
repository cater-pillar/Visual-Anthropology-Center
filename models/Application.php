<?php 

class Application {
    protected string $name;
    protected string $email;
    protected string $country;
    protected int $program_id;
    protected string $msg;

    function __construct(string $name, 
                         string $email, 
                         string $country, 
                         int $program_id, 
                         string $msg
                         )
    {
        $this->name = $name;
        $this->email = $email;
        $this->country = $country;
        $this->program_id = $program_id;
        $this->msg = $msg;
    }

    function getName() {
        return $this->name;
    }
    function getEmail() {
        return $this->email;
    }
    function getCountry() {
        return $this->country;
    }
    function getProgramId() {
        return $this->program_id;
    }
    function getMsg() {
        return $this->msg;
    }

    function verifyApplication() {
        if (
            is_string($this->name) &&
            is_string($this->email) &&
            is_string($this->msg) &&
            strpos($this->email, '@')
            ) {
                return true;
            }
        return true;
    }
}