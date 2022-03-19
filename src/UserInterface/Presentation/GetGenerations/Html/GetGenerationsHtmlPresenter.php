<?php

namespace App\UserInterface\Presentation\GetGenerations\Html;

use App\Core\Application\UseCase\GetGenerations\GetGenerationsPresenterInferface;
use App\Core\Application\UseCase\GetGenerations\GetGenerationsResponse;

class GetGenerationsHtmlPresenter implements GetGenerationsPresenterInferface
{
    private GetGenerationsHtmlViewModel $viewModel;

    public function present(GetGenerationsResponse $response): void
    {
        $this->viewModel = new GetGenerationsHtmlViewModel();

        foreach ($response->generations as $generation) {
            $this->viewModel->generations[] = [
                'name' => $generation->getName(),
                'url' => $generation->getUrl(),
            ];
        }

        $this->viewModel->errors = $response->errors;
    }

    public function getViewModel(): GetGenerationsHtmlViewModel
    {
        return $this->viewModel;
    }
}
