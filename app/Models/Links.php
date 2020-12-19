<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Links
 *
 * @property int $id
 * @property string $title
 * @property int $users_id
 * @property string $slug
 * @property string $url
 * @property string|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Links newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Links newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Links query()
 * @method static \Illuminate\Database\Eloquent\Builder|Links whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Links whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Links whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Links whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Links whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Links whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Links whereUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Links whereUsersId($value)
 * @mixin \Eloquent
 * @property int $user_id
 * @method static \Illuminate\Database\Eloquent\Builder|Links whereUserId($value)
 */
class Links extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'user_id', 'slug', 'url'];
}
