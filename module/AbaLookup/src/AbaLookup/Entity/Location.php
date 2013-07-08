<?php

namespace AbaLookup\Entity;

use
	Doctrine\ORM\Mapping\Column,
	Doctrine\ORM\Mapping\Entity as DoctrineEntity,
	Doctrine\ORM\Mapping\GeneratedValue,
	Doctrine\ORM\Mapping\Id,
	Doctrine\ORM\Mapping\Table,
	InvalidArgumentException,
	Zend\Validator\StringLength
;

/**
 * @DoctrineEntity
 * @Table(name = "locations")
 *
 * A possible user location
 */
class Location
{
	/**
	 * @Id
	 * @Column(type = "integer")
	 * @GeneratedValue
	 */
	protected $id;

	/**
	 * @Column(type = "string")
	 */
	protected $name;

	/**
	 * @Column(type = "boolean")
	 */
	protected $enabled;

	/**
	 * String length validator
	 */
	protected static $strlen;

	/**
	 * Initialise static fields
	 *
	 * Called immediately after class definition.
	 */
	public static function init()
	{
		self::$strlen = new StringLength(['min' => 1]);
	}

	/**
	 * Constructor
	 */
	public function __construct($name)
	{
		if (!is_string($name) || !self::$strlen->isValid($name)) {
			throw new InvalidArgumentException();
		}
		$this->name = $name;
		$this->enabled = TRUE;
	}

	/**
	 * Set the name of the location
	 *
	 * @param string $name The name of the location.
	 * @return $this
	 */
	public function setName($name)
	{
		if (!self::$strlen->isValid($name)) {
			throw new InvalidArgumentException();
		}
		$this->name = $name;
		return $this;
	}

	/**
	 * Set the enabled value of the location
	 *
	 * @param bool $enabled Whether this location is enabled.
	 * @return $this
	 */
	public function setEnabled($enabled)
	{
		if (!is_bool($enabled)) {
			throw new InvalidArgumentException();
		}
		$this->enabled = $enabled;
		return $this;
	}

	/**
	 * Enable the location
	 *
	 * @return $this
	 */
	public function enable()
	{
		$this->enabled = TRUE;
		return $this;
	}

	/**
	 * Disable the location
	 *
	 * @return $this
	 */
	public function disable()
	{
		$this->enabled = FALSE;
		return $this;
	}

	/**
	 * @return int $id
	 */
	public function getId()
	{
		return $this->id;
	}

	/**
	 * @return string $name
	 */
	public function getName()
	{
		return $this->name;
	}

	/**
	 * @return bool $enabled
	 */
	public function getEnabled()
	{
		return $this->enabled;
	}
}

Location::init();