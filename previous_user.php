<?php


if(!isset($_SESSION)){
   session_start();
}

if (!isset($_SESSION['name'])) {
header('Location: index.html');
}
//echo $_SESSION['name'];
include 'connect.php';
?>
<html>
<head><link rel="stylesheet" href="jquery-ui.css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="bootstrap.min.css">

    <!-- jQuery library -->
    <script src="jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="bootstrap.min.js"></script>
    <script src="jquery-ui.js"></script>
    <script src="jquery.validate.min.js"></script>

    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="jquery.chained.min.js"></script>

    <style type="text/css">
        textarea {
            resize: none;
        }

        .col-wide {
            width: 270px;
        }

        .col-narrow {
            width: 216px;
        }

        .col-normal {
            width: 219px;
        }

        #custom-fields {
            table-layout: fixed;
            width: 657px;
        }





        .tg  {border-collapse:collapse;border-spacing:0;border-color:#ccc;margin:0px auto;}
        .tg td{font-family:Arial, sans-serif;font-size:14px;padding:9px 9px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:#ccc;color:#333;background-color:#fff;}
        .tg th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:9px 9px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:#ccc;color:#333;background-color:#f0f0f0;}
        .tg .tg-30rh{font-style:italic;text-align:center}
        .tg .tg-093g{font-weight:bold;font-style:italic;text-align:center}
        .tg .tg-hgcj{font-weight:bold;text-align:center}
    </style>


</head>
    <body>





<form action="pdfregen.php" method="GET">
    <p><a href="redlpdf.php">Click here to download pdf </a></p>
    <p>Use this page to apply Once again</p>



<p>Applying For
    <input type="checkbox" value="yes" name="apply_hons">Honours</input>
    <input type="checkbox" value="yes" name="apply_gen">General</input>
</p>
<h4> Honours Selection</h4>
<table class="tg" id="custom-fields">
    <colgroup>
        <col class="col-wide" />
        <col class="col-narrow" />
        <col class="col-normal" />
        <col class="col-normal" />
        <col class="col-normal" />
        <col class="col-normal" />
        <col class="col-normal" />
        <col class="col-normal" />
        <col class="col-normal" />
        <col class="col-normal" />
    </colgroup>
    <tr>
        <th class="tg-hgcj" rowspan="2">
            <br />Honours
        </th>
        <th class="tg-hgcj" colspan="4">General</th>
        <th class="tg-hgcj" colspan="2">Bank Transaction Details</th>
        <th class="tg-hgcj" rowspan="2">Add More</th>
    </tr>
    <tr>
        <td class="tg-093g">Sub1</td>
        <td class="tg-093g">Sub2</td>
        <td class="tg-093g">Sub3</td>
        <td class="tg-093g">Sub4</td>
        <td class="tg-093g">Bank Transaction id</td>
        <td class="tg-093g">Bank Transaction date</td>
    </tr>
    <tr>
        <td class="tg-30rh">
            <select name="hons[]" id="select1-0" onchange="">
                <option value="Hindi"  >Hindi  </option>
                <option value="Bengali">Bengali</option>
                <option value="English">English</option>
                <option value="History">History</option>
                <option value="Political Science">Political Science</option>
                <option value="Philosophy">Philosophy</option>
                <option value="Sanskrit">Sanskrit</option>
                <option value="Geography(Arts)">Geography (Arts)</option>
                <option value="Economics(Arts)">Economics (Arts)</option>
                <option value="Physics">Physics</option>
                <option value="Chemistry">Chemistry</option>
                <option value="Mathematics">Mathematics</option>
                <option value="Zoology">Zoology</option>
                <option value="Botany">Botany</option>
                <option value="Geography(Science)">Geography (Science)</option>
                <option value="Economics(Science)">Economics (Science)</option>
                <option value="Accountancy">Accountancy</option>
            </select>
            <!--select id="ddl2" name="session[]">
            </select-->
        </td>
        <td class="tg-30rh">
            <select name="sub1[]" id="select2-0">
            </select>
        </td>
        <td class="tg-30rh">
            <select name="sub2[]" id="select3-0">
            </select>
        </td>
        <td class="tg-30rh">
            <select name="sub3[]" id="select4-0">
            </select>
        </td>
        <td class="tg-30rh">
            <select name="sub4[]" id="select5-0">
            </select>
        </td>
        <td class="tg-30rh">
            <input type="text" name="tran_id[]" id="tranid-0" onfocus="checkDuplicatesHons(0)"/>
        </td>
        <td class="tg-30rh">
            <input type="text" name="tran_date[]" class="datepicker"/>
        </td>
        <td><a href="javascript:void(0);" class="addCF">Add</a>
        </td>
    </tr>
</table>








<h4>General Selection</h4>

<table class="tg" id="custom-fields1">
    <colgroup>
        <col class="col-wide" />
        <col class="col-narrow" />
        <col class="col-normal" />
        <col class="col-normal" />
        <col class="col-normal" />
    </colgroup>
    <tr>
        <th class="tg-hgcj" rowspan="2">
            <br />General Stream With Session
        </th>
        <th class="tg-hgcj" rowspan="2">Subject Combination</th>
        <th class="tg-hgcj" colspan="2">Bank Transaction Details</th>
        <th class="tg-hgcj" rowspan="2">Add More</th>
    </tr>
    <tr>

        <td class="tg-093g">Bank Transaction id</td>
        <td class="tg-093g">Bank Transaction date</td>
    </tr>
    <tr>
        <td class="tg-30rh">
            <select id ="general_stream-0" name="general-stream[]"  onclick="">
                <option value="B.A. General(Day Shift)">B.A. General(Day Shift)</option>
                <option value="B.A. General(Day Shift)With Geography">B.A. General(Day Shift)With Geography</option>
                <option value="B.A. General(Morning Shift)"> B.A. General(Morning Shift)</option>
                <option value="B.Sc. General[Pure. Science]">B.Sc. General [Pure. Science]</option>
                <option value="B.Sc. General[Bio. Science]">B.Sc. General[Bio. Science]</option>
                <option value="B.Com. General"> B.Com. General</option>
            </select>
        </td>
        <td class="tg-30rh">

            <select name="GeneralSub[]"id="gen_select-0" >

                <option value="Bengali,English,Pol.Sc. " class="B.A. General(Morning Shift)"> Bengali,English,     Pol.Sc. </option>
                <option value="Bengali,English,Physical Education "class="B.A. General(Morning Shift)"> Bengali,English,     Physical Education </option>
                <option value="Bengali,English,Philosophy     "class="B.A. General(Morning Shift)"> Bengali,English,     Philosophy     </option>
                <option value="Bengali,English,History             "class="B.A. General(Morning Shift)"> Bengali,English,     History
                <option value="Bengali,English,Physical Education "class="B.A. General(Morning Shift)"> Bengali,English,     Physical Education     </option>
                <option value="Bengali,English,Economics "class="B.A. General(Morning Shift)"> Bengali,English,     Economics            </option>
                <option value="Bengali,English,     Physical Education  "class="B.A. General(Morning Shift)"> Bengali,English,     Physical Education    </option>
                <option value="Bengali,Pol.Sc.,   Philosophy  "class="B.A. General(Morning Shift)"> Bengali,Pol.Sc.,     Philosophy         </option>
                <option value="Bengali,Pol.Sc.,     History            "class="B.A. General(Morning Shift)"> Bengali,Pol.Sc.,     History            </option>
                <option value="Bengali,Pol.Sc.,     Physical Education"class="B.A. General(Morning Shift)"> Bengali,Pol.Sc.,     Physical Education</option>
                <option value="Bengali Pol.Sc.,     Economics        "class="B.A. General(Morning Shift)"> Bengali Pol.Sc.,     Economics        </option>
                <option value="Bengali Pol.Sc.,     Physical Education  "class="B.A. General(Morning Shift)"> Bengali Pol.Sc.,     Physical Education  </option>
                <option value="Bengali,Philosophy,  Economics        "class="B.A. General(Morning Shift)"> Bengali,Philosophy,  Economics        </option>
                <option value="English,Philosophy,  Economics        "class="B.A. General(Morning Shift)"> English,Philosophy,  Economics         </option>
                <option value="English,Pol.Sc.,     History           "class="B.A. General(Morning Shift)"> English,Pol.Sc.,     History           </option>
                <option value="English,Pol.Sc.,     Physical Education "class="B.A. General(Morning Shift)"> English,Pol.Sc.,     Physical Education </option>
                <option value="English,Pol.Sc.,     Economics         "class="B.A. General(Morning Shift)"> English,Pol.Sc.,     Economics         </option>
                <option value="English,Pol.Sc.,     Physical Education"class="B.A. General(Morning Shift)"> English,Pol.Sc.,     Physical Education </option>
                <option value="Bengali,Philosophy,  History           "class="B.A. General(Morning Shift)"> Bengali,Philosophy,  History           </option>
                <option value="English,Philosophy,  History           "class="B.A. General(Morning Shift)"> English,Philosophy,  History           </option>
                <option value="English,Pol.Sc.,     Philosophy        "class="B.A. General(Morning Shift)"> English,Pol.Sc.,     Philosophy        </option>
                <option value="Pol.Sc.,Philosophy,  Economics"class="B.A. General(Morning Shift)"> Pol.Sc.,Philosophy,  Economics          </option>
                <option value="Pol.Sc.,Philosophy,  History"class="B.A. General(Morning Shift)"> Pol.Sc.,Philosophy,  History</option>
                <option value="Bengali,History               "class="B.A. General(Day Shift)With Geography">                     Bengali,History            </option>
                <option value="Bengali,Sociology             "class="B.A. General(Day Shift)With Geography">                     Bengali,Sociology          </option>
                <option value="Bengali,Economics             "class="B.A. General(Day Shift)With Geography">                     Bengali,Economics          </option>
                <option value="Bengali,Sanskrit              "class="B.A. General(Day Shift)With Geography">                     Bengali,Sanskrit           </option>
                <option value="Bengali,Political Science     "class="B.A. General(Day Shift)With Geography">                     Bengali,Political Science  </option>
                <option value="Hindi,History                 "class="B.A. General(Day Shift)With Geography">                     Hindi,History              </option>
                <option value="Hindi,Sociology               "class="B.A. General(Day Shift)With Geography">                     Hindi,Sociology            </option>
                <option value="Hindi,Economics               "class="B.A. General(Day Shift)With Geography">                     Hindi,Economics            </option>
                <option value="Hindi,Sanskrit                "class="B.A. General(Day Shift)With Geography">                     Hindi,Sanskrit             </option>
                <option value="Hindi,Political Science       "class="B.A. General(Day Shift)With Geography">                     Hindi,Political Science    </option>
                <option value="History,Sanskrit              "class="B.A. General(Day Shift)With Geography">                     History,Sanskrit           </option>
                <option value="History,Political Science     "class="B.A. General(Day Shift)With Geography">                     History,Political Science  </option>
                <option value="Sociology,Sanskrit            "class="B.A. General(Day Shift)With Geography">                     Sociology,Sanskrit         </option>
                <option value="Sociology,Political Science   "class="B.A. General(Day Shift)With Geography">                     Sociology,Political Science</option>
                <option value="Economics,Sanskrit            "class="B.A. General(Day Shift)With Geography">                     Economics,Sanskrit         </option>
                <option value="Economics,Political Science   "class="B.A. General(Day Shift)With Geography">                     Economics,Political Science</option>
                <option value="Sanskrit,Political Science    "class="B.A. General(Day Shift)With Geography">                     Sanskrit,Political Science </option>
                <option value="History,Bengali,Sanskrit"class="B.A. General(Day Shift)">    History,Bengali,Sanskrit</option>
                <option value="History,Sanskrit,Philosophy"class="B.A. General(Day Shift)">      History,Sanskrit,Philosophy</option>
                <option value="History,Political Science,English"class="B.A. General(Day Shift)">      History,Political Science,English</option>
                <option value="History,Bengali,Political Science"class="B.A. General(Day Shift)">      History,Bengali,Political Science</option>
                <option value="History,Bengali,English"class="B.A. General(Day Shift)">      History,Bengali,English</option>
                <option value="History,Sanskrit,Bengali,"class="B.A. General(Day Shift)">      History,Sanskrit,Bengali,</option>
                <option value="History,Sanskrit,Political Science"class="B.A. General(Day Shift)">      History,Sanskrit,Political Science</option>
                <option value="History,Sanskrit,English"class="B.A. General(Day Shift)">      History,Sanskrit,English</option>
                <option value="History,Philosophy,Bengali"class="B.A. General(Day Shift)">      History,Philosophy,Bengali</option>
                <option value="History,Philosophy,Sanskrit"class="B.A. General(Day Shift)">      History,Philosophy,Sanskrit</option>
                <option value="History,Philosophy,Political Science"class="B.A. General(Day Shift)">      History,Philosophy,Political Science</option>
                <option value="History,Philosophy,English"class="B.A. General(Day Shift)">      History,Philosophy,English</option>
                <option value="History,Political Science,English"class="B.A. General(Day Shift)">      History,Political Science,English</option>
                <option value="History,Hindi,Sanskrit"class="B.A. General(Day Shift)">      History,Hindi,Sanskrit</option>
                <option value="History,Hindi,Philosophy"class="B.A. General(Day Shift)">      History,Hindi,Philosophy</option>
                <option value="History,Hindi,Political Science"class="B.A. General(Day Shift)">      History,Hindi,Political Science</option>
                <option value="History,Hindi,English"class="B.A. General(Day Shift)">      History,Hindi,English</option>
                <option value="History,Mathematics,Philosophy"class="B.A. General(Day Shift)">      History,Mathematics,Philosophy</option>
                <option value="History,Mathematics,Political Science"class="B.A. General(Day Shift)">      History,Mathematics,Political Science</option>
                <option value="History,Mathematics,English"class="B.A. General(Day Shift)">      History,Mathematics,English</option>
                <option value="Sociology,Bengali,Sanskrit"class="B.A. General(Day Shift)">      Sociology,Bengali,Sanskrit</option>
                <option value="Sociology,Sanskrit,Philosophy"class="B.A. General(Day Shift)">      Sociology,Sanskrit,Philosophy</option>
                <option value="Sociology,Philosophy,Political Science"class="B.A. General(Day Shift)">      Sociology,Philosophy,Political Science</option>
                <option value="Sociology,Political Science,English"class="B.A. General(Day Shift)">      Sociology,Political Science,English</option>
                <option value="Sociology,Bengali,Philosophy"class="B.A. General(Day Shift)">      Sociology,Bengali,Philosophy</option>
                <option value="Sociology,Bengali,Political Science"class="B.A. General(Day Shift)">      Sociology,Bengali,Political Science</option>
                <option value="Sociology,Bengali,English"class="B.A. General(Day Shift)">      Sociology,Bengali,English</option>
                <option value="Sociology,Sanskrit,Political Science"class="B.A. General(Day Shift)">      Sociology,Sanskrit,Political Science</option>
                <option value="Sociology,Sanskrit,English"class="B.A. General(Day Shift)">      Sociology,Sanskrit,English</option>
                <option value="Sociology,Philosophy,Bengali"class="B.A. General(Day Shift)">      Sociology,Philosophy,Bengali</option>
                <option value="Sociology,Hindi,Sanskrit"class="B.A. General(Day Shift)">      Sociology,Hindi,Sanskrit</option>
                <option value="Sociology,Hindi,Philosophy"class="B.A. General(Day Shift)">      Sociology,Hindi,Philosophy</option>
                <option value="Sociology,Hindi,Political Science"class="B.A. General(Day Shift)">      Sociology,Hindi,Political Science</option>
                <option value="Sociology,Hindi,English"class="B.A. General(Day Shift)">      Sociology,Hindi,English</option>
                <option value="Sociology,Mathematics,Philosophy"class="B.A. General(Day Shift)">      Sociology,Mathematics,Philosophy</option>
                <option value="Sociology,Mathematics,Political Science"class="B.A. General(Day Shift)">      Sociology,Mathematics,Political Science</option>
                <option value="Sociology,Mathematics,English"class="B.A. General(Day Shift)">      Sociology,Mathematics,English</option>
                <option value="Economics,Bengali,Sanskrit"class="B.A. General(Day Shift)">      Economics,Bengali,Sanskrit</option>
                <option value="Economics,Sanskrit,Philosophy"class="B.A. General(Day Shift)">      Economics,Sanskrit,Philosophy</option>
                <option value="Economics,Philosophy,Political Science"class="B.A. General(Day Shift)">      Economics,Philosophy,Political Science</option>
                <option value="Economics,Political Science,English"class="B.A. General(Day Shift)">      Economics,Political Science,English</option>
                <option value="Economics,Bengali,Philosophy"class="B.A. General(Day Shift)">      Economics,Bengali,Philosophy</option>
                <option value="Economics,Bengali,Political Science"class="B.A. General(Day Shift)">      Economics,Bengali,Political Science</option>
                <option value="Economics,Bengali,English"class="B.A. General(Day Shift)">      Economics,Bengali,English</option>
                <option value="Economics,Sanskrit,Political Science"class="B.A. General(Day Shift)">      Economics,Sanskrit,Political Science</option>
                <option value="Economics,Sanskrit,English"class="B.A. General(Day Shift)">      Economics,Sanskrit,English</option>
                <option value="Economics,Philosophy,Bengali"class="B.A. General(Day Shift)">      Economics,Philosophy,Bengali</option>
                <option value="Economics,Hindi,Sanskrit"class="B.A. General(Day Shift)">      Economics,Hindi,Sanskrit</option>
                <option value="Economics,Hindi,Philosophy"class="B.A. General(Day Shift)">      Economics,Hindi,Philosophy</option>
                <option value="Economics,Hindi,Political Science"class="B.A. General(Day Shift)">      Economics,Hindi,Political Science</option>
                <option value="Economics,Hindi,English"class="B.A. General(Day Shift)">      Economics,Hindi,English</option>
                <option value="Economics,Mathematics,Philosophy"class="B.A. General(Day Shift)">      Economics,Mathematics,Philosophy</option>
                <option value="Economics,Mathematics,Political Science"class="B.A. General(Day Shift)">      Economics,Mathematics,Political Science</option>
                <option value="Economics,Mathematics,English"class="B.A. General(Day Shift)">      Economics,Mathematics,English</option>
                <option value="Bengali,Sanskrit,Philosophy"class="B.A. General(Day Shift)">      Bengali,Sanskrit,Philosophy</option>
                <option value="Bengali,Philosophy,Political Science"class="B.A. General(Day Shift)">      Bengali,Philosophy,Political Science</option>
                <option value="Bengali,Political Science,English"class="B.A. General(Day Shift)">      Bengali,Political Science,English</option>
                <option value="Hindi,Sanskrit,Philosophy"class="B.A. General(Day Shift)">      Hindi,Sanskrit,Philosophy</option>
                <option value="Hindi,Philosophy,Political Science"class="B.A. General(Day Shift)">      Hindi,Philosophy,Political Science</option>
                <option value="Hindi,Political Science,English"class="B.A. General(Day Shift)">      Hindi,Political Science,English</option>
                <option value="Sanskrit,Philosophy,Political Science"class="B.A. General(Day Shift)">      Sanskrit,Philosophy,Political Science</option>
                <option value="Sanskrit,Political Science,English"class="B.A. General(Day Shift)">      Sanskrit,Political Science,English</option>
                <option value="Philosophy,Political Science,English"class="B.A. General(Day Shift)">      Philosophy,Political Science,English</option>
                <option value="Mathematics,Philosophy,Political Science"class="B.A. General(Day Shift)">      Mathematics,Philosophy,Political Science</option>
                <option value="MathematicsPolitical Science,English"class="B.A. General(Day Shift)">      MathematicsPolitical Science,English</option>
                <option value="Mathematics,History,Sociology"class="B.A. General(Day Shift)">      Mathematics,History,Sociology</option>
                <option value="Mathematics,History,Economics"class="B.A. General(Day Shift)">      Mathematics,History,Economics</option>
                <option value="Mathematics,Philosophy,English"class="B.A. General(Day Shift)">      Mathematics,Philosophy,English</option>
                <option value="Mathematics,Philosophy,Economics"class="B.A. General(Day Shift)">      Mathematics,Philosophy,Economics</option>
                <option value="Mathematics,Political Science,English"class="B.A. General(Day Shift)">      Mathematics,Political Science,English</option>
                <option value="Mathematics,English,History"class="B.A. General(Day Shift)">      Mathematics,English,History</option>
                <option class="B.Sc. General[Pure. Science]"value="Mathematics, Physics, Chemistry"			>Mathematics,Physics, Chemistry</option>
                <option class="B.Sc. General[Pure. Science]"value="Mathematics , Physics, Computer Science	">	Mathematics , Physics, Computer Science</option>
                <option class="B.Sc. General[Pure. Science]"value="Mathematics, Economics, Computer Science">			Mathematics, Economics, Computer Science</option>
                <option class="B.Sc. General[Pure. Science]"value="Mathematics, Economics, Geography	"	>		Mathematics, Economics, Geography</option>
                <option class="B.Sc. General[Pure. Science]"value="Mathematics, Economics,English		"	>	Mathematics, Economics,English</option>
                <option class="B.Sc. General[Pure. Science]"value="Mathematics, Geography, History	"		>	Mathematics, Geography, History</option>
                <option class="B.Sc. General[Pure. Science]"value="Mathematics, Geography,Sociology "		>Mathematics, Geography,Sociology </option>
                <option class="B.Sc. General[Pure. Science]"value="Mathematics, Geography, Economics">	Mathematics, Geography, Economics</option>
                <option value="Chemistry,Zoology,Botany"  class="B.Sc. General[Bio. Science]">Chemistry,Zoology,Botany</option>
                <option value="Zoology,Botany,Physiology" class="B.Sc. General[Bio. Science]">Zoology,Botany,Physiology</option>
                <option value="Buiness Thoughts,Ethics and Management, Business Laws,Financial Accounting " class= "B.Com. General">Buiness Thoughts,Ethics and Management, Business Laws,Financial Accounting</option>
                <option value="Buiness Thoughts,Ethics and Management, Business Laws,Buiness Mathematics and Statistics"class= "B.Com. General">Buiness Thoughts,Ethics and Management, Business Laws,Buiness Mathematics and Statistics</option>
                <option value="Business Laws,Financial Accounting,Business Mathematics and Statistics"class= "B.Com. General">Business Laws,Financial Accounting,Business Mathematics and Statistics</option>
            </select>


        </td>
        <td class="tg-30rh">
            <input type="text" name="gtran_id[]" id="gtranid-0" onfocus=""/>
        </td>
        <td class="tg-30rh">
            <input type="text" name="gtran_date[]" class="datepicker"/>
        </td>
        <td><a href="javascript:void(0);" class="addCF1">Add</a>
        </td>
    </tr>
</table>

    <input type="submit" name="submit" value="submit">

</form>

<script>
    var x = 1;

    $(document).ready(function() {
        $(".addCF").click(function() {
            $("#custom-fields").append([
                '<tr>',
                '<td class="tg-30rh">',
                '<select name ="hons[]" id="' + 'select1-' + x + '">',
                '<option value="Hindi"  >Hindi  </option>',
                '<option value="Bengali">Bengali</option>',
                '<option value="English">English</option>',
                '<option value="History">History</option>',
                '<option value="Political Science">Political Science</option>',
                '<option value="Philosophy">Philosophy</option>',
                '<option value="Sanskrit">Sanskrit</option>',
                '<option value="Geography(Arts)">Geography (Arts)</option>',
                '<option value="Economics(Arts)">Economics (Arts)</option>',
                '<option value="Physics">Physics</option>',
                '<option value="Chemistry">Chemistry</option>',
                '<option value="Mathematics">Mathematics</option>',
                '<option value="Zoology">Zoology</option>',
                '<option value="Botany">Botany</option>',
                '<option value="Geography(Science)">Geography (Science)</option>',
                '<option value="Economics(Science)">Economics (Science)</option>',
                '<option value="Accountancy">Accountancy</option>',
                '</select> ',
                '<!--select id="ddl2" name="session[]"></select-->',
                '</td>',
                '<td class="tg-30rh">',
                '<select name="sub1[]" id="select2-' + x + '"></select>',
                '</td>',
                '<td class="tg-30rh">',
                '<select name="sub2[]" id="select3-' + x + '"></select>',
                '</td>',
                '<td class="tg-30rh">',
                '<select name="sub3[]" id="select4-' + x + '"></select>',
                '</td>',
                '<td class="tg-30rh">',
                '<select name="sub4[]" id="select5-' + x + '"></select>',
                '</td>',
                '<td class="tg-30rh">',
                '<input type="text" name="tran_id[]" id="tranid-' + x + '"onfocus="checkDuplicatesHons('+x+')""/>',
                '</td>',
                '<td class ="tg-30rh">',
                '<input type="text" name="tran_date[]" class="datepicker"/>',
                '</td>',
                '<td>',
                '<a href="javascript:void(0);" class="remCF">Remove</a>',
                '</td>',
                '</tr>'
            ].join(''));

            $('#select1-' + x).trigger('change');

            x++;
        });
        $("#custom-fields").on('click', '.remCF', function() {
            $(this).parent().parent().remove();
        });
    });


    var jsonObj = {"Hindi":[["History","Sociology","Economics",""],"Philosophy","Political Science","English"],"Bengali":[["History","Sociology",""],"Sanskrit","Philosophy","Political Science"],"English":[["History","Sociology","Economics",""],"Philosophy","Political Science",["Bengali","Hindi",""]],"History":["Philosophy"," Political Science",["Bengali"," Hindi",""]," English"],"Political Science":[[" History "," Sociology"," Economics",""],"Philosophy",["Bengali "," Hindi",""],"English"],"Philosophy":[[" History"," Sociology",""]," Sanskrit","Political Science",["Bengali","Hindi",""]],"Sanskrit":[["History","Sociology",""],"Philosophy","Bengali","English"],"Geography(Arts)":[["History "," Sociology",""],"Political Science",["Bengali","Hindi",""],"Sanskrit"],"Economics(Arts)":[["Bengali","Hindi",""],"Political Science","Philosophy","English"],"Physics":["Mathematics",["Chemistry"," Computer Science",""],"",""],"Chemistry":["Mathematics","Physics","",""],"Mathematics":[["Physics","Economics",""],["Chemistry(With Physics)","Computer Science(With Physics)",""],"Philosophy(With Eco/Pol.Sc.)","Political Science(With Eco/Phil.)"],"Zoology":["Botany",["Chemistry "," Physiology",""],"",""],"Botany":["Zoology",["Chemistry","Physiology",""],"",""],"Geography(Science)":["Mathematics","Economics","",""],"Economics(Science)":["Mathematics",["Computer Science","Political Science",""],"",""],"Accountancy":[["Business Thoughts","Ethics and Management"],"Business Laws","",""]};

    function updateSelect(e) {
        var targetId = e.target.id;
        var id = parseInt(targetId.match(/[\w\d]+\-(\d+)$/)[1], 10);

        var getOpts = function(raw) {
            raw = Array.isArray(raw) ? raw : [raw, ''];

            return raw.map(function(obj) {
                return new Option(obj, obj);
            });
        };

        var newKey = $('#select1-' + id).val();

        var mappings = [2, 3, 4, 5].reduce(function(map, val, index) {
            var key = '#select' + val + '-' + id;
            map[key] = index;
            return map;
        }, {});

        var selected = jsonObj[newKey];

        $.each(mappings, function (selector, index) {
            $(selector).empty().append(getOpts(selected[index]));
        });
    }

    $(document).ready(function() {
        $('#custom-fields').on('change', 'select[id^="select1-"]', updateSelect);
        $('#select1-0').trigger('change'); // For initial page load.
    });





</script>

<script>
    function checkDuplicates() {
        var selects = document.getElementsByTagName("select"),
            i,
            current,
            selected = {};
        for(i = 8; i <= 11; i++){
            current = selects[i].selectedIndex;
            if (selected[current]) {
                alert("Each Subject should be selected once.");
                return false;
            } else
                selected[current] = true;
        }
        return true;
    }

    function checkDuplicatesHons(id) {
        var k=1+5*parseInt(id);
        //alert(k);
        var selects = document.getElementsByTagName("select"),
            i,
            current,
            selected = {},flag=0;

        for(i = k; i <= k+3; i++){
            //current = selects[i].selectedIndex;

            current = selects[i].options[selects[i].selectedIndex].value;//for selecting actual value
            if(current=="")
                flag=flag+1;


            // alert(current);
            //if (selected[current]) {
            // alert("Each Subject should be selected once.");
            // return false;
            //  } else
            // selected[current] = true;
        }
        if(flag==2)
            return true;
        else
        {  alert("Select two subject,Leave 2 blank");
            return false;}
    }


</script>
<script>
    // -----------------Dynamically add row in general selection '''
    var m = 1;

    $(document).ready(function() {
        $(".addCF1").click(function() {
            $("#custom-fields1").append([
                '<tr>',
                '<td class="tg-30rh">',


                ' <select id ="general_stream-'+m+'" name="general-stream[]"  onclick="">',
                ' <option value="B.A. General(Day Shift)" >B.A. General(Day Shift)</option>',
                ' <option value="B.A. General(Day Shift)With Geography" >B.A. General(Day Shift)With Geography</option>',
                '<option value="B.A. General(Morning Shift)"> B.A. General(Morning Shift)</option>',
                '<option value="B.Sc. General[Pure. Science]">B.Sc. General [Pure. Science]</option>',
                '<option value="B.Sc. General[Bio. Science]">B.Sc. General[Bio. Science]</option>',
                '<option value="B.Com. General"> B.Com. General</option>',
                '</select>',
                '</td>',
                '<td class="tg-30rh">',
                '<select name="GeneralSub[]" id= "gen_select-'+m+'" >',
                '<option value="Bengali,English,Pol.Sc." class="B.A. General(Morning Shift)"> Bengali,English,     Pol.Sc. </option>',
                '<option value="Bengali,English,Physical Education " class="B.A. General(Morning Shift)"> Bengali,English,     Physical Education </option>',
                '<option value="Bengali,English,Philosophy"  class="B.A. General(Morning Shift)"> Bengali,English,     Philosophy     </option>       ' ,
                '<option value="Bengali,English,History" class="B.A. General(Morning Shift)"> Bengali,English,     History    </option>      ' ,
                '<option value="Bengali,English,Physical Education" class="B.A. General(Morning Shift)"> Bengali,English,     Physical Education     </option> ',
                '<option value="Bengali,English,Economics" class="B.A. General(Morning Shift)"> Bengali,English,     Economics            </option>',
                '<option value="Bengali,English,Physical Education" class="B.A. General(Morning Shift)"> Bengali,English,     Physical Education    </option> ',
                '<option value="Bengali,Pol.Sc.,Philosophy" class="B.A. General(Morning Shift)"> Bengali,Pol.Sc.,     Philosophy         </option>  ',
                '<option value="Bengali,Pol.Sc.,History" class="B.A. General(Morning Shift)"> Bengali,Pol.Sc.,     History            </option> ',
                '<option value="Bengali,Pol.Sc.,Physical Education" class="B.A. General(Morning Shift)"> Bengali,Pol.Sc.,     Physical Education</option>    ',
                '<option value="Bengali Pol.Sc.,Economics "class="B.A. General(Morning Shift)"> Bengali Pol.Sc.,     Economics        </option>     ',
                '<option value="Bengali Pol.Sc.,Physical Education "class="B.A. General(Morning Shift)"> Bengali Pol.Sc.,     Physical Education  </option>   ',
                '<option value="Bengali,Philosophy,Economics  "class="B.A. General(Morning Shift)"> Bengali,Philosophy,  Economics        </option>  ',
                '<option value="English,Philosophy,Economics  "class="B.A. General(Morning Shift)"> English,Philosophy,  Economics         </option>  ',
                '<option value="English,Pol.Sc.,History  "class="B.A. General(Morning Shift)"> English,Pol.Sc.,     History           </option>   ',
                '<option value="English,Pol.Sc.,  Physical Education " class="B.A. General(Morning Shift)"> English,Pol.Sc.,     Physical Education </option>   ',
                '<option value="English,Pol.Sc.,Economics" class="B.A. General(Morning Shift)"> English,Pol.Sc.,     Economics         </option>',
                '<option value="English,Pol.Sc.,Physical Education" class="B.A. General(Morning Shift)"> English,Pol.Sc.,     Physical Education </option>   ',
                '<option value="Bengali,Philosophy,  History" class="B.A. General(Morning Shift)"> Bengali,Philosophy,  History           </option>  ',
                '<option value="English,Philosophy,  History  " class="B.A. General(Morning Shift)"> English,Philosophy,  History           </option> ',
                '<option value="English,Pol.Sc.,     Philosophy " class="B.A. General(Morning Shift)"> English,Pol.Sc.,     Philosophy        </option> ',
                '<option value="Pol.Sc.,Philosophy,  Economics  " class="B.A. General(Morning Shift)"> Pol.Sc.,Philosophy,  Economics          </option> ',
                '<option value="Pol.Sc.,Philosophy,  History " class="B.A. General(Morning Shift)"> Pol.Sc.,Philosophy,  History</option>  ',
                '<option value="Bengali,History               "class="B.A. General(Day Shift)With Geography">                     Bengali,History            </option>',
                '<option value="Bengali,Sociology             "class="B.A. General(Day Shift)With Geography">                     Bengali,Sociology          </option>',
                '<option value="Bengali,Economics             "class="B.A. General(Day Shift)With Geography">                     Bengali,Economics          </option>',
                '<option value="Bengali,Sanskrit              "class="B.A. General(Day Shift)With Geography">                     Bengali,Sanskrit           </option>',
                '<option value="Bengali,Political Science     "class="B.A. General(Day Shift)With Geography">                     Bengali,Political Science  </option>',
                '<option value="Hindi,History                 "class="B.A. General(Day Shift)With Geography">                     Hindi,History              </option>',
                '<option value="Hindi,Sociology               "class="B.A. General(Day Shift)With Geography">                     Hindi,Sociology            </option>',
                '<option value="Hindi,Economics               "class="B.A. General(Day Shift)With Geography">                     Hindi,Economics            </option>',
                '<option value="Hindi,Sanskrit                "class="B.A. General(Day Shift)With Geography">                     Hindi,Sanskrit             </option>',
                '<option value="Hindi,Political Science       "class="B.A. General(Day Shift)With Geography">                     Hindi,Political Science    </option>',
                '<option value="History,Sanskrit              "class="B.A. General(Day Shift)With Geography">                     History,Sanskrit           </option>',
                '<option value="History,Political Science     "class="B.A. General(Day Shift)With Geography">                     History,Political Science  </option>',
                '<option value="Sociology,Sanskrit            "class="B.A. General(Day Shift)With Geography">                     Sociology,Sanskrit         </option>',
                '<option value="Sociology,Political Science   "class="B.A. General(Day Shift)With Geography">                     Sociology,Political Science</option>',
                '<option value="Economics,Sanskrit            "class="B.A. General(Day Shift)With Geography">                     Economics,Sanskrit         </option>',
                '<option value="Economics,Political Science   "class="B.A. General(Day Shift)With Geography">                     Economics,Political Science</option>',
                '<option value="Sanskrit,Political Science    "class="B.A. General(Day Shift)With Geography">                     Sanskrit,Political Science </option>',
                '<option value="History,Bengali,Sanskrit"class="B.A. General(Day Shift)">    History,Bengali,Sanskrit</option>',
                '<option value="History,Sanskrit,Philosophy"class="B.A. General(Day Shift)">      History,Sanskrit,Philosophy</option>',
                '<option value="History,Political Science,English"class="B.A. General(Day Shift)">      History,Political Science,English</option>',
                '<option value="History,Bengali,Political Science"class="B.A. General(Day Shift)">      History,Bengali,Political Science</option>',
                '<option value="History,Bengali,English"class="B.A. General(Day Shift)">      History,Bengali,English</option>',
                '<option value="History,Sanskrit,Bengali,"class="B.A. General(Day Shift)">      History,Sanskrit,Bengali,</option>',
                '<option value="History,Sanskrit,Political Science"class="B.A. General(Day Shift)">      History,Sanskrit,Political Science</option>',
                '<option value="History,Sanskrit,English"class="B.A. General(Day Shift)">      History,Sanskrit,English</option>',
                '<option value="History,Philosophy,Bengali"class="B.A. General(Day Shift)">      History,Philosophy,Bengali</option>',
                '<option value="History,Philosophy,Sanskrit"class="B.A. General(Day Shift)">      History,Philosophy,Sanskrit</option>',
                '<option value="History,Philosophy,Political Science"class="B.A. General(Day Shift)">      History,Philosophy,Political Science</option>',
                '<option value="History,Philosophy,English"class="B.A. General(Day Shift)">      History,Philosophy,English</option>',
                '<option value="History,Political Science,English"class="B.A. General(Day Shift)">      History,Political Science,English</option>',
                '<option value="History,Hindi,Sanskrit"class="B.A. General(Day Shift)">      History,Hindi,Sanskrit</option>',
                '<option value="History,Hindi,Philosophy"class="B.A. General(Day Shift)">      History,Hindi,Philosophy</option>',
                '<option value="History,Hindi,Political Science"class="B.A. General(Day Shift)">      History,Hindi,Political Science</option>',
                '<option value="History,Hindi,English"class="B.A. General(Day Shift)">      History,Hindi,English</option>',
                '<option value="History,Mathematics,Philosophy"class="B.A. General(Day Shift)">      History,Mathematics,Philosophy</option>',
                '<option value="History,Mathematics,Political Science"class="B.A. General(Day Shift)">      History,Mathematics,Political Science</option>',
                '<option value="History,Mathematics,English"class="B.A. General(Day Shift)">      History,Mathematics,English</option>',
                '<option value="Sociology,Bengali,Sanskrit"class="B.A. General(Day Shift)">      Sociology,Bengali,Sanskrit</option>',
                '<option value="Sociology,Sanskrit,Philosophy"class="B.A. General(Day Shift)">      Sociology,Sanskrit,Philosophy</option>',
                '<option value="Sociology,Philosophy,Political Science"class="B.A. General(Day Shift)">      Sociology,Philosophy,Political Science</option>',
                '<option value="Sociology,Political Science,English"class="B.A. General(Day Shift)">      Sociology,Political Science,English</option>',
                '<option value="Sociology,Bengali,Philosophy"class="B.A. General(Day Shift)">      Sociology,Bengali,Philosophy</option>',
                '<option value="Sociology,Bengali,Political Science"class="B.A. General(Day Shift)">      Sociology,Bengali,Political Science</option>',
                '<option value="Sociology,Bengali,English"class="B.A. General(Day Shift)">      Sociology,Bengali,English</option>',
                '<option value="Sociology,Sanskrit,Political Science"class="B.A. General(Day Shift)">      Sociology,Sanskrit,Political Science</option>',
                '<option value="Sociology,Sanskrit,English"class="B.A. General(Day Shift)">      Sociology,Sanskrit,English</option>',
                '<option value="Sociology,Philosophy,Bengali"class="B.A. General(Day Shift)">      Sociology,Philosophy,Bengali</option>',
                '<option value="Sociology,Hindi,Sanskrit"class="B.A. General(Day Shift)">      Sociology,Hindi,Sanskrit</option>',
                '<option value="Sociology,Hindi,Philosophy"class="B.A. General(Day Shift)">      Sociology,Hindi,Philosophy</option>',
                '<option value="Sociology,Hindi,Political Science"class="B.A. General(Day Shift)">      Sociology,Hindi,Political Science</option>',
                '<option value="Sociology,Hindi,English"class="B.A. General(Day Shift)">      Sociology,Hindi,English</option>',
                '<option value="Sociology,Mathematics,Philosophy"class="B.A. General(Day Shift)">      Sociology,Mathematics,Philosophy</option>',
                '<option value="Sociology,Mathematics,Political Science"class="B.A. General(Day Shift)">      Sociology,Mathematics,Political Science</option>',
                '<option value="Sociology,Mathematics,English"class="B.A. General(Day Shift)">      Sociology,Mathematics,English</option>',
                '<option value="Economics,Bengali,Sanskrit"class="B.A. General(Day Shift)">      Economics,Bengali,Sanskrit</option>',
                '<option value="Economics,Sanskrit,Philosophy"class="B.A. General(Day Shift)">      Economics,Sanskrit,Philosophy</option>',
                '<option value="Economics,Philosophy,Political Science"class="B.A. General(Day Shift)">      Economics,Philosophy,Political Science</option>',
                '<option value="Economics,Political Science,English"class="B.A. General(Day Shift)">      Economics,Political Science,English</option>',
                '<option value="Economics,Bengali,Philosophy"class="B.A. General(Day Shift)">      Economics,Bengali,Philosophy</option>',
                '<option value="Economics,Bengali,Political Science"class="B.A. General(Day Shift)">      Economics,Bengali,Political Science</option>',
                '<option value="Economics,Bengali,English"class="B.A. General(Day Shift)">      Economics,Bengali,English</option>',
                '<option value="Economics,Sanskrit,Political Science"class="B.A. General(Day Shift)">      Economics,Sanskrit,Political Science</option>',
                '<option value="Economics,Sanskrit,English"class="B.A. General(Day Shift)">      Economics,Sanskrit,English</option>',
                '<option value="Economics,Philosophy,Bengali"class="B.A. General(Day Shift)">      Economics,Philosophy,Bengali</option>',
                '<option value="Economics,Hindi,Sanskrit"class="B.A. General(Day Shift)">      Economics,Hindi,Sanskrit</option>',
                '<option value="Economics,Hindi,Philosophy"class="B.A. General(Day Shift)">      Economics,Hindi,Philosophy</option>',
                '<option value="Economics,Hindi,Political Science"class="B.A. General(Day Shift)">      Economics,Hindi,Political Science</option>',
                '<option value="Economics,Hindi,English"class="B.A. General(Day Shift)">      Economics,Hindi,English</option>',
                '<option value="Economics,Mathematics,Philosophy"class="B.A. General(Day Shift)">      Economics,Mathematics,Philosophy</option>',
                '<option value="Economics,Mathematics,Political Science"class="B.A. General(Day Shift)">      Economics,Mathematics,Political Science</option>',
                '<option value="Economics,Mathematics,English"class="B.A. General(Day Shift)">      Economics,Mathematics,English</option>',
                '<option value="Bengali,Sanskrit,Philosophy"class="B.A. General(Day Shift)">      Bengali,Sanskrit,Philosophy</option>',
                '<option value="Bengali,Philosophy,Political Science"class="B.A. General(Day Shift)">      Bengali,Philosophy,Political Science</option>',
                '<option value="Bengali,Political Science,English"class="B.A. General(Day Shift)">      Bengali,Political Science,English</option>',
                '<option value="Hindi,Sanskrit,Philosophy"class="B.A. General(Day Shift)">      Hindi,Sanskrit,Philosophy</option>',
                '<option value="Hindi,Philosophy,Political Science"class="B.A. General(Day Shift)">      Hindi,Philosophy,Political Science</option>',
                '<option value="Hindi,Political Science,English"class="B.A. General(Day Shift)">      Hindi,Political Science,English</option>',
                '<option value="Sanskrit,Philosophy,Political Science"class="B.A. General(Day Shift)">      Sanskrit,Philosophy,Political Science</option>',
                '<option value="Sanskrit,Political Science,English"class="B.A. General(Day Shift)">      Sanskrit,Political Science,English</option>',
                '<option value="Philosophy,Political Science,English"class="B.A. General(Day Shift)">      Philosophy,Political Science,English</option>',
                '<option value="Mathematics,Philosophy,Political Science"class="B.A. General(Day Shift)">      Mathematics,Philosophy,Political Science</option>',
                '<option value="MathematicsPolitical Science,English"class="B.A. General(Day Shift)">      MathematicsPolitical Science,English</option>',
                '<option value="Mathematics,History,Sociology"class="B.A. General(Day Shift)">      Mathematics,History,Sociology</option>',
                '<option value="Mathematics,History,Economics"class="B.A. General(Day Shift)">      Mathematics,History,Economics</option>',
                '<option value="Mathematics,Philosophy,English"class="B.A. General(Day Shift)">      Mathematics,Philosophy,English</option>',
                '<option value="Mathematics,Philosophy,Economics"class="B.A. General(Day Shift)">      Mathematics,Philosophy,Economics</option>',
                '<option value="Mathematics,Political Science,English"class="B.A. General(Day Shift)">      Mathematics,Political Science,English</option>',
                '<option value="Mathematics,English,History"class="B.A. General(Day Shift)">      Mathematics,English,History</option>',
                '<option class="B.Sc. General[Pure. Science]"value="Mathematics, Physics, Chemistry"	>Mathematics,Physics, Chemistry</option>',
                '<option class="B.Sc. General[Pure. Science]"value="Mathematics , Physics, Computer Science"	>	Mathematics , Physics, Computer Science</option>',
                '<option class="B.Sc. General[Pure. Science]"value="Mathematics, Economics, Computer Science">			Mathematics, Economics, Computer Science</option>',
                '<option class="B.Sc. General[Pure. Science]"value="Mathematics, Economics, Geography	"	>		Mathematics, Economics, Geography</option>',
                '<option class="B.Sc. General[Pure. Science]"value="Mathematics, Economics,English	">	Mathematics, Economics,English</option>',
                '<option class="B.Sc. General[Pure. Science]"value="Mathematics, Geography, History	">	Mathematics, Geography, History</option>',
                ' <option class="B.Sc. General[Pure. Science]"value="Mathematics, Geography,Sociology 	">			Mathematics, Geography,Sociology 	</option>	',
                '<option class="B.Sc. General[Pure. Science]"value="Mathematics, Geography, Economics	"	>	Mathematics, Geography, Economics</option>',
                '<option value="Chemistry,Zoology,Botany" class="B.Sc. General[Bio. Science]">Chemistry,Zoology,Botany</option>',
                '<option value="Zoology,Botany,Physiology" class="B.Sc. General[Bio. Science]">Zoology,Botany,Physiology</option>',
                '<option value="Buiness Thoughts,Ethics and Management, Business Laws,Financial Accounting " class= "B.Com. General">Buiness Thoughts,Ethics and Management, Business Laws,Financial Accounting</option>',
                '<option value="Buiness Thoughts,Ethics and Management, Business Laws,Buiness Mathematics and Statistics"class= "B.Com. General">Buiness Thoughts,Ethics and Management, Business Laws,Buiness Mathematics and Statistics</option>',
                '<option value="Business Laws,Financial Accounting,Business Mathematics and Statistics"class= "B.Com. General">Business Laws,Financial Accounting,Business Mathematics and Statistics</option>',
                '</select>',
                '</td>',
                '<td class="tg-30rh">',
                ' <input type="text" name="gtran_id[]" id="gtranid-'+m+'" onfocus=""/>',
                '</td>',
                '<td class="tg-30rh">',
                ' <input type="text" name="gtran_date[]"class="datepicker" />',
                '</td>',
                '<td><a href="javascript:void(0);" class="remCF1">Remove</a>',
                '</td>',
                '</tr>',
            ].join(''));

            $('#gen_select-'+m).chained('#general_stream-'+m);

            m++;
        });
        $("#custom-fields1").on('click', '.remCF1', function() {
            $(this).parent().parent().remove();
        });
        $('#gen_select-0').chained('#general_stream-0');
    });

    //$(function() {
    //$('select[name="general_stream[]"]').each(function() {
    //  var id = this.getAttribute('id');
    // $('#gen_select-'+id.substr(15,1)).chained('#'+id);
    //});
    //});



</script>
<script>
/*$(function(){

$('input').change(function() {

var $current = $(this);

$('input').each(function() {
if ($(this).val() == $current.val() && $(this).attr('id') != $current.attr('id'))
{
alert('duplicate found!');
}

});
});
});*/
function inputsHaveDuplicateValues() {
    var hasDuplicates = false;
    $('input').each(function () {
        var $inputsWithSameValue = $('input[value=' + $(this).val() + ']');
        hasDuplicates = $inputsWithSameValue.length > 1);
        //This will break out of the each loop if duplicates have been found.
        return hasDuplicates;
    });
    return hasDuplicates;
}

</scrip>
</body>
</html>


