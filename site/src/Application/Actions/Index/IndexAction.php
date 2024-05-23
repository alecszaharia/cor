<?php

declare(strict_types=1);

namespace App\Application\Actions\Index;

use App\Application\Actions\User\UserAction;
use Psr\Http\Message\ResponseInterface as Response;
use Slim\Views\Twig;

class IndexAction extends UserAction
{
    /**
     * {@inheritdoc}
     */
    protected function action(): Response
    {
        $b = $this->view->getEnvironment();

        return $this->view->render($this->response, 'Index/index.html.twig', ['users' => []]);
    }
}
