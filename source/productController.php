<?php

declare(strict_types=1);
class ProductController
{
    public function processRequest(string $method, ?string $id): void
    {
        var_dump($method, $id);

        // if request uri has an id, then it is a request that affects single resource
        // if there is no id, then it is a requests that affects a collection of resources
        // create a method for each request

        if ($id) {
            $this->processResourceRequest($method, $id);
        } else {
            $this->processCollectionResource($method);
        }
    }

    private function processResourceRequest(string $method, string $id): void
    {
    }

    private function processCollectionResource(string $method): void
    {
        // check request method for collection get or put
        // get returns list of products, post creates product
        switch ($method) {
            case 'GET':
                echo json_encode(["id" => 123]);
                break;
        }
    }
}
