
<h2>Project Repositories</h2>
<ul>
<?php foreach($list_repos as $repo): ?>
<li><a href="<?=$repo['html_url']?>"> <?=$repo['name']?></a></li>
<?php endforeach; // repos ?>
</ul>

<h2>api.joind.in</h2>

<ul>
<?php $count = 0; // counter to limit results?>
<?php foreach($api_commits as $commit): ?>
<?php if($count > 8) continue; ?>
<li>
<a href="<?=$commit['html_url']?>"><code><?=substr($commit['sha'], 0, 7)?></code></a> 
<?php if($commit['author']['login']): ?>
<img src="<?=$commit['author']['avatar_url']?>" height="20px"/>
    <?=$commit['author']['login']?> 
<?php endif; // author login ?>
<?=substr($commit['commit']['message'], 0, 52) ?>
</li>
<?php $count++; ?>
<?php endforeach; ?>
</ul>

<h2>m.joind.in</h2>

<ul>
<?php $count = 0; // counter to limit results?>
<?php foreach($web2_commits as $commit): ?>
<?php if($count > 8) continue; ?>
<li>
<a href="<?=$commit['html_url']?>"><code><?=substr($commit['sha'], 0, 7)?></code></a> 
<?php if($commit['author']['login']): ?>
<img src="<?=$commit['author']['avatar_url']?>" height="20px"/>
    <?=$commit['author']['login']?> 
<?php endif; // author login ?>
<?=substr($commit['commit']['message'], 0, 52) ?>
</li>
<?php $count++; ?>
<?php endforeach; ?>
</ul>
