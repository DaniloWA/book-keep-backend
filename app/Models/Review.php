<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $table = 'review';

    protected $fillable = [
        'id',
        'user_id',
        'book_id',
        'title',
        'content'
    ];

      /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'id' => 'integer',
        'user_id' => 'integer',
        'book_id' => 'integer',
        'title' => 'text'
            
        ];
    }
    public function user()
    {
     return $this->belongsTo(User::class, 'user_id', 'id');   
    }

    public function book()
    {
     return $this->belongsTo(Book::class, 'books_id', 'id');   
    }
}


