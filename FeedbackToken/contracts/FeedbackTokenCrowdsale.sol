pragma solidity ^0.4.21;

import './FeedbackToken.sol';
import 'zeppelin-solidity/contracts/crowdsale/emission/MintedCrowdsale.sol';



contract FeedbackTokenCrowdsale is Crowdsale {
    function FeedbackTokenCrowdsale
        (
            uint256 _rate,
            address _wallet,
            ERC20 _token
        )
        public
        Crowdsale(_rate, _wallet, _token){

        }
}
