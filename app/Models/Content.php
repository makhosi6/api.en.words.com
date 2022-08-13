<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;


class Content extends Model
{
    use HasFactory;

/**
 * 
 * 
 * 
 */
    protected $connection = 'mongodb';
/**
 * 
 * 
 * 
 */
    protected $primaryKey = 'key';

        /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'key',
        'data',
        'audio',
        'total'
    ];

}
