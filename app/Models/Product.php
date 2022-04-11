<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    private static $product;
    private static $image;
    private static $imageName;
    private static $imageUrl;
    private static $directory;

    public static function getImageURL($request){

        self::$image = $request->file('image');
        self::$imageName = self::$image->getClientOriginalName();
        self::$directory = 'product-images/';
        self::$image->move(self::$directory, self::$imageName);
        return self::$directory.self::$imageName;
    }

    public static function newProduct($request){

        self::$product = new Product();
        self::$product->name = $request->name;
        self::$product->category_name = $request->category_name;
        self::$product->brand_name = $request->brand_name;
        self::$product->description = $request->description;
        self::$product->status = $request->status;
        self::$product->image = self::getImageURL($request);
        self::$product->save();
    }

    public static function updateProduct($request, $id){

        self::$product = Product::find($id);
        if ($request->file('image')){

            if (file_exists(self::$product->image)){

                unlink(self::$product->image);
            }
            self::$imageUrl = self::getImageURL($request);
        }
        else{

            self::$imageUrl = self::$product->image;
        }
        self::$product->name = $request->name;
        self::$product->category_name = $request->category_name;
        self::$product->brand_name = $request->brand_name;
        self::$product->description = $request->description;
        self::$product->status = $request->status;
        self::$product->image   = self::$imageUrl;
        self::$product->save();
    }
}
