<ul class="inline-list hide-for-small-only account-action">
    <?php foreach ($root->getChildren() as $node) : ?>
    <li>
		<a href="<?= $node->getUrl() ?>"><?= $node->title ?></a>
    </li>
    <?php endforeach ?>
</ul>