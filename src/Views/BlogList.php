<?php
namespace Views;

use Model\BlogPost;

class BlogList extends Views {

    public function __construct(int $length = 3) {

        for($i = 0; $i < $length; $i++) {
    		$blog = new BlogPost();
    		$tpl = new BlogListItem($blog);
    		$this->value .= $tpl->output();
    	}

        /*
        $blogPosts = new BlogPost::loadAllPosts();
        foreach($blogPosts as $blog) {
            $tpl = new BlogListItem($blog);
            $this->blogList .= $tpl->output();
        }
        */
    }
}

?>
