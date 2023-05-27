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
 * App\Models\Exercices
 *
 * @property int $id
 * @property string $name
 * @property string|null $focus
 * @property string|null $video
 * @property string|null $images
 * @property string|null $description
 * @property string|null $conseil
 * @method static \Illuminate\Database\Eloquent\Builder|Exercices newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Exercices newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Exercices query()
 * @method static \Illuminate\Database\Eloquent\Builder|Exercices whereConseil($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Exercices whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Exercices whereFocus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Exercices whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Exercices whereImages($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Exercices whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Exercices whereVideo($value)
 */
	class Exercices extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @method static \Database\Factories\UserFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 */
	class User extends \Eloquent {}
}

