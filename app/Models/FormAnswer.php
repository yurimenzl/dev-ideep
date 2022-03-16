<?php

namespace App\Models;

use \DateTimeInterface;
use App\Support\HasAdvancedFilter;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class FormAnswer extends Model
{
    use HasFactory;
    use HasAdvancedFilter;
    use SoftDeletes;

    public $table = 'form_answers';

    public $orderable = [
        'id',
        'question_number',
        'question_plus',
        'question_minus',
        'colaborator.name',
    ];

    public $filterable = [
        'id',
        'question_number',
        'question_plus',
        'question_minus',
        'colaborator.name',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'question_number',
        'question_plus',
        'question_minus',
        'colaborator_id',
    ];

    public function colaborator()
    {
        return $this->belongsTo(Colaborator::class);
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
