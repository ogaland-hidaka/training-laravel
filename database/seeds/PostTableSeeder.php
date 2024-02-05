<?php

use Illuminate\Database\Seeder;
use App\Models\TPost;

class PostTableSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /** level01 Step07 START */
        TPost::create([
            'post_user_id' => 1,
            'title' => 'test',
            'body' => 'テスト記事です',
            'created_at' => '2023-03-10 09:00:00',
            'updated_at' => '2023-03-10 09:00:00',
            'deleted_at' => '2023-04-01 09:00:00'
        ]);
        TPost::create([
            'post_user_id' => 1,
            'title' => '3月月商ギネス更新！（楽天_パクぽりっ）',
            'body' => 'パクぽりっ、2023年3月月商ギネス更新！\n担当のXXXさんへインタビューさせていただきました＾＾',
            'created_at' => '2023-04-01 09:00:00',
            'updated_at' => '2023-04-01 09:00:00'
        ]);
        TPost::create([
            'post_user_id' => 1,
            'title' => '(募集)あなたの自慢のわんちゃん・ねこちゃん',
            'body' => 'この度、ペットサプリもぐもぐのメルマガ(LINE)で\n(仮)今日のわんこ・にゃんこ として\n社内スタッフのペット紹介を行う企画を立てました\n\nどしどし募集しております！！',
            'created_at' => '2023-04-01 12:00:00',
            'updated_at' => '2023-04-05 13:00:00'
        ]);
        TPost::create([
            'post_user_id' => 2,
            'title' => '総額1,000万オガポイント山分けキャンペーン',
            'body' => '＼　毎月開催！！　／\n総額1,000万オガポイント山分けキャンペーン\n\n『　エントリー受付開始　』\n応募締め切り：5月31日（水）迄',
            'created_at' => '2023-05-01 14:00:00',
            'updated_at' => '2023-05-01 14:00:00'
        ]);
        /** level01 Step07 END */
    }
}
