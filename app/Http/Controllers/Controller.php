<?php namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use App\Book;
use AB\Books\BookRepo;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function welcome()
    {
        return view('welcome');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function about()
    {
        return view('about', [
            'title' => 'About',
        ]);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function book($slug)
    {
        $book = Book::where('slug', $slug)->first();

        if(is_null($book))
        {
            // not found
            $books = approuter()->books()->route();
            return redirect()->to($books);
        }

        $title = $book->fullTitle();

        return view('book', [
            'title' => $title,
            'book'  => $book,
        ]);
    }

    /**
     *
     * @param BookRepo $repo
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function books(BookRepo $repo)
    {
        $books = $repo->get();

        return view('books', [
            'title' => 'Books',
            'books' => $books,
        ]);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function now()
    {
        $previewStr = 'Over the last few years most of my friends have probably grown tired of hearing me talk about one day moving to New York City / Brooklyn...';

        return view('now', [
            'title' => 'Now',
            'ogTitle' => "What I'm doing now",
            'ogImg' => url('/images/nyc_tn.jpg'),
            'ogDesc' => $previewStr,
        ]);
    }
}
