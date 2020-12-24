<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    protected $guarded = [];

    public function subcategories(){
        return $this->hasMany('App\Category', 'parent_id')->where('status',1);
    }

    public function section(){
        return $this->belongsTo('App\Section','section_id')->select('id','section_name');
    }

    public function parentcategory(){
        return $this->belongsTo('App\Category','parent_id')->select('id','category_name');
    }
    public static function categoryDetails($slug)
    {
        $categoryDetails = Category::select('id', 'category_name', 'slug','section_id')->with(['subcategories'=>
        function($query){$query->select('id', 'parent_id')->where('status', 1); }])->where('slug', $slug)->first()->toArray();
        $catIds = array();
        $catIds[] = $categoryDetails['id'];
        foreach($categoryDetails['subcategories'] as $key => $subcat){
            $catIds[] = $subcat['id'];
        }
        return array('catIds'=>$catIds, 'categoryDetails'=> $categoryDetails);
    }
}
