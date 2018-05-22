pragma solidity ^0.4.4;

contract Truesurvey {

address public creator;
string public surveyname;
unint public assetid;
uint public minresponse;
uint public maxresponse;
uint public startdate;
uint public reward;
uint public enddate;
enum Status { active, ended };


modifier onlycreator() {
  require(msg.sender == creator);
  _;
}

modifier valid(){
 require()
}

function Truesurvey(string _surveyname, uint _surveycode,uint _minresponse, uint _maxresponse, uint _startdate, uint _enddate) {
  creator = msg.sender;
  surveyname = _surveyname;
  surveycode = _surveycode;
  minresponse = _minresponse;
  maxresponse = _maxresponse;
  startdate = _startdate;
  enddate = _enddate;
}
