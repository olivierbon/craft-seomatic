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
 * Trait for Diet.
 *
 * @author    nystudio107
 * @package   Seomatic
 * @see       https://schema.org/Diet
 */

trait DietTrait
{
    
    /**
     * Medical expert advice related to the plan.
     *
     * @var string|Text
     */
    public $expertConsiderations;

    /**
     * Specific physiologic risks associated to the diet plan.
     *
     * @var string|Text
     */
    public $risks;

    /**
     * Specific physiologic benefits associated to the plan.
     *
     * @var string|Text
     */
    public $physiologicalBenefits;

    /**
     * People or organizations that endorse the plan.
     *
     * @var Person|Organization
     */
    public $endorsers;

    /**
     * Nutritional information specific to the dietary plan. May include dietary
     * recommendations on what foods to avoid, what foods to consume, and specific
     * alterations/deviations from the USDA or other regulatory body's approved
     * dietary guidelines.
     *
     * @var string|Text
     */
    public $dietFeatures;

}
