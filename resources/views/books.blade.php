@extends('app')

@section('title')
About
@endsection

@section('content')
<?php
    $router     = approuter();
    $url_back   = url()->previous();
    $url_sivers = 'https://sivers.org/book';
    $url_gates  = 'https://www.gatesnotes.com/Books';
    $url_search = $router->books()->url();

    // SORTINGS
    // #todo #cathat allow these urls to combine additively with category GET param
    // #todo #cathat allow these urls to combine additively with category GET param
    // #todo #cathat allow these urls to combine additively with category GET param
    $url_sortby_rating = $router->books([
        'sortby' => 'rating'
    ])->url();
    $url_sortby_latest = $router->books([
        'sortby' => 'latest'
    ])->url();
    $url_sortby_alpha  = $router->books([
        'sortby' => 'alphabetical'
    ])->url();

    // CATEGORIES
    // #todo #cathat allow these urls to combine additively with sortby GET param
    // #todo #cathat allow these urls to combine additively with sortby GET param
    // #todo #cathat allow these urls to combine additively with sortby GET param
    $url_cat_biography = $router->books([
        'category' => 'biography',
    ])->url();
    $url_cat_business = $router->books([
        'category' => 'business',
    ])->url();
    $url_cat_fiction = $router->books([
        'category' => 'fiction',
    ])->url();
    $url_cat_foreign = $router->books([
        'category' => 'foreign',
    ])->url();
    $url_cat_literature = $router->books([
        'category' => 'literature',
    ])->url();
    $url_cat_nonfic = $router->books([
        'category' => 'nonfiction',
    ])->url();
    $url_cat_theory = $router->books([
        'category' => 'theory',
    ])->url();


    $count   = $books->count();
    $isEmpty = ($books->count() === 0);
    $cat_str = isset($_GET['category'])
        ? sprintf('- %s', ucfirst($_GET['category']))
        : '';
    $sort_str = isset($_GET['sortby'])
        ? sprintf(' - sorted by %s', $_GET['sortby'])
        : '';
    $results_str = sprintf('%d Results %s %s', $count, $cat_str, $sort_str);
?>
<div class="books_container">

<div class="books_backdrop"></div>
<div class="container books_page">
<div class="col-xs-12 col-sm-10 col-md-10 col-lg-10 col-xl-10 offset-sm-1 offset-md-1 offset-lg-1 offset-xl-1">
    <h1>
        Books
    </h1>
    <hr class="short_line" />


    <h4>Welcome to my digital bookshelf</h4>
    <p class="ab_text">
        Here you'll find every book I've read, more or less, along with a rating of 1-10 how strongly I recommend each book.

        Some books might be missing from this list, since I only started it a few years back and had to rely on memory for past books I read. For the same reason, some books might be missing dates or ratings or other info.

        If you want, try sorting by:

        <a href="{{ $url_sortby_rating }}" class="ab_link">rating</a>,

        <a href="{{ $url_sortby_latest }}" class="ab_link">latest</a>,

        or <a href="{{ $url_sortby_alpha }}" class="ab_link">alphabetical</a>.

        Or try looking at these categories:

        <a href="{{ $url_cat_biography }}" class="ab_link">biography</a>,

        <a href="{{ $url_cat_business}}" class="ab_link">business</a>,

        <a href="{{ $url_cat_fiction}}" class="ab_link">fiction</a>,

        <a href="{{ $url_cat_foreign}}" class="ab_link">foreign</a>,

        <a href="{{ $url_cat_literature}}" class="ab_link">literature</a>,

        <a href="{{ $url_cat_nonfic}}" class="ab_link">non-fiction</a>,

        and <a href="{{ $url_cat_theory}}" class="ab_link">theory</a>.
    </p>


    <h4>Raison d'être</h4>
    <p class="ab_text">
        Do you wonder why this page exists?

        A great treasure in my reading life has been thumbing through other digital bookshelves such as

        <a class="ab_link" href="{{ $url_sivers }}" target="_blank">sivers/books</a>,

        <a class="ab_link" href="{{ $url_gates }}" target="_blank">gatesnotes</a>,

        as well as a few others, but primarily those.

        And ever since I was introduced to the concept I knew I'd someday want to build one myself.

        So consider this a way to pay it forward?
    </p>

    <h4>
        {{ $results_str }}
    </h4>
    <hr class="books_divider" style=""/>


    @if($isEmpty)
        <h4 style="color:grey;">
            Nothing found
        </h4>
    @endif

    @foreach($books as $book)
    <?php
        $author         = $book->author;
        $category       = ucfirst($book->category);
        $book_title     = $book->fullTitle();
        $img_filepath   = $book->imgFilepath();
        $rating_str     = $book->vmRating();
        $hasRating      = $book->hasRating();
        $book_url       = $router->book($book)->url();
    ?>
    <div class="book_wrapper">
        <a href={{ $book_url }}>
            <img class="book_cover" src="{{ $img_filepath }}" alt="{{ $book_title }}" />
        </a>

        <div class="book_info">
            <h4>
                {{ $book_title }}
            </h4>

            <h5 style="color:grey;">
                {{ $author }}
            </h5>

            <h6 style="color:grey;font-size:14px;">
                {{ $category }}
            </h6>

            @if($hasRating)
            <h6 style="color:grey;font-size:14px;">
                {{ $rating_str }}
            </h6>
            @endif
        </div>
    </div>
    @endforeach

    <hr class="ab_endpage" />

    <h4>Quotes</h4>
    <p style="font-style: normal; color: rgba(255,255,255,.66); white-space:pre-wrap">"Books, like friends, should be few and well chosen"
    - Samuel Johnson</p>

    <p style="font-style: normal; color: rgba(255,255,255,.66); white-space:pre-wrap">"I cannot remember the books I've read any more than the meals I've eaten; even so, they have made me"
    - Ralph Waldo Emerson</p>

    <p style="font-style: normal; color: rgba(255,255,255,.66); white-space:pre-wrap">"Tat Tvam Asi"
    - Chandogya Upanishad</p>

</div>
</div>
</div>
@endsection