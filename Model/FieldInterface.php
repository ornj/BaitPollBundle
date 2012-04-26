<?php

namespace Bait\PollBundle\Model;

/**
 * Interface defining shape of poll fields throughout
 * this bundle
 *
 * @author Ondrej Slintak <ondrowan@gmail.com>
 */
interface FieldInterface
{
    const TYPE_TEXT = 'TYPE_TEXT';
    const TYPE_INTEGER = 'TYPE_INTEGER';
    const TYPE_TEXTAREA = 'TYPE_TEXTAREA';
    const TYPE_FILE = 'TYPE_FILE';

    const TYPE_RADIO = 'TYPE_RADIO';
    const TYPE_CHECKBOX = 'TYPE_CHECKBOX';
    const TYPE_DROPDOWN = 'TYPE_DROPDOWN';
    const TYPE_DROPDOWN_MULTIPLE = 'TYPE_DROPDOWN_MULTIPLE';

    /**
     * Returns unique id of poll field.
     *
     * @return mixed
     */
    public function getId();

    /**
     * Checks if field has children. This helps to
     * determine if current field is standalone.
     *
     * @return bool
     */
    public function isStandalone();

    /**
     * Gets all children of poll field.
     *
     * @return mixed
     */
    public function getChildren();

    /**
     * Gets type of poll field.
     *
     * @return string
     */
    public function getType();

    /**
     * Gets validation constraints of field.
     *
     * @return array
     */
    public function getValidationConstraints();
}