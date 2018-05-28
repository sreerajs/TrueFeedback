Hstry = {
  web3Provider: null,

  init: function() {

   Hstry.web3Provider = new Web3.providers.HttpProvider('http://localhost:8545');
  //Hstry.web3Provider = new Web3.providers.HttpProvider('https://rinkeby.infura.io/yGEHQFbey55ozzDha3hf');
  //Hstry.web3Provider = new Web3.providers.HttpProvider('https://ropsten.infura.io/dXG7QYJRJPW16SDWx2EM');

    web3 = new Web3(Hstry.web3Provider);

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

  return Hstry.bindEvents();
  },



bindEvents: function() {

    $(document).on('click', '#bunlo', Hstry.unlockaccount);
    $(document).on('click', '#send', Hstry.sendethereum);
    $(document).on('click', '#pend', Hstry.getTransactions);

},




 getTransactions: function() {

var checkaddress = document.getElementById('useradd').value;;
//Hstry.accountobject.address;

    endBlockNumber = eth.blockNumber;
    startBlockNumber = 5537922;

  console.log("Searching for transactions to/from account \"" + myaccount + "\" within blocks "  + startBlockNumber + " and " + endBlockNumber);

  for (var i = startBlockNumber; i <= endBlockNumber; i++) {
    if (i % 1000 == 0) {
      console.log("Searching block " + i);
    }
    var block = eth.getBlock(i, true);
    if (block != null && block.transactions != null) {
      block.transactions.forEach( function(e) {
        if (checkaddress == "*" || checkaddress == e.from || checkaddress == e.to) {
          console.log("  tx hash          : " + e.hash + "\n"
            + "   nonce           : " + e.nonce + "\n"
            + "   blockHash       : " + e.blockHash + "\n"
            + "   blockNumber     : " + e.blockNumber + "\n"
            + "   transactionIndex: " + e.transactionIndex + "\n"
            + "   from            : " + e.from + "\n"
            + "   to              : " + e.to + "\n"
            + "   value           : " + e.value + "\n"
            + "   time            : " + block.timestamp + " " + new Date(block.timestamp * 1000).toGMTString() + "\n"
            + "   gasPrice        : " + e.gasPrice + "\n"
            + "   gas             : " + e.gas + "\n"
            + "   input           : " + e.input);
        }
      })
    }
  }
},



getPendingTransactions: function(){

var checkadd = document.getElementById('useradd').value;
web3.eth.txpool.content().then(function(pending){
    if(pending.pending[checkadd]){

        var pendingobject = pending.pending[Hstry.accountobject.address];

        $.each(pendingobject, function(item){
          console.log(pendingobject[item]);
          console.log("  tx hash          : " + pendingobject[item].hash + "\n"
            + "   nonce           : " + pendingobject[item].nonce + "\n"
            + "   from            : " + pendingobject[item].from + "\n"
            + "   to              : " + pendingobject[item].to + "\n"
            + "   value           : " + pendingobject[item].value + "\n"
            + "   gas             : " + pendingobject[item].gas + "\n"
        });

    }

});
}


};

$(function() {
  $(window).load(function() {

    App.init();
  });
});
