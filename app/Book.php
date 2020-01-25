<?php namespace App;

use Carbon\Carbon;
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
        'wik_url',
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
    public function hasBottomLine()
    {
        $hasRating = $this->hasRating();
        $hasDate   = $this->hasDateRead();

        return $hasDate || $hasRating;
    }

    /**
     * @return bool
     */
    public function hasDateRead()
    {
        return ! empty($this->date_read);
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
    public function vmBottomLine()
    {
        $hasRating  = $this->hasRating();
        $hasDate    = $this->hasDateRead();
        $rating_str = $this->vmRating();
        $date_str   = $this->vmDateRead();

        if($hasRating && $hasDate)
        {
            return sprintf('%s - %s', $rating_str, $date_str);
        }

        else if ($hasRating)
        {
            return $rating_str;
        }

        else if( $hasDate )
        {
            return $date_str;
        }

        return '';
    }    
    
    /**
     * @return string
     */
    public function vmDateRead()
    {
        if(! $this->hasDateRead())
        {
            return '';
        }

        $date_read = $this->date_read;
        $date = Carbon::parse($date_read);

        return $date->format('M Y');
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
