<?php

/*
 * This file has been created by developers from BitBag.
 * Feel free to contact us once you face any issues or want to start
 * another great project.
 * You can find more information about us on https://bitbag.shop and write us
 * an email on mikolaj.krol@bitbag.pl.
 */

declare(strict_types=1);

namespace BitBag\SyliusVueStorefrontPlugin\Controller\User;

use BitBag\SyliusVueStorefrontPlugin\Factory\User\UserProfileViewFactoryInterface;
use BitBag\SyliusVueStorefrontPlugin\Sylius\Provider\LoggedInShopUserProviderInterface;
use FOS\RestBundle\View\View;
use FOS\RestBundle\View\ViewHandlerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

final class GetUserAction
{
    /** @var ViewHandlerInterface */
    private $viewHandler;

    /** @var LoggedInShopUserProviderInterface */
    private $loggedInShopUserProvider;

    /** @var UserProfileViewFactoryInterface */
    private $userProfileViewFactory;

    public function __construct(
        ViewHandlerInterface $viewHandler,
        LoggedInShopUserProviderInterface $loggedInShopUserProvider,
        UserProfileViewFactoryInterface $userProfileViewFactory
    ) {
        $this->viewHandler = $viewHandler;
        $this->loggedInShopUserProvider = $loggedInShopUserProvider;
        $this->userProfileViewFactory = $userProfileViewFactory;
    }

    public function __invoke(Request $request): Response
    {
        $user = $this->loggedInShopUserProvider->provide()->getCustomer();

        return $this->viewHandler->handle(View::create(
            $this->userProfileViewFactory->create($user),
            Response::HTTP_OK
        ));
    }
}
