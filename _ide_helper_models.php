<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models\Races{
/**
 * App\Models\Races\Race
 *
 * @property-read \App\Models\User $createdBy
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Races\RaceInvite[] $invites
 * @property-read int|null $invites_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Races\RaceParticipant[] $participants
 * @property-read int|null $participants_count
 * @method static \Illuminate\Database\Eloquent\Builder|Race newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Race newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Race query()
 */
	class Race extends \Eloquent {}
}

namespace App\Models\Races{
/**
 * App\Models\Races\RaceInvite
 *
 * @property-read \App\Models\User $inviter
 * @property-read \App\Models\Races\Race $race
 * @method static \Illuminate\Database\Eloquent\Builder|RaceInvite newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RaceInvite newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RaceInvite query()
 */
	class RaceInvite extends \Eloquent {}
}

namespace App\Models\Races{
/**
 * App\Models\Races\RaceParticipant
 *
 * @property-read \App\Models\User $inviter
 * @property-read \App\Models\Races\Race $race
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|RaceParticipant newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RaceParticipant newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RaceParticipant query()
 */
	class RaceParticipant extends \Eloquent {}
}

namespace App\Models\Social{
/**
 * App\Models\Social\UserFriend
 *
 * @property-read \App\Models\User $invitee
 * @property-read \App\Models\User $inviter
 * @method static \Illuminate\Database\Eloquent\Builder|UserFriend newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserFriend newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserFriend query()
 */
	class UserFriend extends \Eloquent {}
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
 * @property-read \Illuminate\Database\Eloquent\Collection|User[] $friends
 * @property-read int|null $friends_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Races\RaceInvite[] $invites
 * @property-read int|null $invites_count
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Races\Race[] $races
 * @property-read int|null $races_count
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
 */
	class User extends \Eloquent {}
}

