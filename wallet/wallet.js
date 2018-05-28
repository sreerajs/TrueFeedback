ethertransfer = {
  web3Provider: null,
  abi:[{"constant":true,"inputs":[],"name":"mintingFinished","outputs":[{"name":"","type":"bool"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":true,"inputs":[],"name":"name","outputs":[{"name":"","type":"string"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":false,"inputs":[{"name":"_spender","type":"address"},{"name":"_value","type":"uint256"}],"name":"approve","outputs":[{"name":"","type":"bool"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":true,"inputs":[],"name":"totalSupply","outputs":[{"name":"","type":"uint256"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":false,"inputs":[{"name":"_from","type":"address"},{"name":"_to","type":"address"},{"name":"_value","type":"uint256"}],"name":"transferFrom","outputs":[{"name":"","type":"bool"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":true,"inputs":[],"name":"decimals","outputs":[{"name":"","type":"uint8"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":false,"inputs":[{"name":"_to","type":"address"},{"name":"_amount","type":"uint256"}],"name":"mint","outputs":[{"name":"","type":"bool"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":false,"inputs":[{"name":"_spender","type":"address"},{"name":"_subtractedValue","type":"uint256"}],"name":"decreaseApproval","outputs":[{"name":"","type":"bool"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":true,"inputs":[{"name":"_owner","type":"address"}],"name":"balanceOf","outputs":[{"name":"","type":"uint256"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":false,"inputs":[],"name":"finishMinting","outputs":[{"name":"","type":"bool"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":true,"inputs":[],"name":"owner","outputs":[{"name":"","type":"address"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":true,"inputs":[],"name":"symbol","outputs":[{"name":"","type":"string"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":false,"inputs":[{"name":"_to","type":"address"},{"name":"_value","type":"uint256"}],"name":"transfer","outputs":[{"name":"","type":"bool"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":false,"inputs":[{"name":"_spender","type":"address"},{"name":"_addedValue","type":"uint256"}],"name":"increaseApproval","outputs":[{"name":"","type":"bool"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":true,"inputs":[{"name":"_owner","type":"address"},{"name":"_spender","type":"address"}],"name":"allowance","outputs":[{"name":"","type":"uint256"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":false,"inputs":[{"name":"newOwner","type":"address"}],"name":"transferOwnership","outputs":[],"payable":false,"stateMutability":"nonpayable","type":"function"},{"anonymous":false,"inputs":[{"indexed":true,"name":"to","type":"address"},{"indexed":false,"name":"amount","type":"uint256"}],"name":"Mint","type":"event"},{"anonymous":false,"inputs":[],"name":"MintFinished","type":"event"},{"anonymous":false,"inputs":[{"indexed":true,"name":"previousOwner","type":"address"},{"indexed":true,"name":"newOwner","type":"address"}],"name":"OwnershipTransferred","type":"event"},{"anonymous":false,"inputs":[{"indexed":true,"name":"owner","type":"address"},{"indexed":true,"name":"spender","type":"address"},{"indexed":false,"name":"value","type":"uint256"}],"name":"Approval","type":"event"},{"anonymous":false,"inputs":[{"indexed":true,"name":"from","type":"address"},{"indexed":true,"name":"to","type":"address"},{"indexed":false,"name":"value","type":"uint256"}],"name":"Transfer","type":"event"}],
  tokenaddress:'0x21E32968D1d96168a0F6DE98E32B98BfE3596599',

  init: function() {

   ethertransfer.web3Provider = new Web3.providers.HttpProvider('http://localhost:8545');
  //Hstry.web3Provider = new Web3.providers.HttpProvider('https://rinkeby.infura.io/yGEHQFbey55ozzDha3hf');
  //Hstry.web3Provider = new Web3.providers.HttpProvider('https://ropsten.infura.io/dXG7QYJRJPW16SDWx2EM');

    web3 = new Web3(ethertransfer.web3Provider);

    web3.eth.extend({
    property: 'txpool',
    methods: [{
    name: 'content',
    call: 'txpool_content'
    },{
    name: 'inspect',
    call: 'txpool_inspect'
    },{
    name: 'status',
    call: 'txpool_status'
    }]
    });

  return ethertransfer.bindEvents();
  },



bindEvents: function() {

    $(document).on('click', '#bunlo', ethertransfer.unlockaccount);
    $(document).on('click', '#send', ethertransfer.sendethereum);
    $(document).on('click', '#pend', ethertransfer.getTransactions);

},



  unlockaccount: function(event) {
    event.preventDefault();

    var password = document.getElementById('userpass').value
    var storedkeystore;
    /*
     $.ajax({
      type :"POST",
      url : 'api_url',
      dataType: "application/json"s
      success: function(response){
      console.log(response);
      storedkeystore = response;
      }
    });
*/


    var result = web3.eth.accounts.decrypt(storedkeystore, password)
  return result;
},


 sendethereum: function() {

//var keystore = App.unlockaccount;
//var privateKey = new EthJS.Buffer.Buffer(keystore.privatekey, 'hex')
//var fromadd = keystore.address;
console.log(option);

var privateKey = new EthJS.Buffer.Buffer('1ebd830e2395773bf2a06cb2c638087e73ecbc34b01e28480de8b0b35e9ab337', 'hex')
var fromadd = '0x815F7aAa8E4851a79DD9F254E17D17FEc430c6a5';
var toadd = document.getElementById('toadd').value;
var getvalue = document.getElementById('val').value;
var val = web3.utils.toHex(web3.utils.toWei(getvalue, 'ether'));
var noncecount;

web3.eth.getTransactionCount(fromadd).then(function(confirmedcount, error){
if (error)
{
console.log(error);
}
if (confirmedcount) {
console.log("confirmed = " + confirmedcount);
web3.eth.txpool.content().then(function(pending){
var pendingcount = 0;
var checktime = 0;
var checkhash;
var timestamp;

if(pending.pending[fromadd]){
    var pendingobject = pending.pending[fromadd];

        $.each(pendingobject, function(item){
          if( (pendingobject[confirmedcount]) && (item >= confirmedcount) ) {
             pendingcount++;
             checktime = 1;
             checkhash = pendingobject[confirmedcount].hash;

          }  });

}
    console.log( "pending = " + pendingcount);
/*
if(checktime == 1){
checktime = 0;
  $.ajax({
  type :"POST",
  url : 'api_url',
  dataType: "application/json"
  success: function(response){
  console.log(response);
  timestamp = response;
  }
});

}

  if( (pendingcount == 0) || (Math.round(Date.now()/(1000 * 60))-timestamp >180) ){
    noncecount = confirmedcount;
    timestamp = 0;
    }
    else {
    noncecount = confirmedcount + pendingcount;
    }

*/

    if(pendingcount == 0){
    noncecount = confirmedcount;
    }
    else {
      noncecount = confirmedcount + pendingcount;
    }
console.log(noncecount);



web3.eth.getGasPrice().then(function(price){
var avgprice = web3.utils.toHex(price);




            var rawTx = {
               nonce: web3.utils.toHex(noncecount),
               from: fromadd,
               gasPrice: avgprice,
               gasLimit: web3.utils.toHex(800002),
               to: toadd,
               value: val

            }
            var tx = new EthJS.Tx(rawTx);
            tx.sign(privateKey);

            var serializedTx = tx.serialize();

            web3.eth.sendSignedTransaction('0x' + serializedTx.toString('hex'))
            .on('transactionHash', function(transactionHash){

              Math.round(Date.now()/(1000 * 60)) ;

              //Post timestamp and hash


            })
            .on('error', console.error); // If a out of gas error, the second parameter is the receipt.

}); });

} });

},

sendtokens: function() {

//var keystore = App.unlockaccount;
//var privateKey = new EthJS.Buffer.Buffer(keystore.privatekey, 'hex')
//var fromadd = keystore.address;
console.log(option);





var privateKey = new EthJS.Buffer.Buffer('1ebd830e2395773bf2a06cb2c638087e73ecbc34b01e28480de8b0b35e9ab337', 'hex')
var fromadd = '0x815F7aAa8E4851a79DD9F254E17D17FEc430c6a5';
var toadd = document.getElementById('toadd').value;
var getvalue = document.getElementById('val').value;
var val = web3.utils.toHex(web3.utils.toWei(getvalue, 'ether'));
var noncecount;

var contract = new web3.eth.Contract(ethertransfer.abi, ethertransfer.tokenaddress, { from: fromadd });

web3.eth.getTransactionCount(fromadd).then(function(confirmedcount, error){
if (error)
{
console.log(error);
}
if (confirmedcount) {
console.log("confirmed = " + confirmedcount);
web3.eth.txpool.content().then(function(pending){
var pendingcount = 0;
var checktime = 0;
var checkhash;
var timestamp;

if(pending.pending[fromadd]){
   var pendingobject = pending.pending[fromadd];

       $.each(pendingobject, function(item){
         if( (pendingobject[confirmedcount]) && (item >= confirmedcount) ) {
            pendingcount++;
            checktime = 1;
            checkhash = pendingobject[confirmedcount].hash;

         }  });

}
   console.log( "pending = " + pendingcount);
/*
if(checktime == 1){
checktime = 0;
 $.ajax({
 type :"POST",
 url : 'api_url',
 dataType: "application/json"
 success: function(response){
 console.log(response);
 timestamp = response;
 }
});

}

 if( (pendingcount == 0) || (Math.round(Date.now()/(1000 * 60))-timestamp >180) ){
   noncecount = confirmedcount;
   timestamp = 0;
   }
   else {
   noncecount = confirmedcount + pendingcount;
   }

*/

   if(pendingcount == 0){
   noncecount = confirmedcount;
   }
   else {
     noncecount = confirmedcount + pendingcount;
   }
console.log(noncecount);



web3.eth.getGasPrice().then(function(price){
var avgprice = web3.utils.toHex(price);




           var rawTx = {
              nonce: web3.utils.toHex(noncecount),
              from: fromadd,
              gasPrice: avgprice,
              gasLimit: web3.utils.toHex(800002),
              to: ethertransfer.tokenaddress,
              value: 0x00,
              data: contract.methods.transfer(toadd, val).encodeABI(),

           }
           var tx = new EthJS.Tx(rawTx);
           tx.sign(privateKey);

           var serializedTx = tx.serialize();

           web3.eth.sendSignedTransaction('0x' + serializedTx.toString('hex'))
           .on('transactionHash', function(transactionHash){

             Math.round(Date.now()/(1000 * 60)) ;

             //Post timestamp and hash


           })
           .on('error', console.error); // If a out of gas error, the second parameter is the receipt.

}); });

} });

}
};



$(function() {
  $(window).load(function() {

    ethertransfer.init();
  });
});
