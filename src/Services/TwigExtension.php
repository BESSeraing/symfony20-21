<?php


namespace App\Services;


use App\Services\Twig\LoremGenerator;
use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;
use Twig\TwigFunction;

class TwigExtension extends AbstractExtension
{
    // Surchargée vient de l'héritage (via implémentation)
    /**
     * @return array|TwigFilter[]
     */
    public function getFilters()
    {
        return [
            new TwigFilter('price', [$this, 'formatPrice']),
        ];
    }

    // Surchargée vient de l'héritage (via implémentation)
    public function getFunctions()
    {
        return [
            // Ici on utilise une methode statique, donc on la call via sa classe
            new TwigFunction('lorem', [LoremGenerator::class, 'generateLorem']),
        ];
    }

//    public function generateLipsum(int $length): string {
//
//    }

    public function formatPrice(float $input ): string {
        return $input . '€';
    }
}