<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Tags
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Tags newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Tags newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Tags query()
 * @mixin \Eloquent
 * @property int $id
 * @property string $title
 * @property int $user_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Tags whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tags whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tags whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tags whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tags whereUserId($value)
 */
class Tags extends Model
{
    use HasFactory;
    protected $table = 'tags';
    protected $fillable = [
        'title'
    ];
}
