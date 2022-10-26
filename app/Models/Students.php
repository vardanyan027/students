<?php

namespace App\Models;

use App\Services\Sports\Dto\CreateSportsDto;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Services\Students\Dto\CreateStudentsDto;

/**
 * @package App\Models\Students
 * 
 * @property string $first_name
 * @property string $last_name
 * @property string $date_birth
 * @property string $email
 * @property string $phone_number
 */
class Students extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'id',
        'first_name',
        'last_name',
        'date_birth',
        'email',
        'phone_number',
    ];

    public static function create(CreateStudentsDto $createStudentDto)
    {
        $student = new self();
        $student->setFirstName($createStudentDto->getFirstName());
        $student->setLastName($createStudentDto->getLastName());
        $student->setDateBirth($createStudentDto->getDateBirth());
        $student->setEmail($createStudentDto->getEmail());
        $student->setPhoneNumber($createStudentDto->getPhoneNumber());
        return $student;
    }

    /**
     * Get the value of first_name
    */ 
    public function getFirstName(): string
    {
        return $this->first_name;
    }

    /**
     * Set the value of first_name
    */ 
    public function setFirstName($first_name)
    {
        $this->first_name = $first_name;
    }

    /**
     * Get the value of last_name
    */ 
    public function getLastName(): string
    {
        return $this->last_name;
    }

    /**
     * Set the value of last_name
    */ 
    public function setLastName($last_name)
    {
        $this->last_name = $last_name;
    }

    /**
     * Get the value of date_birth
    */ 
    public function getDateBirth(): string
    {
        return $this->date_birth;
    }

    /**
     * Set the value of date_birth
    */ 
    public function setDateBirth($date_birth)
    {
        $this->date_birth = $date_birth;
    }

    /**
     * Get the value of email
    */ 
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * Set the value of email
    */ 
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * Get the value of phone_number
    */ 
    public function getPhoneNumber(): string
    {
        return $this->phone_number;
    }

    /**
     * Set the value of phone_number
    */ 
    public function setPhoneNumber($phone_number)
    {
        $this->phone_number = $phone_number;
    }

    public function studentSports()
    {
        return $this->belongsToMany('App\Models\Sports', 'student_sports');
    }
}
