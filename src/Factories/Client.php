<?php

namespace Benmag\Rancher\Factories;

use GuzzleHttp\Client as HttpClient;

/**
 * Rancher API wrapper for Laravel
 *
 * @package  Rancher
 * @author   @benmagg
 */
class Client implements \Benmag\Rancher\Contracts\Client {

    /**
     * @var HttpClient
     */
    protected $client;

    /**
     * @param $baseUrl
     * @param $accessKey
     * @param $secretKey
     */
    public function __construct($baseUrl, $accessKey, $secretKey)
    {
        $this->client = new HttpClient([
            'base_uri' => $baseUrl,
            'auth' => [$accessKey, $secretKey],
        ]);
    }

    /**
     *
     */
    private function prepareData($params = [], $options = [])
    {
        // TODO: Check if we can just send all data as json
        return array_merge([(array_key_exists('content_type', $options) ? $options['content_type'] : "json") => $params], $options);
    }

    /**
     * @param $endPoint
     * @param array $params
     * @return mixed
     * @throws \Exception
     */
    public function get($endPoint, array $params = [])
    {
        $response = $this->client->get($endPoint, [ 'query' => $params ]);
        switch ($response->getHeader('content-type'))
        {
            case "application/json":
                return $response->json();
                break;
            default:
                return $response->getBody()->getContents();
        }
    }

    /**
     * @param $endPoint
     * @param array $params
     * @param array $options
     * @return string
     * @throws \Exception
     */
    public function post($endPoint, array $params = [], array $options = [])
    {
        $response = $this->client->post($endPoint, $this->prepareData($params, $options));
        switch ($response->getHeader('content-type'))
        {
            case "application/json":
                return $response->json();
                break;
            default:
                return $response->getBody()->getContents();
        }
    }


    /**
     * @param $endPoint
     * @param array $params
     * @return string
     * @throws \Exception
     */
    public function put($endPoint, array $params = [])
    {
        $response = $this->client->put($endPoint, [ 'json' => $params, 'http_errors' => false ]);
        

        switch ($response->getHeader('content-type'))
        {
            case "application/json":
                return $response->json();
                break;
            default:
                return $response->getBody()->getContents();
        }
    }

    /**
     * @param $endPoint
     * @param array $params
     * @param array $options
     * @return string
     * @throws \Exception
     */
    public function delete($endPoint, array $params = [], array $options = [])
    {
        $response = $this->client->delete($endPoint, $this->prepareData($params, $options));
        switch ($response->getHeader('content-type'))
        {
            case "application/json":
                return $response->json();
                break;
            default:
                return $response->getBody()->getContents();
        }
    }

}

