<?php


namespace SoMin\API\ImageProcessing\Responses;

use SoMin\Common\AbstractResponse;

/**
 * Structure to be returned as a result of Image Concept Detection API method.
 */
class ImageConcepts extends AbstractResponse
{
    private $error;
    private $distributions;

    /**
     * @param $data
     */
    public function setData($data)
    {
        if (!empty($data['error'])) {
            $this->error = $data['error'];
        }

        if ($this->getHttpCode() == 200) {
            $this->distributions = $data['results'];
        }
    }

    /**
     * Error message if request went wrong. Null if request is successful.
     *
     * @return string|null
     */
    public function getError()
    {
        return $this->error;
    }

    /**
     * Concept distribution.
     *
     * @return array
     */
    public function getDistributions()
    {
        return $this->distributions;
    }
}