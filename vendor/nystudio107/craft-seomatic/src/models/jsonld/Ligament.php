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

use nystudio107\seomatic\models\jsonld\AnatomicalStructure;

/**
 * Ligament - A short band of tough, flexible, fibrous connective tissue that
 * functions to connect multiple bones, cartilages, and structurally support
 * joints.
 *
 * @author    nystudio107
 * @package   Seomatic
 * @since     3.0.0
 * @see       http://schema.org/Ligament
 */
class Ligament extends AnatomicalStructure
{
    // Static Public Properties
    // =========================================================================

    /**
     * The Schema.org Type Name
     *
     * @var string
     */
    static public $schemaTypeName = 'Ligament';

    /**
     * The Schema.org Type Scope
     *
     * @var string
     */
    static public $schemaTypeScope = 'https://schema.org/Ligament';

    /**
     * The Schema.org Type Description
     *
     * @var string
     */
    static public $schemaTypeDescription = 'A short band of tough, flexible, fibrous connective tissue that functions to connect multiple bones, cartilages, and structurally support joints.';

    /**
     * The Schema.org Type Extends
     *
     * @var string
     */
    static public $schemaTypeExtends = 'AnatomicalStructure';

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
     * If applicable, a description of the pathophysiology associated with the
     * anatomical system, including potential abnormal changes in the mechanical,
     * physical, and biochemical functions of the system.
     *
     * @var string [schema.org types: Text]
     */
    public $associatedPathophysiology;

    /**
     * Location in the body of the anatomical structure.
     *
     * @var string [schema.org types: Text]
     */
    public $bodyLocation;

    /**
     * Other anatomical structures to which this structure is connected.
     *
     * @var AnatomicalStructure [schema.org types: AnatomicalStructure]
     */
    public $connectedTo;

    /**
     * An image containing a diagram that illustrates the structure and/or its
     * component substructures and/or connections with other structures.
     *
     * @var ImageObject [schema.org types: ImageObject]
     */
    public $diagram;

    /**
     * The anatomical or organ system that this structure is part of.
     *
     * @var AnatomicalSystem [schema.org types: AnatomicalSystem]
     */
    public $partOfSystem;

    /**
     * A medical condition associated with this anatomy.
     *
     * @var MedicalCondition [schema.org types: MedicalCondition]
     */
    public $relatedCondition;

    /**
     * A medical therapy related to this anatomy.
     *
     * @var MedicalTherapy [schema.org types: MedicalTherapy]
     */
    public $relatedTherapy;

    /**
     * Component (sub-)structure(s) that comprise this anatomical structure.
     *
     * @var AnatomicalStructure [schema.org types: AnatomicalStructure]
     */
    public $subStructure;

    // Static Protected Properties
    // =========================================================================

    /**
     * The Schema.org Property Names
     *
     * @var array
     */
    static protected $_schemaPropertyNames = [
        'associatedPathophysiology',
        'bodyLocation',
        'connectedTo',
        'diagram',
        'partOfSystem',
        'relatedCondition',
        'relatedTherapy',
        'subStructure'
    ];

    /**
     * The Schema.org Property Expected Types
     *
     * @var array
     */
    static protected $_schemaPropertyExpectedTypes = [
        'associatedPathophysiology' => ['Text'],
        'bodyLocation' => ['Text'],
        'connectedTo' => ['AnatomicalStructure'],
        'diagram' => ['ImageObject'],
        'partOfSystem' => ['AnatomicalSystem'],
        'relatedCondition' => ['MedicalCondition'],
        'relatedTherapy' => ['MedicalTherapy'],
        'subStructure' => ['AnatomicalStructure']
    ];

    /**
     * The Schema.org Property Descriptions
     *
     * @var array
     */
    static protected $_schemaPropertyDescriptions = [
        'associatedPathophysiology' => 'If applicable, a description of the pathophysiology associated with the anatomical system, including potential abnormal changes in the mechanical, physical, and biochemical functions of the system.',
        'bodyLocation' => 'Location in the body of the anatomical structure.',
        'connectedTo' => 'Other anatomical structures to which this structure is connected.',
        'diagram' => 'An image containing a diagram that illustrates the structure and/or its component substructures and/or connections with other structures.',
        'partOfSystem' => 'The anatomical or organ system that this structure is part of.',
        'relatedCondition' => 'A medical condition associated with this anatomy.',
        'relatedTherapy' => 'A medical therapy related to this anatomy.',
        'subStructure' => 'Component (sub-)structure(s) that comprise this anatomical structure.'
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
            [['associatedPathophysiology','bodyLocation','connectedTo','diagram','partOfSystem','relatedCondition','relatedTherapy','subStructure'], 'validateJsonSchema'],
            [self::$_googleRequiredSchema, 'required', 'on' => ['google'], 'message' => 'This property is required by Google.'],
            [self::$_googleRecommendedSchema, 'required', 'on' => ['google'], 'message' => 'This property is recommended by Google.']
        ]);

        return $rules;
    }
}