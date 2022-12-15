<!DOCTYPE html>
<html>
<head>
    <title></title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <style type="text/css">

        .tithead{
            font-size: 40px;
            color: green;
        }
        
        table thead tr th label span{
            color: black;
            font-size: 20px;
        }
        table tbody tr td label span{
            color: black;
            font-size: 20px;
        }
    </style>

</head>
<body>
<div class="container">
    <div class="col s12 tithead">
        <center>Auto Search in Laravel Using <span style="color:red" >Material css Autocomplete</span>
        </center>
    </div>
    <div class="row" style="padding-top:80px">

        <div class="col s8" >
            <table>
                <thead>
                    <tr>
                        <th>
                            <label>                          
                            <span>Customer name</span>
                            </label>
                        </th>
                        <th>
                            <div class="input-field">
                                <input type="text" id="searchhere_id" placeholder="Search" />
                            </div>
                        </th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>
                            <label>
                                <span>customer code</span>
                            </label>
                        </td>
                        <td>
                            <input type="text" id="cust_code_id"/>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>
                                <span>customer country</span>
                            </label>
                        </td>
                        <td>
                            <input type="text" id="cust_cuntry_id"/>
                        </td>
                    </tr>
                
                </tbody>
            </table>
        </div>
       
    </div>

    
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        console.log('test');
        $.ajax({
            type:'get',
            url:'{!!URL::to('findCustomers')!!}',
            success:function(response){
                console.log(response);
                //material css
                //convert array to object
                var custArray = response;
                var dataCust = {};
                var dataCust2 = {};

                for(var i=0; i < custArray.length; i++){
                    dataCust[custArray[i].CUST_NAME] = null;
                    dataCust2[custArray[i].CUST_NAME] = custArray[i];
                }
                console.log("dataCust2");
                console.log(dataCust2);
                

                //convert end

                $('input#searchhere_id').autocomplete({
                    data: dataCust,
                    onAutocomplete: function(reqdata){
                        console.log(reqdata);
                        $('#cust_code_id').val(dataCust2[reqdata]['CUST_CODE']);
                        $('#cust_country_id').val(dataCust2[reqdata]['CUST_COUNTRY']);
                    }

                })
            }
        })
    });
</script>

</body>
</html>

