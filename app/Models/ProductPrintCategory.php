<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\ProductPrintCategory
 *
 * @property int $id
 * @property string $name
 * @property string $slug
 * @property int $main_page
 * @property int $market
 * @property int $visible
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|ProductPrintCategory newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductPrintCategory newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductPrintCategory query()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductPrintCategory whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductPrintCategory whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductPrintCategory whereMainPage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductPrintCategory whereMarket($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductPrintCategory whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductPrintCategory whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductPrintCategory whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductPrintCategory whereVisible($value)
 * @mixin \Eloquent
 */
class ProductPrintCategory extends Model
{
    use HasFactory;
}
