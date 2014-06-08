<?php

/*
 * This file is part of the CLSlackBundle.
 *
 * (c) Cas Leentfaar <info@casleentfaar.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CL\Bundle\SlackBundle\Slack\Payload\Type\Api;

use CL\Bundle\SlackBundle\Slack\Payload\ResponseHelper\SearchAllResponseHelper;
use Guzzle\Http\Message\Response;

/**
 * This payload allows you to search in Slack's messages and files.
 *
 * @author Cas Leentfaar <info@casleentfaar.com>
 */
class SearchAllType extends AbstractSearchType
{
    /**
     * {@inheritdoc}
     */
    public function createResponseHelper(Response $response)
    {
        return new SearchAllResponseHelper($response);
    }

    /**
     * {@inheritdoc}
     */
    public function getMethodSlug()
    {
        return 'search.all';
    }
}
