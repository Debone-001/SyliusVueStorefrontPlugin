<?php

/*
 * This file has been created by developers from BitBag.
 *  Feel free to contact us once you face any issues or want to start
 *  another great project.
 * You can find more information about us on https://bitbag.io and write us
 * an email on hello@bitbag.io.
 */

declare(strict_types=1);

namespace spec\BitBag\SyliusVueStorefrontPlugin\Factory;

use BitBag\SyliusVueStorefrontPlugin\Factory\AddressViewFactory;
use BitBag\SyliusVueStorefrontPlugin\Factory\RegionViewFactoryInterface;
use BitBag\SyliusVueStorefrontPlugin\View\AddressView;
use BitBag\SyliusVueStorefrontPlugin\View\RegionView;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use Sylius\Component\Core\Model\AddressInterface as SyliusAddressInterface;
use Sylius\Component\Customer\Model\CustomerInterface;

final class AddressViewFactorySpec extends ObjectBehavior
{
    function it_is_initializable(): void
    {
        $this->shouldHaveType(AddressViewFactory::class);
    }

    function let(RegionViewFactoryInterface $regionView): void
    {
        $this->beConstructedWith($regionView);
    }

    function it_creates_address_view(
        RegionViewFactoryInterface $regionView,
        SyliusAddressInterface $syliusAddress,
        CustomerInterface $customer
    ): void {
        $regionView->create(Argument::any())->willReturn(new RegionView());
        $syliusAddress->getId()->shouldBeCalled();
        $syliusAddress->getCustomer()->willReturn($customer);
        $syliusAddress->getCountryCode()->shouldBeCalled();
        $syliusAddress->getStreet()->shouldBeCalled();
        $syliusAddress->getPostcode()->shouldBeCalled();
        $syliusAddress->getCity()->shouldBeCalled();
        $syliusAddress->getFirstName()->shouldBeCalled();
        $syliusAddress->getLastName()->shouldBeCalled();
        $this->create($syliusAddress)->shouldBeAnInstanceOf(AddressView::class);
    }
}
