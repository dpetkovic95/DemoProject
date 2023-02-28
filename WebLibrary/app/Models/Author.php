<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @property int $id
 * @property string $name
 * @property string $surname
 * @property string $image
 */
class Author extends Model
{
    use HasFactory, CrudTrait, SoftDeletes;

    /**
     * @var string
     */
    protected $table = 'authors';

    protected $fillable = [
        'name',
        'surname',
        'image'
    ];

    /**
     * @return BelongsToMany
     */
    public function book(): BelongsToMany
    {
        return $this->belongsToMany('App\Models\Book')->withPivot('author_id','book_id');
    }

   /**
    * @return string
    */
    public function getFullnameAttribute()
    {
        return $this->name . ' ' . $this->surname;
    }
}
