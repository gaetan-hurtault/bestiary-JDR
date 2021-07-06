<?php

namespace App\Controller\Admin;

use App\Entity\Monster;
use App\Entity\PartRegion;
use App\Entity\Region;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractDashboardController
{
    /**
     * @Route("/admin", name="admin")
     */
    public function index(): Response
    {
        return parent::index();
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Forumpage');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linktoDashboard('Dashboard', 'fa fa-home');
        yield MenuItem::linkToCrud('Monster', 'fas fa-list', Monster::class);
        yield MenuItem::linkToCrud('Region', 'fas fa-list', Region::class);
        yield MenuItem::linkToCrud('PartRegion', 'fas fa-list', PartRegion::class);
    }
}
