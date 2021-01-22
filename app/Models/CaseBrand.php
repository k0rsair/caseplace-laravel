<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\CaseBrand
 *
 * @property int $id
 * @property string $name
 * @property string $name_rus
 * @property string $code
 * @property string $title
 * @property string $description
 * @property string $content
 * @property string $slug
 * @property int $sort
 * @property int $visible
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|CaseBrand newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CaseBrand newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CaseBrand query()
 * @method static \Illuminate\Database\Eloquent\Builder|CaseBrand whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CaseBrand whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CaseBrand whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CaseBrand whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CaseBrand whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CaseBrand whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CaseBrand whereNameRus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CaseBrand whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CaseBrand whereSort($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CaseBrand whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CaseBrand whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CaseBrand whereVisible($value)
 * @mixin \Eloquent
 */
class CaseBrand extends Model
{
    use HasFactory;
}
