<!DOCTYPE html>
<html>
<head>
  <title></title>
  <style type="text/css">
    ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: LightSalmon;
}

li {
    float: left;
}

li a, .dropbtn {
    display: inline-block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover, .dropdown:hover .dropbtn {
    background-color: LightSalmon;
}

li.dropdown {
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
    display: block;
}
.footer-bottom {
  width: 80%;
  margin: 0 auto;
  margin-top: 50px;
  border-top: 1px solid #FFA500;
  padding-top: 10px;
  text-align: center;
  margin-bottom: 10px;
}
.rtop-line {
    width: 100%;
    margin: 0px auto;
    margin-top: 0px;
    border-top: 1px solid #FFA500;
    padding-top: 0px;
    text-align: center;
    margin-bottom: 14px;
}
.top-line {
    width: 100%;
    margin: 0 auto;
    margin-top: 5px;
    border-top: 1px solid #FFA500;
    padding-top: 0px;
    text-align: center;
    margin-bottom: 4px;
}
.top-line1 {
    width: 100%;
    margin: 0px auto;
    margin-top: 5px;
    border-top: 1px solid #FFA500;
    padding-top: 0px;
    text-align: center;
    margin-bottom: -11px;
}
.top-line2 {
    width: 100%;
    margin: 0 auto;
    margin-top: -10px;
    border-top: 1px solid #FFA500;
    padding-top: 0px;
    text-align: center;
    margin-bottom: 6px;
}
.top-line3 {
    width: 100%;
    margin: 0 auto;
    margin-top: 0px;
    border-top: 1px solid #FFA500;
    padding-top: 0px;
    text-align: center;
    margin-bottom: -11px;
}
.mid-line{
  width: 100%;
  margin: 0 auto;
  margin-top: 5px;
  border-top: 1px solid #FFA500;
  padding-top: 10px;
  text-align: center;
  margin-bottom: 10px;
  }
  .gpa-table{
    border: 1px solid #ddd;
    text-align: left; 
    border-collapse: collapse; 
    width: 100%;"
  }
  .gpa-th-td{
    border: 1px solid #ddd; 
    text-align: left; 
    padding: 10px;
  }
  .bg-color{
    background-color: #CC9966;
    color: white;
  }
  .password {
    width: 97%;
    background-color: #ffa07a;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radwidth: 97%;ius: 4px;
    cursor: pointer;
  }
  .p-input{
    width: 34%;
    height: 35px;
  }
  .p-label{
    font-size: 20px;
  }
  .p-button{
    font-size: 20px;
    background-color: #a5380d;
    color: white;
  }
</style>
</head>
<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/datatables.min.js')}}"></script>
<body>

</body>
</html>