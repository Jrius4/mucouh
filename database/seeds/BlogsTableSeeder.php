<?php

use App\Blog;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Ramsey\Uuid\Uuid;

class BlogsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            $blog = new Blog();
            $date = new Carbon();
        for ($i=1; $i < 20; $i++) {
            $blog->create(
                [
                    'uuid'=>Uuid::uuid4(),
                    'title'=>$i.'. Consectetur adipisicing elit. Nobis, sapiente explicabo is?',
                    'body'=>'Lorem ipsum dolor sit, amet c Modi, alias provident eum fugiat
                    quisquam quos mollitia vero animi neque.',
                    'published'=>($i%5>2?0:1),
                    'created_at'=>$date->modify('- '.($i + 100).' days')->format('Y-m-d H:i:s'), #2021-05-15 14:01:57
                    'updated_at'=>$date->modify('- '.($i + 100).' days')->format('Y-m-d H:i:s') ,
                ]
            );
        }
    }
}
