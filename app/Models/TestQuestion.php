<?php

namespace App\Models;

use \DateTimeInterface;
use App\Support\HasAdvancedFilter;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TestQuestion extends Model
{
    use HasFactory;
    use HasAdvancedFilter;
    use SoftDeletes;

    public const CORRECT_ANSWER_SELECT = [
        'a' => 'A',
        'b' => 'B',
        'c' => 'C',
        'd' => 'D',
        'e' => 'E',
    ];

    public $table = 'test_questions';

    public $orderable = [
        'id',
        'question_number',
        'title',
        'answer_1',
        'answer_2',
        'answer_3',
        'answer_4',
        'answer_5',
        'correct_answer',
        'test.name',
    ];

    public $filterable = [
        'id',
        'question_number',
        'title',
        'answer_1',
        'answer_2',
        'answer_3',
        'answer_4',
        'answer_5',
        'correct_answer',
        'test.name',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'question_number',
        'title',
        'answer_1',
        'answer_2',
        'answer_3',
        'answer_4',
        'answer_5',
        'correct_answer',
        'test_id',
    ];

    public function getCorrectAnswerLabelAttribute($value)
    {
        return static::CORRECT_ANSWER_SELECT[$this->correct_answer] ?? null;
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
