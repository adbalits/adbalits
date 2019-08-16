<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = [
        // required
        'title',
        'author',
        'rating',
        //
        'isbn10',
        'isbn13',
        'date_read',
        'azn_url',
        'category',
        'img_name',
        'slug',
        'subtitle',
        'summary',
    ];

    /**
     * @return string
     */
    public function imgFilepath()
    {
        $img_name = $this->img_name;

        return sprintf('/images/covers/%s', $img_name);
    }

    /**
     * @return string
     */
    public function fullTitle()
    {
        $title       = $this->title;
        $subtitle    = $this->subtitle;
        $hasSubtitle = ! empty($subtitle);

        return ($hasSubtitle)
            ? sprintf('%s: %s', $title, $subtitle)
            : $title;
    }

    /**
     * @return bool
     */
    public function hasRating()
    {
        return ! empty($this->rating);
    }

    /**
     * @return string
     */
    public function vmRating()
    {
        if(! $this->hasRating())
        {
            return '';
        }

        return $this->rating.'/10';
    }
}
