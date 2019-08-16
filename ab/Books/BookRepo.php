<?php namespace AB\Books;

use App\User;
use App\Book;

class BookRepo
{
    public function get()
    {
        $books = (new Book())->newQuery();

        $hasCategory = isset($_GET['category']);
        if($hasCategory)
        {
            $category = $_GET['category'];

            $books->where('category', $category);
        }

        $hasSortby = isset($_GET['sortby']);
        if($hasSortby)
        {
            $sortby = $_GET['sortby'];

            $accepted = ['rating', 'latest', 'alphabetical'];

            if(! in_array($sortby, $accepted))
            {
                // do nothing
            }
            else
            {
                if($sortby === 'rating')
                {
                    $books->where('rating', '>', 0)
                        ->orderBy('rating','DESC');
                }
                elseif($sortby === 'latest')
                {
                    $books->orderBy('date_read', 'DESC');
                }
                else
                {
                    $books->orderBy('title');
                }
            }
        }

        return $books->get();
    }
}