<?php namespace AB\Routes;

use App\User;
use App\Book;

class AppRouter
{
    public function about()
    {
        return $this->process('about');
    }

    public function book(Book $book, $params = null)
    {
        $path = sprintf('books/%s', $book->slug);

        return $this->process($path, $params);
    }

    public function books($params = null)
    {
        return $this->process('books', $params);
    }

    public function now()
    {
        return $this->process('now');
    }

    public function words()
    {
        return $this->process('words');
    }

    public function process($route, $params = null)
    {
        return new AppRoute($route, $params);
    }
}