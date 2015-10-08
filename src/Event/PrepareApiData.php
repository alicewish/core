<?php
/*
 * This file is part of Flarum.
 *
 * (c) Toby Zerner <toby.zerner@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Flarum\Event;

use Flarum\Api\Controller\AbstractSerializeController;
use Psr\Http\Message\ServerRequestInterface;
use Tobscure\JsonApi\Document;

class PrepareApiData
{
    /**
     * @var AbstractSerializeController
     */
    public $controller;

    /**
     * @var mixed
     */
    public $data;

    /**
     * @var ServerRequestInterface
     */
    public $request;

    /**
     * @var Document
     */
    public $document;

    /**
     * @param AbstractSerializeController $endpoint
     * @param mixed $data
     * @param ServerRequestInterface $request
     */
    public function __construct(
        AbstractSerializeController $controller,
        &$data,
        ServerRequestInterface $request,
        Document $document
    ) {
        $this->controller = $controller;
        $this->data = &$data;
        $this->request = $request;
        $this->document = $document;
    }
}