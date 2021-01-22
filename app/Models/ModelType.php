<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\ModelType
 *
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|ModelType newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ModelType newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ModelType query()
 * @method static \Illuminate\Database\Eloquent\Builder|ModelType whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ModelType whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ModelType whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ModelType whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class ModelType extends Model
{
    use HasFactory;
}
