<?php
/**
 * This file is part of the TelegramBot package.
 *
 * (c) Avtandil Kikabidze aka LONGMAN <akalongman@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Longman\TelegramBot\Commands;

use Longman\TelegramBot\Command;
use Longman\TelegramBot\Entities\Entity;
use Longman\TelegramBot\Entities\InlineQueryResultArticle;
use Longman\TelegramBot\Entities\Update;
use Longman\TelegramBot\Request;

/**
 * Chosen inline result command
 */
class ChoseninlineresultCommand extends Command
{
    /**
     * Name
     *
     * @var string
     */
    protected $name = 'choseninlineresult';

    /**
     * Description
     *
     * @var string
     */
    protected $description = 'Chosen result query';

    /**
     * Version
     *
     * @var string
     */
    protected $version = '1.0.0';

    /**
     * Execute command
     *
     * @return boolean
     */
    public function execute()
    {
        //Information about chosen result is returned
        //$update = $this->getUpdate();
        //$inline_query = $update->getChosenInlineResult();
        //$query = $inline_query->getQuery();

        //System command, do nothing
        return true;
    }
}
