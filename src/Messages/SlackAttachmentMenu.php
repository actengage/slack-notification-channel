<?php

namespace Illuminate\Notifications\Messages;

class SlackAttachmentMenu
{
    /**
     * The text of the attachment menu.
     *
     * @var string
     */
    protected $text;

    /**
     * The name of the attachment menu.
     *
     * @var string
     */
    protected $name;

    /**
     * The options of the attachment menu.
     *
     * @var array
     */
    protected $options;

    /**
     * Set the text of the menu.
     *
     * @param  string $text
     * @return $this
     */
    public function text($text)
    {
        $this->text = $text;

        return $this;
    }

    /**
     * Set the name of the menu.
     *
     * @param  string $name
     * @return $this
     */
    public function name($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Set the options of the menu.
     *
     * @param  string $options
     * @return $this
     */
    public function options(array $options)
    {
        $this->options = $options;

        return $this;
    }

    /**
     * Add an option to the menu.
     *
     * @param  string $text
     * @param  string|null $value
     * @return $this
     */
    public function option($text, $value = null)
    {
        $this->options[] = [
            'text' => $text,
            'value' => ($value ?: $text)
        ];
    }

    /**
     * Get the array representation of the attachment menu.
     *
     * @return array
     */
    public function toArray()
    {
        return array_filter([
            'type' => 'select',
            'name' => $this->name,
            'text' => $this->text,
            'options' => array_filter($this->options)
        ]);
    }
}
