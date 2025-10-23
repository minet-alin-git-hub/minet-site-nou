<?php get_header(); ?>
<?php
  $author = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author));
  $author->data->avatar = get_simple_local_avatar($author->ID,300);
?>
<div id="content" class="narrowcolumn container">
  <div class="author_container clear">
    <!-- This sets the $author variable -->
    <div>
      <figure>
        <?php echo $author->data->avatar;  ?>
      </figure>
    </div>
    <dl>
      <h1><?php echo $author->display_name; ?></h1>
      <dd><?php echo $author->user_description; ?></dd>
    </dl>
  </div>
</div>

<?php get_footer(); ?>
