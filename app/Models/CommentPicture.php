<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CommentPicture extends Model
{

    use HasFactory;

    protected $table = 'comment_picture';
    protected $primaryKey = 'id';
    protected $fillable = [
        'picture_path',
    ];

}
