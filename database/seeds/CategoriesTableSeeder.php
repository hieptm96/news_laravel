<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $list_parent_categories = ["Thế giới","Thể thao","Giáo dục","Văn hóa","Giải trí","Du lịch"];
        $list_child_categories = ["Category 1","Category 2","Category 3"];
        foreach ($list_parent_categories as $category){
        	$result = new App\Category;
        	$result->name = $category;
        	$result->slug = create_slug($category);
        	$result->parent_id = '0';
        	$result->save();
        	// DB::table('categories')->insert([
	        //     'name' => $category,
	        //     'slug' => create_slug($category),
	        //     'parent_id' => '0',
	        // ]);
	        foreach ($list_child_categories as $item){
	        	DB::table('categories')->insert([
		            'name' => $item,
		            'slug' => create_slug($item),
		            'parent_id' => $result->id,
		        ]);
	        }
        }
    }
}
