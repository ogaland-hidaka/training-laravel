<?php

use Illuminate\Database\Seeder;
use App\Models\TComment;

class CommentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /** level01 Step07 START */
        TComment::create([
            'post_id' => 1,
            'comment_user_id' => 1,
            'comment' => 'テストOK',
            'created_at' => '2023-03-11 09:00:00',
            'updated_at' => '2023-03-11 09:00:00',
            'deleted_at' => '2023-04-01 09:00:00'
        ]);
        TComment::create([
            'post_id' => 1,
            'comment_user_id' => 2,
            'comment' => 'できてそう',
            'created_at' => '2023-03-12 09:00:00',
            'updated_at' => '2023-03-12 09:00:00',
            'deleted_at' => '2023-04-01 09:00:00'
        ]);
        TComment::create([
            'post_id' => 2,
            'comment_user_id' => 1,
            'comment' => 'おめでとうございます！',
            'created_at' => '2023-04-01 10:00:00',
            'updated_at' => '2023-04-01 10:00:00'
        ]);
        TComment::create([
            'post_id' => 2,
            'comment_user_id' => 2,
            'comment' => '参考になりました！',
            'created_at' => '2023-04-01 10:30:00',
            'updated_at' => '2023-04-01 10:30:00'
        ]);
        TComment::create([
            'post_id' => 2,
            'comment_user_id' => 2,
            'comment' => '引き続き頑張ってください！',
            'created_at' => '2023-04-02 10:30:00',
            'updated_at' => '2023-04-02 10:30:00'
        ]);
        TComment::create([
            'post_id' => 4,
            'comment_user_id' => 1,
            'comment' => '応募しました～',
            'created_at' => '2023-05-01 14:30:00',
            'updated_at' => '2023-05-01 14:30:00'
        ]);
        TComment::create([
            'post_id' => 4,
            'comment_user_id' => 2,
            'comment' => 'ぐ、、、今度こそ・・・はってやつよ。',
            'created_at' => '2023-05-02 09:30:00',
            'updated_at' => '2023-05-02 09:30:00'
        ]);
        /** level01 Step07 END */
    }
}
