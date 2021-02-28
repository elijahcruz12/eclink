<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Clicks
 *
 * @property int $id
 * @property string $slug
 * @property string|null $access_ip
 * @property string $real_time
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Clicks newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Clicks newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Clicks query()
 * @method static \Illuminate\Database\Eloquent\Builder|Clicks whereAccessIp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Clicks whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Clicks whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Clicks whereRealTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Clicks whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Clicks whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Clicks extends Model
{
    use HasFactory;

    protected $fillable = ['slug', 'access_ip', 'real_time'];
}
