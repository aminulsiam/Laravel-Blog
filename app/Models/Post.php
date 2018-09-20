<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';

    protected $fillable =[
    	'title','body','category_id'
    ];

    public function Category()
    {
		return $this->belongsTo(Category::class);
	}

	public function User()
	{
		return $this->belongsTo(User::class);
	}

}
