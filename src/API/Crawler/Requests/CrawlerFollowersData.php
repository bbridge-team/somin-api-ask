<?php

namespace SoMin\API\Crawler\Requests;

use SoMin\Common\AbstractRequest;

/**
 * Structure to be send in Crawler Download request.
 */
class CrawlerFollowersData extends AbstractRequest
{
    /**
     * CrawlerFollowersData constructor.
     */
    public function __construct()
    {
        $this->data['data_id'] = null;
    }

    /**
     * Data identifier for request.
     *
     * @param string $pageId
     * @return $this
     */
    public function setPageId($pageId)
    {
        $this->data['data_id'] = $pageId;
        return $this;
    }

    /**
     * Gets page id.
     *
     * @return null|string
     */
    public function getPageId()
    {
        return $this->data['data_id'];
    }
}