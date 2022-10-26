<?php

namespace App\Models;

use App\Services\Sports\Dto\CreateSportsDto;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @package App\Models\Sports
 * 
 * @property string $name
 */
class Sports extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    public static function create(CreateSportsDto $createSportsDto): self
    {
        $sport = new self();
        $sport->setName($createSportsDto->getName());
        return $sport;
    }

    /**
     * Get the value of name
    */ 
    public function getName()
    {
    return $this->name;
    }

    /**
     * Set the value of name
    */ 
    public function setName($name)
    {
        $this->name = $name;
    }

    public function studentSports()
    {
        return $this->belongsToMany('App\Models\Students', 'student_sports');
    }
}
