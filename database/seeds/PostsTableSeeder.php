<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $list_title = [
        	"Ông Tập nói các quan chức cấp cao ngã ngựa do 'âm mưu chính trị'",
        	"5 ngòi nổ có thể khiến căng thẳng Mỹ - Trung bùng phát",
        	"Philippines diệt thủ lĩnh nhóm phiến quân thân IS",
        	"Lính Mỹ ngất xỉu trong lễ từ biệt của Obama",
        	"Cụm tàu sân bay chiến đấu Liêu Ninh thử vũ khí trên Biển Đông"
        ];
        $content = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
			It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
        ";
        $list_img = ["seed-1.jpg","seed-2.jpg","seed-3.jpg"];
        foreach ($list_title as $index => $title){
        	DB::table('posts')->insert([
        		'title' => $title,
        		'slug' => create_slug($title),
        		'content' => $content,
        		'thumb_img' => $list_img[$index % count($list_img)],
        		'highlight' => '0',
        		'view' => '0',
        		'category_id' => '1'
        	]);
        }
    }
}
