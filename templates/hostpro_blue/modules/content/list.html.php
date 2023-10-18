<div class="card">
    <h1 id="judul-hasil-search"><?php echo $cat['title']; ?></h1>

    <?php if ($cat['total_page'] > 1) { ?>
        <span class="text text-muted pull-right text-justify"><?php echo lang('page') . ' ' . ($page + 1) . ' ' . lang('of') . ' ' . items($cat['total_page'], 'page'); ?></span>
        <div class="clearfix"></div>
    <?php } ?>

    <ul>
        <?php foreach ((array)$cat['list'] as $data) {
            $edit_data = (content_posted_permission() && $user->id == $data['created_by']) ? 1 : 0;
            $link = content_link($data['id'], $data['title']); ?>
            <li>
                <?php
                $image = (!empty($config['thumbnail']) && !empty($data['image'])) ? content_src($data['image'], true, false) : '';
                $col = !empty($image) ? 3 : 12; ?>
                <div class="row">
                    <?php echo !empty($image) ? '<div class="col-md-4 text-center no-both" id="image">' . $image . '</div>' : ''; ?>
                    <div style="width: 1000px;" class="col-md-<?php echo $col; ?> text-justify" id="deskripsi">
                        <div class="row">
                            <?php if (!empty($config['title'])) {
                                if (!empty($config['title_link'])) { ?>
                                    <a href="<?php echo $link; ?>" title="<?php echo $data['title']; ?>">
                                        <h3 class="col-md-6" id="titles"><?php echo $data['title']; ?></h3>
                                    </a>
                                <?php } else { ?>
                                    <h3><?php echo $data['title']; ?></h3>
                            <?php }
                            } ?>
                            <?php if (!empty($config['rating']) || !empty($config['tag'])) { ?>
                                <div class="col-md-6 text-right" id="tags">
                                    <?php
                                    $r = content_category($data['id'], $config['tag_link']);
                                    echo lang('Tags') . implode(' ', $r);

                                    ?>
                                </div>

                            <?php
                            } ?>
                        </div>
                        <div>
                            <?php echo nl2br(strip_tags($data['intro'])); ?>
                            <?php echo (!empty($config['read_more'])) ? '<a href="' . $link . '" class="readmore">' . lang('Read more') . '</a>' : ''; ?>
                        </div>
                        <hr>
                        <div class="row" id="rating-result">
                            <?php
                            if ( !empty($config['author'])) { ?>
                                <div id="author"class="col-md-3">
                                    <?php echo (!empty($config['author'])) ? '<span class="text-muted pull-left">' . lang('author') . $data['created_by_alias'] . '</span>' : ''; ?>
                                </div>
                            <?php }
                            if ($config['rating']) {
                                echo '<div class="col-md-3 text-left" id="rating">' . rating($data['rating']) . '</div>';
                            } ?>
                            <?php
                if (empty($data['revised'])) {
                    $config['modified'] = 0;
                }
                if (!empty($config['modified']) || !empty($edit_data)) { ?>
                    
                        <?php
                        if (!empty($edit_data)) { ?>
                            <div class=" text-left col-md-3" id="modifikasi">
                                <?php echo ($config['modified']) ? '<span class="text-muted ">' . lang('modified') . content_date($data['modified']) . '</span>' : ''; ?>
                                <a href="<?php echo $Bbc->mod['circuit'] . '.posted_form&id=' . $data['id']; ?>" title="<?php echo lang('edit content'); ?>"><?php echo icon('edit'); ?></a>
                            </div>
                        <?php } else {
                            echo ($config['modified']) ? '<div  class=" text-left col-md-3"id="modifikasi"><span class="text-muted">' . lang('modified') . content_date($data['modified']) . '</span></div>' : ''; ?>
                        <?php }
                     } 
                     if (!empty($config['created']) ) { ?>
                                <div id="created" class="col-md-3">
                                    <?php echo (!empty($config['created'])) ? '<span class="text-muted pull-right">' . lang('created') . content_date($data['created']) . '</span>' : ''; ?>
                                </div>
                            <?php }?>
                        </div>
                    </div>
                </div>
                <br />
            </li>
        <?php } ?>
    </ul>
    <?php echo page_list($cat['total'], $config['tot_list'], $page, 'page', $cat['link']); ?>
    <?php if (!empty($cat['rss'])) { ?>
        <a href="<?php echo $cat['rss']; ?>" class="btn btn-warning btn-sm pull-right" title="<?php echo lang('category feed'); ?>"><?php echo icon('fa-rss-square'); ?> <?php echo lang('category feed'); ?></a>
    <?php } ?>
    <div class="clearfix"></div>
</div>