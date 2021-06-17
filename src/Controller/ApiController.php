<?php

namespace App\Controller;

use App\Tool\Helper;
use App\Validator\Validator;
use Exception;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ApiController extends AbstractController
{
    /**
     * @Route("/api/convert", name="api_convert")
     * @throws Exception
     */
    public function index(
        Request $request,
        Validator $validator,
        Helper $helper
    ): JsonResponse {
        // {"degree": "-1.2", "from": "Celsius", "to": "Fahrenheit"}
        $data = json_decode($request->getContent(), true);

        if ($errors = $validator->validate($data)) {
            return new JsonResponse(['error' => $errors], Response::HTTP_BAD_REQUEST);
        }

        $degree = $helper->getConverted($data);

        return new JsonResponse(['converted' => $degree], Response::HTTP_OK);
    }
}
