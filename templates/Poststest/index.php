<?php
/*
	*@var \App\View\AppView $this
	*@var \App\Model\Entity\Post[] $posts
*/
?>
<h1>○○さんのブログ　ー覧表示</h1>
<div class="content">
	<?php foreach ($posts as $post): ?>
		<h3><?= $post->title ?></h3>
		<p><?= $post->created->i18nFormat('YYYY年MM月dd日  HH:mm')?></p>
		<p><?= $post->description ?></p>
		<?= $this->Html->link('記事を読む', [
			'controller' => 'Poststest',
			'action' => 'view',
			$post->id
		],['class' => 'button'])?>
	<?php endforeach; ?>
</div>