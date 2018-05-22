var HDWalletProvider = require("truffle-hdwallet-provider");

var infura_apikey = "dXG7QYJRJPW16SDWx2EM";
var mnemonic = "funny stay better marble cabbage rice nuclear season congress style mass easy";

module.exports = {
  networks: {
    development: {
      host: "localhost",
      port: 8545,
      network_id: "*" // Match any network id
    },
    ropsten: {
      provider: new HDWalletProvider(mnemonic, "https://ropsten.infura.io/"+infura_apikey),
      network_id: 3,
	gas:4612388
    }
  }
};

