{{ $data['root_url'] = '' }}

  <!DOCTYPE html
  PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>

<head>
  <meta name="viewport" content="width=device-width"/>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <title>Rendelés érkezett!</title>
  <style>
      /* -------------------------------------
  GLOBAL
  ------------------------------------- */
      * {
          margin: 0;
          padding: 0;
      }

      * {
          font-family: "Gilroy", "Helvetica Neue", "Helvetica", Helvetica, Arial,
          sans-serif;
      }

      img {
          max-width: 100%;
      }

      .collapse {
          margin: 0;
          padding: 0;
      }

      body {
          -webkit-font-smoothing: antialiased;
          -webkit-text-size-adjust: none;
          width: 100% !important;
          height: 100%;
      }

      /* -------------------------------------
  ELEMENTS
  ------------------------------------- */
      a {
          color: #2ba6cb;
      }

      .btn,
      a.btn {
          text-decoration: none;
          color: #fff;
          background-color: #BF8746;
          padding: 10px 16px;
          font-weight: bold;
          margin-top: 22px;
          margin-right: 10px;
          text-align: center;
          cursor: pointer;
          display: inline-block;
          font-size: 14px;
          text-transform: uppercase;
          border-radius: 8px;
      }

      p.callout {
          padding: 16px;
          background-color: #ecf8ff;
          margin-bottom: 16px;
      }

      .callout a {
          font-weight: bold;
          color: #2ba6cb;
      }

      table.social {
          /* 	padding:16px; */
          background-color: #ebebeb;
      }

      .social .soc-btn {
          padding: 3px 7px;
          font-size: 12px;
          margin-bottom: 10px;
          text-decoration: none;
          color: #fff;
          font-weight: bold;
          display: block;
          text-align: center;
      }

      a.fb {
          background-color: #3b5998 !important;
      }

      a.tw {
          background-color: #1daced !important;
      }

      a.gp {
          background-color: #db4a39 !important;
      }

      a.ms {
          background-color: #000 !important;
      }

      .sidebar .soc-btn {
          display: block;
          width: 100%;
      }

      /* -------------------------------------
  SUMMARY
  ------------------------------------- */
      table.sub {
          border-bottom: 1px solid #e0e0e0;
          margin-bottom: 16px;
      }

      .category td {
          padding-bottom: 24px;
      }

      .product img {
          width: 72px;
          height: 72px;
          object-fit: contain;
          border-radius: 9999px;
          border: 1px solid #e0e0e0;
      }

      .product small img {
          width: 56px;
          height: 56px;
          object-fit: contain;
          border-radius: 9999px;
      }

      .product a {
          color: inherit;
          text-decoration: none;
      }

      /* -------------------------------------
  HEADER
  ------------------------------------- */
      table.head-wrap {
          width: 100%;
      }

      .header.container table td.logo {
          padding: 8px 16px;
      }

      .header.container table td.logo img {
          width: 100%;
          max-width: 320px;
      }

      .header.container table td.label {
          padding: 16px;
          padding-left: 0px;
      }

      /* -------------------------------------
  BODY
  ------------------------------------- */
      table.body-wrap {
          /* margin-top: -144px; */
          width: 100%;
      }

      .body-wrap .container {
          border-radius: 0px;
      }

      .body-wrap .content {
          margin-top: 24px;
      }

      /* -------------------------------------
  FOOTER
  ------------------------------------- */
      table.footer-wrap {
          width: 100%;
          clear: both !important;
          padding: 24px 16px;
      }

      .footer-wrap .container td.content p {
          border-top: 1px solid rgb(215, 215, 215);
          padding-top: 16px;
      }

      .footer-wrap .container td.content p {
          font-size: 10px;
          font-weight: bold;
      }

      /* -------------------------------------
  TYPOGRAPHY
  ------------------------------------- */
      h1,
      h2,
      h3,
      h4,
      h5,
      h6 {
          font-family: "Gilroy", "HelveticaNeue-Light", "Helvetica Neue Light",
          "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif;
          line-height: 1.1;
          margin-bottom: 16px;
          color: #000;
      }

      h1 small,
      h2 small,
      h3 small,
      h4 small,
      h5 small,
      h6 small {
          font-size: 60%;
          color: #6f6f6f;
          line-height: 0;
          text-transform: none;
      }

      h1 {
          font-weight: 200;
          font-size: 36px;
      }

      h2 {
          font-weight: 200;
          font-size: 24px;
      }

      h3 {
          font-weight: 500;
          font-size: 20px;
      }

      h4 {
          font-weight: 500;
          font-size: 18px;
      }

      h5 {
          font-weight: 900;
          font-size: 16px;
      }

      h6 {
          font-weight: 900;
          font-size: 14px;
          text-transform: uppercase;
          color: #444;
      }

      .collapse {
          margin: 0 !important;
      }

      p,
      ul {
          margin-bottom: 10px;
          font-weight: normal;
          font-size: 14px;
          line-height: 1.6;
      }

      p.lead {
          font-size: 17px;
      }

      p.last {
          margin-bottom: 0px;
      }

      ul li {
          margin-left: 5px;
          list-style-position: inside;
      }

      strong {
          font-weight: 600;
      }

      small {
          font-size: 14px;
      }

      /* -------------------------------------
  SIDEBAR
  ------------------------------------- */
      ul.sidebar {
          background: #ebebeb;
          display: block;
          list-style-type: none;
      }

      ul.sidebar li {
          display: block;
          margin: 0;
      }

      ul.sidebar li a {
          text-decoration: none;
          color: #666;
          padding: 10px 16px;
          /* 	font-weight:bold; */
          margin-right: 10px;
          /* 	text-align:center; */
          cursor: pointer;
          border-bottom: 1px solid #777777;
          border-top: 1px solid #ffffff;
          display: block;
          margin: 0;
      }

      ul.sidebar li a.last {
          border-bottom-width: 0px;
      }

      ul.sidebar li a h1,
      ul.sidebar li a h2,
      ul.sidebar li a h3,
      ul.sidebar li a h4,
      ul.sidebar li a h5,
      ul.sidebar li a h6,
      ul.sidebar li a p {
          margin-bottom: 0 !important;
      }

      /* ---------------------------------------------------
  RESPONSIVENESS
  Nuke it from orbit. It's the only way to be sure.
  ------------------------------------------------------ */
      /* Set a max-width, and make it display as block so it will automatically stretch to that width, but will also shrink down on a phone or something */
      .container {
          display: block !important;
          max-width: 750px !important;
          margin: 0 auto !important;
          /* makes it centered */
          clear: both !important;
      }

      /* This should also be a block element, so that it will fill 100% of the .container */
      .content {
          padding: 16px 32px;
          max-width: 750px;
          margin: 0 auto;
          display: block;
      }

      /* Let's make sure tables in the content area are 100% wide */
      .content table {
          width: 100%;
      }

      /* Odds and ends */
      .column {
          width: 100%;
          float: left;
          background-color: #fff;
          border-radius: 0px;
          margin-top: 24px;
      }

      .column--right {
          float: right;
      }

      .column tr td {
          padding: 0 32px;
      }

      .column-wrap {
          padding: 0 !important;
          margin: 0 auto;
          max-width: 750px !important;
      }

      .column table {
          width: 100%;
      }

      .social .column {
          width: 280px;
          min-width: 279px;
          float: left;
      }

      /* Be sure to place a .clear element after each set of columns, just to be safe */
      .clear {
          display: block;
          clear: both;
      }

      /* -------------------------------------------
  PHONE
  For clients that support media queries.
  Nothing fancy.
  -------------------------------------------- */
      @media only screen and (max-width: 600px) {
          a[class="btn"] {
              display: block !important;
              margin-bottom: 10px !important;
              background-image: none !important;
              margin-right: 0 !important;
          }

          div[class="column"] {
              width: 100% !important;
              /* float: none !important; */
          }

          table.social div[class="column"] {
              width: auto !important;
          }
      }

      @media only screen and (min-width: 600px) {
          .column {
              width: 48%;
              background-color: #fff;
              border-radius: 0px;
              margin-top: 24px;
          }
      }
  </style>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
</head>

<body
  bgcolor="#E7E7E7" topmargin="0" leftmargin="0" marginheight="0" marginwidth="0" style="background-color: #E7E7E7">
<!-- HEADER -->
<table class="head-wrap" bgcolor="#ffffff">
  <tr>
    <td></td>
    <td class="container header" align="">
      <!-- /content -->
      <div class="content">
        <table bgcolor="#ffffff">
          <tr>
            <td class="logo" align="center">
              <img src="{{ url('/') }}/assets/images/nemoseal-logo-alt.png" width="425"/>
            </td>
          </tr>
        </table>
      </div>
      <!-- /content -->
    </td>
    <td></td>
  </tr>
</table>
<!-- /HEADER -->
<!-- BODY -->
<table class="body-wrap" bgcolor="">
  <tr>
    <td></td>
    <td class="container" align="" bgcolor="#FFFFFF">
      <!-- content -->
      <div class="content" style="padding: 48px 32px">
        <table>
          <tr>
            <td>
              <h1 class="collapse"><strong>Rendelés érkezett!</strong></h1>

              <p class="lead" style="margin-top: 32px;">
                <strong>Partner:
                  {{ $data['customer']['lastname'] . ' ' . $data['customer']['firstname'] . ' (' . $data['customer']['name'] . ')' }}</strong>
              </p>

              <p>
                Számlázási cím:
                {{ $data['order_data']['payment_zip'] . ' ' . $data['order_data']['payment_city'] . ' ' . $data['order_data']['payment_address'] }}
              </p>

              <p>
                Szállítási cím:
                {{ $data['order_data']['shipping_zip'] . ' ' . $data['order_data']['shipping_city'] . ' ' . $data['order_data']['shipping_address'] }}
              </p>

              @if (!empty($data['order_data']['comment']))
                <p>
                  Megjegyzés: {{ $data['order_data']['comment'] }}
                </p>
              @endif

            </td>
          </tr>
        </table>
      </div>
      <!-- /content -->
    </td>

    <td class="container" align="" bgcolor="#FFFFFF">
      <!-- content -->
      <div class="content" style="padding-top: 0; padding-bottom: 16px">
        <h2 class="collapse" style="padding: 24px 0">
          <strong>Megrendelt termékek</strong>
        </h2>
        <table class="summary" bgcolor="">
          <tbody>
          <tr>
            <td>
              <table class="sub">

                @php
                  $sum_price = 0;
									$sum_price_no_discount = 0;
                @endphp

                @foreach ($data['order_products'] as $product)

                  @php
                    $product['price'] = floatval($product['price']);
                  @endphp

                  <tr class="product">
                    <td>
                      <p class="lead">
                        {{ $product['name'] }}<br/>
                        <small>Cikkszám: {{ $product['model'] }}</small>
                        <br/>
                        {{ $product['quantity'] }} × {{ number_format($product['price'], ($data['data']['eur_price'] ? 2 : 0), ',', '.') }} {{ $data['data']['currency'] }}
                      </p>
                    </td>
                    <td></td>
                  </tr>

                  @php

                    if(!$data['data']['eur_price']) {

                      $sum_price += $product['quantity'] * $product['price'] * ((100 - $data['data']['config']['price_ratio']) / 100);

										  $sum_price_no_discount += ($product['quantity'] * $product['price']);

                    } else {

                      $sum_price += $product['quantity'] * $product['price'];

										}

                  @endphp

                @endforeach
              </table>

              @php

                $sum_order_net = $sum_price + $data['data']['config']['transport_cost'];
                $sum_discount_net = ($sum_price_no_discount ?? 0) * ($data['data']['config']['price_ratio'] / 100);
                $sum_order_tax = $sum_order_net * 0.27;

              @endphp

              <table class="sub">
                <tbody>

                <tr class="category">
                  <td colspan="2">
                    <small>Rendelés összesen</small>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p class="lead">Összesen nettó</p>
                  </td>
                  <td
                    class="small" width="20%"
                    style="
                      vertical-align: center;
                      padding-left: 16px;
                      text-align: right;
                    ">
                    <p class="lead">
                      {{ number_format($sum_price, ($data['data']['eur_price'] ? 2 : 0), ',', '.') }} {{ $data['data']['currency'] }}
                    </p>
                  </td>
                </tr>

                <tr>
                  @if ($data['data']['config']['transport_cost'] == 0)
                    <td>
                      <p class="lead">Ingyenes szállítás</p>
                    </td>
                    <td></td>
                  @else
                    <td>
                      <p class="lead">Szállítási költség</p>
                    </td>
                    <td
                      class="small" width="20%"
                      style="
                      vertical-align: center;
                      padding-left: 16px;
                      text-align: right;
                    ">
                      <p class="lead">
                        {{ number_format($data['data']['config']['transport_cost'], ($data['data']['eur_price'] ? 2 : 0), ',', '.') }} {{ $data['data']['currency'] }}
                      </p>
                    </td>
                  @endif
                </tr>

                @if(!$data['data']['eur_price'])

                  <tr>
                    <td>
                      <p class="lead">Rendelés összesen (nettó)</p>
                    </td>
                    <td
                      class="small" width="20%"
                      style="
                      vertical-align: center;
                      padding-left: 16px;
                      text-align: right;
                    ">
                      <p class="lead">
                        {{ number_format($sum_order_net, ($data['data']['eur_price'] ? 2 : 0), ',', '.') }} {{ $data['data']['currency'] }}
                      </p>
                    </td>
                  </tr>

                  <tr>
                    <td>
                      <p class="lead">ÁFA</p>
                    </td>
                    <td
                      class="small" width="20%"
                      style="
                      vertical-align: center;
                      padding-left: 16px;
                      text-align: right;
                    ">
                      <p class="lead">
                        {{ number_format($sum_order_tax, ($data['data']['eur_price'] ? 2 : 0), ',', '.') }} {{ $data['data']['currency'] }}
                      </p>
                    </td>
                  </tr>

                  @if((int)($data['data']['config']['price_ratio'] ?? 0) != 0)

                  <tr>
                    <td>
                      <p class="lead">Kedvezmény</p>
                    </td>
                    <td
                      class="small" width="20%"
                      style="
                      vertical-align: center;
                      padding-left: 16px;
                      text-align: right;
                    ">
                      <p class="lead">
                        {{ number_format($sum_discount_net, ($data['data']['eur_price'] ? 2 : 0), ',', '.') }} {{ $data['data']['currency'] }}
                      </p>
                    </td>
                  </tr>

                  @endif

                @endif

                </tbody>
              </table>
              <table class="total">
                <tbody>

                @if(!$data['data']['eur_price'])

                  <tr>
                    <td>
                      <h2 class="collapse">
                        <strong>Összesen bruttó</strong>
                      </h2>
                    </td>
                    <td
                      class="small" width="20%"
                      style="
                      vertical-align: center;
                      padding-left: 16px;
                      text-align: right;
                    ">
                      <h2 class="collapse">
                        <strong>
                          {{ number_format($sum_order_net + $sum_order_tax, ($data['data']['eur_price'] ? 2 : 0), ',', '.') }} {{ $data['data']['currency'] }}
                        </strong>
                      </h2>
                    </td>
                  </tr>

                @else

                  <tr>
                    <td>
                      <h2 class="collapse">
                        <strong>Összesen</strong>
                      </h2>
                    </td>
                    <td
                      class="small" width="20%"
                      style="
                      vertical-align: center;
                      padding-left: 16px;
                      text-align: right;
                    ">
                      <h2 class="collapse">
                        <strong>
                          {{ number_format($sum_order_net, ($data['data']['eur_price'] ? 2 : 0), ',', '.') }} {{ $data['data']['currency'] }}
                        </strong>
                      </h2>
                    </td>
                  </tr>

                @endif

                </tbody>
              </table>
            </td>
          </tr>
          </tbody>
        </table>
      </div>
      <!-- /content -->
    </td>

    <td class="container">
      <!-- content -->
      <div class="content collapse" style="padding: 32px">

      </div>
      <!-- /content -->
    </td>
    <td></td>
  </tr>
</table>
<!-- /BODY -->
<!-- FOOTER -->
<table class="footer-wrap" bgcolor="#0B0E11">
  <tr>
    <td></td>
    <td>
      <p class="lead last" style="text-align: center; color: #ffffff">
        © Minden jog fenntartva © NÉMO Seal Kft.
      </p>
    </td>
    <td></td>
  </tr>
</table>
<!-- /FOOTER -->
</body>

</html>
