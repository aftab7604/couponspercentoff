<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;
use App\Models\Category;

class CategoryComposer
{
    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        // Retrieve all categories from the database
        // $categories = Category::all();
        $categories = Category::whereIn("slug",['automotive','sports-fitness-outdoors','technology','home-and-garden'])->get()->toArray();

        // Share the categories with the view
        $view->with('categories', $categories);
    }
}
