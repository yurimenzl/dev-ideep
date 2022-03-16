<?php

namespace App\Models;

use \DateTimeInterface;
use App\Support\HasAdvancedFilter;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CurrencyPlan extends Model
{
    use HasFactory;
    use HasAdvancedFilter;
    use SoftDeletes;

    public const CURRENCY_SELECT = [
        '1' => 'Sim',
        '2' => 'Não',
    ];

    public const TYPE_SELECT = [
        '1' => 'Básico',
        '2' => 'Full',
    ];

    public $table = 'currency_plans';

    public $orderable = [
        'id',
        'name',
        'currency',
        'type',
    ];

    public $filterable = [
        'id',
        'name',
        'currency',
        'type',
    ];

    protected $fillable = [
        'name',
        'currency',
        'type',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function getCurrencyLabelAttribute($value)
    {
        return static::CURRENCY_SELECT[$this->currency] ?? null;
    }

    public function getTypeLabelAttribute($value)
    {
        return static::TYPE_SELECT[$this->type] ?? null;
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
