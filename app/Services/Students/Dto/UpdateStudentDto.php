<?php

namespace App\Services\Students\Dto;

use App\Http\Requests\UpdateStudentRequest;

class UpdateStudentDto
{
    public string $first_name;
    public string $last_name;
    public string $date_birth;
    public string $email;
    public string $phone_number;
    public array $sport_ids;

    public function __construct(UpdateStudentRequest $updateStudentRequest)
    {
        $this->first_name = $updateStudentRequest->get('first_name');
        $this->last_name = $updateStudentRequest->get('last_name');
        $this->date_birth = $updateStudentRequest->get('date_birth');
        $this->email = $updateStudentRequest->get('email');
        $this->phone_number = $updateStudentRequest->get('phone_number');
        $this->sport_ids = $updateStudentRequest->get('sport_ids');
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
    public function getSportIds()
    {
        return $this->sport_ids;
    }
}