<?php

namespace App\Models;

use \DateTimeInterface;
use App\Support\HasAdvancedFilter;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Colaborator extends Model
{
    use HasFactory;
    use HasAdvancedFilter;
    use SoftDeletes;

    public const GENDER_SELECT = [
        '1' => 'Feminino',
        '2' => 'Masculino',
        '3' => 'Outros',
    ];

    public $table = 'colaborators';

    public $orderable = [
        'id',
        'name',
        'gender',
        'email',
        'work_company',
        'phone',
        'position',
        'company.name',
        'country.name',
        'city.name',
        'profile.name',
    ];

    public $filterable = [
        'id',
        'name',
        'gender',
        'email',
        'work_company',
        'phone',
        'position',
        'company.name',
        'country.name',
        'city.name',
        'profile.name',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'name',
        'gender',
        'email',
        'work_company',
        'phone',
        'position',
        'company_id',
        'country_id',
        'city_id',
        'profile_id',
    ];

    public function getGenderLabelAttribute($value)
    {
        return static::GENDER_SELECT[$this->gender] ?? null;
    }

    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    public function formQuestions()
    {
        return $this->belongsTo(Colaborator::class);
    }

    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function profile()
    {
        return $this->belongsTo(Profile::class);
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
