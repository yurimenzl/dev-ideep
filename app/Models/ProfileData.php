<?php

namespace App\Models;

use \DateTimeInterface;
use App\Support\HasAdvancedFilter;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProfileData extends Model
{
    use HasFactory;
    use HasAdvancedFilter;
    use SoftDeletes;

    public $table = 'profile_datas';

    public $orderable = [
        'id',
        'dominance',
        'influence',
        'stability',
        'conformity',
        'profile.name',
    ];

    public $filterable = [
        'id',
        'dominance',
        'influence',
        'stability',
        'conformity',
        'profile.name',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'dominance',
        'influence',
        'stability',
        'conformity',
        'profile_id',
    ];

    public function profile()
    {
        return $this->belongsTo(Profile::class);
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
