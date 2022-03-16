<?php

namespace App\Models;

use \DateTimeInterface;
use App\Support\HasAdvancedFilter;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Company extends Model
{
    use HasFactory;
    use HasAdvancedFilter;
    use SoftDeletes;

    public $table = 'companies';

    public $orderable = [
        'id',
        'name',
        'email',
        'taxid',
        'segment',
        'sector',
        'phone',
        'country.name',
        'city.name',
        'city.state',
        'plan_type.name',
    ];

    public $filterable = [
        'id',
        'name',
        'email',
        'taxid',
        'segment',
        'sector',
        'phone',
        'country.name',
        'city.name',
        'city.state',
        'plan_type.name',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'name',
        'email',
        'taxid',
        'segment',
        'sector',
        'phone',
        'country_id',
        'city_id',
        'plan_type_id',
    ];

    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function planType()
    {
        return $this->belongsTo(CurrencyPlan::class);
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
