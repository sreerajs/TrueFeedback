var Web3 = require('web3');
var web3 = new Web3();

var solc = require('solc');


web3.setProvider(new web3.providers.HttpProvider('http://localhost:8101/'));

var input = 'contract Hello{ string h = "hello"; function g() constant returns(string){ return h; } }';
var output = solc.compile(input, 1);


for (var contractName in output.contracts) {


    var bc = output.contracts[contractName].bytecode;
    var abi =  output.contracts[contractName].interface;


  //  var contact = web3.eth.contract.new(abi,{from: web3.eth.accounts[0], data: bc});

  var MyContract = web3.eth.contract(abiArray);

  var contractInstance = MyContract.new([contructorParam1] [, contructorParam2], {data: '0x12345...', from: myAccount, gas: 1000000});



    if (typeof contact.address !== 'undefined') {
         console.log('Contract mined! address: ' + contact.address + ' transactionHash: ' + contact.transactionHash);
    }

}
