<?php
declare(strict_types=1);

use Migrations\AbstractSeed;

/**
 * PostsTest seed.
 */
class PostsTestSeed extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeds is available here:
     * https://book.cakephp.org/phinx/0/en/seeding.html
     *
     * @return void
     */
    public function run(): void
    {
        $data = [
            [
                'title' => '最初の投稿',
                'description' => '最初の投稿の概要',
                'doby' => '最初の投稿の内容',
                'published' => 1,
                'created' => '2020-05-02 10:00:00',
                'modified' => '2020-05-02 10:00:00'
            ]
            ,[
                'title' => '2回目の投稿',
                'description' => '2回目の投稿の概要',
                'doby' => '2回目の投稿の内容',
                'published' => 1,
                'created' => '2020-05-02 10:00:00',
                'modified' => '2020-05-02 10:00:00'
            ],
        ];

        $table = $this->table('posts_test');
        $table->insert($data)->save();
    }
}
