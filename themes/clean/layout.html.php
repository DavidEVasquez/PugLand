<?php if (!defined('HTMLY')) die('HTMLy'); ?>
<!DOCTYPE html>
<html lang="<?php echo str_replace('_', '-', config('language'));?>">
<head>
    <?php echo head_contents() ?>
    <title><?php echo $title;?></title>
    <meta name="description" content="<?php echo $description; ?>"/>
    <link rel="canonical" href="<?php echo $canonical; ?>" />
	<link href="<?php echo site_url() ?>themes/clean/css/style.css" rel="stylesheet"/>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <link href="//fonts.googleapis.com/css?family=Joan|Jost" rel="stylesheet"/>
    <!--[if lt IE 9]>
    <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>
<body class="<?php echo $bodyclass; ?>" itemscope="itemscope" itemtype="http://schema.org/Blog">
<div class="hide">
    <meta content="<?php echo blog_title() ?>" itemprop="name"/>
    <meta content="<?php echo strip_tags(blog_description()); ?>" itemprop="description"/>
</div>
<?php if (login()) { toolbar(); } ?>
<aside>
    <?php if (is_index()) { ?>
        <h1 class="blog-title"><a rel="home" href="<?php echo site_url() ?>"><?php echo blog_title() ?></a></h1>
    <?php } else { ?>
        <h2 class="blog-title"><a rel="home" href="<?php echo site_url() ?>"><?php echo blog_title() ?></a></h2>
    <?php } ?>
    <div class="search">
        <?php echo search() ?>
    </div>
    <div class="social"><?php echo social() ?></div>
    <div class="menu"><?php echo menu() ?></div>
    <div class="recent"><h3><?php echo i18n('Recent_posts');?></h3><?php echo recent_posts() ?></div>
    <div class="category-list"><h3><?php echo i18n('Category');?></h3><?php echo category_list() ?></div>
    <div class="tagcloud">
        <h3>Tags</h3>
        <div class="tag-cloud">
            <?php echo tag_cloud();?>
        </div>			
    </div>
    <div class="copyright"><?php echo copyright() ?></div>
</aside>
<section id="content">
    <?php echo content() ?>
</section>
<?php if (analytics()): ?><?php echo analytics() ?><?php endif; ?>
</body>
</html>