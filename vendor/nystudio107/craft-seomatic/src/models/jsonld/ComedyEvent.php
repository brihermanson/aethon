<?php
/**
 * SEOmatic plugin for Craft CMS 3.x
 *
 * A turnkey SEO implementation for Craft CMS that is comprehensive, powerful,
 * and flexible
 *
 * @link      https://nystudio107.com
 * @copyright Copyright (c) 2017 nystudio107
 */

namespace nystudio107\seomatic\models\jsonld;

use nystudio107\seomatic\models\jsonld\Event;

/**
 * ComedyEvent - Event type: Comedy event.
 *
 * @author    nystudio107
 * @package   Seomatic
 * @since     3.0.0
 * @see       http://schema.org/ComedyEvent
 */
class ComedyEvent extends Event
{
    // Static Public Properties
    // =========================================================================

    /**
     * The Schema.org Type Name
     *
     * @var string
     */
    static public $schemaTypeName = 'ComedyEvent';

    /**
     * The Schema.org Type Scope
     *
     * @var string
     */
    static public $schemaTypeScope = 'https://schema.org/ComedyEvent';

    /**
     * The Schema.org Type Description
     *
     * @var string
     */
    static public $schemaTypeDescription = 'Event type: Comedy event.';

    /**
     * The Schema.org Type Extends
     *
     * @var string
     */
    static public $schemaTypeExtends = 'Event';

    /**
     * The Schema.org composed Property Names
     *
     * @var array
     */
    static public $schemaPropertyNames = [];

    /**
     * The Schema.org composed Property Expected Types
     *
     * @var array
     */
    static public $schemaPropertyExpectedTypes = [];

    /**
     * The Schema.org composed Property Descriptions
     *
     * @var array
     */
    static public $schemaPropertyDescriptions = [];

    /**
     * The Schema.org composed Google Required Schema for this type
     *
     * @var array
     */
    static public $googleRequiredSchema = [];

    /**
     * The Schema.org composed Google Recommended Schema for this type
     *
     * @var array
     */
    static public $googleRecommendedSchema = [];

    // Public Properties
    // =========================================================================

    /**
     * The subject matter of the content. Inverse property: subjectOf.
     *
     * @var Thing [schema.org types: Thing]
     */
    public $about;

    /**
     * An actor, e.g. in tv, radio, movie, video games etc., or in an event.
     * Actors can be associated with individual items or with a series, episode,
     * clip. Supersedes actors.
     *
     * @var Person [schema.org types: Person]
     */
    public $actor;

    /**
     * The overall rating, based on a collection of reviews or ratings, of the
     * item.
     *
     * @var AggregateRating [schema.org types: AggregateRating]
     */
    public $aggregateRating;

    /**
     * A person or organization attending the event. Supersedes attendees.
     *
     * @var mixed|Organization|Person [schema.org types: Organization, Person]
     */
    public $attendee;

    /**
     * An intended audience, i.e. a group for whom something was created.
     * Supersedes serviceAudience.
     *
     * @var Audience [schema.org types: Audience]
     */
    public $audience;

    /**
     * The person or organization who wrote a composition, or who is the composer
     * of a work performed at some event.
     *
     * @var mixed|Organization|Person [schema.org types: Organization, Person]
     */
    public $composer;

    /**
     * A secondary contributor to the CreativeWork or Event.
     *
     * @var mixed|Organization|Person [schema.org types: Organization, Person]
     */
    public $contributor;

    /**
     * A director of e.g. tv, radio, movie, video gaming etc. content, or of an
     * event. Directors can be associated with individual items or with a series,
     * episode, clip. Supersedes directors.
     *
     * @var Person [schema.org types: Person]
     */
    public $director;

    /**
     * The time admission will commence.
     *
     * @var mixed|DateTime|Time [schema.org types: DateTime, Time]
     */
    public $doorTime;

    /**
     * The duration of the item (movie, audio recording, event, etc.) in ISO 8601
     * date format.
     *
     * @var Duration [schema.org types: Duration]
     */
    public $duration;

    /**
     * The end date and time of the item (in ISO 8601 date format).
     *
     * @var mixed|Date|DateTime [schema.org types: Date, DateTime]
     */
    public $endDate;

    /**
     * The eventAttendanceMode of an event indicates whether it occurs online,
     * offline, or a mix.
     *
     * @var EventAttendanceModeEnumeration [schema.org types: EventAttendanceModeEnumeration]
     */
    public $eventAttendanceMode;

    /**
     * Associates an Event with a Schedule. There are circumstances where it is
     * preferable to share a schedule for a series of repeating events rather than
     * data on the individual events themselves. For example, a website or
     * application might prefer to publish a schedule for a weekly gym class
     * rather than provide data on every event. A schedule could be processed by
     * applications to add forthcoming events to a calendar. An Event that is
     * associated with a Schedule using this property should not have startDate or
     * endDate properties. These are instead defined within the associated
     * Schedule, this avoids any ambiguity for clients using the data. The
     * property might have repeated values to specify different schedules, e.g.
     * for different months or seasons.
     *
     * @var Schedule [schema.org types: Schedule]
     */
    public $eventSchedule;

    /**
     * An eventStatus of an event represents its status; particularly useful when
     * an event is cancelled or rescheduled.
     *
     * @var EventStatusType [schema.org types: EventStatusType]
     */
    public $eventStatus;

    /**
     * A person or organization that supports (sponsors) something through some
     * kind of financial contribution.
     *
     * @var mixed|Organization|Person [schema.org types: Organization, Person]
     */
    public $funder;

    /**
     * The language of the content or performance or used in an action. Please use
     * one of the language codes from the IETF BCP 47 standard. See also
     * availableLanguage. Supersedes language.
     *
     * @var mixed|Language|string [schema.org types: Language, Text]
     */
    public $inLanguage;

    /**
     * A flag to signal that the item, event, or place is accessible for free.
     * Supersedes free.
     *
     * @var bool [schema.org types: Boolean]
     */
    public $isAccessibleForFree;

    /**
     * The location of for example where the event is happening, an organization
     * is located, or where an action takes place.
     *
     * @var mixed|Place|PostalAddress|string|VirtualLocation [schema.org types: Place, PostalAddress, Text, VirtualLocation]
     */
    public $location;

    /**
     * The total number of individuals that may attend an event or venue.
     *
     * @var int [schema.org types: Integer]
     */
    public $maximumAttendeeCapacity;

    /**
     * The maximum physical attendee capacity of an Event whose
     * eventAttendanceMode is OfflineEventAttendanceMode (or the offline aspects,
     * in the case of a MixedEventAttendanceMode).
     *
     * @var int [schema.org types: Integer]
     */
    public $maximumPhysicalAttendeeCapacity;

    /**
     * The maximum physical attendee capacity of an Event whose
     * eventAttendanceMode is OnlineEventAttendanceMode (or the online aspects, in
     * the case of a MixedEventAttendanceMode).
     *
     * @var int [schema.org types: Integer]
     */
    public $maximumVirtualAttendeeCapacity;

    /**
     * An offer to provide this item???for example, an offer to sell a product,
     * rent the DVD of a movie, perform a service, or give away tickets to an
     * event. Use businessFunction to indicate the kind of transaction offered,
     * i.e. sell, lease, etc. This property can also be used to describe a Demand.
     * While this property is listed as expected on a number of common types, it
     * can be used in others. In that case, using a second type, such as Product
     * or a subtype of Product, can clarify the nature of the offer. Inverse
     * property: itemOffered.
     *
     * @var mixed|Demand|Offer [schema.org types: Demand, Offer]
     */
    public $offers;

    /**
     * An organizer of an Event.
     *
     * @var mixed|Organization|Person [schema.org types: Organization, Person]
     */
    public $organizer;

    /**
     * A performer at the event???for example, a presenter, musician, musical
     * group or actor. Supersedes performers.
     *
     * @var mixed|Organization|Person [schema.org types: Organization, Person]
     */
    public $performer;

    /**
     * Used in conjunction with eventStatus for rescheduled or cancelled events.
     * This property contains the previously scheduled start date. For rescheduled
     * events, the startDate property should be used for the newly scheduled start
     * date. In the (rare) case of an event that has been postponed and
     * rescheduled multiple times, this field may be repeated.
     *
     * @var Date [schema.org types: Date]
     */
    public $previousStartDate;

    /**
     * The CreativeWork that captured all or part of this Event. Inverse property:
     * recordedAt.
     *
     * @var CreativeWork [schema.org types: CreativeWork]
     */
    public $recordedIn;

    /**
     * The number of attendee places for an event that remain unallocated.
     *
     * @var int [schema.org types: Integer]
     */
    public $remainingAttendeeCapacity;

    /**
     * A review of the item. Supersedes reviews.
     *
     * @var Review [schema.org types: Review]
     */
    public $review;

    /**
     * A person or organization that supports a thing through a pledge, promise,
     * or financial contribution. e.g. a sponsor of a Medical Study or a corporate
     * sponsor of an event.
     *
     * @var mixed|Organization|Person [schema.org types: Organization, Person]
     */
    public $sponsor;

    /**
     * The start date and time of the item (in ISO 8601 date format).
     *
     * @var mixed|Date|DateTime [schema.org types: Date, DateTime]
     */
    public $startDate;

    /**
     * An Event that is part of this event. For example, a conference event
     * includes many presentations, each of which is a subEvent of the conference.
     * Supersedes subEvents. Inverse property: superEvent.
     *
     * @var Event [schema.org types: Event]
     */
    public $subEvent;

    /**
     * An event that this event is a part of. For example, a collection of
     * individual music performances might each have a music festival as their
     * superEvent. Inverse property: subEvent.
     *
     * @var Event [schema.org types: Event]
     */
    public $superEvent;

    /**
     * Organization or person who adapts a creative work to different languages,
     * regional differences and technical requirements of a target market, or that
     * translates during some event.
     *
     * @var mixed|Organization|Person [schema.org types: Organization, Person]
     */
    public $translator;

    /**
     * The typical expected age range, e.g. '7-9', '11-'.
     *
     * @var string [schema.org types: Text]
     */
    public $typicalAgeRange;

    /**
     * A work featured in some event, e.g. exhibited in an ExhibitionEvent.
     * Specific subproperties are available for workPerformed (e.g. a play), or a
     * workPresented (a Movie at a ScreeningEvent).
     *
     * @var CreativeWork [schema.org types: CreativeWork]
     */
    public $workFeatured;

    /**
     * A work performed in some event, for example a play performed in a
     * TheaterEvent.
     *
     * @var CreativeWork [schema.org types: CreativeWork]
     */
    public $workPerformed;

    // Static Protected Properties
    // =========================================================================

    /**
     * The Schema.org Property Names
     *
     * @var array
     */
    static protected $_schemaPropertyNames = [
        'about',
        'actor',
        'aggregateRating',
        'attendee',
        'audience',
        'composer',
        'contributor',
        'director',
        'doorTime',
        'duration',
        'endDate',
        'eventAttendanceMode',
        'eventSchedule',
        'eventStatus',
        'funder',
        'inLanguage',
        'isAccessibleForFree',
        'location',
        'maximumAttendeeCapacity',
        'maximumPhysicalAttendeeCapacity',
        'maximumVirtualAttendeeCapacity',
        'offers',
        'organizer',
        'performer',
        'previousStartDate',
        'recordedIn',
        'remainingAttendeeCapacity',
        'review',
        'sponsor',
        'startDate',
        'subEvent',
        'superEvent',
        'translator',
        'typicalAgeRange',
        'workFeatured',
        'workPerformed'
    ];

    /**
     * The Schema.org Property Expected Types
     *
     * @var array
     */
    static protected $_schemaPropertyExpectedTypes = [
        'about' => ['Thing'],
        'actor' => ['Person'],
        'aggregateRating' => ['AggregateRating'],
        'attendee' => ['Organization','Person'],
        'audience' => ['Audience'],
        'composer' => ['Organization','Person'],
        'contributor' => ['Organization','Person'],
        'director' => ['Person'],
        'doorTime' => ['DateTime','Time'],
        'duration' => ['Duration'],
        'endDate' => ['Date','DateTime'],
        'eventAttendanceMode' => ['EventAttendanceModeEnumeration'],
        'eventSchedule' => ['Schedule'],
        'eventStatus' => ['EventStatusType'],
        'funder' => ['Organization','Person'],
        'inLanguage' => ['Language','Text'],
        'isAccessibleForFree' => ['Boolean'],
        'location' => ['Place','PostalAddress','Text','VirtualLocation'],
        'maximumAttendeeCapacity' => ['Integer'],
        'maximumPhysicalAttendeeCapacity' => ['Integer'],
        'maximumVirtualAttendeeCapacity' => ['Integer'],
        'offers' => ['Demand','Offer'],
        'organizer' => ['Organization','Person'],
        'performer' => ['Organization','Person'],
        'previousStartDate' => ['Date'],
        'recordedIn' => ['CreativeWork'],
        'remainingAttendeeCapacity' => ['Integer'],
        'review' => ['Review'],
        'sponsor' => ['Organization','Person'],
        'startDate' => ['Date','DateTime'],
        'subEvent' => ['Event'],
        'superEvent' => ['Event'],
        'translator' => ['Organization','Person'],
        'typicalAgeRange' => ['Text'],
        'workFeatured' => ['CreativeWork'],
        'workPerformed' => ['CreativeWork']
    ];

    /**
     * The Schema.org Property Descriptions
     *
     * @var array
     */
    static protected $_schemaPropertyDescriptions = [
        'about' => 'The subject matter of the content. Inverse property: subjectOf.',
        'actor' => 'An actor, e.g. in tv, radio, movie, video games etc., or in an event. Actors can be associated with individual items or with a series, episode, clip. Supersedes actors.',
        'aggregateRating' => 'The overall rating, based on a collection of reviews or ratings, of the item.',
        'attendee' => 'A person or organization attending the event. Supersedes attendees.',
        'audience' => 'An intended audience, i.e. a group for whom something was created. Supersedes serviceAudience.',
        'composer' => 'The person or organization who wrote a composition, or who is the composer of a work performed at some event.',
        'contributor' => 'A secondary contributor to the CreativeWork or Event.',
        'director' => 'A director of e.g. tv, radio, movie, video gaming etc. content, or of an event. Directors can be associated with individual items or with a series, episode, clip. Supersedes directors.',
        'doorTime' => 'The time admission will commence.',
        'duration' => 'The duration of the item (movie, audio recording, event, etc.) in ISO 8601 date format.',
        'endDate' => 'The end date and time of the item (in ISO 8601 date format).',
        'eventAttendanceMode' => 'The eventAttendanceMode of an event indicates whether it occurs online, offline, or a mix.',
        'eventSchedule' => 'Associates an Event with a Schedule. There are circumstances where it is preferable to share a schedule for a series of repeating events rather than data on the individual events themselves. For example, a website or application might prefer to publish a schedule for a weekly gym class rather than provide data on every event. A schedule could be processed by applications to add forthcoming events to a calendar. An Event that is associated with a Schedule using this property should not have startDate or endDate properties. These are instead defined within the associated Schedule, this avoids any ambiguity for clients using the data. The property might have repeated values to specify different schedules, e.g. for different months or seasons.',
        'eventStatus' => 'An eventStatus of an event represents its status; particularly useful when an event is cancelled or rescheduled.',
        'funder' => 'A person or organization that supports (sponsors) something through some kind of financial contribution.',
        'inLanguage' => 'The language of the content or performance or used in an action. Please use one of the language codes from the IETF BCP 47 standard. See also availableLanguage. Supersedes language.',
        'isAccessibleForFree' => 'A flag to signal that the item, event, or place is accessible for free. Supersedes free.',
        'location' => 'The location of for example where the event is happening, an organization is located, or where an action takes place.',
        'maximumAttendeeCapacity' => 'The total number of individuals that may attend an event or venue.',
        'maximumPhysicalAttendeeCapacity' => 'The maximum physical attendee capacity of an Event whose eventAttendanceMode is OfflineEventAttendanceMode (or the offline aspects, in the case of a MixedEventAttendanceMode).',
        'maximumVirtualAttendeeCapacity' => 'The maximum physical attendee capacity of an Event whose eventAttendanceMode is OnlineEventAttendanceMode (or the online aspects, in the case of a MixedEventAttendanceMode).',
        'offers' => 'An offer to provide this item???for example, an offer to sell a product, rent the DVD of a movie, perform a service, or give away tickets to an event. Use businessFunction to indicate the kind of transaction offered, i.e. sell, lease, etc. This property can also be used to describe a Demand. While this property is listed as expected on a number of common types, it can be used in others. In that case, using a second type, such as Product or a subtype of Product, can clarify the nature of the offer. Inverse property: itemOffered.',
        'organizer' => 'An organizer of an Event.',
        'performer' => 'A performer at the event???for example, a presenter, musician, musical group or actor. Supersedes performers.',
        'previousStartDate' => 'Used in conjunction with eventStatus for rescheduled or cancelled events. This property contains the previously scheduled start date. For rescheduled events, the startDate property should be used for the newly scheduled start date. In the (rare) case of an event that has been postponed and rescheduled multiple times, this field may be repeated.',
        'recordedIn' => 'The CreativeWork that captured all or part of this Event. Inverse property: recordedAt.',
        'remainingAttendeeCapacity' => 'The number of attendee places for an event that remain unallocated.',
        'review' => 'A review of the item. Supersedes reviews.',
        'sponsor' => 'A person or organization that supports a thing through a pledge, promise, or financial contribution. e.g. a sponsor of a Medical Study or a corporate sponsor of an event.',
        'startDate' => 'The start date and time of the item (in ISO 8601 date format).',
        'subEvent' => 'An Event that is part of this event. For example, a conference event includes many presentations, each of which is a subEvent of the conference. Supersedes subEvents. Inverse property: superEvent.',
        'superEvent' => 'An event that this event is a part of. For example, a collection of individual music performances might each have a music festival as their superEvent. Inverse property: subEvent.',
        'translator' => 'Organization or person who adapts a creative work to different languages, regional differences and technical requirements of a target market, or that translates during some event.',
        'typicalAgeRange' => 'The typical expected age range, e.g. \'7-9\', \'11-\'.',
        'workFeatured' => 'A work featured in some event, e.g. exhibited in an ExhibitionEvent. Specific subproperties are available for workPerformed (e.g. a play), or a workPresented (a Movie at a ScreeningEvent).',
        'workPerformed' => 'A work performed in some event, for example a play performed in a TheaterEvent.'
    ];

    /**
     * The Schema.org Google Required Schema for this type
     *
     * @var array
     */
    static protected $_googleRequiredSchema = [
    ];

    /**
     * The Schema.org composed Google Recommended Schema for this type
     *
     * @var array
     */
    static protected $_googleRecommendedSchema = [
    ];

    // Public Methods
    // =========================================================================

    /**
    * @inheritdoc
    */
    public function init()
    {
        parent::init();
        self::$schemaPropertyNames = array_merge(
            parent::$schemaPropertyNames,
            self::$_schemaPropertyNames
        );

        self::$schemaPropertyExpectedTypes = array_merge(
            parent::$schemaPropertyExpectedTypes,
            self::$_schemaPropertyExpectedTypes
        );

        self::$schemaPropertyDescriptions = array_merge(
            parent::$schemaPropertyDescriptions,
            self::$_schemaPropertyDescriptions
        );

        self::$googleRequiredSchema = array_merge(
            parent::$googleRequiredSchema,
            self::$_googleRequiredSchema
        );

        self::$googleRecommendedSchema = array_merge(
            parent::$googleRecommendedSchema,
            self::$_googleRecommendedSchema
        );
    }

    /**
    * @inheritdoc
    */
    public function rules()
    {
        $rules = parent::rules();
        $rules = array_merge($rules, [
            [['about','actor','aggregateRating','attendee','audience','composer','contributor','director','doorTime','duration','endDate','eventAttendanceMode','eventSchedule','eventStatus','funder','inLanguage','isAccessibleForFree','location','maximumAttendeeCapacity','maximumPhysicalAttendeeCapacity','maximumVirtualAttendeeCapacity','offers','organizer','performer','previousStartDate','recordedIn','remainingAttendeeCapacity','review','sponsor','startDate','subEvent','superEvent','translator','typicalAgeRange','workFeatured','workPerformed'], 'validateJsonSchema'],
            [self::$_googleRequiredSchema, 'required', 'on' => ['google'], 'message' => 'This property is required by Google.'],
            [self::$_googleRecommendedSchema, 'required', 'on' => ['google'], 'message' => 'This property is recommended by Google.']
        ]);

        return $rules;
    }
}
