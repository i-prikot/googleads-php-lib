<?php
/**
 * Copyright 2017 Google Inc. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace Google\AdsApi\Examples\Dfp\v201805\ProposalLineItemService;

require __DIR__ . '/../../../../vendor/autoload.php';

use DateTime;
use DateTimeZone;
use Google\AdsApi\Common\OAuth2TokenBuilder;
use Google\AdsApi\Dfp\DfpSession;
use Google\AdsApi\Dfp\DfpSessionBuilder;
use Google\AdsApi\Dfp\Util\v201805\DfpDateTimes;
use Google\AdsApi\Dfp\v201805\AdUnitTargeting;
use Google\AdsApi\Dfp\v201805\BillingCap;
use Google\AdsApi\Dfp\v201805\BillingSource;
use Google\AdsApi\Dfp\v201805\CreativeRotationType;
use Google\AdsApi\Dfp\v201805\DeliveryRateType;
use Google\AdsApi\Dfp\v201805\Goal;
use Google\AdsApi\Dfp\v201805\InventoryTargeting;
use Google\AdsApi\Dfp\v201805\LineItemType;
use Google\AdsApi\Dfp\v201805\Money;
use Google\AdsApi\Dfp\v201805\NetworkService;
use Google\AdsApi\Dfp\v201805\ProposalLineItem;
use Google\AdsApi\Dfp\v201805\ProposalLineItemService;
use Google\AdsApi\Dfp\v201805\RateType;
use Google\AdsApi\Dfp\v201805\ServiceFactory;
use Google\AdsApi\Dfp\v201805\Targeting;
use Google\AdsApi\Dfp\v201805\UnitType;

/**
 * Creates proposal line items.
 *
 * This example is meant to be run from a command line (not as a webpage) and
 * requires that you've setup an `adsapi_php.ini` file in your home directory
 * with your API credentials and settings. See `README.md` for more info.
 */
class CreateProposalLineItems
{

    // Set the proposal, product, and rate card ID to use when creating the
    // proposal line item.
    const PROPOSAL_ID = 'INSERT_PROPOSAL_ID_HERE';
    const PRODUCT_ID = 'INSERT_PRODUCT_ID_HERE';
    const RATE_CARD_ID = 'INSERT_RATE_CARD_ID_HERE';

    public static function runExample(
        ServiceFactory $serviceFactory,
        DfpSession $session,
        $proposalId,
        $productId,
        $rateCardId
    ) {
        $proposalLineItemService =
            $serviceFactory->createProposalLineItemService($session);
        $networkService = $serviceFactory->createNetworkService($session);

        // Create a standard proposal line item.
        $proposalLineItem = new ProposalLineItem();
        $proposalLineItem->setName('Proposal line item #' . uniqid());
        $proposalLineItem->setLineItemType(LineItemType::STANDARD);

        $proposalLineItem->setProposalId($proposalId);
        $proposalLineItem->setRateCardId($rateCardId);
        $proposalLineItem->setProductId($productId);

        // Set the length of the proposal line item to run.
        $proposalLineItem->setStartDateTime(
            DfpDateTimes::fromDateTime(
                new DateTime('now', new DateTimeZone('America/New_York'))
            )
        );
        $proposalLineItem->setEndDateTime(
            DfpDateTimes::fromDateTime(
                new DateTime('+1 month', new DateTimeZone('America/New_York'))
            )
        );

        // Set delivery specifications for the proposal line item.
        $proposalLineItem->setDeliveryRateType(DeliveryRateType::EVENLY);
        $proposalLineItem->setCreativeRotationType(CreativeRotationType::OPTIMIZED);

        // Set billing specifications for the proposal line item.
        $proposalLineItem->setBillingCap(BillingCap::CAPPED_CUMULATIVE);
        $proposalLineItem->setBillingSource(BillingSource::THIRD_PARTY_VOLUME);

        // Create ad unit targeting for the root ad unit (i.e. the whole network).
        $rootAdUnitId = $networkService->getCurrentNetwork()
            ->getEffectiveRootAdUnitId();
        $inventoryTargeting = new InventoryTargeting();
        $adUnitTargeting = new AdUnitTargeting();
        $adUnitTargeting->setAdUnitId($rootAdUnitId);
        $adUnitTargeting->setIncludeDescendants(true);
        $inventoryTargeting->setTargetedAdUnits([$adUnitTargeting]);
        $targeting = new Targeting();
        $targeting->setInventoryTargeting($inventoryTargeting);
        $proposalLineItem->setTargeting($targeting);

        // Set pricing for the proposal line item for 1000 impressions at a CPM of
        // $2 for a total value of $2.
        $goal = new Goal();
        $goal->setUnits(1000);
        $goal->setUnitType(UnitType::IMPRESSIONS);
        $proposalLineItem->setGoal($goal);

        $proposalLineItem->setNetCost(new Money('USD', 2000000));
        $proposalLineItem->setNetRate(new Money('USD', 2000000));
        $proposalLineItem->setRateType(RateType::CPM);

        // Create the proposal line items on the server.
        $results = $proposalLineItemService->createProposalLineItems([$proposalLineItem]);

        // Print out some information for each created proposal line item.
        foreach ($results as $i => $proposalLineItem) {
            printf(
                "%d) Proposal line item with ID %d and name '%s' was"
                . " created.%s",
                $i,
                $proposalLineItem->getId(),
                $proposalLineItem->getName(),
                PHP_EOL
            );
        }
    }

    public static function main()
    {
        // Generate a refreshable OAuth2 credential for authentication.
        $oAuth2Credential = (new OAuth2TokenBuilder())->fromFile()
            ->build();

        // Construct an API session configured from an `adsapi_php.ini` file
        // and the OAuth2 credentials above.
        $session = (new DfpSessionBuilder())->fromFile()
            ->withOAuth2Credential($oAuth2Credential)
            ->build();

        self::runExample(
            new ServiceFactory(),
            $session,
            intval(self::PROPOSAL_ID),
            intval(self::PRODUCT_ID),
            intval(self::RATE_CARD_ID)
        );
    }
}

CreateProposalLineItems::main();
