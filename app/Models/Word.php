<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Word extends Model
{
    use HasFactory;


   /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'words';


    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'key', /// word without space,and in lowercase
        'word', /// word as it is
        'category',
        'source'
    ];
}
