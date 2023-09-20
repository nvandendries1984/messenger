<?php namespace Nielsvandendries\Messenger\Components;

use Cms\Classes\ComponentBase;

/**
 * Chat Component
 *
 * @link https://docs.octobercms.com/3.x/extend/cms-components.html
 */
class Chat extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name' => 'Chat Component',
            'description' => 'No description provided yet...'
        ];
    }

    /**
     * @link https://docs.octobercms.com/3.x/element/inspector-types.html
     */
    public function defineProperties()
    {
        return [];
    }
}
