<?php

namespace App\Models;

use \DateTimeInterface;
use App\Support\HasAdvancedFilter;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @internal
 * @coversNothing
 */
class Test extends Model
{
    use HasFactory;
    use HasAdvancedFilter;
    use SoftDeletes;

    public const TYPE_SELECT = [
        '1' => 'Matemática',
        '2' => 'Inglês',
        '3' => 'Lógica',
        '4' => 'Português',
        '5' => 'Conhecimentos Gerais',
        '6' => 'Específica',
    ];

    public $table = 'tests';

    public $orderable = [
        'id',
        'name',
        'type',
        'time',
        'weight',
        'number_questions',
        'company.name',
    ];

    public $filterable = [
        'id',
        'name',
        'type',
        'time',
        'weight',
        'number_questions',
        'company.name',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'name',
        'type',
        'time',
        'weight',
        'number_questions',
        'company_id',
    ];

    public function getTypeLabelAttribute($value)
    {
        return static::TYPE_SELECT[$this->type] ?? null;
    }

    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
