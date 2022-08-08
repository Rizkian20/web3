pragma solidity >=0.7.0 <0.9.0;

contract DataSensor1{
    string sensorU1;
    string sensorU2;
    string sensorU3;
    string sensorU4;

    function setsensorU1(string memory _sensorU1) public{
        sensorU1 = _sensorU1;
    } 

    function getsensorU1() public view returns (string memory){
        return sensorU1;
    }

    function setsensorU2(string memory _sensorU2) public{
        sensorU2 = _sensorU2;
    } 

    function getsensorU2() public view returns (string memory){
        return sensorU2;
    }

     function setsensorU3(string memory _sensorU3) public{
        sensorU3 = _sensorU3;
    } 

    function getsensorU3() public view returns (string memory){
        return sensorU3;
    }

     function setsensorU4(string memory _sensorU4) public{
        sensorU4 = _sensorU4;
    } 

    function getsensorU4() public view returns (string memory){
        return sensorU4;
    }
}