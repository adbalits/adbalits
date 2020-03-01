<?php namespace AB\Books;

use App\User;
use App\Book;

class BookRepo
{
    public function get()
    {
        $books = (new Book())->newQuery();

        $hasKeyword = isset($_GET['keyword']) && (strlen($_GET['keyword']) > 2);
        if($hasKeyword)
        {
            $keyword = $_GET['keyword'];
            $str = '%'.$keyword.'%';
            return $books->where('title','LIKE', $str)
                ->orWhere('subtitle', 'LIKE', $str)
                ->orWhere('author', 'LIKE', $str)
                ->get();
        }

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
                    $books->whereNotNull('date_read')
                        ->orderBy('date_read', 'DESC');
                }
                else
                {
                    $books->orderBy('alpha');
                }
            }
        }
        else
        {
            $books->orderBy('alpha');
        }

        return $books->get();
    }
}