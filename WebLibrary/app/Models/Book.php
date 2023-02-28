<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @property $id
 * @property $title
 * @property $bookNumber
 * @property $description
 */
class Book extends Model
{
    use HasFactory,CrudTrait, SoftDeletes;

    /**
     * @var string
     */
    protected $table = 'books';

    protected $fillable = [
        'title',
        'book_number',
        'description'
    ];

    /**`
     * @return BelongsToMany
     */
    public function author(): BelongsToMany
    {
        return $this->belongsToMany('App\Models\Author')->withPivot('book_id','author_id');
    }
}
