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
 * Trait for SocialMediaPosting.
 *
 * @author    nystudio107
 * @package   Seomatic
 * @see       https://schema.org/SocialMediaPosting
 */

trait SocialMediaPostingTrait
{
    
    /**
     * A CreativeWork such as an image, video, or audio clip shared as part of
     * this posting.
     *
     * @var CreativeWork
     */
    public $sharedContent;

}
