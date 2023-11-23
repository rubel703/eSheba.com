<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BanerSection extends Model
{
    use HasFactory;
    private static $banner, $image, $imageName, $extension, $directory, $imageUrl;

    private static function getImageUrl($request)
    {
        self::$image        = $request->file('image');
        self::$imageName    = self::$image->getClientOriginalName();
        self::$directory    = "upload/banner-images/";
        self::$image->move(self::$directory, self::$imageName);
        self::$imageUrl     = self::$directory . self::$imageName;
        return self::$imageUrl;
    }
    public static function addBanner($request)
    {
        if ($request->file('image')) {
            self::$imageUrl = self::getImageUrl($request);
        } else {
            self::$imageUrl = ' ';
        }

        self::$banner                     = new BanerSection();
        self::$banner->title_one          = $request->title_one;
        self::$banner->title_two          = $request->title_two;
        self::$banner->image              = self::$imageUrl;
        self::$banner->status             = $request->status;
        self::$banner->save();
    }




    public static function updateBanner($request, $banerSection)
    {

        if ($request->file('image')) {
            if (file_exists($banerSection->image)) {
                unlink($banerSection->image);
            }
            self::$imageUrl = self::getImageUrl($request);
        } else {
            self::$imageUrl = $banerSection->image;
        }
        $banerSection->title_one          = $request->title_one;
        $banerSection->title_two          = $request->title_two;
        $banerSection->image              = self::$imageUrl;
        $banerSection->status             = $request->status;
        $banerSection->save();
    }
}
