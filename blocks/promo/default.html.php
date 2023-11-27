<?php  if (!defined('_VALID_BBC')) exit('No direct script access allowed');

if (!empty($cat['list']) && is_array($cat['list']))
{
	?>
	<ul class="list-unstyled">
		<?php
		foreach($cat['list'] AS $data)
		{
			$edit_data = (content_posted_permission() && $user->id == $data['created_by']) ? 1 : 0;
			$link = content_link($data['id'], $data['title']);
			?>
			<li>
			<?php
			if(!empty($config['title']))
			{
				if(!empty($config['title_link']))
				{
					?>
					<a href="<?php echo $link;?>" title="<?php echo $data['title'];?>"><h3><?php echo $data['title'];?></h3></a>
	        <?php
	      }else{
	      	?>
	      	<h3><?php echo $data['title'];?></h3>
	        <?php
	      }
			}
			if(	!empty($config['created']) || !empty($config['author'] ))
			{
				?>
				<div>
					<?php echo (!empty($config['author'])) ? '<span class="text-muted pull-left">'.lang('author').$data['created_by_alias'].'</span>' : '';?>
					<?php echo (!empty($config['created'])) ? '<span class="text-muted pull-right">'.lang('created').content_date($data['created']).'</span>' : '';?>
					<div class="clearfix"></div>
				</div>
				<?php
			}
			$image = (!empty($config['thumbnail']) && !empty($data['image'])) ? content_src($data['image'], true, false) : '';
			$col   = !empty($image) ? 9 : 12;
			?>
			<div class="row">
				<?php echo !empty($image) ? '<div class="col-md-3 text-center no-both">'.$image.'</div>' : ''; ?>
				<div class="col-md-<?php echo $col;?> text-justify">
					<?php echo @$data[$config['intro']];?>
					<?php echo (!empty($config['read_more'])) ? '<a href="'.$link.'" class="readmore">'.lang('Read more').'</a>' : '';?>
				</div>
			</div>
			<?php
			if( !empty($config['tag']) )
			{
				?>
				<div class="text-left">
					<?php
					$r = content_category($data['id'], $config['tag_link']);
					echo lang('Tags').implode(' ', $r);
					?>
				</div>
				<?php
			}
			if(empty($data['revised']))
			{
				$config['modified'] = 0;
			}
			if(!empty($config['rating']) || !empty($config['modified']) || !empty($edit_data))
			{
				?>
				<div class="row">
					<?php
					if($config['rating'])
					{
						echo '<div class="col-md-5">'.rating($data['rating']).'</div>';
					}
					if(!empty($edit_data))
					{
						?>
						<div class="col-md-7 text-right">
							<?php echo ($config['modified']) ? '<span class="text-muted">'.lang('modified').content_date($data['modified']).'</span>' : '';?>
							<a href="<?php echo $Bbc->mod['circuit'].'.posted_form&id='.$data['id'];?>" title="<?php echo lang('edit content');?>"><?php echo icon('edit');?></a>
						</div>
						<?php
					}	else {
						echo ($config['modified']) ? '<div class="col-md-7 text-right"><span class="text-muted">'.lang('modified').content_date($data['modified']).'</span></div>' : '';?>
						<div class="clearfix"></div>
						<?php
					}
					?>
				</div>
				<?php
			}
			?>
			<br />
		</li>
		<?php
		}
		?>
	</ul>
	<?php
}