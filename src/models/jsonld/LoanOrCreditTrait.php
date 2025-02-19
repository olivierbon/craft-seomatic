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
 * Trait for LoanOrCredit.
 *
 * @author    nystudio107
 * @package   Seomatic
 * @see       https://schema.org/LoanOrCredit
 */

trait LoanOrCreditTrait
{
    
    /**
     * Whether the terms for payment of interest can be renegotiated during the
     * life of the loan.
     *
     * @var bool|Boolean
     */
    public $renegotiableLoan;

    /**
     * The type of a loan or credit.
     *
     * @var string|URL|Text
     */
    public $loanType;

    /**
     * The only way you get the money back in the event of default is the
     * security. Recourse is where you still have the opportunity to go back to
     * the borrower for the rest of the money.
     *
     * @var bool|Boolean
     */
    public $recourseLoan;

    /**
     * The duration of the loan or credit agreement.
     *
     * @var QuantitativeValue
     */
    public $loanTerm;

    /**
     * The period of time after any due date that the borrower has to fulfil its
     * obligations before a default (failure to pay) is deemed to have occurred.
     *
     * @var Duration
     */
    public $gracePeriod;

    /**
     * Assets required to secure loan or credit repayments. It may take form of
     * third party pledge, goods, financial instruments (cash, securities, etc.)
     *
     * @var string|Text|Thing
     */
    public $requiredCollateral;

    /**
     * The currency in which the monetary amount is expressed.  Use standard
     * formats: [ISO 4217 currency format](http://en.wikipedia.org/wiki/ISO_4217)
     * e.g. "USD"; [Ticker
     * symbol](https://en.wikipedia.org/wiki/List_of_cryptocurrencies) for
     * cryptocurrencies e.g. "BTC"; well known names for [Local Exchange Tradings
     * Systems](https://en.wikipedia.org/wiki/Local_exchange_trading_system)
     * (LETS) and other currency types e.g. "Ithaca HOUR".
     *
     * @var string|Text
     */
    public $currency;

    /**
     * The amount of money.
     *
     * @var float|Number|MonetaryAmount
     */
    public $amount;

    /**
     * A form of paying back money previously borrowed from a lender. Repayment
     * usually takes the form of periodic payments that normally include part
     * principal plus interest in each payment.
     *
     * @var RepaymentSpecification
     */
    public $loanRepaymentForm;

}
