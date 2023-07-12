<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $offer_id
 * @property string $cid
 * @property string $type
 * @property double $square
 * @property string $price
 * @property string $complex
 * @property string $house
 * @property string $description
 * @property array $images
 * @property bool $likes
 */
class OfferItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'offer_id',
        'cid',
        'type',
        'square',
        'price',
        'complex',
        'house',
        'description',
        'images',
        'likes'
    ];

    protected $casts = [
        'likes' => 'boolean',
    ];

    public $timestamps = false;

    public static array $rules = [
        'offer_id' => ['required', 'integer'],
        'cid' => ['required', 'string'],
        'type' => ['nullable', 'string'],
        'square' => ['nullable', 'numeric'],
        'price' => ['nullable', 'string'],
        'complex' => ['nullable', 'string', 'max:255'],
        'house' => ['nullable', 'string', 'max:20'],
        'description' => ['nullable', 'string', 'max:7000'],
        'images.*' => 'nullable|string',
        'likes' => ['nullable', 'boolean'],
    ];

    public function fillAttributes(array $attributes): static
    {
        return $this->fill([
            'offer_id' => $attributes['offer_id'],
            'cid' => $attributes['cid'],
            'type' => $attributes['type'] ?? null,
            'square' => $attributes['square'] ?? null,
            'price' => $attributes['price'] ?? null,
            'complex' => $attributes['complex'] ?? null,
            'house' => $attributes['house'] ?? null,
            'description' => $attributes['description'] ?? null,
            'images' => $attributes['images'],
            'likes' => $attributes['likes'] ?? false,
        ]);
    }
}
