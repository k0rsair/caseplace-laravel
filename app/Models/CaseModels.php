<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\CaseModels
 *
 * @property int $id
 * @property int $brand_id
 * @property string $name
 * @property string $name_rus
 * @property int $model_type_id
 * @property string $code
 * @property string $slug
 * @property string $title
 * @property string $description
 * @property string $content
 * @property int $sort
 * @property int $visible
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|CaseModels newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CaseModels newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CaseModels query()
 * @method static \Illuminate\Database\Eloquent\Builder|CaseModels whereBrandId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CaseModels whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CaseModels whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CaseModels whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CaseModels whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CaseModels whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CaseModels whereModelTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CaseModels whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CaseModels whereNameRus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CaseModels whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CaseModels whereSort($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CaseModels whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CaseModels whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CaseModels whereVisible($value)
 * @mixin \Eloquent
 */
class CaseModels extends Model
{
    use HasFactory;
}
