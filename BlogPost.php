<?php

class BlogPost
{
    public function __construct(
        public string $title,
        public string $content,
        public string $author = "Anonymous" // Use a default value with nullish coalescing operator
    ) {
    }

    public function getExcerpt(int $maxLength = 100): string // Static return type for clarity
    {
        return substr($this->content, 0, $maxLength) . "...";
    }
}

// Usage
$post = new BlogPost(
    title: "The Power of OOP in PHP 8",
    content: "Learn how to write clean, maintainable, and reusable code..."
);

echo $post->title . "\n";
echo $post->getExcerpt();
