<!doctype html>
<html lang="hu">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <title>{{ $data['pdf_title'] }}</title>
  <style>
      @page {
          margin: 16pt;
      }

      body {
          color: rgb(45, 55, 72);
          font-size: small;
          font-family: sans-serif;
          line-height: 1;
      }

      #header,
      #footer {
          position: fixed;
          left: 0;
          right: 0;
          color: rgba(45, 55, 72, .25);
          font-size: 0.9em;
      }

      #header {
          padding-bottom: 4pt;
          top: 0;
          border-bottom: .1pt solid rgba(45, 55, 72, .25);
      }

      #footer {
          padding-top: 4pt;
          bottom: 16pt;
          text-align: center;
      }

      .page-number:before {
          content: "{{ $data['pdf_title'] }} - " counter(page) ". oldal";
      }

      .page-break {
          page-break-after: always;
      }

      /* Util */
      .order_page .clearfix::after {
          content: "";
          clear: both;
          display: table;
      }

      .order_page .text-left {
          text-align: left;
      }

      .order_page .text-right {
          text-align: right;
      }

      .order_page .text-center {
          text-align: center;
      }

      .order_page .gray {
          background-color: rgba(45, 55, 72, .25);
      }

      .order_page .font-xs {
          font-size: x-small;
      }

      .order_page .font-2xs {
          font-size: xx-small;
      }

      .order_page .text-light {
          color: rgba(45, 55, 72, .50);
      }

      /* Grid */
      .order_page .row {
          margin-bottom: 8pt;
      }

      .order_page .row:last-child {
          margin-bottom: 2pt;
      }

      .order_page .col-half {
          width: 50%;
      }

      .order_page .float-left {
          float: left;
      }

      .order_page .float-right {
          float: right;
      }

      /* Component */
      .order_page .card {
          border: .1pt solid rgba(45, 55, 72, .25);
          border-radius: 8pt;
          padding: 12pt;
          margin-bottom: 16pt;
      }

      /* Title */
      .order_page #title {
          padding: 0 0 16pt;
      }

      .order_page .align-bottom {
          display: table;
          vertical-align: bottom;
      }

      /* Signatures */
      .order_page #signatures {
          padding-top: 42pt;
      }

      .order_page .signature {
          margin: auto;
          width: 200pt;
          padding-top: 8pt;
          border-top: .1pt solid rgba(45, 55, 72, .1);
      }

      /* Typo */
      .order_page h1.title {
          font-size: 36pt;
          line-height: 1;
          margin: 0 0 0;
      }

      .order_page h2.subtitle {
          font-size: 14pt;
          line-height: 1;
          font-weight: 400;
          margin: 0;
          color: rgba(45, 55, 72, .75);
      }

      .order_page .subtitle-alt {
          font-size: small;
          line-height: 1;
          font-weight: 400;
          color: rgba(45, 55, 72, .75);
      }

      .order_page h3 {
          margin: 0 0 8pt;
          font-size: 14pt;
          font-weight: 400;
      }

      .order_page p {
          margin-top: 0;
          margin-bottom: 4pt;
      }

      /* Table */
      .order_page table {
          font-size: x-small;
      }

      .order_page table {
          border-collapse: collapse;
      }

      .order_page table,
      th,
      td {
          border: none;
      }

      .order_page table th {
          font-weight: 400;
      }

      .order_page table tbody td {
          padding: 4pt 0;
          border-top: .1pt solid rgba(45, 55, 72, .25);
      }

      .order_page tfoot tr td {
          font-weight: bold;
          font-size: x-small;
      }

      .order_page .product-image {
          border: .1pt solid rgba(45, 55, 72, .1);
          width: 32pt;
          height: 32pt;
          border-radius: 16pt;
          vertical-align: middle;
          text-align: center;
          overflow: hidden;
          position: relative;
      }

      .order_page .product-image img {
          margin-top: 4pt;
          height: 24pt;
      }

      .order_page .product-name {
          position: relative;
          margin-right: 24pt;
          font-size: medium;
      }
  </style>
</head>

<body>
<div class="order_page">
  <div id="footer">
    <div class="page-number"></div>
  </div>
  <div id="title" class="container clearfix">
    <h1 class="title">Rendelés: #{{ $data['order']['id'] }}</h1>
  </div> <!-- /#title -->
  <h3>Rendelés adatok</h3>
  <div id="base" class="container clearfix card">
    <div class="clearfix row">
      <div class="float-left col-half">
        <div class="font-2xs text-light">Rendelés leadás</div>
        <div class="font-xs">{{ date('Y.m.d. H:i:s', strtotime($data['order']['created_at'])) }}</div>
      </div>
      @if (!empty($data['order']['data']['comment'] ?? ''))
        <div class="float-right col-half">
          <div class="font-2xs text-light">Ügyfél megjegyzése</div>
          <div class="font-xs">{!! nl2br($data['order']['data']['comment']) !!}</div>
        </div>
      @endif
    </div>
  </div>
  <div id="customer-data" class="container clearfix card">
    <div class="float-left col-half">
      <div class="row">
        <div class="font-2xs text-light">Név</div>
        <div class="font-xs">
          {{ implode(' ', [$data['order']['data']['last-name'], $data['order']['data']['first-name']]) ?: 'Nincs megadva' }}
        </div>
      </div>
      @if (!empty($data['order']['data']['company-name']))
        <div class="row">
          <div class="font-2xs text-light">Cégnév</div>
          <div class="font-xs">{{ $data['order']['data']['company-name'] }}</div>
        </div>
      @endif
      @if (!empty($data['order']['data']['tax-number']))
        <div class="row">
          <div class="font-2xs text-light">Adószám</div>
          <div class="font-xs">{{ $data['order']['data']['tax-number'] }}</div>
        </div>
      @endif
      <div class="row">
        <div class="font-2xs text-light">Számlázási cím</div>
        <div class="font-xs">
          {{ $data['order']['data']['payment_zip'] . ' ' . $data['order']['data']['payment_city'] . ' ' . $data['order']['data']['payment_address'] }}
        </div>
      </div>
    </div>
    <div class="float-right col-half">
      <div class="row">
        <div class="font-2xs text-light">Szállítási cím</div>
        <div class="font-xs">
          {{ $data['order']['data']['shipping_zip'] . ' ' . $data['order']['data']['shipping_city'] . ' ' . $data['order']['data']['shipping_address'] }}
        </div>
      </div>

      <div class="row">
        <div class="font-2xs text-light">Telefon</div>
        <div class="font-xs">{{ $data['order']['data']['phone-number'] }}</div>
      </div>

      <div class="row">
        <div class="font-2xs text-light">Email</div>
        <div class="font-xs">{{ $data['order']['user']['email'] }}</div>
      </div>

    </div>
  </div> <!-- /#customer-data -->
  <div id="product" class="container">
    <div class="card">
      <h3>Termékek</h3>
      <table width="100%">
        <thead>
        <tr>
          <th></th>
          <th class="text-left font-xs text-light">Megnevezés</th>
          <th class="text-left font-xs text-light">Cikkszám</th>
          <th class="text-left font-xs text-light">Mennyiség</th>
          <th class="text-left font-xs text-light">Egyégár</th>
          <th class="text-left font-xs text-light">Összár</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($data['order']['data']['order_products'] ?? [] as $product)
          @if (!isset($product['name']) || (int) $product['quantity'] <= 0)
            @continue
          @endif

          @php $product['price'] = floatval($product['price']) @endphp

          <tr>
            <td>
              <div class="product-image">
                <img src="{{ Config::get('app.ROOT_URL') . 'storage/' . $product['image'] }}">
              </div>
            </td>
            <td>
              <div class="product-name">{{ $product['name'] ?? '' }}</div>
            </td>
            <td class="text-left">{{ $product['model'] ?? '' }}</td>
            <td class="text-left">{{ $product['quantity'] ?? '' }} Db</td>
            <td class="text-left">{!! number_format($product['price'], ($data['eur_price'] ? 2 : 0), ',', '.') . ' ' . $data['currency'] !!}</td>
            <td class="text-left">{!! number_format($product['price'] * $product['quantity'], ($data['eur_price'] ? 2 : 0), ',', '.') . ' ' . $data['currency'] !!}</td>
          </tr>
        @endforeach

        @if(!$data['eur_price'])

          <tr>
            <td colspan="4"></td>
            <td class="text-left font-xs text-light">Szállítási költség</td>
            <td class="text-left">
              @if ($data['order']['data']['transport_cost'] == 0)
                Ingyenes szállítás
              @else
                {!! number_format($data['order']['data']['transport_cost'], ($data['eur_price'] ? 2 : 0), ',', '.') . ' ' . $data['currency'] !!}
              @endif
            </td>
          </tr>

          @php

          $price_net = ($data['order']['data']['sum_price'] - $data['order']['data']['transport_cost']) * ((100 - $data['price_ratio'] ) / 100) + $data['order']['data']['transport_cost'];

          @endphp

          <tr>
            <td colspan="4"></td>
            <td class="text-left font-xs text-light">Nettó Végösszeg</td>
            <td class="text-left">{!! number_format($price_net, ($data['eur_price'] ? 2 : 0), ',', '.') . ' ' . $data['currency'] !!}</td>
            {{-- <td class="text-left">{!! number_format(($product['price'] * $product['quantity']) * 0.97 + 1900, ($data['eur_price'] ? 2 : 0), ',', '.') . ' ' . $data['currency'] !!}</td> --}}
          </tr>

          @if((int)($data['price_ratio'] ?? 0) != 0)

          <tr>
            <td colspan="4"></td>
            <td class="text-left font-xs text-light">Kedvezmény</td>
            <td class="text-left">{!! number_format(($data['order']['data']['sum_price'] - $data['order']['data']['transport_cost']) * ($data['price_ratio'] / 100), ($data['eur_price'] ? 2 : 0), ',', '.') . ' ' . $data['currency'] !!}</td>
          </tr>

          @endif

        @endif

        @if(!$data['eur_price'])

          <tr>
            <td colspan="4"></td>
            <td class="text-left font-xs text-light">Bruttó Végösszeg</td>
            <td class="text-left">{!! number_format($price_net * 1.27, ($data['eur_price'] ? 2 : 0), ',', '.') . ' ' . $data['currency'] !!}</td>
          </tr>

        @else

          <tr>
            <td colspan="4"></td>
            <td class="text-left font-xs text-light">Végösszeg</td>
            <td class="text-left">{!! number_format(($data['order']['data']['sum_price'] + $data['order']['data']['transport_cost']), ($data['eur_price'] ? 2 : 0), ',', '.') . ' ' . $data['currency'] !!}</td>
          </tr>

        @endif

        </tbody>
      </table>
    </div>
  </div> <!-- /#product -->

</div> <!-- /.order_page -->
</body>

</html>
