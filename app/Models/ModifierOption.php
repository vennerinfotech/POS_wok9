<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Modules\Inventory\Entities\Recipe;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\BaseModel;

class ModifierOption extends BaseModel
{
    use HasFactory;

    protected $guarded = ['id'];

    public function recipes()
{
    return $this->hasMany(Recipe::class, 'modifier_option_id');
}
    public function modifierGroup(): BelongsTo
    {
        return $this->belongsTo(ModifierGroup::class, 'modifier_group_id');
    }

    public function orderItemModifierOptions(): HasMany
    {
        return $this->hasMany(OrderItemModifierOption::class, 'modifier_option_id');
    }

    public function kotItemModiferOptions(): HasMany
    {
        return $this->hasMany(KotItemModifierOption::class, 'modifier_option_id');
    }
}
