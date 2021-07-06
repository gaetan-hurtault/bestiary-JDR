<?php

namespace App\Controller;

use App\Repository\MonsterRepository;
use App\Repository\PartRegionRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MonsterController extends AbstractController
{
    private $monsterRepository;
    private $partRegionRepository;

    public function __construct(MonsterRepository $monsterRepository,PartRegionRepository $partRegionRepository)
    {
        $this->monsterRepository = $monsterRepository;    
        $this->partRegionRepository = $partRegionRepository;    
    }
    /**
     * @Route("/monster", name="monster.index")
     */
    public function index(): Response
    {
        $partRegions = $this->partRegionRepository->findAll();
        return $this->render('monster/index.html.twig', [
        'partRegions' => $partRegions,    
        ]);
    }
    /**
     * @Route("/monster/vignette", name="monster.vignette")
     */
    public function vignette(): Response
    {
        return $this->render('monster/vignette.html.twig', [
           
        ]);
    }
}
