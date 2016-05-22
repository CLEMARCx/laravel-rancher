<?php

namespace Benmag\Rancher\Factories\Entity;

abstract class AbstractEntity
{

    /**
     * List of available links for this entity
     *
     * @var array
     */
    protected $links;

    /**
     * List of available actions on this entity
     *
     * @var array
     */
    protected $actions;

    /**
     *
     * @param \stdClass|array|null $parameters
     */
    public function __construct($parameters = null)
    {
        if (!$parameters) {
            return;
        }

        if ($parameters instanceof \stdClass) {
            $parameters = get_object_vars($parameters);
        }

        // Dynamically add additional fields
        if(array_key_exists('_fields', $parameters)) {
            foreach($parameters['_fields'] as $field) {

                $property = static::convertToCamelCase($field);

                if(!property_exists($this, $property)) {
                    $this->$property = null;
                }

            }
        }

        $this->build($parameters);
    }

    /**
     * Fill the defined parameters with corresponding data
     *
     * @param array $parameters
     */
    public function build(array $parameters)
    {
        foreach ($parameters as $property => $value) {
            $property = static::convertToCamelCase($property);

            if (property_exists($this, $property)) {
                $this->setProperty($property, $value);
            }
        }
    }

    /**
     * By default, simply set the property to the specified value
     *
     * When the value is an array of objects with a `type`
     * parameter, check if instantiation is possible.
     *
     * The value of `type` is used to decide which
     * class to attempt to instantiate
     *
     * @param $property
     * @param $value
     */
    public function setProperty($property, $value)
    {

        $this->$property = $value;

        // We've got an array, lets see if we can instantiate an entity
        if(is_array($value) && !empty($value)) {

            $array = $value; // for clarity, call it what it is

            // We can only guess at what the entity might be if we have the `type`
            if(property_exists(head($array), 'type')) {

                // Get the class of the new entity we want to instantiate
                $class = (new \ReflectionClass($this))->getNamespaceName() . "\\" . ucfirst(head($array)->type);

                // Update each element of the array to have the instantiated entity
                if(class_exists($class)) foreach($array as $key => $value) {

                    // Update the array with the entity
                    $array[$key] = new $class($value);

                }

                // Update the property with the array of entities
                $this->$property = $array;

            }

        }

        // We've got an object, see if we can instantiate that into an entity
        else if(gettype($value) == "object") {

            if(property_exists($value, 'type')) {

                // Get the class of the new entity we want to instantiate
                $class = (new \ReflectionClass($this))->getNamespaceName() . "\\" . ucfirst($value->type);

                // Update the property with the instantiated entity
                if(class_exists($class)) {
                    $this->$property = new $class($value);
                }

            }
        }

    }

    /**
     * Attempt to instantiate an entity
     * based on the type parameter
     *
     * Magically build from type parameter
     */
    public function instantiateEntity(array $parameters)
    {

    }


    /**
     * @param string $str Snake case string
     *
     * @return string Camel case string
     */
    protected static function convertToCamelCase($str)
    {
        $callback = function ($match) {
            return strtoupper($match[2]);
        };

        return lcfirst(preg_replace_callback('/(^|_)([a-z])/', $callback, $str));
    }


    /**
     * Convert the entity to an array.
     *
     * @return array
     */
    public function toArray()
    {
        $result = array();
        foreach ($this as $key => $value) {
            $result[$key] = $value;
        }
        return $result;
    }

}