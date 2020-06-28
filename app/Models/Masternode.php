<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;

/**
 * Class File
 * @package App\Models
 * @property User $user
 *
 * @property int $id
 * @property string $address
 */
class Masternode extends Model
{
    protected $fillable = ['address','name'];
    protected $hidden = ['user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
