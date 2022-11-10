<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'brand',
        'type',
        'description',
        'image',
        'status',
    ];

// danger
//  public function image():Attribute {
    //       return Attribute::set(function($value){
    //          /**
    //           *  @var UploadedFile $value
    //           */
         //   return Storage::url($value->store('public'));

    //     });
    //   }

    public function reservations(){
      return $this->belongsToMany(Reservation::class);
    }
}
