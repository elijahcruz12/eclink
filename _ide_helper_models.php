<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
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
	class Links extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Laravel\Sanctum\PersonalAccessToken[] $tokens
 * @property-read int|null $tokens_count
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Links[] $links
 * @property-read int|null $links_count
 */
	class User extends \Eloquent {}
}

