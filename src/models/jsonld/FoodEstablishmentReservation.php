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
 * FoodEstablishmentReservation - A reservation to dine at a food-related business.  Note: This type is for
 * information about actual reservations, e.g. in confirmation emails or HTML
 * pages with individual confirmations of reservations.
 *
 * @author    nystudio107
 * @package   Seomatic
 * @see       https://schema.org/FoodEstablishmentReservation
 */
class FoodEstablishmentReservation extends MetaJsonLd implements FoodEstablishmentReservationInterface, ReservationInterface, IntangibleInterface, ThingInterface
{
    // Static Public Properties
    // =========================================================================

    /**
     * The Schema.org Type Name
     *
     * @var string
     */
    static public $schemaTypeName = 'FoodEstablishmentReservation';

    /**
     * The Schema.org Type Scope
     *
     * @var string
     */
    static public $schemaTypeScope = 'https://schema.org/FoodEstablishmentReservation';

    /**
     * The Schema.org Type Description
     *
     * @var string
     */
    static public $schemaTypeDescription = <<<SCHEMADESC
A reservation to dine at a food-related business.\n\nNote: This type is for information about actual reservations, e.g. in confirmation emails or HTML pages with individual confirmations of reservations.
SCHEMADESC;

    use FoodEstablishmentReservationTrait;
    use ReservationTrait;
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
            'alternateName' => ['Text'],
            'bookingAgent' => ['Person', 'Organization'],
            'bookingTime' => ['DateTime'],
            'broker' => ['Person', 'Organization'],
            'description' => ['Text'],
            'disambiguatingDescription' => ['Text'],
            'endTime' => ['DateTime', 'Time'],
            'identifier' => ['URL', 'Text', 'PropertyValue'],
            'image' => ['URL', 'ImageObject'],
            'mainEntityOfPage' => ['CreativeWork', 'URL'],
            'modifiedTime' => ['DateTime'],
            'name' => ['Text'],
            'partySize' => ['Integer', 'QuantitativeValue'],
            'potentialAction' => ['Action'],
            'priceCurrency' => ['Text'],
            'programMembershipUsed' => ['ProgramMembership'],
            'provider' => ['Organization', 'Person'],
            'reservationFor' => ['Thing'],
            'reservationId' => ['Text'],
            'reservationStatus' => ['ReservationStatusType'],
            'reservedTicket' => ['Ticket'],
            'sameAs' => ['URL'],
            'startTime' => ['DateTime', 'Time'],
            'subjectOf' => ['Event', 'CreativeWork'],
            'totalPrice' => ['PriceSpecification', 'Number', 'Text'],
            'underName' => ['Organization', 'Person'],
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
            'alternateName' => 'An alias for the item.',
            'bookingAgent' => '\'bookingAgent\' is an out-dated term indicating a \'broker\' that serves as a booking agent.',
            'bookingTime' => 'The date and time the reservation was booked.',
            'broker' => 'An entity that arranges for an exchange between a buyer and a seller.  In most cases a broker never acquires or releases ownership of a product or service involved in an exchange.  If it is not clear whether an entity is a broker, seller, or buyer, the latter two terms are preferred.',
            'description' => 'A description of the item.',
            'disambiguatingDescription' => 'A sub property of description. A short description of the item used to disambiguate from other, similar items. Information from other properties (in particular, name) may be necessary for the description to be useful for disambiguation.',
            'endTime' => 'The endTime of something. For a reserved event or service (e.g. FoodEstablishmentReservation), the time that it is expected to end. For actions that span a period of time, when the action was performed. e.g. John wrote a book from January to *December*. For media, including audio and video, it\'s the time offset of the end of a clip within a larger file.  Note that Event uses startDate/endDate instead of startTime/endTime, even when describing dates with times. This situation may be clarified in future revisions.',
            'identifier' => 'The identifier property represents any kind of identifier for any kind of [[Thing]], such as ISBNs, GTIN codes, UUIDs etc. Schema.org provides dedicated properties for representing many of these, either as textual strings or as URL (URI) links. See [background notes](/docs/datamodel.html#identifierBg) for more details.         ',
            'image' => 'An image of the item. This can be a [[URL]] or a fully described [[ImageObject]].',
            'mainEntityOfPage' => 'Indicates a page (or other CreativeWork) for which this thing is the main entity being described. See [background notes](/docs/datamodel.html#mainEntityBackground) for details.',
            'modifiedTime' => 'The date and time the reservation was modified.',
            'name' => 'The name of the item.',
            'partySize' => 'Number of people the reservation should accommodate.',
            'potentialAction' => 'Indicates a potential Action, which describes an idealized action in which this thing would play an \'object\' role.',
            'priceCurrency' => 'The currency of the price, or a price component when attached to [[PriceSpecification]] and its subtypes.  Use standard formats: [ISO 4217 currency format](http://en.wikipedia.org/wiki/ISO_4217) e.g. "USD"; [Ticker symbol](https://en.wikipedia.org/wiki/List_of_cryptocurrencies) for cryptocurrencies e.g. "BTC"; well known names for [Local Exchange Tradings Systems](https://en.wikipedia.org/wiki/Local_exchange_trading_system) (LETS) and other currency types e.g. "Ithaca HOUR".',
            'programMembershipUsed' => 'Any membership in a frequent flyer, hotel loyalty program, etc. being applied to the reservation.',
            'provider' => 'The service provider, service operator, or service performer; the goods producer. Another party (a seller) may offer those services or goods on behalf of the provider. A provider may also serve as the seller.',
            'reservationFor' => 'The thing -- flight, event, restaurant,etc. being reserved.',
            'reservationId' => 'A unique identifier for the reservation.',
            'reservationStatus' => 'The current status of the reservation.',
            'reservedTicket' => 'A ticket associated with the reservation.',
            'sameAs' => 'URL of a reference Web page that unambiguously indicates the item\'s identity. E.g. the URL of the item\'s Wikipedia page, Wikidata entry, or official website.',
            'startTime' => 'The startTime of something. For a reserved event or service (e.g. FoodEstablishmentReservation), the time that it is expected to start. For actions that span a period of time, when the action was performed. e.g. John wrote a book from *January* to December. For media, including audio and video, it\'s the time offset of the start of a clip within a larger file.  Note that Event uses startDate/endDate instead of startTime/endTime, even when describing dates with times. This situation may be clarified in future revisions.',
            'subjectOf' => 'A CreativeWork or Event about this Thing.',
            'totalPrice' => 'The total price for the reservation or ticket, including applicable taxes, shipping, etc.  Usage guidelines:  * Use values from 0123456789 (Unicode \'DIGIT ZERO\' (U+0030) to \'DIGIT NINE\' (U+0039)) rather than superficially similiar Unicode symbols. * Use \'.\' (Unicode \'FULL STOP\' (U+002E)) rather than \',\' to indicate a decimal point. Avoid using these symbols as a readability separator.',
            'underName' => 'The person or organization the reservation or ticket is for.',
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
