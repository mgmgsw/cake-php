<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class CreatePostsTest extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     * @return void
     */
    public function change(): void
    {
        $table = $this->table('posts_test');
        $table
            ->addColumn('title', 'string', [
                'limit' => 150,
                'null' => false
            ])
            ->addColumn('description', 'text',[
                'limit' => 255
            ])
            ->addColumn('doby', 'text')
            ->addColumn('published', 'boolean',[
                'default' => false
            ])
            ->addColumn('created', 'datetime')
            ->addColumn('modified', 'datetime')
            ->create();
    }
}
