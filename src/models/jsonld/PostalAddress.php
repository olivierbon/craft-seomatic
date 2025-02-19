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

use nystudio107\seomatic\models\MetaJsonLd;

/**
 * schema.org version: v14.0-release
 * PostalAddress - The mailing address.
 *
 * @author    nystudio107
 * @package   Seomatic
 * @see       https://schema.org/PostalAddress
 */
class PostalAddress extends MetaJsonLd implements PostalAddressInterface, ContactPointInterface, StructuredValueInterface, IntangibleInterface, ThingInterface
{
    // Static Public Properties
    // =========================================================================

    /**
     * The Schema.org Type Name
     *
     * @var string
     */
    static public $schemaTypeName = 'PostalAddress';

    /**
     * The Schema.org Type Scope
     *
     * @var string
     */
    static public $schemaTypeScope = 'https://schema.org/PostalAddress';

    /**
     * The Schema.org Type Description
     *
     * @var string
     */
    static public $schemaTypeDescription = <<<SCHEMADESC
The mailing address.
SCHEMADESC;

    use PostalAddressTrait;
    use ContactPointTrait;
    use StructuredValueTrait;
    use IntangibleTrait;
    use ThingTrait;

    // Public methods
    // =========================================================================

    /**
     * @inheritdoc
     */
    public function getSchemaPropertyNames(): array
    {
        return array_keys($this->getSchemaPropertyExpectedTypes());
    }

    /**
     * @inheritdoc
     */
    public function getSchemaPropertyExpectedTypes(): array
    {
        return [
            'additionalType' => ['URL'],
            'addressCountry' => ['Country', 'Text'],
            'addressLocality' => ['Text'],
            'addressRegion' => ['Text'],
            'alternateName' => ['Text'],
            'areaServed' => ['AdministrativeArea', 'GeoShape', 'Text', 'Place'],
            'availableLanguage' => ['Text', 'Language'],
            'contactOption' => ['ContactPointOption'],
            'contactType' => ['Text'],
            'description' => ['Text'],
            'disambiguatingDescription' => ['Text'],
            'email' => ['Text'],
            'faxNumber' => ['Text'],
            'hoursAvailable' => ['OpeningHoursSpecification'],
            'identifier' => ['URL', 'Text', 'PropertyValue'],
            'image' => ['URL', 'ImageObject'],
            'mainEntityOfPage' => ['CreativeWork', 'URL'],
            'name' => ['Text'],
            'postOfficeBoxNumber' => ['Text'],
            'postalCode' => ['Text'],
            'potentialAction' => ['Action'],
            'productSupported' => ['Text', 'Product'],
            'sameAs' => ['URL'],
            'serviceArea' => ['GeoShape', 'AdministrativeArea', 'Place'],
            'streetAddress' => ['Text'],
            'subjectOf' => ['Event', 'CreativeWork'],
            'telephone' => ['Text'],
            'url' => ['URL']
        ];
    }

    /**
     * @inheritdoc
     */
    public function getSchemaPropertyDescriptions(): array
    {
        return [
            'additionalType' => 'An additional type for the item, typically used for adding more specific types from external vocabularies in microdata syntax. This is a relationship between something and a class that the thing is in. In RDFa syntax, it is better to use the native RDFa syntax - the \'typeof\' attribute - for multiple types. Schema.org tools may have only weaker understanding of extra types, in particular those defined externally.',
            'addressCountry' => 'The country. For example, USA. You can also provide the two-letter [ISO 3166-1 alpha-2 country code](http://en.wikipedia.org/wiki/ISO_3166-1).',
            'addressLocality' => 'The locality in which the street address is, and which is in the region. For example, Mountain View.',
            'addressRegion' => 'The region in which the locality is, and which is in the country. For example, California or another appropriate first-level [Administrative division](https://en.wikipedia.org/wiki/List_of_administrative_divisions_by_country) ',
            'alternateName' => 'An alias for the item.',
            'areaServed' => 'The geographic area where a service or offered item is provided.',
            'availableLanguage' => 'A language someone may use with or at the item, service or place. Please use one of the language codes from the [IETF BCP 47 standard](http://tools.ietf.org/html/bcp47). See also [[inLanguage]]',
            'contactOption' => 'An option available on this contact point (e.g. a toll-free number or support for hearing-impaired callers).',
            'contactType' => 'A person or organization can have different contact points, for different purposes. For example, a sales contact point, a PR contact point and so on. This property is used to specify the kind of contact point.',
            'description' => 'A description of the item.',
            'disambiguatingDescription' => 'A sub property of description. A short description of the item used to disambiguate from other, similar items. Information from other properties (in particular, name) may be necessary for the description to be useful for disambiguation.',
            'email' => 'Email address.',
            'faxNumber' => 'The fax number.',
            'hoursAvailable' => 'The hours during which this service or contact is available.',
            'identifier' => 'The identifier property represents any kind of identifier for any kind of [[Thing]], such as ISBNs, GTIN codes, UUIDs etc. Schema.org provides dedicated properties for representing many of these, either as textual strings or as URL (URI) links. See [background notes](/docs/datamodel.html#identifierBg) for more details.         ',
            'image' => 'An image of the item. This can be a [[URL]] or a fully described [[ImageObject]].',
            'mainEntityOfPage' => 'Indicates a page (or other CreativeWork) for which this thing is the main entity being described. See [background notes](/docs/datamodel.html#mainEntityBackground) for details.',
            'name' => 'The name of the item.',
            'postOfficeBoxNumber' => 'The post office box number for PO box addresses.',
            'postalCode' => 'The postal code. For example, 94043.',
            'potentialAction' => 'Indicates a potential Action, which describes an idealized action in which this thing would play an \'object\' role.',
            'productSupported' => 'The product or service this support contact point is related to (such as product support for a particular product line). This can be a specific product or product line (e.g. "iPhone") or a general category of products or services (e.g. "smartphones").',
            'sameAs' => 'URL of a reference Web page that unambiguously indicates the item\'s identity. E.g. the URL of the item\'s Wikipedia page, Wikidata entry, or official website.',
            'serviceArea' => 'The geographic area where the service is provided.',
            'streetAddress' => 'The street address. For example, 1600 Amphitheatre Pkwy.',
            'subjectOf' => 'A CreativeWork or Event about this Thing.',
            'telephone' => 'The telephone number.',
            'url' => 'URL of the item.'
        ];
    }

    /**
     * @inheritdoc
     */
    public function getGoogleRequiredSchema(): array
    {
        return ['description', 'name'];
    }

    /**
     * @inheritdoc
     */
    public function getGoogleRecommendedSchema(): array
    {
        return ['image', 'url'];
    }

    /**
     * @inheritdoc
     */
    public function defineRules(): array
    {
        $rules = parent::defineRules();
        $rules = array_merge($rules, [
            [$this->getSchemaPropertyNames(), 'validateJsonSchema'],
            [$this->getGoogleRequiredSchema(), 'required', 'on' => ['google'], 'message' => 'This property is required by Google.'],
            [$this->getGoogleRecommendedSchema(), 'required', 'on' => ['google'], 'message' => 'This property is recommended by Google.']
        ]);

        return $rules;
    }
}
