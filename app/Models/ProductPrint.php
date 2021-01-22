<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\ProductPrint
 *
 * @property int $id
 * @property string $name
 * @property string $code
 * @property string $slug
 * @property int $views
 * @property int $buy
 * @property int $visible
 * @property int $print_type_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|ProductPrint newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductPrint newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductPrint query()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductPrint whereBuy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductPrint whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductPrint whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductPrint whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductPrint whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductPrint wherePrintTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductPrint whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductPrint whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductPrint whereViews($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductPrint whereVisible($value)
 * @mixin \Eloquent
 */
class ProductPrint extends Model
{
    use HasFactory;
}
