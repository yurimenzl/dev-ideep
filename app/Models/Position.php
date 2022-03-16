<?php

namespace App\Models;

use \DateTimeInterface;
use App\Support\HasAdvancedFilter;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Position extends Model
{
    use HasFactory;
    use HasAdvancedFilter;
    use SoftDeletes;

    public $table = 'positions';

    public $orderable = [
        'id',
        'name',
        'description',
        'dominance',
        'influence',
        'stability',
        'conformity',
        'company.name',
    ];

    public $filterable = [
        'id',
        'name',
        'description',
        'dominance',
        'influence',
        'stability',
        'conformity',
        'company.name',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'name',
        'description',
        'dominance',
        'influence',
        'stability',
        'conformity',
        'company_id',
    ];

    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
