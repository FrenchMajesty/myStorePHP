<?php
namespace Views;

use Core\Template;
use Model\BlogPost;

class BlogListItem extends Template {

    public function __construct(BlogPost $blog) {
        $this->file = 'views/blog-list-item.tpl';

        $this->values['title'] = $blog->getTitle();
        $this->values['content'] = $blog->getContent();
        $this->values['thumbnail'] = $blog->getThumbnail();
    }
}
 ?>
