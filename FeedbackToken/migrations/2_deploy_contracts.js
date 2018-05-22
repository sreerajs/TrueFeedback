const FeedbackTokenCrowdsale = artifacts.require('./FeedbackTokenCrowdsale.sol');
const FeedbackToken = artifacts.require('./FeedbackToken.sol');

module.exports = function(deployer, network, accounts) {

    const rate = new web3.BigNumber(1000);
    const wallet = '0x815F7aAa8E4851a79DD9F254E17D17FEc430c6a5';

    return deployer.then(() => {
            return deployer.deploy(
                FeedbackTokenCrowdsale,
                rate,
                wallet,
                '0x21E32968D1d96168a0F6DE98E32B98BfE3596599'
            );
        });
};
