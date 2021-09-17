<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{

    use HasFactory;

    protected $table = 'comments';
    protected $primaryKey = 'id';
    protected $fillable = [
        'store_id',
        'user_id',
        'content',
        'created_at',
    ];

    public function commentPictures()
    {
        return $this->belongstoMany(CommentPicture::class, 'comment_picture_detail', 'comment_id', 'comment_picture_id');
    }

    public function users()
    {
        return $this->belongsto(User::class, 'user_id');
    }
}
