<div class="section-1">
  <div class="content">
    <h1> EBAY DASHBOARD</h1>
    {{-- @include('ebayRes.key'); --}}
    @include('ebayRes.headerClass')

    @php
    $devID = App::getDevId();
    $appID = App::getAppId();
    $certID = App::getCertId();
    $userToken = App::getUserToken();
    $serverUrl = App::getServerUrl();
    $compatabilityLevel = App::getCompatabilityLevel();
    $production = true;
    $totalEntries = 10;
    $siteID = 0;
    //the call being made:
    $verb = 'GetMyeBaySelling';
    $id= '383764619028'; // sample id
    ///Build the request Xml string

    $requestXmlBody = '<?xml version="1.0" encoding="utf-8" ?><GetMyeBaySellingRequest xmlns="urn:ebay:apis:eBLBaseComponents">';
    $requestXmlBody .= "<RequesterCredentials><eBayAuthToken>$userToken</eBayAuthToken></RequesterCredentials>";

    $requestXmlBody .='<ErrorLanguage>en_US</ErrorLanguage>
    <WarningLevel>High</WarningLevel>
    <SoldList>
    <Pagination>
    <EntriesPerPage>'.$totalEntries.'</EntriesPerPage>
    <PageNumber>1</PageNumber>
    </Pagination>
    </SoldList>
    </GetMyeBaySellingRequest>';

    //Create a new eBay session with all details pulled in from included keys.php
    $session = new eBaySession($userToken, $devID, $appID, $certID, $serverUrl, $compatabilityLevel, $siteID, $verb);

    //send the request and get response
    $responseXml = $session->sendHttpRequest($requestXmlBody);
    @endphp
    @if(stristr($responseXml, 'HTTP 404') || $responseXml == '')
      @php die('<P>Error sending request'); @endphp
    @endif
    @php
    //Xml string is parsed and creates a DOM Document object
    $responseDoc = new DomDocument();
    $responseDoc->loadXML($responseXml);
    //get any error nodes
    $errors = $responseDoc->getElementsByTagName('Errors');
    @endphp

    @if($errors->length > 0)
      <h2>eBay returned the following error(s):</h2>
      @php
      $code = $errors->item(0)->getElementsByTagName('ErrorCode');
      $shortMsg = $errors->item(0)->getElementsByTagName('ShortMessage');
      $longMsg = $errors->item(0)->getElementsByTagName('LongMessage');
      //Display code and shortmessage
      echo '<P>', $code->item(0)->nodeValue, ' : ', str_replace(">", "&gt;", str_replace("<", "&lt;", $shortMsg->item(0)->nodeValue));

      echo '<P>', $code->item(0)->nodeValue, ' : ', str_replace(">", "&gt;", str_replace("<", "&lt;", $shortMsg->item(0)->nodeValue));
      //if there is a long message (ie ErrorLevel=1), display it
      if(count($longMsg) > 0)
      echo '<BR>', str_replace(">", "&gt;", str_replace("<", "&lt;", $longMsg->item(0)->nodeValue));
      @endphp

    @else
      @php
      $orderTransArray = $responseDoc->getElementsByTagName('OrderTransactionArray');
      // $OrderTransaction = $orderTransArray->item(0)->getElementsByTagName('OrderTransaction');
      $items = $orderTransArray->item(0)->getElementsByTagName('Item');
      // $itemArr = $activeList->getElementsByTagName('ItemArray');
      // $item = $itemArr->getElementByTagName('Item');
      // $ItemID = $item->getElementByTagName('ItemID');

      // $primaryCategoryNode = $responseDoc->getElementsByTagName('PrimaryCategory');
      // $categoryNode = $primaryCategoryNode->item(0)->getElementsByTagName('CategoryName');
      // $listingDetailsNode = $responseDoc->getElementsByTagName('ListingDetails');
      // $startedNode = $listingDetailsNode->item(0)->getElementsByTagName('StartTime');
      // $endsNode = $listingDetailsNode->item(0)->getElementsByTagName('EndTime');
      //
      // $sellingStatusNode = $responseDoc->getElementsByTagName('SellingStatus');
      // $currentPriceNode = $sellingStatusNode->item(0)->getElementsByTagName('CurrentPrice');
      // $currency = $currentPriceNode->item(0)->getAttribute('currencyID');
      // $startPriceNode = $responseDoc->getElementsByTagName('StartPrice');
      // $buyItNowPriceNode = $responseDoc->getElementsByTagName('BuyItNowPrice');
      // $bidCountNode = $sellingStatusNode->item(0)->getElementsByTagName('BidCount');
      //
      // $sellerNode = $responseDoc->getElementsByTagName('Seller');

      //Display the details
      // echo '<P><B>', $items->item(0)->nodeValue . '</Br>';
      // if($items) {
      //   foreach($items as $item) {
      //     echo $item->getElementsByTagName('Email');
      //     echo $item->nodeValue.'</Br>';
      //   }
      // }
      // $elements = $responseDoc->getElementsByTagName('Item');
      $data = array();
      @endphp

      @foreach($items as $node)
      </Br>
        @foreach($node->childNodes as $child)
          @php
          $data[] = array($child->nodeName => $child->nodeValue);
          @endphp
          {!!$child->nodeName!!} : {!!$child->nodeValue!!} </Br>
        @endforeach
      @endforeach
      @php
      // echo '<BR>Category: ', $titleNode->count();
      //     echo '<BR>Started: ', $startedNode->item(0)->nodeValue;
      //     echo '<BR>Ends: ', $endsNode->item(0)->nodeValue;
      //
      //     echo "<P>Current Price: ", $currentPriceNode->item(0)->nodeValue, $currency;
      //     echo "<BR>Start Price: ", $startPriceNode->item(0)->nodeValue, $currency;
      //     echo "<BR>BuyItNow Price: ", $buyItNowPriceNode->item(0)->nodeValue, $currency;
      //     echo "<BR>Bid Count: ", $bidCountNode->item(0)->nodeValue;
      //
      //     //Display seller detail if present
      //     if($sellerNode->length > 0)
      //     {
      //         echo '<P><B>Seller</B>';
      //         $userIDNode = $sellerNode->item(0)->getElementsByTagName('UserID');
      //         $scoreNode = $sellerNode->item(0)->getElementsByTagName('FeedbackScore');
      //         $regDateNode = $sellerNode->item(0)->getElementsByTagName('RegistrationDate');
      //
      //         echo '<BR>UserID: ', $userIDNode->item(0)->nodeValue;
      //         echo '<BR>Feedback Score: ', $scoreNode->item(0)->nodeValue;
      //         echo '<BR>Registration Date: ', $regDateNode->item(0)->nodeValue;
      //     }

      @endphp
    @endif
  </div>
</div>
