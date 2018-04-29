/**
 *  @fileoverview Main configuration file for getting contract and deploying it into 
 * a geth node. Also exports the instances of web3 and contract to controllers
 * @author Jithin Zacharia
 */
var solc = require('solc')
let Web3 = require('web3');
var fs = require('fs');

const web3 = new Web3(new Web3.providers.HttpProvider("http://localhost:8546"));
const input = fs.readFileSync('./Contracts/');
const output = solc.compile(input.toString(), 1);
let code = output.contracts[':TrueFeedBack'].bytecode;
let abi = JSON.parse(output.contracts[':TrueFeedBack'].interface);
var Contract = web3.eth.contract(abi);
let contract = Contract.new({ from: web3.eth.accounts[0], data: "0x" + code, gas: '4700000' });

/**
 * @function This function deploys the contract to the local geth node
 */
function DelpoyContract() {
    while (true) {
        let receipt = web3.eth.getTransactionReceipt(contract.transactionHash);
        if (receipt && receipt.contractAddress) {
            contractAddress = receipt.contractAddress;
            console.log("Your contract has been deployed on a geth node with the following adderss" + receipt.contractAddress);
            break;
        }
    }
}

DelpoyContract();

module.exports = {
    contractAddress,
    Contract,
    web3
}