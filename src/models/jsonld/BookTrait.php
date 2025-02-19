<?php
/**
 * SEOmatic plugin for Craft CMS 3
 *
 * A turnkey SEO implementation for Craft CMS that is comprehensive, powerful,
 * and flexible
 *
 * @link      https://nystudio107.com
 * @copyright Copyright (c) 2022 nystudio107
 */

namespace nystudio107\seomatic\models\jsonld;

/**
 * schema.org version: v14.0-release
 * Trait for Book.
 *
 * @author    nystudio107
 * @package   Seomatic
 * @see       https://schema.org/Book
 */

trait BookTrait
{
    
    /**
     * The ISBN of the book.
     *
     * @var string|Text
     */
    public $isbn;

    /**
     * The illustrator of the book.
     *
     * @var Person
     */
    public $illustrator;

    /**
     * The number of pages in the book.
     *
     * @var int|Integer
     */
    public $numberOfPages;

    /**
     * Indicates whether the book is an abridged edition.
     *
     * @var bool|Boolean
     */
    public $abridged;

    /**
     * The format of the book.
     *
     * @var BookFormatType
     */
    public $bookFormat;

    /**
     * The edition of the book.
     *
     * @var string|Text
     */
    public $bookEdition;

}
