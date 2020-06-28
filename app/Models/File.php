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
 * @property string $txid
 * @property string $name
 * @property float $size
 */
class File extends Model
{
    protected $fillable = ["txid", 'name', 'size','blocknumber'];
    protected $hidden = ['user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getFileSizeAttribute(){
        return human_filesize($this->size);
    }

    public function getUrlAttribute(){
        return route('download',['txid'=>$this->txid]);
    }
}
