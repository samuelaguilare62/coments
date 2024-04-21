// Code for the complete comment system using PHP

// Comment Class
class Comment {
    public $name;
    public $content;
    public $replies = [];

    public function __construct($name, $content) {
        $this->name = $name;
        $this->content = $content;
    }

    public function addReply($name, $content) {
        $this->replies[] = ['name' => $name, 'content' => $content];
    }
}

// Sample Comments
$comments = [];
$comments[] = new Comment('User1', 'This is the first comment.');
$comments[] = new Comment('User2', 'Another comment here.');
$comments[0]->addReply('User3', 'Reply to the first comment.');
$comments[1]->addReply('User1', 'Reply to the second comment.');

// Display Comments
foreach ($comments as $comment) {
    echo '<strong>' . $comment->name . '</strong>: ' . $comment->content . '<br>';
    foreach ($comment->replies as $reply) {
        echo '<em>' . $reply['name'] . '</em>: ' . $reply['content'] . '<br>';
    }
    echo '<br>';
}
