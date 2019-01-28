<?php

namespace Illuminate\Notifications\Messages;

class SlackAttachmentButton
{
    /**
     * The text of the attachment button.
     *
     * @var string
     */
    protected $text;

    /**
     * The name of the attachment button.
     *
     * @var string
     */
    protected $name;

    /**
     * The value of the attachment button.
     *
     * @var string
     */
    protected $value;

    /**
     * The style of the attachment button.
     *
     * @var string
     */
    protected $style;

    /**
     * The url of the attachment button.
     *
     * @var string
     */
    protected $url;

    /**
     * The confirmation of the attachment button.
     *
     * @var array
     */
    protected $confirm;

    /**
     * Set the text of the button.
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
     * Set the name of the button.
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
     * Set the value of the button.
     *
     * @param  string $value
     * @return $this
     */
    public function value($value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * Set the style of the button.
     *
     * @param  string $style
     * @return $this
     */
    public function style($style)
    {
        $this->style = $style;

        return $this;
    }

    /**
     * Set the url of the button.
     *
     * @param  string $url
     * @return $this
     */
    public function url($url)
    {
        $this->url = $url;

        return $this;
    }
    
    /**
     * Set the confirmation of the button.
     *
     * @param  string $title
     * @param  string $text
     * @param  string $okText
     * @param  string $dismissText
     * @return $this
     */
    public function confirm($title, $text = '', $okText = 'Yes', $dismissText = 'No')
    {
        if (is_array($title)) {
            extract($title);
        }
        
        $this->confirm = [
            'type' => 'button',
            'title' => $title,
            'text' => $text,
            'ok_text' => $okText,
            'dismiss_text' => $dismissText
        ];

        return $this;
    }

    /**
     * Get the array representation of the attachment button.
     *
     * @return array
     */
    public function toArray()
    {
        return array_filter([
            'type' => 'button',
            'confirm' => $this->confirm,
            'name' => $this->name,
            'style' => $this->style,
            'text' => $this->text,
            'url' => $this->url,
            'value' => $this->value
        ]);
    }
}
