<?php

use Illuminate\Database\Seeder;
use \App\Post;
use \App\Comment;

class PostCommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        
          Model::unguard();
       $content = 'Take note that Eloquent assumes the foreign key of the relationship based on the model name. In this case, Phone model is assumed to use a user_id foreign key. If you wish to override this convention, you may pass a second argument to the hasOne method. Furthermore, you may pass a third argument to the method to specify which local column that should be used for the association:';
        for($i=1;$i<=20;$i++)
        {
        	$post = new Post;
        	$post->title="post no $i";
        	$post->read_more=substr($content,0,120);
        	$post->content=$content;
        	post->save();



        
        $maxcomments = mt_rand(3,15);
        for ($j=1;$j<=$maxcomments;$j++)
        {
        	$comment = new Comment;
        	$comment->commenter = 'xyz';
        	$comment->comment= substr($content,0,120);
        	$comment->email = 'xyz@framgia.com';
        	$comment->approved=1;
        	$post->comments()->save($comment);
        	$post->increments('comment_count');


        }
    }

    }
    Model::
}
/*

$post = Post::find(2);
$post->setHidden(['content','read_more','updated_at']);
echo $post;
*/