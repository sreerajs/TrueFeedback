pragma solidity ^0.4.21;

import 'zeppelin-solidity/contracts/token/ERC20/MintableToken.sol';

contract FeedbackToken is MintableToken {
    string public name = "Feedback Token";
    string public symbol = "FBKT";
    uint8 public decimals = 18;
}
