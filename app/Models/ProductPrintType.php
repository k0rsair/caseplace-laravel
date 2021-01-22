<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\ProductPrintType
 *
 * @property int $id
 * @property string $name
 * @property string $filter_name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|ProductPrintType newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductPrintType newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductPrintType query()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductPrintType whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductPrintType whereFilterName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductPrintType whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductPrintType whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductPrintType whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class ProductPrintType extends Model
{
    use HasFactory;
}
