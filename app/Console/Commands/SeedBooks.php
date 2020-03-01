<?php namespace App\Console\Commands;

use Illuminate\Console\Command;

use App\Book;
use AB\Books\BookDictionary;

class SeedBooks extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'ab:books';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Seed the books table from a service class with hardcoded data';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $dict = new BookDictionary();
        $data = $dict->read();

        $inc = 0;

        foreach($data as $item)
        {
            $title  = $item['title'];
            $alpha  = \App\Book::calculateAlphaIndex($title);
            $author = $item['author'];
            $rating = $item['rating'];
            $category   = $item['category'] ?? null;
            $date_read  = $item['date_read'] ?? null;
            $img_name   = $item['img_name'] ?? null;
            $slug       = $item['slug'] ?? null;
            $subtitle   = $item['subtitle'] ?? null;
            $summary    = $item['summary'] ?? null;
            $azn_url    = $item['azn_url'] ?? null;
            $wik_url    = $item['wik_url'] ?? null;

            //
            // Prepare the data
            //
            $baseInfo = [
                'title'  => $title,
                'author' => $author,
            ];
            $allInfo = [
                'title'     => $title,
                'subtitle'  => $subtitle,
                'alpha'     => $alpha,
                'author'    => $author,
                'rating'    => $rating,
                'category'  => $category,
                'date_read' => $date_read,
                'summary'   => $summary,
                'slug'      => $slug,
                'img_name'  => $img_name,
                'azn_url'   => $azn_url,
                'wik_url'   => $wik_url,
            ];
            if(empty($title) || empty($author) || ! is_integer($rating))
            {
                // must have title, author, rating
                $msg = sprintf('BAD DATA! #%d: %s - %s', $inc, $title, $author);
                $this->info($msg);
                $inc++;
                continue;
            }

            //
            // Update the database
            //
            Book::updateOrCreate($baseInfo, $allInfo);

            //
            // Log output
            //
            $msg = sprintf('#%d: %s - %s', $inc, $title, $author);
            $this->info($msg);
            $inc++;
        }
    }
}
