<?php

namespace App\Services\Students\Dto;

use App\Http\Requests\CreateStudentsRequest;

class CreateStudentsDto 
{
    public string $first_name;
    public string $last_name;
    public string $date_birth;
    public string $email;
    public string $phone_number;
    public array $sports_id;

    public function __construct(CreateStudentsRequest $createStudentRequest)
    {
        $this->first_name = $createStudentRequest->get('first_name');
        $this->last_name = $createStudentRequest->get('last_name');
        $this->date_birth = $createStudentRequest->get('date_birth');
        $this->email = $createStudentRequest->get('email');
        $this->phone_number = $createStudentRequest->get('phone_number');
        $this->sports_id = $createStudentRequest->get('sports_id');
    }
    
    /**
     * Get the value of first_name
     */ 
    public function getFirstName()
    {
        return $this->first_name;
    }

    /**
     * Get the value of last_name
     */ 
    public function getLastName()
    {
        return $this->last_name;
    }

    /**
     * Get the value of date_birth
     */ 
    public function getDateBirth()
    {
        return $this->date_birth;
    }

    /**
     * Get the value of email
     */ 
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Get the value of phone_number
     */ 
    public function getPhoneNumber()
    {
        return $this->phone_number;
    }

    /**
     * Get the value of sports_id
     */ 
    public function getSportsId()
    {
        return $this->sports_id;
    }
}