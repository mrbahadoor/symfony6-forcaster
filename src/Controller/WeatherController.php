<?php
// declare(strict_types=1);

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class WeatherController extends AbstractController
{
    #[Route('/weather/highlander-says')]
    public function highlanderSays(): Response
    {
        // Draw an integet from 0 to 100
        $draw = random_int(0, 100);
        // if < 50 - rain else sunny
        $forcast = $draw < 50 ? "It's going to rain" : "It's going to be sunny";

        return $this->render('weather/highlander-says.html.twig', [
            'forcast' => $forcast,
        ]);
    }
}