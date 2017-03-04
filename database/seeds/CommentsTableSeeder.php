<?php

use Illuminate\Database\Seeder;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $content = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
        ";
        for ($i = 0; $i < 5; $i++) {
        	$comment = new App\Comment;
        	$comment->content = $content;
        	$comment->user_id = 1;
        	$comment->post_id = 1;
        	$comment->parent_id = 0;
        	$comment->save();
        	for ($j = 0; $j < 2; $j++) {
	        	DB::table('comments')->insert([
		            'content' => $content,
		            'user_id' => 1,
		            'post_id' => 1,
		            'parent_id' => $comment->id,
		        ]);
	        }
        }
    }
}
