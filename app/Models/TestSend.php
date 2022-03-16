<?php

namespace App\Models;

use \DateTimeInterface;
use App\Support\HasAdvancedFilter;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TestSend extends Model
{
    use HasFactory;
    use HasAdvancedFilter;
    use SoftDeletes;

    public const ACTIVE_RADIO = [
        '1' => 'Ativo',
        '2' => 'Inativo',
    ];

    public $table = 'test_sends';

    public $orderable = [
        'id',
        'active',
        'colaborator.name',
        'test.name',
    ];

    public $filterable = [
        'id',
        'active',
        'colaborator.name',
        'test.name',
    ];

    protected $fillable = [
        'active',
        'colaborator_id',
        'test_id',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function getActiveLabelAttribute($value)
    {
        return static::ACTIVE_RADIO[$this->active] ?? null;
    }

    public function colaborator()
    {
        return $this->belongsTo(Colaborator::class);
    }

    public function test()
    {
        return $this->belongsTo(Test::class);
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
