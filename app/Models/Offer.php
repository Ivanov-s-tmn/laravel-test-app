<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $b24_contact_id
 * @property integer $b24_deal_id
 * @property integer $b24_manager_id
 * @property string $manager
 * @property string $position
 * @property string $phone
 * @property string $avatar
 * @property string $status
 * @property string $date_end
 * @property string $createAt
 */
class Offer extends Model
{
    use HasFactory;

    protected $fillable = [
        'b24_contact_id',
        'b24_deal_id',
        'b24_manager_id',
        'manager',
        'position',
        'phone',
        'avatar',
        'status',
        'date_end',
        'createAt',
    ];

    protected $dates = [
        'date_end',
        'createAt',
    ];

    public $timestamps = false;

    public static array $rules = [
        'b24_contact_id' => ['required', 'integer'],
        'b24_deal_id' => ['required', 'integer'],
        'b24_manager_id' => ['nullable', 'integer'],
        'manager' => ['nullable', 'string', 'max:255'],
        'position' => ['nullable', 'string', 'max:255'],
        'phone' => ['nullable', 'string', 'max:15'],
        'avatar' => ['nullable', 'string', 'max:255'],
        'status' => ['nullable', 'string', 'max:20'],
        'date_end' => ['nullable', 'string', 'date'],
        'createAt' => ['nullable', 'string', 'date'],
    ];

    public function fillAttributes(array $attributes): static
    {
        return $this->fill([
            'b24_contact_id' => $attributes['b24_contact_id'],
            'b24_deal_id' => $attributes['b24_deal_id'],
            'b24_manager_id' => $attributes['b24_manager_id'] ?? null,
            'manager' => $attributes['manager'] ?? null,
            'position' => $attributes['position'] ?? null,
            'phone' => $attributes['phone'] ?? null,
            'avatar' => $attributes['avatar'] ?? null,
            'status' => $attributes['status'] ?? 'New',
            'date_end' => $attributes['date_end'] ?? null,
            'createAt' => $attributes['createAt'] ?? null,
        ]);
    }
}
