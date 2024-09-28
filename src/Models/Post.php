<?php

namespace App\Models;

class Post extends Model {
    public static $table = 'posts';

    public $id;
    public $title;
    public $body;
    public $created_at;
    public $published_at;

    public function __construct() {
        $this->created_at = date('Y-m-d H:i:s');
    }

    public function snippet() {
        return substr($this->body, 0, 3);
    }
}
