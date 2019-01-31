<?php
/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="OdgMetadata.php">
 *   Copyright (c) 2019 Aspose Pty Ltd. All rights reserved.
 * </copyright>
 * <summary>
 *   Permission is hereby granted, free of charge, to any person obtaining a copy
 *  of this software and associated documentation files (the "Software"), to deal
 *  in the Software without restriction, including without limitation the rights
 *  to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 *  copies of the Software, and to permit persons to whom the Software is
 *  furnished to do so, subject to the following conditions:
 * 
 *  The above copyright notice and this permission notice shall be included in all
 *  copies or substantial portions of the Software.
 * 
 *  THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 *  IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 *  FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 *  AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 *  LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 *  OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
 *  SOFTWARE.
 * </summary>
 * --------------------------------------------------------------------------------------------------------------------
 */

namespace Aspose\Imaging\Model;

use \ArrayAccess;
use \Aspose\Imaging\ObjectSerializer;
use \Aspose\Imaging\Model\SaaSposeResponse;

/**
 * OdgMetadata
 *
 * @description ODG format metadata
 */
class OdgMetadata implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "OdgMetadata";

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'generator' => 'string',
        'title' => 'string',
        'description' => 'string',
        'subject' => 'string',
        'keywords' => 'string',
        'initial_creator' => 'string',
        'creator' => 'string',
        'printed_by' => 'string',
        'creation_date_time' => 'string',
        'modification_date_time' => 'string',
        'print_date_time' => 'string',
        'document_template' => 'string',
        'automatic_reload' => 'string',
        'hyperlink_behavior' => 'string',
        'language' => 'string',
        'editing_cycles' => 'string',
        'editing_duration' => 'string',
        'document_statistics' => 'string'
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'generator' => null,
        'title' => null,
        'description' => null,
        'subject' => null,
        'keywords' => null,
        'initial_creator' => null,
        'creator' => null,
        'printed_by' => null,
        'creation_date_time' => null,
        'modification_date_time' => null,
        'print_date_time' => null,
        'document_template' => null,
        'automatic_reload' => null,
        'hyperlink_behavior' => null,
        'language' => null,
        'editing_cycles' => null,
        'editing_duration' => null,
        'document_statistics' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'generator' => 'Generator',
        'title' => 'Title',
        'description' => 'Description',
        'subject' => 'Subject',
        'keywords' => 'Keywords',
        'initial_creator' => 'InitialCreator',
        'creator' => 'Creator',
        'printed_by' => 'PrintedBy',
        'creation_date_time' => 'CreationDateTime',
        'modification_date_time' => 'ModificationDateTime',
        'print_date_time' => 'PrintDateTime',
        'document_template' => 'DocumentTemplate',
        'automatic_reload' => 'AutomaticReload',
        'hyperlink_behavior' => 'HyperlinkBehavior',
        'language' => 'Language',
        'editing_cycles' => 'EditingCycles',
        'editing_duration' => 'EditingDuration',
        'document_statistics' => 'DocumentStatistics'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'generator' => 'setGenerator',
        'title' => 'setTitle',
        'description' => 'setDescription',
        'subject' => 'setSubject',
        'keywords' => 'setKeywords',
        'initial_creator' => 'setInitialCreator',
        'creator' => 'setCreator',
        'printed_by' => 'setPrintedBy',
        'creation_date_time' => 'setCreationDateTime',
        'modification_date_time' => 'setModificationDateTime',
        'print_date_time' => 'setPrintDateTime',
        'document_template' => 'setDocumentTemplate',
        'automatic_reload' => 'setAutomaticReload',
        'hyperlink_behavior' => 'setHyperlinkBehavior',
        'language' => 'setLanguage',
        'editing_cycles' => 'setEditingCycles',
        'editing_duration' => 'setEditingDuration',
        'document_statistics' => 'setDocumentStatistics'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'generator' => 'getGenerator',
        'title' => 'getTitle',
        'description' => 'getDescription',
        'subject' => 'getSubject',
        'keywords' => 'getKeywords',
        'initial_creator' => 'getInitialCreator',
        'creator' => 'getCreator',
        'printed_by' => 'getPrintedBy',
        'creation_date_time' => 'getCreationDateTime',
        'modification_date_time' => 'getModificationDateTime',
        'print_date_time' => 'getPrintDateTime',
        'document_template' => 'getDocumentTemplate',
        'automatic_reload' => 'getAutomaticReload',
        'hyperlink_behavior' => 'getHyperlinkBehavior',
        'language' => 'getLanguage',
        'editing_cycles' => 'getEditingCycles',
        'editing_duration' => 'getEditingDuration',
        'document_statistics' => 'getDocumentStatistics'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['generator'] = isset($data['generator']) ? $data['generator'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['subject'] = isset($data['subject']) ? $data['subject'] : null;
        $this->container['keywords'] = isset($data['keywords']) ? $data['keywords'] : null;
        $this->container['initial_creator'] = isset($data['initial_creator']) ? $data['initial_creator'] : null;
        $this->container['creator'] = isset($data['creator']) ? $data['creator'] : null;
        $this->container['printed_by'] = isset($data['printed_by']) ? $data['printed_by'] : null;
        $this->container['creation_date_time'] = isset($data['creation_date_time']) ? $data['creation_date_time'] : null;
        $this->container['modification_date_time'] = isset($data['modification_date_time']) ? $data['modification_date_time'] : null;
        $this->container['print_date_time'] = isset($data['print_date_time']) ? $data['print_date_time'] : null;
        $this->container['document_template'] = isset($data['document_template']) ? $data['document_template'] : null;
        $this->container['automatic_reload'] = isset($data['automatic_reload']) ? $data['automatic_reload'] : null;
        $this->container['hyperlink_behavior'] = isset($data['hyperlink_behavior']) ? $data['hyperlink_behavior'] : null;
        $this->container['language'] = isset($data['language']) ? $data['language'] : null;
        $this->container['editing_cycles'] = isset($data['editing_cycles']) ? $data['editing_cycles'] : null;
        $this->container['editing_duration'] = isset($data['editing_duration']) ? $data['editing_duration'] : null;
        $this->container['document_statistics'] = isset($data['document_statistics']) ? $data['document_statistics'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        return true;
    }


    /**
     * Gets generator
     *
     * @return string
     */
    public function getGenerator()
    {
        return $this->container['generator'];
    }

    /**
     * Sets generator
     *
     * @param string $generator Gets or sets the generator.
     *
     * @return $this
     */
    public function setGenerator($generator)
    {
        $this->container['generator'] = $generator;

        return $this;
    }

    /**
     * Gets title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string $title Gets or sets the title.
     *
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description Gets or sets the description.
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets subject
     *
     * @return string
     */
    public function getSubject()
    {
        return $this->container['subject'];
    }

    /**
     * Sets subject
     *
     * @param string $subject Gets or sets the subject.
     *
     * @return $this
     */
    public function setSubject($subject)
    {
        $this->container['subject'] = $subject;

        return $this;
    }

    /**
     * Gets keywords
     *
     * @return string
     */
    public function getKeywords()
    {
        return $this->container['keywords'];
    }

    /**
     * Sets keywords
     *
     * @param string $keywords Gets or sets the keywords.
     *
     * @return $this
     */
    public function setKeywords($keywords)
    {
        $this->container['keywords'] = $keywords;

        return $this;
    }

    /**
     * Gets initial_creator
     *
     * @return string
     */
    public function getInitialCreator()
    {
        return $this->container['initial_creator'];
    }

    /**
     * Sets initial_creator
     *
     * @param string $initial_creator Gets or sets the initial creator.
     *
     * @return $this
     */
    public function setInitialCreator($initial_creator)
    {
        $this->container['initial_creator'] = $initial_creator;

        return $this;
    }

    /**
     * Gets creator
     *
     * @return string
     */
    public function getCreator()
    {
        return $this->container['creator'];
    }

    /**
     * Sets creator
     *
     * @param string $creator Gets or sets the creator.
     *
     * @return $this
     */
    public function setCreator($creator)
    {
        $this->container['creator'] = $creator;

        return $this;
    }

    /**
     * Gets printed_by
     *
     * @return string
     */
    public function getPrintedBy()
    {
        return $this->container['printed_by'];
    }

    /**
     * Sets printed_by
     *
     * @param string $printed_by Gets or sets the \"PrintedBy\" record.
     *
     * @return $this
     */
    public function setPrintedBy($printed_by)
    {
        $this->container['printed_by'] = $printed_by;

        return $this;
    }

    /**
     * Gets creation_date_time
     *
     * @return string
     */
    public function getCreationDateTime()
    {
        return $this->container['creation_date_time'];
    }

    /**
     * Sets creation_date_time
     *
     * @param string $creation_date_time Gets or sets the creation date and time.
     *
     * @return $this
     */
    public function setCreationDateTime($creation_date_time)
    {
        $this->container['creation_date_time'] = $creation_date_time;

        return $this;
    }

    /**
     * Gets modification_date_time
     *
     * @return string
     */
    public function getModificationDateTime()
    {
        return $this->container['modification_date_time'];
    }

    /**
     * Sets modification_date_time
     *
     * @param string $modification_date_time Gets or sets the modification date and time.
     *
     * @return $this
     */
    public function setModificationDateTime($modification_date_time)
    {
        $this->container['modification_date_time'] = $modification_date_time;

        return $this;
    }

    /**
     * Gets print_date_time
     *
     * @return string
     */
    public function getPrintDateTime()
    {
        return $this->container['print_date_time'];
    }

    /**
     * Sets print_date_time
     *
     * @param string $print_date_time Gets or sets the print date and time.
     *
     * @return $this
     */
    public function setPrintDateTime($print_date_time)
    {
        $this->container['print_date_time'] = $print_date_time;

        return $this;
    }

    /**
     * Gets document_template
     *
     * @return string
     */
    public function getDocumentTemplate()
    {
        return $this->container['document_template'];
    }

    /**
     * Sets document_template
     *
     * @param string $document_template Gets or sets the document template.
     *
     * @return $this
     */
    public function setDocumentTemplate($document_template)
    {
        $this->container['document_template'] = $document_template;

        return $this;
    }

    /**
     * Gets automatic_reload
     *
     * @return string
     */
    public function getAutomaticReload()
    {
        return $this->container['automatic_reload'];
    }

    /**
     * Sets automatic_reload
     *
     * @param string $automatic_reload Gets or sets the automatic reload.
     *
     * @return $this
     */
    public function setAutomaticReload($automatic_reload)
    {
        $this->container['automatic_reload'] = $automatic_reload;

        return $this;
    }

    /**
     * Gets hyperlink_behavior
     *
     * @return string
     */
    public function getHyperlinkBehavior()
    {
        return $this->container['hyperlink_behavior'];
    }

    /**
     * Sets hyperlink_behavior
     *
     * @param string $hyperlink_behavior Gets or sets the hyperlink behavior.
     *
     * @return $this
     */
    public function setHyperlinkBehavior($hyperlink_behavior)
    {
        $this->container['hyperlink_behavior'] = $hyperlink_behavior;

        return $this;
    }

    /**
     * Gets language
     *
     * @return string
     */
    public function getLanguage()
    {
        return $this->container['language'];
    }

    /**
     * Sets language
     *
     * @param string $language Gets or sets the language.
     *
     * @return $this
     */
    public function setLanguage($language)
    {
        $this->container['language'] = $language;

        return $this;
    }

    /**
     * Gets editing_cycles
     *
     * @return string
     */
    public function getEditingCycles()
    {
        return $this->container['editing_cycles'];
    }

    /**
     * Sets editing_cycles
     *
     * @param string $editing_cycles Gets or sets the editing cycles.
     *
     * @return $this
     */
    public function setEditingCycles($editing_cycles)
    {
        $this->container['editing_cycles'] = $editing_cycles;

        return $this;
    }

    /**
     * Gets editing_duration
     *
     * @return string
     */
    public function getEditingDuration()
    {
        return $this->container['editing_duration'];
    }

    /**
     * Sets editing_duration
     *
     * @param string $editing_duration Gets or sets the duration of the editing.
     *
     * @return $this
     */
    public function setEditingDuration($editing_duration)
    {
        $this->container['editing_duration'] = $editing_duration;

        return $this;
    }

    /**
     * Gets document_statistics
     *
     * @return string
     */
    public function getDocumentStatistics()
    {
        return $this->container['document_statistics'];
    }

    /**
     * Sets document_statistics
     *
     * @param string $document_statistics Gets or sets the document statistics.
     *
     * @return $this
     */
    public function setDocumentStatistics($document_statistics)
    {
        $this->container['document_statistics'] = $document_statistics;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


