<html>
  <head>
    <title>Web3modal example written in vanilla JavaScript and HTML</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Get some bootstrap default styles -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  </head>
  <body>
    <!-- Construct a Bootstrap layout -->
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1>Web3modal example for vanille JavaScript and HTML</h1>

          <p>No wallet connected. Connect wallet to show accounts and their ETH balances.</p>

          <div class="alert alert-danger" id="alert-error-https" style="display: none">
            You can run this example only over HTTPS connection.
          </div>

          <div id="prepare">
            <button class="btn btn-primary" id="btn-connect">
              Connect wallet
            </button>
          </div>

          <div id="connected" style="display: none">

            <button class="btn btn-primary" id="btn-disconnect">
              Disconnect wallet
            </button>

            <hr>

            <div id="network">
              <p>
                <strong>Connected blockchain:</strong> <span id="network-name"></span>
              </p>

              <p>
                <strong>Selected account:</strong> <span id="selected-account"></span>
              </p>

            </div>

            <hr>

            <h3>All account balances</h3>

            <table class="table table-listing">
              <thead>
                <th>Address</th>
                <th>ETH balance</th>
              </thead>

              <tbody id="accounts">
              </tbody>
            </table>

            <p id="usdt"></p>

            <p>Please try to switch between different accounts in your wallet if your wallet supports this functonality.</p>

          </div>

          <br>

          <button class="btn btn-primary" id="btn-send" style="display: none">
              Send USDT
            </button>

        </div>
      </div>
    </div>

    <!-- We use simple <template> templating for the example -->
    <div id="templates" style="display: none">
      <template id="template-balance">
        <tr>
          <th class="address"></th>
          <td class="balance"></td>
        </tr>
      </template>
    </div>

    <!--

      Use unpkg CDN to load all NPM packages to vanilla Javascript - read more at http://unpkg.com

      On your deployment, you properly either want to use a preprocessing tool like webpack
      to include these files, or extract NPM archives and manually host the files inside.

      TODO: Pin down all versions.

    -->

    <script type="text/javascript" src="https://unpkg.com/web3@1.2.11/dist/web3.min.js"></script>
    <script type="text/javascript" src="https://unpkg.com/web3modal@1.9.0/dist/index.js"></script>
    <script type="text/javascript" src="https://unpkg.com/evm-chains@0.2.0/dist/umd/index.min.js"></script>
    <script type="text/javascript" src="https://unpkg.com/@walletconnect/web3-provider@1.2.1/dist/umd/index.min.js"></script>
    <script type="text/javascript" src="https://unpkg.com/fortmatic@2.0.6/dist/fortmatic.js"></script>

    <!-- This is our example code -->
    <script type="text/javascript" src="./utils.js"></script>
  </body>
</html>
