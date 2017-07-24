<?php
// Fist full of comments
function custom_comment($comment, $args, $depth) {
   $GLOBALS['comment'] = $comment; ?>
<?php // if (get_comment_type() == "comment"){ // If you wanted to separate comments from pingbacks ?>

   <li <?php comment_class(); ?> id="li-comment-<?php comment_ID() ?>">

      

<div class="txtb" id="li-comment-<?php comment_ID() ?>">
        <span class="arrow"></span>
	<?php comment_text() ?>

            <?php if ($comment->comment_approved == '0') echo "<p class='unapproved'>".__('Your comment is awaiting moderation.',photographythemes)."</p>\n"; ?>

          	</div>
<div class="name-block">
<?php if(get_comment_type() == "comment"){ ?>

      <?php the_commenter_avatar() ?>

    <?php } ?>
                       <?php the_commenter_link() ?><br /> <?php echo get_comment_date("F j, Y") ?>
                    </div>	
                <div class="clear"></div>
      

<?php  /*  The following is the pingback template. Will cause styling issues with odd and even styling due to threading.

        }  else {

               ?>

               <li <?php comment_class(); ?>>


                    <div class="comment_head cl">


                        <div class="user_meta" style="margin:0">


                            <p class="name"><strong><?php the_commenter_link() ?></strong></p>

                        </div>


                    </div>

                    <div class="comment_entry">

                        <?php comment_text() ?><?php edit_comment_link('Edit', ' <span class="edit-link">(', ')</span>');?>


                    </div>

                    <?php }*/ 


}

function the_commenter_link() {
    $commenter = get_comment_author_link();
    if ( ereg( ']* class=[^>]+>', $commenter ) ) {$commenter = ereg_replace( '(]* class=[\'"]?)', '\\1url ' , $commenter );
    } else { $commenter = ereg_replace( '(<a )/', '\\1class="url "' , $commenter );}
    echo $commenter ;

}
function the_commenter_avatar() {

    $email = get_comment_author_email();

    $avatar = str_replace( "class='avatar", "class='photo avatar", get_avatar( "$email", "40" ) );

    echo $avatar;

}


?>